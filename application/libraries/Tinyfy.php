<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tinyfy
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function compress($image)
	{
		require_once("lib/Tinify/Exception.php");
		require_once("lib/Tinify/ResultMeta.php");
		require_once("lib/Tinify/Result.php");
		require_once("lib/Tinify/Source.php");
		require_once("lib/Tinify/Client.php");
		require_once("lib/Tinify.php");

		try {

			\Tinify\setKey($CI->config->item(tinyfy_api));
			\Tinify\validate();

		} catch (\Tinify\Exception $e) {
			echo "Tinify API HATALI";
		}

		$process = \Tinify\fromFile($image);
		$process->toFile($image);

		return $process;
	}

}

/* End of file Tinyfy.php */
/* Location: ./application/libraries/Tinyfy.php */
