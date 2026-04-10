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
	),	array (
		'field' => 'number',
		'label' => '発送予定の数',
		'rules' => 'trim|required'
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
);
