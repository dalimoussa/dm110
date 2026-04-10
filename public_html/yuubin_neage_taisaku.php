<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '郵便料金値上げ対策実例';
	$str_title   = '郵便料金値上げ対策';
	$str_descrip = '2024年10月１日より郵便料金値上げが実施されます。現在考えられるベストな対処方法を提案しています。';
	$str_keyword = '郵便料金値上げ2024年10月1日';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/yuubin_neage_taisaku';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
<?php /*
		<div class="panel-image"><img src="/images/2024/qrm_use_main.png" width="900" height="284" alt="郵便料金値上げ対策実例" fetchpriority="high"></div>
*/ ?>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
<?php /*
				<p><u><strong>顧客別QRコード</strong>を使うと<span class="u-font-bold txt-red">どのお客様</span>が目的のホームページに来たかが<span class="u-font-bold txt-red">分かります。</span><br>
					<span class="u-font-bold">SEOやネット広告</span>から来た場合は誰がホームページに来たかが<span class="u-font-bold txt-red">不明。</span></u></p>
*/ ?>
				<p>日本郵便は2024年10月1日からの郵便料金値上げを正式に発表しました。<br>
					値上げ幅を大きいと感じられる人も多いのではないでしょうか？<br>
					料金改定に対してDM料金を安くする方法を紹介しますので参考にしてください。</p>
			</div>
		</div>
	</div>


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


	<section id="m01">
		<h2 class="midashi03-2">改定内容</h2>
		<p>DMでよく使われる、定形郵便・通常ハガキ・定形外郵便は下記内容になります。</p>
		<p><img src="/images/2024/yuubin_neage_sub01.png" style="width:425px" width="850" height="450" alt="定形郵便・通常ハガキ・定形外郵便の料金改定表" decoding="async" loading="lazy"></p>
		<p>引用：<a href="https://www.post.japanpost.jp/service/2024fee_change/index.html" target="_blank" rel="noopener noreferrer"><cite>日本郵便『2024年10月1日（火）から郵便料金が変わります。』</cite></a></p>
	</section>


<?php /*
	<section id="m02">
		<h2 class="midashi03-2">2. 顧客別ＱＲコード（QRDM）がお客様に配達されます</h2>
		<p>A4ハガキの場合は開封無しで内容確認ができます。<br>
			QRコードの場合は少しぐらいの汚れがあってもスマホで読み取れます。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub02.png" width="780" height="450" alt="QRDM（QRコード付きDM）が配送される" decoding="async" loading="lazy"></p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">3. DMを読み興味を持てば、QRコードへ</h2>
		<ul class="list-circle u-ml30">
			<li>電話 ： 営業をされる事を考えると連絡しづらい</li>
			<li>返信ハガキ ： 書かなければいけないので面倒</li>
			<li>メール ： 文面を考えなければいけないので面倒</li>
			<li>FAX ： FAXを持っていない人もいる</li>
		</ul>
		<h3 class="midashi03">QRコードからのアクセスは上記媒体よりも気軽にアクセスできます。</h3>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>入力無しでアクセスできる</li>
			<li>QRコードを読み込む習慣が増えている</li>
			<li>セールスをかけられる心配が少ないと思われている</li>
			<li>考える必要がない</li>
		</ul>
		</div>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub03.png" width="780" height="450" alt="DM配送先のお客様が興味を持ち、スマホでQRコードを読み込む" decoding="async" loading="lazy"></p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">4. QRコードからHPへアクセス</h2>
		<p>ＱＲコードは1つだけでなくＤＭ内容に合わせて、お客様の興味を持と思われるページ4つぐらいを用意しておくと反応率が上がります。</p>
		<p>ＤＭ内容にもよりますが効果的なページは</p>
		<ul class="list-circle u-ml30">
			<li>料金表</li>
			<li>会社概要</li>
			<li>取引実績・お客様の声</li>
			<li>フォーム</li>
		</ul>
		<p>＊上記は商品についてはＤＭで納得して、それから先を知りたいと思った場合です。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub04.png" width="780" height="450" alt="読み込んだQRコードからHPへアクセス" decoding="async" loading="lazy"></p>
	</section>
*/ ?>


	<section id="m02">
		<h2 class="midashi03-2">対策方法</h2>
		<p>発送していた主な種類別に対策を考えてみます</p>
		<ul class="u-ml30">
			<li>1. 官製ハガキ・圧着ハガキの場合</li>
			<li>2. 定型郵便の場合</li>
			<li>3. 定形外郵便の場合</li>
		</ul>

		<h3 class="midashi05">1. 官製ハガキ・圧着ハガキの場合</h3>
		<p>結論は特約ゆうメールを使いA4ハガキで送る方法になります。<br>
			今までは官製はがきで送ることで最低料金になりましたが、値上げににより特約ゆうメールとの差がなくなっています。</p>
		<p>また圧着ハガキも印刷と圧着コストが高額になるため印刷面の広さを考えると特約ゆうメールを使いA4ハガキで送ることがお得になります。</p>
		<p class="uk-text-center u-mb40"><img src="/images/2024/yuubin_neage_sub02.png" style="width:440px" width="880" height="1000" alt="官製（圧着）はがき VS 特約ゆうメールA4ハガキ" decoding="async" loading="lazy"></p>

		<h3 class="midashi05">2. 定型郵便の場合</h3>
		<p>定型郵便で送る場合はほとんどの場合で特約ゆうメールで送ることで割安になります。<br>
			注意したいことは封筒に<span class="u-font-bold">A4用紙を入れる場合折作業（3つ折り）作業代が必要</span>になる事です。<br>
			これが特約ゆうメールの場合は定形外の大きさでも料金がほとんど変わらないため折作業代金の方が高額になる事があります。<br>
			封筒代に問題がありますが、<span class="u-font-bold">紙封筒に比べA4透明封筒は安くなる</span>ため検討が必要です。</p>
		<p class="uk-text-center u-mb40"><img src="/images/2024/yuubin_neage_sub03.png" style="width:440px" width="880" height="1000" alt="定型郵便 VS 特約ゆうメール長3封筒" decoding="async" loading="lazy"></p>

		<h3 class="midashi05">3. 定型外郵便の場合</h3>
		<p>定型外郵便で送る場合はほとんどの場合で特約ゆうメールで送ることで割安になります。</p>
		<p class="uk-text-center"><img src="/images/2024/yuubin_neage_sub04.png" style="width:440px" width="880" height="1000" alt="定形外郵便 VS 特約ゆうメールA4封筒" decoding="async" loading="lazy"></p>

	</section>


	<section id="m03">
		<h2 class="midashi03-2">まとめ</h2>
		<p>メディアボックスのお勧めの移行方法は下記表になります。</p>
<?php //		<p class="uk-text-center"><img src="/images/2024/yuubin_neage_sub06.png" width="720" height="510" alt="お得な移行先（特約ゆうメール）" decoding="async" loading="lazy"></p>  ?>

		<table class="table01 uk-text-center">
			<thead><tr><th>現在</th><th>移行先<br>（特約ゆうメール）</th><th>備考</th></tr></thead>
			<tbody>
			<tr><td>官製ハガキ</td><td>A4ハガキ</td><td>印刷面積・認知度を考慮</td></tr>
			<tr><td>圧着ハガキ</td><td>A4ハガキ</td><td>印刷コスト・トータル料金</td></tr>
			<tr><td>A4ハガキ</td><td>A4ハガキ</td><td>コスト</td></tr>
			<tr><td>A4圧着ハガキ</td><td>A4圧着ハガキ</td><td>コスト</td></tr>
			<tr><td>長3封筒</td><td>長3・A4・角2封筒</td><td>折り作業代金を考慮</td></tr>
			<tr><td>A4・角2封筒</td><td>A4・角2封筒</td><td>圧倒的に特約ゆうメール</td></tr>
		</tbody></table>

		<p class="u-mt30">問題点として特約ゆうメールで送る場合には信書に当たるものは発送できないため、DM内容の検討が必要になる場合があります。<br>
			メディアボックスでは<span class="u-font-bold txt-red">信書対応アドバイスを無料で行っています</span>のでご利用ください。<br>
			私たち株式会社メディアボックス（DM発送代行会社センター）では、プライム企業（旧一部上場）との取引実績が102社になり、監査など厳しい基準をクリアしています。<br>
			そのため日本郵政と「特約制度」を結んでいる特約ゆうメールを使いDM発送を安く行えます。</p>

		<ul class="list-circle u-ml30">
			<li>最安の発送方法が分からない</li>
			<li>信書に関して相談したい。</li>
			<li>売上が上がるDMを出したい。</li>
		</ul>
		<p>という方は、ぜひお気軽にご相談ください。</p>

	</section>


		<div class="link-box-2cu">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/yumail_gaiyo" >ゆうメール注意点</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/yumail_gaiyo">信書とは</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/ichiran.html">料金表はこちら</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/DM_yasuku_okuru.html">DMを安く送る方法</a></div>
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
