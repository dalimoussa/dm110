<?php
function echo_panel($key = null,$new = null){
	global $sdata;
	if(isset($sdata[$key])){
		echo '<div class="panel"><a href="./'.$key.'/">
			<div class="panel-image"><img src="/images/DM_matome/'.$key.'_main.png" alt="'.$sdata[$key]['str_title'].'" decoding="async" loading="lazy"></div>
			<div class="panel-body">'.$sdata[$key]['str_title'].'</div>
		</a></div>
';
}}
?>
	<h1><img src="/images/DM_matome/cover.png" width="900" height="340" alt="DM（ダイレクトメール）まとめ"></h1>

<?=$str_author; ?>

	<section class="u-mt30 u-pa10">
	<div class="uk-flex uk-flex-wrap column3 column2-md">

		<?php /* 001 */ echo_panel('Hannouritu'); ?>
		<?php /* 002 */ echo_panel('DM_size'); ?>
		<?php /* 003 */ echo_panel('DMfuutou_size'); ?>
		<?php /* 004 */ echo_panel('Shinsyotoha'); ?>
		<?php /* 005 */ echo_panel('DM_design'); ?>
		<?php /* 007 */ echo_panel('me-rubin_okurikata'); ?>
		<?php /* 008 */ echo_panel('A4yousi_omosa'); ?>
		<?php /* 009 */ echo_panel('Fuunyuu_fuukan'); ?>
		<?php /* 010 */ echo_panel('DM_hassou_syourotto'); ?>
		<?php /* 011  echo_panel('Kuroneko_dmbin_nissuu'); */ ?>
		<?php /* 012 */ echo_panel('DM_fuunyuubutsu'); ?>
		<?php /* 013 */ echo_panel('DM_sakusei'); ?>
		<?php /* 014 */ echo_panel('DM_kaifuuritu');?>
		<?php /* 016 */ echo_panel('Kami_baitai'); ?>
		<?php /* 017 */ echo_panel('DM_sijyou_kibo'); ?>
		<?php /* 018 */ echo_panel('catch_copy'); ?>
		<?php /* 019 */ echo_panel('DM_tirasi'); ?>
		<?php /* 020 */ echo_panel('DM_kami'); ?>
		<?php /* 021 */ echo_panel('DM_offer'); ?>
		<?php /* 022 */ echo_panel('Kyuumin_DM'); ?>
		<?php /* 023 */ echo_panel('shinki_kaitaku_DM'); ?>
		<?php /* 024 */ echo_panel('Newsletter_tukurikata'); ?>
		<?php /* 025 */ echo_panel('Newsletter_kouka'); ?>
		<?php /* 026 */ echo_panel('DM_kouka_sokutei'); ?>
		<?php /* 027 */ echo_panel('DM_kouka'); ?>
		<?php /* 028 */ echo_panel('DM_merit'); ?>
		<?php /* 029 */ echo_panel('DM_marketing'); ?>
		<?php /* 030 */ echo_panel('DM_hindo'); ?>
		<?php /* 031 */ echo_panel('DM_aisatubun'); ?>
		<?php /* 032 */ echo_panel('DM_Mailbin_okurerumono'); ?>
		<?php /* 033 */ echo_panel('DM_List'); ?>
		<?php /* 034 */ echo_panel('DM_Abtest'); ?>
		<?php /* 035 */ echo_panel('DM_syuukyaku'); ?>
		<?php /* 036 */ echo_panel('DM_atenamen'); ?>
		<?php /* 037 */ echo_panel('DM_BtoB'); ?>
		<?php /* 040 */ echo_panel('tegaki_font'); ?>
		<?php /* 041 */ echo_panel('A4attyakuDM'); ?>
		<?php /* 042 */ echo_panel('sakusei_gaityuu'); ?>
		<?php /* 043 */ echo_panel('hajimeteno_DM'); ?>
		<?php /* 044 */ echo_panel('DM_kotsu'); ?>
		<?php /* 046 */ echo_panel('hassousaki'); ?>
		<?php /* 047 */ echo_panel('repeat_ritu'); ?>
		<?php /* 049 */ echo_panel('DM_hiyoutai_kouka'); ?>
		<?php /* 050 */ echo_panel('DM_toha'); ?>
		<?php /* 051 */ echo_panel('erabikata_okurikata'); ?>
		<?php /* 052 */ echo_panel('rihankyaku_torimodoseru'); ?>
		<?php /* 053 */ echo_panel('Off_Line_marke'); ?>

	</div>
	</section>

	<div class="contact-block uk-hidden-small">
<?php include($_SERVER['DOCUMENT_ROOT'].'/common/inc_new03/index_contact2.html'); ?>
	</div>

