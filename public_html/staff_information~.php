<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'メディアボックスのスタッフの情報を数字で表しました';
	$str_title   = 'スタッフ情報';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/staff_information';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>
<style type="text/css">
<!--
section h1{margin:0 0 1em;text-align:center;font-size:1.8rem;border-bottom:1px solid #ddd}
#staff{
	display: grid;
	gap: 10px;
	grid-template-columns: 1fr 1fr;
	padding: 1% 2%
}
#staff>div:nth-child(9) {
	grid-row: 5 / 7;
	grid-column: 2;
}
@media (min-width:768px){
#m01{margin-top:0}
}
@media (min-width:960px){
#staff{
	grid-template-columns: 1fr 1fr 1fr;
}
#staff>div:nth-child(9) {
	grid-row: 3 / 5;
	grid-column: 3;
}
}
-->
</style>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<section id="m01">
		<h1><?=$str_title; ?></h1>

		<p>当社メディアボックスのスタッフの特徴はお母様方が子育てを行いながら働ける会社を目指しています。<br>
			他社には無いシステムとして1か月に8時間、いつでも分体位で会社に出入り自由タイムがあります。<br>
			スタッフはほとんどが子供さんをお持ちの会社です。<br>
			また1日前であればいつでも有給休暇が取れます。<br>
			スタッフの詳しい内容をご覧ください。</p>

		<div id="staff">
			<div><img src="/images/2024/staff_information_sub01.png" width="750" height="750" alt="メディアボックスの特徴"></div>
			<div><img src="/images/2024/staff_information_sub02.png" width="750" height="750" alt="創立記念日"></div>
			<div><img src="/images/2024/staff_information_sub03.png" width="750" height="750" alt="通勤時間"></div>
			<div><img src="/images/2024/staff_information_sub04.png" width="750" height="750" alt="通勤手段"></div>
			<div><img src="/images/2024/staff_information_sub05.png" width="750" height="750" alt="服装"></div>
			<div><img src="/images/2024/staff_information_sub06.png" width="750" height="750" alt="職場での履き物"></div>
			<div><img src="/images/2024/staff_information_sub07.png" width="750" height="750" alt="休みは自由に取れる？"></div>
			<div><img src="/images/2024/staff_information_sub08.png" width="750" height="750" alt="前職"></div>
			<div><img src="/images/2024/staff_information_sub09.png" width="750" height="1526" alt="学生時代の部活"></div>
			<div><img src="/images/2024/staff_information_sub10.png" width="750" height="750" alt="出身地"></div>
			<div><img src="/images/2024/staff_information_sub11.png" width="750" height="750" alt="血液型"></div>
			<div><img src="/images/2024/staff_information_sub12.png" width="750" height="750" alt="文系か理系か"></div>
			<div><img src="/images/2024/staff_information_sub13.png" width="750" height="750" alt="子ども有無"></div>
			<div><img src="/images/2024/staff_information_sub14.png" width="750" height="750" alt="喫煙"></div>
		</div>

	</section>

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
	"image": "https://www.dm110.jp/images/DM_matome/<?=$image_name; ?>",
	"headline": "<?=$str_title; ?>",
	"datePublished": "<?=$Published; ?>",
	"dateModified": "<?php echo date(DATE_W3C, filemtime($source_file));?>",
	"author": {
		"@type": "Person",
		"name": "豊田 昭",
		"image": "https://www.dm110.jp/images/kaisyaannai/akira1_110831.png",
		"description" : "昭和61年4月より運送会社を設立。平成15年2月よりダイレクトメールやカタログ等の1kg以下の 印刷物に特化した、経費削減システムを作り、印刷から封入作業･配送サービスまでの格安システムを始める。ほとんどコスト削減で手のつけられない2000通以下の発送にも成功し、 50通から3万通までの中小部数発送のＤＭ発送代行専門店になる。" ,
		"url": "https://www.dm110.jp/kaisyaannai.html"
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
		"item": "https://www.dm110.jp/"
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
