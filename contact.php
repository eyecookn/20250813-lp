<?php
	date_default_timezone_set('Asia/Tokyo');


	if( isset( $_POST["states"] )) {
		$states = $_POST["states"] ;
	} else {
		$states = "" ;
	}
	if( isset( $_POST["situation"] )) {
		$situation = $_POST["situation"] ;
	} else {
		$situation = "" ;
	}










?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,user-scalable=yes" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/sanitize.css" type="text/css" media="all" />

<?php
	echo '<!-- 株式会社WARDOG template -->' ;
	$testsite = "" ;
	
	echo "\n" ;

	$template_site = "駐車場経営ならパー王様" ;
	$template_title = "一括見積りお問い合わせフォーム | 駐車場経営ならパー王様" ;
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
			})(window,document,'script','dataLayer','GTM-W89GPFW4');
		</script>
	<!-- End Google Tag Manager -->
	
	<!-- d-cad -->
	<script>
        (function(){
        var uqid = "352P55b37403jdP8";
        var gid  = "48";
        var a=document.createElement("script");
        a.dataset.uqid=uqid;a.dataset.gid=gid;a.id="afadfpc-352P55b37403jdP8gid48-"+Date.now();
        a.src="//ac.d-cad.biz/fpc/cookie_js.php?scriptId="+encodeURIComponent(a.id);
        document.head.appendChild(a);
        })();
        (function(){
        var uqid       = "352P55b37403jdP8";
        var spname     = "spname";
        var param      = {};
        var a=document.createElement("script");
        a.dataset.uqid=uqid;a.dataset.spname=spname;a.id="directtrack-"+uqid+Date.now();
        a.src="//ac.d-cad.biz/fpc/directtrack_js.php?scriptId="+encodeURIComponent(a.id);
        Object.keys(param).map(function(b){return a.dataset[b]=param[b]});
        document.head.appendChild(a);
        })();
        (function(){
        var uqid = "352P55b37403jdP8";
        var cid  = "431";
        var a=document.createElement("script");
        a.dataset.uqid=uqid;a.dataset.cid=cid;a.id="afadfpc-352P55b37403jdP8cid431-"+Date.now();
        a.src="//ac.d-cad.biz/fpc/cookie_js.php?scriptId="+encodeURIComponent(a.id);
        document.head.appendChild(a);
        })();
    </script>
	<!-- d-cad -->



	<!-- preload -->
	<!-- 
	<link href="./mainimage.jpg" as="image" rel="preload">
	 -->

	<script src="<?php echo $testsite ; ?>js/jquery.js"></script>
	<script src="<?php echo $testsite ; ?>js/jquery.color.js"></script>
	<script src="<?php echo $testsite ; ?>js/jquery-cookie.js"></script>
	<script src="<?php echo $testsite ; ?>js/wardog.js?wardog=<?php echo date('YmdHis') ;?>"></script>
	<script type="text/javascript">
		(function(c,l,a,r,i,t,y){
			c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
			t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
			y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
		})(window, document, "clarity", "script", "o6214r8e0e");
	</script>

<?php
	define( "URL_CONTACT" , "contact.php" ) ;
	define( "URL_LINE" , "https://lin.ee/Q7k0hnd" ) ;
	define( "URL_TEL" , "0120-961-087" ) ;
?>


</head>


<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W89GPFW4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<div id="wd_view_size"></div>
	<div id="wd_container">



	<header id="site-header" class="site-header">
    	<div class="inner">
			<div class="inner_content-logo"><img src="images/logo@2x.png" alt="駐車場経営ならパー王様"></div>
			
			<div class="inner_content-menu">

				<ul>
					
					<li><a href="https://lin.ee/gfP3Yj1" target="_blank"><img src="images/LINE@2x.png" alt="LINE"></a></li>
					<li><a href="tel:0120961087"><img src="images/phone@2x.png" alt="電話"></a></li>
					
				</ul>

			</div>
			
			<div class="inner_content-btns second">
				<img src="images/sp/sp-line-button.png" alt="駐車場経営ならパー王様" class="line">
				<img src="images/sp/sp-phone-button.png" alt="駐車場経営ならパー王様" class="phone">
				
			</div>
	
    

		</div>	
	</header>




	<div class="wd_contact_container">

			<div class="wd_contact_superbox">
				<div class="wd_contact_titlebox">
					一括見積りお問い合わせフォーム
				</div>
				<div class="wd_contact_inner">
				<form action="contact_send.php" id="contact01_form" method="post" name="contact01_form" onsubmit="return valcheck()">
							<div class="wd_contact_aboutmust">
								※のついた項目は必須項目です。
							</div>

							<div class="wd_contact_itemtitle">
								<span class="wd_must">※</span>お名前
							</div>
							<div id="wd_name_notice">
								お名前を入力してください。
							</div>
							<input type="text" class="wd_contact_intput" name="wd_name">

							<!-- <div class="wd_contact_itemtitle">
								会社名
							</div>
							<input type="text" class="wd_contact_intput" name="wd_company"> -->

							<div class="wd_contact_itemtitle">
								<!-- 土地所在地（<span class="wd_must">※</span>都道府県、市区町村、丁目・番地） -->
								<span class="wd_must">※</span>土地所在地（都道府県)
							</div>
							<div id="wd_add_notice"> 都道府県を選択してください。</div>
								<select name="wd_add" class="wd_contact_intput">
									<option value="" <?php if(empty($states)) echo 'selected'; ?>>（選択してください）</option>
									<option value="北海道" <?php if($states == "北海道") echo 'selected'; ?>>北海道</option>
									<option value="青森県" <?php if($states == "青森県") echo 'selected'; ?>>青森県</option>
									<option value="岩手県" <?php if($states == "岩手県") echo 'selected'; ?>>岩手県</option>
									<option value="宮城県" <?php if($states == "宮城県") echo 'selected'; ?>>宮城県</option>
									<option value="秋田県" <?php if($states == "秋田県") echo 'selected'; ?>>秋田県</option>
									<option value="山形県" <?php if($states == "山形県") echo 'selected'; ?>>山形県</option>
									<option value="福島県" <?php if($states == "福島県") echo 'selected'; ?>>福島県</option>
									<option value="茨城県" <?php if($states == "茨城県") echo 'selected'; ?>>茨城県</option>
									<option value="栃木県" <?php if($states == "栃木県") echo 'selected'; ?>>栃木県</option>
									<option value="群馬県" <?php if($states == "群馬県") echo 'selected'; ?>>群馬県</option>
									<option value="埼玉県" <?php if($states == "埼玉県") echo 'selected'; ?>>埼玉県</option>
									<option value="千葉県" <?php if($states == "千葉県") echo 'selected'; ?>>千葉県</option>
									<option value="東京都" <?php if($states == "東京都") echo 'selected'; ?>>東京都</option>
									<option value="神奈川県" <?php if($states == "神奈川県") echo 'selected'; ?>>神奈川県</option>
									<option value="新潟県" <?php if($states == "新潟県") echo 'selected'; ?>>新潟県</option>
									<option value="富山県" <?php if($states == "富山県") echo 'selected'; ?>>富山県</option>
									<option value="石川県" <?php if($states == "石川県") echo 'selected'; ?>>石川県</option>
									<option value="福井県" <?php if($states == "福井県") echo 'selected'; ?>>福井県</option>
									<option value="山梨県" <?php if($states == "山梨県") echo 'selected'; ?>>山梨県</option>
									<option value="長野県" <?php if($states == "長野県") echo 'selected'; ?>>長野県</option>
									<option value="岐阜県" <?php if($states == "岐阜県") echo 'selected'; ?>>岐阜県</option>
									<option value="静岡県" <?php if($states == "静岡県") echo 'selected'; ?>>静岡県</option>
									<option value="愛知県" <?php if($states == "愛知県") echo 'selected'; ?>>愛知県</option>
									<option value="三重県" <?php if($states == "三重県") echo 'selected'; ?>>三重県</option>
									<option value="滋賀県" <?php if($states == "滋賀県") echo 'selected'; ?>>滋賀県</option>
									<option value="京都府" <?php if($states == "京都府") echo 'selected'; ?>>京都府</option>
									<option value="大阪府" <?php if($states == "大阪府") echo 'selected'; ?>>大阪府</option>
									<option value="兵庫県" <?php if($states == "兵庫県") echo 'selected'; ?>>兵庫県</option>
									<option value="奈良県" <?php if($states == "奈良県") echo 'selected'; ?>>奈良県</option>
									<option value="和歌山県" <?php if($states == "和歌山県") echo 'selected'; ?>>和歌山県</option>
									<option value="鳥取県" <?php if($states == "鳥取県") echo 'selected'; ?>>鳥取県</option>
									<option value="島根県" <?php if($states == "島根県") echo 'selected'; ?>>島根県</option>
									<option value="岡山県" <?php if($states == "岡山県") echo 'selected'; ?>>岡山県</option>
									<option value="広島県" <?php if($states == "広島県") echo 'selected'; ?>>広島県</option>
									<option value="山口県" <?php if($states == "山口県") echo 'selected'; ?>>山口県</option>
									<option value="徳島県" <?php if($states == "徳島県") echo 'selected'; ?>>徳島県</option>
									<option value="香川県" <?php if($states == "香川県") echo 'selected'; ?>>香川県</option>
									<option value="愛媛県" <?php if($states == "愛媛県") echo 'selected'; ?>>愛媛県</option>
									<option value="高知県" <?php if($states == "高知県") echo 'selected'; ?>>高知県</option>
									<option value="福岡県" <?php if($states == "福岡県") echo 'selected'; ?>>福岡県</option>
									<option value="佐賀県" <?php if($states == "佐賀県") echo 'selected'; ?>>佐賀県</option>
									<option value="長崎県" <?php if($states == "長崎県") echo 'selected'; ?>>長崎県</option>
									<option value="熊本県" <?php if($states == "熊本県") echo 'selected'; ?>>熊本県</option>
									<option value="大分県" <?php if($states == "大分県") echo 'selected'; ?>>大分県</option>
									<option value="宮崎県" <?php if($states == "宮崎県") echo 'selected'; ?>>宮崎県</option>
									<option value="鹿児島県" <?php if($states == "鹿児島県") echo 'selected'; ?>>鹿児島県</option>
									<option value="沖縄県" <?php if($states == "沖縄県") echo 'selected'; ?>>沖縄県</option>
								</select>
		<?php
			// if( strlen( $states ) > 0 ){
			// 	echo '<input type="text" class="wd_contact_intput" name="wd_add" value="' . $states . ' ">' ;
			// } else {
			// 	echo '<input type="text" class="wd_contact_intput" name="wd_add">' ;
			// }
		?>
							
		<!-- 
							<div class="wd_contact_itemtitle">
								土地の面積
							</div>
							<input type="text" class="wd_contact_intput" name="wd_square"> -->

							<div class="wd_contact_itemtitle">
								現在のご利用状況
							</div>
							<select name="wd_situation" class="wd_contact_intput">
								<option value="" <?php if(empty($situation)) echo 'selected'; ?>>（選択してください）</option>
								<option value="更地（現在利用予定なし）" <?php if($situation == "更地（現在利用予定なし）") echo 'selected'; ?>>更地（現在利用予定なし）</option>
								<option value="更地（将来建築予定あり）" <?php if($situation == "更地（将来建築予定あり）") echo 'selected'; ?>>更地（将来建築予定あり）</option>
								<option value="月極駐車場" <?php if($situation == "月極駐車場") echo 'selected'; ?>>月極駐車場</option>
								<option value="マンション駐車場" <?php if($situation == "マンション駐車場") echo 'selected'; ?>>マンション駐車場</option>
								<option value="店舗駐車場" <?php if($situation == "店舗駐車場") echo 'selected'; ?>>店舗駐車場</option>
								<option value="タワー/立体駐車場" <?php if($situation == "タワー/立体駐車場") echo 'selected'; ?>>タワー/立体駐車場</option>
								<option value="その他" <?php if($situation == "その他") echo 'selected'; ?>>その他</option>
							</select>					
		<?php
			// if( strlen( $situation ) > 0 ){
			// 	echo '<input type="text" class="wd_contact_intput" name="wd_situation" value="' . $situation . ' ">' ;
			// } else {
			// 	echo '<input type="text" class="wd_contact_intput" name="wd_situation">' ;
			// }
		?>

							<div class="wd_contact_itemtitle">
								<span class="wd_must">※</span>お電話番号
							</div>
							<div id="wd_tel_notice">
								お電話番号を入力してください。
							</div>
							<input type="text" class="wd_contact_intput" name="wd_tel">

							<div class="wd_contact_itemtitle">
								<span class="wd_must">※</span>メールアドレス
							</div>
							<div id="wd_mail_notice">
								メールアドレスを入力してください。
							</div>
							<input type="text" class="wd_contact_intput" name="wd_mail">

							<div class="wd_contact_itemtitle">
								ご意見・ご要望
							</div>
							<textarea class="wd_contact_textarea" name="wd_q"></textarea>


							<div class="wd_contact_fix">
								必ず送信前に入力内容をご確認ください
							</div>

							<div class="wd_contact_explain">
								「送信する」ボタンをクリック後、ご記入いただきましたメールアドレスにお問い合わせ完了メールが届きます。<br>
								ご入力、誠にありがとうございました。
							</div>

							<div class="wd_contact_explain">
								送信いただく情報は、弊社のプライバシーポリシーに基づき厳正に管理いたします。<br>
								上記、個人情報の取り扱いについて、同意しますか？
							</div>
							<div class="wd_contact_social">
								<p>
									<a href="https://pentagon.social/socialpentagon/v3/pptm/571/window/" rel="nofollow" target="_blank">
										<img decoding="async" src="images/social-pentagon.png">
									</a>
								</p>
								
							</div>
							<p style="font-size:12px;color:#888;padding:.5em 0;text-align:center;">本サイト規約の要約については、<a href="https://pentagon.social/" target="_blank">株式会社Social Pentagon</a>が提供しております。
							</p>

							<div class="wd_contact_agreebox">
								<label>
									<input type="checkbox" class="wd_contact_check" name="wd_agree">同意する
								</label>
							</div>
							<div id="wd_agree_notice">
								個人情報の取扱いに同意してください。
							</div>
							<input type="hidden" name="contact01_code" value="" class="">

							<button type="submit" class="wd_contact_submit wd_hoverfade">
								送　信
							</button>
				</form>
	</div> <!-- wd_contact_inner -->
</div> <!-- wd_contact_superbox -->






			<div class="wd_diff_superbox wd_contact">
				<div class="wd_diff_back_top">
					提携パートナー企業募集
				</div>
				<div class="wd_diff_back_bottom"></div>

				<div class="wd_contact_partner_story">
					私たちは、駐車場経営・コインパーキング経営・その他土地活用において<br class="wd_pc">
					共に成長・発展に向けて協力していただける企業様を募集しております。
				</div>

				

				<img class="wd_diff_partners_logo" src="images/teikeikigyou.png">
				<div class="wd_diff_partners_names">
					<div>AMANO(アマノ)</div> / <div>ARCLINK (アークリンク)</div> / <div>アパルトマンイクシーズ</div> / <div>イチネンパーキング</div> / <div>NTTル・パルク</div> / <div>TIMES(タイムズ)</div> /
<div>大和リース</div> / <div>三井のリパーク</div> / <div>三井不動産リアルティ</div> / <div>三菱地所プロパティマネジメント</div> / <div>ユアーズ・コーポレーション</div>
				</div>

				<div class="wd_contact_inq">
					ご担当者様のお問い合わせをお待ちしております。
				</div>

			</div> <!-- wd_diff_section -->












		</div> <!-- wd_contact_container -->








		

	</div> <!-- //container -->

	<div class="section-08">
	<div class="inner-common">
		<div class="company">
			<table>
				<tr>
				<th>企業名</th>
				<td>パーキング株式会社</td>
				</tr>
				<tr>
				<th>所在地</th>
				<td>〒150-0041<br>東京都渋谷区神南１丁目１１−４ ＦＰＧリンクス神南 5階</td>
				</tr>
				<tr>
				<th>ご連絡先</th>
				<td>Tel：0120-96-1087<br>Mail：info@par-king.co.jp</td>
				</tr>
				<tr>
				<th>営業時間</th>
				<td>営業日：月～金(祝日を除く)<br>
					休業日：土、日、祝日、夏季、年末年始<br>
					営業時間：10：00～18：00<br>
					受付時間：10：30～17：30
				</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<footer>
	<div class="inner-common">
		<a href="https://par-king.co.jp/privacypolicy/index.html" target="_blank">プライバシーポリシー</a>
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/share/1Y3C2hHrwp/?mibextid=wwXIfr" target="_blank"><img src="images/ic-fb@2x.png" alt=""></a></li>
				<li><a href="https://lin.ee/gfP3Yj1" target="_blank"><img src="images/ic-line@2x.png" alt=""></a></li>
				<li><a href="https://x.com/parkingassist?s=21" target="_blank"><img src="images/ic-x@2x.png" alt=""></a></li>
				<li><a href="https://www.instagram.com/par_king001?igsh=MWRnOHQzcjhwbXEwaQ%3D%3D&utm_source=qr" target="_blank"><img src="images/ic-insta@2x.png" alt=""></a></li>
				<li><a href="tiktok" target="_blank"><img src="images/ic-tt@2x.png" alt=""></a></li>
			</ul>
		</div>
		<p>Copyright © 2025 パーキング All Rights Reserved.</p>
	</div>
</footer>


</body>
</html>
