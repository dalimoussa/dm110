#!/usr/bin/perl

# RES FORM Ver1.1 ==================================
# 改 sylph+ Ver0.03
# 
# 株式会社メディアボックス
# このスクリプトの無断配布は禁止します。
# 配布しない限り、改造、設置代行は自由です。
# 
# info@dm110.jp
# http://www.dm110.jp
# 
# ===============================================================================
# 初期設定
# ===============================================================================

# 日本語コードjcode.plのURL
require './jcode.pl';

# このperlファイルのURL
$main_url = "https://www.dm110.jp/cgi-bin/form/form.cgi";

# 管理者パスワード
$pass = 'abc0123';

# 画面の色や背景の設定 (BODYタグ HTML書式)
$body = '<body bgcolor="#FFFFFF" text="#000000">';

# プログラムのタイトル
$main_title = 'レスポンス付きフォームメール' ;

# 送信確認フォームテーブルの枠線の色
# サンプルでは#000000(黒)
$color1 = '#000000';

# テーブル内の色1
# サンプルでは#FFFFCC(薄黄色)
# この色を指定しないと、テーブルが$color1で指定した色で塗りつぶされます

$color2 = '#FFFFCC';

#テーブル内の色2
# サンプルでは#FFFFFF(白)
# この色を指定しないと、テーブルが$color1で指定した色で塗りつぶされます

$color3 = '#FFFFFF';

# グループ設定(管理モードで使用)
# 管理画面で使用するので、グループ分けの不要な人は、｢商品｣
# とか、一つだけ適当な文字を入れてください。
# ユーザーには見えません。
# 一つだけのサンプル
# @id_array_1 = ( 'xxxx');
# グループを設定しないときは、
# @id_array_1 = ( '商品');

@id_array_1 = (
	'ぬいぐるみ',
	'雑貨',
	'洋服',
	'和服',
	'おもちゃ'
);

# IDに割り当てる文字列
# グループを設定しないときは
# @id_array_2 = ( A );
# とする

@id_array_2 = ( A..E );

# 一つのカテゴリに割り当てる数字。例では20個まで(管理モードで使用)
# 仮に100個にしたい場合は
# @id_array_3 = (1..100);
# とする。(こんなにいらないと思うけど･･･)
# 意味がよくわからない場合は、このまま設定してください。

@id_array_3 = (1..20);

# イメージ画像の入っているディレクトリへのパス

$dir = './image';

# メール返信用管理データ保存ディレクトリへのパス
$dir3 = './ad_data';

#-----[ sylph+ 二重投稿を何秒前まで調査するか？ ]
$time_check = 60;
#
#-----[ sylph+ 送信データ、保存ディレクトリ ]
$dir4 = './send_data';
#
#-----[ sylph+ 送信データ保存、壱ファイルあたりの最大数 ]
$log_max = 100;
#
#-----[ sylph+ 送信データ保存、CSV の区切り文字 ]
$log_csv = ",";	# 項目区切り
$log_dat = "=";	# データ区切り
#
#-----[ sylph+ ロック関数 ]
$lockfile = './lock/form.lock';	# ファイル名 (呼び出しスクリプト固有の名前)
$waitmin = 1;				# ロックが長いと判定する時間(分)
#

# =====================================================================

# フォントのサイズ
$font_size = '10pt';

# リンク色(スタイルシート）
$link_0 = '#0000ff';

# マウスが触れたときのリンク色(スタイルシート）
$link_1 = '#ff00ff';

# =====================================================================

# SENDMAILの設定
$sendmail = '/usr/sbin/sendmail';

# ヘッダーのHTML============================================================

$head =<<'EOF';

　　　　　　　　DM発送代行センター

EOF

# フッターのhtml=======================================================

$foot =<<'EOF';

<table align=center>
<tr valign="center"> 
<td colspan="2" height="1"> 
<div align="center">
<font size="2">メディアボックス　OGIPOGI 　E-mail: <a href="mailto:dmh@dm110.jp"><i>info@dm110.jp</i></a></font><br>
<font size="2">Copyright 2000 Media Box All Rights Reserved.</font><br>
<span style="font-size: x-small;">edit by <a href="http://www.dm110.jp/" style="font-style: italic;">
</div>
</td>
</tr>
</table>

EOF
# ===============================================================================
# 初期設定ここまで
# ===============================================================================

# 日付を取得
# $date_nowには定型化された日付表示が
# $data_numには日付から得られる数値が格納される
# (2000年問題対応)
($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime(time);
if ($year > 50) {$year += 1900 ;} else{$year += 2000 ;}
@wday_array = ('日','月','火','水','木','金','土');
$date_now = sprintf("%04d年%02d月%02d日（%s）%02d時%02d分%02d秒",$year,$mon +1,$mday,$wday_array[$wday],$hour,$min,$sec);
#$date_num = sprintf("%04d%02d%02d%02d%02d%02d",$year,$mon +1,$mday,$hour,$min,$sec);
$date_num = sprintf("d%d%02d%02d%02d",$mon +1,$mday,$hour,$min,$sec);

# リモートホストを取得
$addr = $ENV{'REMOTE_ADDR'};
$host = $ENV{'REMOTE_HOST'};
if ($host eq $addr) { $host = gethostbyaddr(pack('C4',split(/\./,$host)),2) || $addr; }

# フォームからのデータを取得

if ($ENV{'REQUEST_METHOD'} eq "POST") { read(STDIN,$buffer,$ENV{'CONTENT_LENGTH'}); }
else { $buffer = $ENV{'QUERY_STRING'}; }

if ($buffer eq "") { &error('エラー','使い方が間違っています.'); }
@pairs = split(/&/,$buffer);

# フォームからのデータを連想配列に格納
foreach $pair (@pairs)
{
	($name, $value) = split(/=/, $pair);
	$name =~ tr/+/ /;
	$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
	$value =~ tr/+/ /;
	$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;

#-----[ sylph+ 半角カタカナを全角化 ]
&jcode'h2z_sjis(*name);
&jcode'h2z_sjis(*value);
#

	&jcode'convert(*name,'sjis');
	&jcode'convert(*value,'sjis');

	# 入力データのチェック
	# タグが入力されていれば、それを無効にする。&ltなどに置き換え表示してる
	$value =~ s/</&lt;/g;
	$value =~ s/>/&gt;/g;
	# 区切り文字の”,”があれば”，”に変換
	$value =~ s/\,/，/g;
	# 改行コードを<br>に変換(上からWin、Mac、Unix用の処理)
	$value =~ s/\r\n/<br>/g;
	$value =~ s/\r/<br>/g;
	$value =~ s/\n/<br>/g;

    if ($name =~ /^email/i || $name =~ /^e\-mail/i) {

			$value =~ s/　/ /g;
			if ($value =~ / / || $value =~ /;/) { $value = ""; }
			if (!($value =~ /(.*)\@(.*)\.(.*)/)) { $value = ""; }

			$email = $value;
		}

	# 連想配列に格納
	$FORM{$name} = $value;
	$FORM{$value} = $name;

    push ( @data_n, $name);
    push ( @data_v, $value);

}

if ( $FORM{'mode'} eq 'regist' ) { &regist; }
elsif ( $FORM{'mode'} eq 'regist2' ) { &regist2; }
elsif ( $FORM{'mode'} eq 'sendmail' ) { &sendmail; }
elsif ( $FORM{'mode'} eq 'view' ) { &view; }
elsif ( $FORM{'mode'} eq 'admin') { &admin; }
elsif ( $FORM{'mode'} eq 'admin_2') { &admin_2; }
elsif ( $FORM{'mode'} eq 'ad_regist_1') { &ad_regist_1; }
elsif ( $FORM{'mode'} eq 'mail_edit_1') { &mail_edit_1; }
elsif ( $FORM{'mode'} eq 'mail_edit_2') { &mail_edit_2; }
elsif ( $FORM{'mode'} eq 'ad_edit_1') { &ad_edit_1; }
elsif ( $FORM{'mode'} eq 'ad_del_1') { &ad_del_1; }
elsif ( $FORM{'mode'} eq 'mail_edit_regist') { &mail_edit_regist; }
elsif ( $FORM{'mode'} eq 'mail_edit_regist_2') { &mail_edit_regist_2; }
elsif ( $FORM{'mode'} eq 'mail_edit_view') { &mail_edit_view; }
else { &error('エラー','直接起動はできません');}


# 送信確認画面 ===================================================================

sub view {

    $file_honbun = "$dir3/$FORM{'id'}.cgi";
    open (IN,"$file_honbun") || &error('オープンエラー','本文設定がされていません。');
    @LINES = <IN>;
    close (IN);
        ($subject,$up,$down,$syomei) = split(/\,/, $LINES[0]);

    $file_settei = "$dir3/$FORM{'id'}_2.cgi";
    open (IN,"$file_settei") || &error('オープンエラー','送信設定がされていません。');
    @LINES_2 = <IN>;
    close (IN);
        ($ad_email,$ad_ref,$ad_hissu) = split(/\,/, $LINES_2[0]);

    print "Content-type: text/html\n\n";
    print "<html><head><title>$subject</title>\n";
    &style;
    print <<"EOF";
    <SCRIPT Language="JavaScript">
    <!--
    function PageBack() { history.back();}
    //-->
    </SCRIPT>
EOF

    print "</head>$body\n";
    print "$head<p>\n";
    print "<table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>\n";
    print "<table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>\n";
    print "<tr bgcolor=$color2><td align=center>\n";
    print "$subject\n";
    print "</td></tr></table></td></tr></table><p>\n";
    print "<form method=post action=form.cgi>\n";
    print "<input type=hidden name=mode value=sendmail>\n";
    print "<input type=hidden name=id value=$FORM{'id'}>\n";
    print "<input type=hidden name=subject value=$subject>\n";
    print "<input type=hidden name=ad_ref value=\"$ad_ref\">\n";
    print "<table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>\n";
    print "<table border=0 width=100% cellpadding=5 cellspacing=1 cellpadding=3>\n";
    print "<tr bgcolor=$color2><td><b>項目</b></td><td><b>内容</b></td></tr>\n";

    $count_name = @data_n;
    foreach ( 0.. $count_name-3 ) {
        print "<tr><td nowrap bgcolor=$color2><input type=hidden name=$data_n[$_] value=\"$data_v[$_]\">$data_n[$_]</td><td bgcolor=$color3>$data_v[$_]</td></tr>\n";
    }

    print "</table></td></tr></table><p>\n";
    print "<table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>\n";
    print "<table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>\n";

    print "<tr bgcolor=$color2>\n";
    
    # 必須項目処理================================

#-----[ sylph+ 必須項目処理のバグフィクス1 ]
$ad_hissu =~ s/\n$//;
#

    (@hissu_2) = split ( /\:/,$ad_hissu);
        foreach ( @hissu_2 ) {

#-----[ sylph+ 必須項目処理のバグフィクス2 ]
#            if ( $data_v[$_] eq "" ) {
if ( $FORM{$_} eq "" ) {
#

                push ( @hissu_3,$_);
            }
        }
    $count_hissu = @hissu_3;
    if ( $count_hissu == 0 ) {
        print "<td align=center><input type=submit value=送信></td>\n";
    } else {
        print "<td>\n";
        foreach ( @hissu_3 ) {

#-----[ sylph+ 必須項目処理のバグフィクス3 ]
#            print "「$data_n[$_]」\n";
print "「$_」\n";
#

        }
        
        print "が入力されていないので､送信できません。</td>\n";
    }

print "</tr></table></td></tr></table></form>$foot</body></html>\n";

}

# メール送信======================================================================

sub sendmail {

#-----[ sylph+ 内容を取得する ]
local(@log) = ($addr,$FORM{'id'},$FORM{'subject'});
local(@data_s) = ();
$count = @data_n;
foreach (4..$count-1) {
	push(@log,"$data_n[$_]$log_dat$data_v[$_]");
     	$data_v[$_] =~ s/&lt;br&gt;/\n/g;
	if ($data_v[$_] =~ /\n/) { &jis("$data_n[$_] =\n\n$data_v[$_]\n"); push(@data_s,"$msg\n"); }
	else { &jis("$data_n[$_] = $data_v[$_]"); push(@data_s,"$msg\n"); }
}
#
#-----[ sylph+ 二重投稿防止機能(IP+内容+時間範囲) ]
$logcount = "$dir4\/$FORM{'id'}_count.log";
if (!-e "$logcount") { $logno = 1; }
else {
	open(IN,"$logcount") || &error('システム異常 101','申し訳ありませんが何らかの原因で処理できません.');
	$logno = <IN>;
	close(IN);
	chop($logno);
}
#
#-----[ sylph+ ログと比較する ]
local($down_c) = $logno;
local($time_c,$date_c,$line) = "";
local($flag_eq) = 0;
local(@Check_new,@Ceck_old);
foreach (1 .. $logno) {
	$logfile = "$dir4\/$FORM{'id'}_$down_c\.log";
	if (-e $logfile) {
		open(IN,"$logfile") || &error('システム異常 107','申し訳ありませんが何らかの原因で処理できません.');
		@lines = <IN>;
		close(IN);
		foreach $line (@lines) {
			@Check_old = ();
			@Check_new = @log;
			chop($line);
			($time_c,$date_c,@Check_old) = split(/$log_csv/, $line);
			unshift(@Check_new,$time_c,$date_c);
			($log_get) = join($log_csv,@Check_new);
			if (time - $time_c > $time_check) {
				$flag_eq = 1;
				last;
			}
			if ($line eq $log_get){
				&error('二重投稿','二重投稿は、できないようになっております。');
			}
		}
		if ($flag_eq) { last; }
		if ($down_c > 1) { $down_c--; }
	}
}
#
#-----[ sylph+ ログ保存形式へ変換する ]
unshift(@log,time,$date_now);
local($log_send) = join($log_csv,@log);
#
#-----[ sylph+ ロック開始する ]
&lock_d;
#

    $file_settei = "$dir3/$FORM{'id'}_2.cgi";
    open (IN,"$file_settei") || &error('オープンエラー','なぜか指定された書込みファイルが開けません。');
    @LINES = <IN>;
    close (IN);
    ($ad_email,$ad_ref,$ad_hissu) = split(/\,/, $LINES[0]);

    $file_honbun = "$dir3/$FORM{'id'}.cgi";
    open (IN,"$file_honbun") || &error('オープンエラー','なぜか指定された書込みファイルが開けません。');
    @LINES = <IN>;
    close (IN);
        ($subject,$up,$down,$syomei) = split(/\,/, $LINES[0]);

	if (!(open(OUT,"| $sendmail -t"))) { &error('システム異常','申し訳ありませんが何らかの原因で処理できません.'); }
        
        $ad_email =~ s/\:/\,/g;
   	    print OUT "Errors-To: $mailto\n";
	    print OUT "To: $email\n";
	    print OUT "Bcc: $ad_email\n";
	    print OUT "From: $ad_email\n";

	&jis("Subject: $FORM{'subject'}"); print OUT "$msg\n";
	print OUT "Content-Transfer-Encoding: 7bit\n";
	print OUT "Content-Type: text/plain\; charset=\"ISO-2022-JP\"\n\n";

    $up =~ s/<br>/\n/g;
    $down =~ s/<br>/\n/g;
    $syomei =~ s/<br>/\n/g;
    &jis("=================================================="); print OUT "$msg\n";
    &jis("$FORM{'subject'}"); print OUT "$msg\n";
    &jis("=================================================="); print OUT "$msg\n";
    &jis("\[送信日時\] $date_now"); print OUT "$msg\n";
    &jis("--------------------------------------------------"); print OUT "$msg\n";
    &jis("$up"); print OUT "$msg\n\n";
    &jis("--------------------------------------------------"); print OUT "$msg\n";
    &jis("送信内容"); print OUT "$msg\n";
    &jis("--------------------------------------------------"); print OUT "$msg\n\n";

#-----[ sylph+ 内容の送信 ]
print OUT "@data_s\n";
#

    &jis("--------------------------------------------------"); print OUT "$msg\n\n";
    &jis("$down"); print OUT "$msg\n\n";
    &jis("$syomei"); print OUT "$msg\n\n";

    close (OUT);

#-----[ sylph+ データ保存 ]
$logfile = "$dir4\/$FORM{'id'}_$logno\.log";
if (!-e $logfile) {
	$logno = 1;
	$logfile = "$dir4\/$FORM{'id'}_$logno\.log";
}
else {
	open(IN,"$logfile") || &error('システム異常 102','申し訳ありませんが何らかの原因で処理できません.');
	@lines = <IN>;
	close(IN);
}
if ($log_max <= @lines) {
	@lines = ();
	do {
		$logno++;
		$logfile = "$dir4\/$FORM{'id'}_$logno\.log";
	} while (-e $logfile);
}
unshift(@lines,"$log_send\n");

open(OUT,"> $logfile") || &error('システム異常 103','申し訳ありませんが何らかの原因で処理できません.');
print OUT @lines;
close(OUT);
chmod(0600,"$logfile");
open(OUT,"> $logcount") || &error('システム異常 104','申し訳ありませんが何らかの原因で処理できません.');
print OUT "$logno\n";
close(OUT);
chmod(0600,"$logcount");

&unlock_d;
#

	print "Location: $ad_ref\n\n"; 
}

# メールの文字コードをJIS形式に変換(Web裏業より）====================================

sub jis { $msg = $_[0]; &jcode'convert(*msg, 'jis'); }

# ===================================================================================

sub style {

print <<"EOF";

<STYLE TYPE="text/css">
<!--
a:link    {font-size: $font_size; text-decoration:none; color:$link_0 ;}
a:visited {font-size: $font_size; text-decoration:none; color:$link_0 ;}
a:active  {font-size: $font_size; text-decoration:none; color:$link_0 ;}
a:hover   {font-size: $font_size; text-decoration:underline; color:$link_1 ;}
td        {font-size: $font_size;}
b         {font-size: $font_size;}
big       {font-size: 15pt;}
span      {font-size: $font_size;line-height:12pt;}
-->
</STYLE>

EOF

}

# エラー処理=================================================================

sub error {
#-----[ sylph+ アンロック ]
&unlock_d;
#
	print "Content-type: text/html\n\n";
        print "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=Shift_JIS\"><title>$main_title</title>\n";
        &style;
        print "</head>$body$head\n";
        print <<"EOF";
        <p>
        <table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>
        <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
        <tr><td align=center bgcolor=$color2 height=30><font color=red><b>$_[0]</b></font></td></tr>
        <tr><td align=center bgcolor=$color3 height=30><font color=red>$_[1]</font></td></tr>
        </table></td></tr></table><p>
	  </body></html>
EOF

exit;
}


sub admin {

    print "Content-type: text/html\n\n";
    print "<html><head><title>$main_title</title>\n";
    &style;
    print <<"EOF";
    </head>$body$head
    <form method=post action=form.cgi>
    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=$color2><td>管理パスワードを入力してください</td></tr>
    <tr bgcolor=$color3><td align=center>
    <input type=hidden name=mode value=admin_2>
    <input type=password name=pass size=10>
    <input type=submit value=認証>
    </td></tr>
    </table></td></tr></table>
    </form><p>$foot
    </body></html>
EOF

}

sub admin_2 {

    if ( $_[0] eq '' ) {
        if ( $FORM{'pass'} ne $pass ) { &error ('エラー','パスワードの認証ができません。'); }
    }
    
    print "Content-type: text/html\n\n";
    print "<html><head><title>$main_title</title>\n";
    &style;
    print "</head>$body\n" ;

    $ad_file_1 = "$dir3/data.cgi";

    open (IN,"$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
    @LINES_AD_1 = <IN>;
    close (IN);
    $count_ad_file_1 = @LINES_AD_1;

    print <<"EOF";
    $head<p>
    <center><b>$_[1]</b></center><p>
    <table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=#FFFFCC><td align=center><b>[返信メール設定フォーム] ID設定</b></td></tr></table></td></tr></table><br>
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=ad_regist_1>
    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=#FFFFCC><td align=center><b>メールID</b></td><td align=center><b>備考(どのメールかわかるような説明)</b></td></tr>
    <tr bgcolor=#FFFFFF><td>
    
EOF

    print "<select name=g_id_1>\n";
    $count_ryouiki = @id_array_1;
    foreach ( 0.. $count_ryouiki -1) {
        print "<option value=$id_array_2[$_]>$id_array_1[$_]</option>\n" ;
    }
    print "</select>\n";
    print "<select name=g_id_2>\n";
    foreach ( @id_array_3) {
        print "<option value=$_>$_</option>\n" ;
    }
    print "</select>\n";

    print <<"EOF";
    </td>
    <td><input type=text name=g_naiyou size=75></td></tr>
    <tr bgcolor=#FFFFCC><td colspan=2 align=center><input type=submit value=登録></td></tr>
    </table></td></tr></table></form>

    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=#FFFFCC><td align=center><font color=red><b><font size=2>ID対応表\</font></b></font></td></tr>
    <tr bgcolor=#FFFFFF><td>
EOF

    foreach ( 0..$count_ryouiki -1) {
        print "\<font size=2>■[$id_array_1[$_] \= <font color=red>$id_array_2[$_]</font>\]</font><br>\n";
    }
    print "</td></tr></table></td></tr></table>\n";
    print "<hr noshad size=1 width=600>\n" ;
    

    if (!-e $ad_file_1) { 
        print "\n";
    } else {

        print "<br>\n";

        foreach (@LINES_AD_1){
            ($data_id,$g_id_1,$g_id_2,$g_naiyou) = split (/\,/,$_);

            print <<"EOF";
            <form method=post action=form.cgi>
            <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
            <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
            <tr bgcolor=#FFFFCC><td><b>No.</b></td><td align=center><b>メールID</b></td><td align=center><b>備考</b></td>
            <td><b>処理</b></td></tr><tr bgcolor=#FFFFFF><td align=center>$data_id</td><td align=center>
EOF
            print "<input type=hidden name=data_id value=$data_id>$g_id_1-$g_id_2<input type=hidden name=g_id_1 value=$g_id_1><input type=hidden name=g_id_2 value=$g_id_2></td>\n";
            print "<td><input type=text name=g_naiyou size=50 value=$g_naiyou></td>\n" ;
            print <<"EOF";
            <td>
            <select name=mode>
            <option value=mail_edit_1>メール本文設定</option>
            <option value=mail_edit_2>メール送信設定</option>
            <option value=ad_edit_1>修正</option>
            <option value=ad_del_1>削除</option>
            </select><input type=hidden name=data_id value=$data_id>
            <input type=submit value=実行>
            </td></tr></table></td></tr></table></form>
EOF
        }
    print "<center><a href=$main_url>戻る</a></center></body></head>\n";
    }
}

sub ad_regist_1 {

$ad_file_1 = "$dir3/data.cgi";

open (IN,"$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
@LINESAD1 = <IN>;
close (IN);
$id = @LINESAD1;

foreach ( @LINESAD1 ) {
    ($id,$g_id_1,$g_id_2,$g_naiyou) = split (/\,/,$_);
    if ($g_id_1 eq $FORM{'g_id_1'} && $g_id_2 eq $FORM{'g_id_2'} ) { 
        &error ('エラー','ご指定のIDはすでに使われています'); 
    } elsif ( $FORM{'g_naiyou'} eq '' ) {
        &error ('エラー','備考を入力して下さい'); 
    }
}

open (OUT,">>$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
$id++;
print OUT "$id,$FORM{'g_id_1'},$FORM{'g_id_2'},$FORM{'g_naiyou'}\n";
close (OUT);
chmod (0666,$ad_file_1);

&admin_2('$pass','指定したデータを登録しました');

}

sub ad_edit_1 {

$ad_file_1 = "$dir3/data.cgi";
open (IN,"$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
@LINES_AD_1 = <IN>;
close (IN);

    foreach (@LINES_AD_1 ) {
        ($data_id,$g_id_1,$g_id_2,$g_naiyou) = split (/\,/,$_);
        if ( $data_id eq $FORM{'data_id'}) {
            $_ = "$FORM{'data_id'},$FORM{'g_id_1'},$FORM{'g_id_2'},$FORM{'g_naiyou'}\n";
            push (@new,$_);
        } else {
            push (@new,$_);
        }

    }

open (OUT,">$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
print OUT (@new);
close (OUT);
chmod (0666,$ad_file_1);
&admin_2('$pass','指定したデータを修正しました');
}

sub ad_del_1 {

$ad_file_1 = "$dir3/data.cgi";
open (IN,"$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
@LINES_AD_1 = <IN>;
close (IN);

    foreach (@LINES_AD_1 ) {

        ($data_id,$g_id_1,$g_id_2,$g_naiyou) = split (/\,/,$_);

        if ( $data_id ne $FORM{'data_id'}) { 
            push (@new,$_);
        }
    }

open (OUT,">$ad_file_1") || &error('オープンエラー','指定された書込みファイルが開けません。');
print OUT (@new);
close (OUT);
chmod (0666,$ad_file_1);
&admin_2('$pass','指定したデータを削除しました');
}

sub mail_edit_1 {

    print "Content-type: text/html\n\n";
    print "<html><head><title>$main_title</title>\n";
    &style;

    print <<"EOF";
    </head>$body$head<p>
    <table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=10 cellspacing=1>
    <tr bgcolor=#FFFFCC><td align=center><b>[$FORM{'g_naiyou'}] メール本文設定</b></td></tr></table></td></tr></table><br>

EOF

    $res_mail_fillename = "$FORM{'g_id_1'}-$FORM{'g_id_2'}";
    $res_mail_file = "$dir3/$res_mail_fillename.cgi";

    if (!-e $res_mail_file ) {

    print <<"EOF";

    <form method=post action=form.cgi>
    <input type=hidden name=g_naiyou value=$FORM{'g_naiyou'}>
    <input type=hidden name=g_id_1 value=$FORM{'g_id_1'}>
    <input type=hidden name=g_id_2 value=$FORM{'g_id_2'}>
    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=10 cellspacing=1>
    <tr bgcolor=#FFFFFF><td>
    送信メール件名：<br><input type=text name=m_subject size=75><hr noshade size=1>
    送信メール本文上部：<br><textarea name=m_honbun_up cols=75 rows=5></textarea><hr noshade size=1>
    送信メール本文下部：<br><textarea name=m_honbun_down cols=75 rows=10></textarea><hr noshade size=1>
    署名：<br><textarea name=m_syomei cols=50 rows=5></textarea><hr noshade size=1>
    <input type=radio name=mode value=mail_edit_view checked>プレビュー
    <input type=radio name=mode value=mail_edit_regist>登録
    <input type=submit value=実行> <input type=reset value=リセット>
    </td></tr></table></td></tr></table></form>

EOF

    } else {

    open (IN,"$res_mail_file") || &error('オープンエラー','指定された書込みファイルが開けません。');
    @LINES_AD_2 = <IN>;
    close (IN);

    ($m_subject,$m_honbun_up,$m_honbun_down,$m_syomei) = split (/\,/,$LINES_AD_2[0]);

    $m_honbun_up =~ s/<br>/\n/g;
    $m_honbun_down =~ s/<br>/\n/g;
    $m_syomei =~ s/<br>/\n/g;

    print <<"EOF";
    <div align=center><b>$_[0]</b></div>
    <form method=post action=form.cgi>
    <input type=hidden name=g_naiyou value=$FORM{'g_naiyou'}>
    <input type=hidden name=g_id_1 value=$FORM{'g_id_1'}>
    <input type=hidden name=g_id_2 value=$FORM{'g_id_2'}>
    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=10 cellspacing=1>
    <tr bgcolor=#FFFFFF><td>
    送信メール件名：<br><input type=text name=m_subject size=75 value=$m_subject><hr noshade size=1>
    送信メール本文上部：<br><textarea name=m_honbun_up cols=75 rows=5>$m_honbun_up</textarea><hr noshade size=1>
    送信メール本文下部：<br><textarea name=m_honbun_down cols=75 rows=10>$m_honbun_down</textarea><hr noshade size=1>
    署名：<br><textarea name=m_syomei cols=50 rows=5>$m_syomei</textarea><hr noshade size=1>
    <input type=radio name=mode value=mail_edit_view checked>プレビュー
    <input type=radio name=mode value=mail_edit_regist>登録
    <input type=submit value=実行> <input type=reset value=リセット>
    </td></tr></table></td></tr></table></form>

EOF
    }

    print <<"EOF";

    <center>
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=admin_2>
    <input type=hidden name=pass value=$pass>
    <input type=submit value=前のページへ戻る>
    </form></center>

EOF

print "</body></html>\n";
exit;
}

sub mail_edit_regist {
if ( $FORM{'m_subject'} eq '' ) {
    &error ('エラー','メールの件名は必ず入力してください。');
}
$res_mail_fillename = "$FORM{'g_id_1'}-$FORM{'g_id_2'}";
$res_mail_file = "$dir3/$res_mail_fillename.cgi";

open (OUT,">$res_mail_file") || &error('オープンエラー','指定された書込みファイルが開けません。');
print OUT "$FORM{'m_subject'},$FORM{'m_honbun_up'},$FORM{'m_honbun_down'},$FORM{'m_syomei'}";
close (OUT);
chmod (0666,$res_mail_file);

&mail_edit_1('登録/修正しました。');

EOF
}

sub mail_edit_view {

 $m_honbun_up = $FORM{'m_honbun_up'};
 $m_honbun_up =~ s/&lt;br&gt;/<br>/g;

 $m_honbun_down = $FORM{'m_honbun_down'};
 $m_honbun_down =~ s/&lt;br&gt;/<br>/g;

 $m_syomei = $FORM{'m_syomei'};
 $m_syomei =~ s/&lt;br&gt;/<br>/g;

print "Content-type: text/html\n\n";
print "<html><head><title>$main_title</title>\n";
print <<"EOF";
</head>$body

<table border=1 width=600 align=center align=center bordercolor=#996666 cellspacing=1 cellpadding=5>
<tr><td align=center><b>送信メールプレビュー</b>
</td></tr></table><br>
<table border=1 align=center bordercolor=#cccccc cellspacing=1 cellpadding=20><tr><td>
<font size=2>
==================================================<br>
$FORM{'m_subject'}<br>
==================================================<br>
<br>
$m_honbun_up<br>
<br>
--------------------------------------------------<br>
ここに設定フォームからのデータが入力されます<br>
<br>
○○：項目名<br>xx：ユーザーの記入内容<p>
○○ = xxxx(データに改行がない場合)<br>
○○○ =（データに改行がある場合)<br>
<br>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>
xxxxxxxxxxxxxxxxxxxxxx<br>
<br>
項目の数は無制限です。<br>
--------------------------------------------------<br>
$m_honbun_down<br>
<br>
$m_syomei
</td></tr></table><p>
<center>
ブラウザの戻るボタンで戻ってください。</center>
</font>
</center></body></html>
EOF

}

# ======================================================

sub mail_edit_2 {

print "Content-type: text/html\n\n";
print "<html><head><title>$main_title</title>\n";
&style;
print "</head>$body$head<p>\n" ;

   
   $res_mail_fillename = "$FORM{'g_id_1'}-$FORM{'g_id_2'}_2";
   $res_mail_file = "$dir3/$res_mail_fillename.cgi";

    print "<table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>\n";
    print "<table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>\n";
    print "<tr bgcolor=#FFFFCC><td align=center><b>[$FORM{'g_naiyou'}] メール送信設定</b></td></tr></table></td></tr></table><br>\n" ;

   if (!-e $res_mail_file ) {

    print <<"EOF";
    
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=mail_edit_regist_2>
    <table border=0 cellpadding=0 align=center cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=#FFFFCC><td>ID</td><td>$FORM{'g_id_1'}-$FORM{'g_id_2'}
    <input type=hidden name=g_id_1 value=$FORM{'g_id_1'}>
    <input type=hidden name=g_id_2 value=$FORM{'g_id_2'}>
    <input type=hidden name=g_naiyou value=$FORM{'g_naiyou'}>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>受信先メールアドレス</td>
    <td><input type=text name=ad_email size=50><br>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>帰り先ページ</td>
    <td><input type=text name=ad_ref size=50><br>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>必須項目</td>
    <td><input type=text name=ad_hissu size=50><br>
    複数項目を指定する場合は：（半角コロン）で区切る。<br>なお、チェックボックスでは利用不可。
    </td></tr>
    <tr bgcolor=#FFFFCC><td colspan=2><input type=submit value=実行> <input type=reset value=リセット></td></tr>
    </table></td></tr></table><br>
    </form>
    <center>
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=admin_2>
    <input type=hidden name=pass value=$pass>
    <input type=submit value=前のページへ戻る>
    </form></center>
EOF

    } else {

    open (IN,"$res_mail_file") || &error('オープンエラー','指定された書込みファイルが開けません。');
    @LINES_AD_2 = <IN>;
    close (IN);

    ($ad_email,$ad_ref,$ad_hissu) = split (/\,/,$LINES_AD_2[0]);

    print <<"EOF";
    
    <div align=center><b>$_[0]</b></div>
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=mail_edit_regist_2>
    <table border=0 cellpadding=0 align=center width=600 cellspacing=0 bgcolor=$color1><tr><td>
    <table border=0 width=100% cellpadding=3 cellspacing=1 cellpadding=3>
    <tr bgcolor=#FFFFCC><td>ID</td><td>$FORM{'g_id_1'}-$FORM{'g_id_2'}
    <input type=hidden name=g_id_1 value=$FORM{'g_id_1'}>
    <input type=hidden name=g_id_2 value=$FORM{'g_id_2'}>
    <input type=hidden name=g_naiyou value=$FORM{'g_naiyou'}>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>受信先メールアドレス</td>
    <td><input type=text name=ad_email size=50 value=$ad_email><br>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>帰り先ページ</td>
    <td><input type=text name=ad_ref size=50 value=$ad_ref><br>
    </td></tr>
    <tr bgcolor=#FFFFFF><td>必須項目</td>
    <td><input type=text name=ad_hissu size=50 value=$ad_hissu><br>
    複数項目を指定する場合は：（半角コロン）で区切る。<br>なお、チェックボックスでは利用不可。
    </td></tr>
    <tr bgcolor=#FFFFCC><td colspan=2><input type=submit value=実行> <input type=reset value=リセット></td></tr>
    </table></td></tr></table><br>
    </form>
    <center>
    <form method=post action=form.cgi>
    <input type=hidden name=mode value=admin_2>
    <input type=hidden name=pass value=$pass>
    <input type=submit value=前のページへ戻る>
    </form></center>
EOF
    }
    
print "</body></html>\n" ;


}

sub mail_edit_regist_2 {

if ( $FORM{'ad_email'} eq '' || $FORM{'ad_ref'} eq '' || $FORM{'ad_hissu'} eq '' ) {
    &error ('エラー','記入漏れがあります。全項目必須です。');
}

$res_mail_fillename = "$FORM{'g_id_1'}-$FORM{'g_id_2'}_2";
$res_mail_file = "$dir3/$res_mail_fillename.cgi";

open (OUT,">$res_mail_file") || &error('オープンエラー','指定された書込みファイルが開けません。');
print OUT "$FORM{'ad_email'},$FORM{'ad_ref'},$FORM{'ad_hissu'}\n";
close (OUT);
chmod (0666,$res_mail_file);

&mail_edit_2('登録/修正しました。');
}

#-----[ sylph+ ロック関数 ]
sub lock_d {
	local($retry,$flag);

	if ($lockfile eq "") {
		&error('システム異常 106','申し訳ありませんが何らかの原因で処理できません.');
	}

	# mkdir ロック
	if (-e $lockfile) {
		# ロックが長すぎる($waitmin)場合には異常と判断して削除する
		if ((-M $lockfile) * 60 * 60 * 24 > $waitmin * 60) {
			rmdir($lockfile);
		}
	}

	$flag = 0;
	foreach (1 .. 5) {
		if (-e $lockfile) { sleep(1); }
		else {
			if (!mkdir($lockfile, 0777)) {
				select(undef, undef, undef, 1.0);
				last;
			}else{
				$flag = 1;
				last;
			}
		}
	}
	if ($flag == 0) { &error('システム異常 105','現在、大変混雑しております。<br>「戻る」ボタンで再度の送信を、お願いいたします。'); }
}

#-----[ sylph+ アンロック関数 ]
sub unlock_d {
	if (-e $lockfile) { rmdir($lockfile); }
}

# スクリプト終了============================================================================
