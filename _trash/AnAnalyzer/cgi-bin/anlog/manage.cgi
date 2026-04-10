#!/usr/bin/perl

#########################################################
#          アクセス解析CGI An-Analyzer 
#                 version2.0
#            by Anglers-net WebDesign
#         http://anglers-net.com/kyuukyuu
#
# - 各スクリプトとも著作に係る部分は削除しないこと
# - 有料、無料にかかわらず再配布しないこと
# - 許可がない限り有料、無料にかかわらず代行設置を認めません
# - このスクリプトのご利用でトラブル等が発生しても責任を
#   求めないこと
# - 本スクリプトの著作権は有限会社アングラーズネットが有します。
#########################################################

$configfile = "./data/config.txt";
require "./data/config.txt";
require './cgi-lib.pl';
require './jcode.pl';
&ReadParse;
$titlegif="title.gif";

if($in{'pw'} ne $pw){&error;}

print "Content-type: text/html\n\n";
print <<EOF;
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<TITLE>An-Analyzer コントロール画面</TITLE></HEAD>
<SCRIPT Language="JavaScript">
<!--
function Pagereturn(){
history.back();
}
//-->
</SCRIPT>

<BODY BGCOLOR=#FFFFFF TEXT=black LINK=BLUE VLINK=SaddleBrown ALINK=BLUE TOPMARGIN=0>
<BR><CENTER>
<IMG SRC="$gifdirurl$titlegif"><BR>
EOF

if ($in{'mod'} eq "1"){

$xx = $in{'deleteurls'};&trans;&check;$in{'deleteurls'} = $xx;
$xx = $in{'ignorehosts'};&trans;&check;$in{'ignorehosts'} = $xx;
$xx = $in{'ignoreids'};&trans;&check;$in{'ignoreids'} = $xx;
$xx = $in{'includerefs'};&trans;&check;$in{'includerefs'} = $xx;
$xx = $in{'pw2'};&trans;&check;$in{'pw2'} = $xx;
$xx = $in{'filedeletepw'};&trans;&check;$in{'filedeletepw'} = $xx;
$xx = $in{'myhomepage'};&trans;&check;$in{'myhomepage'} = $xx;
$xx = $in{'numofdays'};&trans;&check;$in{'numofdays'} = $xx;
$xx = $in{'gifdirurl'};&trans;&check;$in{'gifdirurl'} = $xx;
$xx = $in{'myurl'};&trans;&check;$in{'myurl'} = $xx;
$xx = $in{'maxranknumber'};&trans;&check;$in{'maxranknumber'} = $xx;
$xx = $in{'timedifference'};&trans;&check;$in{'timedifference'} = $xx;
$xx = $in{'cookieid'};&trans;&check;$in{'cookieid'} = $xx;
$xx = $in{'uid'};&trans;&check;$in{'uid'} = $xx;
$xx = $in{'ssi'};&trans;&check;$in{'ssi'} = $xx;
$xx = $in{'maxcount'};&trans;&check;$in{'maxcount'} = $xx;

$deleteurls2=$in{'deleteurls'};
$ignorehosts2=$in{'ignorehosts'};
$ignoreids2=$in{'ignoreids'};
$includerefs2=$in{'includerefs'};
$deleteurls2=~ s/\,/\'\,\'/g;
$deleteurls2="\'$deleteurls2\'";
$ignorehosts2=~ s/\,/\'\,\'/g;
$ignorehosts2="\'$ignorehosts2\'";
$ignoreids2=~ s/\,/\'\,\'/g;
$ignoreids2="\'$ignoreids2\'";
$includerefs2=~ s/\,/\'\,\'/g;
$includerefs2="\'$includerefs2\'";
$deleteurls3=$in{'deleteurls'};
$ignorehosts3=$in{'ignorehosts'};
$ignoreids3=$in{'ignoreids'};
$includerefs3=$in{'includerefs'};
$deleteurls3=~ s/\,/<BR>/g;
$ignorehosts3=~ s/\,/<BR>/g;
$ignoreids3=~ s/\,/<BR>/g;
$includerefs3=~ s/\,/<BR>/g;

if (!open(DF,"$configfile")){ &error; }
@FORM = <DF>;
close(DF);
foreach $lineform (@FORM) {
if ($lineform =~ /^\$uid/){$uidcheck ="1";}
}
foreach $lineform (@FORM) {
if ($lineform =~ /^\$ssi/){$ssicheck ="1";}
}
foreach $lineform (@FORM) {
if ($lineform =~ /^\$maxcount/){$maxcountcheck ="1";}
}
foreach $lineform (@FORM) {
if ($lineform =~ /^\$cookieid/){$lineform ="\$cookieid\=\'$in{'cookieid'}\'\;\n";}
if ($lineform =~ /^\$pw/){
if ($uidcheck ne "1"){
$lineform ="\$pw\=\'$in{'pw2'}\'\;\n\n\#ユーザーID\n\$uid\=\'$in{'uid'}\'\;\n";
}else{
$lineform ="\$pw\=\'$in{'pw2'}\'\;\n";
}
}
if ($lineform =~ /^\$timedifference/){
if ($ssicheck ne "1"){
$lineform ="\$timedifference\=\'$in{'timedifference'}\'\;\n\n\#SSIの設置\n\$ssi\=\'$in{'ssi'}\'\;\n";
}else{
$lineform ="\$timedifference\=\'$in{'timedifference'}\'\;\n";
}
}
if ($lineform =~ /^\$maxranknumber/){
if ($maxcountcheck ne "1"){
$lineform ="\$maxranknumber\=\'$in{'maxranknumber'}\'\;\n\n\#追跡数\n\$maxcount\=\'$in{'maxcount'}\'\;\n";
}else{
$lineform ="\$maxranknumber\=\'$in{'maxranknumber'}\'\;\n";
}
}
if ($lineform =~ /^\$filedeletepw/){$lineform ="\$filedeletepw\=\'$in{'filedeletepw'}\'\;\n";}
if ($lineform =~ /^\$myhomepage/){$lineform ="\$myhomepage\=\'$in{'myhomepage'}\'\;\n";}
if ($lineform =~ /^\$numofdays/){$lineform ="\$numofdays\=\'$in{'numofdays'}\'\;\n";}
if ($lineform =~ /^\$gifdirurl/){$lineform ="\$gifdirurl\=\'$in{'gifdirurl'}\'\;\n";}
if ($lineform =~ /^\$myurl/){$lineform ="\$myurl\=\'$in{'myurl'}\'\;\n";}
if ($lineform =~ /^\$uid/){$lineform ="\$uid\=\'$in{'uid'}\'\;\n";}
if ($lineform =~ /^\$ssi/){$lineform ="\$ssi\=\'$in{'ssi'}\'\;\n";}
if ($lineform =~ /^\$maxcount/){$lineform ="\$maxcount\=\'$in{'maxcount'}\'\;\n";}
if ($lineform =~ /^\@deleteurls/){$lineform ="\@deleteurls\=\($deleteurls2\)\;\n";}
if ($lineform =~ /^\@ignorehosts/){$lineform ="\@ignorehosts\=\($ignorehosts2\)\;\n";}
if ($lineform =~ /^\@ignoreids/){$lineform ="\@ignoreids\=\($ignoreids2\)\;\n";}
if ($lineform =~ /^\@includerefs/){$lineform ="\@includerefs\=\($includerefs2\)\;\n";}
$setform ="$setform$lineform";
}

if (!open(DF,">$configfile")){ &error; }
flock(DF,2);
print DF $setform;
close (DF);
flock(DF,8);

print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<FONT SIZE=-1><center>- 次のとおり修正しました -</center>
<HR>
ログインパスワード：<B><FONT COLOR=RED>$in{'pw2'}</FONT>\　\※忘れないでください！！</B><BR>
<HR>
データファイル削除パスワード：<FONT COLOR=blue>$in{'filedeletepw'}</FONT><BR>
<HR>
シェアウエア登録ID：<FONT COLOR=blue>$in{'uid'}</FONT><BR>
<HR>
自サイトURLの一部（自サイト内リンク特定用）：<BR>
<FONT COLOR=blue>$in{'myhomepage'}</FONT><BR>
<HR>
ログ取得期間：<FONT COLOR=blue>$in{'numofdays'}日間</FONT><BR>
<HR>
画像・説明ファイルのある場所：<BR>
<FONT COLOR=blue>$in{'gifdirurl'}</FONT><BR>
<HR>
CGIを設置してあるanlogのURL：<BR>
<FONT COLOR=blue>$in{'myurl'}</FONT><BR>
<HR>
リンク元解析に含めない「自サイト」の一部：<BR>
<FONT COLOR=blue>$deleteurls3</FONT><BR>
<HR>
データ取得を無視するホスト名：<BR>
<FONT COLOR=blue>$ignorehosts3</FONT><BR>
<HR>
データ取得を無視する追跡ID：<BR>
<FONT COLOR=blue>$ignoreids3</FONT><BR>
<HR>
自サイトURL（アクセス解析タグの動作制限用）：<BR>
<FONT COLOR=blue>$includerefs3</FONT><BR>
<HR>
最大ランキング数：<FONT COLOR=blue>$in{'maxranknumber'}</FONT><BR>
<HR>
追跡アクセス数：<FONT COLOR=blue>$in{'maxcount'}</FONT><BR>
<HR>
クッキー設定ID：<FONT COLOR=blue>$in{'cookieid'}</FONT><BR>
<HR>
時差：<FONT COLOR=blue>$in{'timedifference'}</FONT><BR>
<HR>
ロボット巡回チェック用SSIの設置：<FONT COLOR=blue>$in{'ssi'}</FONT><BR>
<HR>

<FORM ACTION="./manage.cgi" METHOD=POST>
<INPUT type="hidden" name="pw" VALUE="$in{'pw2'}">
<INPUT TYPE="SUBMIT" VALUE="再度修正する"></FORM>

<FORM ACTION="./login.cgi" METHOD=POST>
<INPUT type="hidden" name="pw" VALUE="$in{'pw2'}">
<INPUT TYPE="SUBMIT" VALUE="ログインページに戻る"></FORM>
<BR>
</TD>
</TR>
</TABLE></td></tr></TABLE>
EOF
}else{

if ($ENV{'REMOTE_HOST'} && ($ENV{'REMOTE_HOST'} !~ /^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/)) 
 {$hostname = $ENV{'REMOTE_HOST'};
}else {&gethostname ($ENV{'REMOTE_ADDR'});}

$xxx="";
foreach $xxx (@ignorehosts) {if($xxx){$ignorehosts="$ignorehosts$xxx,";}}
$xxx="";
foreach $xxx (@deleteurls) {if($xxx){$deleteurls="$deleteurls$xxx,";}}
$xxx="";
foreach $xxx (@ignoreids) {if($xxx){$ignoreids="$ignoreids$xxx,";}}
$xxx="";
foreach $xxx (@includerefs) {if($xxx){$includerefs="$includerefs$xxx,";}}
print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<FONT SIZE=-1><center>- コントロール画面 -<BR>
（設定情報修正）</center>
<BR>
修正が必要な場合は、必要事項を修正後に下の「修正」ボタンを押して下さい。設定には\@のような特殊な文字は使えません（無視されます）。
<FORM ACTION="./manage.cgi" METHOD=POST>
<HR>
<INPUT type="hidden" name="pw" VALUE="$in{'pw'}">
<INPUT type="hidden" name="mod" VALUE="1">
<B><FONT COLOR=blue>ログインパスワード</FONT></B>：<INPUT type="text" name="pw2" size="10" value="$pw"><BR>
初回は必ず変更して下さい（半角文字）。<BR>
<HR>
<B><FONT COLOR=blue>データファイル削除パスワード</FONT></B>：<INPUT type="text" name="filedeletepw" size="10" value="$filedeletepw"><BR>
初回は必ず変更して下さい（半角文字）。また、ログインパスワードと同じにしないで下さい。<BR>
<HR>
<B><FONT COLOR=blue>シェアウエア登録ID</FONT></B>：<INPUT type="text" name="uid" size="10" value="$uid"><BR>
シェアウエア登録の際に発行される登録IDを入力して下さい。<BR>
<HR>
<B><FONT COLOR=blue>自サイトURLの一部（自サイト内リンク特定用）</FONT></B>：<BR>
<INPUT type="text" name="myhomepage" size="24" value="$myhomepage"><BR>
自サイトページURLの絶対に変わらない部分を設定します。自サイト内リンク特定用です。<BR>
例）URLがhttp://www.e-shopsolutions.comの場合は、次のようにします。<BR>
e-shopsolutions.com<BR>
<HR>
<B><FONT COLOR=blue>ログ取得期間</FONT></B>：<INPUT type="text" name="numofdays" size="4" value="$numofdays">日間<BR>
ログを取る日数を設定します。半角数字です。<BR>
1万アクセスを超えると解析に時間がかかるようになりますので、それを目安に設定して下さい。<BR>
7の倍数がいいです。例）7 14 28<BR>
<HR>
<B><FONT COLOR=blue>画像・説明ファイルのある場所</FONT></B>：<BR>
<INPUT type="text" name="gifdirurl" size="36" value="$gifdirurl"><BR>
画像・説明ファイルなどのあるlogフォルダの場所を指定します。相対パスでもURL指定でも結\構\です。<BR>
例）http://yourdomain.com/log/<BR>
<HR>
<B><FONT COLOR=blue>CGIを設置してあるanlogのURL</FONT></B>：<BR>
<INPUT type="text" name="myurl" size="36" value="$myurl"><BR>
CGIを設置してあるanlogのURLを指定します。<BR>
例）http://yourdomain.com/cgi-bin/anlog<BR>
<HR>
<B><FONT COLOR=blue>リンク元解析に含めない「自サイト」の設定</FONT></B>：<BR>
<INPUT type="text" name="deleteurls" size="42" value="$deleteurls"><BR>
リンク元解析に含めない「自サイト」のアドレスの一部を入れます。例えば、anglers-net.comとするとURLにanglers-net.comが含まれたデータが「自サイト」と判断されます。複数あるときは,で区切ります。<BR>
例）anglers-net.com,iluv.net<BR>
<HR>
<B><FONT COLOR=blue>データ取得を無視するホスト名</FONT></B>：<BR>
<INPUT type="text" name="ignorehosts" size="42" value="$ignorehosts"><BR>
データ取得しないホストのホスト名を入れます。自分のアクセスを除外する場合などに使います。複数あるときは,で区切ります。<BR>現在ご利用のホストは、 <FONT COLOR=RED>$hostname</FONT> です。<BR>
例）noc.kanazawa.nsk.ne.jp,kanazawa.yahoobb.com<BR>
<HR>
<B><FONT COLOR=blue>データ取得を無視する追跡ID</FONT></B>：<BR>
<INPUT type="text" name="ignoreids" size="42" value="$ignoreids"><BR>
データ取得しない追跡IDを入れます。自分のIDを入れればそのIDからのデータが記録されなくなります。
複数あるときは,で区切ります。<BR>
例）20718092655,2101034568<BR>
<HR>
<B><FONT COLOR=blue>自サイトURL（アクセス解析タグの動作制限用）</FONT></B>：<BR>
<INPUT type="text" name="includerefs" size="42" value="$includerefs"><BR>
アクセス解析タグを他のサイトに\貼\り\付けても動作しないようするための設定です。<BR>
自サイトのアドレスの一部を入れます。例えば、anglers-net.comとするとURLにanglers-net.comが含まれたサイトからのデータしか受け付けません。複数あるときは,で区切ります。<BR>
※当初CGIの設置テストをするときは何も設定しない方がいいです。<BR>
例）anglers-net.com,iluv.net<BR>
<HR>
<B><FONT COLOR=blue>最大ランキング数</FONT></B>：<INPUT type="text" name="maxranknumber" size="4" value="$maxranknumber"><BR>
ランキングの際に\表\示\する最大データ数を設定します。<BR>
<HR>
<B><FONT COLOR=blue>追跡アクセス数</FONT></B>：<INPUT type="text" name="maxcount" size="4" value="$maxcount"><BR>
アクセス追跡の際にさかのぼるアクセス数を設定します。未記入の場合には100件です。<BR>
<HR>
<B><FONT COLOR=blue>クッキー設定ID</FONT></B>：<INPUT type="text" name="cookieid" size="10" value="$cookieid"><BR>
独自ドメインを利用している場合はこのままで結\構\です。プロバイダのドメインの配下でホームページを作っている場合は、適当に変更して下さい（半角数字）。一度設定したら変更しないで下さい。変更しますとリピータ解析等で正常にデータを取得できなくなります。<BR>
<HR>
<B><FONT COLOR=blue>時差</FONT></B>：<INPUT type="text" name="timedifference" size="4" value="$timedifference"><BR>
海外サーバーで時差のある場合は時差（時間）を入れます。<BR>
<HR>
<B><FONT COLOR=blue>ロボット巡回チェック用SSIの設置</FONT></B>：<INPUT type="text" name="ssi" size="4" value="$ssi"><BR>
設置した場合にのみ数字の1を入れて下さい。<BR>
<HR>

<INPUT TYPE="SUBMIT" VALUE="修正"></FORM>
<FORM ACTION="./login.cgi" METHOD=POST>
<INPUT type="hidden" name="pw" VALUE="$in{'pw'}">
<INPUT TYPE="SUBMIT" VALUE="修正しないでログインページに戻る"></FORM>

</TD>
</TR>
</TABLE></td></tr></TABLE>
EOF
}
print <<EOF;
</center>
<CENTER><BR>
<FONT SIZE=-1>Copyright 2002 <A TARGET="new" HREF="http://anglers-net.com/kyuukyuu">Anglers-net.com</A>. All rights Reserved.</FONT><BR><BR>
</CENTER>
</BODY>
</HTML>

EOF

exit;


sub error {
print <<EOM;
Content-type: text/html

<html><head>
<title>エラー</title></head>
<BODY BGCOLOR="white">
<BR><BR>
<CENTER>エラー</CENTER>
<BR><BR>
</body>
</html>
EOM
exit;
}

sub trans{
$from='[＠０１-９Ａ-Ｚａ-ｚ．＿－]';
$to='[@01-9A-Za-z._-]';
&jcode'convert(*xx, 'euc');
&jcode'convert(*from, 'euc');
&jcode'convert(*to, 'euc');
&jcode'tr(*xx, $from, $to);
&jcode'convert(*xx, 'sjis');
}

sub check{
$xx=~ s/\'|\"|\@|\$|\&|\;|\%|\#|\{|\(|\)|\*|\!|\=|\?|\+//g;
$xx=~ s/\ //g;
$xx=~ s/\　//g;
$xx=~ s/\r\n//g;
$xx=~ s/\n//g;
}

sub gethostname {
local ($address) = shift(@_);
local (@octets);
local ($name, $aliases, $type, $len, $addr);
local ($ip_number);
@octets = split ('\.', $address);
$ip_number = pack ("CCCC", @octets[0..3]);
($name, $aliases, $type, $len, $addr) = gethostbyaddr ($ip_number, 2);
     if ($name) {$hostname = $name;
     }else {$hostname = $ENV{'REMOTE_ADDR'};
     }
}
