<?php
// 2021.5.11 解除:スプレッドシート書き込み
// require_once("../price/lib/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
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

<style type="text/css">
<!--
.merit_list_head{
    font-size: 17px;
    margin: 70px auto 10px;
}
ul.merit_list{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    margin: 0 auto 60px;
    list-style-type: none;
    font-size: 2.9vw;
}
ul.merit_list li{
    width: 47%;
    margin: 1%;
    padding: 10px 0;
    border: 1px solid #e3e5b8;
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
.mail_form .list ul {
    margin: 0 0 -8px -10px;
}
ul.merit_list{
    width: 91%;
}
ul.merit_list li{
    width: 31%;
    font-size: 14px;
}
.btn-large {
    width: 50%;
}
}
-->
</style>
<style type="text/css">
<!--
.mail_form .list ul li {
    float: none;
}
-->
</style>
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
						<img src="/images/common/mtop_copy8.png" alt="発送のみ　最上部画像" />
					</div>
					<!--/メインイメージ-->
*/ ?>

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">発送のみ お見積り</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<!--conts-->
						<h2 class="ttl01_wide">発送のみ　お見積り</h2>


<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>

						<form method="post" role="form" action="">
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
										<input type="text" name="name01" class="narrow" value="<?php echo e($form->get('name01')); ?>" />
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
										<input type="text" name="fax" class="middle" value="<?php echo e($form->get('fax')); ?>" />
										<?php echo $form->error('fax', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>発送予定の数</em>
										<span class="must">必須</span>
									</th>
									<td>
										<input type="text" name="number" class="narrow" value="<?php echo e($form->get('number')); ?>" /> 通
										<?php echo $form->error('number', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>依頼内容</em>
										<span class="must">必須</span>
									</th>
									<td class="list copies">
										<ul>
											<li><label><input type="radio" name="copies" value="封入済み封筒  ＋ 宛名ラベル当社作成"<?php if ($form->get('copies') == '封入済み封筒  ＋ 宛名ラベル当社作成' ) : ?> checked="checked"<?php endif; ?> />封入済み封筒  ＋ 宛名ラベル当社作成</label></li>
											<li><label><input type="radio" name="copies" value="印刷済みＡ４ハガキ + 当社にて宛名ダイレクト印字"<?php if ($form->get('copies') == '印刷済みＡ４ハガキ + 当社にて宛名ダイレクト印字' ) : ?> checked="checked"<?php endif; ?> />印刷済みＡ４ハガキ + 当社にて宛名ダイレクト印字</label></li>
										</ul>
<?php /*
											<li><label><input type="radio" name="copies" value="その他"<?php if ($form->get('copies') == 'その他' ) : ?> checked="checked"<?php endif; ?> />その他</label></li>

										<span class="example">（冊子・ホッチキスでとめてあるものは１部とします）</span>
*/ ?>
										<?php echo $form->error('copies', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>印刷内容・現状・お困りごと・<br />条件などをお書き下さい</em>
										<span class="english">inquiry body</span>
										<span class="normal"><br />分かりにくい・面倒な時は遠慮なくお電話ください<br />電話：0561-37-2027</span>
									</th>
									<td>
										<textarea name="comment"><?php echo e($form->get('comment')); ?></textarea>
									</td>
								</tr>
							</table>
<?php
/*
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
*/
?>

							<div class="m20-t al-c">
								<p>当社 <a href="https://test.dm110.jp/kiyaku">プライバシーポリシー・利用規約</a> に同意の上、送信して下さい</p>
							</div>

							<div id="agree">
								<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> プライバシーポリシー・利用規約に同意する</label>
								<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
							</div>


							<div id="button_block">
								<p class="merit_list_head"><strong>6つの無料</strong></p>
								<ul class="merit_list">
									<li>無料　発送証明をメール添付</li>
									<li>無料　宛名データの削除証明</li>
									<li>無料　信書チェック・対応策</li>
									<li>個人情報漏洩保険加入(2億）</li>
									<li>進行状況 最低5回以上報告</li>
									<li>最初から最後まで専任担当者</li>
								</ul>

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