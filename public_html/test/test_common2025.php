<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'スタイル見本テスト';
	$str_title   = 'テストページ';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/test_common2025';

//include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>
<?php 
$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
$qnum = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_enquete.inc');
if(!isset($og_image)) $og_image = 'https://test.dm110.jp/common/img/common/og_image.png';
if(!isset($str_descrip)) $str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
if(!isset($canonical)) {
	$canonical = 'https://test.dm110.jp/DM_matome/';
	if(isset($_REQUEST['pages'])) $canonical .= $_REQUEST['pages'].'/';
}
?><!DOCTYPE html>
<html lang="ja" itemscope itemtype="https://schema.org/WebPage">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no,email=no,address=no">
<link rel='dns-prefetch' href='//ajax.googleapis.com'>
<link rel="preload" as="font" type="font/woff" href="/common/icon2/fonts/icomoon.woff?4m772b" crossorigin>
<link rel="icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/common/img/common/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/common/img/common/apple-touch-icon-precomposed.png">
<title><?=$meta_title; ?> | DM発送代行センター</title>
<?php if(isset($str_keyword)){ ?>
<meta name="keywords" content="<?=$str_keyword; ?>">
<?php } ?>
<meta name="description" content="<?=$str_descrip; ?>">
<meta property="og:title" content="<?=$str_title; ?>">
<meta property="og:site_name" content="DM発送代行センター | 株式会社メディアボックス">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=$canonical; ?>">
<meta property="og:description" content="<?=$str_descrip; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="og:image" content="<?=$og_image; ?>">
<meta property="fb:app_id" content="1120219308065444">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@1mbox">
<meta name="twitter:creator" content="@1mbox">
<meta name="twitter:title" content="<?=$str_title; ?>">
<meta name="twitter:url" content="<?=$canonical; ?>">
<meta name="twitter:description" content="<?=mb_substr($str_descrip,0,100); ?>">
<meta name="twitter:domain" content="test.dm110.jp">
<meta name="twitter:image:src" content="<?=$og_image; ?>">
<meta itemprop="name" content="<?=$meta_title; ?>">
<meta itemprop="about" content="<?=$str_descrip; ?>">
<meta itemprop="image" content="<?=$og_image; ?>">
<link rel="canonical" href="<?=$canonical; ?>">
<meta name="copyright" content="Copyright DM発送代行センター">

<link rel="stylesheet" type="text/css" href="/css/common2026.css" media="all">



<style type="text/css">
<!--
.th--blue{color:#fff;background:#0058a3}
@media (min-width:768px){
	main section table th,
	main section table td{padding:15px}

}
-->
</style>
</head>

<body id="index">
<?php //include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>

<header id="header" itemscope itemtype="https://schema.org/WPHeader">
	<div class="header-top container uk-hidden-small">DM（ダイレクトメール）発送のコスト削減と発送作業の大幅な軽減「DM発送代行センター」</div>
	<div class="header-main">
		<div class="uk-flex uk-flex-space-between uk-flex-middle uk-flex-center container">
			<div class="header-logo">
				<p class="uk-hidden-small"><img src="/common/img/common/header_bank.png" alt="帝国データバンク 企業コード：401570189　東京商工サーチ 企業コード：401418880" width="440" height="25" decoding="eager"></p>
				<a href="/"><img src="/common/img/common/header_logo.png" alt="DM発送代行センター" width="475" height="109" decoding="eager"></a>
			</div>
			<div id="menu-btn">
				<div class="header-menu__inner">
					<span class="header-menu__item"></span>
					<span class="header-menu__item"></span>
					<span class="header-menu__item"></span>
				</div>
			</div>
			<div class="header-tel uk-hidden-small">
				<p class="header-tel__ttl">お電話でのお問合せ</p>
				<p class="header-tel__number"><span class="header-tel__number__yellow"><i class="icon-phone"></i>0561-37-2027</span><br>受付時間: 9～18時（土日祝休）</p>
			</div>
			<div class="header-feature uk-hidden-small">
				<img src="/common/img/common/header_feature_2024.png" alt="プライバシーマーク　信書確認無料　宛名データ削除通知無料　最初から最後まで同じ担当者　100通～10万通OK　初回発送前に発送見本を送ります　封筒・封入物印刷OK＠2.2円～　法人様・個人様歓迎" width="335" height="150" decoding="eager">
			</div>
		</div>
		<div class="header-feature uk-visible-small">
			<img src="/common/img/common/header_feature_2024_sp.png" alt="プライバシーマーク　信書確認無料　宛名データ削除通知無料　最初から最後まで同じ担当者　100通～10万通OK　初回発送前に発送見本を送ります　封筒・封入物印刷OK＠2.2円～　法人様・個人様歓迎" width="682" height="76" decoding="eager">
		</div>
	</div>
</header>

<nav id="gnav">
	<div class="container">
		<ul class="gnavi__lists" role="navigation" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
			<li class="gnavi__list"><a href="https://test.dm110.jp/">トップ</a></li>
			<li class="gnavi__list"><a class="menu_toggle">863件の<br>お客様の声</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/koe/">手書きの声</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/Customer-reviews/">カスタマレビュー</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/enquete/aggregate/">アンケート集計表</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/enquete/">原本</a></li>
				</ul></li>
			<li class="gnavi__list"><a class="menu_toggle">初めての方へ</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/muryou_6ko">初回発送6つの無料でトラブル回避</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/yumail_gaiyo">ゆうメール便について</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/check_houhou.html">DM発送会社比較　おすすめ　７ポイント</a></li>
					<!--li class="dropdown__list"><a href="https://test.dm110.jp/gyoukai.html">特約ゆうメール便について</a></li-->
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/Shinsyotoha/">信書の具体例と信書に当らないDM</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/soejyou.html">条件を満たせば、信書部分も書ける添え状</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_yasuku_okuru.html">安くDMを発送する方法</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/A4yousi_omosa/">紙の重さ</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/gyoukai.html">DM発送代行業界丸わかり</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/form/kaizen_teian/">DM改善提案　無料</a></li>
				</ul></li>
			<li class="gnavi__list"><a class="menu_toggle">DMトラッカー<br>（特許申請済）</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/DMT_towa">DMトラッカーとは</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/1clic_form">１クリックフォーム</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DMT_step_mail">離脱客へのステップメール</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/han4_nm">成約率4倍のからくり</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/qrm_m_d">DMトラッカー　メリット・デメリット</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/qrm_rei">実例集</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/QRDM_price">DMトラッカー料金</a></li>
				</ul></li>
			<li class="gnavi__list"><a class="menu_toggle">お得情報</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_hannouritu_100.html">DM反応率100%の内容</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/catch_copy/">キャッチコピーを成功させる事前準備</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_kami_biniru_hannouyoi.html">紙封筒と透明ビニール封筒でのDM反応率の違い</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_atena_label_ichi_best3.html">宛名ラベル貼り位置のベスト3（Ａ４ハガキ）</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DMfuutou_size/">DMサイズ別発送コストとお得に送れるDMサイズ </a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DM_kouka/">DMの効果が上がるコツとテクニック</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DM_offer/">DMオファー（プレゼント）の種類とプレゼント別反応率</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/Newsletter_kouka/">ニュースレターの具体的効果と効果の上がる使い方</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/Kyuumin_DM/">休眠顧客の重要性と選別方法、休眠客への挨拶文実例</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DM_Abtest/">ABテストの方法、具体的な事例やポイント</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DM_fuunyuubutsu/">DM封入物に何を入れると良いのか</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/DM_matome/DM_aisatubun/">DM挨拶文事例や作成ポイント５つ</a></li>
				</ul></li>
			<li class="gnavi__list"><a class="menu_toggle">運営会社概要</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/kaisyaannai">会社案内</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/torihiki_jisseki.htm">取引実績</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/keieihousin.html">メディアボックス経営方針</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/Shakai_kouken.htm">社会貢献</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/Q&amp;A.html">Q＆A</a></li>
				</ul></li>
			<li class="gnavi__list"><a class="menu_toggle">サービス・料金</a>
				<ul class="dropdown__lists">
					<li class="dropdown__list"><a href="https://test.dm110.jp/rakurakuryoukin.html">封筒に封入コース</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/print_hassou">印刷+ゆうメール発送+A4透明封筒</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/Ryoukin_A4.htm">A4はがき印刷発送</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/A4accyaku_hagaki.html">A4圧着ハガキ印刷発送</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/hassou_nomi.html">発送のみ（封入済み封筒の発送）</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/QRDM_price">DMトラッカー（特許申請済み）</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/catalogs.html">カタログコース</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/sagyou_nomi">作業のみ</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/Film_Fuutou.htm">封筒印刷</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/2enryoukin.html">黒一色印刷</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/calorinsaturyoukin.htm">カラー印刷</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/option.html">その他（折・ホッチキス止）</a></li>
					<li class="dropdown__list"><a href="https://test.dm110.jp/form/kaizen_teian/">DM改善提案　無料</a></li>
				</ul></li>
			<li class="gnav__cta"><a href="/form/price/">お見積フォーム<br>3時間以内返信</a></li>
		</ul>
	</div>
	<div class="header-tel uk-visible-small">
		<p class="header-tel__ttl u-mb0">お電話でのお問合せ</p>
		<p class="header-tel__number"><span class="header-tel__number__yellow"><i class="icon-phone"></i><a href="tel:0561372027">0561-37-2027</a></span><br>受付時間: 9～18時（土日祝休）</p>
	</div>
</nav>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div id="contents" class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2025/han4_nm_main.png" width="900" height="284" alt="申込フォームでの入力作業は一切不要！×フォーム離脱者には6回のステップメール＝成約率4.3倍" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?><span class="txt-10rem">　※成約率を保証するものではありません</span></h1>
			<div class="uk-text-left u-pa20">
				<p>DMを作成・発送している企業様のなかには、なかなか反応率が上がらず悩んだり、どのくらいの反応率があれば良いのか悩まれるのではないでしょうか？</p>
				<p>本記事では、DMの反応率の概要や、反応率を上げるために意識すべきポイントなどを中心に解説します。</p>
			</div>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> DM（ダイレクトメール）まとめ</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m01-1">見出し</a></li>
						<li class="toc__item"><a href="#m01-2">カラーボックス</a></li>
						<li class="toc__item"><a href="#m01-3">テーブル</a></li>
						<li class="toc__item"><a href="#m01-4">その他</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 通常HTML5ページ</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> その結果、200％以上の申込</a>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> さらに申込フォーム問題も解決</a>
				</li>
				<li class="toc__item"><a href="#m05"><span class="toc__number">5.</span> 追客</a>
				</li>
				<li class="toc__item"><a href="#m06"><span class="toc__number">6.</span> 郵送ＤＭの本当の魅力</a>
				</li>
				<li class="toc__item"><a href="#m07"><span class="toc__number">7.</span> 2025年以降の郵送ＤＭは</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi02">DM（ダイレクトメール）まとめ</h2>
		<p><img src="/images/DM_matome/Hannouritu_sub1.jpg" width="1980" height="1305" alt="" decoding="async" loading="lazy"></p>

		<h3 id="m01-1" class="midashi03">見出し（midashi03）</h3>
		<h4 class="midashi04">見出し（midashi04）</h4>
		<h4 class="midashi05">見出し（midashi05）</h4>
		<h4 class="midashi05-2">見出し（midashi05-2）</h4>


		<h3 id="m01-2" class="midashi03">カラーボックス</h3>
		<p>DMの反応率とは、DMを送付した顧客のうち「インターネットで検索した」「商品を購入・利用した」など、期待される行動を起こした顧客の割合のことです。</p>
		<p>DMの反応率は、以下の計算式で求められます。</p>

		<p class="box box--blue">DMの反応率（％）＝ レスポンスの数 ÷ DMの送付数 × 100</p>

		<div class="box box--yellow">
		<ol class="list-decimal u-ml30">
			<li>最終的な成約数、あるいは粗利額を基準にする</li>
			<li>どのDMが成約のきっかけとなったかを確認できるようにする</li>
			<li>DMによる継続率や離脱率を見極める</li>
		</ol>
		</div>

		<div class="box box--yellow">
		<p class="midashi05-2">◇主媒体として（midashi05-2）</p>
		<ul class="list-circle">
			<li>郵送DM</li>
			<li>ステップメール</li>
		</ul>
		</div>

		<div class="box box--red">
		<p>注意：申込フォームに飛ぶQRコードは直接見える場所には印刷できません。</p>
		<p class="u-mb0">例</p>
		<ul class="list-circle u-mt0">
			<li>A4ハガキ</li>
			<li>透明封筒から見える紙</li>
			<li>紙封筒自体への印刷</li>
		</ul>
		</div>


		<h3 id="m01-3" class="midashi03">テーブル</h3>
		<table class="table01">
			<tbody><tr><th>　</th><th>BtoC</th><th>BtoB</th></tr>
			<tr><th>新規顧客</th><td>0％～45％</td><td>0％～53％</td></tr>
			<tr><th>既存顧客（※）</th><td>0.4％～75％</td><td>0.4％～100％</td></tr>
		</tbody></table>
		<p>（※）宛先を厳選しています。</p>

		<p class="u-mb0">【総付景品の限度額】</p>
		<table class="table01">
			<tr><th>取引価額</th><th>景品類の最高額</th></tr>
			<tr><td>1,000円未満</td><td>200円</td></tr>
			<tr><td>1,000円以上</td><td>取引価額の10分の2</td></tr>
		</table>
		<p>引用：<a href="https://www.caa.go.jp/policies/policy/representation/fair_labeling/premium_regulation/" target="_blank" rel="noopener noreferrer"><cite>消費者庁「景品規制の概要」</cite></a></p>

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

		<p class="u-mt30">料金計算方法</p>

		<table class="table01 uk-text-center">
			<thead><tr><th class="th--blue" colspan="2">QRコード数　合計</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">発送件数</td>
				<td class="uk-text-right">1000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　種類</td>
				<td class="uk-text-right">1</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">1000</td>
			</tr>
			<tr>
				<td colspan="2">※注意　当社DM発送代行料金に別途追加になります。</td>
			</tr>
		</tbody></table>


		<h3 id="m01-4" class="midashi03">その他</h3>

		<fieldset>
			<legend>＜チェックリスト＞</legend>
			<input type="checkbox"> 用紙の選び方は適切か<br>
			<input type="checkbox"> フォントは原則として3種類以内にしているか<br>
			<input type="checkbox"> デザインは見やすいか<br>
			<input type="checkbox"> 図やイラストに置き換えるべき箇所はないか<br>
			<input type="checkbox"> ターゲットにメリットがある内容か<br>
		</fieldset>

<style type="text/css">
<!--
.flow{padding-left:10px}
.flow>li{position:relative}
.flow>li:not(:last-child)::before{content:'';background:#ddd;width:1em;height:120%;position:absolute;top:calc(50% - -40px);left:.8em;transform:translateY(-50%);-webkit-transform:translateY(-50%)}
.flow>li:not(:last-child){margin:0 0 50px}
.flow>li .flow__num{position:absolute;display:inline-block;width:2em;height:2em;left:0;line-height:2em;font-size:1.3em;text-align:center;border-radius:100vh;color:#fff;background:#0058a3}
.flow>li dl{padding:0 0 0 30px}
.flow>li dl dt{padding:0 0 5px;margin:0 15px 9px 1.5em;font-size:1.2em;font-weight:700;position:relative;border-bottom:4px solid #7fa5ca}
.flow>li dl dd{margin:0;padding:0 15px 5px 2em}
-->
</style>
		<ul class="flow">
			<li>
				<p class="flow__num">1</p>
				<dl>
					<dt><h3>無料相談・要件定義</h3></dt>
					<dd>通数・納期・資材仕様・ご予算・制約条件を詳しくお聞かせください</dd>
				</dl>
			</li>
			<li>
				<p class="flow__num">2</p>
				<dl>
					<dt><h3>信書チェック・最適配送設計</h3></dt>
					<dd>内容物の法的チェックと最も経済的な配送方法をご提案</dd>
				</dl>
			</li>
			<li>
				<p class="flow__num">3</p>
				<dl>
					<dt><h3>無料サンプル作成</h3></dt>
					<dd>実物での封入テスト・梱包強度確認で最終仕様を決定</dd>
				</dl>
			</li>
			<li>
				<p class="flow__num">4</p>
				<dl>
					<dt><h3>資材受入・工程管理</h3></dt>
					<dd>バーコード・混載資材も正確に識別・処理</dd>
				</dl>
			</li>
			<li>
				<p class="flow__num">5</p>
				<dl>
					<dt><h3>封入・検品・発送</h3></dt>
					<dd>Wチェック・重量検品・抜取検査</dd>
				</dl>
			</li>
			<li>
				<p class="flow__num">6</p>
				<dl>
					<dt><h3>発送証明・データ削除</h3></dt>
					<dd>発送記録のご報告と個人情報の完全削除・証明書発行</dd>
				</dl>
			</li>
		</ul>

	</section>


	<section id="m02">
		<h2 class="midashi03-2"><span class="txt-red">【無料】</span> 通常HTML5ページ（midashi03-2）</h2>

		<p class="u-mt30">ＤＭ発送代行専門会社は安くＤＭを送る場合には<br class="uk-hidden-small">日本郵便と大口契約をして特約ゆうメールというものを使います。<br>
			現在この特約ゆうメールが通常のＤＭ発送代行料金が一番安くなります。<br>
			しかしこの特約ゆうメールを使いう場合には通常郵便とは違いいくつかの制約があります。<br>
			その中で<strong class="underline-yellow">信書は特約ゆうメールで発送できない</strong>というものがあります。<br>
			「信書とは」の説明は複雑になりますので詳しくはこちらで確認してください。</p>
		<div class="link-button"><a href="https://test.dm110.jp/yumail_gaiyo">信書とは</a></div>

		<p class="clear u-mt30">この信書確認は難しいので当社が代行して行っています。<br>
			実際に信書に該当することもあります。<br>
			その場合には信書にあたる部分を変更する提案をします。<br>
			また裏技として、添え状というもので代行する場合もあります。</p>
		<div class="link-button link-button--red"><a href="https://test.dm110.jp/soejyou.html">添え状 詳細</a></div>

		<p class="clear u-mt50">これらの案内を印刷前に依頼いただいております。<br>
			<strong class="underline-yellow">信書確認は印刷前にメディアボックスに見せてください。</strong></p>

		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_rei">QRDMの実例集</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_use">DM×WEBを使って売上UP</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_m_d" style="margin:auto">QRDMのメリットとデメリット</a></div>
		</div>


		<h3 class="midashi04">申込方法</h3>
		<p>当社よりDM発送依頼時に下記の方法のいずれかで申し込みください。<img src="/images/2025/qrm_use_sub23.png" class="uk-float-right" style="width:180px;height:180px" width="440" height="440" alt="https://test.dm110.jp/form/contact/" decoding="async" loading="lazy"></p>
		<ul class="list-circle u-ml30">
			<li>右記QRコードお問合せから<br>　<a href="https://test.dm110.jp/form/contact/">https://test.dm110.jp/form/contact/</a><br>フォームの「ご用件をお書きください」に<br>「QRDM無料モニターの件」と入力して送信ください。</li>
			<li>電話（0561-37-2027）で<br>担当者に「QRDM無料モニターの件」の件で電話しましたと話してください。</li>
		</ul>

		<h2 class="midashi03-2">1. DM・HP最大の問題点</h2>
		<p>郵送ＤＭとＨＰからの集客で、最大の問題点が以下です。</p>
		<p>1　郵送ＤＭ最大の問題点は誰が読んだかが分からない。</p>
		<p class="uk-text-center"><img src="/images/2025/han4_nm_sub11.png" width="780" height="364" alt="DMを誰が読んだかが分からない" decoding="async" loading="lazy"></p>
		<p class="u-mt30">2　HP・申込フォームに来た人が誰か分からない。</p>
		<p class="uk-text-center"><img src="/images/2025/han4_nm_sub12.png" width="780" height="364" alt="HP・申込フォームに来た人が誰か分からない" decoding="async" loading="lazy"></p>
		<p class="u-mt30">私はこの問題点が解決出来たら、大幅な集客率UP（売上UP）とコスト削減になるとずっと考えていました。</p>

		<h2 class="midashi03-2">2. その問題が解決しました</h2>
		<p>1　顧客別QRコードを作り</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub11.png" width="780" height="450" alt="宛名データから顧客別のQRコードを作成" decoding="async" loading="lazy"></p>
		<p class="u-mt30">2　お客様がQRコードでHPに来たと同時にDM発送元にメールで知らせる</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub14.png" width="780" height="450" alt="HPへのアクセス情報は、すぐにお客様（DM配送元様）にメールで転送される" decoding="async" loading="lazy"></p>
		<p class="u-mt30">3　申込フォームから離脱したお客様には追跡メールを送る</p>
		<p class="uk-text-center"><img src="/images/2025/qrm_use_sub21.png" width="780" height="374" alt="フォームから離脱客が誰か分かる → 追跡メールを自動配信" decoding="async" loading="lazy"></p>


		<h3 class="midashi04">その結果</h3>
		<p>入力項目の無いフォームと６つのステップメールを使い<br><span class="txt-20rem">集客率400％UP以上 も</span><br>その他にも良い結果が続出しています。</p>
		<p>特に効果があった例としては</p>
		<ul class="list-circle u-ml30">
			<li>注文フォームからの離脱者</li>
			<li>セミナー集客</li>
			<li>展示会集客</li>
			<li>高額商品・サービス</li>
			<li>ECサイトのかご落ち</li>
		</ul>
	</section>




		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/1clic_form">ワンクリックで申込完了</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/step_mail">ステップメールの作り方</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/QRDM_monitor_nm" style="margin:auto">無料モニター</a></div>
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
<script>
window.onload = function(){
  $(".menu_toggle").on("click", function() {
  if (window.matchMedia("(max-width:767px)").matches){
    if(!$(this).hasClass("active")) {
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
    $(this).next().slideToggle();
  }});
});
</script>
</body>
</html>
