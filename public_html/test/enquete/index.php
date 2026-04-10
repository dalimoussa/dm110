<?php header("Content-Type: text/html; charset=UTF-8");
$test_doc_root = dirname(__DIR__);
$file_path = $test_doc_root . '/koe-data.php';
$list_file = $test_doc_root . '/koe-list.xlsx';

// Keep enquete data dependencies inside /public_html/test.
if (is_file($list_file) && (!is_file($file_path) || filemtime($file_path) < filemtime($list_file))) include('./xlsconvert.php');
if (is_file($file_path)) include($file_path);

if (!isset($enqArray) || !is_array($enqArray)) $enqArray = [];

$num = file_get_contents('../common/inc_new/num_enquete.inc');
$page_title = 'お客様アンケート原本｜DM発送代行センター';
$page_description = '2006年9月よりDM発送代行センターに寄せられたお客様の声'.$num.'件を掲載しています。お客様自身からの生の声を株式会社メディアボックスDM発送代行センター事業部に頂きました。当社の良いところ悪いとこをそのまま掲載しています。たくさんのご意見を頂きありがとうございます。';
$canonical_url = 'https://test.dm110.jp/enquete/';

$json_ld_payload = [
	[
		'@context' => 'https://schema.org',
		'@type' => 'CollectionPage',
		'name' => 'お客様アンケート原本',
		'url' => $canonical_url,
		'description' => $page_description,
		'inLanguage' => 'ja',
	],
	[
		'@context' => 'https://schema.org',
		'@type' => 'BreadcrumbList',
		'itemListElement' => [
			[
				'@type' => 'ListItem',
				'position' => 1,
				'name' => 'DM発送代行センター TOP',
				'item' => 'https://test.dm110.jp/',
			],
			[
				'@type' => 'ListItem',
				'position' => 2,
				'name' => 'アンケート原本',
				'item' => $canonical_url,
			],
		],
	],
];
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?=$page_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3, user-scalable=yes">
<meta name="keywords" content="アンケート,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行">
<meta name="description" content="<?=htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="robots" content="noindex">
<link rel="canonical" href="<?=$canonical_url; ?>">
<?php include("../common/inc_new03/html5_head.php"); ?>
<?php
$json_ld = json_encode($json_ld_payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
if ($json_ld !== false) echo '<script type="application/ld+json">'.$json_ld.'</script>';
?>
<link rel="stylesheet" href="/common/js/lightbox.min.css">
<style type="text/css">
<!--
#enquete_list{margin:0 0 50px;padding:0}
#enquete_list li{margin:14px 0 0;padding:0}
@media (min-width: 768px){
#enquete_list{margin-left:30px;padding:0}
}
-->
</style>
</head>

<body>
<?php include("../common/inc_new03/html5_bodytop.php"); ?>
<div id="container">
	<div id="main">
		<div id="main-in">

			<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">アンケート原本</span><meta itemprop="position" content="2"></li>
			</ul>

			<div id="main-contents1">
				<h2 class="ttl01">アンケート結果</h2>
				<div class="contents1">
					<h3 class="ttl02">お客様アンケート原本</h3>
					<p>2006年9月よりメディアボックスDM発送代行センターに寄せられたお客様の声<?=$num; ?>件を掲載しています。<br>
						当社の良いところ悪いところをそのまま掲載しています。<br>
						たくさんのご意見を頂きありがとうございます。</p>
					<br>

<ul id="enquete_list">
<?php
foreach($enqArray as $v){
	if(!$v[2]) continue;
	$title = 'アンケート_'.sprintf('%03d',$v[2]).'　'.$v[5].'　'.$v[6].'　'.$v[0];
	echo '
	<li><a href="'.$v[12].'" data-lightbox="enquete_list" data-title="'.$title.'" onClick="ga(\'send\',\'event\',\'enquete\',\'アンケート原本\',\'アンケ原本_'.sprintf('%03d',$v[2]).'\', \'1\');">'.$title.'</a></li>';
} ?>
</ul>

							<p>その他、アンケートの集計表もご覧になれます。<br>
								<a href="/enquete/aggregate/">アンケート集計表はコチラ</a></p>
							<br>
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



		<?php include("../common/inc_new/anlytics_bottom.html"); ?>
		<script src="/common/js/lightbox.min.js"></script>
		<script>lightbox.option({'showImageNumberLabel':false,"fitImagesInViewport":false})</script>
	</body>
</html>
