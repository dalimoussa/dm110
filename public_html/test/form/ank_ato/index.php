<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>QRコードDM 発送後アンケート　DM発送代行センター（QRDM）</title>
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
.mail_form table th > em {
    display: inline-block;
    margin-right: 2.5em;
}
.mail_form table td textarea {
    width: 99%;
    height: 150px;
    border: 1px solid #ccc;
    border-radius: 2px;
    overflow-y: scroll;
}
.mail_form .list ul {
    margin: 0 0 -8px -10px;
}
.mail_form .list ul li {
    margin: 0 10px 5px;
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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">QRコードDM 発送後アンケート</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">QRコードDM 発送後アンケート</h2>
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
									<td colspan="2">以下10点満点で何点ですか？（1が最悪から10が最高）</td>
								</tr>
								<tr>
									<th>
										<em>1. サービスの使いやすさは</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq1" value="1"<?php if ($form->get('enq1') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq1" value="2"<?php if ($form->get('enq1') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq1" value="3"<?php if ($form->get('enq1') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq1" value="4"<?php if ($form->get('enq1') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq1" value="5"<?php if ($form->get('enq1') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq1" value="6"<?php if ($form->get('enq1') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq1" value="7"<?php if ($form->get('enq1') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq1" value="8"<?php if ($form->get('enq1') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq1" value="9"<?php if ($form->get('enq1') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq1" value="10"<?php if ($form->get('enq1') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq1', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>2. サービスの機能は期待通りでしたか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq2" value="1"<?php if ($form->get('enq2') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq2" value="2"<?php if ($form->get('enq2') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq2" value="3"<?php if ($form->get('enq2') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq2" value="4"<?php if ($form->get('enq2') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq2" value="5"<?php if ($form->get('enq2') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq2" value="6"<?php if ($form->get('enq2') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq2" value="7"<?php if ($form->get('enq2') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq2" value="8"<?php if ($form->get('enq2') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq2" value="9"<?php if ($form->get('enq2') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq2" value="10"<?php if ($form->get('enq2') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq2', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>3. このシステムを利用して売上を上げられそうですか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq3" value="1"<?php if ($form->get('enq3') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq3" value="2"<?php if ($form->get('enq3') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq3" value="3"<?php if ($form->get('enq3') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq3" value="4"<?php if ($form->get('enq3') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq3" value="5"<?php if ($form->get('enq3') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq3" value="6"<?php if ($form->get('enq3') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq3" value="7"<?php if ($form->get('enq3') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq3" value="8"<?php if ($form->get('enq3') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq3" value="9"<?php if ($form->get('enq3') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq3" value="10"<?php if ($form->get('enq3') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq3', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>4. 今後もこのサービスを継続して利用したいと思いますか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq4" value="1"<?php if ($form->get('enq4') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq4" value="2"<?php if ($form->get('enq4') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq4" value="3"<?php if ($form->get('enq4') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq4" value="4"<?php if ($form->get('enq4') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq4" value="5"<?php if ($form->get('enq4') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq4" value="6"<?php if ($form->get('enq4') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq4" value="7"<?php if ($form->get('enq4') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq4" value="8"<?php if ($form->get('enq4') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq4" value="9"<?php if ($form->get('enq4') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq4" value="10"<?php if ($form->get('enq4') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq4', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>5. このサービスを他の人に薦めたいですか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq5" value="1"<?php if ($form->get('enq5') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq5" value="2"<?php if ($form->get('enq5') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq5" value="3"<?php if ($form->get('enq5') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq5" value="4"<?php if ($form->get('enq5') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq5" value="5"<?php if ($form->get('enq5') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq5" value="6"<?php if ($form->get('enq5') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq5" value="7"<?php if ($form->get('enq5') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq5" value="8"<?php if ($form->get('enq5') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq5" value="9"<?php if ($form->get('enq5') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq5" value="10"<?php if ($form->get('enq5') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq5', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>6. サービス全体に対する総合的な評価は？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq6" value="1"<?php if ($form->get('enq6') == '1' ) : ?> checked="checked"<?php endif; ?> />1</label></li>
											<li><label><input type="radio" name="enq6" value="2"<?php if ($form->get('enq6') == '2' ) : ?> checked="checked"<?php endif; ?> />2</label></li>
											<li><label><input type="radio" name="enq6" value="3"<?php if ($form->get('enq6') == '3' ) : ?> checked="checked"<?php endif; ?> />3</label></li>
											<li><label><input type="radio" name="enq6" value="4"<?php if ($form->get('enq6') == '4' ) : ?> checked="checked"<?php endif; ?> />4</label></li>
											<li><label><input type="radio" name="enq6" value="5"<?php if ($form->get('enq6') == '5' ) : ?> checked="checked"<?php endif; ?> />5</label></li>
											<li><label><input type="radio" name="enq6" value="6"<?php if ($form->get('enq6') == '6' ) : ?> checked="checked"<?php endif; ?> />6</label></li>
											<li><label><input type="radio" name="enq6" value="7"<?php if ($form->get('enq6') == '7' ) : ?> checked="checked"<?php endif; ?> />7</label></li>
											<li><label><input type="radio" name="enq6" value="8"<?php if ($form->get('enq6') == '8' ) : ?> checked="checked"<?php endif; ?> />8</label></li>
											<li><label><input type="radio" name="enq6" value="9"<?php if ($form->get('enq6') == '9' ) : ?> checked="checked"<?php endif; ?> />9</label></li>
											<li><label><input type="radio" name="enq6" value="10"<?php if ($form->get('enq6') == '10' ) : ?> checked="checked"<?php endif; ?> />10</label></li>
										</ul>
										<?php echo $form->error('enq6', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>7. サービスを利用して最も良かった点は何ですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq7"><?php echo e($form->get('enq7')); ?></textarea>
										<?php echo $form->error('enq7', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>8. サービスを利用して改善が必要だと感じた点はありますか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq8"><?php echo e($form->get('enq8')); ?></textarea>
										<?php echo $form->error('enq8', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>9. サービスに追加してほしい機能や特徴はありますか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq9"><?php echo e($form->get('enq9')); ?></textarea>
										<?php echo $form->error('enq9', '<span class="error">', '</span>'); ?>
									</td>
								</tr>

							</table>

							<div id="button_block">
								<button type="submit" class="btn btn-form btn-large">　送　　信　</button>
								<p class="m10-t">ご記入頂きありがとうございます</p>
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