<?php

return array (
	array (
		'field' => 'company_name',
		'label' => '会社名',
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
		'field' => 'tel',
		'label' => '電話番号',
		'rules' => 'trim|required|tel'
	),	
	array (
		'field' => 'enq_02',
		'label' => '問合せ内容',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'comment',
		'label' => 'ご相談内容',
		'rules' => 'trim'
	),
	array (
		'field' => 'remarks',
		'label' => '備考',
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
