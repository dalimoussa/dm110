<?php

return array (
	array (
		'field' => 'company_name',
		'label' => '御社名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'name',
		'label' => 'お名前',
		'rules' => 'trim|required'
	),	
	array (
		'field' => 'email',
		'label' => '電子メール',
		'rules' => 'trim|required|email'
	),
	array (
		'field' => 'tel',
		'label' => '会社の電話番号',
		'rules' => 'trim|required|tel'
	),	
	array (
		'field' => 'number',
		'label' => '大体の発送数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'comment',
		'label' => 'ご相談内容',
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
