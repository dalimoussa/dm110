<?php

return array (
	array (
		'field' => 'comapny_name',
		'label' => '会社名',
		'rules' => 'trim'
	),
	array (
		'field' => 'name',
		'label' => 'お名前',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'zip',
		'label' => '郵便番号',
		'rules' => 'trim|required'
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
		'label' => '電話番号',
		'rules' => 'trim|required|tel'
	),	
	array (
		'field' => 'email',
		'label' => 'メールアドレス',
		'rules' => 'trim|required|email'
	),	
	array (
		'field' => 'agree',
		'label' => '上記内容を確認および了承する',
		'rules' => 'trim|required'
	),	
);
