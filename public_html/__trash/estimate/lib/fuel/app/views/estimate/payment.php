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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3-https.js" type="text/javascript"></script>
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
	<h1><img src="images/title.gif" alt="自動お見積もりフォーム" /></h1>
</div>
<!--/メインイメージ-->


<!--▽メインコンテンツ-->
<div id="main-contents3">

<!-- .con_pro -->
<div class="con_pro">
	<img src="images/img_pro03.gif" alt="STEP3 お客様情報の入力" class="pc_view" />
	<img src="images/img_sp_pro03.gif" alt="STEP3 お客様情報の入力" class="sp_view" />
</div>
<!-- /.con_pro -->

<p>メディアボックスではお見積を頂いたお客様に印刷見本、色紙見本、発送見本、その他資料を送らせて頂いています。<br />
そのためお客様情報の入力をお願いしたします。</p>

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
					<th>お名前<span>（必須）</span></th>
					<td>
						<input type="text" class="box_name" id="name" name="name" value="<?= e($name->value) ?>" />
						<p>例）豊田 昭</p>
						<span class="error"><?= e($name->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>ふりがな</th>
					<td>
						<input type="text" class="box_name" id="kana" name="kana" value="<?= e($kana->value) ?>" />
						<p>例）とよだあきら</p>
						<span class="error"><?= e($kana->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>会社名<span>（必須）</span></th>
					<td>
						<input type="text" class="box_long" id="organization" name="company" value="<?= e($company->value) ?>" />
						<p>例）株式会社メディアボックス　会社名なしの場合は「無し」</p>
						<span class="error"><?= e($company->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>部署名</th>
					<td>
						<input type="text" class="box_long" id="unit" name="section" value="<?= e($section->value) ?>" />
						<p>例）営業第１課　ない場合は空白</p>
						<span class="error"><?= e($section->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>メールアドレス<br class="pc_view" /><span>（必須）</span></th>
					<td>
						<input type="text" class="box_long" id="mail" name="email" value="<?= e($email->value) ?>" />
						<p>例）info@dm110.jp（半角英数）</p>
						<span class="error"><?= e($email->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>電話番号<span>（必須）</span></th>
					<td>
						<input type="text" class="box_tel" id="tel" name="tel" value="<?= e($tel->value) ?>" />
						<p>例）0561-37-2027（半角英数）</p>
						<span class="error"><?= e($tel->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>郵便番号<span>（必須）</span></th>
					<td>
						〒 <input type="text" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','address');" class="box_zip" id="zip" name="zip" value="<?= e($zip->value) ?>" />
						<p>例）470-0164（半角数字）</p>
						<span class="error"><?= e($zip->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>住所<span>（必須）</span></th>
					<td>
						<select id="pref_sel" name="pref">
							<option value="">都道府県を選択</option>
<?php foreach ($pref->options as $_pref) : ?>
							<option value="<?= $_pref ?>"<?php if ($pref->value == $_pref) : ?> selected="selected"<?php endif; ?>><?= $_pref ?></option>
<?php endforeach; ?>
						</select>
						<span class="error"><?= e($pref->error()) ?></span>
						<input type="text" class="box_long" id="address" name="address" value="<?= e($address->value) ?>" />
						<p>例）名古屋市栄1-1-1</p>
						<span class="error"><?= e($address->error()) ?></span>
					</td>
				</tr>
				<tr>
					<th>連絡必要時の連絡方法<span>（必須）</span></th>
					<td>
						<ul>
<?php foreach ($contact->options as $_contact) : ?>
							<li>
								<label>
									<input type="radio" name="contact" value="<?= $_contact ?>"<?php if ($contact->value == $_contact) : ?> checked="checked"<?php endif; ?> />&nbsp;<?= $_contact ?>
								</label>
							</li>
<?php endforeach; ?>
						</ul>
						<span class="error"><?= e($contact->error()) ?></span>
					</td>
				</tr>
			</tbody>
		</table>
		
		<!-- .btn_form -->
		<ul class="btn_form">
			<li class="btn_previous"><input type="image" src="images/btn_previous.gif" alt="前のページへ戻る" onclick="javascript: location.href='./<?= $back ?>'; return false;" /></li>
			<li><input type="image" src="images/btn_check.gif" alt="入力内容の確認画面へ" /></li>
		</ul>
		<!-- /.btn_form -->
		<p class="note">※当社よりしつこい営業電話や、訪問することはございません。</p>
		
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