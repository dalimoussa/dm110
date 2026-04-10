<?php
$skip_conform = True;
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>プロが使うテストDMの発送数を決める公式</title>
	<meta name="keywords" content="DM,集客,ダウンロード,無料,発送数,決め方" />
	<meta name="description" content="DMテストを行う場合にはテストを行う発送数を決めるのが重要です。状況により変化しますが基本をお伝えします。メディアボックスDM発送代行センター" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<!-- ============================================================ html_head -->
<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
	<!-- ============================================================ /html_head -->
	<link rel="stylesheet" type="text/css" href="/css/form_dl.css" />
	<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)" />

</head>


<body id="request">

	<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

	<div id="container">
		<div id="main" class="form_index"><div id="main-in">
			<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/dwn_index.html" itemprop="item"><span itemprop="name">DM集客　無料ダウンロード</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">プロが使うテストDMの発送数を決める公式</span><meta itemprop="position" content="3" /></li>
			</ul>

			<div id="main-contents3">
<?php if ($form->is_error()) : ?>
				<div class="alert-error">
					<p><strong>入力内容にエラーがあります。</strong></p>
					<!--<?php echo $form->errors() ?>-->
				</div>
<?php endif; ?>

				<a href="#free_dwnload"><div id="dwn_mv"><div id="dwn_mv_in">
					<ul>
						<li class="sp_hidden"><img src="/images/dwn/dmtest_mv1.png" alt="テストDMの必要な発送数をご存知ですか？適切な数を算出する計算式をお教えします。"></li>
						<li><img src="/images/dwn/dmtest_mv2.png" alt="プロが使うテストDMの発送数を決める公式"></li>
						<li><img src="/images/dwn/dmtest_mv3.png" alt="pdf資料"></li>
					</ul>
				</div></div></a>
				<p class="sp_view mb30"><img src="/images/dwn/dwn_mv_kyotsu.png" alt="無料ダウンロード"></p>
				<p class="sp_view">テストDMの必要な発送数をご存知ですか？<br />適切な数を算出する計算式をお教えします。</p>

				<h1 class="ttl01_wide">プロが使うテストDMの発送数を決める公式</h1>
				<p class="mb40">DMテストを行う場合に困る事の一つに、発送数をどれだけにするかということが挙げられます。<br />
				意外にもテストDMの発送数の判断は、適当に決められていることが現実です。<br />
				そこで当社で使っているテストDMを発送する時に必要な発送数を決める計算式があります。<br />
				基準値としてお試しください。</p>

				<table class="dwn_tb_shiki mb60"><tbody>
					<tr>
						<th>最低発送数を決める数式</th>
						<td>2.8÷想定反応率</td>
					</tr>
				</tbody></table>


				<div id="free_dwnload">
					<p>詳細は、無料PDF資料でご確認ください。</p>
					<p>フォームにご入力いただいたメールアドレス宛に、資料ダウンロードの通知が届きます。</p>
					<p>メールが届かない場合は、「迷惑メール」フォルダに入っていないか、【dm110.jp】からのメールが受信拒否設定になっていないか、ご確認ください。</p>
				</div>

<?php if ($form->is_error()) : ?>
				<div class="alert-error">
					<p><strong>入力内容にエラーがあります。</strong></p>
					<!--<?php echo $form->errors() ?>-->
				</div>
<?php endif; ?>

				<form class="mail_form" method="post" role="form" action="#free_dwnload">
					<table>
						<tr>
							<th>
								<em>会社名</em>
								<span class="must">必須</span>
								<span class="english">company name</span>
							</th>
							<td>
								<input type="text" name="company_name" class="middle" value="<?php echo e($form->get('company_name')); ?>" />
								<?php echo $form->error('company_name', '<span class="error">', '</span>'); ?>
							</td>
						</tr>
						<tr>
							<th>
								<em>担当者様名</em>
								<span class="must">必須</span>
								<span class="english">name</span>
							</th>
							<td>
								<input type="text" name="pc_name" class="middle" value="<?php echo e($form->get('pc_name')); ?>" />
								<?php echo $form->error('pc_name', '<span class="error">', '</span>'); ?>
							</td>
						</tr>
						<tr>
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
								<em>メールアドレス</em>
								<span class="must">必須</span>
								<span class="english">mail address</span>
							</th>
							<td>
								<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
								<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
							</td>
						</tr>
					</table>

					<div class="m20-t al-c">
<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/form_pp.html"; ?>
					</div>

					<div id="agree">
						<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> 上記内容を確認および了承する</label>
						<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
					</div>

					<div id="button_block">
						<input class="agree_sending" type='submit' value='同意してダウンロードメールを受け取る' />
					</div>
				</form>



			</div>
		</div>
		<!--/main-in-->

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/go_top.html"; ?>

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/footer.html"; ?>

	</div>
	<!--/main-->

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/header.html"; ?>

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/gnavi.html"; ?>

	</div>

	<script src="//www.facebook.com/js/conversions/tracking.js"></script>
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