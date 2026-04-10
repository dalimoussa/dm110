<?php
require_once("../src/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>A4ハガキ お見積り　DM(ダイレクトメール)発送代行センター</title>
		<meta name="Keywords" content="御見積り,発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
		<meta name="Description" content="DM発送代行センターの御見積りのページです。" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		
	</head>
	<body class="mail_form" id="a4hagaki">
		
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>
		
		<div id="container">
			
			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

<?php /*
					<!--メインイメージ-->
					<div id="main-image1">
						<img src="/images/common/visual_form_A4hagaki.jpg" />
					</div>
					<!--/メインイメージ--> 
*/ ?>

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">A4ハガキ お見積り</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">
						
						<!--conts-->
						<h2 class="ttl01_wide">A4ハガキ メールでのお見積り</h2>
						
						<form method="post" role="form" action="#main-contents3">
							<table>
								<tr<?php if ($form->is_error('comapny_name')) : ?> has-error<?php endif; ?>>
									<th><em>御社名</em></th>
									<td><?php echo e($form->get('comapny_name')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('department_name')) : ?> has-error<?php endif; ?>>
									<th><em>部署名</em></th>
									<td><?php echo e($form->get('department_name')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>担当者様名</em>
									</th>
									<td><?php echo e($form->get('name')); ?></td>
								</tr>
								<tr<?php if ($form->is_error('name')) : ?> has-error<?php endif; ?>>
									<th>
										<em>ご連絡の取れる<br>電子メール</em>
									</th>
									<td><?php echo e($form->get('email')); ?></td>
								</tr>
								
								<tr<?php if ($form->is_error('zip')) : ?> has-error<?php endif; ?>>
									<th>
										<em>郵便番号</em>
									</th>
									<td><?php echo e($form->get('zip')); ?></td>
								</tr>
								<tr>
									<th>
										<em>会社の住所</em>
										<span class="english">company　address</span>
									</th>
									<td>
										<?php echo e($form->get('pref')); ?><br />
										<?php echo e($form->get('address1')); ?><br />
										<?php echo e($form->get('address2')); ?><br />
									</td>
								</tr>
								<tr<?php if ($form->is_error('tel')) : ?> has-error<?php endif; ?>>
									<th>
										<em>会社の電話番号</em>
										<span class="english">telephone number</span>
									</th>
									<td><?php echo e($form->get('tel')); ?></td>
								</tr>
								<tr>
									<th>
										<em>会社のFAX番号</em>
										<span class="english">fax number</span>
									</th>
									<td><?php echo e($form->get('fax')); ?></td>
								</tr>
								<tr>
									<th>
										<em>発送予定の数</em>
										<span class="english">number of shipping<br />timetables</span>
									</th>
									<td><?php echo e($form->get('number')); ?></td>
								</tr>
								<tr>
									<th>
										<em>用紙選択</em>
										<span class="english">choose paper</span>
									</th>
									<td><?php echo e($form->get('paper')); ?></td>
								</tr>
								<!--<tr>
									<th>
										<em>現在の発送方法</em>
										<span class="english">the delivery method</span>
									</th>
									<td><?php echo e($form->get('delivery')); ?></td>
								</tr>
								<tr>
									<th>
										<em>当HPをどこで<br />知りましたか？</em>
										<span class="english">where did you hear?</span>
									</th>
									<td><?php echo e($form->get('where')); ?></td>
								</tr>
								<tr>
									<th>
										<em>検索キーワード・紹介者名<br />紹介ホームページ名</em>
										<span class="english">introducing agency</span>
									</th>
									<td><?php echo e($form->get('keyword')); ?></td>
								</tr>-->
								<tr>
									<th>
										<em>宛名ラベル・現状・お困りごと・<br />条件などをお書き下さい</em>
										<span class="english">inquiry body</span>
									</th>
									<td><?php echo nl2br(e($form->get('comment'))); ?></td>
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
			
		</div><script src="//ah8.facebook.com/js/conversions/tracking.js"></script> 
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