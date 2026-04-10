<?php
require_once("../src/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>フィルム封筒ご注文　DM(ダイレクトメール)発送代行センター</title>
		<meta name="Keywords" content="御見積り,発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
		<meta name="Description" content="DM発送代行センターの御見積りのページです。" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

	</head>
	<body class="mail_form" id="filmfuutou">

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

		<div id="container">

			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

					<!--メインイメージ-->
					<div id="main-image1">
						<img src="/images/common/visual_form_filmfuutou.jpg" />
					</div>
					<!--/メインイメージ-->

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">フィルム封筒ご注文</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<!--conts-->
						<h2><img src="/images/common/h2_filmfuutou.jpg" /></h2>
						<br />
						<p>営業日の午後4時30分までに注文頂きますと当日発送となります。<br /> （大量注文等が重なる場合、発送が遅れる場合がありますので、お急ぎの場合は必ず電話確認をお願い致します。）<br /> <br /> また、送料と代金引換手数料は料金に含まれます（北海道・沖縄・1部地域を除く） </p>
						<br /><br />

<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>

						<form method="post" role="form" action="#main-contents3">
							<table>
								<tr<?php if ($form->is_error('comapny_name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>御社名</em>
										<span class="must">必須</span>
										<span class="english">company name</span>
									</th>
									<td>
										<input type="text" name="comapny_name" class="middle" value="<?php echo e($form->get('comapny_name')); ?>" />
										<span class="example">例）　株式会社メディアボックス</span>
										<?php echo $form->error('comapny_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
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
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>ご連絡の取れる<br>電子メール</em>
										<span class="must">必須</span>
										<span class="english">mail address</span>
									</th>
									<td>
										<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

								<tr<?php if ($form->is_error('zip')) : ?> has-error<?php endif; ?>>
									<th>
										<em>郵便番号</em>
										<span class="english">postcode</span>
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
										<span class="english">company　address</span>
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
								<tr<?php if ($form->is_error('tel')) : ?> has-error<?php endif; ?>>
									<th>
										<em>会社の電話番号</em>
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
										<em>会社のFAX番号</em>
										<span class="english">fax number</span>
									</th>
									<td>
										<input type="text" name="fax" class="middle" value="<?php echo e($form->get('fax')); ?>" />
									</td>
								</tr>
								<tr>
									<th>
										<em>ご注文枚数</em>
										<span class="must">必須</span>
										<span class="english">number of orders</span>
									</th>
									<td>
										<select name="number">
											<option value="">【選択して下さい】</option>
											<option value="">注文枚数(消費税含む)</option>
											<option value="500枚　4752円"<?php if ($form->get('number') == '500枚　4752円' ) : ?> selected="selected"<?php endif; ?>>500枚　4752円</option>
											<option value="1000枚　6696円"<?php if ($form->get('number') == '1000枚　6696円' ) : ?> selected="selected"<?php endif; ?>>1000枚　6696円</option>
											<option value="2000枚　13392円"<?php if ($form->get('number') == '2000枚　13392円' ) : ?> selected="selected"<?php endif; ?>>2000枚　13392円</option>
											<option value="3000枚　17820円"<?php if ($form->get('number') == '3000枚　17820円' ) : ?> selected="selected"<?php endif; ?>>3000枚　17820円</option>
											<option value="4000枚　23760円"<?php if ($form->get('number') == '4000枚　23760円' ) : ?> selected="selected"<?php endif; ?>>4000枚　23760円</option>
											<option value="5000枚　25920円"<?php if ($form->get('number') == '5000枚　25920円' ) : ?> selected="selected"<?php endif; ?>>5000枚　25920円</option>
											<option value="6000枚　31104円"<?php if ($form->get('number') == '6000枚　31104円' ) : ?> selected="selected"<?php endif; ?>>6000枚　31104円</option>
											<option value="7000枚　36288円"<?php if ($form->get('number') == '7000枚　36288円' ) : ?> selected="selected"<?php endif; ?>>7000枚　36288円</option>
											<option value="8000枚　41472円"<?php if ($form->get('number') == '8000枚　41472円' ) : ?> selected="selected"<?php endif; ?>>8000枚　41472円</option>
											<option value="9000枚　46656円"<?php if ($form->get('number') == '9000枚　46656円' ) : ?> selected="selected"<?php endif; ?>>9000枚　46656円</option>
											<option value="10000枚　47520円"<?php if ($form->get('number') == '10000枚　47520円' ) : ?> selected="selected"<?php endif; ?>>10000枚　47520円</option>
											<option value="15000枚　71280円"<?php if ($form->get('number') == '15000枚　71280円' ) : ?> selected="selected"<?php endif; ?>>15000枚　71280円</option>
											<option value="20000枚　95040円"<?php if ($form->get('number') == '20000枚　95040円' ) : ?> selected="selected"<?php endif; ?>>20000枚　95040円</option>
											<option value="25000枚　118800円"<?php if ($form->get('number') == '25000枚　118800円' ) : ?> selected="selected"<?php endif; ?>>25000枚　118800円</option>
											<option value="30000枚　132840円"<?php if ($form->get('number') == '30000枚　132840円' ) : ?> selected="selected"<?php endif; ?>>30000枚　132840円</option>
										</select>
										<?php echo $form->error('number', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>当HPをどこで<br />知りましたか？</em>
										<span class="must">必須</span>
										<span class="english">where did you hear?</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="where" value="Yahoo"<?php if ($form->get('where') == 'Yahoo' ) : ?> checked="checked"<?php endif; ?> />Yahoo</label></li>
											<li><label><input type="radio" name="where" value="Google"<?php if ($form->get('where') == 'Google' ) : ?> checked="checked"<?php endif; ?> />Google</label></li>
											<li><label><input type="radio" name="where" value="MSN"<?php if ($form->get('where') == 'MSN' ) : ?> checked="checked"<?php endif; ?> />MSN</label></li>
											<li><label><input type="radio" name="where" value="goo"<?php if ($form->get('where') == 'goo' ) : ?> checked="checked"<?php endif; ?> />goo</label></li>
											<li><label><input type="radio" name="where" value="その他検索エンジン"<?php if ($form->get('where') == 'その他検索エンジン' ) : ?> checked="checked"<?php endif; ?> />その他検索エンジン</label></li>
											<li><label><input type="radio" name="where" value="帝国データバンク"<?php if ($form->get('where') == '帝国データバンク' ) : ?> checked="checked"<?php endif; ?> />帝国データバンク</label></li>
											<li><label><input type="radio" name="where" value="日経BP"<?php if ($form->get('where') == '日経BP' ) : ?> checked="checked"<?php endif; ?> />日経BP</label></li>
											<li><label><input type="radio" name="where" value="ビジネスチャンス"<?php if ($form->get('where') == 'ビジネスチャンス' ) : ?> checked="checked"<?php endif; ?> />ビジネスチャンス</label></li>
											<li><label><input type="radio" name="where" value="その他紹介"<?php if ($form->get('where') == 'その他紹介' ) : ?> checked="checked"<?php endif; ?> />その他紹介</label></li>
											<li><label><input type="radio" name="where" value="既存取引"<?php if ($form->get('where') == '既存取引' ) : ?> checked="checked"<?php endif; ?> />既存取引</label></li>
											<li><label><input type="radio" name="where" value="facebook"<?php if ($form->get('where') == 'facebook' ) : ?> checked="checked"<?php endif; ?> />facebook</label></li>
											<li><label><input type="radio" name="where" value="その他"<?php if ($form->get('where') == 'その他' ) : ?> checked="checked"<?php endif; ?> />その他</label></li>
										</ul>
										<?php echo $form->error('where', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>検索キーワード・紹介者名<br />紹介ホームページ名</em>
										<span class="english">introducing agency</span>
									</th>
									<td>
										<input type="text" name="keyword" class="middle" value="<?php echo e($form->get('keyword')); ?>" />
										<span class="example">例）　ダイレクトメール</span>
									</td>
								</tr>
								<tr>
									<th>
										<em>印刷内容・現状・お困りごと・<br />条件などをお書き下さい</em>
										<span class="english">inquiry body</span>
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
									下記同意の上、「確認画面へ」ボタンを押してください。
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
								<button type="submit" class="btn btn-danger btn-large">入力内容の確認画面へ</button>
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