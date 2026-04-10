<?php
require_once("../src/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>特別キャンペーン001　CD・本・資料　6,800円　フォーム</title>
		<meta name="keywords" content="バカ売れDM集客術　DM作成　DM発送" />
		<meta name="description" content="お見積りを頂いた方に特別価格にてCD、本、資料を販売します" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		
	</head>
	<body class="mail_form" id="cd-campaign">
		
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>
		
		<div id="container">
			
			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">
					
					<!--メインイメージ-->
					<div id="main-image1">
						<img src="/images/form/ttl_cd.png" alt="DM作成・発送に役立ててください。お問い合わせも無料にてお受けしますので相談ください。午後4時30分までにご注文いただければ当日発送いたします（弊社営業時間）" />
					</div>
					<!--/メインイメージ--> 

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">特別キャンペーン001</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">
						
						<!--conts-->
						<h2 class="ttl01_wide">CD＋本＋資料の入力内容確認</h2>
						<form method="post" role="form" action="#main-contents3">
							<table>
								<tr<?php if ($form->is_error('comapny_name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>会社名</em>
										<span class="english">company name</span>
									</th>
									<td><?php echo e($form->get('comapny_name')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>お名前</em>
										<span class="english">name</span>
									</th>
									<td><?php echo e($form->get('name')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('zip')) : ?> has-error<?php endif; ?>>
									<th>
										<em>郵便番号</em>
										<span class="english">postcode</span>
									</th>
									<td><?php echo e($form->get('zip')); ?></td>
								</tr>
								<tr>
									<th>
										<em>住所</em>
										<span class="english">address</span>
									</th>
									<td>
										<?php echo e($form->get('pref')); ?><br />
										<?php echo e($form->get('address1')); ?><br />
										<?php echo e($form->get('address2')); ?><br />
									</td>
								</tr>
								<tr<?php if ($form->is_error('tel')) : ?> has-error<?php endif; ?>>
									<th>
										<em>電話番号</em>
										<span class="english">telephone number</span>
									</th>
									<td><?php echo e($form->get('tel')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>メールアドレス</em>
										<span class="english">mail address</span>
									</th>
									<td><?php echo e($form->get('email')); ?></td>
								</tr>
							</table>
							
							<div id="button_block">
								<button type="button" class="btn btn-default btn-large" onclick="window.location='./';">前ページに戻って修正</button>
								<button type="submit" class="btn btn-danger btn-large">上記の内容で送信する</button>
							</div>
						</form>
						<!--[ここまでメールフォームプロ・本体]--> 
						
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