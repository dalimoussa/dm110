<?php
require_once("../price_src/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>

		<script src="https://www.googleoptimize.com/optimize.js?id=OPT-T3QQ2J9"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DM発送代行 お見積り　DM(ダイレクトメール)発送代行センター</title>
		<meta name="Keywords" content="御見積り,発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
		<meta name="Description" content="DM発送代行センターの御見積りのページです。" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		<link rel="canonical" href="https://www.dm110.jp/form/price/">

<style type="text/css">
<!--
@media (min-width:721px){
.mail_form table th,
.mail_form table td {
	font-size: 15px;
}
.mail_form table th {
	width: 230px;
}
}
-->
</style>

<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_2022/visualwebsiteoptimizer.php"; ?>


	</head>
	<body class="mail_form" id="price">

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

		<div id="container">

			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

<?php /*
					<!--メインイメージ-->
					<div id="main-image1">
						<img src="/images/common/mtop_copy7.jpg" alt="" />
					</div>
					<!--/メインイメージ-->

					<div class="btn-form-hagaki">
						<div>
							<a href="/form/A4hagaki/">A4ハガキの見積フォームはこちら ≫</a>
						</div>
						<div>
							<a href="/form/A4accyaku_hagaki/">A4圧着ハガキの見積フォームはこちら ≫</a>
						</div>
					</div>
*/ ?>
					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">封筒に封入発送コース（基本）お見積り</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<!--conts-->
						<h2 class="ttl01_wide">封筒に封入発送コース（基本）お見積り</h2>


<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>

						<form method="post" role="form" action="#main-contents3">
							<table>
								<tr>
									<th>
										<em>御社名</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="comapny_name" class="middle" value="<?php echo e($form->get('comapny_name')); ?>" />
										<span class="example">例）　株式会社メディアボックス</span>
										<?php echo $form->error('comapny_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>部署名</em>
									</th>
									<td>
										<input type="text" name="department_name" class="middle" value="<?php echo e($form->get('department_name')); ?>" />
										<?php echo $form->error('department_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お名前</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="name01" class="middle" value="<?php echo e($form->get('name01')); ?>" />
										<?php echo $form->error('name01', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>ご連絡の取れる<br />電子メール</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th>
										<em>郵便番号</em>
									</th>
									<td>
										<input type="text" name="zip" class="narrow" value="<?php echo e($form->get('zip')); ?>" onkeyup="AjaxZip3.zip2addr(this,'','pref','address1','address2');" />
										<span class="example">
											<a href="https://www.post.japanpost.jp/zipcode/" target="_blank">郵便番号を調べる</a> 半角英数字のみ　例） 123-4567、1234567
										</span>
										<?php echo $form->error('zip', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>会社の住所</em>
										<span class="must">必須</span>
									</th>
									<td>
										<div>
											<span>都道府県</span>
											<select name="pref">
												<option value="" selected="selected">【選択して下さい】</option>
												<optgroup label="北海道・東北地方">
													<option value="北海道"<?php if ($form->get('pref') == '北海道' ) : ?> selected="selected"<?php endif; ?>>北海道</option>
													<option value="青森県"<?php if ($form->get('pref') == '青森県' ) : ?> selected="selected"<?php endif; ?>>青森県</option>
													<option value="岩手県"<?php if ($form->get('pref') == '岩手県' ) : ?> selected="selected"<?php endif; ?>>岩手県</option>
													<option value="秋田県"<?php if ($form->get('pref') == '秋田県' ) : ?> selected="selected"<?php endif; ?>>秋田県</option>
													<option value="宮城県"<?php if ($form->get('pref') == '宮城県' ) : ?> selected="selected"<?php endif; ?>>宮城県</option>
													<option value="山形県"<?php if ($form->get('pref') == '山形県' ) : ?> selected="selected"<?php endif; ?>>山形県</option>
													<option value="福島県"<?php if ($form->get('pref') == '福島県' ) : ?> selected="selected"<?php endif; ?>>福島県</option>
												</optgroup>
												<optgroup label="関東地方">
													<option value="栃木県"<?php if ($form->get('pref') == '栃木県' ) : ?> selected="selected"<?php endif; ?>>栃木県</option>
													<option value="群馬県"<?php if ($form->get('pref') == '群馬県' ) : ?> selected="selected"<?php endif; ?>>群馬県</option>
													<option value="茨城県"<?php if ($form->get('pref') == '茨城県' ) : ?> selected="selected"<?php endif; ?>>茨城県</option>
													<option value="埼玉県"<?php if ($form->get('pref') == '埼玉県' ) : ?> selected="selected"<?php endif; ?>>埼玉県</option>
													<option value="東京都"<?php if ($form->get('pref') == '東京都' ) : ?> selected="selected"<?php endif; ?>>東京都</option>
													<option value="千葉県"<?php if ($form->get('pref') == '千葉県' ) : ?> selected="selected"<?php endif; ?>>千葉県</option>
													<option value="神奈川県"<?php if ($form->get('pref') == '神奈川県' ) : ?> selected="selected"<?php endif; ?>>神奈川県</option>
												</optgroup>
												<optgroup label="中部地方">
													<option value="山梨県"<?php if ($form->get('pref') == '山梨県' ) : ?> selected="selected"<?php endif; ?>>山梨県</option>
													<option value="長野県"<?php if ($form->get('pref') == '長野県' ) : ?> selected="selected"<?php endif; ?>>長野県</option>
													<option value="新潟県"<?php if ($form->get('pref') == '新潟県' ) : ?> selected="selected"<?php endif; ?>>新潟県</option>
													<option value="富山県"<?php if ($form->get('pref') == '富山県' ) : ?> selected="selected"<?php endif; ?>>富山県</option>
													<option value="石川県"<?php if ($form->get('pref') == '石川県' ) : ?> selected="selected"<?php endif; ?>>石川県</option>
													<option value="福井県"<?php if ($form->get('pref') == '福井県' ) : ?> selected="selected"<?php endif; ?>>福井県</option>
													<option value="静岡県"<?php if ($form->get('pref') == '静岡県' ) : ?> selected="selected"<?php endif; ?>>静岡県</option>
													<option value="岐阜県"<?php if ($form->get('pref') == '岐阜県' ) : ?> selected="selected"<?php endif; ?>>岐阜県</option>
													<option value="愛知県"<?php if ($form->get('pref') == '愛知県' ) : ?> selected="selected"<?php endif; ?>>愛知県</option>
												</optgroup>
												<optgroup label="近畿地方">
													<option value="三重県"<?php if ($form->get('pref') == '三重県' ) : ?> selected="selected"<?php endif; ?>>三重県</option>
													<option value="滋賀県"<?php if ($form->get('pref') == '滋賀県' ) : ?> selected="selected"<?php endif; ?>>滋賀県</option>
													<option value="京都府"<?php if ($form->get('pref') == '京都府' ) : ?> selected="selected"<?php endif; ?>>京都府</option>
													<option value="大阪府"<?php if ($form->get('pref') == '大阪府' ) : ?> selected="selected"<?php endif; ?>>大阪府</option>
													<option value="兵庫県"<?php if ($form->get('pref') == '兵庫県' ) : ?> selected="selected"<?php endif; ?>>兵庫県</option>
													<option value="奈良県"<?php if ($form->get('pref') == '奈良県' ) : ?> selected="selected"<?php endif; ?>>奈良県</option>
													<option value="和歌山県"<?php if ($form->get('pref') == '和歌山県' ) : ?> selected="selected"<?php endif; ?>>和歌山県</option>
												</optgroup>
												<optgroup label="四国地方">
													<option value="徳島県"<?php if ($form->get('pref') == '徳島県' ) : ?> selected="selected"<?php endif; ?>>徳島県</option>
													<option value="香川県"<?php if ($form->get('pref') == '香川県' ) : ?> selected="selected"<?php endif; ?>>香川県</option>
													<option value="愛媛県"<?php if ($form->get('pref') == '愛媛県' ) : ?> selected="selected"<?php endif; ?>>愛媛県</option>
													<option value="高知県"<?php if ($form->get('pref') == '高知県' ) : ?> selected="selected"<?php endif; ?>>高知県</option>
												</optgroup>
												<optgroup label="中国地方">
													<option value="鳥取県"<?php if ($form->get('pref') == '鳥取県' ) : ?> selected="selected"<?php endif; ?>>鳥取県</option>
													<option value="島根県"<?php if ($form->get('pref') == '島根県' ) : ?> selected="selected"<?php endif; ?>>島根県</option>
													<option value="岡山県"<?php if ($form->get('pref') == '岡山県' ) : ?> selected="selected"<?php endif; ?>>岡山県</option>
													<option value="広島県"<?php if ($form->get('pref') == '広島県' ) : ?> selected="selected"<?php endif; ?>>広島県</option>
													<option value="山口県"<?php if ($form->get('pref') == '山口県' ) : ?> selected="selected"<?php endif; ?>>山口県</option>
												</optgroup>
												<optgroup label="九州・沖縄地方">
													<option value="福岡県"<?php if ($form->get('pref') == '福岡県' ) : ?> selected="selected"<?php endif; ?>>福岡県</option>
													<option value="佐賀県"<?php if ($form->get('pref') == '佐賀県' ) : ?> selected="selected"<?php endif; ?>>佐賀県</option>
													<option value="長崎県"<?php if ($form->get('pref') == '長崎県' ) : ?> selected="selected"<?php endif; ?>>長崎県</option>
													<option value="大分県"<?php if ($form->get('pref') == '大分県' ) : ?> selected="selected"<?php endif; ?>>大分県</option>
													<option value="熊本県"<?php if ($form->get('pref') == '熊本県' ) : ?> selected="selected"<?php endif; ?>>熊本県</option>
													<option value="宮崎県"<?php if ($form->get('pref') == '宮崎県' ) : ?> selected="selected"<?php endif; ?>>宮崎県</option>
													<option value="鹿児島県"<?php if ($form->get('pref') == '鹿児島県' ) : ?> selected="selected"<?php endif; ?>>鹿児島県</option>
													<option value="沖縄県"<?php if ($form->get('pref') == '沖縄県' ) : ?> selected="selected"<?php endif; ?>>沖縄県</option>
												</optgroup>
											</select>
											<?php echo $form->error('pref', '<span class="error">', '</span>'); ?>
										</div>

										<div>
											<span>市区町村</span>
											<input type="text" name="address1" class="middle" value="<?php echo e($form->get('address1')); ?>" />
											<?php echo $form->error('address1', '<span class="error">', '</span>'); ?>
										</div>

										<div>
											<span>丁目番地</span>
											<input type="text" name="address2" class="wide" value="<?php echo e($form->get('address2')); ?>" />
											<?php echo $form->error('address2', '<span class="error">', '</span>'); ?>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>会社の電話番号</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="tel" class="middle" value="<?php echo e($form->get('tel')); ?>" />
										<?php echo $form->error('tel', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>会社のFAX番号</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="fax" class="middle" value="<?php echo e($form->get('fax')); ?>" />無い場合は「無し」と記入ください。
										<?php echo $form->error('fax', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>封入物の種類</em>
										<span class="must">必須</span>
									</th>

									<td class="print">
										<div>
											<label><input type="checkbox" name="kinds1" value="紙"<?php if ($form->get('kinds1')) : ?> checked="checked"<?php endif; ?> />紙</label>
										</div>
										<div>
											<label><input type="checkbox" name="kinds2" value="ホッチキス止めの紙"<?php if ($form->get('kinds2')) : ?> checked="checked"<?php endif; ?> />ホッチキス止めの紙</label>
										</div>
										<div>
											<label><input type="checkbox" name="kinds3" value="小冊子"<?php if ($form->get('kinds3')) : ?> checked="checked"<?php endif; ?> />小冊子</label>
										</div>
										<div>
											<label><input type="checkbox" name="kinds4" value="カタログ"<?php if ($form->get('kinds4')) : ?> checked="checked"<?php endif; ?> />カタログ</label>
										</div>
										<div>
											<label><input type="checkbox" name="kinds5" value="その他"<?php if ($form->get('kinds5')) : ?> checked="checked"<?php endif; ?> />その他</label>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>発送予定の数</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="number" class="narrow" value="<?php echo e($form->get('number')); ?>" /> 通(おおよそでもOKです）
										<?php echo $form->error('number', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th>
										<em>1つの封筒に入れる<br />予定部数</em>
										<span class="must">必須</span>
									</th>
									<td class="list copies">
										<ul>
											<li><label><input type="radio" name="copies" value="1部"<?php if ($form->get('copies') == '1部' ) : ?> checked="checked"<?php endif; ?> />1部</label></li>
											<li><label><input type="radio" name="copies" value="2部"<?php if ($form->get('copies') == '2部' ) : ?> checked="checked"<?php endif; ?> />2部</label></li>
											<li><label><input type="radio" name="copies" value="3部"<?php if ($form->get('copies') == '3部' ) : ?> checked="checked"<?php endif; ?> />3部</label></li>
											<li><label><input type="radio" name="copies" value="4部"<?php if ($form->get('copies') == '4部' ) : ?> checked="checked"<?php endif; ?> />4部</label></li>
											<li><label><input type="radio" name="copies" value="5部"<?php if ($form->get('copies') == '5部' ) : ?> checked="checked"<?php endif; ?> />5部</label></li>
											<li><label><input type="radio" name="copies" value="6部"<?php if ($form->get('copies') == '6部' ) : ?> checked="checked"<?php endif; ?> />6部</label></li>
											<li><label><input type="radio" name="copies" value="7部"<?php if ($form->get('copies') == '7部' ) : ?> checked="checked"<?php endif; ?> />7部</label></li>
											<li><label><input type="radio" name="copies" value="8部"<?php if ($form->get('copies') == '8部' ) : ?> checked="checked"<?php endif; ?> />8部</label></li>
											<li><label><input type="radio" name="copies" value="9部"<?php if ($form->get('copies') == '9部' ) : ?> checked="checked"<?php endif; ?> />9部</label></li>
											<li><label><input type="radio" name="copies" value="10部"<?php if ($form->get('copies') == '10部' ) : ?> checked="checked"<?php endif; ?> />10部</label></li>
											<li><label><input type="radio" name="copies" value="11部以上"<?php if ($form->get('copies') == '11部以上' ) : ?> checked="checked"<?php endif; ?> />11部以上</label></li>
										</ul>
										<span class="example">（冊子・ホッチキスでとめてあるものは１部とします）</span>
										<?php echo $form->error('copies', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th>
										<em>封筒の種類</em>
										<span class="must">必須</span>
									</th>
									<td class="list copies">
										<strong class="text15">当社封筒を使用</strong>
										<ul>
											<li><label><input type="radio" name="envelope" value="当社A4透明＠4円使用"<?php if ($form->get('envelope') == '当社A4透明＠4円使用' ) : ?> checked="checked"<?php endif; ?> />A4透明＠4円使用　</label></li>
											<li><label><input type="radio" name="envelope" value="当社角2紙封筒（当社で印刷）"<?php if ($form->get('envelope') == '当社角2紙封筒（当社で印刷）' ) : ?> checked="checked"<?php endif; ?> />角2紙封筒(当社で印刷) (※1)　</label></li>
											<li><label><input type="radio" name="envelope" value="当社長3紙封筒（当社で印刷）"<?php if ($form->get('envelope') == '当社長3紙封筒（当社で印刷）' ) : ?> checked="checked"<?php endif; ?> />長3紙封筒(当社で印刷) (※2)　</label></li>
											<li><label><input type="radio" name="envelope" value="当社封筒その他"<?php if ($form->get('envelope') == '当社封筒その他' ) : ?> checked="checked"<?php endif; ?> />その他</label></li>
										</ul>
										<strong class="text15">お客様から封筒支給</strong>
										<ul>
											<li class="text14"><label><input type="radio" name="envelope" value="テープ付き角2紙封筒（お客様から支給）"<?php if ($form->get('envelope') == 'テープ付き角2紙封筒（お客様から支給）' ) : ?> checked="checked"<?php endif; ?> />テープ付き角2紙封筒(お客様から支給) (※1)　</label></li>
											<li class="text14"><label><input type="radio" name="envelope" value="テープ無し角2紙封筒（お客様から支給）"<?php if ($form->get('envelope') == 'テープ無し角2紙封筒（お客様から支給）' ) : ?> checked="checked"<?php endif; ?> />テープ無し角2紙封筒(お客様から支給) (※1)</label></li>
											<li class="text14"><label><input type="radio" name="envelope" value="テープ付き長3紙封筒（お客様から支給）"<?php if ($form->get('envelope') == 'テープ付き長3紙封筒（お客様から支給）' ) : ?> checked="checked"<?php endif; ?> />テープ付き長3紙封筒(お客様から支給) (※2)　</label></li>
											<li class="text14"><label><input type="radio" name="envelope" value="テープ無し長3紙封筒（お客様から支給）"<?php if ($form->get('envelope') == 'テープ無し長3紙封筒（お客様から支給）' ) : ?> checked="checked"<?php endif; ?> />テープ無し長3紙封筒(お客様から支給) (※2)</label></li>
											<li><label><input type="radio" name="envelope" value="その他（お客様から支給）"<?php if ($form->get('envelope') == 'その他（お客様から支給）' ) : ?> checked="checked"<?php endif; ?> />その他</label></li>
										</ul>
										<span class="example">(※1)角2封筒：A4が折らずに入る封筒<br />(※2)長3封筒：A4を3つ折にして入れる封筒</span>
										<?php echo $form->error('envelope', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr>
									<th>
										<em>当社で印刷する場合(黒１色印刷)</em>
									</th>
									<td class="print">
										<div>
											<span>サイズ</span>
											<select id="print1_size" name="print1_size">
												<option value="">サイズ</option>
												<option value="A4"<?php if ($form->get('print1_size') == 'A4' ) : ?> selected="selected"<?php endif; ?>>A4</option>
												<option value="A3"<?php if ($form->get('print1_size') == 'A3' ) : ?> selected="selected"<?php endif; ?>>A3</option>
											</select>
										</div>
										<div>
											<span>紙の色</span>
											<select id="print1_color" name="print1_color">
												<option value="">紙の色</option>
												<option value="白色"<?php if ($form->get('print1_color') == '白色' ) : ?> selected="selected"<?php endif; ?>>白色</option>
												<option value="クリーム色"<?php if ($form->get('print1_color') == 'クリーム色' ) : ?> selected="selected"<?php endif; ?>>クリーム色</option>
												<option value="ピンク色"<?php if ($form->get('print1_color') == 'ピンク色' ) : ?> selected="selected"<?php endif; ?>>ピンク色</option>
												<option value="若草色"<?php if ($form->get('print1_color') == '若草色' ) : ?> selected="selected"<?php endif; ?>>若草色</option>
											</select>
										</div>
										<div>
											<span>片面・両面</span>
											<select id="print1_method" name="print1_method">
												<option value="">印刷方法</option>
												<option value="片面"<?php if ($form->get('print1_method') == '片面' ) : ?> selected="selected"<?php endif; ?>>片面</option>
												<option value="両面"<?php if ($form->get('print1_method') == '両面' ) : ?> selected="selected"<?php endif; ?>>両面</option>
											</select>
										</div>
										<div>
											<span>印刷枚数</span>
											<input type="text" name="print1_num" class="ex_narrow" value="<?php echo e($form->get('print1_num')); ?>" />枚
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>当社で印刷する場合(カラー印刷)</em>
									</th>
									<td class="print">
										<div>
											<span>サイズ</span>
											<select name="print2_size">
												<option value="">サイズ</option>
												<option value="A4"<?php if ($form->get('print2_size') == 'A4' ) : ?> selected="selected"<?php endif; ?>>A4</option>
												<option value="A3"<?php if ($form->get('print2_size') == 'A3' ) : ?> selected="selected"<?php endif; ?>>A3</option>
											</select>
										</div>
										<div>
											<span>片面・両面</span>
											<select name="print2_method">
												<option value="">印刷方法</option>
												<option value="片面"<?php if ($form->get('print2_method') == '片面' ) : ?> selected="selected"<?php endif; ?>>片面</option>
												<option value="両面"<?php if ($form->get('print2_method') == '両面' ) : ?> selected="selected"<?php endif; ?>>両面</option>
											</select>
										</div>
										<div>
											<span>印刷枚数</span>
											<input type="text" name="print2_num" class="ex_narrow" value="<?php echo e($form->get('print2_num')); ?>" />枚
										</div>
									</td>
								</tr>

								<tr>
									<th>
										<em>印刷内容・現状・お困りごと・条件などをお書きください<br />分かりにくい・面倒な時は遠慮なくお電話ください<br />電話：0561-37-2027</em>
									</th>
									<td>
										<textarea name="comment"><?php echo e($form->get('comment')); ?></textarea>
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
									下記同意の上、「とりあえず見積する」ボタンを押してください。
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
<?php // ABテスト
/*
	$abtest_str = ['','見積のあなたに 『 DMを安く送る方法(まとめ) 』 小冊子プレゼント','3時間以内に見積りを受け取れます <span class="small">（※営業時間内に限ります）</span>'];
	$abtest_value = ['','見積のあなたに小冊子プレゼント','3時間以内に見積りを受け取れます'];

	if( !empty($form->get('ab')) ){
		if ( $form->get('ab') == $abtest_value[2] ) { $abtest_sw = '2'; }
		else { $abtest_sw = '1'; }
	}else{
		if ( date('i')%2==1 ) { $abtest_sw = '2'; }
		else { $abtest_sw = '1'; }
	}
$abtest_sw = '2';
*/

/*
								<p class="m10-b"><?php echo $abtest_str[$abtest_sw]; ?></p>
								<input type="hidden" name="ab" value="<?php echo $abtest_value[$abtest_sw]; ?>" />
*/
?>

								<p class="m10-b">3時間以内に見積りを受け取れます <span class="small">（※営業時間内に限ります）</span></p>
								<button type="submit" class="btn btn-form btn-large">とりあえず見積する<br />【料金表より安くなります】</button>
								<p class="m10-t red">営業電話は致しません</p>
							</div>
						</form>


						<!--/cont-->

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

		<script src="//ah8.facebook.com/js/conversions/tracking.js"></script>
		<script type="text/javascript">
try {
  FB.Insights.impression({
     'id' : 6002569806122,
     'h' : 'de3a51d4b9',
     'value' : 3//この値はダイナミックに変更できます
  });
} catch (e) {}
      </script>

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_bottom.html"; ?>

	</body>
</html>