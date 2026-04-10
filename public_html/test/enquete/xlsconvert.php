<?php
include('../../../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
$reader = new XlsxReader();

/*
//koe-aggregate.xlsx からデータ取得の場合
$spreadsheet = $reader->load('../../../koe-aggregate-test.xlsx'); // ファイル名を指定
$sheet = $spreadsheet->getSheetByName('DATA'); // 読み込むシートを指定
$xls_a = $sheet->rangeToArray('A3:AL1300'); // 配列で取得したい範囲を指定

$AggScore = 0;
$AggCount = [0,0,0,0,0,0];
$AggArray = [];
foreach($xls_a as $key => $v){
	if(!$v[0]) break;

	if    ($v[32] == '1'){$j = 5; ++$AggCount[5];}
	elseif($v[33] == '1'){$j = 4; ++$AggCount[4];}
	elseif($v[34] == '1'){$j = 3; ++$AggCount[3];}
	elseif($v[35] == '1'){$j = 2; ++$AggCount[2];}
	elseif($v[36] == '1'){$j = 1; ++$AggCount[1];}
	else {
		$j = 0;
		$nondata = false;
		foreach($v as $w){
			if($w==1){$nondata = true;}
		}
		if($nondata) ++$AggCount[0];
	}

	$AggScore += $j;
	$AggArray[$v[0]] = $j;
}
*/


$spreadsheet = $reader->load('../../../koe-list-test.xlsx'); // ファイル名を指定
$sheet = $spreadsheet->getSheetByName('WEB書き出し用'); // 読み込むシートを指定
$xls_l = $sheet->rangeToArray('A2:K1300'); // 配列で取得したい範囲を指定

$file_path ='../../../koe-data-test.php';
$i = 0;
$k = 0;
$AggScore = 0;
$AggCount = [0,0,0,0,0,0];

$output_data = '<?php
$enqArray = [
';
foreach($xls_l as $key => $v){
	if(!$v[0] && !$v[2] && !$v[3] && !$v[4]) break;
	if($v[0] && preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[1-9]{1}[0-9]{0,3}$/', $v[0])) $v[0] = DateTime::createFromFormat('m/d/Y', $v[0])->format('Y/m/d');
	$v[1] = trim($v[1]);
	$v[10] = (filter_var($v[10], FILTER_SANITIZE_NUMBER_INT)) ? (int)filter_var($v[10], FILTER_SANITIZE_NUMBER_INT) : 0;
	if(!empty($v[2])){
		$v[2] = filter_var($v[2], FILTER_SANITIZE_NUMBER_INT);
		++$i;
		if(!empty($v[9])){
			$AggScore += $v[10];
			++$AggCount[$v[10]];
		}
	}
	if(filter_var($v[3], FILTER_SANITIZE_NUMBER_INT)){$v[3] = filter_var($v[3], FILTER_SANITIZE_NUMBER_INT);++$k;$ak[$v[3]] = $key;}
	$v[4] = trim($v[4]);
	$v[5] = trim($v[5]);
	$v[6] = trim($v[6]);
	$v[7] = filter_var($v[7], FILTER_SANITIZE_NUMBER_INT);

	if      (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.jpg')){$file_f = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.jpg';}
	else if (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.gif')){$file_f = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.gif';}
	else if (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.png')){$file_f = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_f.png';}
	else $file_f = '';
	if      (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.jpg')){$file_dm = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.jpg';}
	else if (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.gif')){$file_dm = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.gif';}
	else if (file_exists('../images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.png')){$file_dm = '/images'.$v[1].sprintf('%03d',$v[2]).'_'.$v[4].'_dm.png';}
	else $file_dm = '';

	$output_data .= "['$v[0]','$v[1]','$v[2]','$v[3]','$v[4]','$v[5]','$v[6]','$v[7]','$v[8]','$v[9]','$v[10]','$file_f','$file_dm'],";
}
$output_data .= '
];
$koeArray = [
';
ksort($ak);
foreach($ak as $key => $v){
	$output_data .= '"'.$key.'"=>"'.$v.'",';
}
$output_data .= '
];
$AggScore = '.$AggScore.';
$AggCount = [0=>'.$AggCount[0].',1=>'.$AggCount[1].',2=>'.$AggCount[2].',3=>'.$AggCount[3].',4=>'.$AggCount[4].',5=>'.$AggCount[5].',];
';


file_put_contents($file_path, $output_data, LOCK_EX);
file_put_contents('../common/inc_new/num_enquete.inc', $i, LOCK_EX);
file_put_contents('../common/inc_new/num_koe.inc', $k, LOCK_EX);
