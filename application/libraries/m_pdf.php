<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_pdf {


	/*function __construct()
    {
        $CI = & get_instance();
		log_message('Debug', 'mPDF class is loaded.');
    }


	function load2($param=NULL)

	{

		include_once APPPATH.'/third_party/mpdf/mpdf.php';


		if ($param == NULL)

		{

			$param = '"en-GB-x","A3-L","","",10,10,10,10,6,3';

		}


		return new mPDF($param);

	}*/

	function __construct(){
		include_once APPPATH.'third_party\mpdf\vendor\autoload.php';
	}
	  function pdf(){
	    $CI = & get_instance();
	    log_message('Debug', 'mPDF class is loaded.');
	 }
	  function load($param=[]){
	    return new \Mpdf\Mpdf($param);
	  }

}