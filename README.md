# Codeigniter-Tinyfy-Resim-Optimizasyonu
Tinyfy apisi kullanarak resimlerinizi %80 oranında sıkıştırarak önemli ölçüde boyut tasarrufu sağlayabilirsiniz.

# Api Key Oluşturma
Aşağıdaki bağlantıdan İsim Soyisim ve email bilgilerinizi girerek api anahtarı oluşturmalısınız.

	https://tinypng.com/developers

# Config
Kşağıdaki kodlar config.php dosyasının en altına eklenir. Bu kodları isterseniz admin panelinizden de yönetecek şekilde ayarlayabilirsiniz.

	$config["tinyfy_api"] = 'Size verilen api anahtarı';

# Library
Application/libraries altında ki dosyaları aynı dizine ekliyoruz. Tinyfy.php içeriğinde açıklamalar eklenmiştir..

# Sonuç
Oluşturduğumuz kütüphaneyi ister controllerda istersekte helper içerisinde fonksiyon oluşturarak kullanabiliriz. Controllerda kullanımı aşağıdaki gibidir.
