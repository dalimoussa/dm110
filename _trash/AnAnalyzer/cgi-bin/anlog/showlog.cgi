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
$rptlogfile = "./data/client.txt";
$logfile = "./data/access.txt";

&ReadParse;

if($in{'pw'} ne $pw){&error;}

$linkpagename=$in{'pagename'};
$linkdate=$in{'date'};
$linklinkurl=$in{'linkurl'};
$linkkeyword=$in{'keyword'};
&encode($linkpagename);
&encode($linkdate);
&encode($linklinkurl);
&encode($linkkeyword);

if (!open (LOG,"$logfile")) {$errorcomment="<BR><BR>ログファイルのオープンに失敗しました。<BR>ファイルがまだ作られていない\可\能\性もあります。"; &error; }
while (<LOG>) {push(@lines,$_);}
close(LOG);

$i=0;
$currentdate="";
$searchwind=1;
$allseachenginenum=0;
$seachenginenum=0;
$keywordnum=0;
$n=0;

SI: foreach (@lines) {
($thedate,$id,$hostname,$pagename,$pageurl,$browser,$linkurl,$keyworddata,$os,$end) = split(/\"\,\"/,);
($second,$minute,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime($thedate);
$day=('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日')[(localtime($thedate))[6]];
$year=$year+1900;
$mon = $mon + 1;
if($mday < 10){$mday="0$mday";}
if($mon < 10){$mon="0$mon";}
$date2="$year.$mon.$mday";
$firstdate0 = $thedate;
$firstdate1 = "$year年$mon月$mday日$hour時$minute分";
$firstdate2 = "$year.$mon.$mday";
($lastdate0) || ($lastdate0=$thedate);
($lastdate1) || ($lastdate1="$year年$mon月$mday日$hour時$minute分");
($lastdate2) || ($lastdate2="$year.$mon.$mday");

next SI if $end ne "\n";
if($id eq "robot"){$robotcount++; next SI;}

$dataconf="$date2$hostname$linkurl$keyworddata";

$dataconfs{$dataconf}++;

$id4count="$id$date2";
$idcounts{$id4count}++;
$realidcounts{$id}++;

if($in{'linkurl'}){
$keyitem = $in{'linkurl'};
$datacheck = $linkurl;
&datadelete1;
}

if($in{'keyword'}) {
$keyitem = $in{'keyword'};
$datacheck = $keyworddata;
&datadelete4;
}

if($in{'pagename'}){
$keyitem = $in{'pagename'};
$datacheck = $pagename;
&datadelete2;
}

if($in{'date'}){
$keyitem = $in{'date'};
$datacheck = $date2;
&datadelete2;
}

if($in{'insite'}){
$keyitem = $in{'insite'};
$datacheck = $linkurl;
&datadelete2;
}

if($in{'deleteinsite'} eq "含めない"){
&datadelete3;
}

if($in{'deleteengine'} eq "含めない"){
$datacheck = $linkurl;
&datadelete5;
}

if(($in{'cat'} eq "week")||($in{'cat'} eq "summary")){$days{$day}++;}

$dates{$date2}++;

if(($in{'cat'} eq "hour")||($in{'cat'} eq "summary")){$hours{$hour}++;}

if($pagename){ $pagenames{$pagename}++;}

if($dataconfs{$dataconf} < 2){
@splitkeyword = split(/\ /, $keyworddata);
foreach $ix (@splitkeyword) {
if($ix =~ /http:\/\//){$ix="";}
if($ix =~ /cache:/){$ix="";}
if(length($ix) > 41){$ix="";}
if ($ix) {$keywords{$ix}++;$keywordnum++;}
}
}

$pageurls{$pageurl}++;
if (!$pageindex{$pagename}) { $pageindex{$pagename}=$pageurl; }
$pageindex{$pagename}=$pageurl;

$linkurl="nknown" if $linkurl!~ /http\:\/\//;
$linkurls{$linkurl}++ if $linkurl !~ /nknown/;

if($dataconfs{$dataconf} < 2){
($X,$XXX) = split(/http:\/\//,$linkurl);
($url,$X) = split(/\//,$XXX);
if ($keyworddata) {
&check_keywordsub;
if($searchengin){
$searchengins{$searchengin}++;
$seachenginenum++;
}
}
&check_keywordsub;
if($searchengin){
$allsearchengins{$searchengin}++;
$allseachenginenum++;
}
}

$ids{$id}++;

if($in{'cat'} eq "host"){$hostnames{$hostname}++;}

if($in{'cat'} eq "browser"){
if($ids{$id} < 2){
$browsers{$browser}++;
$browsersnum++;
}
}

if($in{'cat'} eq "os"){
if($ids{$id} < 2){
$oss{$os}++;
$osnum++;
}
}
if($in{'cat'} eq "datev"){
$vid1="$date2$id";
if($vid1s{$vid1} < 1){$vid1s{$vid1}++;$vistcountdates{$date2}++;}
}
if($in{'cat'} eq "pagenamev"){
if($pagename){
$vid2="$date2$id$pagename";
if($vid2s{$vid2} < 1){$vid2s{$vid2}++;$vistcountpagenames{$pagename}++;}
}
}
$idcounts2{$id4count}++;
$realidcounts2{$id}++;
$n++;
$nooflines=$#lines+1;
}

$nooflines = $nooflines-$robotcount;
$vistercount = keys %idcounts;
$vistercount2 = keys %idcounts2;
$realidcount = keys %realidcounts;
$realidcount2 = keys %realidcounts2;
if ($in{'cat'} eq "rpt") {$rpts{1}=$realidcount;&datarpt;}


################################
if($in{'cat'} ne "summary"){
%pullitems=%keywords;
&datasort;
$pullkeywords=$pullkeys;

%pullitems=%allsearchengins;
&datasort;
$pullallsearchengins=$pullkeys;

%pullitems=%searchengins;
&datasort;
$pullsearchengins=$pullkeys;

%pullitems=%pagenames;
&datasort;
$pullpagenames=$pullkeys;

%pullitems=%linkurls;
&datasort3;
$pulllinks=$pullkeys;
}
%pullitems=%dates;
&datasort2;
$pulldays=$pullkeys;
################################

################################
$sresult="<FONT COLOR=white size=-1>\　\アクセス数：$n</FONT>";
if($in{'cat'} eq ""){
$in{'cat'} = "date";
}
if($in{'cat'} eq "summary"){
$exphtml="exp19.html";
$subtitle="サマリー<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$searchwind = "summary";
}

if($in{'cat'} eq "pagename"){
$exphtml="exp4.html";
$traceid = "pagename";
%items=%pagenames;
$maxlimit = $maxranknumber;
$subtitle="ページごとアクセス数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result=$sresult;
$maxitemdata=$nooflines;
}

if($in{'cat'} eq "keyword"){
$exphtml="exp5.html";
$traceid = "keyword";
%items=%keywords;
$maxlimit = $maxranknumber;
$subtitle="キーワード解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=WHITE SIZE=-1>\　\解析有効データ数：$keywordnum</FONT>";
$maxitemdata=$keywordnum;
}
if($in{'cat'} eq "allsearchengin"){
$exphtml="exp13.html";
$traceid = "allsearchengin";
%items=%allsearchengins;
$maxlimit = $maxranknumber;
$subtitle="サーチエンジン解析1（総合）<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=WHITE SIZE=-1>\　\解析有効データ数：$allseachenginenum</FONT>";
$maxitemdata=$allseachenginenum;
}
if($in{'cat'} eq "searchengin"){
$exphtml="exp6.html";
$traceid = "searchengin";
%items=%searchengins;
$maxlimit = $maxranknumber;
$subtitle="サーチエンジン解析2（キーワード検索）<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=WHITE SIZE=-1>\　\解析有効データ数：$seachenginenum</FONT>";
$maxitemdata=$seachenginenum;
}
if($in{'cat'} eq "linkpage"){
$exphtml="exp7.html";
$traceid = "linkpage";
%items=%linkurls;
$maxlimit = $maxranknumber;
$subtitle="リンク元解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result=$sresult;
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "date"){
$exphtml="exp1.html";
$traceid = "date";
%items=%dates;
$maxlimit = $maxranknumber;
$subtitle="日ごとアクセス数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result=$sresult;
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "week"){
$exphtml="exp2.html";
$traceid = "week";
%items=%days;
$maxlimit = $maxranknumber;
$subtitle="曜日ごとアクセス数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result=$sresult;
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "hour"){
$exphtml="exp3.html";
$traceid = "hour";
%items=%hours;
$maxlimit = $maxranknumber;
$subtitle="時間帯ごとアクセス数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result=$sresult;
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "browser"){
$exphtml="exp9.html";
$traceid = "browser";
%items=%browsers;
$maxlimit = $maxranknumber;
$subtitle="ブラウザ解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=WHITE SIZE=-1>\　\解析有効データ数：$browsersnum</FONT>";
$maxitemdata=$browsersnum;
}
if($in{'cat'} eq "os"){
$exphtml="exp14.html";
$traceid = "os";
%items=%oss;
$maxlimit = $maxranknumber;
$subtitle="OS解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=WHITE SIZE=-1>\　\解析有効データ数：$osnum</FONT>";
$maxitemdata=$osnum;
}
if($in{'cat'} eq "heavyuser"){
$exphtml="exp11.html";
$traceid = "heavyuser";
%items=%ids;
$maxlimit = $maxranknumber;
$subtitle="閲覧パターン解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "rpt"){
$exphtml="exp10.html";
$traceid = "rpt";
%items=%rpts;
$maxlimit = $maxranknumber;
$subtitle="リピータ解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$maxitemdata=$vistercount;
$searchwind = "rpt";
}
if($in{'cat'} eq "insite"){
$exphtml="exp12.html";
$traceid = "insite";
%items=%pagenames;
$maxlimit = $maxranknumber;
$subtitle="自サイト内リンク解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "host"){
$exphtml="exp8.html";
$traceid = "host";
%items=%hostnames;
$maxlimit = $maxranknumber;
$subtitle="ホスト解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "pagenamev"){
$exphtml="exp17.html";
%items=%vistcountpagenames;
$subtitle="ページごとビジター数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=white size=-1>\　\各ページへ訪れた人の数です。</FONT>";
$maxitemdata=$nooflines;
}
if($in{'cat'} eq "datev"){
$exphtml="exp18.html";
%items=%vistcountdates;
$subtitle="日ごとビジター数解析<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT SIZE=-1 color=white>（説明）</FONT></A>";
$result="<FONT COLOR=white size=-1>\　\ビジター数：延べ$vistercount2人</FONT>";
$maxitemdata=$vistercount;
}

if($ssi eq "1"){
$ssiblock = <<END_OF_BLOCK;
<option value="./showlog4robot.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">ロボット巡回解析
<option value="./showlog4robot.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">┣ 日ごとロボット巡回状況
<option value="./showlog4robot.cgi?cat=pagename&pw=$in{'pw'}&uid=$in{'uid'}">┣ ページごとロボット巡回状況
<option value="./showlog4robot.cgi?cat=robot&pw=$in{'pw'}&uid=$in{'uid'}">┗ ロボットごと巡回状況
END_OF_BLOCK
}
################################
$titlegif="title.gif";
################################
$exphtml="exp16.html";
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
<script language="JavaScript">
<!--
function openWindow() {
window.open("","newwin",'toolbar=0,location=0,scrollbars=0,width=400,height=400,resizable=0');
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
<BODY BGCOLOR=#FFFFFF TEXT=black LINK=BLUE VLINK=SaddleBrown ALINK=BLUE TOPMARGIN=0>

<FORM METHOD=POST>
<center><TABLE WIDTH=95%>
<TR><TD>
<TABLE WIDTH=650>
<TR><TD>
<a href="http://anglers-net.com/anlog/index2.html"><IMG SRC="$gifdirurl$titlegif" border=0></A>
</TD><TD>
<FONT COLOR=RED>ログ取得期間：$firstdate2 → $lastdate2</FONT><BR>
<FONT COLOR=RED>アクセス総数：$nooflines</FONT><BR>
<a href=\"$gifdirurl$exphtml\" onClick=openWindow() target=\"newwin\"><FONT COLOR=RED>ビジター総数</FONT></A><FONT COLOR=RED>：$realidcount人（延べ$vistercount人）</FONT>
</TD></TR>
</TABLE>
</TD></TR>
</TABLE>

<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>$subtitle</FONT>
</TD><TD ALIGN=RIGHT>
<select name="URL" onChange="MenuSelect(parent,this)">
<option value="">他の解析項目へ
<option value="./showlog.cgi?cat=summary&pw=$in{'pw'}&uid=$in{'uid'}">サマリー
<option value="./showlog.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">アクセス数解析
<option value="./showlog.cgi?cat=date&pw=$in{'pw'}&uid=$in{'uid'}">┣ 日ごとアクセス数
<option value="./showlog.cgi?cat=week&pw=$in{'pw'}&uid=$in{'uid'}">┣ 曜日ごとアクセス数
<option value="./showlog.cgi?cat=hour&pw=$in{'pw'}&uid=$in{'uid'}">┣ 時間帯ごとアクセス数
<option value="./showlog.cgi?cat=pagename&pw=$in{'pw'}&uid=$in{'uid'}">┗ ページごとアクセス数
<option value="./showlog.cgi?cat=datev&pw=$in{'pw'}&uid=$in{'uid'}">ビジター数解析
<option value="./showlog.cgi?cat=datev&pw=$in{'pw'}&uid=$in{'uid'}">┣ 日ごとビジター数
<option value="./showlog.cgi?cat=pagenamev&pw=$in{'pw'}&uid=$in{'uid'}">┗ ページごとビジター数
<option value="./showlog.cgi?cat=allsearchengin&pw=$in{'pw'}&uid=$in{'uid'}">検索エンジン
<option value="./showlog.cgi?cat=allsearchengin&pw=$in{'pw'}&uid=$in{'uid'}">┣ 検索エンジン（総合）
<option value="./showlog.cgi?cat=searchengin&pw=$in{'pw'}&uid=$in{'uid'}">┣ 検索エンジン（キーワード）
<option value="./showlog.cgi?cat=keyword&pw=$in{'pw'}&uid=$in{'uid'}">┗ 利用されたキーワード
$ssiblock
<option value="./showlog.cgi?cat=linkpage&pw=$in{'pw'}&uid=$in{'uid'}">リンク元
<option value="./showlog.cgi?cat=host&pw=$in{'pw'}&uid=$in{'uid'}">ホスト
<option value="./showlog.cgi?cat=browser&pw=$in{'pw'}&uid=$in{'uid'}">ブラウザ
<option value="./showlog.cgi?cat=os&pw=$in{'pw'}&uid=$in{'uid'}">OS
<option value="./showlog.cgi?cat=rpt&pw=$in{'pw'}&uid=$in{'uid'}">リピータ
<option value="./showlog.cgi?cat=heavyuser&pw=$in{'pw'}&uid=$in{'uid'}">閲覧パターン
<option value="./showlog.cgi?cat=insite&pw=$in{'pw'}&uid=$in{'uid'}">サイト内リンク
<option value="./login.cgi?pw=$in{'pw'}">ログインページに戻る
</SELECT>
</TD>
</TR>
</TABLE>
EOF
################################

################################
&dataanalyze;
sub dataanalyze {
$highest=0;
undef %percent;
undef %percentage;
undef %barsize;
undef $decimal;
undef $key;
undef $itemcounter;
undef $maxitems;

foreach $key (keys %items) {
if ($items{$key} > $highest) {$highest=$items{$key};}
}
foreach $key (keys %items) {
$barsize{$key} = int(($items{$key} * 200) / $highest);     
$percent{$key} = ($items{$key} / $maxitemdata) * 100;
if (rindex($percent{$key},".") != -1)
{$decimal = substr($percent{$key},rindex($percent{$key},"."),3);}
if ($decimal == 0) {$decimal="";}
$percentage{$key} = int($percent{$key}).$decimal;
}
}
################################

################################
if($in{'keyword'} eq ""){$in{'keyword'}="全て対象";}
if($in{'linkurl'} eq ""){$in{'linkurl'}="全て対象";}
if($in{'pagename'} eq ""){$in{'pagename'}="全て対象";}
if($in{'date'} eq ""){$in{'date'}="全て対象";}
$pagenameblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>対象ページ：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="pagename">
<OPTION VALUE="">全て対象
$pullpagenames
</SELECT>
</TD></TR>
END_OF_BLOCK

$dayblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>対象日：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="date">
<OPTION VALUE="">全て対象
$pulldays
</SELECT>
</TD></TR>
END_OF_BLOCK

$keywordblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>キーワード：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="keyword">
<OPTION VALUE="">全て対象
$pullkeywords
</SELECT>
</TD></TR>
END_OF_BLOCK

$searchenginblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="linkurl">
<OPTION VALUE="">全て対象
$pullsearchengins
</SELECT>
</TD></TR>
END_OF_BLOCK

$allsearchenginblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="linkurl">
<OPTION VALUE="">全て対象
$pullallsearchengins
</SELECT>
</TD></TR>
END_OF_BLOCK

$linkblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>リンク元：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="insite">
$pulllinks
</SELECT>
</TD></TR>
END_OF_BLOCK

$linkdeleteblock = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>自サイト内リンク：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="deleteinsite">
<OPTION VALUE="">含める
<OPTION>含めない
</SELECT>
</TD></TR>
END_OF_BLOCK

$linkdeleteengine = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>主要サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<SELECT NAME="deleteengine">
<OPTION VALUE="">含める
<OPTION>含めない
</SELECT>
</TD></TR>
END_OF_BLOCK

$keywordblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>キーワード：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'keyword'}</FONT>
</TD></TR>
END_OF_BLOCK

$searchenginblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'linkurl'}</FONT>
</TD></TR>
END_OF_BLOCK

$allsearchenginblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'linkurl'}</FONT>
</TD></TR>
END_OF_BLOCK

$pagenameblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>対象ページ：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'pagename'}</FONT>
</TD>
</TR>
END_OF_BLOCK

$dayblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>対象日：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'date'}</FONT>
</TD></TR>
END_OF_BLOCK

$linkblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>リンク元：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'insite'}</FONT>
</TD></TR>
END_OF_BLOCK

if($in{'deleteinsite'} ne "含めない"){
$in{'deleteinsite'}= "含める";
}
$linkdeleteblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>自サイト内リンク：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'deleteinsite'}</FONT>
</TD></TR>
END_OF_BLOCK

if($in{'deleteengine'} ne "含めない"){
$in{'deleteengine'}= "含める";
}
$linkdeleteengineblock2 = <<END_OF_BLOCK;
<TR><TD ALIGN=RIGHT>
<FONT SIZE=-1>主要サーチエンジン：</FONT></TD>
<TD ALIGN=LEFT>
<FONT SIZE=-1>$in{'deleteengine'}</FONT>
</TD></TR>
END_OF_BLOCK

################################

################################
if($in{'cat'} eq "linkpage"){$searchblock="$pagenameblock\n$dayblock\n$linkdeleteblock\n$linkdeleteengine\n";$resultblock="$pagenameblock2\n$dayblock2\n$linkdeleteblock2\n$linkdeleteengineblock2\n";}
if($in{'cat'} eq "searchengin"){$searchblock="$pagenameblock\n$keywordblock\n$dayblock\n";$resultblock="$pagenameblock2\n$keywordblock2\n$dayblock2\n";}
if($in{'cat'} eq "allsearchengin"){$searchblock="$pagenameblock\n$dayblock\n";$resultblock="$pagenameblock2\n$dayblock2\n";}
if($in{'cat'} eq "keyword"){$searchblock="$searchenginblock\n$pagenameblock\n$dayblock\n";$resultblock="$searchenginblock2\n$pagenameblock2\n$dayblock2\n";}
if($in{'cat'} eq "pagename"){$searchblock="$allsearchenginblock\n$keywordblock\n$dayblock\n";$resultblock="$allsearchenginblock2\n$keywordblock2\n$dayblock2\n";}
if($in{'cat'} eq "pagenamev"){$searchblock="$dayblock\n";$resultblock="$dayblock2\n";}
if($in{'cat'} eq "date"){$searchblock="$pagenameblock\n";$resultblock="$pagenameblock2\n";}
if($in{'cat'} eq "datev"){$searchblock="$pagenameblock\n";$resultblock="$pagenameblock2\n";}
if($in{'cat'} eq "week"){$searchblock="$pagenameblock\n";$resultblock="$pagenameblock2\n";}
if($in{'cat'} eq "hour"){$searchblock="$pagenameblock\n$dayblock\n";$resultblock="$pagenameblock2\n$dayblock2\n";}
if($in{'cat'} eq "browser"){$searchblock="$pagenameblock\n";$resultblock="$pagenameblock2\n";}
if($in{'cat'} eq "os"){$searchblock="$pagenameblock\n";$resultblock="$pagenameblock2\n";}
if($in{'cat'} eq "host"){$searchblock="$pagenameblock\n$dayblock\n";$resultblock="$pagenameblock2\n$dayblock2\n";}
if($in{'cat'} eq "heavyuser"){$searchblock="$pagenameblock\n$dayblock\n";$resultblock="$pagenameblock2\n$dayblock2\n";}
if($in{'cat'} eq "insite"){$searchblock="$linkblock\n";$resultblock="$linkblock2\n";}
################################

$dotgif="dot1.gif";

################################
if ($searchwind eq "1"){
print <<EOF;
<TABLE WIDTH=95% border="0" cellpadding="0" cellspacing="1" BGCOLOR=#003366><tr><td><div align="center">
<TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
</FORM><FORM ACTION="./showlog.cgi" METHOD=POST>
$searchblock
<TR><TD ALIGN=RIGHT></TD>
<TD ALIGN=LEFT>
<INPUT TYPE=HIDDEN NAME="cat" VALUE="$in{'cat'}">
<INPUT TYPE=HIDDEN NAME="pw" VALUE="$in{'pw'}">
<INPUT TYPE=HIDDEN NAME="uid" VALUE="$in{'uid'}">
<INPUT TYPE="SUBMIT" VALUE="絞り込み"></FORM></TD>
</TR></TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><FONT SIZE=-1>　</FONT>
EOF
}elsif($searchwind eq "rpt"){
$dotgif="dot2.gif";
}elsif($searchwind eq "summary"){
$dotgif="dot1.gif";
}else{
$dotgif="dot2.gif";
print <<EOF;
<TABLE WIDTH=95% border="0" cellpadding="0" cellspacing="1" BGCOLOR=#003366><tr><td><div align="center">
<TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
</FORM><FORM>
$resultblock
<TR><TD ALIGN=RIGHT>
</TD>
<TD ALIGN=LEFT>
<FORM><INPUT type="button" value="再検索" onClick="Pagereturn()">
</FORM></TD>
</TR></TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><FONT SIZE=-1>　</FONT>
EOF
}
################################

################################
if($in{'cat'} eq "summary"){
$datedif=$lastdate0-$firstdate0;
if($datedif > 86400){
$aveaccess = $nooflines/$datedif*86400;
$aveaccess = int($aveaccess + 0.5);
$avevisitor = $vistercount/$datedif*86400;
$avevisitor = int($avevisitor + 0.5);
$avecomment="１日あたりの平均アクセス数は<FONT COLOR=BLUE>$aveaccess回</FONT>で、平均訪問者数は<FONT COLOR=BLUE>$avevisitor人</FONT>です。";
$avecomment2="<FONT COLOR=white>（１日平均$aveaccess回）</FONT>";
}
print<<EOF;
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
<TR><TD>
<FONT SIZE=-1>ログ取得期間は、<FONT COLOR=BLUE>$firstdate1</FONT>から<FONT COLOR=BLUE>$lastdate1</FONT>までで、この間、ログ解析対象ページに<FONT COLOR=BLUE>$nooflines回</FONT>のアクセスがありました。訪問者は延べ<FONT COLOR=BLUE>$vistercount人</FONT>で、複数回訪れた人を除いた実数は<FONT COLOR=BLUE>$realidcount人</FONT>になります。$avecomment主要サーチエンジン経由のアクセスは、ログ取得期間中<FONT COLOR=BLUE>$allseachenginenum回</FONT>ありました。<BR>
<BR>
なお、ログ取得期間は刻々と変化していき、設定期間の<FONT COLOR=BLUE>$numofdays日間</FONT>を過ぎますと最初の日のアクセスデータが時間とともに少なくなっていきますのでご留意下さい。つまりログ取得期間を7日とした場合、ログ取得期間は7日×24時間=168時間ということになり、168時間を経過したデータは順次削除されます。<BR>
また、サーチエンジンは、解析対象としているものに限ります。</FONT>
</TD></TR></TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
EOF
%items=%dates;
$maxlimit = $maxranknumber;
$maxitemdata=$nooflines;
&dataanalyze;
@xyz = sort(@xyz);
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>日ごとアクセス数</FONT> $avecomment2
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (@xyz) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
}
%items=%days;
&dataanalyze;
print<<EOF;
</TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>曜日ごとアクセス数</FONT>
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
@weekdata=('月曜日','火曜日','水曜日','木曜日','金曜日','土曜日','日曜日');
foreach $week (@weekdata) {
if($week eq "土曜日"){$weekcolor="color=blue";}
if($week eq "日曜日"){$weekcolor="color=red";}
if($barsize{$week} eq ""){$barsize{$week}=0;}
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1 $weekcolor>$week:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$week}>
<FONT SIZE=-1>$items{$week} ($percentage{$week} %)</FONT>
</TD>
</TR>
EOF
}
%items=%hours;
&dataanalyze;
$hourcount = 0;
print<<EOF;
</TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>時間帯ごとアクセス数</FONT>
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF

while ($hourcount < 24) {
if($percentage{$hourcount} eq ""){$percentage{$hourcount}=0;}
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$hourcount時:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$hourcount}>
<FONT SIZE=-1>$items{$hourcount} ($percentage{$hourcount} %)</FONT>
</TD>
</TR>
EOF
$hourcount++;
}
%items=%pagenames;
$maxlimit = 20;
&dataanalyze;
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
</TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>ページごとアクセスランキング</FONT>$top <FONT COLOR=white size=-1>※数字はアクセス数</FONT>
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
%items=%allsearchengins;
$maxlimit = 20;
&dataanalyze;
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
</TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>サーチエンジンランキング</FONT>$top <FONT COLOR=white size=-1>※数字はアクセス数</FONT>
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
%items=%keywords;
$maxlimit = 20;
&dataanalyze;
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
</TABLE></td></tr></TABLE></DIV></td></tr></TABLE></center><BR>
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>キーワードランキング</FONT>$top <FONT COLOR=white size=-1>※数字は使用された回数</FONT>
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
###########################
}elsif($in{'cat'} eq "date"){
###########################
@xyz = sort(@xyz);
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (@xyz) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1><A TARGET="_top" HREF="./trace.cgi?pagename=$linkpagename&date=$tracevalue&pw=$in{'pw'}">$items{$key}</A>
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
}
###########################
}elsif($in{'cat'} eq "datev"){
###########################
@xyz = sort(@xyz);
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (@xyz) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}人</FONT>
</TD>
</TR>
EOF
}
###########################
}elsif($in{'cat'} eq "pagenamev"){
###########################
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$top$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}人</FONT>
</TD>
</TR>
EOF
}
###########################
}elsif($in{'cat'} eq "week"){
###########################
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
@weekdata=('月曜日','火曜日','水曜日','木曜日','金曜日','土曜日','日曜日');
foreach $week (@weekdata) {
if($week eq "土曜日"){$weekcolor="color=blue";}
if($week eq "日曜日"){$weekcolor="color=red";}
if($barsize{$week} eq ""){$barsize{$week}=0;}
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1 $weekcolor>$week:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$week}>
<FONT SIZE=-1>$items{$week} ($percentage{$week} %)</FONT>
</TD>
</TR>
EOF
}
###########################
}elsif($in{'cat'} eq "hour"){
###########################
$hourcount = 0;
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF

while ($hourcount < 24) {
if($percentage{$hourcount} eq ""){$percentage{$hourcount}=0;}
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$hourcount時:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$hourcount}>
<FONT SIZE=-1>$items{$hourcount} ($percentage{$hourcount} %)</FONT>
</TD>
</TR>
EOF
$hourcount++;
}
###########################
}elsif($in{'cat'} eq "linkpage"){
###########################
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$top$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
$xxx=$key;
if (length($xxx) > 50) {
$xxx=substr($xxx,0,50);
$xxx="$xxx...";
}
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><A HREF="./loc.cgi?loc=$key" TARGET="NEW"><FONT SIZE=-1>$xxx:</FONT></A></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1><A TARGET="_top" HREF="./trace.cgi?pagename=$linkpagename&date=$linkdate&linkpage=$tracevalue&pw=$in{'pw'}">$items{$key}</A>
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
###########################
}elsif($in{'cat'} eq "rpt"){
###########################
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key回:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}

###########################
}elsif($in{'cat'} eq "insite"){
###########################
if($searchwind eq "0"){
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>上記ページから以下のページにアクセスされています</FONT> $top
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
}
###########################
}elsif(($in{'cat'} eq "browser")||($in{'cat'} eq "os")){
###########################
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$top$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1>$items{$key}
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
###########################
}elsif($in{'cat'} eq "heavyuser"){
###########################
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$top
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1><A TARGET="_top" HREF="./trace.cgi?date=$linkdate&heavyuser=$tracevalue&pw=$in{'pw'}">$items{$key}</A>
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
###########################
}else{
###########################
$maxitems = keys %items;
if ($maxlimit > $maxitems) {$maxlimit = $maxitems;}
if ( ($maxlimit > 0) && ($maxlimit != $maxitems) )
{$top="<FONT SIZE=-1 color=white>（トップ$maxlimit）</FONT>";}
else {$maxlimit = keys %items;}
print<<EOF;
<center>
<TABLE BGCOLOR=#003366 WIDTH=95%>
<TR><TD>
<FONT COLOR=white>解析結果</FONT>$top$result
</TD>
</TR>
</TABLE>
<table WIDTH=95% border="0" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center"><TABLE BORDER=0 width="100%" cellpadding="5" cellspacing="1"><TR><TD BGCOLOR=#FAF4E7><TABLE>
EOF
foreach $key (sort sortbyitems keys(%items)) {
if ($itemcounter < $maxlimit) {
$tracevalue=$key;
&encode($tracevalue);
if($traceid eq "pagename"){$linkpagename=$tracevalue;}
if($traceid eq "keyword"){$linkkeyword=$tracevalue;}
if($traceid eq "searchengin"){$linklinkurl=$tracevalue;}
if($traceid eq "allsearchengin"){$linklinkurl=$tracevalue;}
if($traceid eq "host"){$linkhost=$tracevalue;}
print<<EOF;
<TR><TD ALIGN=RIGHT><FONT SIZE=-1>$key:</FONT></TD>
<TD ALIGN=LEFT>
<IMG SRC="$gifdirurl$dotgif" HEIGHT=10 WIDTH=$barsize{$key}>
<FONT SIZE=-1><A TARGET="_top" HREF="./trace.cgi?pagename=$linkpagename&keyword=$linkkeyword&date=$linkdate&searchengin=$linklinkurl&host=$linkhost&pw=$in{'pw'}">$items{$key}</A>
($percentage{$key} %)</FONT>
</TD>
</TR>
EOF
$itemcounter++;
}
}
###########################
}
###########################

###########################
print "</TABLE>\n</td></tr></TABLE></DIV></td></tr></TABLE></center>\n";
print <<EOF;
<BR>
<CENTER>
<FONT SIZE=-1>Copyright 2002 <A TARGET="new" HREF="http://anglers-net.com/kyuukyuu">Anglers-net.com</A>. All rights Reserved.</FONT><BR><BR>
</CENTER>
</BODY>
</HTML>
EOF

exit;


###########################
sub sortbyitems { $items{$b} <=> $items{$a}; };
###########################
sub datadelete1 {
     ($X,$XXX) = split(/http:\/\//,$datacheck);
     ($url,$X) = split(/\//,$XXX);
     &check_keywordsub;
     if($keyitem ne ""){$searchwind=0;next SI if $searchengin ne $keyitem;}
}

sub datadelete2 {
if($keyitem ne ""){$searchwind=0;next SI if $datacheck ne $keyitem;}
}

sub datadelete3 {
     $searchwind=0;
     $deleteresult=0;
     foreach $deleteurl (@deleteurls) {
     if($deleteurl){$deleteresult=1 if $linkurl =~ /$deleteurl/;}
     }
     next SI if $deleteresult == 1;
}

sub datadelete4 {
     &encode($keyitem);
     &encode($datacheck);
     if($keyitem ne ""){$searchwind=0;next SI if $datacheck !~ /$keyitem/;}
}

sub datadelete5 {
     ($X,$XXX) = split(/http:\/\//,$datacheck);
     ($url,$X) = split(/\//,$XXX);
     &check_keywordsub;
     next SI if $searchengin ne "";
}

###########################
sub datasort {
     $pullkeys="";
     $pullkey="";
     $counter=0;
     foreach $pullkey (sort sortbyitems2 keys(%pullitems)) {
          if ($counter < $maxranknumber) {
               if ($pullkey ne "") {
               $pullkeys="$pullkeys<OPTION>$pullkey";
               }
          $counter++;
          }
     }
}
###########################
sub sortbyitems2 { $pullitems{$b} <=> $pullitems{$a}; };
###########################
sub datasort2 {
     $pullkeys="";
     $pullkey="";
     $counter=0;
     @xyz = keys(%pullitems);
     @xyz = sort(@xyz);
     @xyz = reverse(@xyz);
          foreach $pullkey (@xyz) {
               if ($counter < 60) {
                    if ($pullkey ne "") {
                    $pullkeys="$pullkeys<OPTION>$pullkey";
                    }
               $counter++;
          }
     }
}
###########################
sub datasort3 {
     $pullkeys="";
     $pullkey="";
     $counter=0;
     foreach $pullkey (sort sortbyitems2 keys(%pullitems)) {
          if ($counter < $maxranknumber) {
               if ($pullkey ne "") {
               $pullkey2 = $pullkey;
                    if ($pullkey2 =~ /$myhomepage/){
                    $pullkeys="$pullkeys<OPTION>$pullkey";
                    }
               }
               $counter++;
          }
     }
}
###########################
sub encode {
$_[0] =~ s/([^0-9A-Za-z_ ])/'%'.unpack('H2',$1)/ge;
$_[0] =~ s/\s/+/g;
$_[0];
}

sub datarpt {
if (!open (RPTLOG,"$rptlogfile")) {$errorcomment="<BR><BR><BR><BR>リピータファイルのオープンに失敗しました。<BR>ファイルがまだ作られていない\可\能\性もあります。"; &error; }
@DATA = <RPTLOG>;
close(RPTLOG);
foreach $line (@DATA) {
($x,$rptcnt,$x,$x,$x,$browser,$x,$x,$x) = split(/\"\,\"/,$line);
if ($rptcnt ne "") {$rpts{1}=$rpts{1}-1;$rpts{$rptcnt}++;}
}
}
###########################
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
###########################
