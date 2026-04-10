<?php header("Content-Type: text/html; charset=UTF-8");
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'QRコード作成・DM印刷発送・データ解析（QRM）';
	$str_title   = 'QRコード作成・DM印刷発送・データ解析（QRM）';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/qrm';

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
		<div class="panel-image"><img src="/images/2024/qrm_main.png" width="900" height="284" alt="QRコード集客DM（QRM）宛先別QRコードでいつ・誰がアクセスしたかメール連絡" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
				<p>DMやニュースレター発送する際、QRコード・を印刷して発送するとWEBサイトやSNSへユーザーを誘導できます。比較的安い費用で実践できるため、集客方法のひとつとして利用が増えています。</p>
				<p>しかし<strong class="underline-yellow">QRコードを掲載しただけでは、効果があまり期待できません。</strong><br>
					QRコードを使った集客にはいろいろな方法があります。<br>
					このページではメディアボックスの豊田がお客様やコンサルタントと実践してきたデータをもとに解説していきます。</p>
			</div>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> QRコードのメリット</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m01-1">1：誰が・いつWEBにアクセスしたかが分かる</a></li>
						<li class="toc__item"><a href="#m01-2">2：低価格でWEB集客ができる</a></li>
						<li class="toc__item"><a href="#m01-3">3：QRコードはアクセスし易い</a></li>
						<li class="toc__item"><a href="#m01-4">4：反応率が高い</a></li>
						<li class="toc__item"><a href="#m01-5">5：DMをWEB誘導へのフックにする</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 2つのQRコードの使い方</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m02-1">QRコードの飛び先を全てのDMで同じものを使う</a></li>
						<li class="toc__item"><a href="#m02-2">発送先の顧客情報と連携して個別のQRコード作成</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> 格安で宛名別QRコードDMを発送する方法</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m03-1">宛名印字されている紙と違う紙にQRコードを入れる場合</a></li>
						<li class="toc__item"><a href="#m03-2">宛名印字されている紙と同じ紙にQRコードを入れる場合</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">QRコードのメリット</h2>

		<h3 id="m01-1" class="midashi03">1：誰が・いつWEBにアクセスしたかが分かる</h3>
		<p>個別の識別コードを付けてQRコードを作成します。<br>
			このQRコードをお客様が読みこみ、目的のWEBを見ると</p>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>いつ</li>
			<li>誰が</li>
			<li>どのデバイス</li>
		</ul>
		</div>
		<p>で見たのかがわかります。</p>

		<h4 class="midashi05">メディアボックスの例</h4>
		<p>メディアボックスでは宛先別QRコードを作成して宛先と合わせて封入を行い発送します。<br>
			お客様がQRコードを読むとQRコードに書かれているWEBに移動します。<br>
			その時に、<strong class="underline-yellow">いつ、だれが、どのデバイスを使用してアクセス</strong>したかが分かります。<br>
			それと同時に<strong class="underline-yellow">お客様にアクセス内容をメールする仕組み</strong>になります。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_sub1.png" width="780" height="214" alt="1.QRコード読み取り　2.QRコードのURLへ　3.アクセス結果報告" decoding="async" loading="lazy"></p>

		<p class="u-mt50">■30日後のまとめ</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_sub2.png" width="1546" height="450" style="width:773px" alt="結果報告の表" decoding="async" loading="lazy"></p>

		<h3 id="m01-2" class="midashi03">1：低価格でWEB集客ができる。</h3>
		<p>SEOやWEBからの誘導でコストが上がり困っている方は多いのではないでしょうか？<br>
			SEOもネット広告も目的は見てほしいWEBに飛んでもらうことです。</p>

		<h4 class="midashi05">SEOで上位に表示させるのは難しい</h4>
		<ul class="list-circle u-ml30">
			<li>成果が出るまで半年から1年以上かかるのは普通</li>
			<li>高額な費用を支払い続ける必要</li>
			<li>Googleのコアアップデートでいつ圏外になるか分からない</li>
			<li>大手企業・比較サイトの上位独占</li>
			<li>結果が上がらないことも多い</li>
		</ul>

		<h4 class="midashi05">ネット広告（adwords等）での採算割れ</h4>
		<ul class="list-circle u-ml30">
			<li>広告コストの上昇</li>
			<li>自社で管理するにはハードルが高い・</li>
			<li>専門会社依頼は広告費用の20％から30％が必要</li>
			<li>頻繁に広告設定が変更される</li>
			<li>ネット広告を見ずにSEO部分から見る人が増加</li>
		</ul>

		<h4 class="midashi05">DM・ニュースレターのQRコードで誘導</h4>
		<p>SEOでもネット広告でも誘導するためのタイトルやキャッチ、文章を工夫しています。<br>
			QRコードも同じです。<br>
			実は当社でもいろいろテストをしています。<br>
			反応率で桁が変わることもあります。<br>
			これができるとSEOやネット広告よりも安く誘導することができます。<br>
			現在発送物があるのであれば、宛名別QRコードを付けても発送費は変わりません。<br>
			そして、誰が・いつ・どのデバイスでアクセスしたが瞬時に分かります。</p>

		<h3 id="m01-3" class="midashi03">3：QRコードはアクセスし易い</h3>
		<p>アクセスしたいときの方法として</p>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>電話：営業をされる事を考えると気軽には連絡しづらい</li>
			<li>返信ハガキ：書かなければいけないので面倒</li>
			<li>メール：文面を考えなければいけないので面倒</li>
			<li>FAX：FAXを持っていない人も多い</li>
		</ul>
		</div>
		<p class="u-mt30">上記に比べ、QRコードであれば</p>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>電話と違い気軽にアクセスできる</li>
			<li>ほとんどの人が持っているスマホからすぐにアクセス</li>
			<li>アクセスする心理的ハードルが低い</li>
		</ul>
		</div>

		<h3 id="m01-4" class="midashi03">4：反応率が高い</h3>
		<p>QRコード付きダイレクトメールを受け取ったことがある人で63％がアクセスした事があるというデータが日本ダイレクトメール協会から出ています。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_sub3.png" width="744" height="270" alt="QRコード付きダイレクトメールを受け取ったことがあるアンケート" decoding="async" loading="lazy"></p>
		<p>　引用：<a href="https://www.jdma.or.jp/upload/research/20-2021-000018.pdf" target="_blank" rel="noopener noreferrer"><cite>DMメディア実態調査2020</cite>（PDF）</a></p>

		<h3 id="m01-5" class="midashi03">5：DMをWEB誘導へのフックにする</h3>
		<p>DMは本来の目的を購入や請求してもらう媒体という考え方もありました。<br>
			QRコードを使った集客ではさらに進んで、目的のWEBページに誘導するためのツールとして考える方法があります。</p>

		<h4 class="midashi05">理由</h4>
		<ul class="list-decimal u-ml30">
			<li><strong>DMで興味を持ったお客様はHPのチェックをしに行く</strong><br>
				この会社は存在するのか、どんな会社なのかなど詳細を知るため</li>
			<li><strong>DMでは書ききれない内容を見てもらえる</strong></li>
			<li><strong>SEOやネット広告でHPへ誘導するよりも安く誘導できる可能性が高い</strong><br>
				ABテストをして広告費用回収率（ROAS）を高めていく</li>
			<li><strong>ネットでも決済が強み</strong><br>
				ネットではカード決済が簡単に行える</li>
			<li><strong>SEO効果</strong><br>
				自社ホームページへのアクセスが増えればSEO効果につながる</li>
		</ul>
	</section>


	<section id="m02">
		<h2 class="midashi03-2">２つのQRコードの使い方</h2>

		<p class="u-mt30">DMでのQRコードは２つの使い方があります。<br>
			今までによく使われていたQRコードは全てのDMに同じQRコードを使う方法でした。<br>
			今後は<span class="underline-yellow">QRコードに発送先の顧客情報と連携して個別のQRコード作成が可能になりました。</span><br>
			<strong>これにより<span class="txt-red">　QRコード×WEB　</span>が可能になります。</strong></p>

		<h3 id="m02-1" class="midashi03">QRコードの飛び先を全てのDMで同じものを使う</h3>
		<ul class="list-decimal u-ml30">
			<li>お客様を目的のWEBに誘導できる<br>
				SEO・ネット広告費用を考えると割安になる場合が多い</li>
			<li>今までQRコードを入れずに発送していたDMやニュースレターに印刷することで<br>
				・自社のHP閲覧回数が増える<br>
				・目的に合ったページを作り集客率をUP<br>
				・別途発送コストがかからない</li>
			<li>SEO対策での効果が見込める<br>
				ページビューが増える　滞在時間が長くなる傾向がある</li>
			<li>どのお客様が目的のページに来たのか分からない<br>
				仕組みを作らないと正確に何人の人がQRコードからアクセスしてくれたのか分からない<br>
				<strong class="txt-red">※メディアボックスでは何人がアクセスしてきたか分かるシステムがあります</strong></li>
		</ul>

		<h3 id="m02-2" class="midashi03">発送先の顧客情報と連携して個別のQRコード作成</h3>
		<ul class="list-decimal u-ml30">
			<li>いつ・誰が・どのデバイスで訪問したかがわかる。<br>
				<strong class="txt-red">※メディアボックスでは低価格で行うシステムを作っています。</strong></li>
			<li>ページを見てくれたお客様には<br>
			・電話をかける<br>
			・メールを送る<br>
			・お得情報DMを送る<br>
			・ニュースレターを送り続ける<br>
			・他　多数の媒体を使い見込み客としての追いかけができます。</li>
		</ul>

		<h4 class="midashi05">具体例</h4>
		<p>ある上場会社ではこのシステムを使い、目的のページを見てくれた人に電話をかけて特別オファーの提案を行い、売上を上げ続けている会社があります。</p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">格安で宛名別QRコードDMを発送する方法</h2>

		<p class="u-mt30">宛名別QRコードを使うメリットは下記になります。</p>
		<div class="box box--yellow">
		<ul class="list-decimal">
			<li>QRコードを読み取った瞬間にメールで顧客情報を送る</li>
			<li>１日の最後にその日のアクセスあったデータを送る</li>
		</ul>
		</div>
		<p>上記を行う場合には下記の２つの方法があります。<br>当社では添え状にQRコード４つがお勧めです。</p>

		<h3 id="m03-1" class="midashi03">宛名印字されている紙と<span class="txt-red">違う</span>紙にQRコードを入れる場合</h3>
		<p>一番コストがかかる方法です。<br>
			QRコードを見ても識別ができないため１つずつ識別コードを合わせて封入する必要があります。<br>
			コストは高くなりますが使い方によって効果が上がる場合があります。</p>
		<p><strong class="txt-red">メディアボックスではこのような複雑な印刷封入も得意としています。</strong></p>

		<h3 id="m03-2" class="midashi03">宛名印字されている紙と<span class="txt-red">同じ</span>紙にQRコードを入れる場合</h3>
		<p>宛名印字がされている紙に宛名別QRコードを印刷する方法です。<br>
			またQRコードにキャッチコピーや説明を書くことができ反応率UPになります。<br>
			この方法は宛名とQRコードを同じ紙に印字するため楽に作業ができます。<br>
			現実はこの方法をお勧めします。</p>

		<h4 class="midashi05">具体例</h4>
		<ul class="list-decimal u-ml30 txt-red">
			<li>A4ハガキに個別QRコード</li>
			<li>添え状にQRコードを付けた紙<br>
				他の封入物<br>
				透明封筒に入れて<br>
				ゆうメール発送</li>
		</ul>
		<p>が格安で使用できます。</p>

<?php /*
		<div class="link-button link-button--red"><a href="https://www.dm110.jp/QR/Ryoukin">料金表はこちら</a></div>
*/ ?>
	</section>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm_use">DM×WEBを使って売上UP</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm_m_d" style="margin:auto">QRDMのメリットとデメリット</a></div>
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
