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

require "./data/config.txt";
require "./data/check.txt";

$logfile = "./data/access.txt";
$logfiletmp = "./data/accesstmp.txt";
$clientfile = "./data/client.txt";
$lockfile = './data/lock.dat';

BEGIN {
eval "use Jcode";
if($@) {$JFLAG = 0;require './jcode.pl';}else {$JFLAG = 1;}
}

$timediff=$timedifference;
$date = time();
$timediff2=$timediff*60*60;
$date = $date + $timediff2;
$numofsecs = 60 * 60 * 24 * $numofdays;

$ENV{'QUERY_STRING'} =~ s/%2C/,/g;
@from_info = split(/,/, $ENV{'QUERY_STRING'});
($pagename,$pageurl,$linkurl,$x1,$x2,$x3,$x4,$x5,$x6) = @from_info;#added $linkurl
$addedlinkurl="$linkurl\&$x1\&$x2\&$x3\&$x4\&$x5\&$x6";#added

if ($ENV{'REMOTE_HOST'} && ($ENV{'REMOTE_HOST'} !~ /^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/)) 
 {$hostname = $ENV{'REMOTE_HOST'};
}else {&gethostname ($ENV{'REMOTE_ADDR'});}

$pagename =~ tr/+/ /;
$pagename =~ s/%([0-9a-fA-F][0-9a-fA-F])/pack("C",hex($1))/eg;
if($JFLAG) { eval {&Jcode::convert(\$pagename, "sjis");}
} else { eval {&jcode::convert(\$pagename, "sjis");}
}
$pagename =~ s/</&lt;/g;
$pagename =~ s/>/&gt;/g;

$! = 1;
$| = 1;

&check_ignorehosts;

&check_refs;

$pageurl="";

&cookie ;

&check_ignoreids;

if (-f $lockfile) {
if (-M $lockfile > (1/96)) {
unlink($lockfile);
}else{
for ($i = 3; $i > 0; --$i) {
sleep(1);
last unless -f $lockfile;
}
if (-f $lockfile) {&error;}
}
}
if (!open(TMP,">$lockfile")) { &error; }
close(TMP);

&clientdatawrite ;

&check_browser;

&check_keyword;

if ($pagename eq "") {$pagename = "Unknown";}
if ($browser eq "") {$browser = "Unknown";}
if ($url eq "") {$url = "Unknown";}
$logdata="$date\"\,\"$id\"\,\"$hostname\"\,\"$pagename\"\,\"$pageurl\"\,\"$browser\"\,\"$url\"\,\"$keyword\"\,\"$osversion\"\,\"\n";

$datenum = 1;
$datenew = 0;
if (! -e $logfile) {
     if (!open(LOG,">$logfile")) { &error; }
     eval { flock(LOG,2);};
     print LOG $logdata;
     close(LOG);
     chmod(0666,"$logfile");
     eval { flock(LOG,8);};
}else{
     if (!open(DBNEW, "> $logfiletmp")) { &error; };
     eval { flock(DBNEW, 2);};     
     print DBNEW "$logdata";
     if (!open(DB,"$logfile")) { &error; } 
     while($line=<DB>){
          ($logdate,$x,$x,$x,$x,$x,$x,$x,$x) = split(/\"\,\"/,$line);
          $timediff = $date - $logdate;
          if ($timediff <= $numofsecs) {
               print DBNEW "$line";
               $datenum++;
          }
     }
     close(DB);
     eval { flock(DBNEW, 8);};
     close(DBNEW);
     if (!open(DBNEW2,"$logfiletmp")) { &error; } 
     while(<DBNEW2>){$datenew++;}
     close(DBNEW2);
     if($datenew eq $datenum){ rename($logfiletmp, $logfile);}
     unlink($logfiletmp);
}

unlink($lockfile);

print "Content-type: image/gif\n\nGIF89a\1\0\1\0\200\0\0\0\0\0\0\0\0!\371\4\1\0\0\0\0,\0\0\0\0\1\0\1\0\0\2\2D\1\0\n";

exit;

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

sub check_ignorehosts {
     foreach $ignorehost (@ignorehosts) {
          if ($ignorehost ne "") {
               if ($hostname =~ /$ignorehost/i) {&error;}
          }
     }
}

sub check_ignoreids {
     foreach $ignoreid (@ignoreids) {
          if ($ignoreid ne "") {
               if ($ignoreid eq $id) {
               print "Pragma: no-cache\n";
               print "P3P: CP=\"NOI ADMa\"\n";
               print "Set-Cookie: ";
               print "$cookieid=$id**$vcount**$vdate**$x**$x**$x**; ";
               print "expires=$cookieexpires; "; 
               print "\n";
               &error;
               }
          }
     }
}


sub check_refs {
     foreach $includeref (@includerefs) {
          if ($includeref ne "") {
          $includeset=1;
               if ($pageurl =~ /$includeref/i) {$include=1;}
          }
     }
     if ($includeset eq "1") {
          if ($include ne "1") {&error;}
     }
}


sub cookie {
     if ($ENV{'HTTP_COOKIE'} =~ /$cookieid/) {
     ($x, $cvalue) = split(/$cookieid=/, $ENV{'HTTP_COOKIE'});
     ($id,$vcount,$lastvisitday,$x,$x,$x,$x,$x,$x) = split(/\*\*/, $cvalue);
     }
$cookieexp=90*60*60*24;
($second,$minute,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime(time + $cookieexp + ($timediff * 60 * 60));
$week=(Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday)[(localtime(time + $cookieexp + ($timediff * 60 * 60)))[6]];
$month=(Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec)[(localtime(time + $cookieexp + ($timediff * 60 * 60)))[4]];
$year=$year+1900;
     if ($second < 10)  { $second = "0$second"; }
     if ($minute < 10)  { $minute = "0$minute"; }
     if ($hour < 10)  { $hour = "0$hour"; }
$cookieexpires="$week, $mday-$month-$year $hour:$minute:$second GMT";
($second,$minute,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime(time +  ($timediff * 60 * 60));
$mon++;
$year2=$year-100;
$year=$year+1900;
     if($mon<10){$mon="0$mon";}
     if($mday<10){$mday="0$mday";}
     if ($second < 10)  { $second = "0$second"; }
     if ($minute < 10)  { $minute = "0$minute"; }
     if ($hour < 10)  { $hour = "0$hour"; }
$clientid="$year2$mon$mday$hour$minute$second";
$vdate="$year$mon$mday";

($second,$minute,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime(time +  ($timediff * 60 * 60)-($numofdays * 60 * 60 * 24));
$mon++;
$year=$year+1900;
if($mon<10){$mon="0$mon";}
if($mday<10){$mday="0$mday";}
$vddate="$year$mon$mday";
}


sub clientdatawrite{
     if ($id ne "") {
          if ($lastvisitday ne $vdate) {
          $vcount++;
          $job="rewite";
          print "Pragma: no-cache\n";
          print "P3P: CP=\"NOI ADMa\"\n";
          print "Set-Cookie: ";
          print "$cookieid=$id**$vcount**$vdate**$x**$x**$x**; ";
          print "expires=$cookieexpires; "; 
          print "\n";
          }
     }else{
     $job="new";
     $id="$clientid";
     print "Pragma: no-cache\n";
     print "P3P: CP=\"NOI ADMa\"\n";
     print "Set-Cookie: ";
     print "$cookieid=$id**1**$vdate**$x**$x**$x**; ";
     print "expires=$cookieexpires; "; 
     print "\n";
     }	
    if (! -e $clientfile) {
    open (NULDATA,">$clientfile");
    eval { flock(NULDATA,2);};
    print NULDATA  "0\,\,99999999\,\n";
    close(NULDATA);
    chmod(0666,"$clientfile");
    eval { flock(NULDATA,8);};
     }
    if ($job eq "rewite") {
    $pastdata="0";
    $write="0";
    open(DB,"$clientfile");
    @DATA = <DB>;
    close(DB);
    $i = 0;
         foreach $line (@DATA) {
         ($id1,$vcount1,$x1,$x2,$x3,$x4,$x5,$x6) = split(/\"\,\"/,$line);
              if ($id eq $id1) {
              $vcount1++;
              $pastdata="1";
              $write="1";
              $no = $i;
              $DATA[$no] = "$id1\"\,\"$vcount1\"\,\"$vdate\"\,\"$x2\"\,\"$x3\"\,\"$x4\"\,\"$x5\"\,\"\"\,\"\n";
              last;
              }
              $i++;
         }
         if ($write eq "1") {
         $i = 0;
         $no= 0;
              foreach $line (@DATA) {
                  ($x,$x,$lastdate,$x,$x,$x,$x,$x,$x,$x) = split(/\"\,\"/,$line);
                               if ($lastdate < $vddate) {
                               $i++;
                               }else{
                               $NEWCLDATA[$no] = $line;
                               $i++;
                               $no++;
                                }
              }
         open (DB,">$clientfile");
         eval { flock(DB,2);};
         print DB @NEWCLDATA;
         close(DB);
         eval { flock(DB,8);};
         }
     }

     if ($pastdata eq "0") {
         open (DB,">>$clientfile");
         eval { flock(DB,2);};
         $vcount1=$vcount;
         $value= "$id\"\,\"$vcount1\"\,\"$vdate\"\,\"$y2\"\,\"$y3\"\,\"$y4\"\,\"$y5\"\,\"\"\,\"\"\,\"\n";
         print DB $value;
         close(DB);
         eval { flock(DB,8);};
     }

}


sub error{
print "Content-type: image/gif\n\nGIF89a\1\0\1\0\200\0\0\0\0\0\0\0\0!\371\4\1\0\0\0\0,\0\0\0\0\1\0\1\0\0\2\2D\1\0\n";
exit;
}

sub check_keyword {
($url, $xxx) = split(/\?/, $linkurl);
($yyy, $keys) = split(/\?/, $addedlinkurl);
     if($keys){
     @keydetail = split(/\&/, $keys);
     %keyvalue = ();
          for $block (@keydetail) {
          ($name, $value) = split(/=/, $block);
          $keyvalue{$name} = $value;
          }
     $keyword = '';
     &check_keywordsub;
     $keyword =~ s/\+/ /g;
     $keyword =~ s/%([0-9a-fA-F][0-9a-fA-F])/pack("C",hex($1))/eg;
          if($JFLAG) { eval {&Jcode::convert(\$keyword, "sjis");}
          } else { eval { &jcode::convert(\$keyword, "sjis");}
          }
     $keyword =~ s/>/&gt;/g;
     $keyword =~ s/</&lt;/g;
     $keyword =~ s/　/ /g;
     }
$url =~ s/%([0-9a-fA-F][0-9a-fA-F])/pack("C",hex($1))/eg;
     if($JFLAG) { eval {&Jcode::convert(\$url, "sjis");}
     } else { eval {&jcode::convert(\$url, "sjis");}
     }
$url =~ s/</&lt;/g;
$url =~ s/>/&gt;/g;

}