<?php

return array(
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@postjp.com',

		// 送信先メールアドレス
		'to' => '', // input['name="email"'] に送信する場合は空

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '「使用後 アンケート」を受け付けました（DM発送代行センター事業部）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php'

	),
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@postjp.com',

		// 送信先メールアドレス
		'to' => 'info@dm110.jp',

		// CCメールアドレス
		'cc' => 'akira@dm110.jp',

		// BCCメールアドレス
		'bcc' => 'info@postjp.com',

		// 顧客向けメールの件名
		'subject' => '[ank-%%__serial__%%]「使用後 アンケート」を受け付けました（DM発送代行センター事業部）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php'

	),

);
