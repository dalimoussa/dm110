<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'DMトラッカーでホームページへ飛んだ人が誰か分かる';
	$str_title   = 'DMトラッカー';
	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社、DMトラッカー、顧客追跡ができる、特許申請済';
	$str_keyword = '発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行,DMトラッカー';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/DMT_towa';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2025/DMT_towa_main.png" width="900" height="284" alt="DMトラッカーとは　宛先別QRコードで「いつ」「だれが」アクセスと同時・1日集計・30日集計をお客様（DM配送元様）にメール連絡" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?><span class="txt-10rem">　※特許申請済み</span></h1>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 郵送DM・ホームページ最大の問題点</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 誰がアクセスしたか分かる</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> その結果</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m03-1">フォロー媒体</a></li>
						<li class="toc__item"><a href="#m03-2">顧客選別</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> まとめ</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">1. 郵送DM・ホームページ最大の問題点</h2>
		<p>郵送ＤＭとＨＰからの集客で、最大の問題点が以下です。</p>
		<p>1　郵送ＤＭ最大の問題点は誰が読んだかが分からない。</p>
		<p class="uk-text-center"><img src="/images/2025/han4_nm_sub11.png" width="780" height="364" alt="DMを誰が読んだかが分からない" decoding="async" loading="lazy"></p>
		<p class="u-mt30">2　HP・申込フォームに来た人が誰か分からない。</p>
		<p class="uk-text-center"><img src="/images/2025/han4_nm_sub12.png" width="780" height="364" alt="HP・申込フォームに来た人が誰か分からない" decoding="async" loading="lazy"></p>
		<p class="u-mt30">私はこの問題点が解決出来たら、大幅な集客率UP（売上UP）とコスト削減になるとずっと考えていました。</p>
	</section>


	<section id="m02">
		<h2 class="midashi03-2">2. 誰がアクセスしたか分かる</h2>
		<h3 class="midashi05">仕組み</h3>
		<p>ホームページに飛ぶQRコードを顧客別にここに作成します。<br>
			そのQRコードを印刷した紙とお客様名発送者のへメールを合わせます。<br>
			DMに印刷された全てのQRコードは違うものになります。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub11.png" width="780" height="450" alt="宛名データから顧客別のQRコードを作成" decoding="async" loading="lazy"></p>
		<p class="u-mt30">お客様別に送られたDM・ニュースレターのQRコードを読むとホームページに飛びます。</p>
		<p class="uk-text-center"><img src="/images/2025/DMT_towa_sub02.png" width="780" height="450" alt="読み込んだQRコードからHPへアクセス" decoding="async" loading="lazy"></p>
		<p class="u-mt30">ホームページに来たお客様は誰か分かります。<br>
			その内容を下記３種類の日程でDM発送者へ報告メール配信されます。</p>

		<h3 class="midashi05">メールでお知らせするタイミング</h3>
		<ul class="list-circle u-ml30">
			<li>すぐに</li>
			<li>その日の終わり０:００ごろに１日集計</li>
			<li>３０日後に３０日分の集計データ</li>
		</ul>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub14.png" width="780" height="450" alt="アクセスと同時・1日集計・30日集計をお客様（DM配送元様）にメール転送" decoding="async" loading="lazy"></p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">3. その結果</h2>
		<p>今まで誰がホームページに来たかが分からないため、その後のアプローチ手段がありませんでした。<br>
			DMトラッカーによりどのページに来たかにより、そのお客様のニーズに合ったフォローが出来ます。</p>

		<h3 id="m03-1" class="midashi05">フォロー媒体</h3>
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

		<h3 id="m03-2" class="midashi05">顧客選別</h3>
		<p>読まれたページによりお客様の属性を分けることができます。<br>
			自社データを使いお客様の属性を分けてフォローします。</p>
		<p>選別大分類は下記になります。</p>
		<ul class="list-circle u-ml30">
			<li>顧客属性</li>
			<li>購買行動</li>
			<li>顧客ステータス</li>
			<li>コミュニケーション履歴</li>
			<li>商品・サービス特性</li>
			<li>イベント・キャンペーン関連の選別</li>
			<li>データ分析による選別</li>
		</ul>
		<p>各種フォロー媒体と属性を選別したお客様に合う内容のDMを作りABテストしていくこと。</p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">まとめ</h2>
		<p>特許申請済みのDMトラッカー（顧客追跡ができるDM）はDMやホームページの課題として、これまで「誰がアクセスしたのかわからない」という問題が起きました。<br>
			当社のDMトラッカーでは、顧客ごとに異なるQRコードを印刷し、それをDMに組み込むことで、アクセスした顧客の特定が可能になります。</p>

		<p>この仕組みにより、DMを受け取った顧客がQRコードをスキャンすると、特定のホームページに誘導され、アクセス情報がDM発送者に通知されます。</p>

		<p>さらに、アクセスデータを基に顧客の興味ある属性を分析し、最適なフォローを実行可能です。<br>
			フォロー手段としては、ステップメール・ニュースレター・DM・メルマガ・電話・LINE・SNS・訪問などあり、この新しいDMトラッキングシステムにより、顧客の行動を解消し、精度の高いマーケティング戦略を展開することができます。</p>
	</section>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/1clic_form">入力無しで注文できるフォーム</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/DMT_step_mail">HP離脱者にステップメール</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/han4_nm">成約率4倍の秘密</a></div>
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
