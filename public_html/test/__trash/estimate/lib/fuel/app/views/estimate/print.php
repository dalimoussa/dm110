<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DM発送代行 お見積　DM(ダイレクトメール)発送代行センター</title>
<meta name="Keywords" content="御見積,発送代行,DM(ダイレクトメール)発送,DM(ダイレクトメール)発送代行" />
<meta name="Description" content="DM発送代行センターの御見積のページです。" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<!-- ============================================================ html_head -->
<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head.html"; ?>
<!-- ============================================================ /html_head -->
<link rel="stylesheet" href="/css/estimate.css" media="only screen and (min-width: 1025px)">
<link rel="stylesheet" href="/css/estimate.css" media="screen and (min-width: 721px) and (max-width: 1024px)">
<link rel="stylesheet" href="/css/sp_new/estimate.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
<link rel="stylesheet" href="/css/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.colorbox.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".iframe_color").colorbox({iframe:true, width:"680px", height:"800px"});
		$(".iframe_paper").colorbox({iframe:true, width:"650px", height:"460px"});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>
</head>
<body id="estimate">
<div id="container">



<!--main-->
<div id="main">
<!--main-in-->
<div id="main-in">

<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://test.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">自動お見積フォーム</span><meta itemprop="position" content="2" /></li>
</ul>


<!--メインイメージ-->
<div id="main-image1">
	<h1><img src="images/title.gif" alt="自動お見積もりフォーム" /></h1>
</div>
<!--/メインイメージ-->


<!--▽メインコンテンツ-->
<div id="main-contents3">

<!-- .con_pro -->
<div class="con_pro">
	<img src="images/img_pro02.gif" alt="STEP2 印刷情報の入力" class="pc_view" />
	<img src="images/img_sp_pro02.gif" alt="STEP2 印刷情報の入力" class="sp_view" />
</div>
<!-- /.con_pro -->

<!-- .con_tel -->
<div class="con_tel">
	<p class="txt_btm01">操作方法、お見積もり、お電話でも歓迎します</p>
	<p><span class="txt_tel">TEL：0561-37-2027</span><br /><span class="txt_date">平日（月曜日～金曜日）<br class="sp_view" /> 9:00～18:00受付</span></p>
</div>
<!-- /.con_tel -->


<!-- .con_form -->
<div class="con_form">
	<form action="?" method="post" onsubmit="fuel_set_csrf_token(this);">
		<input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="" />
		<input type="hidden" name="print" value="<?= $count ?>" />
		<div id="box_pri_infos">
			<?php for ($i = 0; $i < 5; $i++) : ?>
			<div class="box_pri_info" style="display: none;">
				<h3 class="midashi01"><span>印刷物<?= $i+1 ?>について</span></h3>
				<div><button class="del-print">- この印刷物を削除する</button></div>
				<table>
					<tbody>
						<tr>
							<th>サイズ<br class="pc_view" /><span>（必須）</span></th>
							<td>
								<ul class="break-even">
									<li class="odd"><label><input type="radio" name="size_id[<?= $i ?>]" value="A4"<?php if ($i < $count and $fields['size_id.'.$i]->value == 'A4') : ?> checked="checked"<?php endif; ?> />&nbsp;A4（210mm×297mm）</label></li>
									<li class="evn"><label><input type="radio" name="size_id[<?= $i ?>]" value="A3"<?php if ($i < $count and $fields['size_id.'.$i]->value == 'A3') : ?> checked="checked"<?php endif; ?> />&nbsp;A3（297mm×420mm）</label></li>
									<li class="odd"><label><input type="radio" name="size_id[<?= $i ?>]" value="B5"<?php if ($i < $count and $fields['size_id.'.$i]->value == 'B5') : ?> checked="checked"<?php endif; ?> />&nbsp;B5（182mm×257mm）</label></li>
									<li class="evn"><label><input type="radio" name="size_id[<?= $i ?>]" value="B4"<?php if ($i < $count and $fields['size_id.'.$i]->value == 'B4') : ?> checked="checked"<?php endif; ?> />&nbsp;B4（257mm×364mm）</label></li>
								</ul>
								<span class="error"><?php if ($i < $count) echo e($fields['size_id.'.$i]->error()) ?></span>
							</td>
						</tr>
						<tr>
							<th>枚数<br class="pc_view" /><span>（必須）</span></th>
							<td>
								<input type="text" class="box_num" id="sheet1" name="quantity[<?= $i ?>]" value="<?php if ($i < $count) echo e($fields['quantity.'.$i]->value) ?>" />&nbsp;枚
								<span class="error"><?php if ($i < $count) echo e($fields['quantity.'.$i]->error()) ?></span>
							</td>
						</tr>
						<tr>
							<th>印刷色<br class="pc_view" /><span>（必須）</span></th>
							<td>
								<ul class="break-even">
									<li class="odd"><label><input type="radio" name="color_id[<?= $i ?>]" class="monochrome" value="101"<?php if ($i < $count and $fields['color_id.'.$i]->value == '101') : ?> checked="checked"<?php endif; ?> />&nbsp;黒１色／片面印刷</label></li>
									<li class="evn"><label><input type="radio" name="color_id[<?= $i ?>]" class="monochrome" value="102"<?php if ($i < $count and $fields['color_id.'.$i]->value == '102') : ?> checked="checked"<?php endif; ?> />&nbsp;黒１色／両面印刷</label></li>
									<li class="odd"><label><input type="radio" name="color_id[<?= $i ?>]" class="color" value="201"<?php if ($i < $count and $fields['color_id.'.$i]->value == '201') : ?> checked="checked"<?php endif; ?> />&nbsp;カラー／片面印刷</label></li>
									<li class="evn"><label><input type="radio" name="color_id[<?= $i ?>]" class="color" value="202"<?php if ($i < $count and $fields['color_id.'.$i]->value == '202') : ?> checked="checked"<?php endif; ?> />&nbsp;カラー／両面印刷</label></li>
								</ul>
								<span class="error"><?php if ($i < $count) echo e($fields['color_id.'.$i]->error()) ?></span>
							</td>
						</tr>
						<tr class="paper">
							<th>印刷用紙<br class="pc_view" /><span>（必須）</span></th>
							<td>
								<div class="monochrome">
									<ul>
										<li class="odd"><label><input type="radio" name="paper_id[<?= $i ?>]" value="101"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '101') : ?> checked="checked"<?php endif; ?> />&nbsp;白色</label></li>
										<li class="evn"><label><input type="radio" name="paper_id[<?= $i ?>]" value="102"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '102') : ?> checked="checked"<?php endif; ?> />&nbsp;クリーム色</label></li>
										<li class="odd"><label><input type="radio" name="paper_id[<?= $i ?>]" value="103"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '103') : ?> checked="checked"<?php endif; ?> />&nbsp;レモン色</label></li>
										<li class="evn"><label><input type="radio" name="paper_id[<?= $i ?>]" value="104"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '104') : ?> checked="checked"<?php endif; ?> />&nbsp;ピンク色</label></li>
									</ul>
									<p class="pc_view lnk_help"><a href="color.html" class="icon_window iframe_color">&gt;&gt;&nbsp;A4用紙の色見本はこちら</a></p>
									<p class="sp_view lnk_help"><a href="color.html" class="icon_window" target="_blank">&gt;&gt;&nbsp;A4用紙の色見本はこちら</a></p>
								</div>
								
								<div class="color">
									<ul class="break-even">
										<li class="odd"><label><input type="radio" name="paper_id[<?= $i ?>]" value="201"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '201') : ?> checked="checked"<?php endif; ?> />&nbsp;コート紙90kg（一般的）</label></li>
										<li class="evn"><label><input type="radio" name="paper_id[<?= $i ?>]" value="202"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '202') : ?> checked="checked"<?php endif; ?> />&nbsp;コート紙110kg（少し厚め）</label></li>
										<li class="odd"><label><input type="radio" name="paper_id[<?= $i ?>]" value="203"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '203') : ?> checked="checked"<?php endif; ?> />&nbsp;マットコート紙90kg（紙に文字が書ける）</label></li>
										<li class="evn"><label><input type="radio" name="paper_id[<?= $i ?>]" value="204"<?php if ($i < $count and $fields['paper_id.'.$i]->value == '204') : ?> checked="checked"<?php endif; ?> />&nbsp;マットコート紙110kg（紙に文字が書ける）</label></li>
									</ul>
									<p class="pc_view lnk_help"><a href="paper.html" class="icon_window iframe_paper">&gt;&gt;&nbsp;紙質の違い</a></p>
									<p class="sp_view lnk_help"><a href="paper.html" class="icon_window" target="_blank">&gt;&gt;&nbsp;紙質の違い</a></p>
								</div>
								<span class="error"><?php if ($i < $count) echo e($fields['paper_id.'.$i]->error()) ?></span>
							</td>
						</tr>
					</tbody>
				</table>
				<p>※複数の印刷物がある場合は、左下の「＋印刷物を追加する」ボタンをクリックすると追加の入力欄が開きます。</p>
			</div>
			<?php endfor; ?>
		</div>
		<div><button id="add-print">+ 印刷物を追加する</button></div>
		<!-- .btn_form -->
		<ul class="btn_form">
			<li class="btn_back"><input type="image" src="images/btn_back.jpg" alt="発送・封入情報ページに戻る" onclick="javascript: location.href='./'; return false;" /></li>
			<li><input type="image" src="images/btn_info02.jpg" alt="次へ（お客様情報入力へ）" /></li>
		</ul>
		<p class="note">※当社よりしつこい営業電話や、訪問することはございません。</p>
		<!-- /.btn_form -->

		<?= Security::js_set_token() ?>
		
		<script type="text/javascript">
			$(function() {
				$('#add-print').click(function(e) {
					e.preventDefault();
					
					$('.box_pri_info:hidden:first').show();
					
					update_button();
				});
				
				$('.del-print').click(function(e) {
					e.preventDefault();
					
					var print = $(this).closest('.box_pri_info');
					
					print.find('input[type="radio"]').prop('checked', false);
					print.find('input[type="text"]').val('');
					
					print.hide().appendTo($('#box_pri_infos'));
					
					$('.box_pri_info h3 span').each(function(i) {
						$(this).text('印刷物' + (i + 1) + 'について');
					});
					
					$('.box_pri_info').each(function(i) {
						$(this).find('input').each(function() {
							$(this).prop('name', $(this).prop('name').replace(/^([^\[]*)\[\d*\]$/, "$1[" + i + "]"))
						});
					});
					
					update_button();
				});
				
				function update_button() {
					if ($('.box_pri_info:hidden').length == 0) {
						$('#add-print').hide();
					}
					else {
						$('#add-print').show();
					}
					
					if ($('.box_pri_info:visible').length == 1) {
						$('.box_pri_info:visible').find('.del-print:first').prop('disabled', true);
					}
					else {
						$('.del-print').prop('disabled', false);
					}
				}
				
				$('.btn_form input').click(function() {
					var count = 0;
					$('.box_pri_info:visible').each(function() {
						if ($(this).find('input:text').val() == '' && $(this).find('input:checked').length == 0) {
							$(this).find('.del-print').trigger('click');
						}
					});
					
					$('input[name="print"]').val($('.box_pri_info:visible').length);
				});
				
				$('input:radio[name^="color"]').click(function() {
					var papers = $(this).closest('.box_pri_info').find('tr.paper').show().find('div.color, div.monochrome').hide();
					if ($(this).hasClass('color')) {
						papers.filter('.color').show();
						papers.filter('.monochrome').find('input:radio').prop('checked', false);
					}
					else {
						papers.filter('.monochrome').show();
						papers.filter('.color').find('input:radio').prop('checked', false);
					}
				});
				
				$('tr.paper').hide();
				
				$('.box_pri_info').each(function() {
					var color = $(this).find('input:radio[name^="color"]:checked');
					if (color.length > 0) {
						color.trigger('click');
					}
				});
				
				$('.box_pri_info').filter(':lt(' + $('input[name="print"]').val() + ')').show();
				
				update_button();
			});
		</script>
	</form>
	
</div>
<!-- /.con_form -->

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



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(
  ['_setAccount', 'UA-1592296-1'],
  ['_trackPageview'],
  ['b._setAccount', 'UA-1592296-3'],
  ['b._trackPageview']
  );

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



	<!--shinobi1-->
<script type="text/javascript" src="http://www.x3.hanamizake.com/ufo/024792510"></script>
<!--shinobi2-->




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
      
      
      
      
<!-- Google Code for &#36861;&#36321;&#26399;&#38291;&#65297; Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071700017;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "QOU8CLCWxAIQsbCD_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1071700017/?label=QOU8CLCWxAIQsbCD_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



<!-- Google Code for &#36861;&#36321;&#26399;&#38291;&#65298; Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071700017;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "uq4bCKiXxAIQsbCD_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1071700017/?label=uq4bCKiXxAIQsbCD_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



<!-- Google Code for &#36861;&#36321;&#26399;&#38291;&#65299; Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071700017;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "UFjQCKCYxAIQsbCD_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1071700017/?label=UFjQCKCYxAIQsbCD_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>




</body>
</html>