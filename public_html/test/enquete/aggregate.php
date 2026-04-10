<?php header("Content-Type: text/html; charset=UTF-8");
$test_doc_root = dirname(__DIR__);
$file_path = $test_doc_root . '/aggre-data.php';
$aggregate_file = $test_doc_root . '/koe-aggregate.xlsx';

// Keep aggregate data dependencies inside /public_html/test.
if (is_file($aggregate_file) && (!is_file($file_path) || filemtime($file_path) < filemtime($aggregate_file))) include('./xlsconvert_agg.php');
if (is_file($file_path)) include($file_path);

if (!isset($aggArray) || !is_array($aggArray)) $aggArray = [];
for ($i = 0; $i <= 35; $i++) {
	if (!isset($aggArray[$i])) $aggArray[$i] = 0;
}
if (!isset($agg) || !is_numeric($agg)) $agg = 0;

$num = file_get_contents('../common/inc_new/num_koe.inc');
$qnum = file_get_contents('../common/inc_new/num_enquete.inc');
$page_title = 'お客様アンケート集計結果｜DM発送代行センター';
$page_description = '2006年9月よりDM発送代行センターを利用いただいたお客様にアンケートをお願いしています。'.date("Y").'年現在までに'.$qnum.'件のアンケート返信を頂きました。頂いたアンケート結果を分かり易くするため、表とグラフにまとめました。';
$canonical_url = 'https://test.dm110.jp/enquete/aggregate/';

$json_ld_payload = [
	[
		'@context' => 'https://schema.org',
		'@type' => 'CollectionPage',
		'name' => 'お客様アンケート集計結果',
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
				'item' => 'https://test.dm110.jp/enquete/',
			],
			[
				'@type' => 'ListItem',
				'position' => 3,
				'name' => 'アンケート集計結果',
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
<link rel="canonical" href="<?=$canonical_url; ?>">
<?php include("../common/inc_new03/html5_head.php"); ?>
<?php
$json_ld = json_encode($json_ld_payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
if ($json_ld !== false) echo '<script type="application/ld+json">'.$json_ld.'</script>';
?>
<style type="text/css">
<!--
#main .box_voi table{width:100%;background:#ddd;font-size:14px;border-collapse:separate;border-spacing:1px;line-height:1.4}
#main .box_voi table td,
#main .box_voi table th{padding:5px;text-align:center}
#main .box_voi table th{width:16%;background:#d4ebfc;font-weight:700;border:1px solid #fff}
#main .box_voi td{background:#fff}
#main .box_voi td.td_gra{background:#eee;border:1px solid #fff}
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
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/enquete/" itemprop="item"><span itemprop="name">アンケート原本</span></a><meta itemprop="position" content="2"></li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">アンケート集計結果</span><meta itemprop="position" content="3"></li>
			</ul>

			<div id="main-contents1">
				<h2 class="ttl01">お客様アンケート集計結果</h2>
				<div class="contents1">
					<p>2006年9月より、メディアボックスを利用いただいたお客様にアンケートをお願いしています。<br>
						<?= date("Y"); ?>年現在までに<?=$qnum ?>件のアンケート返信を頂きました。<br>
						頂いたアンケート結果を分かり易くするため、表とグラフにまとめました。<br>
						<a href="/enquete/">&gt;&gt;&nbsp;頂いた<?=$qnum ?>アンケート結果原本はこちら</a></p>

					<div class="con_voi" id="q7">
						<h3 class="midashi03"><span>「次回も当社を使いますか」に対し、「必ず使う」「使うと思う」<br>合計で<?php echo number_format((($aggArray[31]+$aggArray[32])/($aggArray[31]+$aggArray[32]+$aggArray[33]+$aggArray[34]+$aggArray[35])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q7_chart"></div></div>
							<table>
								<tr><th colspan="5">次回も当社を使いますか</th></tr>
								<tr>
									<th>必ず使う</th>
									<th>使う</th>
									<th>分からない</th>
									<th>たぶん使わない</th>
									<th>使わない</th>
								</tr>
								<tr>
									<td><?=$aggArray[31]; ?></td>
									<td><?=$aggArray[32]; ?></td>
									<td><?=$aggArray[33]; ?></td>
									<td><?=($aggArray[34] ?? '0'); ?></td>
									<td><?=($aggArray[35] ?? '0'); ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[31] -$aggArray[32] -$aggArray[33] -$aggArray[34] -$aggArray[35]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q1">
						<h3 class="midashi03"><span>「当社を選んだ理由」は「価格」<?php echo number_format((($aggArray[0])/($aggArray[0]+$aggArray[1]+$aggArray[2]+$aggArray[3]+$aggArray[4]+$aggArray[5])*100), 1);?>％、「紹介」「人から聞いて」<br>合計で<?php echo number_format((($aggArray[1]+$aggArray[4])/($aggArray[0]+$aggArray[1]+$aggArray[2]+$aggArray[3]+$aggArray[4]+$aggArray[5])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q1_chart"></div></div>
							<table>
								<tr><th colspan="6">当社を選んだ理由（複数回答あり）</th></tr>
								<tr>
									<th>価格</th>
									<th>人から<br>聞いて</th>
									<th>信頼度</th>
									<th>検索上位<br>だから</th>
									<th>紹介<br>により</th>
									<th>その他</th>
								</tr>
								<tr>
									<td><?=$aggArray[0]; ?></td>
									<td><?=$aggArray[1]; ?></td>
									<td><?=$aggArray[2]; ?></td>
									<td><?=$aggArray[3]; ?></td>
									<td><?=$aggArray[4]; ?></td>
									<td><?=$aggArray[5]; ?></td>
								</tr>
								<tr><td colspan="6" class="td_gra"><?=$agg; ?>件のアンケート結果より（複数回答あり）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q2">
						<h3 class="midashi03"><span>「発送までの期間」は「たいへん短い」「短い」「普通」<br>合計で<?php echo number_format((($aggArray[6]+$aggArray[7]+$aggArray[8])/($aggArray[6]+$aggArray[7]+$aggArray[8]+$aggArray[9]+$aggArray[10])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q2_chart"></div></div>
							<table>
								<tr><th colspan="5">発送までの期間</th></tr>
								<tr>
									<th>大変短い</th>
									<th>短い</th>
									<th>普通</th>
									<th>少し長い</th>
									<th>長い</th>
								</tr>
								<tr>
									<td><?=$aggArray[6]; ?></td>
									<td><?=$aggArray[7]; ?></td>
									<td><?=$aggArray[8]; ?></td>
									<td><?=$aggArray[9]; ?></td>
									<td><?=$aggArray[10]; ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[6] -$aggArray[7] -$aggArray[8] -$aggArray[9] -$aggArray[10]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q3">
						<h3 class="midashi03"><span>「価格」は「大変安い」「安い」合計で<?php echo number_format((($aggArray[11]+$aggArray[12])/($aggArray[11]+$aggArray[12]+$aggArray[13]+$aggArray[14]+$aggArray[15])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q3_chart"></div></div>
							<table>
								<tr><th colspan="5">価格</th></tr>
								<tr>
									<th>大変安い</th>
									<th>安い</th>
									<th>普通</th>
									<th>少し高い</th>
									<th>高い</th>
								</tr>
								<tr>
									<td><?=$aggArray[11]; ?></td>
									<td><?=$aggArray[12]; ?></td>
									<td><?=$aggArray[13]; ?></td>
									<td><?=$aggArray[14]; ?></td>
									<td><?=($aggArray[15] ?? '0'); ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[11] -$aggArray[12] -$aggArray[13] -$aggArray[14] -$aggArray[15]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q4">
						<h3 class="midashi03"><span>「電話対応」は「大変良かった」「良かった」合計で<?php echo number_format((($aggArray[16]+$aggArray[17])/($aggArray[16]+$aggArray[17]+$aggArray[18]+$aggArray[19]+$aggArray[20])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q4_chart"></div></div>
							<table>
								<tr><th colspan="5">電話対応</th></tr>
								<tr>
									<th>大変良かった</th>
									<th>良かった</th>
									<th>普通</th>
									<th>少し悪かった</th>
									<th>悪かった</th>
								</tr>
								<tr>
									<td><?=$aggArray[16]; ?></td>
									<td><?=$aggArray[17]; ?></td>
									<td><?=$aggArray[18]; ?></td>
									<td><?=$aggArray[19]; ?></td>
									<td><?=($aggArray[20] ?? '0'); ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[16] -$aggArray[17] -$aggArray[18] -$aggArray[19] -$aggArray[20]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q5">
						<h3 class="midashi03"><span>「注文のまでの流れの分かり易さ」は「大変理解し易かった」<br>「理解し易かった」合計で<?php echo number_format((($aggArray[21]+$aggArray[22])/($aggArray[21]+$aggArray[22]+$aggArray[23]+$aggArray[24]+$aggArray[25])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q5_chart"></div></div>
							<table>
								<tr><th colspan="5">注文までの流れの分かりやすさ</th></tr>
								<tr>
									<th>大変理解<br>し易かった</th>
									<th>理解し易かった</th>
									<th>普通</th>
									<th>少し理解<br>しにくかった</th>
									<th>理解<br>しにくかった</th>
								</tr>
								<tr>
									<td><?=$aggArray[21]; ?></td>
									<td><?=$aggArray[22]; ?></td>
									<td><?=$aggArray[23]; ?></td>
									<td><?=$aggArray[24]; ?></td>
									<td><?=$aggArray[25]; ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[21] -$aggArray[22] -$aggArray[23] -$aggArray[24] -$aggArray[25]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->

					<div class="con_voi" id="q6">
						<h3 class="midashi03"><span>「メール対応」は「大変良かった」「良かった」合計で<?php echo number_format((($aggArray[26]+$aggArray[27])/($aggArray[26]+$aggArray[27]+$aggArray[28]+$aggArray[29]+$aggArray[30])*100), 1);?>％です。</span></h3>
						<div class="box_voi"><div class="box_voi_inn">
							<div class="img_gra"><div id="q6_chart"></div></div>
							<table>
								<tr><th colspan="5">メールでの対応</th></tr>
								<tr>
									<th>大変良かった</th>
									<th>良かった</th>
									<th>普通</th>
									<th>少し悪かった</th>
									<th>悪かった</th>
								</tr>
								<tr>
									<td><?=$aggArray[26]; ?></td>
									<td><?=$aggArray[27]; ?></td>
									<td><?=$aggArray[28]; ?></td>
									<td><?=$aggArray[29]; ?></td>
									<td><?=($aggArray[30] ?? '0'); ?></td>
								</tr>
								<tr><td colspan="5" class="td_gra"><?=$agg; ?>件のアンケート結果より（未回答<?=($agg -$aggArray[26] -$aggArray[27] -$aggArray[28] -$aggArray[29] -$aggArray[30]); ?>件）</td></tr>
							</table>
						</div></div><!--/.box_voi-->
						<p class="lnk_page"><a href="#container">ページのtopへ</a></p>
					</div><!--/.con_voi-->


					<div class="btn_voi">
						<div>
							<p>全アンケートの原本をご覧いただけます。</p>
							<a href="/enquete/"><img src="/images/enquete/btn_to_enquete.png" alt="アンケート原本はコチラ"></a>
						</div>
					</div>
				</div>

<script>document.addEventListener('DOMContentLoaded', function(){google.charts.load('current',{'packages':['corechart']});google.charts.setOnLoadCallback(drawChart);

function drawChart(){
const chartIds = ['q1_chart','q2_chart','q3_chart','q4_chart','q5_chart','q6_chart','q7_chart'];
const colorsList = ['#fac14b','#f6937f','#dc7394','#98a44a','#55aaaa','#179090','#f90','#f52','#90b','#4caf50','#099','#066'];
var data = [];
data[1] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['価格',<?=$aggArray[0]; ?>],['人から聞いて',<?=$aggArray[1]; ?>],['信頼度',<?=$aggArray[2]; ?>],['検索上位だから',<?=$aggArray[3]; ?>],['紹介により',<?=$aggArray[4]; ?>],['その他',<?=$aggArray[5]; ?>]]);
data[2] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['大変短い',<?=$aggArray[6]; ?>],['短い',<?=$aggArray[7]; ?>],['普通',<?=$aggArray[8]; ?>],['少し長い',<?=$aggArray[9]; ?>],['長い',<?=$aggArray[10]; ?>]]);
data[3] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['大変安い',<?=$aggArray[11]; ?>],['安い',<?=$aggArray[12]; ?>],['普通',<?=$aggArray[13]; ?>],['少し高い',<?=$aggArray[14]; ?>]<?php if($aggArray[15]!=NULL) echo ',[\'高い\','.$aggArray[15].']'; ?>]);
data[4] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['大変良かった',<?=$aggArray[16]; ?>],['良かった',<?=$aggArray[17]; ?>],['普通',<?=$aggArray[18]; ?>],['少し悪かった',<?=$aggArray[19]; ?>]<?php if($aggArray[20]!=NULL) echo ',[\'悪かった\','.$aggArray[20].']'; ?>]);
data[5] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['大変理解し易かった',<?=$aggArray[21]; ?>],['理解し易かった',<?=$aggArray[22]; ?>],['普通',<?=$aggArray[23]; ?>],['少し理解しにくかった',<?=$aggArray[24]; ?>],['理解しにくかった',<?=($aggArray[25] ?? '1'); ?>]]);
data[6] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['大変良かった',<?=$aggArray[26]; ?>],['良かった',<?=$aggArray[27]; ?>],['普通',<?=$aggArray[28]; ?>],['少し悪かった',<?=$aggArray[29]; ?>]<?php if($aggArray[30]!=NULL) echo ',[\'悪かった\','.$aggArray[30].']'; ?>]);
data[7] = google.visualization.arrayToDataTable([['Evaluation', 'Counts'],['必ず使う',<?=$aggArray[31]; ?>],['使う',<?=$aggArray[32]; ?>],['分からない',<?=$aggArray[33]; ?>]<?php if($aggArray[34]!=NULL) echo ',[\'たぶん使わない\','.$aggArray[34].']';if($aggArray[35]!=NULL) echo ',[\'使わない\','.$aggArray[35].']';?>]);


const ww = document.getElementById('main-contents1').clientWidth / 3;
const options = {height:ww,chartArea:{top:10,width:'100%',height:'85%'},legend:'none',colors:colorsList,legend:{position:'labeled',textStyle:{fontSize:15}},pieSliceText:'none',pieHole:0.35};
var chart = [];
for(var i=0;i<7;i++){chart[i] = new google.visualization.PieChart(document.getElementById(chartIds[i]));chart[i].draw(data[i+1], options);};

var dataLength = [ data[1].Vf.length, data[2].Vf.length, data[3].Vf.length, data[4].Vf.length, data[5].Vf.length, data[6].Vf.length, data[7].Vf.length ];
const labelsGraphics = [];
for(var i=0;i<7;i++){
  var graphics = document.getElementById(chartIds[i]).querySelectorAll("svg > g");
  labelsGraphics.push(graphics[dataLength[i]].childNodes);
};
var replaceLabelColors = function(){
  for(var i=0;i<7;i++){
    var colorIndex = 6;
    for(var j=0;j < labelsGraphics[i].length; j++) {
      if (j % 2 == 0) { continue;
      } else {
        var currentLine = labelsGraphics[i][j];
        currentLine.childNodes[0].setAttribute("stroke", colorsList[colorIndex]);
        currentLine.childNodes[1].setAttribute("fill", colorsList[colorIndex]);
        colorIndex++;
      }
    }
  }
}

replaceLabelColors();
for(var i=0;i<7;i++){
  google.visualization.events.addListener(chart[i], "onmouseover", replaceLabelColors);
  google.visualization.events.addListener(chart[i], "onmouseout", replaceLabelColors);
};
}});
</script>


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

				<script src="https://www.gstatic.com/charts/loader.js"></script>
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
	</body>
</html>
