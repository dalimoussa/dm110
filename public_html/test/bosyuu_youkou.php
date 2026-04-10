<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'メディアボックスのスタッフ募集要項';
	$str_title   = 'スタッフ募集';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/bosyuu_youkou';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>
<style type="text/css">
<!--
dl.uk-flex dt{width:5em}
dl.uk-flex dd{width:calc(100% - 5em)}
-->
</style>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2024/bosyuu_youkou_main.jpg" width="900" height="600" alt="社内勤務イメージ" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
<?php /*
			<div class="uk-text-left u-pa20">
				<p><u><strong>顧客別QRコード</strong>を使うと<span class="u-font-bold txt-red">どのお客様</span>が目的のホームページに来たかが<span class="u-font-bold txt-red">分かります。</span><br>
					<span class="u-font-bold">SEOやネット広告</span>から来た場合は誰がホームページに来たかが<span class="u-font-bold txt-red">不明。</span></u></p>
				<p>日本郵便は2024年10月1日からの郵便料金値上げを正式に発表しました。<br>
					値上げ幅を大きいと感じられる人も多いのではないでしょうか？<br>
					料金改定に対してDM料金を安くする方法を紹介しますので参考にしてください。</p>
			</div>
*/ ?>
		</div>
	</div>


<?php /*
	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 改定内容</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 対策方法</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m02-1">1. 官製ハガキ・圧着ハガキの場合</a></li>
						<li class="toc__item"><a href="#m02-2">2. 定型郵便の場合</a></li>
						<li class="toc__item"><a href="#m02-3">3. 定形外郵便の場合</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> まとめ</a>
				</li>
			</ul>
		</div>
	</div>
*/ ?>


	<section id="m01">
		<h2 class="midashi03-2">募集要項</h2>
		<h3 class="midashi05">勤務地 所在地</h3>
		<p>〒470-0164 愛知県 愛知郡 東郷町 三ツ池 4-5-2<br>
			株式会社メディアボックス内　（転勤はありません）</p>

		<h3 class="midashi05">アクセス</h3>
		<p>車通勤になります。<br>約50mのところに無料駐車場有<br>近所の方はバイク、自転車、徒歩でもOK</p>

		<h3 class="midashi05">勤務形態</h3>
		<p>正社員／固定時間制</p>

		<h3 class="midashi05">勤務時間</h3>
		<p>9:00から18:00（昼休み1時間）<br>1か月に8時間、いつでも分単位で会社に出入り自由タイムがあります。</p>

		<h3 class="midashi05">休暇・休日</h3>
		<p>土日祝日・大型連休・年末年始（年間休日123日／2024年度）<br>1日前であればいつでも有給休暇が取れます。</p>

		<h3 class="midashi05">仕事内容</h3>
		<p>営業事務から社内業務全般　スタッフ管理<br>
			初めは覚えることが多くありますが、慣れれば難しいことはありません。<br>
			お茶くみや掃除はありません。</p>
		<p>仕事は社内だけです。<br>主な仕事内容は下記になります。</p>
		<ul class="list-circle u-ml30">
			<li>見積依頼（メール・電話）</li>
			<li>専用システム入力</li>
			<li>注文（お客様との内容確認）</li>
			<li>進捗報告や変更依頼の対応</li>
			<li>入金確認</li>
			<li>発送</li>
			<li>返品物のチェック</li>
			<li>入出荷の手伝い他</li>
			<li>スタッフ管理</li>
			<li>改善提案</li>
		</ul>

		<h3 class="midashi05">職場</h3>
		<ul class="list-circle u-ml30">
			<li>お子様の急なお迎えなどに対応できます。</li>
			<li>35～45歳の女性中心です。</li>
			<li>近隣の奥様に仕事を助けてもらっています。</li>
			<li>正社員　1名（欠員するため）</li>
			<li>スタッフ全員で12名（うち男性50代1名）</li>
			<li>スタッフは全員中途採用です。</li>
			<li>長期間働いている人が多いです。</li>
			<li>飲み会や行事はありませんがアットホームです。</li>
			<li>全面禁煙です。</li>
			<li>服装は自由です。</li>
			<li>掃除はありません。</li>
			<li>朝にコーヒーが出ます。（嫌いな方はお茶）</li>
			<li>お客様から、スタッフに感謝の声が届きます。（お客様の声）</li>
			<li>毎月ニュースレターをお客様に送っています。</li>
			<li>土日祝日は完全に休みです。</li>
		</ul>

		<h3 class="midashi05">お客様について</h3>
		<ul class="list-circle u-ml30">
			<li>お客様はほとんどが法人様になります。</li>
			<li>取引実績　東証プライム(旧東証一部上場)102社　中小企業様含め、日本全国8521社</li>
			<li>8割以上がリピートのお客様で、残り2割弱が新規のお客様になります。</li>
			<li>見積はホームページからが約80％、電話が約20％になります。</li>
			<li>全社前金で請求</li>
			<li>会社設立から22年赤字無し</li>
		</ul>

		<h3 class="midashi05">社員研修</h3>
		<ul class="list-circle u-ml30">
			<li>入社後すぐに先輩社員が仕事内容を教えます。</li>
			<li>仕事の基本ができるようになるまで研修します。<br>作業方法を教えますのでメモを取ります。<br>その後、WORDに入力して再度できるか確認します。</li>
			<li>目次をつけて検索できるようにします。<br>目次が増えてきたら項目ごとに並べ替えます。</li>
			<li>研修後、分からないことは先輩スタッフが教えてくれます。</li>
			<li>分からないことは自分から質問。<br>基本的な事は通常1か月で出来ています。</li>
		</ul>

		<h3 class="midashi05">やりがい</h3>
		<ul class="list-circle u-ml30">
			<li>お客様から「ありがとう」が頂けます。<br>
				2006年より各担当スタッフ宛に自筆の「お褒めの言葉」<?=$num; ?>件、頂いています。<br>
				<a href="https://test.dm110.jp/koe/">https://test.dm110.jp/koe/</a><br>
				お客様とのやり取りを通じて、仕事をする事に達成感と誇りを持てる瞬間です。</li>
			<li>社長へ直接メールできます。<br>
				社長は会社に対しての意見を言ってくれるのをとっても喜んで聞いてくれます。<br>
				また、悩みや問題ごとも話してください。</li>
			<li>マーケティング及びDMが自然と身につきます。</li>
		</ul>

		<h3 class="midashi05">みんなで素敵な会社を一緒に作って行きましょう。</h3>
		<p>当社ホームページ<br>
			<a href="https://test.dm110.jp">https://test.dm110.jp</a></p>
		<p>お客様の声（スタッフ一同やりがいを持っています）<br>
			<a href="https://test.dm110.jp/koe.htm">https://test.dm110.jp/koe.htm</a></p>
		<p>社会貢献<br>
			<a href="https://test.dm110.jp/Shakai_kouken.htm">https://test.dm110.jp/Shakai_kouken.htm</a><br>
			<a href="https://www.canplaza.com/social.html">https://www.canplaza.com/social.html</a></p>
		<p>取引実績<br>
			<a href="https://test.dm110.jp/torihiki_jisseki.htm">https://test.dm110.jp/torihiki_jisseki.htm</a></p>

		<h3 class="midashi05">メディアボックスの社長はこんな人</h3>
		<ul class="list-circle u-ml30">
			<li>優しそうに見えると言われます</li>
			<li>社長に見えない</li>
			<li>戦略が上手とよく言われる</li>
			<li>ほとんど会社にいません</li>
			<li>7年かけアトピーを直しました</li>
			<li>特技：ウーロン茶で酔える</li>
			<li>2010年8月　中経出版より「バカ売れDM集客術」商業出版</li>
		</ul>

		<h3 class="midashi05">企業理念</h3>
		<p>『DM発送代行と言ったらメディアボックスだね』と言われるように</p>

		<h3 class="midashi05">将来へのビジョン</h3>
		<ul class="list-circle u-ml30">
			<li>取引先の身障者施設の時給単価を上げる仕事を出す。</li>
			<li>DMとWEBを連携して紙媒体に魅力を感じてもらう事</li>
			<li>ネット中心の会社にDM×WEBを浸透させる</li>
			<li>急激に拡大しない。</li>
			<li>主婦が長く働ける会社</li>
			<li>お客様と長く付き合える会社</li>
		</ul>

		<h3 class="midashi05">ちょっと変わっているところ</h3>
		<p>メディアボックスは普通の会社の考え方と少し違います。<br>
			お仕事をしていただく場所は一般家屋になります。<br>
			理由はDM発送代行を依頼するお客様は少しでも安く発送できることが大きな目的の一つです。<br>
			他の理由は面接時にお話しいたします。<br>
			そのため、大きな費用になる見栄えの良いオフィスや自社ビルを持たない方針です。<br>
			その分をスタッフやお客様に還元できるからです。<br>
			また社内には空気清浄器や加湿器があります。</p>

		<h3 class="midashi05">求める人材</h3>
		<p>こんな方を募集しています。</p>
		<ul class="list-circle u-ml30">
			<li>5分間に250文字以上タイピング</li>
			<li>PCの基本操作（メールが送れてエクセルで関数オートサム・フィルタが分かる）</li>
			<li>お客様との電話応対の仕事を楽しむ事ができる人</li>
			<li>スピードと正確さを保った仕事が出来る人</li>
			<li>機転が利く人（専任担担当者制のため）</li>
			<li>スタッフ（パートさん）管理ができる人</li>
			<li>事務・営業事務経験者</li>
		</ul>

		<p>このような方は当社に合いません</p>
		<ul class="list-circle u-ml30">
			<li>同じミスを繰り返す人</li>
			<li>嘘をつく人</li>
			<li>責任感がない人</li>
			<li>協調性のない人</li>
			<li>前職と比較する人</li>
			<li>社内変化に対応できない人（システム等の変更があります）</li>
		</ul>

		<h3 class="midashi05">アピールポイント</h3>
		<p>自由時間（月8時間まで）を分単位で使用できます。これを使い途中退社して用事を済ませてから再度出社もOK。<br>
			有給休暇（6か月後から）も取りやすい環境です。</p>

		<h3 class="midashi05">給与</h3>
		<p>正社員になった場合<br>
			固定残業代あり：月給 ￥300,000～ は1か月当たりの固定残業代￥46,875（20時間相当分）～を含む。20時間を超える残業代は追加で支給する。<br>
			最初の1か月は研修期間その後社員登用</p>

		<h3 class="midashi05">待遇・福利厚生</h3>
		<dl class="uk-flex uk-flex-wrap u-ml30">
			<dt>基本給</dt><dd>：30万円（みなし残業20時間含む。現状20時間はありません）</dd>
			<dt>手当</dt><dd>：自由手当（月8時間迄　分単位で退社、戻りＯＫ）</dd>
			<dt>年収</dt><dd>：420万円～</dd>
			<dt>交通費</dt><dd>：当社規定に基づき支給。（上限2万円まで）</dd>
			<dt>昇給</dt><dd>：当社規定</dd>
			<dt>賞与</dt><dd>：社内規定（基本1か月）</dd>
			<dt>退職金</dt><dd>：無し</dd>
			<dt>社会保険</dt><dd>：雇用保険・労災保険・健康保険・厚生年金保険</dd>
			<dt>試用期間</dt><dd>：6カ月間</dd>
		</dl>

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
