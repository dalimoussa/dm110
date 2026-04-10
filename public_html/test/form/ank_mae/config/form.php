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
		'field' => 'enq1',
		'label' => 'なぜこのサービスを選びましたか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq2',
		'label' => '類似のサービスを利用したことがありますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq3',
		'label' => 'サービスを選ぶ際に最も重視する要素は何ですか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq4',
		'label' => '不安や懸念事項はありますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq5',
		'label' => '現在抱えている課題や悩みを教えてください。',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'recaptchaToken',
		'label' => 'recaptchaToken',
		'rules' => 'recaptcha'
	),
);
