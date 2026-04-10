<?php header("Content-Type: text/html; charset=UTF-8");
	$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
//	$Published   = '2022-11-22T00:00:00+09:00';
	$meta_title  = 'DMまるなげパック | DM×WEB×AI';
	$str_title   = 'DMまるなげパック | DM×WEB×AI';
	$str_descrip = '企画・制作から効果測定まで、DMのすべてをワンストップで。DMトラッカー連携によるデータドリブンなDM施策。';
	$str_keyword = 'DM発送代行センター,DMトラッカー,DM丸投げパックプロ';
//	$og_image    = 'cover.jpg';
	$canonical   = 'https://www.dm110.jp/qrm_use';
	$sw_nocss    = True;

include($_SERVER['DOCUMENT_ROOT'].'/common/inc_2022/head.php');
?>
<style type="text/css">
<!--
/* -------- Reset (簡易) -------- */
* { box-sizing: border-box; }
html, body { margin: 0; padding: 0; }
img { max-width: 100%; height: auto; display: block; }
a { color: inherit; text-decoration: none; }
ul, ol { margin: 0; padding: 0 0 0 1.1rem; }
h1, h2, h3 { margin: 0 0 .5em; line-height: 1.2; }

/* -------- Theme -------- */
:root{
  --bg: #ffffff;
  --text: #1a202c;
  --muted: #4a5568;
  --line: #e2e8f0;

  /* Brand colors (青/赤/オレンジ) */
  --brand: #2563eb;      /* 青 */
  --brand-2: #ef4444;    /* 赤 */
  --brand-3: #f59e0b;    /* オレンジ */

  --primary: var(--brand);
  --soft: #f7fafc;
  --soft-2: #edf2f7;

  --radius: 14px;
  --shadow: 0 10px 24px rgba(0,0,0,.08);

  /* Type scale */
  --fs-base: clamp(15px, 1.4vw, 17px);
  --fs-h1: clamp(34px, 4.6vw, 56px);
  --fs-h2: clamp(24px, 3vw, 34px);
  --fs-display-sm: clamp(28px, 3.6vw, 44px);
}

html { font-size: 16px; }
body {
  font-family: "Yu Gothic","Meiryo","Hiragino Kaku Gothic ProN","Noto Sans JP", system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, sans-serif;
  background: var(--bg);
  color: var(--text);
  font-size: var(--fs-base);
  line-height: 1.7;
}

/* -------- Utilities -------- */
.container { max-width: 1120px; margin: 0 auto; padding: 0 20px; }
.section { padding: 64px 0; }
.bg-soft { background: var(--soft); }
.lead { color: var(--muted); }
.eyebrow { color: var(--brand); font-weight: 700; letter-spacing: .08em; }
.display { font-size: var(--fs-h1); font-weight: 800; }
.display.sm { font-size: var(--fs-display-sm); }
.h2 { font-size: var(--fs-h2); }

.grid { display: grid; gap: 20px; }
.grid.cols-3 { grid-template-columns: repeat(3, 1fr); }
.grid.cols-4 { grid-template-columns: repeat(4, 1fr); }
@media (max-width: 960px){
  .grid.cols-3, .grid.cols-4 { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 640px){
  .grid.cols-3, .grid.cols-4 { grid-template-columns: 1fr; }
}

/* Cards */
.cards .card {
  background: #fff;
  border: 1px solid var(--line);
  border-radius: var(--radius);
  padding: 20px;
  box-shadow: var(--shadow);
}
.cards.cols-4 .card h3 { margin-bottom: .4em; }

/* Feature rows */
.feature-rows .feature {
  background: #fff;
  padding: 20px;
  border-radius: var(--radius);
  border: 1px solid var(--line);
  box-shadow: var(--shadow);
}
.feature-rows .img-only { background: transparent; border: none; box-shadow: none; }
.feature-icon { font-size: 28px; }

/* Pill list */
.pill-list { list-style: none; display: flex; flex-wrap: wrap; gap: 10px; padding-left: 0; }
.pill-list li{ border:1px solid var(--line); border-radius: 999px; padding:8px 14px; background:#fff; }

/* Buttons */
.btn { display: inline-block; padding: 12px 18px; border-radius: 999px; font-weight: 700; border: 2px solid transparent; transition: .2s ease; }
.btn-small { padding: 8px 14px; font-size: .95em; }
.btn-primary { background: var(--primary); color: #fff; }
.btn-primary:hover { filter: brightness(0.95); }
.btn-ghost { border-color: var(--primary); color: var(--primary); background: #fff; }
.btn-ghost:hover { background: #eef2ff; }
.btn-light { background: #fff; color: var(--primary); }
.actions { display: flex; gap: 14px; flex-wrap: wrap; }

/* Check & dot lists */
.check, .dot { padding-left: 1.2rem; }
.check li { margin-bottom: .5em; }
.check.white li { color: #fff; }
.dot li { list-style: disc; }

/* Split sections */
.split .split-inner { display: grid; grid-template-columns: 1.1fr .9fr; gap: 32px; align-items: center; }
.split.alt .split-inner { grid-template-columns: .9fr 1.1fr; }
.split .text-col p { color: var(--muted); }
.split .media-col img { border-radius: var(--radius); box-shadow: var(--shadow); }
@media (max-width: 980px){ .split .split-inner, .split.alt .split-inner{ grid-template-columns: 1fr; } }

/* Hero */
.hero { padding-top: 96px; }
.hero .sub { margin: 10px 0 22px; }
.hero .eyebrow { font-weight:800; }
.hero .display { letter-spacing: -0.02em; }

/* System visual */
.system-visual { margin-top: 20px; }
.wide-visual { margin-top: 16px; border-radius: var(--radius); box-shadow: var(--shadow); }

/* KPIs */
.metrics { background: linear-gradient(180deg, #ffffff 0%, #f6f9ff 100%); }
.kpis { margin-top: 16px; }
.kpi { background: #fff; border:1px solid var(--line); border-radius: var(--radius); text-align: center; padding: 24px 10px; box-shadow: var(--shadow); }
.kpi-num { font-size: clamp(28px, 4.2vw, 48px); font-weight: 800; color: var(--brand); display: inline-block; }

/* Quotes */
.quotes .quote {
  background:#fff; border-radius: var(--radius); border:1px solid var(--line); padding: 18px; box-shadow: var(--shadow);
}
.quotes .quote footer { color: var(--muted); margin-top: .6em; }

/* Options note */
.options.note { margin-top: 22px; background: #fff; padding: 18px; border:1px dashed var(--brand-3); border-radius: var(--radius); }

/* CTA */
.cta { background: linear-gradient(135deg, var(--brand) 0%, #1e40af 100%); color: #fff; }
.cta .white { color: #fff; }

/* FAQ */
.faq { background: #fff; border:1px solid var(--line); border-radius: var(--radius); padding: 14px 16px; box-shadow: var(--shadow); margin-bottom: 12px; }
.faq summary { cursor: pointer; font-weight: 700; }
.faq[open] { border-color: var(--brand); }

/* Contact */
.contact-list { list-style: none; padding-left: 0; }
.contact-list li + li { margin-top: .4em; }

/* Header / Footer */
.site-header {
  position: sticky; top: 0; z-index: 50; background: rgba(255,255,255,.86); backdrop-filter: blur(8px);
  border-bottom: 1px solid var(--line);
}
.header-inner { display: flex; align-items: center; justify-content: space-between; padding: 10px 0; }
.brand { display: inline-flex; align-items: center; gap: 10px; font-weight: 800; }
.brand-mark {
  background: linear-gradient(135deg, var(--brand-2), var(--brand-3));
  color:#fff; padding: 6px 10px; border-radius: 10px; font-weight: 900; letter-spacing: .04em;
}
.brand-text { color: var(--text); }
.nav-toggle { display: none; }
.nav-list { display: flex; gap: 18px; align-items: center; list-style: none; padding-left: 0; }
@media (max-width: 860px){
  .nav-toggle { display: inline-block; border:1px solid var(--line); background:#fff; border-radius: 10px; padding: 8px 10px; }
  .nav-list { position: absolute; right: 20px; top: 56px; background: #fff; padding: 10px; border:1px solid var(--line); border-radius: 12px; display: none; flex-direction: column; min-width: 200px; box-shadow: var(--shadow); }
  .nav-list.open { display: flex; }
}

.site-footer { border-top: 1px solid var(--line); padding: 28px 0; background: #fafafa; }
.footer-inner { display:flex; align-items:center; justify-content: space-between; }
.to-top { font-weight: 700; }

/* Steps */
.steps { padding-left: 1.2rem; }
.steps li { margin-bottom: .4em; }

/* Service cards */
.service-cards .service-card {
  background:#fff; border:1px solid var(--line); border-radius: var(--radius); padding: 16px; box-shadow: var(--shadow);
}
.service-cards .service-card img{ border-radius: 10px; margin-bottom: 10px; }

/* Accessibility */
.skip-link { position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden; }
.skip-link:focus{ position:static; width:auto; height:auto; margin:6px; padding:8px; background:#000; color:#fff; border-radius:8px; }
-->
</style>

</head>

<body>
  <a class="skip-link" href="#main">本文へスキップ</a>

  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="#hero" aria-label="DMまるなげパック">
        <span class="brand-mark" aria-hidden="true">DM</span>
        <span class="brand-text">DMまるなげパック</span>
      </a>

      <nav class="nav" aria-label="メイン">
        <button class="nav-toggle" aria-expanded="false" aria-controls="navMenu">メニュー</button>
        <ul id="navMenu" class="nav-list">
          <li><a href="#about">特徴</a></li>
          <li><a href="#services">サービス</a></li>
          <li><a href="#strategy">戦略</a></li>
          <li><a href="#revolution">効果</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a class="btn btn-primary btn-small" href="#contact">無料相談</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">
    <!-- HERO -->
    <section id="hero" class="section hero split">
      <div class="container split-inner">
        <div class="split-col text-col">
          <p class="eyebrow">DM×WEB×AI</p>
          <h1 class="display">DMまるなげパック</h1>
          <p class="sub">企画・制作から効果測定まで、DMのすべてをワンストップで</p>
          <div class="actions">
            <a class="btn btn-primary" href="#contact">無料相談はこちら</a>
            <a class="btn btn-ghost" href="#cta">資料をダウンロード</a>
          </div>
        </div>
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-2.jpg" alt="会議室で成果指標を説明するビジネスチーム" />
        </div>
      </div>
    </section>

    <!-- PAIN POINTS -->
    <section id="pain" class="section">
      <div class="container">
        <h2 class="h2">DM施策、こんなお悩みありませんか？</h2>
        <div class="grid cards cols-4">
          <article class="card">
            <h3>人材・ノウハウ不足</h3>
            <p>人手やノウハウが足りず、効果的なDM施策に取り組めない。</p>
          </article>
          <article class="card">
            <h3>業務負担の増加</h3>
            <p>企画・デザイン・印刷・発送…すべてを自社で対応するのは大変。</p>
          </article>
          <article class="card">
            <h3>効果測定の課題</h3>
            <p>送って終わりで「反応が見えない」「測れない」。</p>
          </article>
          <article class="card">
            <h3>リード獲得の停滞</h3>
            <p>質の高い見込み客が獲れず、購入意欲段階も把握できない。</p>
          </article>
        </div>
      </div>
    </section>

    <!-- SOLUTION SPLIT -->
    <section id="solution" class="section split alt">
      <div class="container split-inner">
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-3.jpg" alt="解決を示すプレゼンテーション" />
        </div>
        <div class="split-col text-col">
          <h2 class="display sm">その悩み全て解決します。</h2>
          <p>株式会社メディアボックスの「DMまるなげパック」がすべてお任せで解決します。</p>
          <ul class="check">
            <li>DM全工程をワンストップで対応</li>
            <li>専門家のコンサルと企画立案</li>
            <li>DMトラッカーで反響可視化・PDCA</li>
            <li>マーケティングリソースを大幅節約</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="container">
        <h2 class="h2">【DMまるなげパック】とは？</h2>
        <p class="lead">高単価BtoBに強い、企画〜発送〜効果測定までのフルパッケージ。</p>
        <div class="grid cols-3 feature-rows">
          <div class="feature">
            <div class="feature-icon" aria-hidden="true">🎯</div>
            <h3>戦略立案・企画</h3>
            <p>コンセプト設計、顧客セグメント分析、購入意欲別アプローチ、ABテスト設計。</p>
          </div>
          <div class="feature">
            <div class="feature-icon" aria-hidden="true">✍️</div>
            <h3>デザイン・制作</h3>
            <p>プロ品質のデザインとコピー、QR生成、質問形式のDMなど。</p>
          </div>
          <div class="feature">
            <div class="feature-icon" aria-hidden="true">🔗</div>
            <h3>デジタル連携</h3>
            <p>LP作成（最大4種）、1クリックフォーム、ステップメール、Chatwork/メール連携。</p>
          </div>
          <div class="feature">
            <div class="feature-icon" aria-hidden="true">📬</div>
            <h3>印刷・発送</h3>
            <p>A4ハガキ（1000通）や封筒発送、社長宛リスト、手書きDM（OP）。</p>
          </div>
          <div class="feature">
            <div class="feature-icon" aria-hidden="true">📈</div>
            <h3>効果測定・改善</h3>
            <p>DMトラッカーで反響可視化、月1回の分析ミーティングと改善提案。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- STRATEGY -->
    <section id="strategy" class="section split">
      <div class="container split-inner">
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-8.jpg" alt="Future-Forward Strategies" />
        </div>
        <div class="split-col text-col">
          <h2 class="h2">DMトラッカーの戦略</h2>
          <p class="lead">目的を「申込獲得」から<strong>「データ獲得」</strong>へシフトし、Web誘導でデータを取得。</p>
          <ol class="steps">
            <li><strong>従来</strong>：DMで直接申込を狙う</li>
            <li><strong>ハードルを下げる</strong>：「申込」→「ページ確認」へ</li>
            <li><strong>新たな目的</strong>：顧客データを獲得し、追客を自動化</li>
          </ol>
        </div>
<?php /*
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-9.jpg" alt="認知→検討→比較→購入直前のファネル図" loading="lazy" />
        </div>
*/ ?>

      </div>
    </section>

    <!-- SYSTEM -->
    <section id="system" class="section split bg-soft">
      <div class="container split-inner">
        <div class="split-col text-col">
          <h2 class="h2">「誰が・いつ・どのページを見たか」を可視化し追客</h2>
          <div class="grid cards cols-3">
            <article class="card">
              <h3>ユーザー識別</h3>
              <p>顧客別QRから会員ID/会社名/メール/デバイス等を取得。</p>
            </article>
            <article class="card">
              <h3>すぐに通知</h3>
              <p>メール/Chatworkでリアルタイム通知。日次/30日まとめも対応。</p>
            </article>
            <article class="card">
              <h3>複数メール自動送信</h3>
              <p>閲覧ページ別にステップ配信。フォーム離脱者は最優先。</p>
            </article>
          </div>
        </div>
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-14.jpg" alt="行動可視化ダッシュボード" loading="lazy">
        </div>
      </div>
    </section>

    <!-- OUTCOMES -->
    <section id="outcomes" class="section split">
      <div class="container split-inner">
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-15.jpg" alt="ノートPCとデータのイメージ" loading="lazy">
        </div>
        <div class="split-col text-col">
          <h2 class="h2">出来るようになったこと（DM×WEB×SNS）</h2>
          <ul class="pill-list">
            <li>見込み客リスト取得</li>
            <li>購入意欲段階の把握</li>
            <li>追客・ナーチャリング（メール/架電/訪問/DM）</li>
            <li>入力なしの1クリックフォーム</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SERVICE DETAIL (3x sections) -->
    <section id="services" class="section bg-soft">
      <div class="container">
        <h2 class="h2">サービス内容</h2>

        <div class="grid cols-3 service-cards">
          <article class="service-card">
            <h3>コンサルティング</h3>
            <ul class="dot">
              <li>コンセプト設計</li>
              <li>顧客セグメント分析</li>
              <li>ABテスト設計（最大100案）</li>
            </ul>
          </article>
          <article class="service-card">
            <h3>システム活用</h3>
            <ul class="dot">
              <li>通知メール・Chatwork連携</li>
              <li>ステップメール設計</li>
              <li>1クリックフォーム</li>
            </ul>
          </article>
          <article class="service-card">
            <h3>DM制作・発送</h3>
            <ul class="dot">
              <li>顧客別QR作成・印刷</li>
              <li>A4ハガキ印刷・発送（1000通）</li>
              <li>効果測定・分析</li>
            </ul>
          </article>
        </div>

        <div class="options note">
          <h4>オプション</h4>
          <ul class="dot">
            <li>社長宛リスト作成</li>
            <li>手書きハガキ・宛名・便箋</li>
            <li>追加LP（QR遷移先）制作/変更</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- DREM -->
    <section id="drem" class="section split">
      <div class="container split-inner">
        <div class="split-col text-col">
          <h2 class="h2">私たちの独自メソッド「DREM」</h2>
          <ul class="steps">
            <li><strong>Design</strong>：顧客分析に基づく戦略設計</li>
            <li><strong>Research</strong>：調査とABテスト設計</li>
            <li><strong>Execute</strong>：制作〜発送を高速実行</li>
            <li><strong>Measure</strong>：詳細な効果測定と改善</li>
          </ul>
        </div>
        <div class="split-col">
          <img src="/images/marunage_dmt/stile-99.png" alt="DREMサイクル図" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- REVOLUTION/METRICS -->
    <section id="revolution" class="section metrics">
      <div class="container">
        <h2 class="h2">DMトラッカー革命 ～従来のDMの常識を覆す効果測定～</h2>
        <div class="grid cols-4 kpis">
          <div class="kpi"><span class="kpi-num" data-target="1.8">1.8x</span><p>即時電話で売上向上</p></div>
          <div class="kpi"><span class="kpi-num" data-target="18">18x</span><p>反応率向上（0.3%→5.5%）</p></div>
          <div class="kpi"><span class="kpi-num" data-target="9">9x</span><p>成約率向上（閲覧可視化）</p></div>
          <div class="kpi"><span class="kpi-num" data-target="8">8x</span><p>CVR向上（1クリック）</p></div>
        </div>
      </div>
    </section>

    <!-- FIT -->
    <section id="fit" class="section bg-soft">
      <div class="container">
        <h2 class="h2">こんな企業様に最適です</h2>
        <div class="grid cards cols-3">
          <article class="card"><h3>BtoB企業</h3><p>複雑な意思決定プロセスに最適化。</p></article>
          <article class="card"><h3>見込み客獲得が課題</h3><p>既存手法の頭打ちを打破。</p></article>
          <article class="card"><h3>高単価/高LTV</h3><p>成約率の改善が収益に直結。</p></article>
          <article class="card"><h3>リソース不足</h3><p>専任不在でもプロ品質の施策。</p></article>
          <article class="card"><h3>社長宛の手書きDM</h3><p>意思決定者へ直接アプローチ。</p></article>
        </div>
      </div>
    </section>

    <!-- REASONS -->
    <section id="reasons" class="section split">
      <div class="container split-inner">
        <div class="split-col text-col">
          <h2 class="h2">選ばれる理由：データドリブンなDM施策</h2>
          <ul class="check">
            <li>全工程をプロに任せて本業へ集中</li>
            <li>専門家による高品質制作と継続的PDCA</li>
            <li>DMトラッカーで可視化し、次に活かす</li>
            <li>高LTV顧客へ最適アプローチ</li>
            <li>独自性と自社資産の蓄積</li>
          </ul>
        </div>
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-54.jpg" alt="データに基づく意思決定のイメージ" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- VOICES -->
    <section id="voices" class="section bg-soft">
      <div class="container">
        <h2 class="h2">お客様の声・成功事例</h2>
        <div class="grid cols-3 quotes">
          <blockquote class="quote">
            <p>反響率が0.5%→1.2%に改善。ROIが大幅に向上しました。</p>
            <footer>機械部品メーカー A社（年商25億）</footer>
          </blockquote>
          <blockquote class="quote">
            <p>行動が可視化され、最適タイミングでアプローチ。成約率が35%向上。</p>
            <footer>ITソリューション B社（年商8億）</footer>
          </blockquote>
          <blockquote class="quote">
            <p>専任不在でもプロ品質。新規顧客が前年比40%増。</p>
            <footer>コンサル C社（年商10億）</footer>
          </blockquote>
        </div>
      </div>
    </section>

    <!-- MESSAGE -->
    <section id="message" class="section split">
      <div class="container split-inner">
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-50.jpg" alt="代表取締役 豊田 昭" loading="lazy" />
        </div>
        <div class="split-col text-col">
          <h2 class="h2">代表メッセージ</h2>
          <p>高単価商材でも確実なリード獲得に繋がるのがDM。最大化には専門知識と継続改善が不可欠です。私たちは「見える化された成果」をお約束します。</p>
          <p class="sig">株式会社メディアボックス　代表取締役 豊田 昭</p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="section split cta">
      <div class="container split-inner">
        <div class="split-col text-col">
          <h2 class="h2 white">まずはお気軽にご相談ください！</h2>
          <ul class="check white">
            <li>初回ZOOM相談は無料</li>
            <li>ヒアリング内容に基づくカスタムプラン</li>
            <li>小ロットからテスト可能</li>
          </ul>
          <a class="btn btn-light" href="#contact">無料相談フォーム</a>
        </div>
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-15.jpg" alt="相談の打ち合わせイメージ" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section">
      <div class="container">
        <h2 class="h2">よくあるご質問</h2>
        <details class="faq">
          <summary>リストが無くても大丈夫ですか？</summary>
          <p>当社でご用意可能です。業種・地域・規模の条件で最適なリストを提案します。</p>
        </details>
        <details class="faq">
          <summary>最小ロットは？</summary>
          <p>100通程度の小規模テストから段階的に拡大できます。</p>
        </details>
        <details class="faq">
          <summary>効果が出なかったら？</summary>
          <p>ABテストとトラッカー分析で継続的に改善・伴走支援します。</p>
        </details>
        <details class="faq">
          <summary>自社デザインの持ち込みは？</summary>
          <p>可能です。ブランドを活かしつつ効果測定機能を付加します。</p>
        </details>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section split contact">
      <div class="container split-inner">
        <div class="split-col text-col">
          <h2 class="h2">お問い合わせ</h2>
          <p>専門コンサルタントが課題をヒアリングし、最適なDM戦略をご提案します。（初回相談無料）</p>
          <ul class="contact-list">
            <li>電話： <a href="tel:0561372027">0561-37-2027</a>（平日9:00～18:00）</li>
            <li>メール： <a href="mailto:info@dm110.jp">info@dm110.jp</a></li>
          </ul>
          <div class="actions">
            <a class="btn btn-primary" href="#">無料相談を予約する</a>
            <a class="btn btn-ghost" href="#">資料をダウンロード</a>
          </div>
        </div>
        <div class="split-col media-col">
          <img src="/images/marunage_dmt/stile-16.jpg" alt="電話で相談するイメージ" loading="lazy" />
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <small>© 株式会社メディアボックス</small>
      <a href="#hero" class="to-top" aria-label="ページ上部へ">▲</a>
    </div>
  </footer>

  <script src="script.js" defer></script>
</body>
</html>
