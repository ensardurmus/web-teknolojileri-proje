# Web Teknolojileri Projesi

Bu proje, Sakarya Üniversitesi Web Teknolojileri dersi dönem sonu projesi kapsamında geliştirilmiş kişisel bir web sitesidir. Modern web standartları (HTML5, CSS3) ve Bootstrap 5 framework'ü kullanılarak responsive (duyarlı) bir yapıda tasarlanmıştır.

## Geliştirici Bilgileri
* **Ad Soyad:** Muhammet Ensar Durmuş
* **Öğrenci Numarası:** G231210064
* **Bölüm:** Bilgisayar Mühendisliği

## Proje Özellikleri ve Kullanılan Teknolojiler

* **Hakkında ve Özgeçmiş (CV):** Kişisel bilgilerin ve eğitim/yetkinlik detaylarının bulunduğu statik sayfalar.
* **Şehrim (İzmit/Kocaeli):** Yaşadığım şehrin tarihi ve kültürel miraslarının Bootstrap Grid sistemi ile tanıtıldığı sayfa.
* **Takımımız (Fenerbahçe):** Şanlı Fenerbahçe'mizin futbol, basketbol ve kadın voleybol branşlarının detaylandırıldığı özel tasarım sayfa.
* **İlgi Alanlarım (API Entegrasyonu):** JavaScript `fetch` metodu ile **TVMaze API** kullanılarak asenkron veri çekilen ve ekrana basılan Film/Dizi arama motoru.
* **İletişim Formu (Validasyon):** Tüm form elemanlarını barındıran iletişim sayfası. Form doğrulama işlemleri iki farklı yöntemle yapılmıştır:
  1. Native JavaScript
  2. Vue.js Framework
* **Backend ve Oturum Yönetimi (PHP):** * İletişim formundan gelen verilerin `POST` metodu ile yakalanıp ekrana yazdırılması (`iletisim_sonuc.php`).
  * Admin giriş sayfası (`login.html`) ve sabit kullanıcı bilgileriyle (Öğrenci No ve Mail) güvenli giriş simülasyonu (`login_kontrol.php`).

## Kurulum ve Çalıştırma

Projenin arayüz kısmı (HTML/CSS/JS) statik olarak herhangi bir modern tarayıcıda doğrudan çalıştırılabilir. Ancak arka planda çalışan **PHP** dosyalarının (`iletisim_sonuc.php` ve `login_kontrol.php`) sorunsuz çalışabilmesi için projenin **XAMPP, WAMP veya MAMP** gibi bir yerel sunucu (localhost) dizininde (örn: `htdocs` klasörü) çalıştırılması gerekmektedir.