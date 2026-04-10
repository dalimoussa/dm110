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
		'bcc' => 'akira@dm110.jp',

		// 顧客向けメールの件名
		'subject' => '「添え状に印刷するQRコード」受付けました。メディアボックス（DM発送代行センター事業部）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php'

	),
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@postjp.com',

		// 送信先メールアドレス
		'to' => 'info@postjp.com',

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '[QRDM-%%__serial__%%]「添え状に印刷するQRコード」受付けました。（DM発送代行センター事業部））',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php'

	),

);
