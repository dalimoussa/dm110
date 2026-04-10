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
		'label' => 'サービスの使いやすさは',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq2',
		'label' => 'サービスの機能は期待通りでしたか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq3',
		'label' => 'このサービスを今後も継続して利用したいと思いますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq4',
		'label' => '今後もこのサービスを継続して利用したいと思いますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq5',
		'label' => 'このサービスを他の人に薦めたいですか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq6',
		'label' => 'サービス全体に対する総合的な評価は？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq7',
		'label' => 'サービスを利用して最も良かった点は何ですか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq8',
		'label' => 'サービスを利用して改善が必要だと感じた点はありますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq9',
		'label' => 'サービスに追加してほしい機能や特徴はありますか？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'recaptchaToken',
		'label' => 'recaptchaToken',
		'rules' => 'recaptcha'
	),
);
