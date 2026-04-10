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
		$(".iframe_mail").colorbox({iframe:true, width:"650px", height:"720px"});
		$(".iframe_envelope").colorbox({iframe:true, width:"650px", height:"690px"});
		
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
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">自動お見積フォーム</span><meta itemprop="position" content="2" /></li>
</ul>


<!--メインイメージ-->
<div id="main-image1">
	<h1 class="pc_view"><img src="images/title.gif" alt="自動お見積もりフォーム" /></h1>
	<h1 class="sp_view">自動お見積もりフォーム</h1>
</div>
<!--/メインイメージ-->




<!--▽メインコンテンツ-->
<div id="main-contents3">

<!-- .con_pro -->
<div class="con_pro">
	<img src="images/img_pro01.gif" alt="STEP1 発送・封入情報の入力" class="pc_view" />
	<img src="images/img_sp_pro01.gif" alt="STEP1 発送・封入情報の入力" class="sp_view" />
</div>
<!-- /.con_pro -->


<p>こちらのフォームで、DM発送代行・封筒。印刷（必要な場合）の自動見積ができます。<br />
以下に必要事項をご記入・ご選択いただくと、DM発送代行の見積を自動で算出する事ができます。<br />
電話にての注文になりますので<span>電話0561-37-2027</span>へおかけください。</p>

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
		<table>
			<tbody>
				<tr>
					<th>発送数<span>（必須）</span></th>
					<td colspan="2">
						<input type="text" class="box_num" id="ship_num" name="quantity" value="<?= e($quantity->value) ?>" />&nbsp;通
						<span class="error"><?= e($quantity->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>封筒への封入点数<br class="pc_view" /><span>（必須）</span></th>
					<td colspan="2">
						<select name="enclosure_number" id="score">
							<option value="" selected="selected">封入点数を選択</option>
<?php for ($i = 1; $i < 11; $i++) : ?>
							<option value="<?= $i ?>"<?php if ($enclosure_number->value == $i) : ?> selected="selected"<?php endif; ?>><?= $i ?>点</option>
<?php endfor; ?>
						</select>
						<span class="error"><?= e($enclosure_number->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>封入物の重さ<span>（必須）</span></th>
					<td colspan="2">
						<ul>
							<li><label for="weight_200"><input type="radio" id="weight_200" name="enclosure_weight_id" value="200"<?php if ($enclosure_weight_id->value == '200') : ?> checked="checked"<?php endif; ?> />&nbsp;200g以下</label></li>
							<li><label for="weight_500"><input type="radio" id="weight_500" name="enclosure_weight_id" value="500"<?php if ($enclosure_weight_id->value == '500') : ?> checked="checked"<?php endif; ?> />&nbsp;500g以下</label></li>
							<li><label for="weight_1000"><input type="radio" id="weight_1000" name="enclosure_weight_id" value="1000"<?php if ($enclosure_weight_id->value == '1000') : ?> checked="checked"<?php endif; ?> />&nbsp;1kg以下</label></li>
						</ul>
						<p>※佐川ゆうメール便は「200g以下」のみの取り扱いとなります。<br />
						「500g以下」「1kg以下」の場合は、クロネコDM便取り扱いとなります。</p>
						<span class="error"><?= e($enclosure_weight_id->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>メール便の厚さ<br class="pc_view" /><span>（必須）</span></th>
					<td colspan="2">
						<ul>
							<li><label for="thickness_1"><input type="radio" id="thickness_1" name="thickness_id" value="1"<?php if ($thickness_id->value == '1') : ?> checked="checked"<?php endif; ?> />&nbsp;1cm以内</label></li>
							<li><label for="thickness_2"><input type="radio" id="thickness_2" name="thickness_id" value="2"<?php if ($thickness_id->value == '2') : ?> checked="checked"<?php endif; ?> />&nbsp;2cm以内</label></li>
						</ul>
						<span class="error"><?= e($thickness_id->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>封入物の種類<span>（必須）</span></th>
					<td colspan="2">
						<ul>
							<li><label for="kind_1"><input type="checkbox" id="kind_1" name="enclosure_types_id[]" value="1"<?php if (in_array('1', $enclosure_types_id->get_attribute('value', array()))) : ?> checked="checked"<?php endif; ?> />&nbsp;紙</label></li>
							<li><label for="kind_2"><input type="checkbox" id="kind_2" name="enclosure_types_id[]" value="2"<?php if (in_array('2', $enclosure_types_id->get_attribute('value', array()))) : ?> checked="checked"<?php endif; ?> />&nbsp;ホッチキス止め</label></li>
							<li><label for="kind_3"><input type="checkbox" id="kind_3" name="enclosure_types_id[]" value="3"<?php if (in_array('3', $enclosure_types_id->get_attribute('value', array()))) : ?> checked="checked"<?php endif; ?> />&nbsp;小冊子</label></li>
							<li><label for="kind_4"><input type="checkbox" id="kind_4" name="enclosure_types_id[]" value="4"<?php if (in_array('4', $enclosure_types_id->get_attribute('value', array()))) : ?> checked="checked"<?php endif; ?> />&nbsp;カタログ</label></li>
							<li><label for="kind_5"><input type="checkbox" id="kind_5" name="enclosure_types_id[]" value="5"<?php if (in_array('5', $enclosure_types_id->get_attribute('value', array()))) : ?> checked="checked"<?php endif; ?> />&nbsp;その他</label></li>
						</ul>
						<p>※厚さ2cm以下、角２封筒以下サイズ（240 × 332 ミリ）の封入物のみ取り扱い可能です</p>
						<span class="error"><?= e($enclosure_types_id->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>発送方法<span>（必須）</span></th>
					<td colspan="2">
						<ul>
							<li><label for="shipping_1"><input type="radio" id="shipping_1" name="carrier_id" value="1"<?php if ($carrier_id->value == '1') : ?> checked="checked"<?php endif; ?> />&nbsp;クロネコDM便（旧メール便）</label></li>
							<li><label for="shipping_2"><input type="radio" id="shipping_2" name="carrier_id" value="2"<?php if ($carrier_id->value == '2') : ?> checked="checked"<?php endif; ?> />&nbsp;佐川ゆうメール便</label></li>
						</ul>
						<p class="pc_view lnk_help"><a href="mail.html" class="icon_window iframe_mail">&gt;&gt;&nbsp;クロネコDM便と佐川ゆうメール便の特徴</a></p>
						<p class="sp_view lnk_help"><a href="mail.html" class="icon_window" target="_blank">&gt;&gt;&nbsp;クロネコDM便と佐川ゆうメール便の特徴</a></p>
						<span class="error"><?= e($carrier_id->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th rowspan="2">封筒<span>（必須）</span><br />
						<span class="note">A4用紙を折らずに封入できるA4・角2封筒のほうが<br />
							折料金が必要な長3封筒封入よりも料金が安くなります。</span></th>
					<td class="td_gray">当社にて<br class="pc_view" />透明封筒用意</td>
					<td>
						<ul class="list_env">
							<li><label for="through_1"><input type="radio" id="through_1" name="envelope_id" value="101"<?php if ($envelope_id->value == '101') : ?> checked="checked"<?php endif; ?> />&nbsp;当社A4透明封筒（通常はこれで問題ございません）</label></li>
							<li><label for="through_2"><input type="radio" id="through_2" name="envelope_id" value="102"<?php if ($envelope_id->value == '102') : ?> checked="checked"<?php endif; ?> />&nbsp;当社破れにくいA4透明封筒<br />（破れては困るとき冊子、カタログなど入れる場合）</label></li>
						</ul>
						<p class="pc_view lnk_help"><a href="envelope.html" class="icon_window iframe_envelope">&gt;&gt;&nbsp;透明封筒と破れにくい透明封筒比較はこちら</a></p>
						<p class="sp_view lnk_help"><a href="envelope.html" class="icon_window" target="_blank">&gt;&gt;&nbsp;透明封筒と破れにくい透明封筒比較はこちら</a></p>
					</td>
				</tr>
				<!--
				<tr>
					<td class="td_gray">当社にて<br />紙封筒用意</td>
					<td>
						<ul class="list_env">
							<li><label for="paper_1"><input type="radio" id="paper_1" name="envelope_id" value="201"<?php if ($envelope_id->value == '201') : ?> checked="checked"<?php endif; ?> />&nbsp;角2クラフト封筒のり無し</label></li>
							<li><label for="paper_2"><input type="radio" id="paper_2" name="envelope_id" value="202"<?php if ($envelope_id->value == '202') : ?> checked="checked"<?php endif; ?> />&nbsp;長3クラフト封筒のり無し</label></li>
						</ul>
					</td>
				</tr>
				-->
				<tr>
					<td class="td_gray">ご自身で封筒支給<br class="pc_view" />される場合</td>
					<td>
						<ul class="list_env">
							<li><label for="glue_1"><input type="radio" id="glue_1" name="envelope_id" value="301"<?php if ($envelope_id->value == '301') : ?> checked="checked"<?php endif; ?> />&nbsp;角2封筒テープ付き（ワンタッチ糊）</label></li>
							<li><label for="glue_2"><input type="radio" id="glue_2" name="envelope_id" value="302"<?php if ($envelope_id->value == '302') : ?> checked="checked"<?php endif; ?> />&nbsp;長3封筒テープ付き（ワンタッチ糊）</label></li>
							<li><label for="glue_3"><input type="radio" id="glue_3" name="envelope_id" value="303"<?php if ($envelope_id->value == '303') : ?> checked="checked"<?php endif; ?> />&nbsp;角2封筒テープなし</label></li>
							<li><label for="glue_4"><input type="radio" id="glue_4" name="envelope_id" value="304"<?php if ($envelope_id->value == '304') : ?> checked="checked"<?php endif; ?> />&nbsp;長3封筒テープなし</label></li>
						</ul>
						<span class="error"><?= e($envelope_id->error()) ?></span>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="note">※折作業、ホッチキス止め、差し込み、差し込み印刷、封筒印刷、その他作業は別途お見積になります。</p>

		
		<ul class="btn_form">
			<li><input id="to_print" type="image" src="images/btn_print.gif" alt="印刷を当社に依頼いただく場合はこちら" /></li>
			<li><input id="to_payment" type="image" src="images/btn_info.gif" alt="全ての封入物を支給いただく場合はこちら" /></li>
		</ul>
		<p class="note">※当社よりしつこい営業電話や、訪問することはございません。</p>

		
		<input type="hidden" name="next" value="" />
		
		<?= Security::js_set_token() ?>

		<script type="text/javascript">
		$(function() {
			$('#to_print').click(function() {
				$('input[name="next"]').val('print');
			});
			$('#to_payment').click(function() {
				$('input[name="next"]').val('payment');
			});
			
			$('input[name="enclosure_weight_id"]').click(function() {
				if ($(this).val() > 200) {
					$('input[name="carrier_id"][value="2"]').prop('disabled', true);
					$('input[name="carrier_id"][value="1"]').prop('checked', true);
				}
				else {
					$('input[name="carrier_id"][value="2"]').prop('disabled', false);
				}
			});
			
			$('input[name="enclosure_weight_id"]:checked').trigger('click');
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