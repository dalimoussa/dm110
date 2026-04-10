<?php
//require_once("../../src/bootstrap.php");
require_once("../../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DMトラッカー資料・料金　ダウンロード　DM発送代行センター</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://test.dm110.jp/">
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
.mail_form table .vertical div,
.mail_form .vertical ul li {
    float: none;
}

.floating-label{position:relative}
.floating-label label{position:absolute;left:12px;top:8px;color:#999;font-size:16px;pointer-events:none;transition:all 0.3s ease;background:#fff;padding:0 4px}
.floating-label input:focus+label,
.floating-label input:not(:placeholder-shown)+label{top:-8px;left:8px;font-size:12px;color:#667eea}

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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">DMトラッカー資料・料金　ダウンロード</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">DMトラッカー資料・料金　ダウンロード</h2>


<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p>DMトラッカーに関する<br />
							・仕組み<br />
							・実例<br />
							・料金<br />
							・Cookie<br />
							について書かれています。</p>

						<form id="myform" method="post" role="form" action="">
							<table>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<th>
										<em>会社名</em>
										<span class="must">必須</span>
										<span class="english">company name</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="company_name" name="company_name" class="middle" placeholder=" " value="<?php echo e($form->get('company_name')); ?>" />
										<label for="company_name">会社名</label>
										</div>
										<?php echo $form->error('company_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>部署名</em>
										<span class="must">必須</span>
										<span class="english">department name</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="department_name" name="department_name" class="middle" placeholder=" " value="<?php echo e($form->get('department_name')); ?>" />
										<label for="department_name">部署名</label>
										</div>
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
										<div class="floating-label">
										<input type="text" id="name" name="name" class="middle" placeholder=" " value="<?php echo e($form->get('name')); ?>" />
										<label for="name">担当者様名</label>
										</div>
										<?php echo $form->error('name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>電子メールアドレス</em>
										<span class="must">必須</span>
										<span class="english">mail address</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="email" name="email" class="middle" placeholder=" " value="<?php echo e($form->get('email')); ?>" />
										<label for="email">メールアドレス</label>
										</div>
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
<?php /*
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
*/ ?>

							</table>

<? /*
							<div class="m20">
								<p>※ご記入いただいた情報は、DMトラッカーのご提案およびサービス改善の目的にのみ使用し、第三者に提供することはございません。</p>
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
*/ ?>

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
								<button type="submit" class="btn btn-form btn-large">DMトラッカー資料・料金　ダウンロード</button>
								<p class="m10-t red">入力は4つ　電話番号無し<br />わずか30秒で完了</p>
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