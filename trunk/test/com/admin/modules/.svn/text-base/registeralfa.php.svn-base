<?php
class registeralfa extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->registerHelper = $this->useHelper('registerHelper');
		
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main(){

		
		
		$registerList = $this->registerHelper->registeralfa($start=null,$limit=10);
		//pr($registerList);exit;
		$time['time'] = '%H:%M:%S';
		
		$this->assign('total',$registerList['total']);
		$this->assign('list',$registerList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listregalfa.html');
	}
	
	function paging(){
//pr('ss');exit;
		
		$registerList = $this->registerHelper->registeralfa($start=null,$limit=10);
		//pr($registerList);exit;
		if($registerList==true){
		print json_encode(array('status'=>true,'data'=>$registerList['result'],'total'=>$registerList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function callsheader(){
		 
		$result=$this->registerHelper->downloadpesertaalfa();
		//pr($result);die;
		
		$file='register_';
		$filename = $file.date('Ymd_gia').".xls";
		header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=$filename");  
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false); 
		echo "<table border='1'>";
		echo "<tr>";
			echo "<td>No</td>";
			echo "<td>Nama</td>";
			echo "<td>Umur</td>";
			echo "<td>Telepon</td>";
		
		echo "</tr>";
		$no=0;
		if($result['data'])
		{
		
		
			foreach ($result['data'] as $key => $val){
			$no++;
			
				echo "<tr>";
				echo "<td>$no</td>";
				echo "<td> $val[nama]</td>";
				echo "<td>$val[umur]</td>";
				echo "<td>$val[telp]</td>";
				
				echo "</tr>";
			}
		}
		else
		{
			echo "<tr>";
			echo "<td colspan='7'>Data Not Available</td>";
			echo "</tr>";
		}
		echo "</table>";
		exit;
	
	}

	function addregister(){
	global $LOCALE,$CONFIG;
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addregister.html');
	
	}
	
	
}
?>