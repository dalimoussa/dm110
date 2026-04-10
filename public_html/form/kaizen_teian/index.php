<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DM改善提案　フォーム</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://www.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
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
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">DM改善提案フォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">DM改善提案　フォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20">ご依頼頂いたDM改善のために以下の質問にお答えください。<br />
							なるべく詳細にお答えいただけると、より深堀した返信が出来ます。</p>

<?php
/*
						<div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center">
							<p class="al-c tac m40"><img src="/images/2024/qrm_rei_sub3.png" width="657" height="925" alt="" style="width:250px;max-width:97%;height:auto;border:1px solid #bdd3dc">
							<p class="al-c tac m40"><img src="./image.png" width="900" height="620" alt="" style="width:500px;max-width:97%;height:auto"></p>
						</div>
*/
?>

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
										<em>今回のDMの目的を教えてください</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_01"><?php echo e($form->get('enq_01')); ?></textarea>
										<?php echo $form->error('enq_01', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>郵送DM・ニュースレターは初めて</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_02" value="初めて"<?php if ($form->get('enq_02') == '初めて' ) : ?> checked="checked"<?php endif; ?> />初めて</label></li>
											<li><label><input type="radio" name="enq_02" value="過去発送"<?php if ($form->get('enq_02') == '過去発送' ) : ?> checked="checked"<?php endif; ?> />過去発送</label></li>
										</ul>
										<?php echo $form->error('enq_02', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お客様は　個人ですか？　法人ですか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_03" value="個人"<?php if ($form->get('enq_03') == '個人' ) : ?> checked="checked"<?php endif; ?> />個人</label></li>
											<li><label><input type="radio" name="enq_03" value="法人"<?php if ($form->get('enq_03') == '法人' ) : ?> checked="checked"<?php endif; ?> />法人</label></li>
										</ul>
										<?php echo $form->error('enq_03', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>発送先は新規顧客ですか？<br />既存顧客向けですか？</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_04" value="新規"<?php if ($form->get('enq_04') == '新規' ) : ?> checked="checked"<?php endif; ?> />新規</label></li>
											<li><label><input type="radio" name="enq_04" value="既存"<?php if ($form->get('enq_04') == '既存' ) : ?> checked="checked"<?php endif; ?> />既存</label></li>
										</ul>
										<?php echo $form->error('enq_04', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お客様がDMを見て御社を調べる時のURLは</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<input type="text" name="enq_05" class="middle" value="<?php echo e($form->get('enq_05')); ?>" />
										<?php echo $form->error('enq_05', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>重視されることは</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_06" value="売上UP"<?php if ($form->get('enq_06') == '売上UP' ) : ?> checked="checked"<?php endif; ?> />売上UP</label></li>
											<li><label><input type="radio" name="enq_06" value="関係性UP"<?php if ($form->get('enq_06') == '関係性UP' ) : ?> checked="checked"<?php endif; ?> />関係性UP</label></li>
											<li><label><input type="radio" name="enq_06" value="リード獲得（見込客獲得）"<?php if ($form->get('enq_06') == 'リード獲得（見込客獲得）' ) : ?> checked="checked"<?php endif; ?> />リード獲得（見込客獲得）</label></li>
											<li><label><input type="radio" name="enq_06" value="既存顧客対策"<?php if ($form->get('enq_06') == '既存顧客対策' ) : ?> checked="checked"<?php endif; ?> />既存顧客対策</label></li>
										</ul>
										<?php echo $form->error('enq_06', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>他の連携媒体はありますか？</em>
									</th>
									<td class="print">
										<div>
											<label><input type="checkbox" name="enq_07_1" value="HP"<?php if ($form->get('enq_07_1')) : ?> checked="checked"<?php endif; ?> />HP</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_2" value="ネット広告"<?php if ($form->get('enq_07_2')) : ?> checked="checked"<?php endif; ?> />ネット広告</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_3" value="チラシ"<?php if ($form->get('enq_07_3')) : ?> checked="checked"<?php endif; ?> />チラシ</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_4" value="雑誌"<?php if ($form->get('enq_07_4')) : ?> checked="checked"<?php endif; ?> />雑誌</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_5" value="その他"<?php if ($form->get('enq_07_5')) : ?> checked="checked"<?php endif; ?> />その他</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_07_6" value="無し"<?php if ($form->get('enq_07_6')) : ?> checked="checked"<?php endif; ?> />無し</label>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>強調できる「数字」や「結果」はありますか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_08"><?php echo e($form->get('enq_08')); ?></textarea>
										<?php echo $form->error('enq_08', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>商品・サービスの具体的な特徴は何ですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_09"><?php echo e($form->get('enq_09')); ?></textarea>
										<?php echo $form->error('enq_09', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>使用前・使用中変化・使用後について</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_10"><?php echo e($form->get('enq_10')); ?></textarea>
										<?php echo $form->error('enq_10', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>競合と比較した際の優位性は何ですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_11"><?php echo e($form->get('enq_11')); ?></textarea>
										<?php echo $form->error('enq_11', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>これまでの主要な実績を教えてください</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_12"><?php echo e($form->get('enq_12')); ?></textarea>
										<?php echo $form->error('enq_12', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お客様からいただく最も多い評価・感想は何ですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_13"><?php echo e($form->get('enq_13')); ?></textarea>
										<?php echo $form->error('enq_13', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>予算の上限はいくらですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_14"><?php echo e($form->get('enq_14')); ?></textarea>
										<?php echo $form->error('enq_14', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>ABテストは行いますか</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_15" value="行う"<?php if ($form->get('enq_15') == '行う' ) : ?> checked="checked"<?php endif; ?> />行う</label></li>
											<li><label><input type="radio" name="enq_15" value="行わない"<?php if ($form->get('enq_15') == '行わない' ) : ?> checked="checked"<?php endif; ?> />行わない</label></li>
										</ul>
										<?php echo $form->error('enq_15', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>長期的に目指したい成果は何ですか？</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_16"><?php echo e($form->get('enq_16')); ?></textarea>
										<?php echo $form->error('enq_16', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>現状一番困っていることは</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_17"><?php echo e($form->get('enq_17')); ?></textarea>
										<?php echo $form->error('enq_17', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>問題解決ができる商品の場合は下記内容を書いてください</em>
										<span class="normal"><br />問題定義→解決方法→原因→結果→学び</span>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="enq_18"><?php echo e($form->get('enq_18')); ?></textarea>
										<?php echo $form->error('enq_18', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>備考</em>
										<span class="normal"><br />（気になる点やご質問内容ほか、何でもお書きください）</span>
									</th>
									<td>
										<textarea name="remarks"><?php echo e($form->get('remarks')); ?></textarea>
									</td>
								</tr>
							</table>

<?php
/*
							<div class="m20-t al-c">
								<p>
									<br /><br />
									下記同意の上、「DM改善提案を申し込む」ボタンを押してください。
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
								<p>当社 <a href="https://www.dm110.jp/kiyaku">プライバシーポリシー・利用規約</a> に同意の上、「DM改善提案を申し込む」ボタンを押してください。</p>
							</div>

							<div id="agree">
								<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> プライバシーポリシー・利用規約に同意する</label>
								<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
							</div>


							<div id="button_block">
<?php //								<p class="m10-b">3時間以内に返信します <span class="small">（※営業時間内に限ります）</span></p> ?>
								<button type="submit" class="btn btn-form btn-large">DM改善提案を申し込む（無料）</button>
<?php //								<p class="m10-t red">DM発送前と後にモニター用紙に記入していただくことが条件で無料発送になります</p> ?>
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