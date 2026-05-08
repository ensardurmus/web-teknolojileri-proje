<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Gönderildi | Kişisel Web Sitem</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-top border-4 border-dark rounded-4">
                    <div class="card-header bg-white py-3">
                        <h3 class="mb-0 text-center fw-bold">Gönderilen Form Verileri</h3>
                    </div>
                    <div class="card-body p-4">
                        <?php
                        // İletişim formundan gelen verileri POST metoduyla alıp değişkenlere atıyorum
                        $adSoyad = $_POST['adSoyad'] ?? 'Girilmedi';
                        $email = $_POST['email'] ?? 'Girilmedi';
                        $telefon = $_POST['telefon'] ?? 'Girilmedi';
                        $konu = $_POST['konu'] ?? 'Girilmedi';
                        $cinsiyet = $_POST['cinsiyet'] ?? 'Girilmedi';
                        $mesaj = $_POST['mesaj'] ?? 'Girilmedi';
                        
                        // Checkbox verisi dizi olarak geleceği için implode fonksiyonu ile aralarına virgül koyarak birleştiriyorum
                        $kaynak = isset($_POST['kaynak']) ? implode(", ", $_POST['kaynak']) : 'Seçilmedi';

                        // Aldığım bu verileri Bootstrap tablosu yardımıyla ekrana düzenli bir şekilde basıyorum
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<tr><th style='width: 30%;'>Ad Soyad</th><td>$adSoyad</td></tr>";
                        echo "<tr><th>E-Posta</th><td>$email</td></tr>";
                        echo "<tr><th>Telefon</th><td>$telefon</td></tr>";
                        echo "<tr><th>Konu</th><td>$konu</td></tr>";
                        echo "<tr><th>Cinsiyet</th><td>$cinsiyet</td></tr>";
                        echo "<tr><th>Nereden Buldunuz?</th><td>$kaynak</td></tr>";
                        echo "<tr><th>Mesaj</th><td>$mesaj</td></tr>";
                        echo "</table>";
                        ?>
                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-outline-dark px-4">Geri Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>