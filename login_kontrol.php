<?php
// Sistemde geçerli olacak kullanıcı adı ve şifre sabitlerini ödev kurallarına göre belirliyorum
$dogruEmail = "g231210064@sakarya.edu.tr";
$dogruSifre = "g231210064";

// Login formundan gönderilen POST verilerini yakalıyorum
$gelenEmail = $_POST['email'] ?? '';
$gelenSifre = $_POST['sifre'] ?? '';

// Kullanıcının girdiği bilgilerin doğruluğunu kontrol ediyorum
/// === operatörü ile hem veriyi hem veri tipini eşit mi diye kontrol ediyorum 
if ($gelenEmail === $dogruEmail && $gelenSifre === $dogruSifre) {
    // Giriş başarılıysa kullanıcıya hoşgeldin mesajı gösteriyorum
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Hoşgeldiniz</title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
    </head>
    <body class='bg-light d-flex align-items-center min-vh-100'>
        <div class='container text-center'>
            <div class='alert alert-success shadow-sm p-5 rounded-4 border-0'>
                <h1 class='display-4 fw-bold text-success mb-3'>Hoşgeldiniz!</h1>
                <p class='lead'>Başarıyla giriş yaptınız: <strong>$dogruSifre</strong></p>
                <hr class='my-4'>
                <a href='index.html' class='btn btn-success btn-lg px-4'>Siteye Git</a>
            </div>
        </div>
    </body>
    </html>";
	//hr ile yatay çizgi oluşturdum margin y ile yukarı aşağı 4 boşluk bıraktıkmargin ile dış boşluk vermiş olduk
	//align-items-center ile içeriği dikey ortalama yaptım min-vh-100 ile sayfa yüksekliğini ekran yüksekliğinin tamamı yaptım
} else {
    // Giriş hatalıysa hiçbir işlem yapmadan doğrudan login sayfasına geri yönlendiriyorum
    header("Location: login.html");
	//kodun devam etmesini durdurdum
    exit();
}
?>