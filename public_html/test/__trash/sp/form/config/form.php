<?php

return array (
	array (
		'field' => 'type',
		'label' => '封入物の種類',
		'rules' => 'trim|required',
		'options' => array('紙', 'ホッチキス止めの紙', '小冊子', 'カタログ', 'その他')
	),
	array (
		'field' => 'sheet',
		'label' => '発送予定数',
		'rules' => 'required|number'
	),
	array (
		'field' => 'sheet2',
		'label' => 'ひとつの封筒に入れる予定部数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'type2',
		'label' => '封筒の種類',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'print1_size',
		'label' => '黒一色印刷1 サイズ',
		'rules' => 'trim'
	),	
	array (
		'field' => 'print1_color',
		'label' => '黒一色印刷1 紙の色',
		'rules' => 'trim'
	),	
	array (
		'field' => 'print1_method',
		'label' => '黒一色印刷1 印刷方法',
		'rules' => 'trim'
	),	
	array (
		'field' => 'print1_num',
		'label' => '黒一色印刷1 印刷枚数',
		'rules' => 'trim'
	),	
	array (
		'field' => 'print2_size',
		'label' => 'カラー印刷 サイズ',
		'rules' => 'trim'
	),
	array (
		'field' => 'print2_method',
		'label' => 'カラー印刷 印刷方法',
		'rules' => 'trim'
	),
	array (
		'field' => 'print2_num',
		'label' => 'カラー印刷 印刷枚数',
		'rules' => 'trim'
	),
	array (
		'field' => 'delivery',
		'label' => '現在の発送方法',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'next_shipping',
		'label' => '次回発送予定',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'comment',
		'label' => '印刷内容・現状・お困りごと',
		'rules' => 'trim'
	),
	
	array (
		'field' => 'comapny_name',
		'label' => '御社名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'department_name',
		'label' => '部署名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'name',
		'label' => '担当者様お名前',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'email',
		'label' => '電子メール',
		'rules' => 'trim|required|email'
	),	
	array (
		'field' => 'zip',
		'label' => '郵便番号',
		'rules' => 'trim'
	),	
	array (
		'field' => 'address',
		'label' => '御社所在地',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'tel',
		'label' => '御社電話番号',
		'rules' => 'trim|required|tel'
	),	
	array (
		'field' => 'fax',
		'label' => '御社FAX番号',
		'rules' => 'trim|required|tel'
	),

);
