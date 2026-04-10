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
		'field' => 'enq_01_1',
		'label' => 'DMトラッカーの導入目的1',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_01_2',
		'label' => 'DMトラッカーの導入目的2',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_01_3',
		'label' => 'DMトラッカーの導入目的3',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_01_4',
		'label' => 'DMトラッカーの導入目的4',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_01_5',
		'label' => 'DMトラッカーの導入目的5',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_03',
		'label' => '現在のDM発送数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_02',
		'label' => '現在のDM発送数',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_05_1',
		'label' => 'お困りの課題1',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_05_2',
		'label' => 'お困りの課題2',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_05_3',
		'label' => 'お困りの課題3',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_05_4',
		'label' => 'お困りの課題4',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_05_5',
		'label' => 'お困りの課題5',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_05_6',
		'label' => 'お困りの課題',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_04',
		'label' => 'ご希望の導入時期',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_06',
		'label' => '相談内容',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'comment',
		'label' => 'お問合せ内容',
		'rules' => 'trim|required'
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
