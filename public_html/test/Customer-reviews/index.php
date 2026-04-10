<?php header("Content-Type: text/html; charset=UTF-8");
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'カスタマーレビュー';
	$str_title   = 'カスタマーレビュー';
//	$str_descrip = 'DM発送代行センター、サンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'、取引実績8123社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
// Keep review data dependency inside /public_html/test.
$data_file = $_SERVER['DOCUMENT_ROOT'].'/koe-data.php';
if (is_file($data_file)) include($data_file);

if (!isset($enqArray) || !is_array($enqArray)) $enqArray = [];
if (!isset($AggCount) || !is_array($AggCount)) $AggCount = [0,0,0,0,0,0];
for ($i = 0; $i <= 5; $i++) {
	if (!isset($AggCount[$i])) $AggCount[$i] = 0;
}

$AggCount['all'] = $AggCount[1]+$AggCount[2]+$AggCount[3]+$AggCount[4]+$AggCount[5];
if($AggCount['all'] > 0){
	$AggPercent[5] = round($AggCount[5]/$AggCount['all']*100,1);
	$AggPercent[4] = round($AggCount[4]/$AggCount['all']*100,1);
	$AggPercent[3] = round($AggCount[3]/$AggCount['all']*100,1);
	$AggPercent[2] = round($AggCount[2]/$AggCount['all']*100,1);
	$AggPercent[1] = round($AggCount[1]/$AggCount['all']*100,1);
}else{
	$AggPercent = [1=>0,2=>0,3=>0,4=>0,5=>0];
}

$limit = 20;
if($_GET['p']) $page = (int)(filter_var($_GET['p'], FILTER_SANITIZE_NUMBER_INT) ?? 1);
else $page = 1;
if($page < 1) $page = 1;
$revs = 1 + ($page-1) * $limit;

if($_GET['s']) $lv = (int)(filter_var($_GET['s'], FILTER_SANITIZE_NUMBER_INT) ?? null);
else $lv = null;
if(!in_array($lv, [1,2,3,4,5], true)) $lv = null;
$link_s = (!empty($lv)) ? $lv.'/' : '';
$lvc = ($lv) ?? 'all';
$maxp = max(1, (int)ceil(($AggCount[$lvc] ?? 0) / $limit));
if($page > $maxp) $page = $maxp;

function echo_star($s){
	for ($i=0;$i<5;$i++){
		if($i<$s) $fill = '#f9a72d';
		else $fill = 'none';
		echo '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><path d="m16 2.8 4.3 9.1 9.6 1-7.2 6.4 1.9 9.9-8.8-4.8-8.4 4.8 1.7-9.7-7-6.6 9.6-1L16 2.8z" style="fill:'.$fill.';stroke:#de7921;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg>';
	}
}
$canonical = 'https://test.dm110.jp/Customer-reviews/'.$link_s.$page.'/';
if(isset($_GET['p']) || isset($_GET['s'])) $robots_noindex = True;
include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

<style type="text/css">
<!--
main a,
aside a{color:#07f}
main section{padding:25px 0}
main section h2{margin-left:25px}
@media(min-width:768px){
main section{margin:20px auto;padding:40px}
}
@media(max-width:767px){
#sidebar{padding:10px}
}
#histogramTable {font-size:14px}
#histogramTable a{text-decoration:none}
#histogramTable tr:hover a{text-decoration:underline}
#histogramTable td{color:#07f}
#histogramTable td.graph{width:68%;padding:0 5px;vertical-align:middle}
#histogramTable .a-meter{border-radius:4px;overflow:hidden;box-shadow:inset 0 0 0 1px #bbbfbf;background-color:#f0f2f2;height:20px}
#histogramTable .a-meter .a-meter-bar{border-radius:4px;border-top-right-radius:0;border-bottom-right-radius:0;box-shadow:inset -2px 0 0 -1px #f5961d,inset 0 0 0 1px #de7921;background-color:#ffa41c;height:100%;width:0}

.pagination li{display:block;margin:0 1px;border:1px solid #ccc;min-width:40px}
.pagination li>span,
.pagination li a{display:block;padding:3px 7px;text-align:center}
.pagination li a{background:#ffd;text-decoration:none}
.pagination li a:hover{background:#def;text-decoration:none}
.pagination li.page_first,
.pagination li.page_last{zoom:.8}
.pagination li.page_first{margin-right:10px}
.pagination li.page_last{margin-left:10px}

.va-sub svg{vertical-align:sub}

-->
</style>
</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/echo_breadcrumb.php'); ?>


<div class="container uk-flex uk-flex-wrap">
<aside id="sidebar">
	<div class="uk-position-sticky" style="top:30px">
		<div class="u-ma0">
			<h2>Customer reviews</h2>
			<p><img src="/images/2024/reviews_star.webp" style="width:100px;height:18px" alt="4.42 out of 5" width="400" height="72"> 4.4 out of 5</p>
		</div>
		<div class="u-ma5">
			<p><?=$AggCount['all'];?> アンケート</p>
		</div>
		<div class="u-ma0">
			<table id="histogramTable" style="width:100%;">
				<tr>
					<td class="nowrap"><a href="/Customer-reviews/5/1/">5star</a></td>
					<td class="graph"><a href="/Customer-reviews/5/1/"><div class="a-meter"><div class="a-meter-bar a-meter-filled" style="width:<?=$AggPercent[5]; ?>%"></div></div></a></td>
					<td class="nowrap uk-text-right"><a href="/Customer-reviews/5/1/"><?=$AggPercent[5]; ?>%</a></td>
				</tr>
				<tr>
					<td class="nowrap"><a href="/Customer-reviews/4/1/">4star</a></td>
					<td class="graph"><a href="/Customer-reviews/4/1/"><div class="a-meter"><div class="a-meter-bar a-meter-filled" style="width:<?=$AggPercent[4]; ?>%"></div></div></a></td>
					<td class="nowrap uk-text-right"><a href="/Customer-reviews/4/1/"><?=$AggPercent[4]; ?>%</a></td>
				</tr>
				<tr>
					<td class="nowrap"><a href="/Customer-reviews/3/1/">3star</a></td>
					<td class="graph"><a href="/Customer-reviews/3/1/"><div class="a-meter"><div class="a-meter-bar a-meter-filled" style="width:<?=$AggPercent[3]; ?>%"></div></div></a></td>
					<td class="nowrap uk-text-right"><a href="/Customer-reviews/3/1/"><?=$AggPercent[3]; ?>%</a></td>
				</tr>
				<tr>
					<td class="nowrap"><a href="/Customer-reviews/2/1/">2star</a></td>
					<td class="graph"><a href="/Customer-reviews/2/1/"><div class="a-meter"><div class="a-meter-bar a-meter-filled" style="width:<?=$AggPercent[2]; ?>%"></div></div></a></td>
					<td class="nowrap uk-text-right"><a href="/Customer-reviews/2/1/"><?=$AggPercent[2]; ?>%</a></td>
				</tr>
				<tr>
					<td class="nowrap">1star</td>
					<td class="graph"><div class="a-meter"><div class="a-meter-bar a-meter-filled" style="width:<?=$AggPercent[1]; ?>%"></div></div></td>
					<td class="nowrap uk-text-right"><?=$AggPercent[1]; ?>%</td>
				</tr>
			</table>
		</div>
	</div>
</aside>

<main>

	<div class="panel u-ma0">
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<p class="u-ma10 va-sub"><?php
if($lvc >= 1 && $lvc <= 5) echo_star($lvc);
else echo '全';
echo ' '.$AggCount[$lvc].' 件'.'／'.$revs.'-'.($revs+$limit-1);

if     ($page == 1 || $page == $maxp){$range = 6;}
elseif ($page == 2 || $page == $maxp - 1){$range = 5;}
elseif ($page == 3 || $page == $maxp - 2){$range = 4;}
else   {$range = 3;}
		?></p>
<?php
$str_pagination = '
			<ul class="pagination uk-flex uk-flex-center uk-flex-middle">';

if($page >= 2){
	$str_pagination .= '
				<li class="page_link page_first"><a href="/Customer-reviews/'.$link_s.'1/">≪</a></li>';
}else{
	$str_pagination .= '
				<li class="page_nolink page_first"><span>≪</span></li>';
}

for($i=1;$i<=$maxp;$i++){
	if($i >= $page - $range && $i <= $page + $range){
		if($i == $page){
	$str_pagination .= '
				<li class="page_now"><span>'.$i.'</span></li>';
		}else{
	$str_pagination .= '
				<li class="page_link"><a href="/Customer-reviews/'.$link_s.$i.'/">'.$i.'</a></li>';
		}
	}
}

if($page < $maxp){
	$str_pagination .= '
				<li class="page_link page_last"><a href="/Customer-reviews/'.$link_s.$maxp.'/">≫</a></li>';
}else{
	$str_pagination .= '
				<li class="page_nolink page_last"><span>≫</span></li>';
}
	$str_pagination .= '
			</ul>
';

echo $str_pagination;
?>
		</div>
	</div>

<?php
$i = 0;
$j = 1;
foreach($enqArray as $w){
	if(!empty($lv)){
		if($w[10] != $lv) continue;
	}
	if($w[9] == '' || $w[10] == 0 || $w[10] == null) continue;
	++$i;
	if($i<$revs) continue;

//	var_dump($w);
//	var_dump($enqArray[$w]);

echo '<section>
	<h2><img src="/images/2024/reviews_user.webp" style="width:36px;vertical-align:sub" width="300" height="280" alt="user"><span>　'.$w[5].'のお客様（'.$w[6].'）</span></h2>
	<p class="u-pa10">';
echo_star($w[10]);

if($w[9] == '' || $w[10] == null) $w[9] = '<span style="color:#999">≪ 評価のみで声の記入はありませんでした ≫</span>';
echo '</p>
	<p class="u-pl10">'.nl2br($w[9]).'</p>
</section>

';

++$j;
if($j>$limit) break;
}
?>

<section>
<?= $str_pagination; ?>
</section>

</main>

<?php // include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/aside.php'); ?>


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
		"name": "カスタマーレビュー"
	}]
}
]
</script>
</body>
</html>
