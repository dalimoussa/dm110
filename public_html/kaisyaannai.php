<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = '会社案内 / 会社沿革 / 社長紹介';
	$str_title   = '会社案内';
	$str_descrip = 'メディアボックスの会社概要と会社沿革。代表取締役社長 豊田昭の紹介ほか';
//	$str_keyword = '無料サービス,ＤＭ発送担当者,負担軽減';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/kaisyaannai';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-body">
			<h1><?=$str_title; ?></h1>
		</div>

	</div>

	<section id="m00">
		<h2 class="midashi03-2">書籍・発信</h2>
				<ul class="list-circle u-ml30">
					<li><span class="u-font-bold">著書：</span> 『バカ売れDM集客術』（中経出版／現KADOKAWA、2010年）<br>
					　　　　マーケティング・セールス部門で1位を獲得（<a href="https://www.amazon.co.jp/%E3%83%90%E3%82%AB%E5%A3%B2%E3%82%8C-DM%E9%9B%86%E5%AE%A2%E8%A1%93-%E8%B1%8A%E7%94%B0-%E6%98%AD/dp/4806137871">amazon</a>）</li>
					<li><span class="u-font-bold">著書：</span>『顧客との信頼関係を構築しろ！』(ビーパブリッシング、2025年)</li>
<?php /*
					<li><span class="u-font-bold">講演・社内研修：</span> BtoBマーケ、DM設計、CPI最適化、紙×デジ統合 ほか</li>
*/ ?>
				</ul>
				<p class="u-pa10 uk-text-center"><img src="/images/kaisyaannai/book_bakaure.webp" width="600" height="878" style="width:116px;height:170px" alt="書籍：バカ売れDM集客術" decoding="async" loading="lazy">　<img src="/images/kaisyaannai/book_shinrai.webp" width="630" height="895" style="width:120px;height:170px" alt="書籍：顧客との信頼関係を構築しろ！" decoding="async" loading="lazy"></p>
	</section>

	<section id="m01">
		<h2 class="midashi03-2">企業情報</h2>

		<dl class="u-dl">
			<dt>店舗名</dt>
			<dd>DM発送代行センター</dd>

			<dt>運営会社</dt>
			<dd>株式会社メディアボックス　DM発送代行センター事業部<br>
				帝国データバンク 企業コード：401570189<br>
				東京商工リサーチ 企業コード：401418880<br>
				適格請求書発行事業者番号: T2-1800-0106-7622</dd>

			<dt>代表者</dt>
			<dd>豊田　昭</dd>

			<dt>創業</dt>
			<dd>1986年2月2日</dd>

			<dt>設立</dt>
			<dd>2002年2月1日</dd>

			<dt>資本金</dt>
			<dd>1000万円</dd>

			<dt>取引銀行</dt>
			<dd>三菱ＵＦＪ銀行　三好支店<br>
				瀬戸信用金庫　神の倉支店</dd>

			<dt>住　所</dt>
			<dd>〒470-0164<br>愛知県愛知郡東郷町三ツ池4丁目5-2</dd>

			<dt>TEL</dt>
			<dd>0561-37-2027</dd>

			<dt>FAX</dt>
			<dd>0561-37-1811</dd>

			<dt>e-mail</dt>
			<dd>info@dm110.jp</dd>

			<dt>URL</dt>
			<dd><a href="https://www.dm110.jp">https://www.dm110.jp</a></dd>

			<dt>営業日</dt>
			<dd>月曜日から金曜日(祝祭日を除く)</dd>

			<dt>営業時間</dt>
			<dd>AM9:00　から　PM6:00</dd>

			<dt>顧問弁護士</dt>
			<dd>第一中央法律事務所　近藤早利</dd>

			<dt>保険</dt>
			<dd>個人情報漏洩保険加入済み</dd>

			<dt>事業内容</dt>
			<dd>ＤＭ発送代行<br>
				(宛名印字･宛名ラベル作成･宛名ラベル貼作業･封入作業･投函作業・印刷)<br>
				全国対応</dd>

			<dt>取引実績</dt>
			<dd><a href="https://www.dm110.jp/torihiki_jisseki.htm">取引実績はこちら</a></dd>

			<dt></dt>
			<dd></dd>
		</dl>
	</section>

<style type="text/css">
<!--
.u-dl {
  width: 90%;
  margin:20px auto;
}
.u-dl dt,
.u-dl dd {
  display:inline-block;
  *display:inline;
  zoom:1;
  margin:0;
  padding:5px;
  border-top:1px solid #999;
  vertical-align:top;
}
.u-dl dt {
  width:6em;
}
.u-dl dd {
  width:calc(100% - 6em - 7px);
}
@media (min-width: 768px){
.u-dl {
  width: 100%;
}
.u-dl dt {
  width:8em;
}
.u-dl dd {
  width:calc(100% - 8em - 7px);
}
}
-->
</style>


	<section id="m02">
		<h2 class="midashi03-2">会社沿革</h2>
<style type="text/css">
<!--
.table-timeline{width:95%;border-collapse:collapse;border-spacing:0;margin:0 0 0 5%;padding:0}
.table-timeline th{white-space:nowrap;background-color:#fff;text-align:left;padding:14px 10px;padding-left:0;position:relative;letter-spacing:.05em}
.table-timeline td{padding:14px 5px 14px 20px}
.table-timeline th,
.table-timeline td{vertical-align:top;border:0}
.table-timeline th::after{content:"";display:block;width:1px;height:100%;position:absolute;top:0;left:100%;background-color:#7fa5ca}
.table-timeline__dot{display:block;position:absolute;background-color:#0058a3;border-radius:50%;left:100%;transform:translateX(-55%);margin-left:1px;top:21px;width:8px;height:8px;z-index:20}
@media (min-width:768px){
.table-timeline{width:100%;margin:0}
.table-timeline th{width:7em;padding:14px 20px}
.table-timeline th::after{width:2px}
.table-timeline__dot{width:10px;height:10px}
}
-->
</style>
		<table class="table-timeline">
			<tbody>
				<tr>
					<th>1986年2月<span class="table-timeline__dot"></span></th>
					<td>愛知県海部郡にて運送会社設立</td>
				</tr>
				<tr>
					<th>1986年9月<span class="table-timeline__dot"></span></th>
					<td>西濃運輸の三次下請けより開始</td>
				</tr>
				<tr>
					<th>1987年1月<span class="table-timeline__dot"></span></th>
					<td>愛知県名古屋市千種区に移転</td>
				</tr>
				<tr>
					<th>1988年10月<span class="table-timeline__dot"></span></th>
					<td>西濃運輸との直接取引開始</td>
				</tr>
				<tr>
					<th>1995年1月<span class="table-timeline__dot"></span></th>
					<td>愛知県愛知郡東郷町に移転</td>
				</tr>
				<tr>
					<th>2002年2月<span class="table-timeline__dot"></span></th>
					<td>有限会社メディアボックス設立(資本金300万円)</td>
				</tr>
				<tr>
					<th>2003年2月<span class="table-timeline__dot"></span></th>
					<td>1 kg 以下の印刷物に特化した発送費削減システム開始</td>
				</tr>
				<tr>
					<th>2003年5月<span class="table-timeline__dot"></span></th>
					<td>DM発送代行物のマーケティング効果を計る実験開始</td>
				</tr>
				<tr>
					<th>2003年6月<span class="table-timeline__dot"></span></th>
					<td>コスト削減要望に応じ黒一色印刷開始</td>
				</tr>
				<tr>
					<th>2004年4月<span class="table-timeline__dot"></span></th>
					<td>ニュースレターの印刷から発送までの一括代行開始</td>
				</tr>
				<tr>
					<th>2004年8月<span class="table-timeline__dot"></span></th>
					<td>格安なカラー印刷システム完成</td>
				</tr>
				<tr>
					<th>2006年8月<span class="table-timeline__dot"></span></th>
					<td>Eメール受注システム完成</td>
				</tr>
				<tr>
					<th>2006年9月<span class="table-timeline__dot"></span></th>
					<td>手書き住所･文面受注開始</td>
				</tr>
				<tr>
					<th>2007年1月<span class="table-timeline__dot"></span></th>
					<td>平成19年01月　プライバシーマーク取得委員会設置</td>
				</tr>
				<tr>
					<th>2007年3月<span class="table-timeline__dot"></span></th>
					<td>株式会社メディアボックス設立(資本金を1000万円に増資)<br>ベリサインによるSSLサーバ認証システム開始</td>
				</tr>
				<tr>
					<th>2007年9月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク取得　認定番号　第19000081(01)</td>
				</tr>
				<tr>
					<th>2009年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(02)</td>
				</tr>
				<tr>
					<th>2010年8月<span class="table-timeline__dot"></span></th>
					<td>バカ売れ DM集客術 中経出版より出版</td>
				</tr>
				<tr>
					<th>2011年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(03)</td>
				</tr>
				<tr>
					<th>2013年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(04)</td>
				</tr>
				<tr>
					<th>2015年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(05)</td>
				</tr>
				<tr>
					<th>2017年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(06)</td>
				</tr>
				<tr>
					<th>2019年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(07)</td>
				</tr>
				<tr>
					<th>2021年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(08)</td>
				</tr>
				<tr>
					<th>2023年8月<span class="table-timeline__dot"></span></th>
					<td>プライバシーマーク更新　認定番号　第19000081(09)</td>
				</tr>
				<tr>
					<th>2025年1月<span class="table-timeline__dot"></span></th>
					<td>DMトラッカー（特許申請済）開始</td>
				</tr>
				<tr>
					<th>2025年5月<span class="table-timeline__dot"></span></th>
					<td>顧客との信頼関係を構築しろ！ ビーパブリッシングより出版</td>
				</tr>
				<tr>
					<th>2025年6月<span class="table-timeline__dot"></span></th>
					<td>DM作成フルパック開始</td>
				</tr>
				<tr>
					<th>2025年8月<span class="table-timeline__dot"></span></th>
					<td>新規獲得DMフルパック開始</td>
				</tr>
			</tbody>
		</table>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">社長紹介</h2>
<style type="text/css">
<!--
#ceo{width:90%}
@media (min-width:768px){
#ceo{width:100%}
#ceo>div:nth-child(1){width:150px;margin:0 10px 0 0}
#ceo>div:nth-child(2){width:calc(100% - 160px);}
}
-->
</style>

		<div id="ceo" class="uk-flex uk-flex-wrap uk-flex-center">
			<div><p class="uk-text-center"><img src="/images/kaisyaannai/toyoda_akira_300.webp" width="300" height="380" style="width:150px;height:190px" alt="株式会社メディアボックス 代表取締役　豊田 昭（Akira Toyoda）" decoding="async" loading="lazy"></p><p class="uk-text-center uk-visible-small">豊田 昭<br>（Akira Toyoda）</p></div>
			<div>
				<p class="u-ml20 uk-hidden-small"><strong>豊田 昭（Akira Toyoda）</strong></p>
				<p class="u-ml20">株式会社メディアボックス 代表取締役 ／ ダイレクトマーケティングコンサルタント</p>

				<h3 class="midashi05">実績ハイライト（信頼の根拠）</h3>
				<ul class="list-circle u-ml30">
					<li><span class="u-font-bold">創業：</span> 1986年（昭和61年）</li>
					<li><span class="u-font-bold">専門化：</span> 2003年よりDM発送代行に特化</li>
					<li><span class="u-font-bold">取引実績：</span> 全国 8,521社（東証プライム102社を含む）</li>
					<li><span class="u-font-bold">評価：</span> リピート66%／紹介34%（いずれも2025年9月時点）</li>
					<li><span class="u-font-bold">成果事例：</span> 反応率 最大16倍、CPI（1件あたりの問合せ獲得コスト）大幅改善、経費 最大50%削減（複数案件の実績）</li>
				</ul>
				<p class="u-ml30">※記載の成果は個別事例の結果であり、全案件での再現を保証するものではありません。</p>

				<h3 class="midashi05">専門領域（Expertise）</h3>
				<ul class="list-circle u-ml30">
					<li>ABテストが出来る小ロット発送</li>
					<li><span class="u-font-bold">コスト最適化：</span> 重量物・多点封入・小ロットなど他社不可案件の工程設計</li>
					<li>箱や特殊サイズ、特殊案件得意</li>
					<li><span class="u-font-bold">社長・決裁者に届くDM戦略：</span> コンセプト設計／クリエイティブ／差出し最適化</li>
					<li><span class="u-font-bold">データ×紙DM：</span> 宛名データ運用、個別QR・アクセス解析、行動データに基づく追客</li>
					<li><span class="u-font-bold">ABテスト設計：</span> コピー／LP／フォームまで一気通貫で最適化</li>
					<li><span class="u-font-bold">CPI最適化：</span> 反応率向上と獲得単価の同時改善</li>
				</ul>

				<h3 class="midashi05">主要な提供価値</h3>
				<p class="u-ml20">“社長宛”DMの設計と制作（読み進めやすい情報設計・意思決定導線）</p>
				<ul class="list-decimal u-ml30">
					<li><span class="u-font-bold">多段階フォロー設計</span> （1クリックフォーム／ステップメール／即時架電フロー）</li>
					<li><span class="u-font-bold">効果検証と改善</span> （ABテスト→ダッシュボード→月次レポート）</li>
					<li><span class="u-font-bold">コスト・オペレーション最適化</span> （高重量／多点封入／小ロット／柔軟な封入仕様）</li>
				</ul>

				<h3 class="midashi05">自社開発プロダクト：DMトラッカー（特許申請済）</h3>
				<ul class="list-circle u-ml30">
					<li><span class="u-font-bold">顧客別QR</span>で“見えなかった反応”を可視化</li>
					<li><span class="u-font-bold">購買段階ごとのスコアリング</span>と適切なフォロー（Chatwork通知／ステップメール）</li>
					<li><span class="u-font-bold">1クリックフォーム</span>で離脱を最小化、<span class="u-font-bold">ROIダッシュボード</span>で意思決定を高速化</li>
					<li>クッキーレス時代を前提とした<span class="u-font-bold">オフライン×オンライン統合トラッキング</span></li>
				</ul>
				<div class="link-button u-pa10"><a href="https://www.dm110.jp/DM_kakumei">DMトラッカー詳細</a></div>

				<h3 class="midashi05">コンプライアンス／信頼性（Trust）</h3>
				<ul class="list-circle u-ml30">
					<li><span class="u-font-bold">個人情報保護法（APPI）対応：</span> 委託・再委託管理、オプトアウト導線、社内運用規程</li>
					<li><span class="u-font-bold">データハンドリング：</span> アクセス権限管理／ログ管理／最小化の原則</li>
					<li><span class="u-font-bold">契約・体制：</span> 秘密保持契約（NDA）／業務委託契約に基づく管理・監査プロセス</li>
				</ul>
			</div>
		</div>

	</section>


	<section id="m04">
		<h2 class="midashi03-2">当社の特徴</h2>
		<p>当社ではDM発送担当者様の負担を最小限にするために下記対応を行っています。</p>

		<h3 class="midashi03 u-mt0">見積から最後まで同じ担当者です</h3>
		<p>見積を返信した担当者が最後まで担当します。<br>
			営業やオペレーターではありません。<br>
			電話が繋がらない、待たせるということはありません。<br>
			「担当者に連絡をとり折り返し連絡します」はもちろんありません。<br>
			見積から同じ担当者のため進捗状況を把握し無駄な説明がいりません。<br>
			お客様にとっては一番ストレスのない形です。<br>
			非常時も焦らずに対応できます。</p>
		<div class="link-button u-pa10"><a href="https://www.dm110.jp/koe/">お客様の声をご確認ください</a></div>

		<h3 class="midashi03">3時間以内の見積・メール返信</h3>
		<p>当社では完全な担当者制です。<br>
			営業社員や受付だけの担当者ではありません。<br>
			そのためお客様の状況や作業の進行度合いが把握できています。<br>
			メールに関しても状況が理解できているためすぐに返信することができます。</p>

		<h3 class="midashi03">発送前にDM現物のチェックができます。</h3>
		<p>発送前に発送するDMと同じものを送付しています（初回のみ）<br>
			初めてのDM発送では思い違いや聞き違いによるトラブル率が高くなります。<br>
			現物を見て封入順や向き印刷内容、宛ラベル位置他目で見て確認できます。<br>
			初回は変更が多く発生します。<br>
			一番トラブルの多い初回発送が安心できます。</p>

		<h3 class="midashi03">運送会社に引渡した伝票コピーを送ります</h3>
		<p>実際にDM発送が行われたのか心配になると思われます。<br>
			当社では運送会社への引渡し伝票コピーを送っています。<br>
			その伝票を見ると発送数や引渡し日が分かります。<br>
			発送が確実に行われているかの心配が無くなります。</p>

		<h3 class="midashi03">返品物無料データ化（※注１）</h3>
		<p>初めてのDM発送で気が付きにくい点にDM返品物処理があります。<br>
			思いのほか大変な作業です。<br>
			住所不明などで返品されたDMはデータ化する必要があります。<br>
			名簿データを更新し、状況把握するためです。<br>
			次回発送時のコスト削減などに役立ちます。
			このデータ化作業を無料で行っています。※注１<br>
			※注１：ペラ用紙以外のカタログや封入物がある場合は別途作業量がかかります。</p>

		<h3 class="midashi03">進捗状況を５回以上メール連絡</h3>
		<p>DM発送担当者様は作業状況がどこまで行っているのか心配になります。<br>
			上司に聞かれることもあると思います。<br>
			当社ではお客様に下記の進捗状況をメール連絡しています。</p>
		<ul class="list-circle u-ml30">
			<li>荷物の到着連絡</li>
			<li>宛名データの受け取り連絡</li>
			<li>印刷データの受け取り連絡</li>
			<li>発送連絡</li>
			<li>発送残部連絡</li>
			<li>宛名データ削除連絡</li>
			<li>その他状況に応じ印刷ミスなど気づいたことは連絡しています。</li>
		</ul>
		<p>※DM発送内容により連絡事項が変わります。</p>

		<h3 class="midashi03">宛名データ削除のお知らせ</h3>
		<p>会社の大切なお客様情報を預かるため、どのように処理されたか心配になると思われます・<br>
			メールや電話で削除しましたと言っても本心では信用できないのではないでしょうか。<br>
			当社では米国国家安全保障局（NSA）推奨基準で完全に削除（各クラスタに乱数を2回書き込んだ後に、0（ゼロ）で1回上書き）<br>
			削除完了画面の画像をお客様に送っています。</p>

	</section>


	<section id="m05">
		<h2 class="midashi03-2">当社の経営方針</h2>

		<h3 class="midashi03">「DM発送代行はメディアボックスだね」と言われることです</h3>
		<p>当社の目標は、お客様がどなたかに「良いDM発送代行会社知らない？」と聞かれた時に、「メディアボックスがいいよ」と言われる会社になることです。<br>
			また、多くのコンサルタントさんや広告代理店などに頼りにされることでもあります。</p>
		<p>おかげさまで、現在メディアボックスでは紹介をよくいただきます。<br>
			新規顧客数の約30％は紹介です。<br>
			紹介により徐々にメディアボックスを知っていただける、こんなに嬉しいことはありません。</p>
		<div class="link-button u-pa10"><a href="https://www.dm110.jp/koe/">お客様の声をご確認ください</a></div>

		<h3 class="midashi03">１年に135％以上成長しません</h3>
		<p>メディアボックスでは、DMやニュースレターは、一回だけの発送で効果を期待するものとは考えていません。<br>
			最大の効果を生み出すDMやニュースレターは、テストを行い、その都度お客様の反応により改善を重ねることによって生まれるからです。<br>
			また、何度も発送する事により、御社と御社お客様の接触頻度が高まります。<br>
			接触頻度が増すことにより効果も増します。</p>

		<p>そのため当社では、一回限りのお取引ではなく、お客様にとって長くお付き合いいただけるパートナーのような存在であることを、最も重要だと考えています。<br>
			当社は労働集約型産業です。<br>
			そのため急成長すると</p>
		<ul class="list-circle u-ml30">
			<li>一番大切な既存のお客様対応がおろそかになります。</li>
			<li>新規お客様対応が悪くなります</li>
			<li>新人スタッフを多く入れるためミスが発生しやすくなります。</li>
			<li>一人あたりの作業効率が悪くなります。</li>
			<li>急成長した会社は倒産リスクが高くなります。</li>
		</ul>
		<p>長くお付き合いいただくためには、新規のお客様をどんどん増やすのではなく、今お付き合いのあるお客様に信頼していただけるような姿勢で取り組むことだと考えています。</p>
		<p>価格を下げるため、しかし倒産しないために下記内容を行っております。</p>

		<h3 class="midashi03">営業がいません</h3>
		<p>会社対会社取引では必要とされている営業社員を置かず人件費を削減しています。<br>
			当社の営業は「紹介」「口コミ」と「ホームページ」になります。<br>
			営業がいないため、当社からしつこい訪問や営業電話はありません。<br>
			対応や作業進行にご心配なかた700社以上の自筆「お客様からの声」を参考にして下さい。<br>
			最初から最後まで同じ専任担当者ですので安心していただけると思います。<br>
			また2回目以降も同じ担当者が付きますのでさらに負担が少なくなります。</p>

		<h3 class="midashi03">前金制</h3>
		<p>貸倒れが発生しないよう完全前金制でお願いしています。<br>
			そのため通常は、発送代行料金に含める、「貸倒引当金」や「回収のための費用」を省くことが出来ました。<br>
			経理上、ご不便をかけていると思いますがお許し下さい。</p>

		<h3 class="midashi03">設備投資が少ない</h3>
		<p>お客様と直接取引できるＤＭ発送代行会社で手封入だけの会社はほとんどありません。<br>
			そのため何千万円もする機械を複数入れる必要がないためコストダウンができます。<br>
			ただし、大量案件はお時間を頂いています。</p>

		<h3 class="midashi03">10年以上お付き合いのお客様</h3>
		<p>当社を10年以上利用していただいているお客様が数十社あります。<br>
			また、新規のお客様で紹介によるものが30％を超えています。</p>

	</section>


	<section id="m06">
		<h2 class="midashi03-2">安心・安全対策</h2>

		<h3 class="midashi04">プライバシーマーク認定登録</h3>
		<p class="uk-text-center"><img src="/images/kaisyaannai/pmark_syomeisyo9.jpg" width="590" height="836" style="width:380px" alt="プライバシーマーク登録証" decoding="async" loading="lazy"></p>

		<h3 class="midashi04">個人情報漏洩保険</h3>
		<p>セキュリティー面でも万全を尽くしていますが、万一のために個人情報漏洩保険に加入し続けています。<br>お客様の安心のために個人情報漏洩保険は大切だと考えています。</p>
		<p class="uk-text-center"><img src="/images/kaisyaannai/kojinn_jyouhou_rouei.jpg" width="580" height="406" alt="個人情報漏洩保険" decoding="async" loading="lazy"></p>

		<h3 class="midashi04">廃棄物処理</h3>
		<p>運送会社からの持ち戻り品（住所不明など）は基本当社でデータ化してお客様に返却しています。<br>データ化の終わった持ち戻り品は個人情報が漏れないように専門業者に委託しています。</p>
		<p class="uk-text-center"><img src="/images/kaisyaannai/haiki_syori.jpg" width="400" height="567" alt="廃棄物処理" decoding="async" loading="lazy"></p>

		<h3 class="midashi04">宛名データは米国国家安全保障局方式で完全削除</h3>
		<p>お預かりした宛名データは、米国国家安全保障局（NSA）推奨基準で完全に削除。<br>（各クラスタに乱数を2回書き込んだ後に、0（ゼロ）で1回上書き）</p>
		<p class="uk-text-center"><img src="/common/img/index/sec_delete_nsa.png" alt="宛名データ削除証明画像" width="288" height="362" decoding="async" loading="lazy"></p>

		<h3 class="midashi04">SSLを採用</h3>
		<p> SSLとはSecure Sockets Layerの頭文字をとったもので、意味はインターネット通信を暗号化する技術の事です。<br>
			SSLを利用するとパソコンから出たデータを暗号化することで、第三者によるデータの盗聴・流出を防ぐことができます。</p>
		<p>メディアボックスではSSLを採用しています。</p>

	</section>

<?php /*
	<section id="m06">
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
				<div class="link-button u-pa10"><a href="https://www.dm110.jp/1clic_form">入力無しフォーム詳細</a></div></li>
			<li>「誰が」を見たかをすぐにメールで知らせます。<br>（1日の集計、30日間の集計もメールでお知らせ）</li>
			<li>フォーム離脱者に自動ステップメール</li>
		</ol>

		<h3 class="midashi04">申込方法</h3>
		<p>当社よりDM発送依頼時に下記の方法のいずれかで申し込みください。<img src="/images/2025/qrm_use_sub23.png" class="uk-float-right" style="width:180px;height:180px" width="440" height="440" alt="https://www.dm110.jp/form/contact/" decoding="async" loading="lazy"></p>
		<ul class="list-circle u-ml30">
			<li>右記QRコードお問合せから<br>　<a href="https://www.dm110.jp/form/contact/">https://www.dm110.jp/form/contact/</a><br>フォームの「ご用件をお書きください」に<br>「QRDM無料モニターの件」と入力して送信ください。</li>
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

		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm">QRコード集客</a></div>
			<div class="link-button u-pa10"><a href="https://www.dm110.jp/qrm_m_d" style="margin:auto">QRDMのメリットとデメリット</a></div>
		</div>
*/ ?>


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
