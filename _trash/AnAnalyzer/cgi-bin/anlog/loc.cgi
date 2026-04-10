#!/usr/bin/perl

#########################################################
#          アクセス解析CGI An-Analyzer
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

require './cgi-lib.pl';

&ReadParse;

if($in{'loc'} eq ""){$in{'loc'}="http://www.yahoo.com";}

print "Content-type: text/html\n\n";
print <<EOF;
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=Shift_JIS">
<TITLE>An-Analyzer for your website</TITLE></HEAD>
<meta http-equiv="refresh" content="1; url=$in{'loc'}">
<BODY>
</BODY>
</HTML>
EOF

exit;


