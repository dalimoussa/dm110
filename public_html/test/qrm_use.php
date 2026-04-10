<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '3-3-3法則で成約率2倍　QRコード作成・DM印刷発送・儲かる使い方';
	$str_title   = '3-3-3法則で成約率2倍';
//	$str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://test.dm110.jp/qrm_use';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2025/qrm_use_main.png" width="900" height="284" alt="注文フォームで注文しなかったお客様に自動ステップメールでアプローチ　3-3-3法則で成約率2倍" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
			<div class="uk-text-left u-pa20">
				<p><u><span class="u-font-bold txt-red">このページは特別なお客様と当社ニュースレターを受け取られている方のみが見られるページです。</span></u></p>
				<p>注文フォームで成約にならなかったお客様に自動的に6回メールを送ることで平均2倍以上の成約になります。（内容により差があります）</p>
				<h2 class="midashi03">３-３-３の法則</h2>
				<p>3回DMを続けて出すと、反応率が約2倍になる。<br>
					3ヶ月以内に3回送るのが効果的。<br>
					3回目のDMで最も高い反応が得られる傾向がある。<br>
					下記の要因で違う結果も出ます。<br>
					　　　・発送時期・発送目的・業種・業態<br>
					当社でも２倍以上の結果が出ています。</p>
			</div>
		</div>
	</div>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 顧客別QRコード作成</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> DMに興味を持てばQRコードを読みHPへ</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> HPへのアクセスをメール連絡</a>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> フォーム離脱者に自動ステップメール</a>
				</li>
				<li class="toc__item"><a href="#m05"><span class="toc__number">5.</span> 無料モニター募集</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">1. 顧客別QRコード作成</h2>
		<p>お客様から預かった宛名データ1件づつ個別のQRコードを作成します。<br>
			これによりDMに印刷されるQRコードは全部宛名データを含みます。<br>
			顧客別QRコードはメディアボックスで作成・印刷します。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub11.png" width="780" height="450" alt="宛名データから顧客別のQRコードを作成" decoding="async" loading="lazy"></p>
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
		<h2 class="midashi03-2">2. DMに興味を持てばQRコードを読みHPへ</h2>
		<p>ＱＲコードは1つだけでなくＤＭ内容に合わせて、お客様が興味を持つと思われるページ4つぐらいを用意しておくと反応率が上がります。</p>
		<p>ＤＭ内容にもよりますが効果的なページは</p>
		<ul class="list-circle u-ml30">
			<li>フォーム</li>
			<li>料金表</li>
			<li>会社概要</li>
			<li>取引実績・お客様の声</li>
		</ul>
		<p>＊上記は商品についてはＤＭで納得して、それから先を知りたいと思った場合です。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub12.png" width="780" height="450" alt="DMに興味を持てばQRコードを読みHPへ" decoding="async" loading="lazy"></p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">3. HPへのアクセスをメール連絡</h2>
		<p>QRコードから目的のHPにお客様が移動したときにすぐ、ＤＭ配送元のお客様のメールアドレスに「誰が」「いつ」「どのデバイスで」アクセスしたかを送ります。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub13.png" width="780" height="450" alt="HPへのアクセス情報は、すぐにお客様（DM配送元様）にメールで転送される" decoding="async" loading="lazy"></p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">4. フォーム離脱者に自動ステップメール</h2>
		<p>SEOやネット広告から申込フォームへ来た人の離脱率が平均69.9％<br>
			（参考：『Baymard Institute｜48 Cart Abandonment Rate Statistics 2023』）<br>
			そして離脱した人が誰か分からないため追客ができません。</p>

		<p>このシステムでは離脱した人に6回のステップメールを送ります。</p>
		<p>3回DMを続けて出すと、反応率が約2倍になる「3-3-3の法則」<br>
			当社テストでも2倍以上の成約率が得られています。</p>
		<p class="uk-text-center"><img src="/images/2025/qrm_use_sub21.png" width="780" height="374" alt="フォームから離脱客が誰か分かる → 追跡メールを自動配信" decoding="async" loading="lazy"></p>
		<p>上記内容で問題になるのが後追いメールの内容を考える事です。<br>
			これをメディアボックスの豊田がZOOMで一緒に考えます。</p>
	</section>


	<section id="m05">
		<h2 class="midashi03-2">無料モニター募集</h2>
		<p><u>１　入力が必要ないHP申込フォームを作成<br>
			２　申込フォームで申込がなかった人へ自動で6回のメール送信</u></p>

		<div class="uk-flex uk-flex-wrap">
			<img src="/images/2025/qrm_use_sub22.png" class="uk-width-medium-1-2" width="780" height="374" alt="でも…住所や氏名の入力作業がなくなれば、大幅改善！" decoding="async" loading="lazy">
			<img src="/images/2025/qrm_use_sub21.png" class="uk-width-medium-1-2" width="780" height="374" alt="フォームから離脱客が誰か分かる → 追跡メールを自動配信" decoding="async" loading="lazy">
		</div>
		<p class="u-ma20">上記内容で問題になるのが後追いメールの内容を考える事です。<br>
			これをメディアボックスの豊田がZOOMで一緒に考えます。</p>

		<h3 class="midashi04">内容</h3>
		<ol class="list-decimal u-ml30">
			<li>入力無しフォームを当社作成<br>　（氏名・住所などの入力無しで注文できるフォーム）<br>
				<p class="uk-text-center u-mb0">詳しくはこちら↓</p>
				<div class="link-button u-pa10"><a href="https://test.dm110.jp/1clic_form">入力無しフォーム詳細</a></div></li>
			<li>「誰が」を見たかをすぐにメールで知らせます。<br>（1日の集計、30日間の集計もメールでお知らせ）</li>
			<li>フォーム離脱者に自動ステップメール</li>
		</ol>

		<h3 class="midashi04">申込方法</h3>
		<p>当社よりDM発送依頼時に下記の方法のいずれかで申し込みください。<img src="/images/2025/qrm_use_sub23.png" class="uk-float-right" style="width:180px;height:180px" width="440" height="440" alt="https://test.dm110.jp/form/contact/" decoding="async" loading="lazy"></p>
		<ul class="list-circle u-ml30">
			<li>右記QRコードお問合せから<br>　<a href="https://test.dm110.jp/form/contact/">https://test.dm110.jp/form/contact/</a><br>フォームの「ご用件をお書きください」に<br>「QRDM無料モニターの件」と入力して送信ください。</li>
			<li>電話（0561-37-2027）で<br>担当者に「QRDM無料モニターの件」の件で電話しましたと話してください。</li>
		</ul>

		<h3 class="midashi04">条件</h3>
		<ol class="list-decimal u-ml30">
			<li>半年以内のDM発送データ（反応数）がある</li>
			<li>DM発送30日後の反応数を教える事<br>そのデータを公表しても良い事（会社名・商品名は出しません）</li>
			<li>DM発送前・後のアンケート記入（10項目）</li>
			<li>当社で封筒を使ったDM発送を行う会社様限定</li>
			<li>5社までの受付になります。</li>
			<li>フォームでのクレジット決済他料金が発生するものは受付できません。</li>
		</ol>

	</section>

<?php /*
	<section id="m06">
		<h2 class="midashi03-2">4. HPへのアクセス集計も連絡</h2>
		<p>アクセスと同時に送られるメールの他、</p>
		<ul class="list-circle u-ml30">
			<li>1日の集計結果</li>
			<li>30日間の集計結果</li>
		</ul>
		<p>がＤＭ発送元のお客様に送られます。</p>
		<p><strong class="txt-red">DMを見てHPに訪れたお客様ですので購入意欲が高いお客様です。</strong></p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub14.png" width="780" height="450" alt="アクセスと同時・1日集計・30日集計をお客様（DM配送元様）にメール転送" decoding="async" loading="lazy"></p>
	</section>


	<section id="m07">
		<h2 class="midashi03-2">5. 見込客を特定できます</h2>
		<p>QRコードの飛び先HPをお客様が見ます。<br>
			<span class="txt-red">もしフォームを見て離脱したのであれば買う一歩手前</span>です。<br>
			後、何か追加のお得な理由があれば買う可能性が高いお客様です。<br>
			このお客様に<strong class="txt-red">特別な特典やサービスを紹介することで離脱したお客様を獲得することができる可能性があります。</strong></p>
		<p>その他にも、料金表や会社概要などを見たお客様にも興味を持ってもらうように連絡をし続けることは新規顧客を集めるよりもコストが下がります。<br>
			<span class="txt-red">SEOやネット広告から来たお客様は離脱されると誰が離脱したのかはわかりません。</span></p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub15.png" width="780" height="450" alt="見込み客を特定することで成約率の大幅アップが可能です！" decoding="async" loading="lazy"></p>
	</section>


	<section id="m08">
		<h2 class="midashi03-2">6. 顧客別ＱＲＤＭでの実例</h2>
		<p>当然ですが見込み客に対しての追客ですので成約率は上がります。<br>
			BtoBのお客様の例です。<br>
			もし、ＤＭやニュースレターを発送しているのであれば利用する事をお勧めします。<br>
			<strong class="txt-red">今は先行者利益の取れる時期です。</strong></p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub16.png" width="780" height="450" alt="月間成約率13.7％ → 26.5％ （成約率約２倍）" decoding="async" loading="lazy"></p>
	</section>


	<section id="m09">
		<h2 class="midashi03-2">7. ＱＲＤＭでABテスト</h2>
		<p>ＤＭを顧客属性や購入履歴を考えてのABテストは効果的です。<br>
			特にＨＰを見に来てくれたお客様は見込み客になります。<br>
			現在よりも接触頻度を高めて顧客価値を上げることが効果的です。<br>
			少ない数でも結果が出やすいので</p>
		<ul class="list-circle u-ml30">
			<li>新商品・新サービス</li>
			<li>限定セール</li>
			<li>お得情報</li>
			<li>ニュースレター</li>
			<li>手書きハガキ</li>
		</ul>
			<p>様々な形で接触してABテストしてください。</p>
		<p class="uk-text-center"><img src="/images/2024/qrm_use_sub17.png" width="780" height="450" alt="DMの反応数を上げるためにはABテストを繰り返すことが重要！" decoding="async" loading="lazy"></p>
	</section>
*/ ?>


		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm">QRコード集客</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/qrm_m_d" style="margin:auto">QRDMのメリットとデメリット</a></div>
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
