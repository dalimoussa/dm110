<?php
require_once("../common/src/bootstrap.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DM(ダイレクトメール)発送代行 作業＋発送料で59円より全国対応</title>
		<meta name="keywords" content="発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
		<meta name="description" content="DM発送代行専門店。50通より、見積3時間、一部上場会社55社を含む取引実績5927社、「専任担当者」が付き、クロネコＤＭ便の「発送証明書」をお届けし「追跡調査」ができます。685件のお客様アンケートより87％の価格満足、97％の対応満足を頂いています。" />
		<!--============================================== html_head -->
		<?php include("../common/inc/html_head.html"); ?>
		<!--============================================== /html_head -->
	</head>
	
	<body id="form">
		<?php include("../../common/inc_new/anlytics_top.html"); ?>
		<div id="wrap">
		
			<!--============================================== header -->
			<?php include("../common/inc/header.html"); ?>
			<!--============================================== /header -->
			
			<!--contents-->
			<div id="contents">
				<div class="panel shadow u-mb50">
					<ul class="pan clearfix">
						<li><a href="/sp/index.html">トップページ</a></li><li>無料お見積フォーム</li>
					</ul>
					<h1 class="ttl01">無料お見積もりフォーム</h1>
					<p class="u-font-xs u-font-red">まだお見積もり依頼は完了していません。<br />
					この内容でよろしければ、画面下部の「この内容で送信」ボタンを押してください。</p>
				</div>
				
				<div class="panel shadow u-mb50">
					<h2 class="ttl02 u-mb0">お見積内容確認</h2>
					<form method="post" role="form" action="#main-contents3">
						<table class="table-column1 u-mb20 u-mt20 form_table">
							<tr>
								<th>
									封入物の種類
								</th>
								<td>
									<?php echo e($form->get('type', ', ')); ?>
								</td>
							</tr>
							<tr>
								<th>
									発送予定数
								</th>
								<td><?php echo e($form->get('sheet')); ?></td>
							</tr>
							<tr>
								<th>1つの封筒に入れる予定部数
								</th>
								<td><?php echo e($form->get('sheet2')); ?></td>
							</tr>
							<tr>
								<th>封筒の種類</th>
								<td><?php echo e($form->get('type2')); ?></td>
							</tr>
							
							<tr>
								<th>当社で印刷する場合(黒１色印刷)</th>
								<td>
									サイズ：<?php echo e($form->get('print1_size')); ?>　／　紙の色：<?php echo e($form->get('print1_color')); ?>　／　片面・両面：<?php echo e($form->get('print1_method')); ?>　／　印刷枚数：<?php echo e($form->get('print1_num')); ?>
								</td>
							</tr>
							<tr>
								<th>当社で印刷する場合(カラー印刷)</th>
								<td>
									サイズ：<?php echo e($form->get('print2_size')); ?>　／　片面・両面：<?php echo e($form->get('print2_method')); ?>　／　印刷枚数：<?php echo e($form->get('print2_num')); ?>
								</td>
							</tr>
							<tr>
								<th>現在の発送方法</th>
								<td><?php echo e($form->get('delivery')); ?></td>
							</tr>
							<tr>
								<th>次回発送予定</th>
								<td><?php echo e($form->get('next_shipping')); ?></td>
							</tr>

							<tr>
								<th>印刷内容・現状・お困りごと・<br />条件などをお書き下さい</th>
								<td><?php echo nl2br(e($form->get('comment'))); ?></td>
							</tr>
						</table>
						
						<table class="table-column1 u-mb20 u-mt20 form_table">
							<tr>
								<th>御社名</th>
								<td><?php echo e($form->get('comapny_name')); ?></td>
							</tr>
							<tr>
								<th>部署名</th>
								<td><?php echo e($form->get('department_name')); ?></td>
							</tr>
							<tr>
								<th>担当者様のお名前</th>
								<td><?php echo e($form->get('name')); ?></td>
							</tr>
							<tr>
								<th>ご連絡の取れる電子メール</th>
								<td><?php echo e($form->get('email')); ?></td>
							</tr>
							
							<tr>
								<th>郵便番号</th>
								<td><?php echo e($form->get('zip')); ?></td>
							</tr>
							<tr>
								<th>御社所在地</th>
								<td>
									<?php echo e($form->get('address')); ?><br />
								</td>
							</tr>
							<tr>
								<th>御社電話番号</th>
								<td><?php echo e($form->get('tel')); ?></td>
							</tr>
							<tr>
								<th>御社FAX番号</th>
								<td><?php echo e($form->get('fax')); ?></td>
							</tr>

						</table>
						
						<div id="button_block">
							<button type="submit" class="btn u-font-bold btn02">上記の内容で送信する<i class="icon-chevron-right"></i></button>
							<button type="button" class="btn u-font-bold btn03 u-mt20" onclick="window.location='./';">前ページに戻って修正<i class="icon-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<!--============================================== bnr-tel -->
				<?php include("../common/inc/bnr-tel.html"); ?>
				<!--============================================== /bnr-tel -->
			</div>
			<!--/contents-->
			<!--============================================== footer -->
			<?php include("../common/inc/footer_form.html"); ?>
			<!--============================================== /footer -->
		</div>
		
		<!--============================================== body_foot -->
		<?php include("../common/inc/body_foot.html"); ?>
		<!--============================================== /body_foot -->
		
		<!--============================================== html_foot -->
		<?php include("../common/inc/html_foot.html"); ?>
		<!--============================================== /html_foot -->
		<?php include("../../common/inc_new/anlytics_bottom.html"); ?>
		
	</body>
</html>