<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
	$Published   = date("Y-m-d", filemtime(__FILE__)); //date(DATE_W3C, filemtime(__FILE__));
	$meta_title  = 'メディアボックスのスタッフの情報を数字で表しました';
	$str_title   = 'スタッフ募集';
	$str_descrip = '東郷町・豊明市・日進市周辺でお仕事をお探しの方へ。DM発送代行の専門会社メディアボックスが正社員（営業事務）と内職スタッフ（封入・ラベル貼り）を募集。安定した取引実績8,500社超の地元密着企業です。';
	$str_keyword = '正社員,内職,封入作業,在宅ワーク,軽作業,豊明市,日進市,三好市,名古屋市緑区,名古屋市天白区';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/staff_information';

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
a.no-deco{color:#333;text-decoration:none}
a .box span.link{color:#0ae;text-decoration:underline}
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
  "@type": "JobPosting",
  "title": "営業事務スタッフ（正社員）",
  "description": "東郷町・豊明市・日進市でお仕事をお探しの方へ。DM発送代行の専門会社メディアボックスが正社員（営業事務）を募集。安定した取引実績8,500社超の地元密着企業です",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "株式会社メディアボックス",
    "sameAs": "https://test.dm110.jp"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "東郷町",
      "addressRegion": "愛知県",
      "addressCountry": "JP"
    }
  },
  "datePosted": "<?=$Published; ?>",
  "employmentType": "FULL_TIME"
},
{
  "@context": "https://schema.org",
  "@type": "JobPosting",
  "title": "内職スタッフ（封入・ラベル貼り）",
  "description": "東郷町・豊明市・日進市でお仕事をお探しの方へ。DM発送代行の専門会社メディアボックスが内職スタッフ（封入・ラベル貼り）を募集。安定した取引実績8,500社超の地元密着企業です",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "株式会社メディアボックス",
    "sameAs": "https://test.dm110.jp"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "東郷町",
      "addressRegion": "愛知県",
      "addressCountry": "JP"
    }
  },
  "datePosted": "<?=$Published; ?>",
  "employmentType": "CONTRACTOR"
},
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
</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<section id="m01">
		<h1><?=$str_title; ?></h1>
		<h2 class="midashi03">メディアボックスってどんな会社？</h2>

		<ul class="list-circle u-ml30">
			<li>取引実績8,521社（東証プライム企業102社含む）</li>
			<li>創業以来20年以上、地元愛知で根を張って成長してきた安定企業</li>
			<li>プライバシーマーク取得。個人情報の取り扱いに真剣な会社</li>
			<li>「無理な売り込みはしない」をポリシーに、お客様本位の仕事を貫いています</li>
			<li>営業社員ゼロ。口コミ・紹介・HPだけで全国のお客様から選ばれています</li>
		</ul>

		<p>「倒産せず、長くお付き合いできる会社であること」を大切にしているからこそ、スタッフにとっても長く安心して働ける環境を整えています。</p>

		<h2 class="midashi03">スタッフ情報</h2>
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

		<p class="u-mt30">上記のスタッフデータが示すように、当社では子育て中のお母さんでも無理なく働ける環境を整えています。</p>

		<ul class="list-circle u-ml30">
			<li>1か月8時間、いつでも分割して使える「自由出入タイム」</li>
			<li>前日申請でOKの有給休暇制度</li>
			<li>子育て中のスタッフが多く、お互いにフォローし合える職場</li>
		</ul>

		<p>「少しだけ働きたい」「家の近くで仕事をしたい」という方、ぜひ一度ご覧ください。</p>

		<div class="uk-flex uk-flex-wrap column2">
			<a href="/bosyuu_youkou" class="no-deco uk-text-center"><div class="box box--yellow panel">
				<h3 class="midashi05-2">&#x1f3e2; 正社員募集</h3><p>営業事務<br>勤務条件・給与など詳細はこちら<br>　→ <span class="link">[募集要項を見る]</span></p>
			</div></a>
			<a href="/Naisyoku_bosyu.html" class="no-deco uk-text-center"><div class="box box--yellow panel">
				<h3 class="midashi05-2">&#x1f3e0; 内職スタッフ募集</h3><p>ご自宅でできる封入・封緘作業です。自分のペースで取り組めます<br>　→ <span class="link">[内職募集の詳細を見る]</span></p>
			</div></a>
		</div>
	</section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/aside.php'); ?>


</div>


	<div class="contact-block u-mt30">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/index_contact.html'); ?>
	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/footer.php'); ?>

</body>
</html>
