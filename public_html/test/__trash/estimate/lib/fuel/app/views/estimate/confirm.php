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
	<img src="images/img_pro04.gif" alt="STEP4 入力内容の確認" class="pc_view" />
	<img src="images/img_sp_pro04.gif" alt="STEP4 入力内容の確認" class="sp_view" />
</div>
<!-- /.con_pro -->


<p>入力お疲れ様でした。</p>

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
		<!-- .box_shipping -->
		<div class="box_shipping">
			<h3 class="midashi01"><span>発送・封入情報</span></h3>
			<table>
				<tbody>
					<tr>
						<th>発送数</th>
						<td colspan="2"><?= number_format(e($index['quantity'])) ?>通</td>
					</tr>
					<tr>
						<th>封筒への封入点数</th>
						<td colspan="2"><?= number_format(e($index['enclosure_number'])) ?>点</td>
					</tr>
					<tr>
						<th>封入物の重さ</th>
						<td colspan="2"><?= e($index['enclosure_weight']) ?></td>
					</tr>
					<tr>
						<th>メール便の厚さ</th>
						<td colspan="2"><?= e($index['thickness']) ?></td>
					</tr>
					<tr>
						<th>封入物の種類</th>
						<td colspan="2"><?= e(implode('、', $index['enclosure_types'])) ?></td>
					</tr>
					<?php $carrier = explode('/', $index['carrier']); ?>
					<tr>
						<th>発送方法</th>
						<td colspan="2"><?= e($carrier[0]) ?><?= e($carrier[1]) ?></td>
					</tr>
					<?php $envelope = explode('/', $index['envelope']); ?>
					<tr>
						<th>封筒</th>
						<td class="td_gray"><?= str_replace(array('にて', '支給'), array('にて<br class="pc_view">', '支給<br class="pc_view">'), e($envelope[0])) ?></td>
						<td><?= e($envelope[1]) ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.box_shipping -->

<?php if ($print !== false) : ?>
		<!-- .box_print -->
		<div class="box_print">
			<h3 class="midashi01"><span>印刷情報</span></h3>

<?php foreach ($print['size'] as $key => $tmp) : ?>
			<div class="box_pri_info">
				<table>
					<tbody>
						<tr>
							<th>印刷物<?= $key + 1 ?>　サイズ</th>
							<td><?= e($print['size'][$key]) ?></td>
						</tr>
						<tr>
							<th>印刷物<?= $key + 1 ?>　枚数</th>
							<td><?= number_format(e($print['quantity'][$key])) ?>枚</td>
						</tr>
						<tr>
							<th>印刷物<?= $key + 1 ?>　印刷色</th>
							<td><?= e($print['color'][$key]) ?></td>
						</tr>
						<tr>
							<th>印刷物<?= $key + 1 ?>　印刷用紙</th>
							<td><?= e($print['paper'][$key]) ?></td>
						</tr>
					</tbody>
				</table>
			</div>
<?php endforeach; ?>
		</div>
		<!-- /.box_print -->

<?php endif; ?>

		<!-- .box_info -->
		<div class="box_info">
			<h3 class="midashi01"><span>お客様情報</span></h3>
			<table>
				<tbody>
					<tr>
						<th>お名前</th>
						<td><?= e($payment['name']) ?></td>
					</tr>
					<tr>
						<th>ふりがな</th>
						<td><?= e($payment['kana']) ?></td>
					</tr>
					<tr>
						<th>会社名</th>
						<td><?= e($payment['company']) ?></td>
					</tr>
					<tr>
						<th>部署名</th>
						<td><?= e($payment['section']) ?></td>
					</tr>
					<tr>
						<th>メールアドレス</th>
						<td><?= e($payment['email']) ?></td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><?= e($payment['tel']) ?></td>
					</tr>
					<tr>
						<th>郵便番号</th>
						<td>〒 <?= e($payment['zip']) ?></td>
					</tr>
					<tr>
						<th>住所</th>
						<td><?= e($payment['pref']) ?><?= e($payment['address']) ?></td>
					</tr>
					<tr>
						<th>連絡必要時の連絡方法</th>
						<td><?= e($payment['contact']) ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.box_info -->
		
		<!-- .btn_form -->
		<ul class="btn_form">
			<li class="btn_previous"><input type="image" src="images/btn_previous.gif" alt="前のページへ戻る" onclick="javascript: location.href='./payment'; return false;" /></li>
			<li><input type="image" src="images/btn_estimate.gif" alt="上記内容で見積をする" /></li>
		</ul>
		<!-- /.btn_form -->
		
		<?= Security::js_set_token() ?>

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