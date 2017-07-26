<?php
class register extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		$this->triviaHelper = $this->useHelper('triviaHelper');
		$this->registerHelper = $this->useHelper('registerHelper');
		
		
		
		$this->uploadHelper = $this->useHelper('uploadHelper');
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main($start=null,$limit=1){
		global $LOCALE,$CONFIG;
		//$List = $this->triviaHelper->triviaList();
		
		$List = $this->registerHelper->registerList();
		//pr($List);exit;
		$time['time'] = '%H:%M:%S';
		if($this->_request('search')){
		$this->assign('search',$this->_request('search'));
		
		}
		$this->assign('total',$List['total']);
		$this->assign('list',$List['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listregistrasi.html');
	}
	
	function pagingstory(){
//pr('ss');exit;
		
		$storyList = $this->registerHelper->registerList($start=null,$limit=10);
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true,'data'=>$storyList['result'],'total'=>$storyList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function addjadwal(){
	global $LOCALE,$CONFIG;
	
		$listchap=$this->jadwalHelper->selectclub();
		
		$this->assign("listclub",$listchap);
	if(isset($_POST['submit']))
	{
		$data['club1'] =$this->_p('club1');
		$data['club2'] =$this->_p('club2');
		$data['club3'] =$this->_p('club3');
		$data['club4'] =$this->_p('club4');
		$data['club5'] =$this->_p('club5');
		$data['club6'] =$this->_p('club6');
		
				
		//pr($data);exit;
		$addmember = $this->jadwalHelper->addjadwal($data);
		//pr($addmember);exit;
		if($addmember)
		{
			sendredirect($CONFIG['ADMIN_DOMAIN'].'jadwalmanagement');
		}
	}
	
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addjadwal.html');
	
	}
	function hapus(){

	//pr('ss');exit;
	$inisiasi=$this->_g('param');
	$deletemember = $this->registerHelper->deleteregister($inisiasi);
	if($deletemember==true)
			{
				sendredirect('member');
				die;
			}	
	
	}
		
	function checkit(){

		
		$storyList = $this->registerHelper->checkmember();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function incheckit(){

		
		$storyList = $this->registerHelper->checkinactives();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function editjadwal(){
	global $LOCALE,$CONFIG;
	//pr('ss');exit;
	//pr($_POST);exit;
	
	$listchap=$this->jadwalHelper->selectclub();
		
		$this->assign("listclub",$listchap);
	if(isset($_POST['submit']))
	{
		//pr("ss"); die;
		$data['club1'] =$this->_p('club1');
		$data['club2'] =$this->_p('club2');
		$data['club3'] =$this->_p('club3');
		$data['club4'] =$this->_p('club4');
		$data['club5'] =$this->_p('club5');
		$data['club6'] =$this->_p('club6');
		
				
		//pr($data);exit;
		$addmember = $this->jadwalHelper->editjadwal($data);
		//pr($addmember);exit;
		if($addmember)
		{
			sendredirect($CONFIG['ADMIN_DOMAIN'].'jadwalmanagement');
		}
	}
	
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/editjadwal.html');
	}
	
	function checkEmail()
	{
		
			$data['email']=$this->_p('email');
			$result=$this->registerHelper->checkEmail($data);
			
			if($result)
			{
				// pr($result);
				// pr($data['email']);
				print_r(json_encode(array('status'=>1,'email'=>$data['email'])));die;
			}
			else
			{
				print_r(json_encode(array('status'=>0)));die;
				
			}
			return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/addmember.html');
		
	}
	
	function callsheaderphpxls($data=null,$file='download-data'){
		GLOBAL $ENGINE_PATH, $CONFIG, $LOCALE;
		//pr($ENGINE_PATH."Utility/PHPExcel.php");die;
		 
			
			require_once $ENGINE_PATH."Utility/PHPExcel.php";
			$styleArray = array(
				  'borders' => array(
					'allborders' => array(
					  'style' => PHPExcel_Style_Border::BORDER_THIN
					 
					)
				  )
				);
		
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->SetCellValue('A2','No');
			//$objPHPExcel->getActiveSheet()->SetCellValue('E1','DETAIL INFORMATION OWNER');
			// costumer_id
			$objPHPExcel->getActiveSheet()->SetCellValue('B2','NAMA CHAPTER');
			$objPHPExcel->getActiveSheet()->SetCellValue('C2','NAMA MEMBER');
			$objPHPExcel->getActiveSheet()->SetCellValue('D2','REGISTER DATE');
			$objPHPExcel->getActiveSheet()->SetCellValue('E2','email');
			$objPHPExcel->getActiveSheet()->SetCellValue('F2','KTP / SIM');
			$objPHPExcel->getActiveSheet()->SetCellValue('G2','STATUS');
			$jumlahdata=count($data['data'])+2;
			//pr($jumlahdata);exit;
			$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A2:G'.$jumlahdata.'')->applyFromArray($styleArray);
			$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FF808080');
			
			/* $objPHPExcel->getActiveSheet()->getStyle('E1:O'.$jumlahdata.'')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('#CCFFCC');  */
			//pr($data);exit;
			
			$rowCount = 3;
			$no=1;
			foreach($data['data'] as $each){
				
				$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$no);
				$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$each['namachapter']);
				$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,$each['name']);
				$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,$each['date_register']);
				$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,$each['username']);
				$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,$each['ktp_sim']);
				$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,$each['statusnya']);
				

				

				$rowCount++;
				$no++;
				
			}
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
			
				// pr($objPHPExcel);die;
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			ob_end_clean();
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Memberuser.xls"');
			header('Cache-Control: max-age=0');
			$objWriter->save('php://output');

			die;
	
	}
	
	
}
?>
