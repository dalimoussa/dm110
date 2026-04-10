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
		'subject' => '[cam001-%%__serial__%%]「CD＋本＋資料 申し込み」を受け付けました。（DM発送代行センターDM110）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php'

	),
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'DM発送代行センター',

		// 送信元メールアドレス
		'from' => 'info@postjp.com',

		// 送信先メールアドレス
		//'to' => 'info@postjp.com',
		'to' => 'info@dm110.jp,akira@dm110.jp',

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '[cam001-%%__serial__%%]「CD＋本＋資料 申し込み」を受け付けました。（DM発送代行センターDM110）',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php'

	),

);
