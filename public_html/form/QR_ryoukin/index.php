<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>QRコード作成申込フォーム　DM発送代行センター（QRDM）</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://www.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、QRコード・サンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		<link rel="canonical" href="https://www.dm110.jp<?php echo str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__); ?>/">

<style type="text/css">
<!--
.underline-yellow {
    background: linear-gradient(transparent 60%, #ffff66 60%);
}
.underline-pink {
    background: linear-gradient(transparent 60%, #f1bed0 60%);
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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">QRコード作成申込フォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">QRコード作成申込フォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20"><strong class="big2 red01">当社にてDM発送する場合に使用できます。</strong><br />
						※ 紙質はマット紙・上質紙になります。<br />
						※ QRコード印刷部分の空白は50mm×50mmが必要です。<br />
						※ 料金は【QRコード総個数（発送件数×1件あたりのQRコード個数）】×20円＋2万円　になります。</p>

						<div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center">
							<p class="al-c tac m40"><img src="/images/2024/qrm_rei_sub3.png" width="657" height="925" alt="" style="width:250px;max-width:97%;height:auto;border:1px solid #bdd3dc">
							<p class="al-c tac m40"><img src="./image.png" width="900" height="620" alt="" style="width:500px;max-width:97%;height:auto"></p>
						</div>

<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>

						<form id="myform" method="post" role="form" action="">
							<table>
								<tr>
									<th>
										<em>御社名</em>
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
										<em>ご連絡の取れる<br />電子メール</em>
										<span class="must">必須</span>
										<span class="english">mail address</span>
									</th>
									<td>
										<input type="text" name="email" class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>QRコード個数</em>
										<span class="must">必須</span>
										<span class="english">QR code number</span>
									</th>
									<td>
										発送件数：<input type="text" name="qr_num1" class="" size="5" placeholder="例　100" value="<?php echo e($form->get('qr_num1')); ?>" /> 件<br>
										発送1件あたりのQRコード：<select id="qr_num2" name="qr_num2">
												<option value="1"<?php if ($form->get('qr_num2') == '1' ) : ?> selected="selected"<?php endif; ?>>1</option>
												<option value="2"<?php if ($form->get('qr_num2') == '2' ) : ?> selected="selected"<?php endif; ?>>2</option>
												<option value="3"<?php if ($form->get('qr_num2') == '3' ) : ?> selected="selected"<?php endif; ?>>3</option>
												<option value="4"<?php if ($form->get('qr_num2') == '4' ) : ?> selected="selected"<?php endif; ?>>4</option>
												<option value="5"<?php if ($form->get('qr_num2') == '5' ) : ?> selected="selected"<?php endif; ?>>5</option>
												<option value="6"<?php if ($form->get('qr_num2') == '6' ) : ?> selected="selected"<?php endif; ?>>6</option>
												<option value="7"<?php if ($form->get('qr_num2') == '7' ) : ?> selected="selected"<?php endif; ?>>7</option>
												<option value="8"<?php if ($form->get('qr_num2') == '8' ) : ?> selected="selected"<?php endif; ?>>8</option>
												<option value="9"<?php if ($form->get('qr_num2') == '9' ) : ?> selected="selected"<?php endif; ?>>9</option>
												<option value="10"<?php if ($form->get('qr_num2') == '10' ) : ?> selected="selected"<?php endif; ?>>10</option>
											</select> 個
										<?php echo $form->error('qr_num1', '<span class="error">', '</span>'); ?>
										<?php echo $form->error('qr_num2', '<span class="error">', '</span>'); ?>
										<div style="font-size:12px;padding:20px;background-color:#dde3de;">
											例）送り状（送付住所が印刷してある紙）に<strong class="underline-yellow">QRコード4つ</strong> の場合<br>
											　　発送1件あたりのQRコード ⇒ <strong class="underline-pink">[4] 個</strong><br><br>
											例）送り状（送付住所が印刷してある紙）に<strong class="underline-yellow">QRコード3つ</strong>、<br>　＋添え状（2枚目の紙）に<strong class="underline-yellow">QRコード1つ</strong> の場合<br>
											　　発送1件あたりのQRコード ⇒ <strong class="underline-pink">[4] 個</strong><br><br>
											例）送り状（送付住所が印刷してある紙）に<strong class="underline-yellow">QRコード4つ</strong>、<br>　＋2枚目の紙に<strong class="underline-yellow">QRコード1つ</strong>、<br>　＋3枚目の紙に<strong class="underline-yellow">QRコード1つ</strong> の場合<br>
											　　発送1件あたりのQRコード ⇒ <strong class="underline-pink">[6] 個</strong>
										</div>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>QRコードの内容</em>
										<span class="english">QR code</span>
									</th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr1_url" class="middle" placeholder="例　https://www.dm110.jp/qrm" value="<?php echo e($form->get('qr1_url')); ?>" />
											<?php echo $form->error('qr1_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr1_copy" class="middle" placeholder="例　NEW集客アップ方法" value="<?php echo e($form->get('qr1_copy')); ?>" />
											<?php echo $form->error('qr1_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr1_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr1_mail')); ?>" />
											<br /><span class="pc_view">　　　　　　　</span>※QRコードからHPにアクセスがあった内容を知らせるメールアドレスです。<br />
											<?php echo $form->error('qr1_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr2_url" class="middle" placeholder="例　https://www.dm110.jp/qrm_m_d" value="<?php echo e($form->get('qr2_url')); ?>" />
											<?php echo $form->error('qr2_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr2_copy" class="middle" placeholder="例　QRDMのメリットとデメリット" value="<?php echo e($form->get('qr2_copy')); ?>" />
											<?php echo $form->error('qr2_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr2_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr2_mail')); ?>" />
											<?php echo $form->error('qr2_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr3_url" class="middle" placeholder="例　https://www.dm110.jp/qrm_rei" value="<?php echo e($form->get('qr3_url')); ?>" />
											<?php echo $form->error('qr3_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr3_copy" class="middle" placeholder="例　QRDMの実例集" value="<?php echo e($form->get('qr3_copy')); ?>" />
											<?php echo $form->error('qr3_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr3_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr3_mail')); ?>" />
											<?php echo $form->error('qr3_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr4_url" class="middle" placeholder="例　https://www.dm110.jp/qrm_use" value="<?php echo e($form->get('qr4_url')); ?>" />
											<?php echo $form->error('qr4_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr4_copy" class="middle" placeholder="例　DM×WEBを使って売上UP" value="<?php echo e($form->get('qr4_copy')); ?>" />
											<?php echo $form->error('qr4_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr4_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr4_mail')); ?>" />
											<?php echo $form->error('qr4_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr5_url" class="middle" placeholder="例　https://www.dm110.jp/soejyou.html" value="<?php echo e($form->get('qr5_url')); ?>" />
											<?php echo $form->error('qr5_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr5_copy" class="middle" placeholder="例　効果のある添え状とは" value="<?php echo e($form->get('qr5_copy')); ?>" />
											<?php echo $form->error('qr5_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr5_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr5_mail')); ?>" />
											<?php echo $form->error('qr5_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr6_url" class="middle" placeholder="例　https://www.dm110.jp/ichiran.html" value="<?php echo e($form->get('qr6_url')); ?>" />
											<?php echo $form->error('qr6_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr6_copy" class="middle" placeholder="例　料金表" value="<?php echo e($form->get('qr6_copy')); ?>" />
											<?php echo $form->error('qr6_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr6_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr6_mail')); ?>" />
											<?php echo $form->error('qr6_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr7_url" class="middle" placeholder="例　https://www.dm110.jp/kaisyaannai.html" value="<?php echo e($form->get('qr7_url')); ?>" />
											<?php echo $form->error('qr7_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr7_copy" class="middle" placeholder="例　メディアボックス会社概要" value="<?php echo e($form->get('qr7_copy')); ?>" />
											<?php echo $form->error('qr7_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr7_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr7_mail')); ?>" />
											<?php echo $form->error('qr7_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr8_url" class="middle" placeholder="例　https://www.dm110.jp/torihiki_jisseki.htm" value="<?php echo e($form->get('qr8_url')); ?>" />
											<?php echo $form->error('qr8_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr8_copy" class="middle" placeholder="例　8521社の取引実績" value="<?php echo e($form->get('qr8_copy')); ?>" />
											<?php echo $form->error('qr8_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr8_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr8_mail')); ?>" />
											<?php echo $form->error('qr8_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr9_url" class="middle" placeholder="例　https://www.dm110.jp/form/price/" value="<?php echo e($form->get('qr9_url')); ?>" />
											<?php echo $form->error('qr9_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr9_copy" class="middle" placeholder="例　お見積もりフォームはこちら" value="<?php echo e($form->get('qr9_copy')); ?>" />
											<?php echo $form->error('qr9_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr9_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr9_mail')); ?>" />
											<?php echo $form->error('qr9_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr10_url" class="middle" placeholder="例　https://www.dm110.jp/" value="<?php echo e($form->get('qr10_url')); ?>" />
											<?php echo $form->error('qr10_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr10_copy" class="middle" placeholder="例　DM発送代行センター" value="<?php echo e($form->get('qr10_copy')); ?>" />
											<?php echo $form->error('qr10_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr10_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr10_mail')); ?>" />
											<?php echo $form->error('qr10_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
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
									下記同意の上、「QRコード申し込む」ボタンを押してください。
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
<?php //								<p class="m10-b">3時間以内に返信します <span class="small">（※営業時間内に限ります）</span></p> ?>
								<button type="submit" class="btn btn-form btn-large">QRコード申し込む</button>
<?php //								<p class="m10-t red">先着５名になります</p> ?>
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