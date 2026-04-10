<?php
return array (
	array (
		'field' => 'company_name',
		'label' => '会社名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'pc_name',
		'label' => '担当者様名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'tel',
		'label' => '会社の電話番号',
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
