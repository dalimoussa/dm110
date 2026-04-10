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
require "./data/check.txt";
require './cgi-lib.pl';
require './jcode.pl';

$logfile = "./data/access.txt";

&ReadParse;

if ($in{'pw'} ne $pw){&error;}

if($in{'4robot'} eq "1"){$match_title="ロボット巡回データ<BR>";}
if ($in{'date'} ne '') {$match_pattern=1;$match_title1="日にち：$in{'date'}<BR>";}
if ($in{'pagename'} ne '') {$match_pattern=1;$match_title2="ページ：$in{'pagename'}<BR>";}
if ($in{'keyword'} ne '') {$match_pattern=1;$match_title3="キーワード：$in{'keyword'}<BR>";}
if ($in{'searchengin'} ne '') {$match_pattern=1;$match_title4="サーチエンジン：$in{'searchengin'}<BR>";}
if ($in{'linkpage'} ne '') {$match_pattern=1;$match_title5="リンク元ページ：$in{'linkpage'}<BR>";}
if ($in{'host'} ne '') {$match_pattern=1;$match_title6="ホスト：$in{'host'}<BR>";}
if ($in{'heavyuser'} ne '') {$match_pattern=1;$match_title="追跡ID：$in{'heavyuser'}<BR>";}
if ($in{'robotname'} ne '') {$match_pattern=1;$match_title3="ロボット：$in{'robotname'}<BR>";}
if (!$match_pattern) {$match_title7="サイト全体";}


if (!open (LOG,"$logfile")) {$errorcomment="<BR><BR>ログファイルのオープンに失敗しました。"; &error; }
while (<LOG>) {push(@lines,$_);};
close(LOG);

$i=1;
$currentdate="";
$maxcounter=$maxcount;
if($maxcounter eq ""){$maxcounter=100;}

SI: foreach (@lines) {
 ($thedate,$id,$hostname,$pagename,$robot,$browser,$linkurl,$keyworddata,$os) = split(/\"\,\"/,);
 ($second,$minute,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime($thedate);
 $day=('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日')[(localtime($thedate))[6]];
 $month=(Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec)[(localtime($thedate))[4]];
 $year=$year+1900;
 $mon = $mon + 1;
 if($mday < 10){$mday="0$mday";}
 if($mon <10){$mon="0$mon";}
 $date = "$year.$mon.$mday";
 if($second <10){$second="0$second";}
 if($minute <10){$minute="0$minute";}
 if($hour <10){$hour="0$hour";}
 $seconds = "$hour:$minute:$second";
 
if($in{'4robot'} eq "1"){next SI if $id ne "robot";}
if($in{'4robot'} ne "1"){next SI if $id eq "robot";}

if ($in{'pagename'} ne ""){ $keyname ="アクセスページ";$keydata=$in{'pagename'}; next SI if $in{'pagename'} ne $pagename; }
if ($in{'heavyuser'} ne ""){ $keyname ="追跡ID";$keydata=$in{'heavyuser'}; next SI if $in{'heavyuser'} ne $id; }
if ($in{'date'} ne ""){ $keyname ="アクセス日";$keydata=$in{'date'}; next SI if $in{'date'} ne $date; }
if ($in{'linkpage'} ne ""){ $keyname ="リンク元";$keydata=$in{'linkpage'}; next SI if $in{'linkpage'} ne $linkurl; }
if ($in{'host'} ne ""){ $keyname ="ホスト";$keydata=$in{'host'}; next SI if $in{'host'} ne $hostname; }
if ($in{'robotname'} ne ""){ $keyname ="ロボット";$keydata=$in{'robotname'}; next SI if $in{'robotname'} ne $robot; }

if ($in{'keyword'} ne ""){
$keyname ="キーワード";
$keydata=$in{'keyword'};
$keyitem = $in{'keyword'};
$datacheck = $keyworddata;
&datadelete2;
}

if ($in{'searchengin'} ne ""){
$keyname ="サーチエンジン";
$keydata=$in{'searchengin'};
#next SI if $keyworddata eq "";
$keyitem = $in{'searchengin'};
$datacheck = $linkurl;
&datadelete1;
}
if ($os eq ""){$os = "-";}
$i2=$i-1;
@presecond[$i2]=$thedate;
@cursecond[$i]=$thedate;
@lsecond[$i]=$seconds;
@ldate[$i]=$date;
@lid[$i]=$id;
@lhostname[$i]=$hostname;
@lpagename[$i]=$pagename;
@lrobot[$i]=$robot;
@pageurl[$i]=$pageurl;
@browser[$i]=$browser;
@os[$i]=$os;
@linkurl[$i]=$linkurl;
@lkeyword[$i]=$keyworddata;

$i++;

}
 
if($ssi eq "1"){
$ssiblock = <<END_OF_BLOCK;
<option value="./showlog4robot.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">ロボット巡回解析
<option value="./showlog4robot.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">┣ 日ごとロボット巡回状況
<option value="./showlog4robot.cgi?cat=pagename&pw=$in{'pw'}&uid=$in{'uid'}">┣ ページごとロボット巡回状況
<option value="./showlog4robot.cgi?cat=robot&pw=$in{'pw'}&uid=$in{'uid'}">┗ ロボットごと巡回状況
END_OF_BLOCK
}

$! = 1;
$| = 1;

print "Content-type: text/html\n\n";
print <<EOF;
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<TITLE>$program</TITLE>
<script language="JavaScript">
<!--
function MenuSelect(loc,sel) {
if (sel.selectedIndex > 0) {
top.window.location.href = sel.options[sel.selectedIndex].value;
}
}
//-->
</script>
<SCRIPT Language="JavaScript">
<!--
function Pagereturn(){
history.back();
}
//-->
</SCRIPT>
</HEAD>
<BODY  BGCOLOR=#FFFFFF TEXT=black LINK=BLUE VLINK=SaddleBrown ALINK=BLUE TOPMARGIN=0>
<FORM METHOD=POST>
<select name="URL" onChange="MenuSelect(parent,this)">
<option value="">他の解析項目へ
<option value="./showlog.cgi?cat=summary&pw=$in{'pw'}">サマリー
<option value="./showlog.cgi?cat=date&pw=$in{'pw'}">アクセス数解析
<option value="./showlog.cgi?cat=date&pw=$in{'pw'}">┣ 日ごとアクセス数
<option value="./showlog.cgi?cat=week&pw=$in{'pw'}">┣ 曜日ごとアクセス数
<option value="./showlog.cgi?cat=hour&pw=$in{'pw'}">┣ 時間帯ごとアクセス数
<option value="./showlog.cgi?cat=pagename&pw=$in{'pw'}">┗ ページごとアクセス数
<option value="./showlog.cgi?cat=datev&pw=$in{'pw'}">ビジター数解析
<option value="./showlog.cgi?cat=datev&pw=$in{'pw'}">┣ 日ごとビジター数
<option value="./showlog.cgi?cat=pagenamev&pw=$in{'pw'}">┗ ページごとビジター数
<option value="./showlog.cgi?cat=allsearchengin&pw=$in{'pw'}">検索エンジン
<option value="./showlog.cgi?cat=allsearchengin&pw=$in{'pw'}">┣ 検索エンジン（総合）
<option value="./showlog.cgi?cat=searchengin&pw=$in{'pw'}">┣ 検索エンジン（キーワード）
<option value="./showlog.cgi?cat=keyword&pw=$in{'pw'}">┗ 利用されたキーワード
$ssiblock
<option value="./showlog.cgi?cat=linkpage&pw=$in{'pw'}">リンク元
<option value="./showlog.cgi?cat=host&pw=$in{'pw'}">ホスト
<option value="./showlog.cgi?cat=browser&pw=$in{'pw'}">ブラウザ
<option value="./showlog.cgi?cat=os&pw=$in{'pw'}">OS
<option value="./showlog.cgi?cat=rpt&pw=$in{'pw'}">リピータ
<option value="./showlog.cgi?cat=heavyuser&pw=$in{'pw'}">閲覧パターン
<option value="./showlog.cgi?cat=insite&pw=$in{'pw'}">サイト内リンク
<option value="./login.cgi?pw=$in{'pw'}">ログインページに戻る
</SELECT>
<CENTER>
<FONT><B>An-Analyzer for Access Trace</B></BR>- アクセス追跡 -</FONT><BR>
<table border="0" cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="6" cellspacing="1">
<TR bgcolor=#003366><TD><FONT SIZE=-1 COLOR=white>$match_title$match_title1$match_title2$match_title3$match_title4$match_title5$match_title6$match_title7</FONT></TD></TR>
</TABLE></td></tr></TABLE>
</FORM>
EOF
 
if($in{'4robot'} eq "1"){
print <<EOF;
<FONT SIZE=-1 color=blue>
※上記データを含んだロボットアクセス状況です。新しい順に並んでいます（最大$maxcounter件）。</FONT>
<table border="0" width="90%" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="1" cellspacing="1">
<TR bgcolor=#FFCC99 ALIGN=center><TD><FONT SIZE=-1>DATE</FONT></TD><TD><FONT SIZE=-1>ページ</FONT></TD><TD><FONT SIZE=-1>ロボットID</FONT></TD><TD><FONT SIZE=-1>HOST</FONT></TD><TD><FONT SIZE=-1>User Agent</FONT></TD><TD><FONT SIZE=-1>Referer</FONT></TD></TR>
EOF
}elsif ($in{'heavyuser'} eq ""){
print <<EOF;
<FONT SIZE=-1 color=blue>
※上記データを含んだ最新のアクセスデータが、新しい順に並んでいます（最大$maxcounter件）。<BR>
追跡IDをクリックすると、そのユーザーの閲覧履歴を見ることができます。</FONT>
<table border="0" width="90%" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="1" cellspacing="1">
<TR bgcolor=#FFCC99 ALIGN=center><TD><FONT SIZE=-1>DATE</FONT></TD><TD><FONT SIZE=-1>追跡ID</FONT></TD><TD><FONT SIZE=-1>ページ</FONT></TD><TD><FONT SIZE=-1>ホスト名</FONT></TD><TD><FONT SIZE=-1>ブラウザ</FONT></TD><TD><FONT SIZE=-1>リンク元</FONT></TD><TD><FONT SIZE=-1>キーワード</FONT></TD></TR>
EOF
}else{
print <<EOF;
<FONT SIZE=-1 color=blue>※ログ期間内のユーザーの閲覧履歴です。下に向かって時系列に並んでいます（最大$maxcounter件）。</FONT>
<table border="0" width="90%" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="1" cellspacing="1">
<TR bgcolor=#FFCC99 ALIGN=center><TD><FONT SIZE=-1>ページ</FONT></TD><TD><FONT SIZE=-1>DATE</FONT></TD><TD><FONT SIZE=-1>ホスト名</FONT></TD><TD><FONT SIZE=-1>ブラウザ<BR>(OS)</FONT></TD><TD><FONT SIZE=-1>リンク元</FONT></TD><TD><FONT SIZE=-1>キーワード</FONT></TD></TR>
EOF
}
if($in{'4robot'} eq "1"){
if ($i > $maxcounter){$i=$maxcounter;}
$count=1;
while ($count < $i) {
print <<EOF;
<TR bgcolor=#FAF4E7><TD><FONT SIZE=-1>@ldate[$count]<BR><FONT color=blue>@lsecond[$count]</FONT></FONT></TD><TD><FONT SIZE=-2>@lpagename[$count]</FONT></TD><TD><FONT SIZE=-1><B>@lrobot[$count]</B></FONT></TD><TD><FONT SIZE=-2>@lhostname[$count]</FONT></TD><TD><FONT SIZE=-2>@browser[$count]</FONT></TD><TD><FONT SIZE=-1>@linkurl[$count]</FONT></TD></TR>
<TR bgcolor=white><TD><CENTER><FONT SIZE=-2 COLOR=blue>↑</FONT></CENTER></TD><TD COLSPAN="6"></TD></TR>
EOF
$count++;
}
}elsif ($in{'heavyuser'} eq ""){
if ($i > $maxcounter){$i=$maxcounter;}
$count=1;
while ($count < $i) {
$linkurl2="@linkurl[$count]";
$linkurl3="@linkurl[$count]";
if (length($linkurl3) > 30) {$linkurl3=substr($linkurl3,0,30);$linkurl3="$linkurl3...";}
if($linkurl2 =~ /^http/){$linkurl2="<A HREF=\"./loc.cgi?loc=$linkurl2\" TARGET=\"NEW\">$linkurl3</A>";}
print <<EOF;
<TR bgcolor=#FAF4E7><TD><FONT SIZE=-1>@ldate[$count]<BR><FONT color=blue>@lsecond[$count]</FONT></FONT></TD><TD><FONT SIZE=-2><A HREF="./trace.cgi?heavyuser=@lid[$count]&pw=$in{'pw'}">@lid[$count]</a></FONT></TD><TD><FONT SIZE=-1><B>@lpagename[$count]</B></FONT></TD><TD><FONT SIZE=-2>@lhostname[$count]</FONT></TD><TD><FONT SIZE=-2>@browser[$count]</FONT></TD><TD><FONT SIZE=-1>$linkurl2</FONT></TD><TD><FONT SIZE=-1>@lkeyword[$count]</FONT></TD></TR>
<TR bgcolor=white><TD><CENTER><FONT SIZE=-2 COLOR=blue>↑</FONT></CENTER></TD><TD COLSPAN="6"></TD></TR>
EOF
$count++;
}
}else{
$count=$i;
$untilcount=0;
if ($i > $maxcounter){$untilcount=$i-$maxcounter;}
while ($count > $untilcount) {
$xxx=@lkeyword[$count];
if (length($xxx) > 40) {$xxx=substr($xxx,0,40);$xxx="$xxx...";}
$difsec=@cursecond[$count]-@presecond[$count];
 ($second,$minute,$hour,$x,$x,$x,$x,$x,$x)=localtime($difsec);
if ($difsec < 3601) { $difseclist="↓$minute分$second秒";}else{$difseclist="\　";}
if (@presecond[$count] ne "") {
print <<EOF;
<TR bgcolor=white><TD COLSPAN=2><CENTER><FONT SIZE=-1 COLOR=RED>$difseclist</FONT></CENTER></TD><TD COLSPAN="4">\　\</TD></TR>
EOF
$difseclist="";
}

if (@lsecond[$count] ne "") {
$linkurl2="@linkurl[$count]";
$linkurl3="@linkurl[$count]";
if (length($linkurl3) > 30) {$linkurl3=substr($linkurl3,0,30);$linkurl3="$linkurl3...";}
if($linkurl2 =~ /http:\/\//){$linkurl2="<A HREF=\"./loc.cgi?loc=$linkurl2\" TARGET=\"NEW\">$linkurl3</A>";}
print <<EOF;
<TR bgcolor=#FAF4E7><TD><FONT SIZE=-1 color=blue><B>@lpagename[$count]</B></FONT></TD><TD><FONT SIZE=-1 color=blue>@ldate[$count]<BR>@lsecond[$count]</FONT></TD><TD><FONT SIZE=-1>@lhostname[$count]</FONT></TD><TD><FONT SIZE=-1>@browser[$count]<BR>(@os[$count])</FONT></TD><TD><FONT SIZE=-1>$linkurl2</FONT></TD><TD><FONT SIZE=-1>$xxx</FONT></TD></TR>
EOF
}
$count=$count-1;
}
}

print <<EOF;
</TABLE></td></tr></TABLE></center>
<CENTER><FORM><INPUT type="button" value="戻る" onClick="Pagereturn()">
</FORM><BR>
<FONT SIZE=-1>Copyright 2002 <A TARGET="new" HREF="http://anglers-net.com/kyuukyuu">Anglers-net.com</A>. All rights Reserved.</FONT><BR><BR>
</CENTER>
</BODY>
</HTML>

EOF

exit;



sub datadelete1 {
($X,$XXX) = split(/http:\/\//,$datacheck);
($url,$X) = split(/\//,$XXX);
&check_keywordsub;
if($keyitem ne ""){$searchwind=0;next SI if $searchengin ne $keyitem;}
}

sub datadelete2 {
&encode($keyitem);
&encode($datacheck);
if($keyitem ne ""){$serachwind=0;next SI if $datacheck !~ /$keyitem/;}
}


sub error {
print <<EOM;
Content-type: text/html

<html><head>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<title>エラー</title></head>
<BODY BGCOLOR="white">
<BR><BR>
<CENTER>エラー$errorcomment</CENTER>
<BR><BR>
</body>
</html>
EOM
exit;
}


sub encode {
$_[0] =~ s/([^0-9A-Za-z_ ])/'%'.unpack('H2',$1)/ge;
$_[0] =~ s/\s/+/g;
$_[0];
}
