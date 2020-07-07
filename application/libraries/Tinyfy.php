<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tinyfy
{

	public function compress($image) //Methodumuz sıkıştırılacak resmin tam dizinini parametre olarak alır.
	{
		//Gerekli dosyaların import edilmesi.
		$CI =& get_instance();
		require_once("lib/Tinify/Exception.php");
		require_once("lib/Tinify/ResultMeta.php");
		require_once("lib/Tinify/Result.php");
		require_once("lib/Tinify/Source.php");
		require_once("lib/Tinify/Client.php");
		require_once("lib/Tinify.php");

		//Api ile bağlantı denenir.
		try {

			\Tinify\setKey($CI->config->item("tinyfy_api")); //config.php ye eklenen api anahtarı burada kullanılır.
			$validate = \Tinify\validate(); //Bağlantı sonucu değişkene atanır.
			if ($validate == TRUE) {
				\Tinify\fromFile($image)->toFile($image); //Api ile bağlantı başarılı ise işlem yapılır. resim önceki ile değiştirilir. isterseniz toFile içerisindeki kısmı değiştirerek resmi farklı bir konuma farklı bir isimde kaydedebilirsiniz.
			}

		} catch (\Tinify\Exception $e) {
			echo "Tinify API HATALI"; //Api bağlantısı başarısız ise ekrana hata basar.
		}
	}

}

/* End of file Tinyfy.php */
/* Location: ./application/libraries/Tinyfy.php */
