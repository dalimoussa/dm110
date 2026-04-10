<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '顧客別QRコードでホームページへ飛んだ人が誰か分かる';
	$str_title   = 'HP離脱者にステップメール';
	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社、DMトラッカー、顧客追跡ができる、特許申請済';
	$str_keyword = '発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行,DMトラッカー';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/DMT_step_mail';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2025/qrm_use_main.png" width="900" height="284" alt="注文フォームで注文しなかったお客様に自動ステップメールでアプローチ＝3-3-3の法則で成約率2倍" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> ホームページに誰が来たかが分かる</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 誰がアクセスしたか分かる仕組み</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> ホームページを見たお客様は見込み客</a>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> DMトラッカー・ステップメールを使うと</a>
				</li>
				<li class="toc__item"><a href="#m05"><span class="toc__number">5.</span> DMトラッカーを使うことで</a>
				</li>
				<li class="toc__item"><a href="#m06"><span class="toc__number">6.</span> まとめ</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">1. ホームページに誰が来たかが分かる</h2>
		<p>今まではホームページに誰が来たかは分かりませんでした。<br>
			しかし、当社<strong class="underline-yellow">DMトラッカー（特許申請済）</strong>を利用するとQRコードを読んでホームページに来た人が誰かが分かります。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub14.png" width="780" height="450" alt="アクセスと同時・1日集計・30日集計をお客様（DM配送元様）にメール転送" decoding="async" loading="lazy"></p>
	</section>


	<section id="m02">
		<h2 class="midashi03-2">2. 誰がアクセスしたか分かる仕組み</h2>
		<p>ホームページに飛ぶQRコードを顧客別にここに作成します。<br>
			そのQRコードを印刷した紙とお客様名発送者のへメールを合わせます。<br>
			DMに印刷された全てのQRコードは違うものになります。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub11.png" width="780" height="450" alt="宛名データから顧客別のQRコードを作成" decoding="async" loading="lazy"></p>
		<p class="u-mt30">お客様別に送られたDM・ニュースレターのQRコードを読むとホームページに飛びます。</p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">3. ホームページを見たお客様は見込み客</h2>
		<p>郵送DMを送り、DMに印刷されているQRコードを読んでホームページを見たお客様は、興味があるお客様になります。<br>
			しかし、殆どのお客様は購入することなく立ち去ります。<br>
			お客様が見たページによっても何が知りたいかが分かります。</p>
		<div class="box box--yellow">
		<p class="midashi05-2">◇見込み客と見たページの例</p>
		<ul class="list-circle">
			<li>料金表ページ　　：購入を検討している</li>
			<li>会社概要ページ　：信頼できるか確認している</li>
			<li>商品・サービス　：情報収集している</li>
			<li>申し込みページ　：購入意欲がある</li>
		</ul>
		</div>

		<p class="u-mt30">また、どのページを離脱したかによって</p>
		<ul class="list-circle u-ml30">
			<li>何が知りたかったのか</li>
			<li>購入までのどの段階にいるか</li>
		</ul>
		<p>が分かります。</p>

		<p>これらの情報があることによって、お客様の訴求内容に合ったメールを送ることが可能になります。<br>
			メールだけでなく、電話や郵送DMやニュースレター他、たくさんの媒体でアプローチできます。</p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">4. DMトラッカー・ステップメールを使うと</h2>
		<p>DMからホームページまで見に来てくれたお客様です。<br>しかしそのまま立ち去ったお客様に何もできずにいるのは大きな損失です。</p>
		<p><strong class="txt-red underline-yellow">ホームページから離脱した人に対して<br>自動で６回のステップメールを送ります。</strong></p>
		<p>これにより、購入に至ることが増えます。<br>
			特に申込フォームまで来て離脱した人は購入意欲の高い人ですので、追客により購入確率は高くなります。</p>
		<p><strong class="txt-red">購入意欲があるお客様を追客できれば、顧客獲得単価は大きく下がります。</strong></p>
	</section>


	<section id="m05">
		<h2 class="midashi03-2">5. DMトラッカーを使うことで</h2>
		<p>今まで誰がホームページに来たかが分からないため、その後のアプローチ手段がありませんでした。<br>
			DMトラッカーによりどのページに来たかにより、<strong class="txt-red">そのお客様のニーズに合ったフォローが出来ます。</strong></p>

		<h3 class="midashi05">フォロー媒体</h3>
		<ul class="list-circle u-ml30">
			<li><strong class="txt-red">ステップメール</strong></li>
			<li>郵送ニュースレター発送</li>
			<li>フォローDM</li>
			<li>メール</li>
			<li>電話</li>
			<li>LINE誘導</li>
			<li>SNS誘導</li>
			<li>訪問</li>
		</ul>
	</section>


	<section id="m06">
		<h2 class="midashi03-2">まとめ</h2>
		<p>DMトラッカー（特許申請済）を活用すれば、DMのQRコードを読み取ってホームページを訪れた顧客を特定できます。<br>
			アクセスしたページを分析することで、顧客の関心度や購入意欲を把握可能です。</p>

		<p>多くの訪問者は購入せずに離脱しますが、閲覧ページによって「料金を知りたい」「信頼性を確認したい」などの目的が推測できます。<br>
			この情報をもとに、離脱者へ自動で6回のステップメールを送信し、再訪や購入を促します。</p>

		<p>特に申込ページで離脱した顧客は購入意欲が高く、適切な追客により成約率向上や顧客獲得単価の削減が期待できます。さらに、メールだけでなく電話やDMなど多様な手段でフォロー可能です。</p>
	</section>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/DMT_towa">DMトラッカーとは</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/1clic_form">入力無しで注文できるフォーム</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/han4_nm">成約率4倍の秘密</a></div>
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
