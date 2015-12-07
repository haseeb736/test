<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html, $filename='', $stream=TRUE ,$invoice_id, $type) 
{
    require_once("dompdf/dompdf_config.inc.php");
	
	if (get_magic_quotes_gpc()){
		$html = stripslashes($html);
	}
	
    $dompdf = new DOMPDF();
	
    $dompdf->load_html($html);
	
	$dompdf->set_paper("a4", "portrait");
	
    $dompdf->render();
		
	$timestamp = date('YmdGis').$invoice_id;

	$filename = $timestamp.'.pdf';	
	
    if ($stream) {
        $dompdf->stream($filename);
    } else {
		if($type=='invoice')
		{
			$CI =& get_instance();
			$CI->load->helper('file');
			write_file("invoice/".$filename, $dompdf->output());
			return $filename;
		}
		else if($type=='salary')
		{
			$CI =& get_instance();
			$CI->load->helper('file');
			write_file("salary_slip/".$filename, $dompdf->output());
			return $filename;
		}
    }
}
?>