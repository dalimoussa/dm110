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

require './jcode.pl';
require "./data/config.txt";

if ($ENV{'REQUEST_METHOD'} eq "POST") {
read(STDIN, $formdata, $ENV{'CONTENT_LENGTH'});
} else { $formdata = $ENV{'QUERY_STRING'}; }

@pairs = split(/&/,$formdata);

foreach $pair (@pairs) {
    ($name, $value) = split(/=/, $pair);
    $name =~ tr/+/ /;
    $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
    $value =~ tr/+/ /;
    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
    $value =~ s/</&lt;/g;
    $value =~ s/>/&gt;/g;
    $value =~ s/\n//g;
    $value =~ s/\,//g;
    $value =~ s/　/ /g;
    &jcode'convert(*value,'sjis');
    $in{$name} = $value;
}

if($in{'pw'} ne $pw){&error;}

if($in{'word'} ne ""){
$wind=1;
}
$word=$in{'word'};
$wordor=$in{'word'};
&encode($word);
$titlegif="title.gif";

print "Content-type: text/html\n\n";
print <<EOF;
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<TITLE>ログ用html作成</TITLE></HEAD>
<SCRIPT Language="JavaScript">
<!--
function Pagereturn(){
history.back();
}
//-->
</SCRIPT>

<BODY BGCOLOR=#FFFFFF TEXT=black LINK=BLUE VLINK=SaddleBrown ALINK=BLUE TOPMARGIN=0>
<BR><BR>
<CENTER>
<IMG SRC="$gifdirurl$titlegif"><BR>
<BR>
EOF

if($wind ne "1"){
print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<center><FORM ACTION="./encode.cgi" METHOD=POST>
ページ名\：<INPUT type="text" name="word" size="30">
<INPUT type="hidden" name="pw" VALUE="$in{'pw'}">
<INPUT TYPE="SUBMIT" VALUE="作成">
</FORM></center>

</TD>
</TR>
</TABLE></td></tr></TABLE>
EOF
}else{

print <<EOF;
<table border="0" width="400" BGCOLOR=#003366 cellpadding="0" cellspacing="1"><tr><td><div align="center">
<center><TABLE BORDER=0 width="100%" cellpadding="20" cellspacing="1">
<TR bgcolor=#FAF4E7><TD>
<CENTER>
<FORM><TEXTAREA NAME ="" ROWS=16 COLS=60 maxlength="60">
&lt;script language="JavaScript"&gt;
&lt;!--
dN=new Date;
Mins=dN.getMinutes();
Secs=dN.getSeconds();
URL=document.referrer;
if(URL==""){URL="Unknown";}
document.write("&lt;IMG SRC=");
document.write("$myurl/logset.cgi?");
document.write("$word");
document.write(","+document.location.href+","+URL+",");
document.write(Mins+Secs);
document.write("&gt;");
// --&gt;&lt;/script&gt;
&lt;!-- $wordor --&gt;
</TEXTAREA></FORM></CENTER>

<FONT SIZE=-1>注1<BR>
フレームを利用している場合には、トップページ用のhtmlについてのみ、次の部分を<BR>
URL=document.referrer;<BR>
次のように変更して下さい。<BR>
URL=parent.document.referrer;<BR>
<BR>
<BR>
注2<BR>
本アクセス解析CGIでは、訪問者のサイト内の動きをより正確に把握するため、例えば、ブラウザのバックボタンでページを移動したりしても１アクセスとして記録しています（MACなど一部ブラウザではブラウザの特性上記録できないものもあります)。このため、どうしてもアクセス解析ログのデータ量が多くなってしまいますが、訪問者のサイト内の動き（アクセス履歴、アクセス追跡）にあまり興味がなくデータ量を少しでも少なくしたい場合は、作成したhtml内の次の１行をカットして下さい。カットするときは全てのページの解析用htmlについて行って下さい。<BR>
<BR>
document.write(Mins+Secs);
<BR>
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



sub encode {
$_[0] =~ s/([^0-9A-Za-z_ ])/'%'.unpack('H2',$1)/ge;
$_[0] =~ s/\s/+/g;
$_[0];
}


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
