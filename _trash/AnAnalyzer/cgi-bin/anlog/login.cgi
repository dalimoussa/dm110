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

require "./data/config.txt";
require './cgi-lib.pl';
require "./data/check.txt";
&ReadParse;

$clientfile = "./data/client.txt";
$logfile = "./data/access.txt";


if($in{'pw'} ne ""){
if($in{'pw'} ne $pw){&error;}
$wind=1;
}

if($in{'delete'} eq "DELETE"){
if($in{'pw2'} ne $filedeletepw){&error;}
unlink($clientfile);
unlink($logfile);
$logdelete="<BR><center><FONT COLOR=RED>※ログを削除しました</FONT></center>";
}

$titlegif="title.gif";

$shcomment =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
$cword =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
if($keywd eq $cword){$shcomment="";}

print "Content-type: text/html\n\n";
print <<EOF;
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<TITLE>An-Analyzer for your website</TITLE></HEAD>
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
<FONT COLOR=RED>$shcomment</FONT><BR>
EOF

if($wind ne "1"){
print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<FONT SIZE=-1><center>- 解析項目 -</center>
サマリー<BR>
<BR>
アクセス数解析<BR>
-　日ごとアクセス数解析<BR>
-　曜日ごとアクセス数解析<BR>
-　時間帯ごとアクセス数解析<BR>
-　ページごとアクセス数解析<BR>
<BR>
ビジター数解析<BR>
-　日ごとビジター数解析<BR>
-　ページごとビジター数解析<BR>
<BR>
サーチエンジン解析<BR>
-　サーチエンジン解析1（総合）<BR>
-　サーチエンジン解析2<FONT SIZE=-1>（キーワード検索されたもののみ）</FONT><BR>
-　サーチエンジンに使用されたキーワード解析<BR>
<BR>
リンク元解析<BR>
ブラウザ解析<BR>
OS解析<BR>
ホスト解析<BR>
リピータ解析<BR>
閲覧パターン解析<BR>
自サイト内リンク解析
<BR>
<center><FORM ACTION="./login.cgi" METHOD=POST>
<INPUT type="text" name="pw" size="5">
<INPUT TYPE="SUBMIT" VALUE="LOGIN">
</FORM></center>
</FONT>
</TD>
</TR>
</TABLE></td></tr></TABLE>
EOF
}else{

if($ssi eq "1"){
$ssiblock = <<END_OF_BLOCK;
ロボット巡回解析<BR>
-　<A HREF="./showlog4robot.cgi?cat=date&pw=$in{'pw'}&uid=$uid">日ごとロボット巡回状況</A><BR>
-　<A HREF="./showlog4robot.cgi?cat=pagename&pw=$in{'pw'}&uid=$uid">ページごとロボット巡回状況</A><BR>
-　<A HREF="./showlog4robot.cgi?cat=robot&pw=$in{'pw'}&uid=$uid">ロボットごと巡回状況</A><BR>
<BR>
END_OF_BLOCK
}
print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<FONT SIZE=-1><center>-　解析項目　-</center>
<A HREF="./showlog.cgi?cat=summary&pw=$in{'pw'}">サマリー</A><BR>
<BR>
アクセス数解析<BR>
-　<A HREF="./showlog.cgi?cat=date&pw=$in{'pw'}&uid=$uid">日ごとアクセス数解析</A><BR>
-　<A HREF="./showlog.cgi?cat=week&pw=$in{'pw'}&uid=$uid">曜日ごとアクセス数解析</A><BR>
-　<A HREF="./showlog.cgi?cat=hour&pw=$in{'pw'}&uid=$uid">時間帯ごとアクセス数解析</A><BR>
-　<A HREF="./showlog.cgi?cat=pagename&pw=$in{'pw'}&uid=$uid">ページごとアクセス数解析</A><BR>
<BR>
ビジター数解析<BR>
-　<A HREF="./showlog.cgi?cat=datev&pw=$in{'pw'}&uid=$uid">日ごとビジター数解析</A><BR>
-　<A HREF="./showlog.cgi?cat=pagenamev&pw=$in{'pw'}&uid=$uid">ページごとビジター数解析</A><BR>
<BR>
サーチエンジン解析<BR>
-　<A HREF="./showlog.cgi?cat=allsearchengin&pw=$in{'pw'}&uid=$uid">サーチエンジン解析1（総合）</A><BR>
-　<A HREF="./showlog.cgi?cat=searchengin&pw=$in{'pw'}&uid=$uid">サーチエンジン解析2<FONT SIZE=-1>（キーワード検索されたもののみ）</FONT></A><BR>
-　<A HREF="./showlog.cgi?cat=keyword&pw=$in{'pw'}&uid=$uid">サーチエンジンに使用されたキーワード解析</A><BR>
<BR>
$ssiblock
<A HREF="./showlog.cgi?cat=linkpage&pw=$in{'pw'}&uid=$uid">リンク元解析</A><BR>
<A HREF="./showlog.cgi?cat=host&pw=$in{'pw'}&uid=$uid">ホスト解析</A><BR>
<A HREF="./showlog.cgi?cat=browser&pw=$in{'pw'}&uid=$uid">ブラウザ解析</A><BR>
<A HREF="./showlog.cgi?cat=os&pw=$in{'pw'}&uid=$uid">OS解析</A><BR>
<A HREF="./showlog.cgi?cat=rpt&pw=$in{'pw'}&uid=$uid">リピータ解析</A><BR>
<A HREF="./showlog.cgi?cat=heavyuser&pw=$in{'pw'}&uid=$uid">閲覧パターン解析</A><BR>
<A HREF="./showlog.cgi?cat=insite&pw=$in{'pw'}&uid=$uid">自サイト内リンク解析</A><BR>
<BR>
<HR>
<center>- <A HREF="./encode.cgi?pw=$in{'pw'}">ログ用html作成</A> -<BR><CENTER>
<HR>
$logdelete
<center><FORM ACTION="./login.cgi" METHOD=POST>
- ログファイルの削除 -<BR><BR>
パスワード\：<INPUT type="hidden" name="pw" VALUE="$in{'pw'}">
<INPUT type="text" name="pw2" size="5">
<INPUT TYPE="SUBMIT" name="delete" VALUE="DELETE">
<BR>
<FONT  size=-1 COLOR=RED>このボタンを押すとログファイルが削除されます。お気をつけ下さい。</FONT></FORM>
<HR>
- 各種設定用コントロール画面 -
<FORM ACTION="./manage.cgi" METHOD=POST>
<INPUT type="hidden" name="pw" VALUE="$in{'pw'}">
<INPUT TYPE="SUBMIT" VALUE="コントロール画面へ"></FORM>
<HR>
</center>
</FONT>
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
