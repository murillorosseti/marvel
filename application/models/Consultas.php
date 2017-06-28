<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	function consulta_principal($pagina = null)
	{
		if($pagina == null)
		{
			$offset = '1';
		}else{
			$offset = $pagina;
		}
		
		$ts = '1';
		$privateKey = '0e79c0383c2cd60d4e8567a07d5deb03da681a4a';
		$publicKey = '6f1bbfdea51e581143cb91cd717ea677';
		
		$url = "http://gateway.marvel.com/v1/public/events?offset={$offset}&ts={$ts}&apikey=6f1bbfdea51e581143cb91cd717ea677&hash=".md5($ts.$privateKey.$publicKey)."";
		
		// print_r($url);
		// print_r("<br/>http://gateway.marvel.com/v1/public/events?ts=1&apikey=6f1bbfdea51e581143cb91cd717ea677&hash=cdb26de5e828af1518562aea9cff21ad");
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "{$url}",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET"
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return json_decode($response);
	}
}
	
