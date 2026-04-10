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
		'subject' => '[2en-%%__serial__%%]「黒一色印刷お見積り（A3・A4・B4・B5）」を受け付けました。（DM発送代行センターDM110）',

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
		'subject' => '[2en-%%__serial__%%]「黒一色印刷お見積り（A3・A4・B4・B5）」を受け付けました。（DM発送代行センターDM110）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php'

	),

);
