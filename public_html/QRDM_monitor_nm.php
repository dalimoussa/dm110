<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'モニター　１クリックフォーム＆ステップメール';
	$str_title   = '１クリックフォーム・ステップメール　無料モニター募集';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/QRDM_monitor_nm';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
				<p><span class="u-font-bold txt-red">このページは当社ニュースレターを購読・名刺交換された方の無料申込ページです。</span></p>

				<div class="uk-flex uk-flex-wrap">
					<img src="/images/2025/qrm_use_sub22.png" class="uk-width-medium-1-2" width="780" height="374" alt="でも…住所や氏名の入力作業がなくなれば、大幅改善！" decoding="async" loading="lazy">
					<img src="/images/2025/qrm_use_sub21.png" class="uk-width-medium-1-2" width="780" height="374" alt="フォームから離脱客が誰か分かる → 追跡メールを自動配信" decoding="async" loading="lazy">
				</div>
				<p class="u-mt20"><u>１　入力が必要ないHP申込フォームを作成<br>
					２　申込フォームで申込がなかった人へ自動で6回のメール送信</u></p>
				<p class="u-ma20">上記内容で問題になるのが後追いメールの内容を考える事です。<br>
					これをメディアボックスの豊田がZOOMで一緒に考えます。</p>
			</div>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">無料モニター募集</h2>

		<p>当社よりDM発送依頼時に下記の方法のいずれかで申し込みください。<img src="/images/2025/qrm_use_sub23.png" class="uk-float-right" style="width:180px;height:180px" width="440" height="440" alt="https://www.dm110.jp/form/contact/" decoding="async" loading="lazy"></p>
		<ul class="list-circle u-ml30">
			<li>右記QRコードまたは下記URLの「お問合せ」から<br>　<a href="https://www.dm110.jp/form/contact/">https://www.dm110.jp/form/contact/</a><br>フォームの「ご用件をお書きください」に<br>「<strong class="underline-yellow">QRDM無料モニターの件</strong>」と入力して送信ください。</li>
			<li>電話（0561-37-2027）で<br>担当者に「QRDM無料モニターの件」の件で電話しましたと話してください。</li>
		</ul>

		<h3 class="midashi04">お願い</h3>
		<ol class="list-decimal u-ml30">
			<li>1年以内のDM反応数データがある</li>
			<li>DM発送30日後の反応数を教えてください<br>そのデータを公表しても良い事（会社名・商品名は出しません）</li>
			<li>DM発送前・後のアンケート記入（10項目）に協力してください</li>
			<li>当社で封筒を使ったDM発送を行う会社様</li>
			<li>フォームでのクレジット決済他料金が発生するものは受付できません</li>
		</ol>
		<p class="u-mt50">お困りごとがありましたら相談ください。</p>
	</section>



		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/han4_nm">成約率4倍の秘密</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/1clic_form">ワンクリックで申込完了</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/step_mail" style="margin:auto">ステップメールの作り方</a></div>
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
