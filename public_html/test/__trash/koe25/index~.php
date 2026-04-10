<?php header("Content-Type: text/html; charset=UTF-8");
$file_path ='../../koe-data.php';
if (filemtime($file_path) < filemtime('../../koe-list.xlsx')) include('../enquete/xlsconvert.php');
include($file_path);

$num = file_get_contents('../common/inc_new/num_koe.inc');
if($_GET['p']) $page = filter_var($_GET['p'], FILTER_SANITIZE_NUMBER_INT) ?? 1;
else $page = 1;
$maxp  = ceil($num / 100);
if($page > $maxp){ header("Location:/koe/"); exit;}
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?=$num; ?>件のお客様の声 | DM発送代行センター</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3, user-scalable=yes">
<meta name="keywords" content="お客様の声,DM発送代行">
<meta name="description" content="メディアボックスのDM発送代行を利用い頂いた会社様より感想を頂きました。<?=$page; ?>ページ目">
<?php
if($page==1) echo '<link rel="canonical" href="https://test.dm110.jp/koe/">
';
else echo '<link rel="canonical" href="https://test.dm110.jp/koe/'.$page.'/">
'; ?>
<?php include("../common/inc_new03/html5_head.html"); ?>
</head>

<body>
<div id="container">
	<div id="main">
		<div id="main-in">

			<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name"><?=$num; ?>件のお客様の声</span><meta itemprop="position" content="2"></li>
			</ul>

			<div id="main-contents1">
				<h2 class="ttl01"><?=$num; ?>件のお客様の声</h2>
				<div class="contents1">
					<p>弊社サービスをご利用いただいたお客様からＦＡＸで生の声をいただきました。<br>
					（2006年より、お客様から頂いた声を掲載させていただきます）<br>
					時系列順に並べてあります。</p>
					<p><span class="txt_red">お客様の個人情報保護のため、お客様名の掲載はひかえさせて頂きます。<br>
					またお客様の声は担当者様の感想です。受け取り方は個人により違いますのでご了承ください。<br>
					</span></p>

<?php
$maxnum= ($page == $maxp) ? $num : $page*100;
$nextp = ($page != $maxp) ? ($page +1) : $maxp;
$str_pager = '
<div class="con_pager"><p class="all"><span>'.(($page-1)*100+1).'</span>件～<span>'.$maxnum.'</span>件表示（全'.$num.'件）</p><ul>';
if($page != 1) $str_pager .= '<li class="prev"><a href="/koe/'.($page -1).'/"><span>&lt;&nbsp;前へ</span></a></li>';
for($i=1;$i<=$maxp;$i++){
	$active = ($i==$page) ? ' active' :'';
	$str_pager .= '<li><a href="/koe/'.$i.'/" class="pagelink'.$active.'">'.$i.'</a></li>';
}
$str_pager .= '<li class="next"><a href="/koe/'.$nextp.'/"><span>次へ&nbsp;&gt;</span></a></li></ul></div>
';
echo $str_pager;

/* 返答イレギュラー */
$res[931] ='
										<p class="mt20 mb0"><strong>【ご指摘ありがとうございます】</strong><br>
										ご指摘頂いた内容を社内で検討し、以下のように今後変更することにしました。<br>
										封筒印刷の出力見本はPDFファイルや画像で送っていただけるように変更いたしました。<br>
										また宛名データに関しては見積書に詳細を書くように変更いたしました。<br>
										今回は時間を割いて頂きありがとうございました。</p>
';

$i=0;
$j=($page-1)*100+1;
$k=$page*100;
foreach($koeArray as $w){
	++$i;
	if($i<$j) continue;
	else if($i>$k) break;
	$imgsize = getimagesize($_SERVER['DOCUMENT_ROOT'].$enqArray[$w][11]);
	echo '<div class="con_voi">
	<h3 class="midashi03"><span>「'.$enqArray[$w][8].'」<br>　'.$enqArray[$w][5].'のお客様（'.$enqArray[$w][6].'）　依頼件数 '.$enqArray[$w][7].'件 <strong>'.$enqArray[$w][0].'</strong></span></h3>
	<div class="box_voi"><div class="box_voi_inn">
		<p class="txt_voi">'.nl2br($enqArray[$w][9]).'</p>
		<div class="img_voi"><p><img src="'.$enqArray[$w][11].'" alt="'.str_replace(PHP_EOL, '', $enqArray[$w][9]).'" '.$imgsize[3].' decoding="async" loading="lazy"></p></div>'.$res[$w].'
	</div></div>
	<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
</div>

';
}

echo $str_pager; ?>


							<div class="btn_voi">
								<div><a href="/okyaku_koe_Mail.htm"><img src="/images/okyaku_Koe/images/btn_voi.gif" alt="メールからのお客様の声はこちら" width="359" height="59"></a></div>
							</div>

						</div>


						<!--▼メインコンテンツ用 お問い合わせ-->
<?php include("../common/inc_new/main_inquiry.html"); ?>
						<!--▲メインコンテンツ用 お問い合わせ-->

						<br>
						<div class="contents1">
							<p>▼DM発送代行をご検討中の方は、まず無料見積りをご依頼ください。<br>
								24時間365日受付中。返信は３時間以内（当社営業日）にご連絡いたします。<br>
								【営業時間/9:00～18:00　休日/土日祝祭日】<br>
								電話でのお問合せ0561-37-2027　担当：加藤</p>
						</div>

					</div>
					<!--△メインコンテンツ-->

					<?php include("../common/inc_new/sidebar.html"); ?>
				</div>
				<!--/main-in-->

				<?php include("../common/inc_new/go_top.html"); ?>

				<?php include("../common/inc_new/footer.html"); ?>

			</div>
			<!--/main-->
			<!--▼ヘッダー-->
			<?php include("../common/inc_new/header.html"); ?>
			<!--▲ヘッダー-->

			<!--▼グローバルメニュー-->
			<?php include("../common/inc_new/gnavi.html"); ?>
			<!--▲グローバルメニュー-->
		</div>



		<?php include("../common/inc_new03/anlytics_bottom.html"); ?>
	</body>
</html>