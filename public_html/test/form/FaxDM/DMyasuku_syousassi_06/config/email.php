<?php

return array(
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@dm110.jp',

		// 送信先メールアドレス
		'to' => '', // input['name="email"'] に送信する場合は空

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '「DMを安く送る方法」小冊子プレゼント　受け付けました（DM発送代行センターDM110）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php'

	),
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@dm110.jp',

		// 送信先メールアドレス
		'to' => 'info@dm110.jp',

		// CCメールアドレス
		'cc' => 'akira@dm110.jp',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '「DMを安くする」小冊子申込　06',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php'

	),

);
