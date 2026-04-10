<?php header("Content-Type: text/html; charset=UTF-8");
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'QRDM（顧客別QRコードを使ったDM）料金表';
	$str_title   = 'QRコードの料金表';
	$str_descrip = 'QRDM　顧客別QRコードを使ったＤＭ発送代行';
	$str_keyword = 'QRDM　顧客別QRコードでＤＭ発送代行,ＤＭ発送,ＤＭ代行';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/QRDM_price';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

<style type="text/css">
<!--
a.mute:hover{opacity:1}
.link-button--red a{background:#f44336;border:2px solid #f11}
.link-button--red a:hover{background:#f86502;opacity:1}
.box--red{background:#fce4e4;border:1px solid #e5b8b8}
.th--blue{color:#fff;background:#0058a3}
.table01{margin:auto}
#ans{display:inline-block;width:8em;height:48px;line-height:48px;text-align:center;background:#fbfce4;font-size:19px}
.noborder td{border:0}
@media (min-width:768px){
	main section table th,
	main section table td{padding:15px}
	.table01{max-width:500px}
	#submit{max-width:500px}
}

.input-block{margin:0 auto 20px}
.input-block input,
.input-block select{display:inline-block;margin:6px 1px 1px;padding-right:15px;padding-left:15px;font-size:16px;line-height:40px;color:#3b4465;border:1px solid #b0c4de;border-radius:3px}
.input-block select{padding:10px}
.input-block input:focus{margin:5px 1px 0;border:2px solid #b0c4de}
.input-block input:invalid{background:#eef9fe}
.input-block .btn-submit{position:relative;margin:30px 0;width:90%;padding:10px;border-radius:25px;background:#0058a3;color:#fff;font-weight:800;line-height:1.6rem;transition:all .3s}
.input-block .btn-submit:hover{background:#4780cd;font-size:18px;letter-spacing:.2em;cursor:pointer}
.btn-flash{outline:3px solid;outline-color:#e3e5b8;outline-offset:0;animation:light .8s 3}
@keyframes light{100%{outline-color:transparent;outline-offset:12px}}
.input-block .btn-submit[disabled],
.input-block .btn-submit[disabled]:hover{color:#666;background:#ddd;font-size:16px;letter-spacing:0;cursor:default}
.number-container{position:relative;display:inline-block}
.number-input{position:relative;text-align:right}
.number-input:not(:focus){color:transparent;z-index:1}
.number-input:focus{color:#555;z-index:3}
.number-overlap{position:absolute;top:13px;right:0;display:inline-block;text-align:right;background:transparent;font-size:18px;width:100%!important;pointer-events:none;z-index:2}
@media (min-width:768px){
	.input-block{font-size:130%}
	.input-block .btn-submit:hover{font-size:22px}
}
-->
</style>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
<?php /*
		<div class="panel-image"><img src="/images/2024/qrm_main.png" width="900" height="284" alt="QRコード集客DM（QRM）宛先別QRコードでいつ・誰がアクセスしたかメール連絡" fetchpriority="high"></div>
*/ ?>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
				<p>ネット検索やネット広告からお客様は誰が自社HPに来たのか分かりません。<br>しかし、DM発送するお客様ごとに個別QRコードを作成し印刷発送した場合はお客様がQRコードを読むと誰がいつHPに来たか分かります。<br>その内容をDM発送依頼会社様にメールで転送されます。<br><strong class="txt-red">注意　当社DM発送代行料金に別途追加になります。</strong></p>
			</div>
		</div>
	</div>

<?php /*
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
*/ ?>

	<section id="m01">
		<h2 class="midashi03-2">この料金内で出来る事</h2>

		<p>このシステムで出来ることは3つです</p>
		<ul class="list-decimal u-ml30">
			<li>自社HPにアクセスがあるとすぐに下記内容が届きます</li>
			<li>1日のアクセス集計が毎日メールで送られます</li>
			<li>30日後に集計表も送られます</li>
		</ul>

		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub13.png" width="780" height="450" alt="HPへのアクセス情報は、すぐにお客様（DM配送元様）にメールで転送される" decoding="async" loading="lazy"></p>

		<h3 id="m01-1" class="midashi03">1．自社HPにアクセスがあるとすぐに下記内容が届きます</h3>
		<p><img src="/images/2024/QRDM_price_sub2.png" width="440" height="292" alt="ユーザーID, 遷移先URL,会社名,名前,OS,ブラウザ,アクセス年月日時間" decoding="async" loading="lazy"></p>

		<h3 id="m01-2" class="midashi03">2．1日のアクセス集計が毎日メールで送られます</h3>
		<p><img src="/images/2024/QRDM_price_sub3.png" width="1914" height="166" alt="1日のアクセス集計" decoding="async" loading="lazy"></p>

		<h3 id="m01-3" class="midashi03">3．30日後に集計表も送られます</h3>
		<p><img src="/images/2024/qrm_sub2.png" width="1546" height="450" style="width:773px" alt="30日後に集計表" decoding="async" loading="lazy"></p>

	</section>


	<section id="m02">
		<h2 class="midashi03-2">料金表</h2>

		<table class="table01 uk-text-center u-mb30">
			<thead>
			<tr>
				<th class="th--blue">QR個数</th>
				<th class="th--blue">料金（税抜）</th>
			</tr>
			</thead>
			<tbody class="uk-text-right">
			<tr>
				<td class="">100</td>
				<td class="">22,500円</td>
			</tr>
			<tr>
				<td class="">200</td>
				<td class="">25,000円</td>
			</tr>
			<tr>
				<td class="">300</td>
				<td class="">27,500円</td>
			</tr>
			<tr>
				<td class="">500</td>
				<td class="">32,500円</td>
			</tr>
			<tr>
				<td class="">1000</td>
				<td class="">32,500円</td>
			</tr>
			<tr>
				<td class="">2000</td>
				<td class="">60,000円</td>
			</tr>
			<tr>
				<td class="">3000</td>
				<td class="">80,000円</td>
			</tr>
			<tr>
				<td class="">5000</td>
				<td class="">95,000円</td>
			</tr>
			<tr>
				<td class="">10000</td>
				<td class="">140,000円</td>
			</tr>
			<tr>
				<td colspan="2" class="uk-text-left">※上記料金には下記が含まれます。<br>
					　　１　特別QRコード作成・印刷<br>
					　　２　封筒宛名と内容物の突合作業<br>
					※注意　当社DM発送代行料金に別途追加になります。</td>
			</tr>
		</tbody></table>

		<table class="table01 uk-text-center">
			<thead><tr><th colspan="2">オプション料金</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">DMトラッカー用DM作成</td>
				<td class="uk-text-right">20万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">DMトラッカー用遷移先ページ作成</td>
				<td class="uk-text-right">15万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">Chatwork連携</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">Slack連携</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコードのキャプション作成</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">ステップメール作成・設定</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">ABテスト案</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td class="uk-text-left">丸ごとパック 企画から印刷発送・提案</td>
				<td class="uk-text-right">お見積り</td>
			</tr>
			<tr>
				<td class="uk-text-left">コンサルティング</td>
				<td class="uk-text-right">２０万円から</td>
			</tr>
<?php /*
			<tr>
				<td class="uk-text-left">ステップメール６回</td>
				<td class="uk-text-right">別途相談</td>
			</tr>
			<tr>
				<td class="uk-text-left">１クリックフォーム</td>
				<td class="uk-text-right">別途相談</td>
			</tr>
			<tr>
				<td class="uk-text-left">フォロー電話</td>
				<td class="uk-text-right">別途相談</td>
			</tr>
			<tr>
				<td class="uk-text-left">コンサルティング</td>
				<td class="uk-text-right">10万円から</td>
			</tr>
			<tr>
				<td colspan="2">※注意　当社DM発送代行料金に別途追加になります。</td>
			</tr>
*/ ?>

		</tbody></table>

<?php /*
		<h3 id="m02-1" class="midashi03" style="margin-top:75px !important">料金計算方法</h3>
		<p>QRコード１つの価格が基本になります。<br>
			それにシステム使用料２万円が加算されます。<br>
			DMに2種類・3種類のQRコードを使用することもあります。</p>

		<h4 class="midashi05">例１：　発送件数1000通　QRコード1種類の場合</h4>
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
		</tbody></table>
		<table class="table01 uk-text-center u-mt20">
			<thead><tr><th class="th--blue" colspan="2">料金計算</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">1000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　単価</td>
				<td class="uk-text-right">20</td>
			</tr>
			<tr>
				<td class="uk-text-left">システム使用料</td>
				<td class="uk-text-right">20000</td>
			</tr>
			<tr>
				<td class="uk-text-center">合計</td>
				<td class="uk-text-right">40000</td>
			</tr>
		</tbody></table>

		<h4 class="midashi05">例２：　発送件数2000通　QRコード3種類の場合</h4>
		<table class="table01 uk-text-center">
			<thead><tr><th class="th--blue" colspan="2">QRコード数　合計</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">発送件数</td>
				<td class="uk-text-right">2000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　種類</td>
				<td class="uk-text-right">3</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">6000</td>
			</tr>
		</tbody></table>
		<table class="table01 uk-text-center u-mt20">
			<thead><tr><th class="th--blue" colspan="2">料金計算</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">6000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　単価</td>
				<td class="uk-text-right">15</td>
			</tr>
			<tr>
				<td class="uk-text-left">システム使用料</td>
				<td class="uk-text-right">20000</td>
			</tr>
			<tr>
				<td class="uk-text-center">合計</td>
				<td class="uk-text-right">110000</td>
			</tr>
		</tbody></table>
		<p class="u-mt30">注意：申込フォームに飛ぶQRコードは直接見える場所には印刷できません。<br>
　　　例　・A4ハガキ<br>　　　　　・透明封筒から見える紙<br>　　　　　・紙封筒自体への印刷</p>
*/ ?>

	</section>


	<section id="m03">
		<h2 class="midashi03-2">自動料金見積</h2>

		<div class="input-block uk-text-center">
		<table class="table01 noborder uk-text-center">
			<tbody>
			<tr>
				<td class="uk-text-right">発送件数</td>
				<td class="uk-text-left"><div class="number-container" style="width:9rem">
				<input type="text" id="num1" style="width:10rem" class="number-input" placeholder="例）　　1000" inputmode="numeric" required>
				<span class="number-overlap"></span>
				</div>
				</td>
			</tr>
			<tr>
				<td class="uk-text-right">1件あたりの<br class="uk-visible-small">QRコード数</td>
				<td class="uk-text-left"><select id="num2">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			種類</td>
			</tr>
		</tbody></table>

			<a href="#m03" class="mute"><button id="submit" class="btn-submit" disabled>↓　計　算　↓</button></a>

			<p>合計金額　<span id="ans">？</span> 円　（税抜）</p>
		</div>

		<hr>

		<p>QRコード１つの価格が基本になります。<br>
			それにシステム使用料２万円が加算されます。<br>
			DMに2種類・3種類のQRコードを使用することもあります。</p>

<?php /*
		<h4 class="midashi05">例1）発送件数 1000通　QRコード1種類の場合</h4>

		<table class="table01 uk-text-center u-mb30">
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
		</tbody></table>

		<table class="table01 uk-text-center u-mb40">
			<thead><tr><th class="th--blue" colspan="2">QRコード数　合計</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">1000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　単価</td>
				<td class="uk-text-right">20</td>
			</tr>
			<tr>
				<td class="uk-text-left">システム使用料</td>
				<td class="uk-text-right">20000</td>
			</tr>
			<tr>
				<td class="uk-text-center">合計</td>
				<td class="uk-text-right">40000</td>
			</tr>
		</tbody></table>

		<h4 class="midashi05">例2）発送件数 2000通　QRコード3種類の場合</h4>

		<table class="table01 uk-text-center u-mb30">
			<thead><tr><th class="th--blue" colspan="2">QRコード数　合計</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">発送件数</td>
				<td class="uk-text-right">2000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　種類</td>
				<td class="uk-text-right">3</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">6000</td>
			</tr>
		</tbody></table>

		<table class="table01 uk-text-center u-mb30">
			<thead><tr><th class="th--blue" colspan="2">QRコード数　合計</th></tr></thead>
			<tbody>
			<tr>
				<td class="uk-text-left">QRコード数 合計</td>
				<td class="uk-text-right">6000</td>
			</tr>
			<tr>
				<td class="uk-text-left">QRコード　単価</td>
				<td class="uk-text-right">15</td>
			</tr>
			<tr>
				<td class="uk-text-left">システム使用料</td>
				<td class="uk-text-right">20000</td>
			</tr>
			<tr>
				<td class="uk-text-center">合計</td>
				<td class="uk-text-right">110000</td>
			</tr>
		</tbody></table>
*/ ?>


		<div class="box box--red">
		<p>注意：申込フォームに飛ぶQRコードは直接見える場所には印刷できません。</p>
		<p class="u-mb0">例</p>
		<ul class="list-circle u-mt0">
			<li>A4ハガキ</li>
			<li>透明封筒から見える紙</li>
			<li>紙封筒自体への印刷</li>
		</ul>
		</div>

	</section>


	<section id="m03">
		<h2 class="midashi03-2">当社が安くできる理由</h2>

		<p>メディアボックスが安くできる5つの理由があります。</p>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>営業社員がいません（専任担当者制）</li>
			<li>全てのお客様に前金制でお願いしています</li>
			<li>リピート率が高いため効率が良くなります</li>
			<li>自社ビルは持ちません</li>
			<li>高額設備を持ちません</li>
		</ul>
		</div>
		<p class="u-mt20">そのため価格を抑えられ、無理な受注の必要がありません。<br>営業電話は致しませんのでご安心ください。</p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">取引実績</h2>
		<h3 class="ttl03">これまでにプライム上場（旧東証一部上場）102社を含む8521社との取引実績があります。</h3>
		<div class="u-mt30 u-mb40"><img src="/common/img/index/img_logo.png" alt="会社様ロゴ" decoding="async" loading="lazy"></div>
	</section>


	<section id="m05">
		<h2 class="midashi03-2">QRコードを使って売上237％アップ</h2>

		<p>送付DMから自社HPに来られたお客様はDM内容に興味を抱いた重要なお客様になります。<br>
			特に<strong class="underline-yellow">申込フォームから離脱</strong>したお客様は重要な見込客になります。</p>

		<p class="uk-text-center"><img src="/images/2024/QRDM_price_sub4.png" width="780" height="450" alt="フォーム離脱したお客様が分かります" decoding="async" loading="lazy"></p>

		<p>formstory（https://formstory.io/learn/form-abandonment-statistics/）によると<br>「81%の人がフォームの記入を開始した後に放棄しています。」とあります。</p>


		<p>購入率の高いフォーム離脱したお客様に</p>

		<div class="box box--yellow">
		<ul class="list-circle">
			<li>お得情報DM</li>
			<li>手書きDM</li>
			<li>お得情報メール</li>
			<li>電話</li>
			<li>SNS</li>
		</ul>
		</div>

		<p>等を利用して<strong class="underline-yellow">お得情報やサービスを連絡することで成約率が2倍以上になる事例もあります。</strong><br>お試しになる事をお勧めします。</p>

	</section>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm">QRコード集客</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_use">DM×WEBを使って売上UP</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_m_d">QRDMのメリットとデメリット</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/form/soejyou">QRDM添え状 申込フォーム</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/form/QR_ryoukin/" style="margin:auto">QRDM 作成申込フォーム</a></div>
<?php //			<div class="link-button u-pa10"><a ref="https://test.dm110.jp/QRDM_price" style="margin:auto">QRDM 料金表</a></div> ?>
		</div>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/aside.php'); ?>


</div>


	<div class="contact-block u-mt30">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/index_contact.html'); ?>
	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/footer.php'); ?>



<script><?php /* 料金計算 */ ?>
$(function(){
  $("#num1").on("blur change input", function(e){
    let value = $(e.currentTarget).val();
    value = value
      .replace(/[０-９]/g, function (s) {
        return String.fromCharCode(s.charCodeAt(0) - 65248);
      })
      .replace(/[^0-9]/g, "");
    $(e.currentTarget).val(value);
    if(value>0){
      $(e.currentTarget).next().text((+value).toLocaleString());
      $("#submit").prop('disabled', false);
    }else{
      $(e.currentTarget).next().text('');
      $("#submit").prop('disabled', true);
    }
  });
  $("#submit").on("click",function(){
    let num1 = $("#num1").val();
    let num2 = $("#num2").val();
    if(num1>0){
      let num3 = num1*num2;
      if(num3>99999){var ans = num3 * 9;
      }else if(num3>49999){var ans = num3 * 10;
      }else if(num3>9999){var ans = num3 * 12;
      }else if(num3>4999){var ans = num3 * 15;
      }else if(num3>999){var ans = num3 * 20;
      }else{var ans = num3 * 25;}
      $("#ans").text((ans+20000).toLocaleString()).val();
      $("#ans").removeClass("btn-flash");
      setTimeout(function(){$("#ans").addClass("btn-flash");},30);
    }else{$("#ans").text('');}
  });
});
</script>

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
