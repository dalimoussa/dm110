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
	<img src="images/img_pro05.gif" alt="STEP5 見積結果" class="pc_view" />
	<img src="images/img_sp_pro05.gif" alt="STEP5 見積結果" class="sp_view" />
</div>
<!-- /.con_pro -->

<p>上記お見積より安くできる場合があります。<br />
最終お見積はお電話にてお問い合わせ下さい。</p>

<!-- .con_tel -->
<div class="con_tel">
	<p class="txt_btm01">操作方法、お見積もり、お電話でも歓迎します</p>
	<p><span class="txt_tel">TEL：0561-37-2027</span><br /><span class="txt_date">平日（月曜日～金曜日）<br class="sp_view" /> 9:00～18:00受付</span></p>
</div>
<!-- /.con_tel -->



<!-- .con_form -->
<div class="con_form">
	<table id="tbl_com">
		<tbody>
			<tr>
				<th colspan="2" class="th_wide">&nbsp;</th>
				<th class="th_narrow td_narrow">数量</th>
				<th class="th_narrow td_narrow">単価</th>
				<th class="th_narrow td_narrow">小計</th>
			</tr>
			<?php foreach ($rows as $row) : ?>
			<tr>
				<td colspan="2" class="td_gray td_wide"><?= $row['description1'] ?><?php if ($row['description2']) : ?><br><span class="txt_small"><?= nl2br($row['description2']) ?></span><?php endif; ?></td>
				<td class="td_right td_narrow"><?= number_format($row['quantity']) ?></td>
				<td class="td_right td_narrow"><?= $row['unit_price'] ?></td>
				<td class="td_right td_narrow"><?= number_format($row['amount']) ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<table id="tbl_total">
		<tbody>
			<tr>
				<th>計</th>
				<td><?= number_format($subtotal) ?></td>
			</tr>
			<tr>
				<th>消費税</th>
				<td><?= number_format($tax) ?></td>
			</tr>
			<tr>
				<th>合計</th>
				<td><?= number_format($total) ?></td>
			</tr>
		</tbody>
	</table>
	
	<p class="note">※折作業、ホッチキス止め、差し込み、差し込み印刷、封筒印刷、その他は別途お見積になります。</p>


	<!-- .btn_form -->
	<ul class="btn_form">
		<li><a href="./output" target="_blank"><img src="images/btn_view.gif" alt="見積書をPDFで表示" /></a></li>
		<li class="btn_estimate_top"><a href="/estimate/"><img src="images/btn_estimate_top.gif" alt="見積トップに戻る" /></a></li>
	</ul>
	<!-- /.btn_form -->


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