<?php
	date_default_timezone_set('Asia/Tokyo');


mb_language( "Japanese" ) ;
mb_internal_encoding( "UTF-8" ) ;
function myhtmlspecialchars($tstring) {
	if (is_array($tstring)) {
		return array_map("myhtmlspecialchars", $tstring);
	} else {
		return htmlspecialchars($tstring, ENT_QUOTES);
	}
}
	if (isset($_POST["wd_name"])) {
		$wd_name = myhtmlspecialchars( $_POST["wd_name"] ) ;
	} else {
		$wd_name = "" ;
	}

	// if (isset($_POST["wd_company"])) {
	// 	$wd_company = myhtmlspecialchars( $_POST["wd_company"] ) ;
	// } else {
	// 	$wd_company = "" ;
	// }

	if (isset($_POST["wd_add"])) {
		$wd_add = myhtmlspecialchars( $_POST["wd_add"] ) ;
	} else {
		$wd_add = "" ;
	}

	// if (isset($_POST["wd_square"])) {
	// 	$wd_square = myhtmlspecialchars( $_POST["wd_square"] ) ;
	// } else {
	// 	$wd_square = "" ;
	// }

	if (isset($_POST["wd_situation"])) {
		$wd_situation = myhtmlspecialchars( $_POST["wd_situation"] ) ;
	} else {
		$wd_situation = "" ;
	}

	if (isset($_POST["wd_tel"])) {
		$wd_tel = myhtmlspecialchars( $_POST["wd_tel"] ) ;
	} else {
		$wd_tel = "" ;
	}

	if (isset($_POST["wd_mail"])) {
		$wd_mail = myhtmlspecialchars( $_POST["wd_mail"] ) ;
	} else {
		$wd_mail = "" ;
	}

	if (isset($_POST["wd_q"])) {
		$wd_q = myhtmlspecialchars( $_POST["wd_q"] ) ;
	} else {
		$wd_q = "" ;
	}

	if (isset($_POST["contact01_code"])) {
		$contact01_code = myhtmlspecialchars( $_POST["contact01_code"] ) ;
	} else {
		$contact01_code = "" ;
	}

	if (empty(trim($wd_name)) || empty(trim($wd_mail)) || empty(trim($wd_tel))) {
    throw new Exception("名前、メールアドレス、電話番号は必須です。");
}


	// $contact01_mailbcc = "seto@wardog.jp" ;
	$contact01_mailbcc = "sakuma@par-king.co.jp,yada@par-king.co.jp,d.kurahashi@digital-city.jp,r.ohashi@digital-city.jp" ;
	
	$valhead = "From: " . mb_encode_mimeheader("駐車場経営ならパー王様") . "<sakuma@par-king.co.jp>" . "\n";
	$valhead .= "Bcc: " . $contact01_mailbcc . "\n";

	$valSubject = "【駐車場経営ならパー王様】一括見積りお問い合わせありがとうございます。" ;
	$valMailAddress = $wd_mail ;


	$valBody = "※このメールは自動返信メールです" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= $wd_name . "様" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "一括見積りお問い合わせありがとうございました。" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "お問い合わせいただいた内容については、3営業日以内に、担当者よりご連絡いたします。" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "今しばらくお待ちくださいますよう、よろしくお願いいたします。" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;


	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "------------------------------------------------------------" ;
	$valBody .= "__CRLF__" ;

	$valBody .= "日時：" ;
	$valBody .=  date( "Y年m月d日 H:i" ) ;
	$valBody .= "__CRLF__" ;

	$valBody .= "お名前：" ;
	$valBody .= $wd_name . "様" ;
	$valBody .= "__CRLF__" ;

	$valBody .= "会社名：" ;
	$valBody .= $wd_company  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "土地所在地：" ;
	$valBody .= $wd_add  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "土地の面積：" ;
	$valBody .= $wd_square  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "現在のご利用状況：" ;
	$valBody .= $wd_situation  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "お電話番号：" ;
	$valBody .= $wd_tel  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "メールアドレス：" ;
	$valBody .= $wd_mail  ;
	$valBody .= "__CRLF__" ;

	$valBody .= "ご意見・ご要望 --------------" ;
	$valBody .= "__CRLF__" ;
	$valBody .= $wd_q  ;
	$valBody .= "__CRLF__" ;



	$valBody .= "------------------------------------------------------------" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "※３営業日以内に担当者から連絡がない場合は、 0120-961-087 までご連絡いただけますと幸いです。" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "----------------" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "パーキング株式会社" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "〒150-0011 東京都渋谷区東２丁目１４−２１ ツインツリービル" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "Tel：0120-96-1087" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "Mail：info@par-king.co.jp" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "営業日：月～金(祝日を除く)" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "休業日：土、日、祝日、夏季、年末年始" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "営業時間：10：00～18：00" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "受付時間：10：30～17：30" ;
	$valBody .= "__CRLF__" ;
	$valBody .= "__CRLF__" ;


	$valBody = str_replace( "__CRLF__" , "\r\n" , $valBody ) ;

	// データベース接続
	$servername = "localhost";
	$username = getenv('USER_NAME');
	$password = getenv('PASSWORD');
	$dbname = getenv('DBNAME');

	$db_connect_success = false;
	$db_error_message = "";
	// ChatworkのAPIトークンとルームIDを設定
	$chatwork_api_token = getenv('CHATWORK_API_TOKEN');
	$chatwork_room_id = getenv('CHATWORK_ROOM_ID');
	// チャットワークに送信するメッセージを作成
	$message = "[To:3248541]矢田彰仁さん";
	$message .= "[info][title]kakutokuのLPより問い合わせがありました[/title]\n";
	$message .= "名前: {$wd_name}\n";
	$message .= "メールアドレス: {$wd_mail}\n";
	$message .= "電話番号: {$wd_tel}[/info]\n";
	if ($wd_situation != "") {
		$message = str_replace("[/info]", "", $message);
		$message .= "現在のご利用状況: {$wd_situation}\n";
	}
	if ($wd_q != "") {
		$message = str_replace("[/info]", "", $message);
		$message .= "ご意見・ご要望: {$wd_q}[/info]\n";
	}else {
		$message .= "[/info]\n";
	}

	// チャットワークにメッセージ送信
	
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.chatwork.com/v2/rooms/{$chatwork_room_id}/messages");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "body=" . urlencode($message));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-ChatWorkToken: {$chatwork_api_token}",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code !== 200) {
        throw new Exception("Chatworkへのメッセージ送信に失敗しました。HTTPコード: " . $http_code);
    }
	//データ挿入
	try {
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			throw new Exception("接続エラー: " . $conn->connect_error);
		}
		$conn->set_charset("utf8mb4");
		if (empty($wd_name) || empty($wd_mail)) {
			throw new Exception("名前とメールアドレスは必須です。");
		}

		// SQLクエリの準備（テーブル名は適宜変更）
		// kakutokuテーブルにカラムがない場合は適切に変更してください
		$sql = "INSERT INTO kakutoku (name, mail, tel) VALUES (?, ?, ?)";
		
		$stmt = $conn->prepare($sql);

		if (!$stmt) {
			throw new Exception("プリペアドステートメントの準備に失敗しました: " . $conn->error);
		}

		// パラメータのバインド
		$stmt->bind_param("sss", 
			$wd_name, 
			$wd_mail, 
			$wd_tel, 
		);

		// クエリの実行
		if (!$stmt->execute()) {
			throw new Exception("クエリの実行に失敗しました: " . $stmt->error);
		}

		// 成功フラグを設定
		$db_connect_success = true;

		// ステートメントとコネクションをクローズ
		$stmt->close();
		$conn->close();

	} catch (Exception $e) {
		// エラーメッセージを設定
		$db_error_message = $e->getMessage();
		
		// エラーログに記録
		error_log("データベースエラー: " . $db_error_message);
	}
















?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,user-scalable=yes" />

<?php
	echo '<!-- 株式会社WARDOG template -->' ;
	$testsite = "" ;
	
	echo "\n" ;

	$template_site = "駐車場経営ならパー王様" ;
	$template_title = "お問い合わせ送信 | 駐車場経営ならパー王様" ;
	$template_desc = "土地活用で「駐車場経営」や「コインパーキング経営」をお考えのお客様はパー王様（パーキング）へご相談下さい。お見積り「0円」初期費用「0円」で駐車場経営（コインパーキング経営）をサポート致します。また「駐輪場経営」や「トランクルーム経営」など土地に合わせたご提案も可能です。お気軽にお問い合わせください。" ;
	$template_color = "#2B2B2B" ;


	if( defined( 'PAGE_TITLE' ) && strlen( PAGE_TITLE ) > 0 ){
		echo '<title>' . PAGE_TITLE . ' | ' . $template_title . '</title>' ;
		echo '<meta name="twitter:title" content="' . PAGE_TITLE . ' | ' . $template_title . '" />' ;
		echo '<meta property="og:title" content="' . PAGE_TITLE . ' | ' . $template_title . '" />' ;
		echo "\n" ;
	} else {
		echo '<title>' . $template_title . '</title>' ;
		echo '<meta name="twitter:title" content="' . $template_title . '"/>' ;
		echo '<meta property="og:title" content="' . $template_title . '"/>' ;
		echo "\n" ;
	}

	if( defined( 'PAGE_DESC' ) && strlen( PAGE_DESC ) > 0 ){
		echo '<meta name="description" content="' . PAGE_DESC . ' ' . $template_desc . '" />' ;
		echo '<meta property="og:description" content="' . PAGE_DESC . ' ' . $template_desc . '" />' ;
		echo '<meta name="twitter:description" content="' . PAGE_DESC . ' ' . $template_desc . '" />' ;
		echo "\n" ;
	} else {
		echo '<meta name="description" content="' . $template_desc . '" />' ;
		echo '<meta property="og:description" content="' . $template_desc . '" />' ;
		echo '<meta name="twitter:description" content="' . $template_desc . '" />' ;
		echo "\n" ;
	}

	if( defined( 'TW_CARD' ) && strlen( TW_CARD ) > 0 ){
		echo '<meta property="og:image" content="' . TW_CARD . '" />' ;
		echo "\n" ;
	} else {
		echo '<meta property="og:image" content="https://' . $_SERVER["HTTP_HOST"] . '/images/twitter_card.png" />' ;
		echo "\n" ;
	}
?>

	<meta name="twitter:card" content="summary_large_image"/>
	<meta property="og:url" content="<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="ja_JP" />
	<meta property="og:site_name" content="<?php echo $template_site ; ?>" />


	<meta name="theme-color" content="<?php echo $template_color ; ?>" />
	<meta name="format-detection" content="telephone=no">

	<link rel="shortcut icon" type="image/png" href="<?php echo $testsite ; ?>images/common/favicon.png" />
	<link rel="apple-touch-icon" size="180x180" href="<?php echo $testsite ; ?>images/common/appleicon.png" />
	<link rel="icon" type="image/png" href="<?php echo $testsite ; ?>images/common/android-touch-icon.png" sizes="192x192" />
	<meta name="application-name" contet="60L.design" />
	<meta name="msapplication-square310x310logo" content="<?php echo $testsite ; ?>images/common/winicon.png" />


	<!-- googlefonts ==================================================== -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">
	<!-- googlefonts ==================================================== -->

	
	<link rel="stylesheet" href="<?php echo $testsite ; ?>css/wd_preset.css?wardog=<?php echo date('YmdHis') ;?>">
	<link rel="stylesheet" href="<?php echo $testsite ; ?>css/wardog.css?wardog=<?php echo date('YmdHis') ;?>">
	<link rel="stylesheet" href="<?php echo $testsite ; ?>css/wd_contact.css?wardog=<?php echo date('YmdHis') ;?>">
	

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W89GPFW4');</script>
    <!-- End Google Tag Manager -->

	<!-- preload -->
	<!-- 
	<link href="./mainimage.jpg" as="image" rel="preload">
	 -->

	<script src="<?php echo $testsite ; ?>js/jquery.js"></script>
	<script src="<?php echo $testsite ; ?>js/jquery.color.js"></script>
	<script src="<?php echo $testsite ; ?>js/jquery-cookie.js"></script>
	<script src="<?php echo $testsite ; ?>js/wardog.js?wardog=<?php echo date('YmdHis') ;?>"></script>
	

<?php
	define( "URL_CONTACT" , "contact.php" ) ;
	define( "URL_LINE" , "https://lin.ee/Q7k0hnd" ) ;
	define( "URL_TEL" , "0120-961-087" ) ;
?>


</head>


<body>

	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W89GPFW4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div id="wd_view_size"></div>
	<div id="wd_container">



		<div class="wd_header_dummy"></div>
		<div class="wd_header">
			<div class="wd_header_inner wd_flex">
				<h1 class="wd_header_namebox wd_pc">
					駐車場経営なら
					<img src="images/header_logo.svg">
				</h1>
				<h1 class="wd_header_namebox wd_sp">
					<img src="images/SP_header_logo.png">
				</h1>

				<div class="wd_header_rightbox wd_flex">
					<div class="wd_header_telbox wd_pc">
						<div class="header_tel_square">
							無料<br>相談
						</div>
						<img class="header_tel_icon" src="images/icon_tel_yellow.svg">
						0120-961-087
					</div>

					<div class="wd_haeder_tel_sp_wrap wd_sp">
						<a href="tel:<?php echo URL_TEL ; ?>">
							<div class="wd_haeder_tel_spbox wd_hoverfade">
								<img src="images/icon_tel_white.svg">
								無料相談
							</div>
						</a>
					</div>

					<div class="wd_header_line wd_hoverfade">
						<a href="<?php echo URL_LINE ; ?>" target="_blank">
							<div class="wd_header_linebox">
								<img src="images/SP_LINE_icon.svg">
								友だち追加
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="wd_header_navi_superbox">
				<div class="wd_header_navi_inner wd_flex">

				</div>
			</div>
		</div>




		<div class="wd_contact_container">


<?php
	if( $contact01_code == "wardog" ){
		if ( mb_send_mail( $valMailAddress , $valSubject , $valBody  , $valhead ) ) {
		// if( 0 ) {
?>

			<div class="wd_contact_superbox">
				<div class="wd_contact_titlebox">
					一括見積りお問い合わせ送信完了
				</div>
				<div class="wd_contact_inner">

					<div class="wd_contact_explain">
						一括見積りお問い合わせありがとうございました。<br>
						お問い合わせいただいた内容については、3営業日以内に、担当者よりご連絡いたします。
					</div>

					<div class="wd_contact_explain">
						ご記入されたメールアドレスに受信確認のための自動返信メールが送信されます。<br>
						自動返信メールが届いていない場合は、迷惑メールフォルダやゴミ箱に自動的に振り分けられている可能性があります。
					</div>
					<div class="wd_contact_explain">
						改めて改めてお送りいただくか、お電話にてご連絡ください。
					</div>

					<div class="wd_contact_explain">
						<a href="contact.php">
							一括見積りお問い合わせフォームへ戻る
						</a>
					</div>

				</div> <!-- wd_contact_inner -->
			</div> <!-- wd_contact_superbox -->
<?php
		}else {
?>

			<div class="wd_contact_superbox">
				<div class="wd_contact_titlebox">
					送信エラー
				</div>
				<div class="wd_contact_inner">

					<div class="wd_contact_explain">
						予期せぬエラーがあり、送信に失敗しました。
					</div>

					<div class="wd_contact_explain">
						恐れ入りますが、改めて一括見積りお問い合わせフォームを入力、送信いただくか、<br>
						0120-961-087 までお電話にてご連絡くださいませ。
					</div>
					<div class="wd_contact_explain">
						<a href="contact.php">
							一括見積りお問い合わせフォームへ戻る
						</a>
					</div>

				</div> <!-- wd_contact_inner -->
			</div> <!-- wd_contact_superbox -->

<?php
		}
	}else {
?>

			<div class="wd_contact_superbox">
				<div class="wd_contact_titlebox">
					画面遷移エラー
				</div>
				<div class="wd_contact_inner">

					<div class="wd_contact_explain">
						予期せぬ画面遷移がありました。
					</div>

					<div class="wd_contact_explain">
						恐れ入りますが、改めて一括見積りお問い合わせフォームを入力、送信をお願いいたします。
					</div>
					<div class="wd_contact_explain">
						<a href="contact.php">
							一括見積りお問い合わせフォームへ戻る
						</a>
					</div>

				</div> <!-- wd_contact_inner -->
			</div> <!-- wd_contact_superbox -->



<?php
	}
?>

		</div> <!-- wd_contact_container -->








		<!-- footer// ============================================================= -->
		<div class="wd_footer wd_contact">

			<div class="wd_footer_flex wd_flex">
				<div class="wd_footer_itembox">
					<div class="wd_footer_item_title">
						企業名
					</div>
					<div class="wd_footer_item_story">
						パーキング株式会社
					</div>
				</div>
				<div class="wd_footer_itembox">
					<div class="wd_footer_item_title">
						所在地
					</div>
					<div class="wd_footer_item_story">
						〒107-0052<br>
						東京都港区赤坂４丁目９−１９ 赤坂Toビル 5階
					</div>
				</div>

				<div class="wd_footer_itembox">
					<div class="wd_footer_item_title">
						ご連絡先
					</div>
					<div class="wd_footer_item_story wd_pc">
						Tel：0120-96-1087<br>
						Mail：<a href="mailto:info@par-king.co.jp">info@par-king.co.jp</a>
					</div>
					<div class="wd_footer_item_story wd_sp">
						Tel：<a href="tel:0120-96-1087">0120-96-1087</a><br>
						Mail：<a href="mailto:info@par-king.co.jp">info@par-king.co.jp</a>
					</div>
				</div>
				<div class="wd_footer_itembox">
					<div class="wd_footer_item_title">
						営業時間
					</div>
					<div class="wd_footer_item_story">
						営業日：月～金(祝日を除く)<br>
						休業日：土、日、祝日、夏季、年末年始<br>
						営業時間：10：00～18：00<br>
						受付時間：10：30～17：30
					</div>
				</div>
			</div>

			<div class="wd_footer_belt">
				<div class="wd_footer_belt_privacy">
					<a href="https://par-king.co.jp/privacypolicy/index.html" target="_blank" class="wd_hoverfade">
						プライバシーポリシー
					</a>
				</div>
				<div class="wd_footer_belt_copy">
					Copyright © 2024 パーキング All Rights Reserved.
				</div>
			</div>


		</div>
		<!-- //footer ============================================================= -->














	</div> <!-- //container -->
</body>
</html>
