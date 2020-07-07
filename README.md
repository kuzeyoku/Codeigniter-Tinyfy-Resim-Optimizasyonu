# Codeigniter-Tinyfy-Resim-Optimizasyonu
Tinyfy apisi kullanarak resimlerinizi %80 oranında sıkıştırarak önemli ölçüde boyut tasarrufu sağlayabilirsiniz.

# Api Key Oluşturma
Aşağıdaki bağlantıdan İsim Soyisim ve email bilgilerinizi girerek api anahtarı oluşturmalısınız.

	https://tinypng.com/developers

# Config
Kşağıdaki kodlar config.php dosyasının en altına eklenir. Bu kodları isterseniz admin panelinizden de yönetecek şekilde ayarlayabilirsiniz.

	$config["tinyfy_api"] = 'Size verilen api anahtarı';

#Library
Application/libraries altında ki dosyaları aynı dizine ekliyoruz. Tinyfy.php içeriğinde açıklamalar eklenmiştir..

#Sonuç
Oluşturduğumuz kütüphaneyi ister controllerda istersekte helper içerisinde fonksiyon oluşturarak kullanabiliriz. Controllerda kullanımı aşağıdaki gibidir.

	<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Tinyfy extends CI_Controller {

			public function __construct()
			{
				parent::__construct();
				$this->load->library("tinyfy"); //Kütüphaneyi çağıtdık
			}

			public function index()
			{
				$this->tinyfy->compress(FCPATH."image/test/image.jpeg"); //Sıkıştırılacak resmin tam dizinini parametre olarak gönderdik.
			}
			
		}
	?>
