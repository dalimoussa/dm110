<?php
//require_once("../src/bootstrap.php");
require_once("../DL_dm_kaifuurituUP10/lib/bootstrap.php");//確認画面なし
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>DMトラッカーQRコード　お問合せ　DM発送代行センター（QRM）</title>
		<meta name="copyright" content="Copyright DM発送代行センター">
		<meta itemprop="name" content="株式会社メディアボックス">
		<meta itemprop="url" content="https://www.dm110.jp/">
		<meta itemprop="about" content="DM発送代行センター、専任担当者制、DMトラッカー、サンプル・大量封入・多数パターンOK、100通より個人のお客様OK、見積3時間、ゆうメール「発送証明書」、「信書チェック・信書対策」「進捗メール５回以上」営業電話無しお客様の声882件、取引実績8521社、東証プライム上場会社102社">
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- ============================================================ html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/html_head_ssl.html"; ?>
		<!-- ============================================================ /html_head -->
		<link rel="stylesheet" type="text/css" href="/css/sp_new/form.css" media="only screen and (min-width: 0px) and (max-width: 720px)">
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
		<link rel="canonical" href="https://www.dm110.jp<?php echo str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__); ?>/">

<style type="text/css">
<!--
.underline-yellow {
    background: linear-gradient(transparent 60%, #ffff66 60%);
}
.underline-pink {
    background: linear-gradient(transparent 60%, #f1bed0 60%);
}
.mail_form em{
    display: inline-block;
    padding-right: 3em;
}
.mail_form table .vertical div,
.mail_form .vertical ul li {
    float: none;
}


@media (min-width:721px){
.mail_form form,
.mail_form table th,
.mail_form table td {
    font-size: 15px;
}
.mail_form table td .example {
    font-size: 14px;
}
.mail_form .english {
    font-size: 12px;
}
.mail_form table th {
    width: 230px;
}
.mail_form table td textarea {
    width: 99%;
    height: 350px;
    border: 1px solid #ccc;
    border-radius: 2px;
}
.mail_form table .print div:first-child {
    margin: 0 0 0 10px;
}
.mail_form .list ul {
    margin: 0 0 -8px -10px;
}
.mail_form .list ul li {
    margin: 0 0 5px 20px;
}
.btn-large {
    width: 50%;
}
}
-->
</style>
	</head>
	<body class="mail_form" id="contact">

		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_top.html"; ?>

		<div id="container">

			<!--main-->
			<div id="main" class="form_index">
				<!--main-in-->
				<div id="main-in">

					<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">DMトラッカーお問合せフォーム</span><meta itemprop="position" content="2" /></li>
					</ul>

					<!--▽メインコンテンツ-->
					<div id="main-contents3">

						<h2 class="ttl01_wide">DMトラッカー お問合せフォーム</h2>
<?php if ($form->is_error()) : ?>
						<div class="error_alert">
							<p><strong>入力内容にエラーがあります。</strong></p>
							<!--<?php echo $form->errors() ?>-->
						</div>
<?php endif; ?>
						<p class="m20"><strong class="big2">DMトラッカーが自社に合うかチェックしませんか？</strong></p>
						<p>費用を抑えつつ高反応率を狙えるDM施策・ステップメール活用の手法など、<strong>貴社の課題に合わせて最適な活用法をご提案いたします。</strong></p>
						<p>まずはお気軽にお問い合わせください。<br />
							・費用はどれくらい？<br />
							・自社でやる事？<br />
							・自社の業種業態にはどのような使い方が良いか？<br />
							・全部おまかせできるのか？<br />
							最短で成果に結びつけるために、まずは下記フォームよりお気軽にお問い合わせください。</p>

						<form id="myform" method="post" role="form" action="">
							<table>
								<tr>
									<th>
										<em>会社名</em>
										<span class="must">必須</span>
										<span class="english">company name</span>
									</th>
									<td>
										<input type="text" name="company_name" class="middle" placeholder="例　株式会社メディアボックス" value="<?php echo e($form->get('company_name')); ?>" />
										<?php echo $form->error('company_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>部署名</em>
										<span class="must">必須</span>
										<span class="english">department name</span>
									</th>
									<td>
										<input type="text" name="department_name" class="middle" value="<?php echo e($form->get('department_name')); ?>" />
										<span class="example">部署がない場合は「なし」とご記入ください。</span>
										<?php echo $form->error('department_name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>担当者様名</em>
										<span class="must">必須</span>
										<span class="english">charge person name</span>
									</th>
									<td>
										<input type="text" name="name" class="middle" value="<?php echo e($form->get('name')); ?>" />
										<?php echo $form->error('name', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>電子メールアドレス</em>
										<span class="must">必須</span>
										<span class="english">mail address</span>
									</th>
									<td>
										<input type="text" name="email"  class="middle" value="<?php echo e($form->get('email')); ?>" />
										<?php echo $form->error('email', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>電話番号</em>
										<span class="must">必須</span>
										<span class="english">telephone number</span>
									</th>
									<td>
										<input type="text" name="tel" class="middle" value="<?php echo e($form->get('tel')); ?>" />
										<?php echo $form->error('tel', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>DMトラッカーの導入目的</em>
										<span class="english">（複数選択可）</span>
									</th>
									<td class="print vertical">
										<div>
											<label><input type="checkbox" name="enq_01_1" value="既存のDM施策を改善したい"<?php if ($form->get('enq_01_1')) : ?> checked="checked"<?php endif; ?> />既存のDM施策を改善したい</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_01_2" value="新規でDM施策を始めたい"<?php if ($form->get('enq_01_2')) : ?> checked="checked"<?php endif; ?> />新規でDM施策を始めたい</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_01_3" value="ステップメールや1クリックフォーム"<?php if ($form->get('enq_01_3')) : ?> checked="checked"<?php endif; ?> />ステップメールや1クリックフォーム</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_01_4" value="ABテスト"<?php if ($form->get('enq_01_4')) : ?> checked="checked"<?php endif; ?> />ABテスト</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_01_5" value="その他"<?php if ($form->get('enq_01_5')) : ?> checked="checked"<?php endif; ?> />その他</label>
<?php /*											<input type="text" name="enq_11_5" class="middle" value="<?php echo e($form->get('enq_11_5')); ?>" /> */ ?>
										</div>
									</td>
								</tr>
								<tr>
									<th rowspan="2">
										<em>現在のDM発送数</em>
										<span class="must">必須</span>
									</th>
									<td class="list">
										<ul>
											<li><label><input type="radio" name="enq_03" value="月間"<?php if ($form->get('enq_03') == '月間' ) : ?> checked="checked"<?php endif; ?> />月間</label>　</li>
											<li><label><input type="radio" name="enq_03" value="年間"<?php if ($form->get('enq_03') == '年間' ) : ?> checked="checked"<?php endif; ?> />年間</label></li>
										</ul>
										<?php echo $form->error('enq_03', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<td class="list vertical">
										<ul>
											<li><label><input type="radio" name="enq_02" value="1,000通未満"<?php if ($form->get('enq_02') == '1,000通未満' ) : ?> checked="checked"<?php endif; ?> />1,000通未満</label></li>
											<li><label><input type="radio" name="enq_02" value="1,000～5,000通"<?php if ($form->get('enq_02') == '1,000～5,000通' ) : ?> checked="checked"<?php endif; ?> />1,000～5,000通</label></li>
											<li><label><input type="radio" name="enq_02" value="5,000～10,000通"<?php if ($form->get('enq_02') == '5,000～10,000通' ) : ?> checked="checked"<?php endif; ?> />5,000～10,000通</label></li>
											<li><label><input type="radio" name="enq_02" value="10,000通以上"<?php if ($form->get('enq_02') == '10,000通以上' ) : ?> checked="checked"<?php endif; ?> />10,000通以上</label></li>
											<li><label><input type="radio" name="enq_02" value="まだ発送無し"<?php if ($form->get('enq_02') == 'まだ発送無し' ) : ?> checked="checked"<?php endif; ?> />まだ発送無し（DMまるごとパックで全てお任せ）</label></li>
										</ul>
										<?php echo $form->error('enq_02', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>お困りの課題</em>
										<span class="english">（複数選択可）</span>
									</th>
									<td class="print vertical">
										<div>
											<label><input type="checkbox" name="enq_05_1" value="DM反応率の低下"<?php if ($form->get('enq_05_1')) : ?> checked="checked"<?php endif; ?> />DM反応率の低下</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_05_2" value="見込み客リストの枯渇"<?php if ($form->get('enq_05_2')) : ?> checked="checked"<?php endif; ?> />見込み客リストの枯渇</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_05_3" value="ROAS(広告費用対効果)の改善"<?php if ($form->get('enq_05_3')) : ?> checked="checked"<?php endif; ?> />ROAS(広告費用対効果)の改善</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_05_4" value="見込み客リストの枯渇"<?php if ($form->get('enq_05_4')) : ?> checked="checked"<?php endif; ?> />見込み客リストの枯渇</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_05_5" value="離脱顧客の追客"<?php if ($form->get('enq_05_5')) : ?> checked="checked"<?php endif; ?> />離脱顧客の追客</label>
										</div>
										<div>
											<label><input type="checkbox" name="enq_05_6" value="その他"<?php if ($form->get('enq_05_6')) : ?> checked="checked"<?php endif; ?> />その他</label>
<?php /*											<input type="text" name="enq_16_6" class="middle" value="<?php echo e($form->get('enq_16_6')); ?>" /> */ ?>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<em>ご希望の導入時期 </em>
										<span class="must">必須</span>
									</th>
									<td class="list vertical">
										<ul>
											<li><label><input type="radio" name="enq_04" value="すぐに導入したい"<?php if ($form->get('enq_04') == 'すぐに導入したい' ) : ?> checked="checked"<?php endif; ?> />すぐに導入したい</label>　</li>
											<li><label><input type="radio" name="enq_04" value="1～3ヶ月以内"<?php if ($form->get('enq_04') == '1～3ヶ月以内' ) : ?> checked="checked"<?php endif; ?> />1～3ヶ月以内</label>　</li>
											<li><label><input type="radio" name="enq_04" value="情報収集段階"<?php if ($form->get('enq_04') == '情報収集段階' ) : ?> checked="checked"<?php endif; ?> />情報収集段階</label></li>
										</ul>
										<?php echo $form->error('enq_04', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th>
										<em>相談内容</em>
										<span class="must">必須</span>
									</th>
									<td class="list vertical">
										<ul>
											<li><label><input type="radio" name="enq_06" value="よくわからないので相談"<?php if ($form->get('enq_06') == 'よくわからないので相談' ) : ?> checked="checked"<?php endif; ?> />よくわからないので相談</label></li>
											<li><label><input type="radio" name="enq_06" value="費用について相談"<?php if ($form->get('enq_06') == '費用について相談' ) : ?> checked="checked"<?php endif; ?> />費用について相談</label></li>
											<li><label><input type="radio" name="enq_06" value="JVの相談"<?php if ($form->get('enq_06') == 'JVの相談' ) : ?> checked="checked"<?php endif; ?> />JVの相談</label></li>
											<li><label><input type="radio" name="enq_06" value="業務提携の相談"<?php if ($form->get('enq_06') == '業務提携の相談' ) : ?> checked="checked"<?php endif; ?> />業務提携の相談</label></li>
											<li><label><input type="radio" name="enq_06" value="その他"<?php if ($form->get('enq_06') == 'その他' ) : ?> checked="checked"<?php endif; ?> />その他</label></li>
										</ul>
										<?php echo $form->error('enq_06', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
								<tr>
									<th class="p0-r">
										<em>お問合せ内容</em>
										<span class="must">必須</span>
									</th>
									<td>
										<textarea name="comment"><?php echo e($form->get('comment')); ?></textarea>
										<?php echo $form->error('comment', '<span class="error">', '</span>'); ?>
									</td>
								</tr>
							</table>

							<div class="m20">
								<p>※ご記入いただいた情報は、DMトラッカーのご提案およびサービス改善の目的にのみ使用し、第三者に提供することはございません。</p>
							</div>
<? /*
							<div class="m20 p20" style="background:#fce4e4;border:1px solid #e5b8b8">
								<p><strong>【期間限定キャンペーン】今なら初回特典をご用意！</strong><br />
								<strong class="big2 red01">２０２５年５月末までのお申し込みで</strong></p>
								<ol class="m30-l">
								<li>初回システム使用料　50％OFF</li>
								<li>普通郵便料金の約50％OFFの特約ゆうメール無料アドバイス<br />信書部分の変更案を提案</li>
								<li>専門コンサルタントによる戦略相談（60分）を無料ZOOM進呈<br />予算に合った最適な方法を提案します<br />
									※業種業態使用目的により使い方が変わります。<br />　 効果を出したい場合は必ず相談ください。<br />
									※1000通発送でDMトラッカー使用料　3万円～</li>
								</ol>
							</div>

							<table>
								<tr>
									<th class="p0-r">
										<em>備考</em>
										<span class="english">remarks</span>
										<span class="normal"><br />ご質問がありましたら<br />記入ください</span>
									</th>
									<td>
										<textarea name="remarks"><?php echo e($form->get('remarks')); ?></textarea>
									</td>
								</tr>
							</table>
*/ ?>

							<div class="m20-t al-c">
								<p>
									<strong>電話でのお問合せ　0561-37-2027　担当：加藤<br />【営業時間/9:00～18:00　休日/土日祝祭日】</strong><br />
									送信後、３時間以内（当社営業日）に返信いたします。 万一営業日３時間以内に連絡が届かない場合は、<br />
									システム上のトラブルか、 お客様の入力したメールアドレスが間違っている可能性があります。<br />
									その場合は、再度送信いただくか、0561-37-2027　【月～金　9：00～18：00】　加藤までお電話下さい。
									<br /><br />
									下記同意の上、「モニター応募する」ボタンを押してください。
								</p>
							</div>

							<div class="m20-t al-c">
								<div id="privacy_policy">
								<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/privacy_policy.html"; ?>
								</div>
							</div>


							<div id="agree">
								<span class="must">必須</span> <label><input type="checkbox" name="agree"<?php if ($form->get('agree')) : ?> checked="checked"<?php endif; ?> /> 上記内容を確認および了承する</label>
								<?php if ($form->is_error('agree')) : ?><span class="error">チェック必須です</span><?php endif; ?>
							</div>

							<div id="button_block">
<?php /* 								<p class="m10-b">3時間以内に返信します <span class="small">（※営業時間内に限ります）</span></p> */ ?>
								<button type="submit" class="btn btn-form btn-large">DMトラッカーの導入可能性を問い合わせる</button>
								<p class="m10-t red">業種業態・目的により提案内容が変わります<br>お気軽にご相談ください</p>
							</div>
							<input type="hidden" name="recaptchaToken" id="recaptchaToken" />
						</form>

					</div>
					<!--△メインコンテンツ-->

				</div>
				<!--/main-in-->

				<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/go_top.html"; ?>

				<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/footer.html"; ?>
			</div>
			<!--/main-->
			<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/header.html"; ?>

			<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/gnavi.html"; ?>
		</div>


		<?php include($_SERVER['DOCUMENT_ROOT'])."/common/inc_new/anlytics_bottom.html"; ?>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld52WEpAAAAAGm7iSPDcLjOdwrAkDx9BPuLlTCy"></script>
<script>
document.getElementById('myform').addEventListener('submit', onSubmit);
function onSubmit(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ld52WEpAAAAAGm7iSPDcLjOdwrAkDx9BPuLlTCy', {action: 'submit'}).then(function(token) {
            var recaptchaToken = document.getElementById('recaptchaToken');
                    recaptchaToken.value = token;
                    document.getElementById('myform').submit();
        });
    });
}
</script>
	</body>
</html>