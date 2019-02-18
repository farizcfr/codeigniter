<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__file__).'/tcpdf/tcpdf.php';
//require_once(dirname(__FILE__).'/include/tcpdf_images.php');

class Pdf_report extends TCPDF 
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}
}