<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function create_timesheet($data) 
{

	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
	date_default_timezone_set('Europe/London');
	
	require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
	
	$objPHPExcel = new PHPExcel();
	
	$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
								 ->setLastModifiedBy("Maarten Balliauw")
								 ->setTitle("Office 2007 XLSX Test Document")
								 ->setSubject("Office 2007 XLSX Test Document")
								 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
								 ->setKeywords("office 2007 openxml php")
								 ->setCategory("Test result file");
	
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'TIME-SHEET '.date('d-m-Y').' ('.date('l').')');
	
	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'No');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Employ Id');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Attendence');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Extra Hours');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Reason For Leave');
	
	$i=3;
	foreach($data as $employ)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i-2);
		$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $employ['emp_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $employ['emp_f_name'].' '.$employ['emp_l_name']);
		
		$i++;
	}
	
	$heading = array(
		'font'  => array(
			'bold'  => true,
			'color' => array('rgb' => 'FFFFFF'),
			'size'  => 16,
			'name'  => 'Calibri'
		),
		'alignment' => array(
            'wrap'       => true,
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
	);	
	
	$columnheaderstyle = array(
		'font'  => array(
			'bold'  => true,
			'color' => array('rgb' => '000000'),
			'size'  => 12,
			'name'  => 'Calibri'
		),
		'alignment' => array(
            'wrap'       => true,
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
	);	
	$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:F1');
	
	$objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray(
		array(
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => '1F497D')
			)
		)
	);
	
	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($heading);
	$objPHPExcel->getActiveSheet()->getStyle('A2:F2')->applyFromArray($columnheaderstyle);
	
	$objPHPExcel->getActiveSheet()
    ->getStyle('A3:A500')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	
	$objPHPExcel->getActiveSheet()
    ->getStyle('D3:D500')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	
	$objPHPExcel->getActiveSheet()
    ->getStyle('E3:E500')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	
	$objPHPExcel->getActiveSheet()
    ->getStyle('B3:B500')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	
	$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(25);	
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6.85);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(17.5);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(17.5);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(19);
    
	$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&G&C&HPlease treat this document as confidential!');
	$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

	$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

	$objPHPExcel->getActiveSheet()->setTitle('Printing');

	$objPHPExcel->setActiveSheetIndex(0);

	$callStartTime = microtime(true);	
	
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('timesheet/timesheet'.date('dmY').'.xlsx');
}
function read_sheet($file,$employ_array)
{
	require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';

	$inputFileName = $file;

	//  Read your Excel workbook
	try {
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
	} catch (Exception $e) {
		die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
	}
	
	$rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();
	$array_data = array();
	
	$i=1;
	foreach ($rowIterator as $row) {
		
		if($i>sizeof($employ_array)+2)
		{
			break;
		}
		
		$cellIterator = $row->getCellIterator();
		$cellIterator->setIterateOnlyExistingCells(false);
		$rowIndex = $row->getRowIndex();
		$array_data[$rowIndex] = array('A' => '', 'B' => '', 'C' => '', 'D' => '', 'E' => '');

		foreach ($cellIterator as $cell) {
			if ('A' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('B' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('C' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('D' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('E' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('F' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			} else if ('G' == $cell->getColumn()) {
				$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
			}
		}
		$i++;
	}
	unset($array_data[1]);
	unset($array_data[2]);
	
	echo '<pre>';
	return $array_data;
}
?>
