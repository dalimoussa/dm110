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
		<link rel="canonical" href="https://test.dm110.jp/form/price//">
		<!--============================================== html_head -->
		<?php include("../common/inc/html_head.html"); ?>
		<!--============================================== /html_head -->
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	</head>
	
	<body id="form">
		<?php include("../../common/inc_new/anlytics_top.html"); ?>
		<div id="wrap">
		
			<!--============================================== header -->
			<?php include("../common/inc/header.html"); ?>
			<!--============================================== /header -->
			
			<!--contents-->
			<div id="contents">
				
				<div class="panel shadow u-mb10">
					<ul class="pan clearfix">
						<li><a href="/sp/index.html">トップページ</a></li><li>無料お見積フォーム</li>
					</ul>
					<h1 class="ttl01">無料お見積もりフォーム</h1>
					<p class="u-font-xs u-mb10">ご連絡はお電話でも歓迎いたします。<br />
					お見積もりはその場でお答えいたします。<br />
					<span class="u-font-blue">０５６１-３７-２０２７</span>　９～１８時　土日祝休　担当：加藤</p>
					
					<p class="u-font-xs">こちらのフォームからのご連絡には３時間以内に返信いたします（営業時間外を除く）。<br />
					<span class="u-font-red u-mb10">以下にご記入の上、「確認画面へ」ボタンを押してください。</span></p>
					<p class="u-font-xs u-font-red u-ta-r">※印は必須</p>
				</div>
				
				<div class="panel shadow u-mb50">
						<form method="post" role="form" enctype="multipart/form-data" action="#form01">
						<div id="form01">
							<h2 class="ttl02 u-mb0">お見積内容について入力▼</h2>
							<div class="error_wrap">
								<?php if ($form->is_error()) : ?>
									<p class="error">入力内容にエラーがあります。</p>
								<?php endif; ?>
							</div>
						
							<div>
								<table class="table-column1 u-mb20 u-mt20 form_table">
									<tr>
										<th>封入物の種類<em>※</em>　<span>複数選択可</span></th>
										<td>
											<div class="clearfix">
												<?php foreach($form->get_options('type') as $type) : ?>
													<div class="checkbox">
														<input type="checkbox" name="type[]" value="<?php echo $type ?>"<?php echo $form->checked('type', $type) ?>> <?php echo $type ?>
													</div>
												<?php endforeach; ?>
											</div>
											<?php echo $form->error('type', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>発送予定数　<span>半角英数　50通～5万通　１通単位</span></th>
										<td>
											<input type="text" name="sheet" value="<?php echo e($form->get('sheet')); ?>" pattern="\d*" class="text_s">　通
											<?php echo $form->error('sheet', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>ひとつの封筒に入れる予定部数<em>※</em><br /><span>（冊子・ホッチキスでとめてあるものは１部とします）</span></th>
										<td>
											<select name="sheet2">
												<option value="">選択してください</option>
												<option value="1部"<?php if ($form->get('sheet2') == '1部' ) : ?> selected<?php endif; ?>>1部</option>
												<option value="2部"<?php if ($form->get('sheet2') == '2部' ) : ?> selected<?php endif; ?>>2部</option>
												<option value="3部"<?php if ($form->get('sheet2') == '3部' ) : ?> selected<?php endif; ?>>3部</option>
												<option value="4部"<?php if ($form->get('sheet2') == '4部' ) : ?> selected<?php endif; ?>>4部</option>
												<option value="5部"<?php if ($form->get('sheet2') == '5部' ) : ?> selected<?php endif; ?>>5部</option>
												<option value="6部"<?php if ($form->get('sheet2') == '6部' ) : ?> selected<?php endif; ?>>6部</option>
												<option value="7部"<?php if ($form->get('sheet2') == '7部' ) : ?> selected<?php endif; ?>>7部</option>
												<option value="8部"<?php if ($form->get('sheet2') == '8部' ) : ?> selected<?php endif; ?>>8部</option>
												<option value="9部"<?php if ($form->get('sheet2') == '9部' ) : ?> selected<?php endif; ?>>9部</option>
												<option value="10部"<?php if ($form->get('sheet2') == '10部' ) : ?> selected<?php endif; ?>>10部</option>
											</select>
											<?php echo $form->error('sheet2', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>封筒の種類<em>※</em><br /><span>角2＝A4が折らずに入る封筒　長3＝A4を3つ折にして入れる封筒</span></th>
										<td>
											<select name="type2">
												<option value="">選択してください</option>
												<option value="当社A4透明＠4円使用"<?php if ($form->get('type2') == '当社A4透明＠4円使用' ) : ?> selected<?php endif; ?>>当社A4透明＠4円使用</option>
												<option value="のり付き角2紙封筒支給"<?php if ($form->get('type2') == 'のり付き角2紙封筒支給' ) : ?> selected<?php endif; ?>>のり付き角2紙封筒支給</option>
												<option value="のりなし角2紙封筒支給"<?php if ($form->get('type2') == 'のりなし角2紙封筒支給' ) : ?> selected<?php endif; ?>>のりなし角2紙封筒支給</option>
												<option value="のり付き長3紙封筒支給"<?php if ($form->get('type2') == 'のり付き長3紙封筒支給' ) : ?> selected<?php endif; ?>>のり付き長3紙封筒支給</option>
												<option value="のり無し長3紙封筒支給"<?php if ($form->get('type2') == 'のり無し長3紙封筒支給' ) : ?> selected<?php endif; ?>>のり無し長3紙封筒支給</option>
												<option value="その他"<?php if ($form->get('type2') == 'その他' ) : ?> selected<?php endif; ?>>その他</option>
											</select>
											<?php echo $form->error('type2', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>当社で印刷する場合（黒一色印刷）</th>
										<td><div>
												サイズ
												<select name="print1_size">
													<option value="">選択してください</option>
													<option value="A4"<?php if ($form->get('print1_size') == 'A4' ) : ?> selected<?php endif; ?>>A4</option>
													<option value="A3"<?php if ($form->get('print1_size') == 'A3' ) : ?> selected<?php endif; ?>>A3</option>
												</select>
											</div>
											<div>
												紙の色
												<select name="print1_color">
													<option value="">選択してください</option>
													<option value="白色"<?php if ($form->get('print1_color') == '白色' ) : ?> selected<?php endif; ?>>白色</option>
													<option value="クリーム色"<?php if ($form->get('print1_color') == 'クリーム色' ) : ?> selected<?php endif; ?>>クリーム色</option>
													<option value="ピンク色"<?php if ($form->get('print1_color') == 'ピンク色' ) : ?> selected<?php endif; ?>>ピンク色</option>
													<option value="若草色"<?php if ($form->get('print1_color') == '若草色' ) : ?> selected<?php endif; ?>>若草色</option>
												</select>
											</div>
											<div>
												片面・両面
												<select name="print1_method">
													<option value="">選択してください</option>
													<option value="片面"<?php if ($form->get('print1_method') == '片面' ) : ?> selected<?php endif; ?>>片面</option>
													<option value="両面"<?php if ($form->get('print1_method') == '両面' ) : ?> selected<?php endif; ?>>両面</option>
												</select>
											</div>
											<div>
												印刷枚数
												<input type="text" name="print1_num" value="<?php echo e($form->get('print1_num')); ?>" pattern="\d*"  class="text_ss">　枚
											</div>
											<?php echo $form->error('print1_size', '<span class="error">', '</span><br>'); ?>
											<?php echo $form->error('print1_color', '<span class="error">', '</span><br>'); ?>
											<?php echo $form->error('print1_method', '<span class="error">', '</span><br>'); ?>
											<?php echo $form->error('print1_num', '<span class="error">', '</span><br>'); ?>
										</td>
									</tr>
									<tr>
										<th>当社で印刷する場合（カラー印刷）</th>
										<td><div>
												サイズ
												<select name="print2_size">
													<option value="">選択してください</option>
													<option value="A4"<?php if ($form->get('print2_size') == 'A4' ) : ?> selected<?php endif; ?>>A4</option>
													<option value="A3"<?php if ($form->get('print2_size') == 'A3' ) : ?> selected<?php endif; ?>>A3</option>
												</select>
											</div>
											<div>
												片面・両面
												<select name="print2_method">
													<option value="">選択してください</option>
													<option value="片面"<?php if ($form->get('print2_method') == '片面' ) : ?> selected<?php endif; ?>>片面</option>
													<option value="両面"<?php if ($form->get('print2_method') == '両面' ) : ?> selected<?php endif; ?>>両面</option>
												</select>
											</div>
											<div>
												印刷枚数
												<input type="text" name="print2_num" value="<?php echo e($form->get('print2_num')); ?>" pattern="\d*"  class="text_ss">　枚
											</div>
											<?php echo $form->error('print2_size', '<span class="error">', '</span><br>'); ?>
											<?php echo $form->error('print2_method', '<span class="error">', '</span><br>'); ?>
											<?php echo $form->error('print2_num', '<span class="error">', '</span><br>'); ?>
										</td>
									</tr>
									<tr>
										<th>現在の発送方法<em>※</em></th>
										<td>
											<select name="delivery">
												<option value="">選択してください</option>
												<option value="郵便"<?php if ($form->get('delivery') == '郵便' ) : ?> selected<?php endif; ?>>郵便</option>
												<option value="クロネコDM便（旧メール便）"<?php if ($form->get('delivery') == 'クロネコDM便（旧メール便）' ) : ?> selected<?php endif; ?>>クロネコDM便（旧メール便）</option>
												<option value="はじめて送る"<?php if ($form->get('delivery') == 'はじめて送る' ) : ?> selected<?php endif; ?>>はじめて送る</option>
												<option value="その他"<?php if ($form->get('delivery') == 'その他' ) : ?> selected<?php endif; ?>>その他</option>
											</select>
											<?php echo $form->error('delivery', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>次回発送予定<em>※</em><br />
										<span>弊社では、ご利用いただいたお客様へ、２回目以降のお客様限定の特別割引キャンペーンを随時開催しております。<br />
										「次回以降の発送予定あり」を選択された方は、キャンペーン開催時にお知らせいたします。</span></th>
										<td>
											<select name="next_shipping">
												<option value="">選択してください</option>
												<option value="次回以降の発送予定有り（お知らせ希望）"<?php if ($form->get('next_shipping') == '次回以降の発送予定有り（お知らせ希望）' ) : ?> selected<?php endif; ?>>次回以降の発送予定有り（お知らせ希望）</option>
												<option value="次回以降の発送予定無し（お知らせ不要）"<?php if ($form->get('next_shipping') == '次回以降の発送予定無し（お知らせ不要）' ) : ?> selected<?php endif; ?>>次回以降の発送予定無し（お知らせ不要）</option>
											</select>
											<?php echo $form->error('next_shipping', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>印刷内容・現状・お困りごと・条件など</th>
										<td class="u-sp-bdbw-1">
											<textarea name="comment" rows="6"><?php echo e($form->get('comment')); ?></textarea>
											<?php echo $form->error('comment', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div id="form02">
							<div class="btn btn--red shadow u-fxd-c u-mb50 accordion">
								<span class="u-font-bold">次へ</span>
								<i class="icon-chevron-down"></i>
							</div>
							<div>
								<h2 class="ttl02 u-mb0">ご連絡先について入力▼</h2>
								<table class="table-column1 u-mb20 u-mt20 form_table">
									<tr>
										<th>
											御社名<em>※</em>　<span>例）株式会社メディアボックス</span>
										</th>
										<td>
											<input type="text" name="comapny_name" class="text_l" value="<?php echo e($form->get('comapny_name')); ?>" />
											<?php echo $form->error('comapny_name', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											部署名<em>※</em>　<span>不要の場合は「なし」とご記入ください</span>
										</th>
										<td>
											<input type="text" name="department_name" class="text_m" value="<?php echo e($form->get('department_name')); ?>" />
											<?php echo $form->error('department_name', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											担当者様お名前<em>※</em>
										</th>
										<td>
											<input type="text" name="name" class="text_m" value="<?php echo e($form->get('name')); ?>" />
											<?php echo $form->error('name', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											ご連絡の取れる電子メール<em>※</em><br /><span>連絡の取れる電子メール　※半角のみ</span>
										</th>
										<td>
											<input type="text" name="email"  class="text_l" value="<?php echo e($form->get('email')); ?>" />
											<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									
									<tr>
										<th>
											郵便番号　<span>半角英数　例）1234567</span>
										</th>
										<td>
											<input type="text" name="zip" class="text_s" value="<?php echo e($form->get('zip')); ?>" pattern="\d*" onkeyup="AjaxZip3.zip2addr(this,'','address','address');" />
											<?php echo $form->error('zip', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											御社所在地<em>※</em>
										</th>
										<td>
											<input type="text" name="address" class="text_l" value="<?php echo e($form->get('address')); ?>" />
											<?php echo $form->error('address', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											御社電話番号<em>※</em>　<span>半角英数　例）0312345678</span>
										</th>
										<td>
											<input type="text" name="tel" class="text_m" value="<?php echo e($form->get('tel')); ?>" pattern="\d*" />
											<?php echo $form->error('tel', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
									<tr>
										<th>
											御社FAX番号<em>※</em>　<span>半角英数　例）0312345678</span>
										</th>
										<td>
											<input type="text" name="fax" class="text_m" value="<?php echo e($form->get('fax')); ?>" pattern="\d*" />
											<?php echo $form->error('fax', '<span class="error">', '</span>'); ?>
										</td>
									</tr>
								</table>
								
								<div class="u-fxd-c u-mb15">
									<button type="submit" class="btn u-font-bold btn02">確認画面へ<i class="icon-chevron-right"></i></button>
								</div>
							</div>
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