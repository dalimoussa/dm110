<?php

return array (
	array (
		'field' => 'comapny_name',
		'label' => '御社名',
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
		'rules' => 'trim|tel'
	),
	array (
		'field' => 'comment',
		'label' => '備考・お問合せ',
		'rules' => 'trim'
	),
	array (
		'field' => 'agree',
		'label' => '上記内容を確認および了承する',
		'rules' => 'trim|required'
	),	
);
