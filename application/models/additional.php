<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class additional extends CI_Model {

	public function cekInputPost($arrCek)
	{
		$status = TRUE;
		$numFalse = NULL;
		$postFalse = NULL;
		for ($i=0; $i < sizeof($arrCek); $i++) { 
			if($this->input->post($arrCek[$i]) == NULL){
				$status = FALSE;
				$numFalse = $i;
				$postFalse = $arrCek[$i];
				$i = sizeof($arrCek);
			}
		}
		$dataReturn = [
			'status' => $status,
			'numFalse' => $numFalse,
			'postFalse' => $postFalse
		];
		return $dataReturn;
	}

	/*------------------------ENCRYPTION FOR SESSION-------------------*/
	public function encryptSess($plaintext,$humanName)
	{
		$cipher = "aes-128-gcm";
		$key = openssl_random_pseudo_bytes(4, $cstrong);
		if (in_array($cipher, openssl_get_cipher_methods()))
		{
		    $ivlen = openssl_cipher_iv_length($cipher);
		    $iv = openssl_random_pseudo_bytes($ivlen);
		    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
		    $data = [
		    	$humanName.'_key' => $key,
		    	$humanName.'_iv' => $iv,
		    	$humanName.'_tag' => $tag
		    ];
		    $this->session->set_userdata($data);
		    return $ciphertext;
		}
	}

	public function decryptSess($ciphertext,$humanName)
	{
		$cipher = "aes-128-gcm";
		$key = $this->session->userdata($humanName.'_key');
		$iv = $this->session->userdata($humanName.'_iv');
		$tag = $this->session->userdata($humanName.'_tag');
		$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
		return $original_plaintext;
	}
	/*-----------------------END OF ENCRYPTION-------------------------*/


	/*-------------------------ENCRYPTION FOR DATABASE-----------------------*/
	public function encryptIt($q)
	{
		$method = 'AES-128-ECB';
		$password = 'parmancyx15';
	    $string = openssl_encrypt($q, $method, $password);
	    /*echo $string.'<br/>';
	    echo base64_encode($string).'<br/>';*/
	    return $string;
	}

	public function decryptIt($q)
	{
	    $method = 'AES-128-ECB';
		$password = 'parmancyx15';
		$ret = openssl_decrypt($q, $method, $password);
		/*echo $ret.'<br/>';*/
		return $ret;
	}
	/*-------------------------END OF ENCRYPTION-----------------------------*/
}