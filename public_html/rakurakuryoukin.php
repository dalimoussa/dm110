<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '封筒に封入発送コース（基本）料金表';
	$str_title   = '封筒に封入発送コース（基本）';
	$str_descrip = '小ロット・少部数　100通よりＤＭを封入封封緘し宛名ラベル作成ご発送するコースです。印刷など同時に行えます。';
	$str_keyword = 'DM発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行,DMトラッカー';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/rakurakuryoukin';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>
<style type="text/css">
<!--
#ryo1_table td{font-size:14px}
#ryo1_table td .small{font-size:12px}

.th--blue{color:#fff;background:#0058a3}
.bg--gold{background-color:#fd7}
.bg--white{background-color:#fff}
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
		<div class="panel-image"><img src="/images/2025/DM_kakumei_main2.png" width="900" height="216" alt="郵送ＤＭの常識が変わる 見込み客リストが作れる HP離脱客に自動でステップメール 購入意欲段階が分かる 入力無しフォームで申込が可能に" fetchpriority="high"></div>
*/ ?>
		<div class="panel-body">
			<h1><?= $str_title ?></h1>
			<p class="u-mt20">封筒に封入物を封入、宛名ラベルを作成・貼付けし、発送します。<br>
				お客様から封入物と宛先データを送って頂ければすべてこちらで発送準備を行い発送するコースです。<br>
				小ロット・少部数　100通以上発送される方に特化した、DM発送料金削減システムです。</p>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 基本コース（100通から20万通）　料金表</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 当社が安くできる理由</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> 封筒に封入コースに含まれるもの</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m03-1">お客様が行って頂くことは以下の5点です</a></li>
						<li class="toc__item"><a href="#m03-2">ゆうメール便 詳細</a></li>
					</ul>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> お問い合わせから到着までの流れ</a>
					<ul class="toc__list toc__list-3">
						<li class="toc__item"><a href="#m04-1">納期</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">基本コース（100通から20万通）　料金表</h2>
		<p><strong class="txt-red underline-yellow">※条件によりほとんどの場合、以下記載の発送代金が下がります。</strong></p>

		<table id="ryo1_table" class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="bg--white" colspan="5"><span style="color:#0e54e1">2025/4/1～ 新料金</span>　<br class="uk-visible-small">
						<img src="/images/common/ryokinhyo_gazo.png" width="280" height="58" alt="専任担当者付・進捗状況メール・信書チェック・発送証明"></th>
				</tr>
				<tr>
					<th class="th--blue" colspan="5">料金表 （送料＋作業料 ※1点封入の場合）</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>通数</th>
					<th>100gまで</th>
					<th>200gまで</th>
					<th>500gまで</th>
					<th>1kgまで</th>
				</tr>
				<tr>
					<th>100通以上</th>
					<td>157.0円以下(税抜)<br><span class="small">172.7円以下(税込)</span></td>
					<td>159.5円以下(税抜)<br><span class="small">175.5円以下(税込)</span></td>
					<td>175.0円以下(税抜)<br><span class="small">192.5円以下(税込)</span></td>
					<td>202.5円以下(税抜)<br><span class="small">222.8円以下(税込)</span></td>
				</tr>
				<tr>
					<th>200通以上</th>
					<td>131.0円以下(税抜)<br><span class="small">144.1円以下(税込)</span></td>
					<td>133.5円以下(税抜)<br><span class="small">146.9円以下(税込)</span></td>
					<td>149.0円以下(税抜)<br><span class="small">163.9円以下(税込)</span></td>
					<td>176.5円以下(税抜)<br><span class="small">194.2円以下(税込)</span></td>
				</tr>
				<tr>
					<th>300通以上</th>
					<td>116.0円以下(税抜)<br><span class="small">127.6円以下(税込)</span></td>
					<td>118.5円以下(税抜)<br><span class="small">130.4円以下(税込)</span></td>
					<td>134.0円以下(税抜)<br><span class="small">147.4円以下(税込)</span></td>
					<td>161.5円以下(税抜)<br><span class="small">177.7円以下(税込)</span></td>
				</tr>
				<tr>
					<th>500通以上</th>
					<td>105.0円以下(税抜)<br><span class="small">115.5円以下(税込)</span></td>
					<td>107.5円以下(税抜)<br><span class="small">118.3円以下(税込)</span></td>
					<td>123.0円以下(税抜)<br><span class="small">135.3円以下(税込)</span></td>
					<td>150.5円以下(税抜)<br><span class="small">165.6円以下(税込)</span></td>
				</tr>
				<tr>
					<th>1000通以上</th>
					<td>95.0円以下(税抜)<br><span class="small">104.5円以下(税込)</span></td>
					<td>97.5円以下(税抜)<br><span class="small">107.3円以下(税込)</span></td>
					<td>113.0円以下(税抜)<br><span class="small">124.3円以下(税込)</span></td>
					<td>140.5円以下(税抜)<br><span class="small">154.6円以下(税込)</span></td>
				</tr>
				<tr>
					<th>2000通以上</th>
					<td>93.0円以下(税抜)<br><span class="small">102.3円以下(税込)</span></td>
					<td>95.5円以下(税抜)<br><span class="small">105.1円以下(税込)</span></td>
					<td>111.0円以下(税抜)<br><span class="small">122.1円以下(税込)</span></td>
					<td>138.5円以下(税抜)<br><span class="small">152.4円以下(税込)</span></td>
				</tr>
				<tr>
					<th>3000通以上</th>
					<td>91.0円以下(税抜)<br><span class="small">100.1円以下(税込)</span></td>
					<td>93.5円以下(税抜)<br><span class="small">102.9円以下(税込)</span></td>
					<td>109.0円以下(税抜)<br><span class="small">119.9円以下(税込)</span></td>
					<td>136.5円以下(税抜)<br><span class="small">150.2円以下(税込)</span></td>
				</tr>
				<tr>
					<th>4000通以上</th>
					<td>86.0円以下(税抜)<br><span class="small">94.6円以下(税込)</span></td>
					<td>88.5円以下(税抜)<br><span class="small">97.4円以下(税込)</span></td>
					<td>104.0円以下(税抜)<br><span class="small">114.4円以下(税込)</span></td>
					<td>131.5円以下(税抜)<br><span class="small">144.7円以下(税込)</span></td>
				</tr>
				<tr>
					<th>5000通以上</th>
					<td>82.5円以下(税抜)<br><span class="small">90.8円以下(税込)</span></td>
					<td>85.0円以下(税抜)<br><span class="small">93.5円以下(税込)</span></td>
					<td>100.5円以下(税抜)<br><span class="small">110.6円以下(税込)</span></td>
					<td>128.0円以下(税抜)<br><span class="small">140.8円以下(税込)</span></td>
				</tr>
				<tr>
					<th>10000通以上</th>
					<td>80.0円以下(税抜)<br><span class="small">88.0円以下(税込)</span></td>
					<td>82.5円以下(税抜)<br><span class="small">90.8円以下(税込)</span></td>
					<td>98.0円以下(税抜)<br><span class="small">107.8円以下(税込)</span></td>
					<td>125.5円以下(税抜)<br><span class="small">138.1円以下(税込)</span></td>
				</tr>
				<tr>
					<th>20000通以上</th>
					<td>79.0円以下(税抜)<br><span class="small">86.9円以下(税込)</span></td>
					<td>81.5円以下(税抜)<br><span class="small">89.7円以下(税込)</span></td>
					<td>97.0円以下(税抜)<br><span class="small">106.7円以下(税込)</span></td>
					<td>124.5円以下(税抜)<br><span class="small">137.0円以下(税込)</span></td>
				</tr>
				<tr>
					<th>30000通以上</th>
					<td>78.0円以下(税抜)<br><span class="small">85.8円以下(税込)</span></td>
					<td>80.5円以下(税抜)<br><span class="small">88.6円以下(税込)</span></td>
					<td>96.0円以下(税抜)<br><span class="small">105.6円以下(税込)</span></td>
					<td>123.5円以下(税抜)<br><span class="small">135.9円以下(税込)</span></td>
				</tr>
				<tr>
					<th>50000通以上</th>
					<td>74.5円以下(税抜)<br><span class="small">82.0円以下(税込)</span></td>
					<td>77.0円以下(税抜)<br><span class="small">84.7円以下(税込)</span></td>
					<td>92.5円以下(税抜)<br><span class="small">101.8円以下(税込)</span></td>
					<td>120.0円以下(税抜)<br><span class="small">132.0円以下(税込)</span></td>
				</tr>
				<tr>
					<th>10万通以上</th>
					<td>73.6円以下(税抜)<br><span class="small">81.0円以下(税込)</span></td>
					<td>76.1円以下(税抜)<br><span class="small">83.7円以下(税込)</span></td>
					<td>91.6円以下(税抜)<br><span class="small">100.8円以下(税込)</span></td>
					<td>119.1円以下(税抜)<br><span class="small">131.0円以下(税込)</span></td>
				</tr>
			</tbody>
		</table>

<?php /*
							<h3 class="ttl02" id="ryo2" name="ryo2">格安大量発送（３００００通～）　料金表</h3>
							<p>メディアボックスでは、DMで成果を出すためのテストマーケティングや、3万通までの小ロットの発送を得意としています。<br>
							しかし、当社お客様で、小ロットからテストしたところ顧客が増えて行き、発送数が大きく伸びる会社が増えてきました。</p>
							<p>
							そのため、当社でも3万分以上の発送できる体制を整えました。<br>
							手封入なので<span class="red">発送までの期間は長くなりますが、<br>
							機械設備のようなコストがかかっていないため、格安にて発送することができます。</span></p>
							<p>
							発送納期は封入点数や難易度により発送日数が変わります。<br>
							お問い合わせいただければ格安料金をお見積りできますのでお問い合わせください。</p>


							<table class="table01">
								<thead>
									<tr>
										<th colspan="5">格安大量発送　<img src="images/common/ryokinhyo_gazo.jpg" alt="料金表画像"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="bg_yellow">通数</th>
										<th class="bg_yellow">200g以下</th>
										<th class="bg_yellow">500g以下</th>
										<th class="bg_yellow">1kg以下</th>
										<th class="bg_yellow">納期</th>
									</tr>
									<tr>
										<th class="bg_yellow">30,000通</th>
										<td>70.5円以下(税抜)<br><span class="small">77.55円以下(税込)</span></td>
										<td>78.5円以下(税抜)<br><span class="small">86.35円以下(税込)</span></td>
										<td>82.5円以下(税抜)<br><span class="small">90.75円以下(税込)</span></td>
										<td>8営業日</td>
									</tr>
									<tr>
										<th class="bg_yellow">50,000通</th>
										<td>70円以下(税抜)<br><span class="small">77円以下(税込)</span></td>
										<td>77.5円以下(税抜)<br><span class="small">85.25円以下(税込)</span></td>
										<td>81.5円以下(税抜)<br><span class="small">89.65円以下(税込)</span></td>
										<td>10営業日</td>
									</tr>
									<tr>
										<th class="bg_yellow">100,000通</th>
										<td>69円以下(税抜)<br><span class="small">75.9円以下(税込)</span></td>
										<td>77円以下(税抜)<br><span class="small">84.7円以下(税込)</span></td>
										<td>81円以下(税抜)<br><span class="small">89.1円以下(税込)</span></td>
										<td>12営業日</td>
									</tr>
								</tbody>
							</table>
							<p>※条件や時期により大幅に料金が下がる場合があります。</p>
							<p>封入1点追加：200g以下＠2円　201g以上は1点追加ごとプラス＠2.2円<br>
								運送会社はヤマト運輸のクロネコDM便使用</p>
								<br>
*/ ?>

		<p class="u-mt20"><strong>【発送数、発送地域、他の条件がそろうとさらに安くなります】　<span class="txt-red underline-yellow">最安は＠67.5円税別</span>になります。</strong></p>
		<div class="box box--yellow">
		<p>※上記料金に含むもの</p>
		<ol class="list-decimal">
			<li><strong class="txt-red">発送証明を送ります</strong></li>
			<li><strong class="txt-red">返品物のEXCELデータ化</strong></li>
			<li>宛名データ削除証明（米国国家安全保障局（NSA）推奨基準）</li>
			<li>初回、ご依頼の発送物見本を送ります</li>
			<li>専任担当者制</li>
		</ol>
		</div>

		<div class="link-box-2cu">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/form/price/">お見積り</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/form/price_kanni/">お見積り（簡易版）</a></div>
		</div>

		<p class="u-mt50"><strong class="txt-red underline-yellow">※印刷前に信書チェックを依頼ください。（当社での印刷をお勧めします）</strong><br>
			<strong>（日本郵便持込時に信書と判断されると発送できなくなるため事前チェックをお勧めします）</strong><br>
			※<strong>基本料金は頂きません</strong><br>
			※日本郵便のゆうメール発送の料金<br>
			※1点封入の料金表（封筒料金は含まず）<br>
			※封入点数が1点増す毎に　200g以下＠2円増（税別）になります<br>
			※宛名データを部材到着日の前営業日、午前までに頂けていない場合は、<br>
			　宛名データ確認後、翌営業日からの作業開始となります。<br>
			※5000件以上で、折り、ホッチキス止め等のオプション作業がつく場合は納期が増えます。<br>
			※封入点数が5点以上、5パターン以上になる場合は納期が増えます（日数は発送件数による）</p>
		<hr>
		<p>下記のいずれかをお選びください。</p>
		<ol class="list-decimal u-ml30">
			<li>当社の<strong>お奨めA4透明封筒＠4.4円</strong>を使う（通常はこちらを使用ください）</li>
			<li>当社の<strong>破れにくいA4透明封筒＠5.4円</strong>を使う（厚みのある封入物を入れる場合にご使用ください）</li>
			<li>当社の角２紙封筒を使う</li>
			<li>御社の封筒を使う</li>
		</ol>

		<fieldset>
			<legend>＜お得情報＞</legend>
			<p class="uk-text-center">使用する封筒のサイズ、材質により総発送料金が変わります。</p>
			<div class="link-button u-pa10"><a href="/Film_Fuutou.htm">DM発送費が安くなる封筒</a></div>
		</fieldset>
	</section>


	<section id="m02">
		<h2 class="midashi03-2">当社が安くできる理由</h2>
		<p>メディアボックスが安くできる5つの理由があります。</p>
		<div class="box box--yellow">
		<ol class="list-decimal">
			<li>営業社員がいません（専任担当者制）</li>
			<li>全てのお客様に前金制でお願いしています</li>
			<li>リピート率が高いため効率が良くなります</li>
			<li>自社ビルは持ちません</li>
			<li>高額設備を持ちません</li>
		</ol>
		</div>
		<p>そのため価格を抑えられ、無理な受注の必要がありません。<br>
			<span class="txt-red">営業電話は致しませんのでご安心ください。</span><br>
			協力させていただきます。</p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">封筒に封入コースに含まれるもの</h2>
		<div class="box box--yellow">
		<ul class="list-circle">
			<li>封筒への封入作業</li>
			<li>封筒閉じ</li>
			<li>宛名ラベル代金</li>
			<li>宛名ラベル作成（当社作業状況により封筒に宛名を直接印刷する場合あり）</li>
			<li>宛名ラベル貼</li>
			<li>送料（ゆうメール便（日本郵便））</li>
		</ul>
		</div>
		<p><span class="txt-red">※封筒代金は含まれません。封筒選びにより発送料金や反応率が変わります。</span><br>
		　下記をご覧ください。</p>
		<div class="link-button u-pa10"><a href="/Film_Fuutou.htm">DM発送費が安くなる封筒</a></div>

		<h3 id="m03-1" class="midashi04">お客様が行って頂くことは以下の5点です</h3>
		<ol class="list-decimal u-ml30">
			<li>封入物（データか画像）と封筒画像を当社に送って頂き<strong class="txt-red underline-yellow">信書チェック</strong></li>
			<li>封入する印刷物の用意（弊社にて印刷する場合は印刷データ）</li>
			<li>宛名データ（当社指定のExcel形式で）</li>
			<li>見本（封入の見本説明）</li>
			<li>料金（発送日の前営業日の午後3時までに当社にて振込みが確認できること）</li>
		</ol>

		<div class="link-button u-pa10 uk-text-right"><a href="https://www.dm110.jp/DM_matome/Shinsyotoha/">信書とは</a></div>

		<h3 id="m03-2" class="midashi04">ゆうメール便 詳細</h3>
		<table class="table01">
			<thead><tr><th class="th--blue" colspan="2">ゆうメール便</th></tr></thead>
			<tbody>
				<tr>
					<th>配達担当</th>
					<td>日本郵便</td>
				</tr>
				<tr>
					<th>差出表の表記</th>
					<td><strong>必要</strong></td>
				</tr>
				<tr>
					<th>差出表の提出期限</th>
					<td><strong>７営業日前(1万通以上）</strong></td>
				</tr>
				<tr>
					<th>料金体系</th>
					<td><strong>重量別運賃</strong></td>
				</tr>
				<tr>
					<th>最大サイズ</th>
					<td>縦36cm以下×横25cm以下</td>
				</tr>
				<tr>
					<th>最小サイズ</th>
					<td>縦14cm以下×横９㎝以上</td>
				</tr>
				<tr>
					<th>厚み上限</th>
					<td>３cm</td>
				</tr>
				<tr>
					<th>重量</th>
					<td>３kg以内</td>
				</tr>
				<tr>
					<th>日達日数</th>
					<td>３～７日（土日祝祭日除く）</td>
				</tr>
				<tr>
					<th>配達の遅延</th>
					<td>有り（保証なし）</td>
				</tr>
				<tr>
					<th>配達精度</th>
					<td>◎</td>
				</tr>
				<tr>
					<th>配達状況の追跡</th>
					<td><strong>無し</strong></td>
				</tr>
				<tr>
					<th>転送サービス</th>
					<td>◎</td>
				</tr>
				<tr>
					<th>還付先指定</th>
					<td>〇</td>
				</tr>
				<tr>
					<th>信書の送付</th>
					<td>×</td>
				</tr>
				<tr>
					<th>信書チェック</th>
					<td><strong>非常に厳しい</strong></td>
				</tr>
				<tr>
					<th>信書チェック日数</th>
					<td><strong>通常当日から3日ぐらい</strong></td>
				</tr>
			</tbody>
		</table>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">お問い合わせから到着までの流れ</h2>
		<p class="uk-text-center"><img src="/images/common/nagare2.jpg" alt="お問い合わせから到着までの流れ"></p>

		<h3 class="midashi05">弊社の作業内容</h3>
		<ol class="list-decimal u-ml30">
			<li>宛名ラベルへの印字</li>
			<li>宛名ラベルを封筒に貼り付け</li>
			<li>封入物を挿入･封緘</li>
			<li>全国配送</li>
			<li>住所不明など返送品のお知らせ及びお届け（案件により有料部分有り）</li>
			<li>お預かりデータの削除</li>
		</ol>

		<h3 id="m04-1" class="midashi04">納期</h3>
		<p>お客様より封入物をすべてメディアボックスにお送り頂いた場合の発送納期です。</p>
		<p>※封筒をお客様より支給の場合は封筒も同時にお送りください。<br>
			※メディアボックスにて印刷を行う場合には印刷日数がプラスされます。</p>
		<p>封入物はメディアボックスに午前中に到着指定でお出しください。<br>
			午前中に封入物が到着しない場合は翌営業日より作業になり一日発送日がプラスされます。<br>
			メディアボックスの作業日は月曜日から金曜日(祝日除く)になります。</p>
		<p>発送期間は下記の図を参照してください。</p>

		<h4 class="midashi05">299通以内（5点封入以内）</h4>
		<p>299通以内（5点封入以内）：12時までの封入物到着で2営業日発送<br>
			※5点以上の場合は納期がプラスされます。<br>
			※5点以上の封入の場合は別途お見積りいたしますのでお問い合わせください。</p>
		<div class="uk-text-center">
			<img src="/images/common/shipping_flow05.png" alt="2000通以内（5点封入以内）のDM発送納期">
		</div>
		<br>

		<h4 class="midashi05 u-mt50">2000通以内（5点封入以内）</h4>
		<p>2000通以内（5点封入以内）：12時までの封入物到着で3営業日発送<br>
			※5点以上の場合は納期がプラスされます。<br>
			※5点以上の封入の場合は別途お見積りいたしますのでお問い合わせください。</p>
		<div class="uk-text-center">
			<img src="/images/common/shipping_flow03.png" alt="2000通以内（5点封入以内）のDM発送納期">
		</div>
		<br>

		<h4 class="midashi05 u-mt50">2001通以上（5点封入以内）</h4>
		<p>2001通以上（5点封入以内）：12時までの封入物到着で4営業日発送<br>
			※5点以上の場合は納期がプラスされます。<br>
			※5点以上の封入の場合は別途お見積りいたしますのでお問い合わせください。</p>
		<div class="uk-text-center">
			<img src="/images/common/shipping_flow02.png" alt="2001通以上（5点封入以内）のDM発送納期">
		</div>

		<div class="box box--yellow u-mt50">
			<p>※注意<br>
			■宛名データは部材到着日の前営業日の午前中までに到着が必要です。<br>
			■お客様より封筒支給の場合は封筒も同時にお送りください。<br>
			■午前中に封入物が到着しない場合は翌営業日より作業になり一日発送日がプラスされます。<br>
			■メディアボックスの発送日とは運送業者への引き渡し日です。<br>
			お客さんへの到着日ではありません。<br>
			各運送会社の配達は天候、交通、諸事情により遅延が発生する可能性があります。<br>
			遅延については一切の保証ができませんのでご了承ください。</p>
		</div>

		<div class="box box--red">
			<p>当社にて印刷も同時に行う場合<br>
			■カラー印刷　通常５営業日プラス　最短3営業日まで短縮<br>
			■白黒印刷　片面が２営業日プラス　両面が3営業日プラス　最短　2万枚以上はプラス1営業日必要<br>
			■封筒印刷　片面が２営業日プラス　最短　2万枚以上はプラス2営業日必要<br>
			■カラー印刷、白黒印刷、封筒印刷が重なる場合の納期は一番長い印刷納期になります</p>
		</div>

		<div class="link-box-2cu">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/form/price/">お見積り</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/form/price_kanni/">お見積り（簡易版）</a></div>
		</div>


<style type="text/css">
<!--
.modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:9990;overflow:hidden;background:rgba(0,0,0,.8)!important;overscroll-behavior:contain}
.modal-wrap{display:block;width:100%;height:100%;z-index:9999;outline:none!important;-webkit-backface-visibility:hidden}
.modal-inner{display:inline-block;position:relative;position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;width:100%;height:100%;max-width:90vw;max-height:80vh;line-height:0;aspect-ratio:16 / 9;cursor:auto;z-index:9050}
.modal-contents{padding:0;aspect-ratio:16 / 9;width:auto;height:auto;max-width:100%;max-height:100%;margin:auto}
.modal-vimeo,
.modal-contents iframe{position:relative;display:block;width:100%;height:100%;border:none}
.modal-close{display:block;position:fixed;top:1rem;right:1rem;z-index:100;width:3rem;height:3rem;padding:0;text-indent:100%;white-space:nowrap;overflow:hidden!important;color:transparent;font-size:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none;outline:none;z-index:9045;box-shadow:none;touch-action:manipulation}
.modal-close::before,
.modal-close::after{position:absolute;content:"";inset:0;margin:auto;width:100%;height:.2rem;background-color:#fff}
.modal-close::before{transform:rotate(45deg)}
.modal-close::after{transform:rotate(135deg)}
-->
</style>
		<script src="https://player.vimeo.com/api/player.js"></script>
		<div class="box uk-text-center u-mt50">
			<a href="javascript:void(0);" class="js-modal">
				<img src="/images/2026/ban_vimeo_dmt_3min_600x336.webp" class="uk-display-block" alt="郵送DMを送って終わりにしていませんか？ 3分動画を今すぐ見る">
				<p>＼ 実例公開中！ ／<br />なぜ<span class="txt-red">リード獲得率32%</span>が実現できるのか？3分動画で解説</p>
			</a>
			<div class="modal"><div class="modal-wrap"><div class="modal-inner"><div class="modal-contents">
				<div class="modal-vimeo"><iframe class="js-iframe-target" src="https://player.vimeo.com/video/1171009474"  frameborder="0" allow="autoplay;fullscreen; picture-in-picture" allowfullscreen></iframe></div>
				<div class="modal-button"><button class="modal-close" type="button">閉じる</button></div>
			</div>
		</div></div></div></div>



		<p class="u-mt50">カタログや本を封入し合計で200g以上になる場合には下記をクリックください。<br>
			<a href="/catalogs.html">≫カタログ発送代行コースはこちら</a></p>
		<p>開封率100%のA4ハガキ印刷発送については下記をクリックください。<br>
			<a href="/Ryoukin_A4.htm">≫A4ハガキ印刷発送コースはこちら</a></p>
	</section>


</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/aside.php'); ?>


</div>


	<div class="contact-block u-mt30">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/index_contact.html'); ?>
	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/footer.php'); ?>


<script>
window.onload = function(){
var player = new Vimeo.Player($('.js-iframe-target'));
$(".js-modal").click(function(){$(".modal").fadeIn().addClass('modal-ready');$('body').addClass('no-scroll');player.play();});
$(".modal-wrap").click(function(){$(".modal").fadeOut().removeClass('modal-ready');$('body').removeClass('no-scroll');player.pause();});
};
</script>


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
