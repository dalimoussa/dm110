<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'お客様の声が証明する「メディアボックス」が選ばれ続ける7つの理由';
	$str_title   = $num.'件のお客様の声が証明する「メディアボックス」が選ばれ続ける7つの理由';
	$str_descrip = 'DM発送代行センター、お客様の声から見える、DM発送前の不安と使って見て分かったこと';
	$str_keyword = 'DM発送の不安,DM(ダイレクトメール),発送代行';
	$og_image    = 'https://test.dm110.jp/images/2026/koe-fuan-kekka_main.png';
	$canonical   = 'https://test.dm110.jp/koe-fuan-kekka';

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>

<style type="text/css">
<!--
.txt-11rem{font-size:1.1rem;}
-->
</style>

</head>

<body id="index">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/header.php'); ?>


<?php $get_datas['name1'] = $str_title; include("./common/inc_2022/echo_breadcrumb.php"); ?>


<div class="container uk-flex uk-flex-wrap uk-flex-row-reverse">
<main>

	<div class="panel u-ma0">
		<div class="panel-image"><img src="/images/2026/koe-fuan-kekka_main.png" width="900" height="450" alt="ＤＭ作成フルパック コンセプト設計からDM作成・発送・結果・提案 全てお任せできる安心パック" fetchpriority="high"></div>
		<div class="panel-body">
			<h1><?=$num; ?>件のお客様の声が証明する<br>「メディアボックス」が選ばれ続ける7つの理由</h1>
			<div class="uk-text-left u-pa20">
				<p>DM発送代行会社を探すとき、多くの担当者様が最初に確認するのは「料金表」です。<br>
					しかし、弊社にいただく900件以上のお客様アンケートを読み解くと、<strong class="underline-yellow">価格以外の部分こそが、お客様が本当に重視している</strong>ことが見えてきます。<br>
					このページでは、実際のお声をもとに、メディアボックスと他のDM発送代行会社との違いを具体的にお伝えします。</p>
				<div class="link-button u-pa10"><a href="https://test.dm110.jp/koe/" style="display:flex"><?=$num; ?>件の手書きのお客様の声</a></div>
				<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/" style="display:flex">お客様アンケート 原本</a></div>
			</div>
		</div>
	</div>

	<section id="m00">
		<h2 class="midashi03-2">数字で見るメディアボックス</h2>
		<table class="table01 uk-text-center">
<?php /*
			<thead>
				<tr>
					<th class="th--blue">項目</th>
					<th class="th--blue">数値</th>
				</tr>
			</thead>
*/ ?>

			<tbody>
			<tr>
				<td>累計アンケート回答数（2006年～）</td>
				<td class="u-font-bold"><?=$num; ?>件</td>
			</tr>
			<tr>
				<td>DM発送代行の実績年数</td>
				<td class="u-font-bold">23年</td>
			</tr>
			<tr>
				<td>取引実績社数（上場企業102社含む）</td>
				<td class="u-font-bold">8,500社以上</td>
			</tr>
			<tr>
				<td>対応可能ロット</td>
				<td class="u-font-bold">100通～10万通</td>
			</tr>
			</tbody>
		</table>
	</section>


	<div class="toc">
		<span class="toc__title">－ 目次 －</span>
		<div class="toc-wrp">
			<ul class="toc__list toc__list-2">
				<li class="toc__item"><a href="#m01"><span class="toc__number">1.</span> 最初から最後まで「同じ担当者」が対応する</a>
				</li>
				<li class="toc__item"><a href="#m02"><span class="toc__number">2.</span> 見積もり・問い合わせへのレスポンスが圧倒的に速い</a>
				</li>
				<li class="toc__item"><a href="#m03"><span class="toc__number">3.</span> 初めての方でも迷わないサポート体制</a>
				</li>
				<li class="toc__item"><a href="#m04"><span class="toc__number">4.</span> 他社が断る複雑・難しい案件に対応できる</a>
				</li>
				<li class="toc__item"><a href="#m05"><span class="toc__number">5.</span> 「自社でやるより安い」トータルコストの最適化提案</a>
				</li>
				<li class="toc__item"><a href="#m06"><span class="toc__number">6.</span> 目に見えないフォローがお客様の信頼を生む</a>
				</li>
				<li class="toc__item"><a href="#m07"><span class="toc__number">7.</span> 「最安値ではないのに選ばれる」信頼と実績</a>
				</li>
				<li class="toc__item"><a href="#m08"><span class="toc__number">8.</span> まとめ比較表</a>
				</li>
			</ul>
		</div>
	</div>


	<section id="m01">
		<h2 class="midashi03-2">理由1　　最初から最後まで「同じ担当者」が対応する</h2>
<?php /*
		<h3 class="midashi03">他社との違い</h3>
*/ ?>

		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">　</th>
					<th class="th--blue">よくある他社</th>
					<th class="th--blue">メディアボックス</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<th>担当者</th>
				<td class="uk-text-left">問い合わせ・見積もり・入稿・発送<br>で都度変わる</td>
				<td class="uk-text-left u-font-bold txt-11rem">最初から発送完了まで同じ担当者</td>
			</tr>
			<tr>
				<th>引き継ぎ</th>
				<td class="uk-text-left">同じことを何度も説明する<br>手間が発生</td>
				<td class="uk-text-left u-font-bold txt-11rem">担当者名が明記。前の会話が引き継がれる</td>
			</tr>
			<tr>
				<th>緊急対応</th>
				<td class="uk-text-left">「担当に確認して折り返します」<br>が続く</td>
				<td class="uk-text-left u-font-bold txt-11rem">担当者が即判断・即対応</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">お客様の声</h3>
		<div class="box box--yellow">
			<p>「担当者がつくので安心してお任せできると思いました。年末の忙しい中の依頼でしたが、すぐに対応いただき、こちらの希望通りの納期で発送していただきました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 建築関連・埼玉県・12,000件</p>

		<div class="box box--yellow">
			<p>「ご担当者様が明確で、いつ電話やメールしても、早急にお返事いただけたのも安心でした。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 印刷会社・東京都・1,989件</p>

		<div class="box box--yellow">
			<p>「その後も担当者さんが最後までフォローしてくださったので、安心してお願いすることができました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 宗教関連・愛知県・3,141件</p>

		<div class="box box--yellow">
			<p>「途中で担当者さんが変わりましたが、引継に問題なく対応していただけました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 水処理関連・静岡県・518件</p>
	</section>


	<section id="m02">
		<h2 class="midashi03-2">理由2　　見積もり・問い合わせへのレスポンスが圧倒的に速い</h2>
<?php /*
		<h3 class="midashi03">他社との違い</h3>
*/ ?>

		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">　</th>
					<th class="th--blue">よくある他社</th>
					<th class="th--blue">メディアボックス</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<th>見積もり返信</th>
				<td class="uk-text-left">数日～1週間かかる場合も</td>
				<td class="uk-text-left u-font-bold txt-11rem">営業日3時間以内</td>
			</tr>
			<tr>
				<th>資料送付</th>
				<td class="uk-text-left">言われてから動く</td>
				<td class="uk-text-left u-font-bold txt-11rem">問い合わせ後、数日以内に説明資料＋サンプルが届く</td>
			</tr>
			<tr>
				<th>社内手続き</th>
				<td class="uk-text-left">スケジュールが後ろ倒し<br>になる</td>
				<td class="uk-text-left u-font-bold txt-11rem">速い返信が社内稟議をスムーズにする</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">お客様の声</h3>
		<div class="box box--yellow">
			<p>「見積り対応のスピードも早く我々の社内稟議もスムーズに進める事ができました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── コンサルティング・静岡県・348件</p>

		<div class="box box--yellow">
			<p>「問い合わせ後すぐに見積りが届き、数日後には説明書類およびサンプルセットが届いたので、非常に助かりました。いくつかの発送業者を比べましたが、メディアボックス様が一番お客様に寄り添ったサービスをしていると感じたため選びました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 保険代理店・神奈川県・675件</p>

		<div class="box box--yellow">
			<p>「見積りの依頼をしたら、すぐに返信が来て、金額にビックリ！後日、会社の案内DMがきて、内容を見るとそのクオリティが高いことを確信できたので、安心して発注することができました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 車関連・福島県・4,652件</p>

		<div class="box box--yellow">
			<p>「お見積りをはじめ、メールの対応が早く的確なので、安心して進める事が出来ました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 衣装関連・東京都・1,428件</p>
	</section>


	<section id="m03">
		<h2 class="midashi03-2">理由3　　初めての方でも迷わないサポート体制</h2>

		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">よくある他社の問題</th>
					<th class="th--blue">メディアボックスの対応</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td class="uk-text-left">マニュアルが複雑でわかりにくい</td>
				<td class="uk-text-left u-font-bold txt-11rem">わかりやすい説明資料を送付</td>
			</tr>
			<tr>
				<td class="uk-text-left">質問しても「マニュアル参照」のみ</td>
				<td class="uk-text-left u-font-bold txt-11rem">担当者が電話・メールで丁寧サポート</td>
			</tr>
			<tr>
				<td class="uk-text-left">初心者には敷居が高い</td>
				<td class="uk-text-left u-font-bold txt-11rem">初回発送前に発送見本（サンプル）を無料送付</td>
			</tr>
			<tr>
				<td class="uk-text-left">ミスが起きてから対応</td>
				<td class="uk-text-left u-font-bold txt-11rem">事前に修正箇所を指摘してトラブルを未然防止</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">課題と対応</h3>
		<p>DM発送代行を初めて使う担当者様の最大の壁は「どこに何を送ればいいか分からない」不安です。<br>メディアボックスはこの不安を最初から取り除く仕組みを整えています。</p>

		<h3 class="midashi03">お客様の声</h3>
		<div class="box box--yellow">
			<p>「ダイレクトメール発送に不慣れでしたが、メール、電話どちらでの確認でも大変に分かりやすい対応をいただき、迷うことなく利用することができました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── （800件台のお客様の声より）</p>

		<div class="box box--yellow">
			<p>「初めての利用で、わからないことが多かったので、色々と問い合わせをさせていただいたのですが、いつも親切に教えていただき感謝しております。文章のケアレスミスなどもご指摘を頂き、ありがたかったです。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── （810件台のお客様の声より）</p>

		<div class="box box--yellow">
			<p>「今回初めてゆうメール発送をしたため、当方がとても不慣れで、いろいろお手数をおかけしたにもかかわらず、親切に対応して下さいました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 印刷会社・東京都・1,989件</p>

		<div class="box box--yellow">
			<p>「外部への発注は初めてのことでしたので、流れなどが分からず悩んでいましたが、担当者のスムーズなアテンドにより業務依頼させていただきました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 建設関連・東京都・255件</p>

		<div class="box box--yellow">
			<p>「こちらの細かな質問にも丁寧に答えていただき、安心してお任せできました。事前に資料をご提供いただけたことで、作業の流れや必要な準備が明確になりスムーズに進められた点もありがたかったです。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 金融関連・兵庫県・247件</p>

		<h3 class="midashi03">ポイント</h3>
		<p>弊社が大切にしているのは<strong class="underline-yellow">「DM発送担当者の方が困らない」</strong>こと。<br>担当者の立場に立って、事前準備から発送後の報告まで動いています。</p>
	</section>


	<section id="m04">
		<h2 class="midashi03-2">理由4　　他社が断る複雑・難しい案件に対応できる</h2>
		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">ご依頼内容（実例）</th>
					<th class="th--blue">他社</th>
					<th class="th--blue">メディアボックス</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<th>少部数（100通程度）</th>
				<td class="uk-text-left">&#x274c; 断られた</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 対応可能（100通～）</td>
			</tr>
			<tr>
				<th>封入物が20ページ以上のA4中綴じ冊子</th>
				<td class="uk-text-left">&#x274c; 断られた</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 対応可能</td>
			</tr>
			<tr>
				<th>印刷～DM発送までワンストップ</th>
				<td class="uk-text-left">&#x274c; できなかった</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 対応可能</td>
			</tr>
			<tr>
				<th>12,000件の大量発送（年末繁忙期）</th>
				<td class="uk-text-left">&#x274c; 「いっぱい」で断られた</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 期日通り対応</td>
			</tr>
			<tr>
				<th>15パターン　14435件</th>
				<td class="uk-text-left">&#x274c; 対応不可</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 対応可能（得意分野）</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">他社に断られた・できなかった事例（実際のお声より）</h3>
		<div class="box box--yellow">
			<p>「ネットで検索して何社か問合せしましたが、<span class="txt-red">少部数・厚い冊子</span>・角2封筒の問題を全てクリアして請け負っていただけたのはメディアボックス様だけでした。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 医療関連（患者団体）・千葉県・259件</p>

		<div class="box box--yellow">
			<p>「2枚のチラシを1つの封筒に梱包発送する計画をしていましたが、他社ではその対応をしてもらえず、メディアボックスさんに依頼しました。発送も予定通りスムーズに行っていただき、進捗状況のご連絡もこまめにいただけて、安心してお取引できました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 技能試験関連・東京都・182件</p>

		<div class="box box--yellow">
			<p>「15パターンという、複雑な封入作業にも関わらず、ご対応いただけた事、メール、電話の対応も、わかりやすかったです。 何より1番は、とてもレスポンスが早く、感動いたしました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 税理士事務所のお客様・大阪府・14435件</p>
	</section>


	<section id="m05">
		<h2 class="midashi03-2">理由5　　「自社でやるより安い」トータルコストの最適化提案</h2>
		<h3 class="midashi05">見落とされがちな「隠れたコスト」</h3>
		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">コスト項目</th>
					<th class="th--blue">自社作業・他社利用時の落とし穴</th>
					<th class="th--blue">メディアボックスの提案</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<th>人件費</th>
				<td class="uk-text-left">社員の封入・ラベル貼り・発送作業の時間</td>
				<td class="uk-text-left u-font-bold txt-11rem">すべて代行でトータルが自社より安い</td>
			</tr>
			<tr>
				<th>ミス対応費用</th>
				<td class="uk-text-left">再発送・謝罪対応の追加コスト</td>
				<td class="uk-text-left u-font-bold txt-11rem">事前チェックでミスゼロを目指す</td>
			</tr>
			<tr>
				<th>機会損失</th>
				<td class="uk-text-left">スケジュール遅延による発送タイミングのずれ</td>
				<td class="uk-text-left u-font-bold txt-11rem">速い対応でタイミングを逃さない</td>
			</tr>
			<tr>
				<th>郵便料金</th>
				<td class="uk-text-left">通常料金で自分で発送すると割高</td>
				<td class="uk-text-left u-font-bold txt-11rem">ゆうメール等で郵便局直接より20%以上安くなる場合あり</td>
			</tr>
			<tr>
				<th>改善提案</th>
				<td class="uk-text-left">言われた通りに処理するだけ</td>
				<td class="uk-text-left u-font-bold txt-11rem">発送数変更・方法見直しのコスト削減提案</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">お客様の声</h3>
		<div class="box box--yellow">
			<p>「これまで自社でラベルを作成、封入、発送をしておりましたが、全てお任せしても、今までの金額よりも安くなり、びっくりしています。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 衣装関連・東京都・1,428件</p>

		<div class="box box--yellow">
			<p>「発送数が980件でしたが、1000件にすると安くなると教えていただいたので、助かりました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 教育関連・東京都・1,000件</p>

		<div class="box box--yellow">
			<p>「自社でゆうメールで送付するより安かったのがとても助かりました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 防災関連・岐阜県・896件</p>

		<div class="box box--yellow">
			<p>「思ったより費用が安く郵便局よりかなり安く仕上りました。必要な方がいたら紹介したいと思います。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 不動産関連・神奈川県・1,987件</p>

		<div class="box box--yellow">
			<p>「毎年DMを全て自社で作成して発送しており、社員の負担増加や経費の圧迫が問題となっておりましたが、見積りをお願いしてみたところ、自社で行うよりも安く尚且つスピーディーに対応頂けることに驚きました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 食品衛生管理・東京都・2,278件</p>

		<div class="box box--yellow">
			<p>「DM発送コストが安くなるようなご提案を頂き有難うございました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── （810件台のお客様の声より）</p>

		<h3 class="midashi03">ポイント</h3>
		<p>弊社が重視するのは<strong class="underline-yellow">「お客様の費用対効果を最大化する」</strong>こと。<br>お客様が気づいていない無駄なコストを発見し、積極的に削減提案しています。</p>
	</section>


	<section id="m06">
		<h2 class="midashi03-2">理由6　　目に見えないフォローがお客様の信頼を生む</h2>
		<h3 class="midashi05">メディアボックス独自の無料フォローサービス一覧</h3>
		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">サービス内容</th>
					<th class="th--blue">お客様にとっての価値</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td class="uk-text-left">&#x1f4ec; 初回発送前に発送見本（サンプル）を送付</td>
				<td class="uk-text-left">「こんなはずじゃなかった」を事前に防ぐ</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x2709; 担当者からの手書きのお礼ハガキ</td>
				<td class="uk-text-left">人間味のある信頼関係を実感</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x1f4ca; 進捗状況のこまめなメール報告</td>
				<td class="uk-text-left">「今どうなってるの？」という不安を解消</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x1f50d; 入稿データのミス・修正箇所の事前指摘</td>
				<td class="uk-text-left">トラブルをゼロにする安心感</td>
			</tr>
			<tr>
				<td class="uk-text-left">🗑️ 宛名データ削除通知（無料）</td>
				<td class="uk-text-left">個人情報管理の証跡が残る</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x1f4c4; 返戻リストのExcelデータ化（無料）</td>
				<td class="uk-text-left">宛名リストのメンテナンスに活用できる</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x1f4cb; 料金後納郵便物差出票の送付（無料）</td>
				<td class="uk-text-left">経理・証跡管理がスムーズ</td>
			</tr>
			<tr>
				<td class="uk-text-left">&#x1f4e6; 発送方法変更時の迅速な説明・対応</td>
				<td class="uk-text-left">信書対応など複雑なケースも安心</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi03">お客様の声</h3>
		<div class="box box--yellow">
			<p>「とくに印象的だったのは、2度にわたってお礼のお葉書をいただいた点です。お心遣いが嬉しく、信頼感がより深まりました。時間的に余裕がない中での急な依頼にもかかわらず、柔軟にかつ丁寧にご対応くださった姿勢には、感謝しかありません。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 服飾関連・東京都・500件</p>

		<div class="box box--yellow">
			<p>「発送前にはサンプルもわざわざ送付いただき、内容確認することができありがたかったです。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 宗教関連・愛知県・3,141件</p>

		<div class="box box--yellow">
			<p>「安さはもちろん、レスポンスの速さ、フォローサービスが非常に良かったです。サンプルセットや御礼が届いて社内で皆びっくりしていました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 保険代理店・神奈川県・675件</p>

		<div class="box box--yellow">
			<p>「発注とその時々で自筆のお手紙を頂戴し、丁寧なお仕事ぶりが伺えました。こちらからのメールでの連絡に対する返信報告が早く安心できます。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 建設関連・東京都・255件</p>

		<div class="box box--yellow">
			<p>「メールやハガキでひんぱんに連絡いただき、ていねいな対応と迅速な対応に感謝します。とても快かったので友達にも紹介しました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── コンサルティング・新潟県・531件</p>

		<div class="box box--yellow">
			<p>「コミュニケーションをこまめに取りながら、きちんと進めてくれたことはとても良かったと思います。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 訪問看護・神奈川県・792件</p>

		<div class="box box--yellow">
			<p>「何も言わずともサンプルを発送いただき助かりました。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 斜面防災・東京都・260件</p>

		<div class="box box--yellow">
			<p>「料金後納郵便物差出票の送付、宛名データ削除証明の送付、返品物EXCELデータ化を追加料金なしで実施してくださるのも良心的です。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 医療関連（患者団体）・千葉県・259件</p>
	</section>


	<section id="m07">
		<h2 class="midashi03-2">理由7　　「最安値ではないのに選ばれる」信頼と実績</h2>
		<h3 class="midashi03">相見積もりでメディアボックスが選ばれる理由</h3>
		<p>DM発送代行会社を選ぶ際、ほとんどのお客様が複数社から見積もりを取っています。<br>
			「価格が最安ではなかったが、メディアボックスを選んだ」というお声が多数あります。</p>

		<div class="box box--yellow">
			<p>「価格が安く利用を検討しましたが、相見積りの中で<span class="txt-red">最も分かり易く、対応も良く、最安ではありませんでしたが、DM施策をお願いしました。</span>」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── コンサルティング・兵庫県・500件</p>

		<div class="box box--yellow">
			<p>「何社か見積りをとり、価格・スピード・対応等トータルして御社にお願いすることとなりました。わからないことや変更等にもすぐに対応していただき御社を選んで本当によかった。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── （810件台のお客様の声より）</p>

		<div class="box box--yellow">
			<p>「複数のDM会社と比較し価格、信頼度が良かったのでメディアボックス様にお願いすることにしました。発注から見積、案の作成、発送までとてもスムーズでした。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 行政書士事務所・静岡県・1,428件</p>

		<div class="box box--yellow">
			<p>「メディアボックスさんに決めたのは、<span class="txt-red">料金もありますが、ご担当の対応がとても良かったからです。</span>」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 会議施設・兵庫県・1,890件</p>

		<div class="box box--yellow">
			<p>「5年くらい前に一度別の代行会社を利用したことがあったのですが、データの入稿方法が面倒だったり、納期に融通が効かなかったりして自社でやっていました。メール便単価改定に伴い御社に依頼させていただきました。入稿作業もとても楽でした。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 建設会社・神奈川県・600件</p>

		<div class="box box--yellow">
			<p>「今まで取引した全ての業界の会社の中でNo.1です。今後も必ずお願いしたいと思っております。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── （旧・お客様の声より）</p>

		<div class="box box--yellow">
			<p>「Web上で調べた結果、御社が一番信頼をおける内容であった。実際にお取引きを開始すると万事スムーズで何も問題はありませんでした。」</p>
		</div>
		<p class="uk-text-right u-mr50 u-mb40">── 宝石関連・東京都・145件</p>
	</section>


	<section id="m08" class="u-mb30">
		<h2 class="midashi03-2">まとめ比較表</h2>
		<h3 class="midashi05">お客様の声から見えた「メディアボックス」と「他社」の違い</h3>
		<table class="table01 uk-text-center">
			<thead>
				<tr>
					<th class="th--blue">比較ポイント</th>
					<th class="th--blue">よくある他社</th>
					<th class="th--blue">メディアボックス</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<th class="uk-text-left">担当者の一貫性</th>
				<td class="uk-text-left">都度変わる・引き継ぎミス</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 最初から最後まで同じ担当者</td>
			</tr>
			<tr>
				<th class="uk-text-left">見積もり返信速度</th>
				<td class="uk-text-left">数日～1週間</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 営業日3時間以内</td>
			</tr>
			<tr>
				<th class="uk-text-left">初心者サポート</th>
				<td class="uk-text-left">マニュアル参照のみ</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 丁寧な電話・メールサポート</td>
			</tr>
			<tr>
				<th class="uk-text-left">難しい案件対応</th>
				<td class="uk-text-left">少部数・厚い封入物は断る</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 100通～・複雑封入も対応</td>
			</tr>
			<tr>
				<th class="uk-text-left">コスト提案</th>
				<td class="uk-text-left">言われた通りに処理</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ お客様のための改善提案あり</td>
			</tr>
			<tr>
				<th class="uk-text-left">フォロー対応</th>
				<td class="uk-text-left">発送で完結</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 手書きハガキ・進捗報告・サンプル送付（無料）</td>
			</tr>
			<tr>
				<th class="uk-text-left">信頼スコア（相見積もり）</th>
				<td class="uk-text-left">価格のみで選ばれる</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ 対応・信頼度で選ばれる</td>
			</tr>
			<tr>
				<th class="uk-text-left">個人情報管理</th>
				<td class="uk-text-left">対応まちまち</td>
				<td class="uk-text-left u-font-bold txt-11rem">◎ プライバシーマーク取得（2007年～）</td>
			</tr>
			</tbody>
		</table>

		<h3 class="midashi05">まずはお気軽にご相談ください</h3>
		<ul class="list-circle u-ml30">
			<li>&#x1f4cb; <a href="https://test.dm110.jp/form/price/">無料お見積もりフォーム</a>（2分で入力完了）</li>
			<li>&#x1f4de; お電話：0561-37-2027（受付時間：9～18時 / 土日祝休）</li>
			<li>&#x1f4e7; <a href="https://test.dm110.jp/form/contact/">メールお問い合わせ</a>（24時間365日受付）</li>
		</ul>
		<p>プライバシーマーク取得（2007年～）｜上場企業102社含む8,500社以上の実績</p>

	</section>

	<p><small>※ 本ページのアンケートデータは、2006年よりメディアボックス（DM発送代行センター）がアンケート結果に元付き独自に収集・集計したものです。</small></p>

	<br class="u-mt50">
	<p class="uk-text-center txt-15rem u-mt50">関連ページ</p>
		<div class="link-box-2cu u-mb30">
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/koe/"><?=$num; ?>件のお客様の声（全文）</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/aggregate/">お客様アンケート集計結果</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/enquete/">お客様アンケート 原本</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/check_houhou.html">DM発送会社の選び方7ポイント</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/torihiki_jisseki.htm">取引実績（上場企業102社含む）</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/yasusugiruDM.html">安すぎるDM発送が危険な理由</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/muryou_6ko">初回発送6つの無料サービス</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/DM_yasuku_okuru.html">DMを安く送る方法</a></div>
			<div class="link-button u-pa10"><a href="https://test.dm110.jp/gyoukai.html" style="margin:auto">DM発送代行業界丸わかり</a></div>

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
