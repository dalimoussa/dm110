<?php 
$num  = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_koe.inc');
$qnum = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/common/inc_new/num_enquete.inc');
if(!isset($meta_title_sitename)) $meta_title_sitename = ' | DM発送代行センター';
if(!isset($og_image)) $og_image = 'https://www.dm110.jp/common/img/common/og_image.png';
if(!isset($str_descrip)) $str_descrip = 'DM発送代行センター、QRコード作成・儲かるQRコードサンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、専任担当者制、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無し、お客様の声'.$num.'件、取引実績8521社、東証プライム上場会社102社';
if(!isset($canonical)) {
	$canonical = 'https://www.dm110.jp/DM_matome/';
	if(isset($_REQUEST['pages'])) $canonical .= $_REQUEST['pages'].'/';
}
?><!DOCTYPE html>
<html lang="ja" itemscope itemtype="https://schema.org/WebPage">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no,email=no,address=no">
<link rel='dns-prefetch' href='//ajax.googleapis.com'>
<link rel="preload" as="font" type="font/woff" href="/common/icon2/fonts/icomoon.woff?4m772b" crossorigin>
<link rel="icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/common/img/common/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/common/img/common/apple-touch-icon-precomposed.png">
<title><?=$meta_title.$meta_title_sitename; ?></title>
<?php if(isset($str_keyword)){ ?>
<meta name="keywords" content="<?=$str_keyword; ?>">
<?php } ?>
<meta name="description" content="<?=$str_descrip; ?>">
<meta property="og:title" content="<?=$str_title; ?>">
<meta property="og:site_name" content="DM発送代行センター | 株式会社メディアボックス">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=$canonical; ?>">
<meta property="og:description" content="<?=$str_descrip; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="og:image" content="<?=$og_image; ?>">
<meta property="fb:app_id" content="1120219308065444">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@1mbox">
<meta name="twitter:creator" content="@1mbox">
<meta name="twitter:title" content="<?=$str_title; ?>">
<meta name="twitter:url" content="<?=$canonical; ?>">
<meta name="twitter:description" content="<?=mb_substr($str_descrip,0,100); ?>">
<meta name="twitter:domain" content="www.dm110.jp">
<meta name="twitter:image:src" content="<?=$og_image; ?>">
<meta itemprop="name" content="<?=$meta_title; ?>">
<meta itemprop="about" content="<?=$str_descrip; ?>">
<meta itemprop="image" content="<?=$og_image; ?>">
<link rel="canonical" href="<?=$canonical; ?>">
<meta name="copyright" content="Copyright DM発送代行センター">
<?php if(isset($robots_noindex)){ ?>
<meta name="robots" content="noindex">
<?php } ?>

<?php if(!isset($sw_nocss)){ ?>
<link rel="stylesheet" type="text/css" href="/css/common2026.css" media="all">
<?php } ?>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PNCW24');</script>
<!-- End Google Tag Manager -->
