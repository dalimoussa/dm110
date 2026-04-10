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
		'field' => 'enq_01',
		'label' => 'DMの目的',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_02',
		'label' => '郵送DMは初めて',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_03',
		'label' => '個人法人',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_04',
		'label' => '発送先は新規顧客？',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_05',
		'label' => '御社を調べる時のURL',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_06',
		'label' => '重視',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_07_1',
		'label' => '他の連携媒体1',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_07_2',
		'label' => '他の連携媒体2',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_07_3',
		'label' => '他の連携媒体3',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_07_4',
		'label' => '他の連携媒体4',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_07_5',
		'label' => '他の連携媒体5',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_07_6',
		'label' => '他の連携媒体6',
		'rules' => 'trim'
	),
	array (
		'field' => 'enq_08',
		'label' => '強調できる数字や結果',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_09',
		'label' => '商品の具体的な特徴',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_10',
		'label' => '使用前・使用中・使用後',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_11',
		'label' => '競合と比較した際の優位性',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_12',
		'label' => '主要な実績',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_13',
		'label' => '最も多い評価・感想',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_14',
		'label' => '予算の上限',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_15',
		'label' => 'ABテスト',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_16',
		'label' => '目指したい成果',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_17',
		'label' => '現状一番困っていること',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'enq_18',
		'label' => '問題定義から学び',
		'rules' => 'trim|required'
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
