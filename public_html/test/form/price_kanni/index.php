<?php
require_once("../price_src/bootstrap.php");
//require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>見積もり依頼　DM(ダイレクトメール)発送代行センター</title>
		<meta name="Keywords" content="御見積り,発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
		<meta name="Description" content="DM発送代行センターの御見積り簡易版のページです。" />
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

<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_2022/visualwebsiteoptimizer.php"; ?>


	</head>
	<body class="mail_form" id="price">

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

		<div id="container">

			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">封筒に封入発送コース（簡易版）お見積り</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">封筒に封入発送コース（簡易版）お見積り</h2>


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
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="company_name" name="company_name" class="middle" placeholder=" " value="<?php echo e($form->get('company_name')); ?>" />
										<label for="company_name">御社名</label>
										</div>
										<span class="example">例）　株式会社メディアボックス</span>
										<?php echo $form->error('company_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お名前</em>
										<span class="must">必須</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="name" name="name" class="middle" placeholder=" " value="<?php echo e($form->get('name')); ?>" />
										<label for="name01">お名前</label>
										</div>
										<?php echo $form->error('name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>ご連絡の取れる<br />電子メール</em>
										<span class="must">必須</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="email" name="email" class="middle" placeholder=" " value="<?php echo e($form->get('email')); ?>" />
										<label for="email">メールアドレス</label>
										</div>
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>会社の電話番号</em>
										<span class="must">必須</span>
									</th>
									<td>
										<div class="floating-label">
										<input type="text" id="tel" name="tel" class="middle" placeholder=" " value="<?php echo e($form->get('tel')); ?>" />
										<label for="tel">会社の電話番号</label>
										</div>
										<?php echo $form->error('tel', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>大体の発送数</em>
										<span class="must">必須</span>
									</th>
									<td>
										約 <input type="text" name="number" class="narrow" value="<?php echo e($form->get('number')); ?>" /> 通
										<?php echo $form->error('number', '<span class="error">', '</span>'); ?>
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

<?php
/*
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
*/
?>

							<div class="m20-t al-c">
								<p>当社 <a href="https://test.dm110.jp/kiyaku">プライバシーポリシー・利用規約</a> に同意の上、送信して下さい</p>
							</div>

							<div id="agree">
								<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> プライバシーポリシー・利用規約に同意する</label>
								<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
							</div>


							<div class="al_center_block al-c m50-b" style="max-width:350px">
								<p class="al-l">見積内容に下記が含まれます。</p>
								<ol class="m20 al-l">
									<li>発送証明（原本コピー）</li>
									<li>返品物のEXCELデータ化</li>
									<li>宛名データ削除証明<br>（米国国家安全保障局（NSA）推奨基準）</li>
									<li>初回、ご依頼の発送物見本を送ります</li>
									<li>専任担当者</li>
									<li>信書チェックと対応策提案</li>
									<li>個人情報漏洩保険（２億円）</li>
								</ol>
							</div>

							<div id="button_block">
								<p class="m10-b">3時間以内に見積りを受け取れます <span class="small">（※営業時間内に限ります）</span></p>
								<button type="submit" class="btn btn-form btn-large">とりあえず見積する<br />【料金表より安くなります】</button>
								<p class="m10-t red">営業電話は致しません</p>
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

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_bottom.html"; ?>

	</body>
</html>