<?php header("Content-Type: text/html; charset=UTF-8");
$file_path = $_SERVER['DOCUMENT_ROOT'].'/koe-data.php';
$list_file = $_SERVER['DOCUMENT_ROOT'].'/koe-list.xlsx';

// Keep voice data dependencies inside /public_html/test.
if (is_file($list_file) && (!is_file($file_path) || filemtime($file_path) < filemtime($list_file))) include($_SERVER['DOCUMENT_ROOT'].'/enquete/xlsconvert.php');
if (is_file($file_path)) include($file_path);

if (!isset($enqArray) || !is_array($enqArray)) $enqArray = [];
if (!isset($koeArray) || !is_array($koeArray)) $koeArray = [];

// Allow alias routes (e.g. /case/) to reuse this page safely.
if (!isset($route_base_path) || !preg_match('#^/[0-9A-Za-z_/-]+/$#', $route_base_path)) $route_base_path = '/koe/';
if (!isset($canonical_base_url) || strpos($canonical_base_url, 'https://') !== 0) $canonical_base_url = 'https://test.dm110.jp'.$route_base_path;
$canonical_base_url = rtrim($canonical_base_url, '/').'/';

$num = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
$maxp  = max(1, (int)ceil(((int)$num) / 50));
if(!empty($_GET['p'])){
	$page = (int)(filter_var($_GET['p'], FILTER_SANITIZE_NUMBER_INT) ?? 1);
	if($page < 1) $page = 1;
	$robots_noindex = True;
}
else $page = $maxp;
if($page > $maxp){ header('Location:'.$route_base_path); exit;}

//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = $num.'件のお客様の声';
	$str_title   = $num.'件のお客様の声';
	$str_descrip = 'メディアボックス DM発送代行センターをご利用なさった会社様より感想をいただきました。'.$page.'ページ目';
	$str_keyword = 'お客様の声,DM発送代行,DMトラッカー,DM110';
//	$og_image    = 'cover.jpg';
	$canonical = ($page==$maxp) ? $canonical_base_url : $canonical_base_url.$page.'/';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

<style type="text/css">
<!--
main div.koe_img{border:1px solid #bbb;background:#fff;padding:10px;margin:auto;text-align:center;width:720px;max-width:100%}
.koe_pager_prev,
.koe_pager_next{display:flex;position:relative;justify-content:space-around;align-items:center;margin:0 auto;padding:10px 0 9px 1em;width:6em;text-decoration:none;font-weight:700;color:#fff;background:#6bb6ff;transition:.3s ease-in-out;border:2px solid #0d7de9;border-radius:5px;opacity:1;transform:scale(0.8)}
.koe_pager_next{padding:10px 1em 9px 0}
.koe_pager_prev:hover,
.koe_pager_next:hover{background:#0058a3;opacity:1}
.koe_pager_prev::before,
.koe_pager_next::after{content:'';position:absolute;margin:auto;top:0;bottom:0;margin:auto;width:12px;height:12px;border-top:3px solid #fff;border-right:3px solid #fff;transition:.3s}
.koe_pager_prev::before{left:18px;transform:rotate(-135deg)}
.koe_pager_next::after{right:18px;transform:rotate(45deg)}
.koe_pager_prev:hover::before{left:11px}
.koe_pager_next:hover::after{right:11px}

.koe_pager .select-box{position:relative;display:inline-flex;align-items:center}
.koe_pager .select-box::after{position:absolute;right:15px;width:10px;height:7px;background-color:#535353;clip-path:polygon(0 0,100% 0,50% 100%);content:'';pointer-events:none}
.koe_pager .select-box select{appearance:none;padding:.6em calc(.8em + 30px) .6em .8em;border:2px solid #0d7de9;border-radius:5px;background-color:#fff;color:#333;font-size:1em;cursor:pointer}

@media (max-width:768px){
  main .midashi02{font-size:1.2rem}
}
-->
</style>
</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include($_SERVER['DOCUMENT_ROOT']."/common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-body">
			<h1><?=$num; ?>件のお客様の声</h1>

			<div class="uk-text-left u-pa20">
				<p>弊社サービスをご利用なさったお客様からＦＡＸで<strong class="underline-yellow">生の声をいただきました。</strong><br>
				2006年より、お客様からいただいた声を時系列順に並べてあります。<br>
				（お客様の個人情報保護のため、お客様名の掲載は控えさせていただきます）</p>
				<p class="txt-red">お客様の声は担当者様の感想です。受け取り方は個人により違いますのでご了承ください。</p>
			</div>

<?php /*
		<div class="link-box-2cu">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/" style="display:flex">お客様アンケート原本</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/aggregate/" style="display:flex">お客様アンケート集計結果</a></div>
		</div>
*/ ?>

		</div>
	</div>

<?php
$maxnum= ($page == $maxp) ? $num : $page*50;
$nextp = ($page != $maxp) ? ($page +1) : $maxp;
$str_pager = '
<div class="toc"><!--p class="all"><span>'.(($page-1)*50+1).'</span>件～<span>'.$maxnum.'</span>件表示（全'.$num.'件）</p-->
<ul class="koe_pager uk-flex uk-flex-center">';
if($page != 1) $str_pager .= '<li><a href="'.$route_base_path.($page -1).'/" class="koe_pager_prev">前へ</a></li>
';
$str_pager .= '<li><label class="select-box"><select name="select" onChange="location.href=value;">
';
for($i=1;$i<=$maxp;$i++){
	$active = ($i==$page) ? ' selected' :'';
	$maxnum = ($i == $maxp) ? $num : $i*50;
	$str_pager .= '<option value="'.$route_base_path.$i.'/"'.$active.'>'.(($i-1)*50+1).'件 ～ '.$maxnum.'件目</option>';
}
$str_pager .= '</select></label></li>
';
if($page != $maxp) $str_pager .= '<li><a href="'.$route_base_path.$nextp.'/" class="koe_pager_next">次へ</a></li>
';
$str_pager .= '</ul></div>
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
$j=($page-1)*50+1;
$k=$page*50;
foreach($koeArray as $w){
	++$i;
	if($i<$j) continue;
	else if($i>$k) break;
	$imgsize = getimagesize($_SERVER['DOCUMENT_ROOT'].$enqArray[$w][11]);
	echo '<section>
	<h2 class="midashi02">'.$enqArray[$w][8].'</h2>
	<h3 class="midashi03">'.$enqArray[$w][5].'のお客様（'.$enqArray[$w][6].'）　依頼件数 '.$enqArray[$w][7].'件　　'.$enqArray[$w][0].'</h3>
	<p>'.nl2br($enqArray[$w][9]).'</p>
	<div class="koe_img"><img src="'.$enqArray[$w][11].'" alt="'.str_replace(PHP_EOL, '', $enqArray[$w][9]).'" '.$imgsize[3].' decoding="async" loading="lazy"></div>'.$res[$w].'
</section>

';
}

echo $str_pager; ?>

		<div class="link-box-2cu">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/" style="display:flex">お客様アンケート原本</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/aggregate/" style="display:flex">お客様アンケート集計結果</a></div>
		</div>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/aside.php'); ?>


</div>


	<div class="contact-block u-mt30">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/index_contact.html'); ?>
	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/footer.php'); ?>




<script type="application/ld+json">
[
<?php /*
{
	"@context": "https://schema.org",
	"@type": "BlogPosting",
	"image": "https://test.dm110.jp/images/DM_matome/<?=$image_name; ?>",
	"headline": "<?=$str_title; ?>",
	"datePublished": "<?=$Published; ?>",
	"dateModified": "<?php echo date(DATE_W3C, filemtime($source_file));?>",
	"author": {
		"@type": "Person",
		"name": "豊田 昭",
		"image": "https://test.dm110.jp/images/kaisyaannai/akira1_110831.png",
		"description" : "昭和61年4月より運送会社を設立。平成15年2月よりダイレクトメールやカタログ等の1kg以下の 印刷物に特化した、経費削減システムを作り、印刷から封入作業･配送サービスまでの格安システムを始める。ほとんどコスト削減で手のつけられない2000通以下の発送にも成功し、 50通から3万通までの中小部数発送のＤＭ発送代行専門店になる。" ,
		"url": "https://test.dm110.jp/kaisyaannai.html"
	}
},
*/ ?>
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "DM発送代行センター TOP",
		"item": "https://test.dm110.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "<?= $meta_title ?>"
	}]
}
]
</script>
</body>
</html>
