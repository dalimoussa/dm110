<?php
include('../../../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
$reader = new XlsxReader();
$spreadsheet = $reader->load('../../../koe-aggregate-test.xlsx'); // ファイル名を指定
$sheet = $spreadsheet->getSheetByName('DATA'); // 読み込むシートを指定

$xls = $sheet->rangeToArray('B3:AK1500'); // 配列で取得したい範囲を指定


$file_path ='../../../aggre-data-test.php';
	$agg = 1;
	$aggArray = [];
	foreach( $xls as $row ){
		$nondata = false;
		foreach( $row as $key => $v ){
			if($v==1){ $aggArray[$key] = ++$aggArray[$key]; $nondata = true;}
		}
		if($nondata) ++$agg;
	}
	$output_data = '<?php
$aggArray = [ ';
	foreach($aggArray as $key => $v){
		$output_data .= '"'.$key.'" =>'.$v.',';
	}
	$output_data .= ' ];
$agg = '.$agg.';
';
file_put_contents($file_path, $output_data, LOCK_EX);
