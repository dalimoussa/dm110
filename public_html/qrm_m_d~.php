<?php header("Content-Type: text/html; charset=UTF-8");
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '顧客別QRコードを使ったDMのメリットとデメリット';
	$str_title   = '顧客別QRコードを使ったDMのメリットとデメリット';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/qrm_m_d';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

<style type="text/css">
<!--
.link-button--red a{background:#f44336;border:2px solid #f11}
.link-button--red a:hover{background:#f86502;opacity:1}
-->
</style>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2024/qrm_m_d_main.png" width="900" height="284" alt="<?=$str_title; ?>" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
				<p>同じQRコードを全DMに印刷してWEBなどに誘導する方法は以前からありました。<br>
					しかし、<strong class="underline-yellow">顧客データと結び付けた各QRコード作成方法はほとんどありませんでした。<br>
					QRコードを個別に作成した場合、誰が・いつ・どのデバイスでアクセスしたかが瞬時に分かります。</strong></p>
				<p>あまり普及してこなかった理由は技術的に難しい事とコストが上がるためです。<br>
					顧客別QRコードが使えるようになるとDMとWEBの融合ができ、売上を上げるたくさんの方法と繋げることができるようになります。</p>
			</div>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 顧客データ連携QRDM × NET</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 顧客別QRコードDMのメリット</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m02-1">今送っているDMやニュースレターにQRコード</a></li>
						<li class="toc__item"><a href="#m02-2">誰が・いつ・どのデバイスで・何回アクセスが分かる</a></li>
						<li class="toc__item"><a href="#m02-3">誰がアクセスしたか分かった後の行動</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> 顧客別QRコードDMのデメリット</a>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> まとめ</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">顧客データ連携QRDM × NET</h2>
		<p class="u-mt30">今までのDMはDMだけでの集客が目的でした。<br>
			しかし、実際にDM集客を行ってもお客様が購入を検討する段階で購入先ホームページを見に行き情報を確認します。そのためHPの会社概要や取引実績などが重要になります。<br>
			次にDM内容をお客様が興味を抱き、より深く知ってみたいと思う内容にして自社HPに誘導する方法も効果を上げてきました。</p>

		<table class="table01 uk-text-center">
			<tbody><tr><th>&nbsp;</th><th>顧客データと<br>連係したQRコード</th><th>SEO・ネット広告</th></tr>
			<tr>
				<th>目的</th>
				<td>関心ある内容のQRコードからHPへ</td>
				<td>キーワードに関心がある人を<br>HPに誘導</td>
			</tr>
			<tr>
				<th class="nowrap">HPに来た人の特定<br class="uk-visible-small"></th>
				<td>◎</td>
				<td>×</td>
			</tr>
			<tr>
				<th class="nowrap">誰が<br class="uk-visible-small">いつアクセスしたか</th>
				<td>○</td>
				<td>×</td>
			</tr>
			<tr>
				<th class="nowrap">誰が<br class="uk-visible-small">何回アクセスしたか</th>
				<td>○</td>
				<td>×</td>
			</tr>
			<tr>
				<th>誰がどのデバイスから<br>アクセスしたか</th>
				<td>○</td>
				<td>×</td>
			</tr>
			<tr>
				<th>誰が<br class="uk-visible-small">どのページを見たか</th>
				<td>QRコードの飛び先</td>
				<td>誰が見たかは分からない</td>
			</tr>
			<tr>
				<th>フォームを誰が見たか</th>
				<td>フォーム画面に行き<br>離脱した人が誰か分かるので<br>追客できる</td>
				<td>誰が見たかは分からない</td>
			</tr>
			<tr>
				<th>先行者利益</th>
				<td>◎</td>
				<td>×</td>
			</tr>
			<tr>
				<th>金額</th>
				<td>今送っているDM掲載であれば<br>送料ゼロ</td>
				<td>採算を合わせにくくなっている</td>
			</tr>
			<tr>
				<th>使用する難易度</th>
				<td>○</td>
				<td>△</td>
			</tr>
			<tr>
				<th>アクセスに対しての<br>連携</th>
				<td><strong class="txt-red">DM・電話・FAX・SNS他多数</strong></td>
				<td>×</td>
			</tr>
		</tbody></table>

	</section>


	<section id="m02">
		<h2 class="midashi03-2">顧客別QRコードDMのメリット</h2>
		<p class="u-mt30">QRコードを読んで目的のホームページに来られたお客様を特定できることはとてもメリットがあります。<br>
			具体的にどのようなメリットがあるか見てみましょう。</p>

		<h3 id="m02-1" class="midashi03">今送っているDMやニュースレターにQRコード</h3>
		<p>今、発送しているDMやニュースレターにお客様別QRコードを入れた時のメリットは以下のとおり。</p>
		<ul class="list-decimal u-ml30">
			<li><strong class="txt-red">今はまだやっている人はほとんどいないので先行者利益が大きい</strong></li>
			<li>1つだけでなく複数の顧客別QRコードを印刷して効果を上げる</li>
			<li>QRコードのキャッチコピーや説明をABテストできる</li>
			<li>別途送料がかからない</li>
			<li>A4用紙にQRコードをたくさん入れてHP誘導することで接触頻度が上がり、SEO効果も上がる</li>
		</ul>

		<h3 id="m02-2" class="midashi03">誰が・いつ・どのデバイスで・何回アクセスが分かる</h3>
		<h4 class="midashi05" style="margin-top:0 !important">1. 顧客ごとに作ったQRコードをお客様が読み、目的のWEBに行くと<br>瞬時にお客様が登録したメールアドレスに下記の内容が届きます。</h4>
		<p><img src="/images/2024/qrm_m_d_sub1.png" style="border:5px solid #ddd" width="480" height="280" alt="お客様よりアクセスがありました" decoding="async" loading="lazy"></p>

		<h4 class="midashi05">2. 1日の終わりにその日にアクセスのあったWEBごとに集計表が届きます。</h4>
		<p><img src="/images/2024/qrm_m_d_sub2.png" style="width:654px" width="1308" height="168" alt="1日の終わりに集計表が届きます" decoding="async" loading="lazy">
		<br>※ユーザーIDより会社名・お客様名・住所・電話他が分かります。</p>

		<h4 class="midashi05">3. 30日間の集計表が分かります。</h4>
		<p class="uk-text-center"><img src="/images/2024/qrm_sub2.png" style="width:773px" width="1546" height="450" alt="結果報告の表" decoding="async" loading="lazy"></p>

		<h3 id="m02-3" class="midashi03">誰がアクセスしたか分かった後の行動</h3>
		<h4 class="midashi05" style="margin-top:0 !important">アクセス後すぐに</h4>
		<p>一番購入意欲が高い時なので背中を押す</p>
		<ul class="list-circle u-ml30">
			<li>電話（お得情報・モニター・無料サービス）</li>
			<li>メールで特典情報などを送信</li>
			<li>FAXで特典情報などを送信</li>
			<li>SNSでの連絡</li>
		</ul>

		<h4 class="midashi05">1日の終わりに来る集計</h4>
		<p>すぐに来たと感じる媒体で背中を押す</p>
		<ul class="list-circle u-ml30">
			<li>手書きハガキ　お礼状</li>
			<li>DM</li>
			<li>FAXで特典情報などを送信</li>
		</ul>

		<h4 class="midashi05">30日後まとめで</h4>
		<p>お客様分類をして効果を上げる手法を取る</p>
		<ul class="list-circle u-ml30">
			<li>手書きハガキ</li>
			<li>SNSへの誘導</li>
		</ul>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">顧客別QRコードDMのデメリット</h2>
		<p class="u-mt30">今までこれほどの効果がある顧客別QRコードDMですが普及しなかったのには理由があります。</p>

		<h3 id="m03-1" class="midashi05">システム構築に費用がかかる</h3>
		<p>システムを作るのには高額な費用が掛かります。<br>
			そのため大規模なDM発送を行う大手企業がよく使われていました。<br>
			<strong class="txt-red">メディアボックスでは格安で顧客別QRコードDMが発送できるシステムを完成させました。</strong></p>

		<h3 id="m03-2" class="midashi05">顧客と個別QRコードを合わせるのが難しい</h3>
		<p>QRコードは見ただけでは、どの顧客のQRコードか識別ができません。<br>
			正確にお客様名とそのお客様のQRコードを合わせる作業は難しい作業になります。<br>
			そのためDM発送代行会社では敬遠されやすい作業の一つになります。<br>
			<strong class="txt-red">メディアボックスでは熟練の作業者が沢山いるため、このシステムの実現が可能になりました。</strong></p>

		<h3 id="m03-3" class="midashi05">DMを発送している人が知らなかった</h3>
		<p>実際に顧客別QRコードの実証データをたくさん持っている会社が少なく、<br>
			DM発送代行会社からDMを発注する側に、顧客別QRコードDMが積極的に伝わっていないことが多いです。</p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">まとめ</h2>
		<p class="u-mt30">顧客データに連携したQRコードの特徴</p>

		<div class="box box--yellow">
		<ul class="list-decimal">
			<li>アクセスした人がいつ・どこに・何回アクセスしたかが分かります。</li>
			<li>アクセスと同時にメールでアクセス内容が送られてきます。</li>
			<li>１日の終わりに、１日の集計表が送られてきます。</li>
			<li>今発送しているDM・ニュースレターに印刷すれば発送コストはゼロ。</li>
			<li>今まだほとんど行われていないので先行者利益が期待できます。</li>
		</ul>
		</div>

		<p>QRコードとWEBの連携で他にも使い道がこれから開拓されていきます。<br>
			メディアボックスでは積極的にABテストや実証データを集めています。<br>
			ご相談にも乗れますのでお問い合わせください。</p>

	</section>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm">QRコード集客</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm_rei">QRDMの実例集</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm_use" style="margin:auto">DM×WEBを使って売上UP</a></div>
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
