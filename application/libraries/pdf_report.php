<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__file__).'/tcpdf/tcpdf.php';
class Pdf_report extends TCPDF
{
	protected $CI;
	function __construct()
	{
		$this->CI =& get_instance();
	}

	
	
}