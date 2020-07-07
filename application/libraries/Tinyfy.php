<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tinyfy
{

	public function compress($image)
	{
		$CI =& get_instance();
		require_once("lib/Tinify/Exception.php");
		require_once("lib/Tinify/ResultMeta.php");
		require_once("lib/Tinify/Result.php");
		require_once("lib/Tinify/Source.php");
		require_once("lib/Tinify/Client.php");
		require_once("lib/Tinify.php");

		try {

			\Tinify\setKey($CI->config->item("tinyfy_api"));
			$validate = \Tinify\validate();
			if ($validate == TRUE) {
				\Tinify\fromFile($image)->toFile($image);
			}

		} catch (\Tinify\Exception $e) {
			echo "Tinify API HATALI";
		}
	}

}

/* End of file Tinyfy.php */
/* Location: ./application/libraries/Tinyfy.php */
