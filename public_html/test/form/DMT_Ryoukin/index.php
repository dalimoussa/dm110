<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DMトラッカー申込フォーム　DM発送代行センター</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://test.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">DMトラッカー申込フォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">DMトラッカー申込フォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20"><strong class="big2 red01">封入物にQRコードを印刷する場合になります。</strong><br />
						※ 紙質はマット紙・上質紙になります。<br />
						※ QRコード印刷部分の空白は50mm×50mmが必要です。<br />
						※ DM発送前と後にモニター用紙に記入していただくことが条件になります。</p>

						<div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center">
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
										<em>QRコード総個数</em>
										<span class="must">必須</span>
										<span class="english">QR code number</span>
									</th>
									<td>
										QRコードの総個数：<input type="text" name="qr_num" class="" size="5" placeholder="例　1000" value="<?php echo e($form->get('qr_num')); ?>" /> 個<br>
										<?php echo $form->error('qr_num', '<span class="error">', '</span>'); ?>
										<div style="font-size:12px;padding:20px;background-color:#dde3de;">
											総個数とは<br>
											例１）1000通発送　QRコード1種類<br>
											　　⇒ 1000通×１種類＝1000個<br><br>
											例２）1000通発送　QRコード3種類<br>
											　　⇒ 1000通×３種類＝3000個
										</div>
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
									下記同意の上、「DMトラッカー　申し込む」ボタンを押してください。
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
								<p class="m10-b red"><strong>【初回　半額キャンペーン】実施中</strong></p>
								<button type="submit" class="btn btn-form btn-large">DMトラッカー　申し込む</button>
								<p class="m10-t red">※DM発送前と後にアンケート記入が条件になります。<br>　アンケートにお答えいただけない場合は定価になります。</p>
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