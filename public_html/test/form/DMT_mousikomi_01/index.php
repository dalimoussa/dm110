<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DMトラッカーQRコード　お問合せ　DM発送代行センター（QRM）</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://test.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、専任担当者制、DMトラッカー、サンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		<link rel="canonical" href="https://test.dm110.jp<?php echo str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__); ?>/">

<style type="text/css">
<!--
.underline-yellow {
    background: linear-gradient(transparent 60%, #ffff66 60%);
}
.underline-pink {
    background: linear-gradient(transparent 60%, #f1bed0 60%);
}
.mail_form em{
    display: inline-block;
    padding-right: 3em;
}
@media (min-width:721px){
.mail_form form,
.mail_form table th,
.mail_form table td {
    font-size: 15px;
}
.mail_form table td .example {
    font-size: 14px;
}
.mail_form .english {
    font-size: 12px;
}
.mail_form table th {
    width: 230px;
}
.mail_form table td textarea {
    width: 99%;
    height: 350px;
    border: 1px solid #ccc;
    border-radius: 2px;
}
.mail_form table .print div:first-child {
    margin: 0 0 0 10px;
}
.mail_form .list ul {
    margin: 0 0 -8px -10px;
}
.mail_form .list ul li {
    margin: 0 0 5px 20px;
}
.btn-large {
    width: 50%;
}
}
-->
</style>
	</head>
	<body class="mail_form" id="contact">

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

		<div id="container">

			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">DMトラッカーお問合せフォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">DMトラッカー お問合せフォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20"><strong class="big2 red01">当社にてDM発送する内容物にプラスして使われるものです。<br />
							各種ハガキ・添え状以外にQRコードを印刷する場合になります。</strong></p>

						<form id="myform" method="post" role="form" action="">
							<table>
								<tr>
									<th colspan="2"><span class="big2">基本情報</span></th>
								</tr>
								<tr>
									<th>
										<em>会社名</em>
										<span class="must">必須</span>
										<span class="english">company name</span>
									</th>
									<td>
										<input type="text" name="comapny_name" class="middle" placeholder="例　株式会社メディアボックス" value="<?php echo e($form->get('comapny_name')); ?>" />
										<?php echo $form->error('comapny_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>部署名</em>
										<span class="must">必須</span>
										<span class="english">department name</span>
									</th>
									<td>
										<input type="text" name="department_name" class="middle" value="<?php echo e($form->get('department_name')); ?>" />
										<span class="example">部署がない場合は「なし」とご記入ください。</span>
										<?php echo $form->error('department_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>担当者様名</em>
										<span class="must">必須</span>
										<span class="english">charge person name</span>
									</th>
									<td>
										<input type="text" name="name" class="middle" value="<?php echo e($form->get('name')); ?>" />
										<?php echo $form->error('name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>役職</em>
										<span class="must">必須</span>
										<span class="english">position</span>
									</th>
									<td>
										<input type="text" name="position" class="middle" value="<?php echo e($form->get('position')); ?>" />
										<?php echo $form->error('position', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>電子メールアドレス</em>
										<span class="must">必須</span>
										<span class="english">mail address</span>
									</th>
									<td>
										<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>電話番号</em>
										<span class="must">必須</span>
										<span class="english">telephone number</span>
									</th>
									<td>
										<input type="text" name="tel" class="middle" value="<?php echo e($form->get('tel')); ?>" />
										<?php echo $form->error('tel', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>希望連絡方法</em>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="touch_1" value="メール"<?php if ($form->get('touch_1')) : ?> checked="checked"<?php endif; ?> />メール</label>
										</div>
										<div>
											<label><input type="checkbox" name="touch_2" value="電話"<?php if ($form->get('touch_2')) : ?> checked="checked"<?php endif; ?> />電話</label>
										</div>
									</td>
								</tr>

								<tr>
									<th class="p50-t" colspan="2"><span class="big2">会社概要</span></th>
								</tr>
								<tr>
									<th>
										<em>業種</em>
										<span class="must">必須</span>
										<span class="english">industry</span>
									</th>
									<td>
										<input type="text" name="industry" class="middle" value="<?php echo e($form->get('industry')); ?>" />
										<?php echo $form->error('industry', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>資本金</em>
										<span class="must">必須</span>
										<span class="english">capital</span>
									</th>
									<td>
										<input type="text" name="capital" class="middle" value="<?php echo e($form->get('capital')); ?>" />
										<?php echo $form->error('capital', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>従業員数</em>
										<span class="must">必須</span>
										<span class="english">number of employees</span>
									</th>
									<td>
										<input type="text" name="employees" class="middle" value="<?php echo e($form->get('employees')); ?>" />
										<?php echo $form->error('employees', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>年商</em>
										<span class="must">必須</span>
										<span class="english">sales</span>
									</th>
									<td>
										<input type="text" name="sales" class="middle" value="<?php echo e($form->get('sales')); ?>" />
										<?php echo $form->error('sales', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>Webサイト</em>
										<span class="must">必須</span>
										<span class="english">site URL</span>
									</th>
									<td>
										<input type="text" name="url" class="middle" value="<?php echo e($form->get('url')); ?>" />
										<?php echo $form->error('url', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th class="p50-t" colspan="2"><span class="big2">現在のDM活用状況</span></th>
								</tr>
								<tr>
									<th>
										<em>年間DM発送数</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_01" value="1,000通未満"<?php if ($form->get('enq_01') == '1,000通未満' ) : ?> checked="checked"<?php endif; ?> />1,000通未満</label></li>
											<li><label><input type="radio" name="enq_01" value="1,000～5,000通"<?php if ($form->get('enq_01') == '1,000～5,000通' ) : ?> checked="checked"<?php endif; ?> />1,000～5,000通</label></li>
											<li><label><input type="radio" name="enq_01" value="5,000～10,000通"<?php if ($form->get('enq_01') == '5,000～10,000通' ) : ?> checked="checked"<?php endif; ?> />5,000～10,000通</label></li>
											<li><label><input type="radio" name="enq_01" value="10,000～50,000通"<?php if ($form->get('enq_01') == '10,000～50,000通' ) : ?> checked="checked"<?php endif; ?> />10,000～50,000通</label></li>
											<li><label><input type="radio" name="enq_01" value="50,000通以上"<?php if ($form->get('enq_01') == '50,000通以上' ) : ?> checked="checked"<?php endif; ?> />50,000通以上</label></li>
											<li><label><input type="radio" name="enq_01" value="無し"<?php if ($form->get('enq_01') == '無し' ) : ?> checked="checked"<?php endif; ?> />無し</label></li>
										</ul>
										<?php echo $form->error('enq_01', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>1回あたりの発送数</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_02" value="100通未満"<?php if ($form->get('enq_02') == '100通未満' ) : ?> checked="checked"<?php endif; ?> />100通未満</label></li>
											<li><label><input type="radio" name="enq_02" value="100～500通"<?php if ($form->get('enq_02') == '100～500通' ) : ?> checked="checked"<?php endif; ?> />100～500通</label></li>
											<li><label><input type="radio" name="enq_02" value="500～1,000通"<?php if ($form->get('enq_02') == '500～1,000通' ) : ?> checked="checked"<?php endif; ?> />500～1,000通</label></li>
											<li><label><input type="radio" name="enq_02" value="1,000～5,000通"<?php if ($form->get('enq_02') == '1,000～5,000通' ) : ?> checked="checked"<?php endif; ?> />1,000～5,000通</label></li>
											<li><label><input type="radio" name="enq_02" value="5,000通以上"<?php if ($form->get('enq_02') == '5,000通以上' ) : ?> checked="checked"<?php endif; ?> />5,000通以上</label></li>
											<li><label><input type="radio" name="enq_02" value="無し"<?php if ($form->get('enq_02') == '無し' ) : ?> checked="checked"<?php endif; ?> />無し</label></li>
										</ul>
										<?php echo $form->error('enq_02', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>現在のDM反応率</em>
										<span class="english">（およそで構いません）</span>
									</th>
									<td>
										<input type="text" name="enq_03" size="5" value="<?php echo e($form->get('enq_03')); ?>" /> ％
									</td>
								</tr>
								<tr>
									<th>
										<em>現在利用中のDM発送手法</em>
										<span class="must">必須</span>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_04_1" value="普通郵便"<?php if ($form->get('enq_04_1')) : ?> checked="checked"<?php endif; ?> />普通郵便</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_04_2" value="ゆうメール"<?php if ($form->get('enq_04_2')) : ?> checked="checked"<?php endif; ?> />ゆうメール</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_04_3" value="メール便"<?php if ($form->get('enq_04_3')) : ?> checked="checked"<?php endif; ?> />メール便</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_04_4" value="特定商取引法関連DMなど"<?php if ($form->get('enq_04_4')) : ?> checked="checked"<?php endif; ?> />特定商取引法関連DMなど</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_04_5" value="その他"<?php if ($form->get('enq_04_5')) : ?> checked="checked"<?php endif; ?> />その他</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_04_6" value="無し"<?php if ($form->get('enq_04_6')) : ?> checked="checked"<?php endif; ?> />無し</label>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>既存顧客へのDM</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_05" value="実施している"<?php if ($form->get('enq_05') == '実施している' ) : ?> checked="checked"<?php endif; ?> />実施している</label></li>
											<li><label><input type="radio" name="enq_05" value="実施していない"<?php if ($form->get('enq_05') == '実施していない' ) : ?> checked="checked"<?php endif; ?> />実施していない</label></li>
										</ul>
										<?php echo $form->error('enq_05', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>見込み客へのDM</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_06" value="実施している"<?php if ($form->get('enq_06') == '実施している' ) : ?> checked="checked"<?php endif; ?> />実施している</label></li>
											<li><label><input type="radio" name="enq_06" value="実施していない"<?php if ($form->get('enq_06') == '実施していない' ) : ?> checked="checked"<?php endif; ?> />実施していない</label></li>
										</ul>
										<?php echo $form->error('enq_06', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>現在のDMマーケティングでの課題</em>
										<span class="must">必須</span>
										<span class="english">（複数選択可）</span>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_07_1" value="反応率が低い"<?php if ($form->get('enq_07_1')) : ?> checked="checked"<?php endif; ?> />反応率が低い</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_2" value="費用対効果が見えない"<?php if ($form->get('enq_07_2')) : ?> checked="checked"<?php endif; ?> />費用対効果が見えない</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_3" value="ターゲット選定が難しい"<?php if ($form->get('enq_07_3')) : ?> checked="checked"<?php endif; ?> />ターゲット選定が難しい</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_4" value="効果測定ができない"<?php if ($form->get('enq_07_4')) : ?> checked="checked"<?php endif; ?> />効果測定ができない</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_5" value="顧客の行動が把握できない"<?php if ($form->get('enq_07_5')) : ?> checked="checked"<?php endif; ?> />顧客の行動が把握できない</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_6" value="フォローアップの仕組みがない"<?php if ($form->get('enq_07_6')) : ?> checked="checked"<?php endif; ?> />フォローアップの仕組みがない</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_08_1" value="その他"<?php if ($form->get('enq_08_1')) : ?> checked="checked"<?php endif; ?> />その他</label>
											<input type="text" name="enq_08_2" class="middle" value="<?php echo e($form->get('enq_08_2')); ?>" />
										</div>
									</td>
								</tr>

								<tr>
									<th class="p50-t" colspan="2"><span class="big2">DMトラッカー導入について</span></th>
								</tr>
								<tr>
									<th>
										<em>DMトラッカーの導入目的</em>
										<span class="must">必須</span>
										<span class="english">（複数選択可）</span>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_11_1" value="反応率向上"<?php if ($form->get('enq_11_1')) : ?> checked="checked"<?php endif; ?> />反応率向上</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_11_2" value="潜在顧客の可視化"<?php if ($form->get('enq_11_2')) : ?> checked="checked"<?php endif; ?> />潜在顧客の可視化</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_11_3" value="自動追客の実現"<?php if ($form->get('enq_11_3')) : ?> checked="checked"<?php endif; ?> />自動追客の実現</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_11_4" value="営業効率の改善"<?php if ($form->get('enq_11_4')) : ?> checked="checked"<?php endif; ?> />営業効率の改善</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_11_5" value="顧客データの蓄積"<?php if ($form->get('enq_11_5')) : ?> checked="checked"<?php endif; ?> />顧客データの蓄積</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_11_6" value="ROI改善"<?php if ($form->get('enq_11_6')) : ?> checked="checked"<?php endif; ?> />ROI改善</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_12_1" value="その他"<?php if ($form->get('enq_12_1')) : ?> checked="checked"<?php endif; ?> />その他</label>
											<input type="text" name="enq_12_2" class="middle" value="<?php echo e($form->get('enq_12_2')); ?>" />
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>DMトラッカーへの月額予算予定</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_13" value="30万円未満"<?php if ($form->get('enq_13') == '30万円未満' ) : ?> checked="checked"<?php endif; ?> />30万円未満</label></li>
											<li><label><input type="radio" name="enq_13" value="30万～50万円"<?php if ($form->get('enq_13') == '30万～50万円' ) : ?> checked="checked"<?php endif; ?> />30万～50万円</label></li>
											<li><label><input type="radio" name="enq_13" value="50万～100万円"<?php if ($form->get('enq_13') == '50万～100万円' ) : ?> checked="checked"<?php endif; ?> />50万～100万円</label></li>
											<li><label><input type="radio" name="enq_13" value="100万円以上"<?php if ($form->get('enq_13') == '100万円以上' ) : ?> checked="checked"<?php endif; ?> />100万円以上</label></li>
											<li><label><input type="radio" name="enq_13" value="500万円以上"<?php if ($form->get('enq_13') == '500万円以上' ) : ?> checked="checked"<?php endif; ?> />500万円以上</label></li>
										</ul>
										<?php echo $form->error('enq_13', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>導入希望時期</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_14" value="即時（1ヶ月以内）"<?php if ($form->get('enq_14') == '即時（1ヶ月以内）' ) : ?> checked="checked"<?php endif; ?> />即時（1ヶ月以内）</label></li>
											<li><label><input type="radio" name="enq_14" value="3ヶ月以内"<?php if ($form->get('enq_14') == '3ヶ月以内' ) : ?> checked="checked"<?php endif; ?> />3ヶ月以内</label></li>
											<li><label><input type="radio" name="enq_14" value="半年以内"<?php if ($form->get('enq_14') == '半年以内' ) : ?> checked="checked"<?php endif; ?> />半年以内</label></li>
											<li><label><input type="radio" name="enq_14" value="1年以内"<?php if ($form->get('enq_14') == '1年以内' ) : ?> checked="checked"<?php endif; ?> />1年以内</label></li>
											<li><label><input type="radio" name="enq_14" value="未定"<?php if ($form->get('enq_14') == '未定' ) : ?> checked="checked"<?php endif; ?> />未定</label></li>
										</ul>
										<?php echo $form->error('enq_14', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th class="p50-t" colspan="2"><span class="big2">内部体制について</span></th>
								</tr>
								<tr>
									<th>
										<em>DMマーケティング専任担当者</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_16" value="いる"<?php if ($form->get('enq_16') == 'いる' ) : ?> checked="checked"<?php endif; ?> />いる</label></li>
											<li><label><input type="radio" name="enq_16" value="いない"<?php if ($form->get('enq_16') == 'いない' ) : ?> checked="checked"<?php endif; ?> />いない</label></li>
											<li><label><input type="radio" name="enq_16" value="配置予定"<?php if ($form->get('enq_16') == '配置予定' ) : ?> checked="checked"<?php endif; ?> />配置予定</label></li>
										</ul>
										<?php echo $form->error('enq_16', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>社内のCRM/MAツール</em>
										<span class="must">必須</span>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_17_1" value="Salesforce"<?php if ($form->get('enq_17_1')) : ?> checked="checked"<?php endif; ?> />Salesforce</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_17_2" value="HubSpot"<?php if ($form->get('enq_17_2')) : ?> checked="checked"<?php endif; ?> />HubSpot</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_17_3" value="Marketo"<?php if ($form->get('enq_17_3')) : ?> checked="checked"<?php endif; ?> />Marketo</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_17_4" value="Pardot"<?php if ($form->get('enq_17_4')) : ?> checked="checked"<?php endif; ?> />Pardot</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_17_5" value="kintone"<?php if ($form->get('enq_17_5')) : ?> checked="checked"<?php endif; ?> />kintone</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_17_6" value="なし"<?php if ($form->get('enq_17_6')) : ?> checked="checked"<?php endif; ?> />なし</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_18_1" value="その他"<?php if ($form->get('enq_18_1')) : ?> checked="checked"<?php endif; ?> />その他</label>
											<input type="text" name="enq_18_2" class="middle" value="<?php echo e($form->get('enq_18_2')); ?>" />
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>DMトラッカー導入後の運用予定者</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_19" value="社内マーケティング部門"<?php if ($form->get('enq_19') == '社内マーケティング部門' ) : ?> checked="checked"<?php endif; ?> />社内マーケティング部門</label></li>
											<li><label><input type="radio" name="enq_19" value="営業部門"<?php if ($form->get('enq_19') == '営業部門' ) : ?> checked="checked"<?php endif; ?> />営業部門</label></li>
											<li><label><input type="radio" name="enq_19" value="外部委託"<?php if ($form->get('enq_19') == '外部委託' ) : ?> checked="checked"<?php endif; ?> />外部委託</label></li>
											<li><label><input type="radio" name="enq_19" value="未定"<?php if ($form->get('enq_19') == '未定' ) : ?> checked="checked"<?php endif; ?> />未定</label></li>
										</ul>
										<?php echo $form->error('enq_19', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th class="p50-t" colspan="2"><span class="big2">具体的なご要望</span></th>
								</tr>
								<tr>
									<th class="p0-r">
										<em>DMトラッカーに期待する効果</em>
										<span class="english">（自由記述）</span>
									</th>
									<td>
										<textarea name="promise"><?php echo e($form->get('promise')); ?></textarea>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>ご相談内容</em>
										<span class="english">（自由記述）</span>
									</th>
									<td>
										<textarea name="comment"><?php echo e($form->get('comment')); ?></textarea>
									</td>
								</tr>
								<tr>
									<th>
										<em>御社の成功イメージ</em>
										<span class="must">必須</span>
										<span class="english">（複数選択可）</span>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_21_1" value="新規顧客獲得増"<?php if ($form->get('enq_21_1')) : ?> checked="checked"<?php endif; ?> />新規顧客獲得増</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_21_2" value="既存顧客活性化"<?php if ($form->get('enq_21_2')) : ?> checked="checked"<?php endif; ?> />既存顧客活性化</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_21_3" value="リピート率向上"<?php if ($form->get('enq_21_3')) : ?> checked="checked"<?php endif; ?> />リピート率向上</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_21_4" value="売上向上"<?php if ($form->get('enq_21_4')) : ?> checked="checked"<?php endif; ?> />売上向上</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_21_5" value="コスト削減"<?php if ($form->get('enq_21_5')) : ?> checked="checked"<?php endif; ?> />コスト削減</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_22_1" value="その他"<?php if ($form->get('enq_22_1')) : ?> checked="checked"<?php endif; ?> />その他</label>
											<input type="text" name="enq_22_2" class="middle" value="<?php echo e($form->get('enq_22_2')); ?>" />
										</div>
									</td>
								</tr>
								<tr>
									<th rowspan="4">
										<em>目標とする成果</em>
									</th>
									<td>
										反応率 <input type="text" name="enq_23" size="5" value="<?php echo e($form->get('enq_23')); ?>" /> ％向上
									</td>
								</tr>
								<tr>
									<td>
										売上　 <input type="text" name="enq_24" size="5" value="<?php echo e($form->get('enq_24')); ?>" /> ％増加
									</td>
								</tr>
								<tr>
									<td>
										ROI　 <input type="text" name="enq_25" size="5" value="<?php echo e($form->get('enq_25')); ?>" /> ％改善
									</td>
								</tr>
								<tr>
									<td>
										その他 <input type="text" name="enq_26" class="middle" value="<?php echo e($form->get('enq_26')); ?>" />
									</td>
								</tr>
							</table>

							<div class="m20">
								<p>※ご記入いただいた情報は、DMトラッカーのご提案およびサービス改善の目的にのみ使用し、第三者に提供することはございません。</p>
							</div>
							<div class="m20 p20" style="background:#fce4e4;border:1px solid #e5b8b8">
								<p><strong>【期間限定キャンペーン】今なら初回特典をご用意！</strong><br />
								<strong class="big2 red01">２０２５年５月末までのお申し込みで</strong></p>
								<ol class="m30-l">
								<li>初回システム使用料　50％OFF</li>
								<li>普通郵便料金の約50％OFFの特約ゆうメール無料アドバイス<br />信書部分の変更案を提案</li>
								<li>専門コンサルタントによる戦略相談（60分）を無料ZOOM進呈<br />予算に合った最適な方法を提案します<br />
									※業種業態使用目的により使い方が変わります。<br />　 効果を出したい場合は必ず相談ください。<br />
									※1000通発送でDMトラッカー使用料　3万円～</li>
								</ol>
							</div>

							<table>
								<tr>
									<th class="p0-r">
										<em>備考</em>
										<span class="english">remarks</span>
										<span class="normal"><br />ご質問がありましたら<br />記入ください</span>
									</th>
									<td>
										<textarea name="remarks"><?php echo e($form->get('remarks')); ?></textarea>
									</td>
								</tr>
							</table>

							<div class="m20-t al-c">
								<p>
									<strong>電話でのお問合せ　0561-37-2027　担当：加藤<br />【営業時間/9:00～18:00　休日/土日祝祭日】</strong><br />
									送信後、３時間以内（当社営業日）に返信いたします。 万一営業日３時間以内に連絡が届かない場合は、<br />
									システム上のトラブルか、 お客様の入力したメールアドレスが間違っている可能性があります。<br />
									その場合は、再度送信いただくか、0561-37-2027　【月～金　9：00～18：00】　加藤までお電話下さい。
									<br /><br />
									下記同意の上、「モニター応募する」ボタンを押してください。
								</p>
							</div>

							<div class="m20-t al-c">
								<div id="privacy_policy">
								<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/privacy_policy.html"; ?>
								</div>
							</div>


							<div id="agree">
								<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> 上記内容を確認および了承する</label>
								<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
							</div>

							<div id="button_block">
<?php /* 								<p class="m10-b">3時間以内に返信します <span class="small">（※営業時間内に限ります）</span></p> */ ?>
								<button type="submit" class="btn btn-form btn-large">問合せする</button>
<?php /* 								<p class="m10-t red">先着５名になります</p> */ ?>
							</div>
							<input type="hidden" name="recaptchaToken" id="recaptchaToken" />
						</form>

					</div>
					<!--△メインコンテンツ-->

				</div>
				<!--/main-in-->

				<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/go_top.html"; ?>

				<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/footer.html"; ?>
			</div>
			<!--/main-->
			<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/header.html"; ?>

			<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/gnavi.html"; ?>
		</div>


		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_bottom.html"; ?>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld52WEpAAAAAGm7iSPDcLjOdwrAkDx9BPuLlTCy"></script>
<script>
document.getElementById('myform').addEventListener('submit', onSubmit);
function onSubmit(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ld52WEpAAAAAGm7iSPDcLjOdwrAkDx9BPuLlTCy', {action: 'submit'}).then(function(token) {
            var recaptchaToken = document.getElementById('recaptchaToken');
                    recaptchaToken.value = token;
                    document.getElementById('myform').submit();
        });
    });
}
</script>
	</body>
</html>