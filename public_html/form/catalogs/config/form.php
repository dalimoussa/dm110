<?php

return array (
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
		'label' => '担当者様名',
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
		'field' => 'pref',
		'label' => '都道府県',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'address1',
		'label' => '市区町村',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'address2',
		'label' => '丁目番地',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'tel',
		'label' => '会社の電話番号',
		'rules' => 'trim|required|tel'
	),	
	array (
		'field' => 'fax',
		'label' => '会社のFAX番号',
		'rules' => 'trim|required|tel'
	),
	array (
		'field' => 'kinds1',
		'label' => '封入物の種類1',
		'rules' => 'trim'
	),
	array (
		'field' => 'kinds2',
		'label' => '封入物の種類2',
		'rules' => 'trim'
	),
	array (
		'field' => 'kinds3',
		'label' => '封入物の種類3',
		'rules' => 'trim'
	),
	array (
		'field' => 'kinds4',
		'label' => '封入物の種類4',
		'rules' => 'trim'
	),
	array (
		'field' => 'pages',
		'label' => '封入物のページ数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'thickness',
		'label' => '封入物の厚さ',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'wight',
		'label' => '封入物の重さ',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'number',
		'label' => '発送予定の数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'copies',
		'label' => '1つの封筒に入れる予定部数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'envelope',
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
	//array (
		//'field' => 'where',
		//'label' => '当HPをどこで知りましたか？',
		//'rules' => 'trim|required'
	//),	
	//array (
		//'field' => 'keyword',
		//'label' => '検索キーワード・紹介者名・紹介ホームページ名',
		//'rules' => 'trim'
	//),		
	array (
		'field' => 'comment',
		'label' => '印刷内容・現状・お困りごと',
		'rules' => 'trim'
	),
	array (
		'field' => 'agree',
		'label' => '上記内容を確認および了承する',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'recaptchaToken',
		'label' => 'recaptchaToken',
		'rules' => 'recaptcha'
	),
);
