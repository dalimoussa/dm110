<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title> QRコード　モニターフォーム　DM発送代行センター（QRM）</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://test.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、QRコード・サンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">QRコード作成モニター フォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">QRコード作成モニター フォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20"><strong class="big2 red01">このモニターはゆうメール便で発送する内容物にプラスして使われるものです。<br />
							通常のDM発送を依頼してからの申し込みをお願いします。</strong><br />
							また　DM発送依頼時に　「QRコード作成モニターをお願いします」と<br />
							「印刷内容・現状・お困りごと・条件などをお書きください」にお書きください。</p>

						<p class="m20">モニター募集にご応募いただきありがとうございます。<br />
							DMとWEBを繋ぐ新しい方法をどうぞ体験ください。<br />
							様々な形があるWEBのそれぞれの方法にアクセスできる方法です。<br />
							また、アクセスのあった人に対して電話やメール、SNS他を連携してください。</p>

						<p class="al-c m40"><img src="./image.png" width="760" height="1080" alt="" style="width:550px;max-width:97%;height:auto;border:4px solid #ccc"></p>

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
<?php /*
								<tr>
									<th>
										<em>部署名</em>
										<span class="must">必須</span>
										<span class="english">department name</span>
									</th>
									<td>
										<input type="text" name="department_name" class="middle" value="<?php echo e($form->get('department_name')); ?>" />
										<span class="example">部署が必要ない場合は「なし」をご記入ください。</span>
										<?php echo $form->error('department_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
*/ ?>
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
										<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>封入物の内容<br />を記入ください</em>
										<span class="english">description</span>
									</th>
									<td>
										<textarea name="description" placeholder="例
メディアボックスをご利用いただいた皆様にDM通信をお届けしています。
DMやニュースレターの反応率アップにお役立てください。"><?php echo e($form->get('description')); ?></textarea>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>目次</em>
										<span class="english">contents</span>
									</th>
									<td>
										<textarea name="contents" placeholder="例
内容物は下記が同封されています。
・DM通信　「DM目的を考える」
・NEW集客UP方法"><?php echo e($form->get('contents')); ?></textarea>
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
											<input type="text" name="qr1_url" class="middle" placeholder="例　https://test.dm110.jp/" value="<?php echo e($form->get('qr1_url')); ?>" />
											<?php echo $form->error('qr1_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr1_copy" class="middle" placeholder="例　効果のある添え状とは" value="<?php echo e($form->get('qr1_copy')); ?>" />
											<?php echo $form->error('qr1_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr1_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr1_mail')); ?>" />
											<br />　　　　　　　※QRコードからHPにアクセスがあった内容を知らせるメールアドレスです。<br />
											<?php echo $form->error('qr1_mail', '<span class="error">', '</span>'); ?></div>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div>
											<span>飛び先URL　　</span>
											<input type="text" name="qr2_url" class="middle" placeholder="例　https://test.dm110.jp/" value="<?php echo e($form->get('qr2_url')); ?>" />
											<?php echo $form->error('qr2_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr2_copy" class="middle" placeholder="例　効果のある添え状とは" value="<?php echo e($form->get('qr2_copy')); ?>" />
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
											<input type="text" name="qr3_url" class="middle" placeholder="例　https://test.dm110.jp/" value="<?php echo e($form->get('qr3_url')); ?>" />
											<?php echo $form->error('qr3_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr3_copy" class="middle" placeholder="例　効果のある添え状とは" value="<?php echo e($form->get('qr3_copy')); ?>" />
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
											<input type="text" name="qr4_url" class="middle" placeholder="例　https://test.dm110.jp/" value="<?php echo e($form->get('qr4_url')); ?>" />
											<?php echo $form->error('qr4_url', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>キャッチコピー</span>
											<input type="text" name="qr4_copy" class="middle" placeholder="例　効果のある添え状とは" value="<?php echo e($form->get('qr4_copy')); ?>" />
											<?php echo $form->error('qr4_copy', '<span class="error">', '</span>'); ?></div>
										<div>
											<span>メールアドレス</span>
											<input type="text" name="qr4_mail" class="middle" placeholder="例　info@dm110.jp" value="<?php echo e($form->get('qr4_mail')); ?>" />
											<?php echo $form->error('qr4_mail', '<span class="error">', '</span>'); ?></div>
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
								<!--p class="m10-b">3時間以内に返信します <span class="small">（※営業時間内に限ります）</span></p-->
								<button type="submit" class="btn btn-form btn-large">モニター応募する</button>
								<p class="m10-t red">先着５名になります</p>
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