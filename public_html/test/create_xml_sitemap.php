<?php header("Content-type: text/html; charset=UTF-8");

// 特定のキーをGETで渡して認証する
if($_GET["akey"] !== "6FNDcJMWvLdo"){
	exit("Bad Request!!");
}

// 実行開始時刻
$start_time = microtime(true);

// 設定
$myurl   = 'https://test.dm110.jp/';
$mypath  = dirname(__FILE__);
//$folders = ['form', 'koe', 'enquete'];
$types = ['.htm', '.html', '.php'];
$ignore_files = ['OLD', 'TEST'];


// haystack が needle で終わるか？（PHP8ならこの関数は標準装備）
function str_ends_with($haystack, $needle) {
  return (strrpos($haystack, $needle) === strlen($haystack) - strlen($needle));
}

function generate_map($loc, $look = ''){
	global $myurl, $mypath, $Pages;
	$str ='';
	$filename = (!empty($look)) ? $look : $loc;
	if(filemtime("$filename")){
		$filemodified = date(DATE_W3C, filemtime("$filename"));
		$str = '<url>
 <loc>'.preg_replace("/\.\//", $myurl, htmlspecialchars($loc, ENT_QUOTES|ENT_XML1, "UTF-8"), 1).'</loc>
 <lastmod>'.$filemodified.'</lastmod>
</url>
';
	$Pages++;
	}
	return $str;
}



$Pages = 0;
$str_map = '';
$str_map .= generate_map('./', './index.php');
$str_map .= generate_map('./DM_0cost.html');
$str_map .= generate_map('./DM_0cost_2.html');
$str_map .= generate_map('./DM_0cost_3.html');
$str_map .= generate_map('./DM_1bankoukateki.html');
$str_map .= generate_map('./DM_1step_2step.html');
$str_map .= generate_map('./DM_1step_2step_chigai.html');
$str_map .= generate_map('./DM_2012kaisya_tokutyou.html');
$str_map .= generate_map('./DM_2013yosou.html');
$str_map .= generate_map('./DM_2015houkousei.html');
$str_map .= generate_map('./DM_25000_kokyakudata.html');
$str_map .= generate_map('./DM_2syurui.html');
$str_map .= generate_map('./DM_2syurui_2.html');
$str_map .= generate_map('./DM_2syurui_3.html');
$str_map .= generate_map('./DM_4000en_40man_3sya.html');
$str_map .= generate_map('./DM_A4saizu_hagaki.html');
$str_map .= generate_map('./DM_B2B_koubaikoudou.html');
$str_map .= generate_map('./DM_DMhassoukaisya_bunrui.html');
$str_map .= generate_map('./DM_DMhassoukaisyameigaaru_fuutou_test.html');
$str_map .= generate_map('./DM_HP_hankyou.html');
$str_map .= generate_map('./DM_HP_syokai_okaiage_okyaku.html');
$str_map .= generate_map('./DM_USP_01.html');
$str_map .= generate_map('./DM_USP_02.html');
$str_map .= generate_map('./DM_USP_03.html');
$str_map .= generate_map('./DM_a4sizehagaki_kamishitu_hannouritu.html');
$str_map .= generate_map('./DM_akazi_dasanai.html');
$str_map .= generate_map('./DM_ank_kouka.html');
$str_map .= generate_map('./DM_atena_label_ichi_best3.html');
$str_map .= generate_map('./DM_atesaki_listnai_kaisya.html');
$str_map .= generate_map('./DM_atesaki_listnai_kozin_01.html');
$str_map .= generate_map('./DM_atesaki_listnai_kozin_02.html');
$str_map .= generate_map('./DM_atumetai_kokyaku.html');
$str_map .= generate_map('./DM_backend.html');
$str_map .= generate_map('./DM_backend_zyouken8.html');
$str_map .= generate_map('./DM_baitai.html');
$str_map .= generate_map('./DM_biniru_yamete.html');
$str_map .= generate_map('./DM_biyouin_teiki.html');
$str_map .= generate_map('./DM_bouhankaisya.html');
$str_map .= generate_map('./DM_btob_shinyou.html');
$str_map .= generate_map('./DM_btob_zettaihoshii.html');
$str_map .= generate_map('./DM_caption_zyuyou.html');
$str_map .= generate_map('./DM_chirashi_posting.html');
$str_map .= generate_map('./DM_cleaning.html');
$str_map .= generate_map('./DM_cm_zasshi_koukasokuteibunrui.html');
$str_map .= generate_map('./DM_colorinsatu_hannouUP.html');
$str_map .= generate_map('./DM_consaru_motomeru.html');
$str_map .= generate_map('./DM_consaru_ryokin_trouble.html');
$str_map .= generate_map('./DM_consarutant.html');
$str_map .= generate_map('./DM_consul_ryokin.html');
$str_map .= generate_map('./DM_daikougyousya_hikaku.html');
$str_map .= generate_map('./DM_darenimukattekaku.html');
$str_map .= generate_map('./DM_dasanaito_sonshitu_gyosyu.html');
$str_map .= generate_map('./DM_dasu_yameru.html');
$str_map .= generate_map('./DM_dore1ban.html');
$str_map .= generate_map('./DM_eigo_1step_2step.html');
$str_map .= generate_map('./DM_eigyoubu.html');
$str_map .= generate_map('./DM_esute_huan_kaisyo.html');
$str_map .= generate_map('./DM_faxdm_tukaiwake.html');
$str_map .= generate_map('./DM_font.html');
$str_map .= generate_map('./DM_front_backend.html');
$str_map .= generate_map('./DM_genkinkaisyu.html');
$str_map .= generate_map('./DM_hannouUP_illust.html');
$str_map .= generate_map('./DM_hannou_sageru_best3.html');
$str_map .= generate_map('./DM_hannou_yoi_dame.html');
$str_map .= generate_map('./DM_hannou_yoi_hassousaki_best5.html');
$str_map .= generate_map('./DM_hannou_zoro.html');
$str_map .= generate_map('./DM_hannouritu.html');
$str_map .= generate_map('./DM_hannouritu2015.html');
$str_map .= generate_map('./DM_hannouritu_100.html');
$str_map .= generate_map('./DM_hannouritu_2020.html');
$str_map .= generate_map('./DM_hannouritu_down.html');
$str_map .= generate_map('./DM_hannouritu_kizyunti.html');
$str_map .= generate_map('./DM_hassou_kaisuu.html');
$str_map .= generate_map('./DM_hassoudaikou_hikakusite_tyosyotansyo.html');
$str_map .= generate_map('./DM_hassoudaikou_igai_tukaikata.html');
$str_map .= generate_map('./DM_hassougyosya_mondaiten.html');
$str_map .= generate_map('./DM_hikkoshi.html');
$str_map .= generate_map('./DM_hinaningyou.html');
$str_map .= generate_map('./DM_hit_5demerit.html');
$str_map .= generate_map('./DM_hlh_chigai.html');
$str_map .= generate_map('./DM_houzin_1banmuzukashii.html');
$str_map .= generate_map('./DM_hurui_zeirishi_syukyaku.html');
$str_map .= generate_map('./DM_ichiban_zyuyou.html');
$str_map .= generate_map('./DM_ichizi_tyushi.html');
$str_map .= generate_map('./DM_iimawashi.html');
$str_map .= generate_map('./DM_ikinokori_insatuya.html');
$str_map .= generate_map('./DM_ima_mukashi_shinki.html');
$str_map .= generate_map('./DM_image_koukoku.html');
$str_map .= generate_map('./DM_insatu_hassou_gaityu.html');
$str_map .= generate_map('./DM_insatu_trouble.html');
$str_map .= generate_map('./DM_insyoku_tankaUP.html');
$str_map .= generate_map('./DM_izakaya.html');
$str_map .= generate_map('./DM_jissen_A4hagaki_3358.html');
$str_map .= generate_map('./DM_jissen_Fuutou_3358.html');
$str_map .= generate_map('./DM_jissen_insatu_3358.html');
$str_map .= generate_map('./DM_jissen_kaisyawake_3358.html');
$str_map .= generate_map('./DM_jissen_tiikibetu_3358.html');
$str_map .= generate_map('./DM_jisya_fuunyuu_DMhassou_irai.html');
$str_map .= generate_map('./DM_jisyade_Dmhassou.html');
$str_map .= generate_map('./DM_kaifu_urawaza10.html');
$str_map .= generate_map('./DM_kaihuritu_up.html');
$str_map .= generate_map('./DM_kaihuu_shikake.html');
$str_map .= generate_map('./DM_kaisya_rinen.html');
$str_map .= generate_map('./DM_kami.html');
$str_map .= generate_map('./DM_kami_atusa.html');
$str_map .= generate_map('./DM_kami_biniru_hannouyoi.html');
$str_map .= generate_map('./DM_kankei_housoku.html');
$str_map .= generate_map('./DM_kashikoi_syukin.html');
$str_map .= generate_map('./DM_kauka_kawanaika9.html');
$str_map .= generate_map('./DM_keiei_antei.html');
$str_map .= generate_map('./DM_kigyou_3month_3year.html');
$str_map .= generate_map('./DM_kigyouzyokamati.html');
$str_map .= generate_map('./DM_kisetu_sayuu_bunseki.html');
$str_map .= generate_map('./DM_kisetusyouhin_daityansu.html');
$str_map .= generate_map('./DM_kokyaku_80_taiheiyo.html');
$str_map .= generate_map('./DM_kokyaku_mitukekata.html');
$str_map .= generate_map('./DM_kokyaku_ridatu_saisyougen.html');
$str_map .= generate_map('./DM_kokyaku_siborikomi.html');
$str_map .= generate_map('./DM_kokyakubunseki_kihon.html');
$str_map .= generate_map('./DM_kokyakumeibo_test.html');
$str_map .= generate_map('./DM_kougaku_syouhin.html');
$str_map .= generate_map('./DM_kouka_dashisaki.html');
$str_map .= generate_map('./DM_kouka_keizoku.html');
$str_map .= generate_map('./DM_koukaaru_sakusei.html');
$str_map .= generate_map('./DM_koukaaru_youso4.html');
$str_map .= generate_map('./DM_koukokudairiten_tukiai.html');
$str_map .= generate_map('./DM_kozinkyaku_syukyaku_hituyou_3tikara.html');
$str_map .= generate_map('./DM_kuchikomi.html');
$str_map .= generate_map('./DM_kyachi.html');
$str_map .= generate_map('./DM_kyakusou_henka.html');
$str_map .= generate_map('./DM_kyokutan_warui_otakata.html');
$str_map .= generate_map('./DM_kyumin.html');
$str_map .= generate_map('./DM_kyuseityo_otoshiana.html');
$str_map .= generate_map('./DM_lifecycle.html');
$str_map .= generate_map('./DM_lifecycle_2.html');
$str_map .= generate_map('./DM_mailmagazain_hannou.html');
$str_map .= generate_map('./DM_mainiti_hasso.html');
$str_map .= generate_map('./DM_mitumori_hanbai.html');
$str_map .= generate_map('./DM_miyasuku_wakariyasuku.html');
$str_map .= generate_map('./DM_mottomo_kantan_bunseki.html');
$str_map .= generate_map('./DM_moukarukaisya_sinkikokyaku_kakutoku.html');
$str_map .= generate_map('./DM_moushikomi_test.html');
$str_map .= generate_map('./DM_moushikomiyoushi_zyuyousei.html');
$str_map .= generate_map('./DM_nankaiokuru_kankaku.html');
$str_map .= generate_map('./DM_net_renkei.html');
$str_map .= generate_map('./DM_net_renkei_2.html');
$str_map .= generate_map('./DM_net_renkei_3.html');
$str_map .= generate_map('./DM_net_renkei_4.html');
$str_map .= generate_map('./DM_net_syukyaku_mondaiten_kaiketuhou.html');
$str_map .= generate_map('./DM_net_syukyakucost_hikaku.html');
$str_map .= generate_map('./DM_newsletter_huto.html');
$str_map .= generate_map('./DM_obon_zengo.html');
$str_map .= generate_map('./DM_oisya.html');
$str_map .= generate_map('./DM_okyaku_kandou_kyoukan.html');
$str_map .= generate_map('./DM_okyaku_kandou_monogatari.html');
$str_map .= generate_map('./DM_okyaku_kiita_hassoudaikou_erabikata.html');
$str_map .= generate_map('./DM_okyaku_kiru.html');
$str_map .= generate_map('./DM_okyaku_koe_torikata.html');
$str_map .= generate_map('./DM_okyaku_koe_tukaikata.html');
$str_map .= generate_map('./DM_okyaku_nensyuu.html');
$str_map .= generate_map('./DM_okyaku_sabetuka.html');
$str_map .= generate_map('./DM_okyakusamakakui.html');
$str_map .= generate_map('./DM_omoshiroi.html');
$str_map .= generate_map('./DM_onazi_nandomo.html');
$str_map .= generate_map('./DM_otokuzyoho.html');
$str_map .= generate_map('./DM_plus_nlh.html');
$str_map .= generate_map('./DM_raibaru_2ten.html');
$str_map .= generate_map('./DM_raibaru_2ten_2.html');
$str_map .= generate_map('./DM_raibaru_2ten_3.html');
$str_map .= generate_map('./DM_raitenkyaku.html');
$str_map .= generate_map('./DM_ranking_koukateki.html');
$str_map .= generate_map('./DM_repeat_syurui.html');
$str_map .= generate_map('./DM_ryoukinhyou_tyui.html');
$str_map .= generate_map('./DM_sagyomiss_husegu.html');
$str_map .= generate_map('./DM_saigensei.html');
$str_map .= generate_map('./DM_saikin_hannouyoi.html');
$str_map .= generate_map('./DM_saiyasune_gyousya.html');
$str_map .= generate_map('./DM_saizyuyouten.html');
$str_map .= generate_map('./DM_sakusei_kikutikara.html');
$str_map .= generate_map('./DM_sedai_koubairyoku.html');
$str_map .= generate_map('./DM_seikou_consept_tukurikata.html');
$str_map .= generate_map('./DM_seikou_itibanzyuyou.html');
$str_map .= generate_map('./DM_seikou_shippai_handan.html');
$str_map .= generate_map('./DM_seikou_syatyou.html');
$str_map .= generate_map('./DM_seitaiin.html');
$str_map .= generate_map('./DM_seizougyou.html');
$str_map .= generate_map('./DM_sendai_syatyo.html');
$str_map .= generate_map('./DM_servicebunkai.html');
$str_map .= generate_map('./DM_setumei_muzukashii.html');
$str_map .= generate_map('./DM_shiborikomi.html');
$str_map .= generate_map('./DM_shinsaiikou_henka.html');
$str_map .= generate_map('./DM_shiten_haishi.html');
$str_map .= generate_map('./DM_shitteokitai20.html');
$str_map .= generate_map('./DM_shitumonnaiyou.html');
$str_map .= generate_map('./DM_shiwatori_cream.html');
$str_map .= generate_map('./DM_shizyokaitaku_yattehaikenai.html');
$str_map .= generate_map('./DM_sikyouhin.html');
$str_map .= generate_map('./DM_situmon.html');
$str_map .= generate_map('./DM_smartphone.html');
$str_map .= generate_map('./DM_sontokushinri.html');
$str_map .= generate_map('./DM_sori_up.html');
$str_map .= generate_map('./DM_sugu_uriageUP.html');
$str_map .= generate_map('./DM_syakaikouken_syukyaku.html');
$str_map .= generate_map('./DM_syanai_sakuseiirai.html');
$str_map .= generate_map('./DM_syanaitaisei.html');
$str_map .= generate_map('./DM_syashin_test.html');
$str_map .= generate_map('./DM_syashin_tukaikata.html');
$str_map .= generate_map('./DM_syatyo_genba.html');
$str_map .= generate_map('./DM_syatyo_okuru.html');
$str_map .= generate_map('./DM_syatyo_syashin.html');
$str_map .= generate_map('./DM_syohin_kau_ugoki.html');
$str_map .= generate_map('./DM_syohin_wakarinikui_kakikata.html');
$str_map .= generate_map('./DM_syohintensu.html');
$str_map .= generate_map('./DM_syukyaku_eigyo_follow.html');
$str_map .= generate_map('./DM_syukyaku_okyaku_wakeru.html');
$str_map .= generate_map('./DM_syukyakuhou_kako_genzai_korekara.html');
$str_map .= generate_map('./DM_syuzou.html');
$str_map .= generate_map('./DM_taiheiyouberuto.html');
$str_map .= generate_map('./DM_taikai.html');
$str_map .= generate_map('./DM_tantosya_shiruhouhou.html');
$str_map .= generate_map('./DM_tegaki.html');
$str_map .= generate_map('./DM_teikakaku_otoshiana.html');
$str_map .= generate_map('./DM_tekisut_mibae.html');
$str_map .= generate_map('./DM_test_point.html');
$str_map .= generate_map('./DM_test_tiiki.html');
$str_map .= generate_map('./DM_tiiki1tuu.html');
$str_map .= generate_map('./DM_tisaku_test.html');
$str_map .= generate_map('./DM_tokuten_otoshiana.html');
$str_map .= generate_map('./DM_tomeihutou_aisatuzyo.html');
$str_map .= generate_map('./DM_torihiki_2300_1.html');
$str_map .= generate_map('./DM_torihiki_2300_2.html');
$str_map .= generate_map('./DM_torihikizisseki_okyaku_kanziru.html');
$str_map .= generate_map('./DM_toutyaku.html');
$str_map .= generate_map('./DM_tuyomi.html');
$str_map .= generate_map('./DM_tyekku.html');
$str_map .= generate_map('./DM_tyosyo_tansyo.html');
$str_map .= generate_map('./DM_tyottokawatta_madoakihuto.html');
$str_map .= generate_map('./DM_umai_gyousyu.html');
$str_map .= generate_map('./DM_uriage_nayamu.html');
$str_map .= generate_map('./DM_usankusai.html');
$str_map .= generate_map('./DM_usp_syohin_levelup.html');
$str_map .= generate_map('./DM_wakariyasui_tukurikata.html');
$str_map .= generate_map('./DM_wakate_beteran.html');
$str_map .= generate_map('./DM_watashi_chirashi_benkyou.html');
$str_map .= generate_map('./DM_yakiimo_sessyokuhindo.html');
$str_map .= generate_map('./DM_yamato_sagawa_sizezyuryo.html');
$str_map .= generate_map('./DM_yasuku_hagaki_fuutou.html');
$str_map .= generate_map('./DM_yasuku_okuru.html');
$str_map .= generate_map('./DM_yasuku_okuru_okyaku.html');
$str_map .= generate_map('./DM_yasuuri_tsugi.html');
$str_map .= generate_map('./DM_yoga_kyachi_shitumon5.html');
$str_map .= generate_map('./DM_yoi_hassoudaikou_erabikata.html');
$str_map .= generate_map('./DM_yoiyasuuri_waruiyasuuri.html');
$str_map .= generate_map('./DM_yomareru_yomarenai.html');
$str_map .= generate_map('./DM_yosan_sukunai.html');
$str_map .= generate_map('./DM_yuryokokyaku_teigi.html');
$str_map .= generate_map('./DM_zibun_iitaikoto_kakanai.html');
$str_map .= generate_map('./DM_zinzaibusoku_nlh.html');
$str_map .= generate_map('./DM_zyosei_gentei.html');
$str_map .= generate_map('./DM_zyouhosyouzai_nenmatsu.html');
$str_map .= generate_map('./DM_zyozu_benkyohou.html');
$str_map .= generate_map('./DM_zyozu_benkyohou_2.html');
$str_map .= generate_map('./2enryoukin.html');
$str_map .= generate_map('./A4accyaku_hagaki.html');
$str_map .= generate_map('./atenaDW.html');
$str_map .= generate_map('./atenaUP.html');
$str_map .= generate_map('./Atena_label_ichi_ichiran.html');
$str_map .= generate_map('./baitaibetsu.html');
$str_map .= generate_map('./beginner.html');
$str_map .= generate_map('./beginner1.html');
$str_map .= generate_map('./beginner2.html');
$str_map .= generate_map('./beginner3.html');
$str_map .= generate_map('./beginner4.html');
$str_map .= generate_map('./beginner5.html');
$str_map .= generate_map('./calorinsaturyoukin.htm');
$str_map .= generate_map('./catalogs.html');
$str_map .= generate_map('./check_houhou.html');
$str_map .= generate_map('./chienzero.html');
$str_map .= generate_map('./DMtest_kaisya.html');
$str_map .= generate_map('./DMyasuku_okuru_syousassi.html');
$str_map .= generate_map('./DM_zyozu_benkyohou_3.html');
$str_map .= generate_map('./dwn_index.html');
$str_map .= generate_map('./enquete/', './enquete/index.php');
$str_map .= generate_map('./enquete/aggregate/', './enquete/aggregate.php');
$str_map .= generate_map('./Film_Fuutou.htm');
$str_map .= generate_map('./form/kaizen_teian/', './form/kaizen_teian/index.php');
$str_map .= generate_map('./fukuzatu.html');
$str_map .= generate_map('./fuutou_erabi.html');
$str_map .= generate_map('./genjyou_taisaku.htm');
$str_map .= generate_map('./gyoukai.html');
$str_map .= generate_map('./gyousya_miwake.html');
$str_map .= generate_map('./hassou_nomi.html');
$str_map .= generate_map('./hon_mokuji.html');
$str_map .= generate_map('./ichiran.html');
$str_map .= generate_map('./interview01.html');
$str_map .= generate_map('./interview02.html');
$str_map .= generate_map('./keieihousin.html');
$str_map .= generate_map('./koe/', '../koe-data.php');
$str_map .= generate_map('./kojinjyouhou.html');
$str_map .= generate_map('./kojinnjyouhou_kannri.html');
$str_map .= generate_map('./kosutosakugen.html');
$str_map .= generate_map('./kouritutaisei.html');
$str_map .= generate_map('./message.html');
$str_map .= generate_map('./miss.html');
$str_map .= generate_map('./missbousi.html');
$str_map .= generate_map('./mitsumori_mikata.html');
$str_map .= generate_map('./Muryo_Soudan.html');
$str_map .= generate_map('./Naisyoku_bosyu.html');
$str_map .= generate_map('./Naze_yasui.htm');
$str_map .= generate_map('./newsletter.html');
$str_map .= generate_map('./newsletter_A3B4_color_Ryoukin.html');
$str_map .= generate_map('./newsletter_A3_kuro_Ryoukin.html');
$str_map .= generate_map('./newsletter_A4B5_color_Ryoukin.html');
$str_map .= generate_map('./newsletter_A4_kuro_Ryoukin.html');
$str_map .= generate_map('./newsletter_B4_kuro_Ryoukin.html');
$str_map .= generate_map('./newsletter_B5_kuro_Ryoukin.html');
$str_map .= generate_map('./Newsletter_daikou_kaisya.html');
$str_map .= generate_map('./nouki.html');
$str_map .= generate_map('./okyaku_koe_Mail.htm');
$str_map .= generate_map('./okyaku_koe_Mail_02.htm');
$str_map .= generate_map('./option.html');
$str_map .= generate_map('./print_hassou', './print_hassou.php');
$str_map .= generate_map('./Q&A.html');
$str_map .= generate_map('./Q&A_A4accyaku_hagaki.html');
$str_map .= generate_map('./Q&A_atemeidata_nyukoudata.html');
$str_map .= generate_map('./Q&A_atemeiraberu.html');
$str_map .= generate_map('./Q&A_dmsakusei.html');
$str_map .= generate_map('./Q&A_dmsyukyaku.html');
$str_map .= generate_map('./Q&A_hunyu.html');
$str_map .= generate_map('./Q&A_hutou.html');
$str_map .= generate_map('./Q&A_insatunituite.html');
$str_map .= generate_map('./Q&A_kami.html');
$str_map .= generate_map('./Q&A_kozinzyouhou.html');
$str_map .= generate_map('./Q&A_mediabox.html');
$str_map .= generate_map('./Q&A_mediabox_hassou.html');
$str_map .= generate_map('./Q&A_mitumori.html');
$str_map .= generate_map('./Q&A_moushikomi.html');
$str_map .= generate_map('./Q&A_ryoukin.html');
$str_map .= generate_map('./Q&A_sonota.html');
$str_map .= generate_map('./Q&A_zenpan_hassou.html');
$str_map .= generate_map('./Ryoukin_A4.htm');
$str_map .= generate_map('./Ryoukin_A4towa.htm');
$str_map .= generate_map('./sagyou_nomi', './sagyou_nomi.php');
$str_map .= generate_map('./sennin.html');
$str_map .= generate_map('./sennintantousya.html');
$str_map .= generate_map('./Shakai_kouken.htm');
$str_map .= generate_map('./shinsyo.html');
$str_map .= generate_map('./shinsyo_gaiyou.html');
$str_map .= generate_map('./shinsyo_sansyouzyoubun.html');
$str_map .= generate_map('./shinsyo_shishin.html');
$str_map .= generate_map('./shitsumon10.html');
$str_map .= generate_map('./sitauke.html');
$str_map .= generate_map('./SiteMap.html');
$str_map .= generate_map('./soejyou.html');
$str_map .= generate_map('./tantousya_point.html');
$str_map .= generate_map('./testDM.html');
$str_map .= generate_map('./thyosyosyoukai.html');
$str_map .= generate_map('./tokuteisyotorihikihou.html');
$str_map .= generate_map('./torihiki_jisseki.htm');
$str_map .= generate_map('./tosyokan.html');
$str_map .= generate_map('./unnsoukaisya.html');
$str_map .= generate_map('./uriageUP_DMkaisya.html');
$str_map .= generate_map('./yamato_haisounittei.html');
$str_map .= generate_map('./yamato_mail_02.htm');
$str_map .= generate_map('./yamato_mail_03.htm');
$str_map .= generate_map('./yasusugiruDM.html');
$str_map .= generate_map('./yumail_gaiyo', './yumail_gaiyo.php');
$str_map .= generate_map('./DM_matome/', './DM_matome/000_top.php');
$str_map .= generate_map('./DM_matome/Hannouritu/', './DM_matome/001_Hannouritu.php');
$str_map .= generate_map('./DM_matome/DM_size/', './DM_matome/002_DM_size.php');
$str_map .= generate_map('./DM_matome/DMfuutou_size/', './DM_matome/003_Fuutou_size.php');
$str_map .= generate_map('./DM_matome/Shinsyotoha/', './DM_matome/004_Shinsyotoha.php');
$str_map .= generate_map('./DM_matome/DM_design/', './DM_matome/005_DM_design.php');
$str_map .= generate_map('./DM_matome/me-rubin_okurikata/', './DM_matome/007_me-rubin_okurikata.php');
$str_map .= generate_map('./DM_matome/A4yousi_omosa/', './DM_matome/008_A4yousi_omosa.php');
$str_map .= generate_map('./DM_matome/Fuunyuu_fuukan/', './DM_matome/009_Fuunyuu_fuukan.php');
$str_map .= generate_map('./DM_matome/DM_hassou_syourotto/', './DM_matome/010_DM_hassou_syourotto.php');
// $str_map .= generate_map('./DM_matome/Kuroneko_dmbin_nissuu/', './DM_matome/011_Kuroneko_dmbin_nissuu.php');
$str_map .= generate_map('./DM_matome/DM_fuunyuubutsu/', './DM_matome/012_DM_naiyou.php');
$str_map .= generate_map('./DM_matome/DM_sakusei/', './DM_matome/013_DM_sakusei.php');
$str_map .= generate_map('./DM_matome/DM_kaifuuritu/', './DM_matome/014_DM_kaifuuritu.php');
$str_map .= generate_map('./DM_matome/Kami_baitai/', './DM_matome/016_Kami_baitai.php');
$str_map .= generate_map('./DM_matome/DM_sijyou_kibo/', './DM_matome/017_DM_sijyou_kibo.php');
$str_map .= generate_map('./DM_matome/catch_copy/', './DM_matome/018_catch_copy.php');
$str_map .= generate_map('./DM_matome/DM_tirasi/', './DM_matome/019_DM_tirasi.php');
$str_map .= generate_map('./DM_matome/DM_kami/', './DM_matome/020_DM_kami.php');
$str_map .= generate_map('./DM_matome/DM_offer/', './DM_matome/021_DM_offer.php');
$str_map .= generate_map('./DM_matome/Kyuumin_DM/', './DM_matome/022_Kyuumin_DM.php');
$str_map .= generate_map('./DM_matome/shinki_kaitaku_DM/', './DM_matome/023_shinki_kaitaku_DM.php');
$str_map .= generate_map('./DM_matome/Newsletter_tukurikata/', './DM_matome/024_Newsletter_tukurikata.php');
$str_map .= generate_map('./DM_matome/Newsletter_kouka/', './DM_matome/025_Newsletter_kouka.php');
$str_map .= generate_map('./DM_matome/DM_kouka_sokutei/', './DM_matome/026_DM_kouka_sokutei.php');
$str_map .= generate_map('./DM_matome/DM_kouka/', './DM_matome/027_DM_kouka.php');
$str_map .= generate_map('./DM_matome/DM_merit/', './DM_matome/028_DM_merit.php');
$str_map .= generate_map('./DM_matome/DM_marketing/', './DM_matome/029_DM_marketing.php');
$str_map .= generate_map('./DM_matome/DM_hindo/', './DM_matome/030_DM_hindo.php');
$str_map .= generate_map('./DM_matome/DM_aisatubun/', './DM_matome/031_DM_aisatubun.php');
$str_map .= generate_map('./DM_matome/DM_Mailbin_okurerumono/', './DM_matome/032_DM_Mailbin_okurerumono.php');
$str_map .= generate_map('./DM_matome/DM_List/', './DM_matome/033_DM_List.php');
$str_map .= generate_map('./DM_matome/DM_Abtest/', './DM_matome/034_DM_Abtest.php');
$str_map .= generate_map('./DM_matome/DM_syuukyaku/', './DM_matome/035_DM_syuukyaku.php');
$str_map .= generate_map('./DM_matome/DM_atenamen/', './DM_matome/036_DM_atenamen.php');
$str_map .= generate_map('./DM_matome/DM_BtoB/', './DM_matome/037_DM_BtoB.php');
$str_map .= generate_map('./DM_matome/tegaki_font/', './DM_matome/040_tegaki_font.php');
$str_map .= generate_map('./DM_matome/A4attyakuDM/', './DM_matome/041_A4attyakuDM.php');
$str_map .= generate_map('./DM_matome/sakusei_gaityuu/', './DM_matome/042_sakusei_gaityuu.php');
$str_map .= generate_map('./DM_matome/hajimeteno_DM/', './DM_matome/043_hajimeteno_DM.php');
$str_map .= generate_map('./DM_matome/DM_kotsu/', './DM_matome/044_DM_kotsu.php');
$str_map .= generate_map('./DM_matome/hassousaki/', './DM_matome/046_hassousaki.php');
$str_map .= generate_map('./DM_matome/repeat_ritu/', './DM_matome/047_repeat_ritu.php');
$str_map .= generate_map('./DM_matome/DM_hiyoutai_kouka/', './DM_matome/049_DM_hiyoutai_kouka.php');
$str_map .= generate_map('./DM_matome/DM_toha/', './DM_matome/050_DM_toha.php');
$str_map .= generate_map('./DM_matome/erabikata_okurikata/', './DM_matome/051_erabikata_okurikata.php');
$str_map .= generate_map('./DM_matome/rihankyaku_torimodoseru/', './DM_matome/052_rihankyaku_torimodoseru.php');
$str_map .= generate_map('./DM_matome/Off_Line_marke/', './DM_matome/053_Off_Line_marke.php');

$str_map .= generate_map('./bosyuu_youkou', './bosyuu_youkou.php');
$str_map .= generate_map('./Customer-reviews/', '../koe-data.php');
$str_map .= generate_map('./muryou_6ko', './muryou_6ko.php');
$str_map .= generate_map('./QRDM_price', './QRDM_price.php');
$str_map .= generate_map('./qrm', './qrm.php');
$str_map .= generate_map('./qrm_m_d', './qrm_m_d.php');
//$str_map .= generate_map('./qrm_rei', './qrm_rei.php');
$str_map .= generate_map('./qrm_use', './qrm_use.php');
$str_map .= generate_map('./staff_information', './staff_information.php');
$str_map .= generate_map('./yuubin_neage_taisaku', './yuubin_neage_taisaku.php');

$str_map .= generate_map('./han4_nm', './han4_nm.php');
$str_map .= generate_map('./QRDM_monitor_nm', './QRDM_monitor_nm.php');
$str_map .= generate_map('./step_mail', './step_mail.php');
$str_map .= generate_map('./DM_kakumei', './DM_kakumei.php');
$str_map .= generate_map('./DMT_towa', './DMT_towa.php');
$str_map .= generate_map('./DMT_step_mail', './DMT_step_mail.php');
$str_map .= generate_map('./1clic_form', './1clic_form.php');
//$str_map .= generate_map('./DMT_tukaikata', './DMT_tukaikata.php');
//$str_map .= generate_map('./DMT_kounyuu_kijyun', './DMT_kounyuu_kijyun.php');
//$str_map .= generate_map('./DMT_pagebetu_kentou_dankai', './DMT_pagebetu_kentou_dankai.php');
$str_map .= generate_map('./form/DMT_mousikomi_02/', './form/DMT_mousikomi_02/index.php');
$str_map .= generate_map('./DMT_QA', './DMT_QA.php');
$str_map .= generate_map('./rakurakuryoukin', './rakurakuryoukin.php');
$str_map .= generate_map('./kiyaku', './kiyaku.php');
$str_map .= generate_map('./tasya-kotowarareta', './tasya-kotowarareta.php');
$str_map .= generate_map('./DMsakusei-full', './DMsakusei-full.php');
$str_map .= generate_map('./kaisyaannai', './kaisyaannai.php');
$str_map .= generate_map('./sinki-kakutoku', './sinki-kakutoku.php');
$str_map .= generate_map('./koe-fuan-kekka', './koe-fuan-kekka.php');

$str_map .= generate_map('./sinario/syatyou_DM', './sinario/syatyou_DM.php');
$str_map .= generate_map('./sinario/last-M', './sinario/last-M.php');
$str_map .= generate_map('./sinario/kutikomi', './sinario/kutikomi.php');
$str_map .= generate_map('./sinario/kokyakubetu-4tu', './sinario/kokyakubetu-4tu.php');
$str_map .= generate_map('./sinario/jyouken', './sinario/jyouken.php');

$site_map  = "";
$site_map .= '<?xml version="1.0" encoding="UTF-8"?>'."\n";
$site_map .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">'."\n";
$site_map .= '<!-- Number of Detected Pages : '.$Pages.' -->'."\n";
$site_map .= '<!-- Processing time          : '.(microtime(true) - $start_time).'sec -->'."\n";
$site_map .= '<!-- Last Modified            : '.date(DATE_W3C).' -->'."\n";

$fp = fopen("$mypath/sitemap_".date("Y-m-d").".xml", "w");
	fwrite($fp, $site_map.$str_map);
	fwrite($fp, '</urlset>');
fclose($fp);

?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>sitemap.xmlの作成</h1>

<?php

/*$result1 = glob('./*');
$result2 = glob('./DM_matome/*');
$result  = array_merge($result1, $result2);

$stack1  = '';
$stack2  = '';
foreach($result as $value){

	$detect = false;
	foreach($types as $type){
		if(str_ends_with($value, $type)){$detect = true;break;}
	}
	if($detect){
		foreach($ignore_files as $ignore){
			if(strpos($value, $ignore) !== false){$detect = false;break;}
		}
		if($detect){
			echo '$str_map .= generate_map(\''.$value.'\');'."<br>\n";
		}else{
			$stack1 .=  ">　".$value."<br>\n";
		}
	}else{
		$stack2 .=  ">　　".$value."<br>\n";
	}

}
echo "<br><hr><br>\n".$stack1;
echo "<br><hr><br>\n".$stack2;
*/

echo 'Processing time          : '.(microtime(true) - $start_time).'sec'."\n";
?>

<p><a href="/sitemap.xml" target="_blank">sitemap.xml</a>の作成が完了しました。</p>
<?php
echo "<br><hr>\n<pre>".$str_map."</pre>";
?>

</body></html>

