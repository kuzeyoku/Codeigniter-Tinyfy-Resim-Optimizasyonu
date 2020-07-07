# Codeigniter-Tinyfy-Resim-Optimizasyonu
Tinyfy apisi kullanarak resimlerinizi %80 oranında sıkıştırarak önemli ölçüde boyut tasarrufu sağlayabilirsiniz.
Öncelik api ücretsiz olarak ayda 500 resim üzerinde işlem yapar daha fazlası için ücret ödemeniz gerekir. Aylık 500 adet işlem işinizi görecektir.

# Api Key Oluşturma
Aşağıdaki bağlantıdan İsim Soyisim ve email bilgilerinizi girerek api anahtarı oluşturmalısınız.

	https://tinypng.com/developers

# Config
Kşağıdaki kodlar config.php dosyasının en altına eklenir. Bu kodları isterseniz admin panelinizden de yönetecek şekilde ayarlayabilirsiniz.

	$config["tinyfy_api"] = 'Size verilen api anahtarı';

# Library
Application/libraries altında ki dosyaları aynı dizine ekliyoruz. Tinyfy.php içeriğinde açıklamalar eklenmiştir..
Kütüphane sadece resim sıkıştırma olarak çalışmıyor. Kullanabileceğiniz birçok özelleştirmede mevcut.

Örneğin boyutlandırma işlemi yapabilirsiniz.
	
	$source = \Tinify\fromFile("large.jpg");
	$resized = $source->resize(array(
	    "method" => "fit",
	    "width" => 150,
	    "height" => 100
	));
	$resized->toFile("thumbnail.jpg");
	
Method 5 farklı değer alır: scale, fit, cover, thumb.

Yada url olarak verilen bir görseli sıkıştırıp istediğiniz klasöre aktarabilir.

	$source = \Tinify\fromUrl("https://tinypng.com/images/panda-happy.png");
	$source->toFile("optimized.jpg");
	
Aylık işlem miktarınızı aşağıdaki kod satırı ile basabilirsiniz.
	
	$compressionsThisMonth = \Tinify\compressionCount();
	
Daha fazla ayrıntı için aşağıdaki bağlantıyı ziyaret edin.

	https://tinypng.com/developers/reference/php
	
# Sonuç
Oluşturduğumuz kütüphaneyi ister controllerda istersekte helper içerisinde fonksiyon oluşturarak kullanabiliriz. Controllerda kullanımı aşağıdaki gibidir.

	<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Tinyfy extends CI_Controller {

			public function __construct()
			{
				parent::__construct();
				$this->load->library("tinyfy"); //Kütüphaneyi çağırdık
			}

			public function index()
			{
				$this->tinyfy->compress(FCPATH."image/test/image.jpeg"); //Sıkıştırılacak resmin tam dizinini parametre olarak gönderdik.
			}
			
		}
	?>
