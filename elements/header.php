<?php 

include 'elements/header_top.php';



$kime = "gidecekmailadresi@gmail.com";
$konu = "email gönderme konusu";
$icerik ="adım = mustafa <br> soyadım = yılmaz";

if(isset($_POST["btn_gonder"])){

	$adsoyad=trim($_POST["adsoyad"]);
	$email=trim($_POST["email"]);
	$mesaj=trim($_POST["mesaj"]);
	
	$body = "Mailinizin içeriği <br>";
	$body = "Ad ve Soyad .. :". $adsoyad . "<br>";
	$body = "E-Mail .. :". $email . "<br>";
	$body = ",Mesaj .. :". $mesaj . "<br>";

	require 'elements/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->SMTPDebug=0;
$mail->SMTPSecure='tls'; // güvenli bağlantı ise ssl
$mail->Host ="smtp.gmail.com.tr";
$mail->Port=587; // güvenli bağlantı için 465
$mail->isHTML(true);
$mail->SetLanguage('tr','elements/PHPMailer/language');
$mail->CharSet='UTF-8';
$mail->Username='mailgonderrhb@gmail.com';
$mail->Password='rehab123.';
$mail->SetFrom( $mail->Username, "Bize Mesa Gönderin" );
$mail->AddAddress('enetasci144@gmail.com',"deneme");
$mail->Subject = "Konu";
$mail->MsgHTML($icerik);
$gonder = $mail->Send();

if ( $gonder ) {  
	
	echo "<p>email gönderildi.</p>";
}else{

	echo "<p>email gönderilemedi.</p>";
	echo "$mail->ErrorInfo";
}

}




?>
<div class="container lang-box">
	<ul class="lang">
		<li><a href="#" data-lang-filter="tr">TR</a></li>
		<li><a href="#" data-lang-filter="en">ENG</a></li>
		<li><a href="#" data-lang-filter="de">DE</a></li>
		<li><a href="#" data-lang-filter="esp">ESP</a></li>
	</ul>
</div>
<header class="header">
	<div class="toggle">
		<i class="fas fa-bars menu-bar"></i>
		<div class="mobile-lang-box">
			<ul class="lang">
				<li><a href="#" data-lang-filter="tr">TR</a></li>
				<li><a href="#" data-lang-filter="en">ENG</a></li>
				<li><a href="#" data-lang-filter="de">DE</a></li>
				<li><a href="#" data-lang-filter="esp">ESP</a></li>
			</ul>
		</div>
		
	</div>
	<div class="container-fluid">
		<div class="container" style="left: 0px;">
			<div class="logo">
				<a href="./index.php"><img src="img/rehab-logo.png"></a>
			</div>	
			<div class="menu container-fluid" id="menus" style=" text-align: center">
				<ul class="menu-ul cl-effect-13 header-menu" id="menu-ul">
					<li><a href="index.php#section0" data-lang="index">Anasayfa</a></li> <!-- data-scroll-nav='0'-->
					<li><a href="index.php#section1" data-lang="partners" >Partnerler</a></li>
					<li><a href="index.php#section2" data-lang="work" >İş Paketleri</a></li>
					<li><a href="index.php#section4" data-lang="events" id="events" >Etkinlikler</a></li>
					<li><a href="index.php#section4" data-lang="documents" id="documents">Dökümanlar</a></li>
					<li><a href="./kurs.php" data-lang="course">Eğitim-Kurs</a></li>
					<li><a href="index.php#section5" data-lang="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
