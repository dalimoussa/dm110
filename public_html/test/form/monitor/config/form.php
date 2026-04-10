<?php

return array (
	array (
		'field' => 'comapny_name',
		'label' => '御社名',
		'rules' => 'trim|required'
	),
/*
	array (
		'field' => 'department_name',
		'label' => '部署名',
		'rules' => 'trim|required'
	),
*/
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
		'field' => 'description',
		'label' => '封入物の目次説明',
		'rules' => 'trim'
	),
	array (
		'field' => 'contents',
		'label' => '目次',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr1_url',
		'label' => 'QR-1-飛び先URL',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr1_copy',
		'label' => 'QR-1-キャッチコピー',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr1_mail',
		'label' => 'QR-1-メールアドレス',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr2_url',
		'label' => 'QR-2-飛び先URL',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr2_copy',
		'label' => 'QR-2-キャッチコピー',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr2_mail',
		'label' => 'QR-2-メールアドレス',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr3_url',
		'label' => 'QR-3-飛び先URL',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr3_copy',
		'label' => 'QR-3-キャッチコピー',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr3_mail',
		'label' => 'QR-3-メールアドレス',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr4_url',
		'label' => 'QR-4-飛び先URL',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr4_copy',
		'label' => 'QR-4-キャッチコピー',
		'rules' => 'trim'
	),
	array (
		'field' => 'qr4_mail',
		'label' => 'QR-4-メールアドレス',
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
