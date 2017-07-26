<?php

class homeHelper {
	
	var $_mainLayout="";
	
	var $login = false;
	
	function __construct($apps){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
 
		
		$this->config = $CONFIG;
		if( $this->apps->session->getSession($this->config['SESSION_NAME'],"admin") ){
			
			$this->login = true;
		
		}
		 
	}
	function format_rupiah($angka){
	 //$rupiah=number_format($angka,0,',','.');
	   $rupiah=number_format($angka,0,',','.');
	 return $rupiah;
	}
	
	function registermobil(){
	global $CONFIG;
	
	if($_POST['jenismobil']){
		$email=$_POST['email'];
		$jenismobil=$_POST['jenismobil'];
		$ukuranban=$_POST['ukuranban'];
		$created=date("d-m-y h:i:s");
		$kode=substr(md5($_POST['email']),1, 5);
		
	
	
	
	$sql = "INSERT INTO {$CONFIG['DATABASE'][0]['DATABASE']}.vouchertrivia SET	
							email='".$email."',
							jenismobil='".$jenismobil."',
							ukuranban='".$ukuranban."',
							created='".$created."',
							kode_unik='".$kode."'
							";
				
			$fetch= $this->apps->query($sql);			
			$idusers=$this->apps->getLastInsertId();
			//pr($idusers); 
			$sql = "SELECT *  
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.registration where id=$idusers"; 
			$rsut = $this->apps->fetch($sql);		
			//pr($sql);die;
			$dataArray = array(
				'nama'=>$rsut['nama'],
				'email'=>$rsut['email'],
				'kode_unik'=>$kode,
			);
			
			$email = $this->send_email_voucher($dataArray);
			if($email>0){
				echo "berhasil";
			}
			
	return true;
	}else{
		return false;	
	}
	}
	
	function register(){
	global $CONFIG;
	
	if($_POST['namenya']){
	
		$namanya=$_POST['namenya'];
		$email=$_POST['email'];
		$hp=$_POST['hp'];
		$alamat=$_POST['alamat'];
		$provinsi=$_POST['provinsi'];
		$kodepos=$_POST['kodepos'];
		$created=date("d-m-y h:i:s");
		
	
	
	
	$sql = "INSERT INTO {$CONFIG['DATABASE'][0]['DATABASE']}.registration SET							
							nama='".$namanya."'	,
							email='".$email."',
							hp='".$hp."',
							alamat='".$alamat."'	,
							provinsi='".$provinsi."',
							kodepos='".$kodepos."',
							created='".$created."'
							";
				
			$fetch= $this->apps->query($sql);
			$idusers=$this->apps->getLastInsertId();
			//pr($idusers); 
			$sql = "SELECT *  
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.registration where id=$idusers"; 
			$rsut = $this->apps->fetch($sql);		
			//pr($sql);die;
			$dataArray = array(
				'nama'=>$rsut['nama'],
				'email'=>$rsut['email']
				
			);
			
			/* $email = $this->send_email_onecard($dataArray);
			if($email>0){
				echo "berhasil";
			} */
			
	return true;
	}else{
		return false;	
	}
	}
	
	function send_email_onecard($dataArray=null) {  
		global $LOCALE;
		
	
		if($dataArray){
			$results['msg']='';
			$results['status']='';
			$template = $LOCALE[1]['replyonecard'];
			$template = str_replace('!#name',$dataArray['nama'],$template);
			$template = str_replace('!#chaptername',$dataArray['namechapter'],$template);
			//$template = str_replace('!#link',$this->config['BASE_DOMAIN'].'memberreg/reactivate/'.$link,$template);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, 'api:key-031f6c645c2c27d331e152ba8a959e28');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, 
					  'https://api.mailgun.net/v3/gte.supersoccer.co.id/messages');
			curl_setopt($ch, CURLOPT_POSTFIELDS, 
							array('from' => 'Onecard Goodyear<noreply@onecard.co.id>',
								  'to' => $dataArray['email'],
								  //'to' => 'fauzi.rahman@kana.co.id',
								  'subject' => "Selamat! Kamu mendapatkan Goodyear Mandiri One Card",
								  'html' => $template,
								  'o:campaign' => 'fkdf5'));
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			// pr($info);
			 pr($result);
			$res = json_decode($result,TRUE);
			 
			if($info['http_code']!='200'){
					$results['msg']=$res['message'];
					$results['status']='0';
			}
			else{
				$results['msg']=$res['message'];
				$results['status']='1';				  
			}
			curl_close($ch);
			return $results;
		}
		$results['status']='0';
		return $results;
	}
	
	function send_email_voucher($dataArray=null,$link=null) {  
		global $LOCALE;
		
		pr($dataArray);
		if($dataArray){
			$results['msg']='';
			$results['status']='';
			$template = $LOCALE[1]['replyvoucher'];
			$template = str_replace('!#name',$dataArray['nama'],$template);
			$template = str_replace('!#kode_unik',$dataArray['kode_unik'],$template);
			//$template = str_replace('!#link',$this->config['BASE_DOMAIN'].'memberreg/reactivate/'.$link,$template);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, 'api:key-031f6c645c2c27d331e152ba8a959e28');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, 
					  'https://api.mailgun.net/v3/gte.supersoccer.co.id/messages');
			curl_setopt($ch, CURLOPT_POSTFIELDS, 
							array('from' => 'Onecard Goodyear<noreply@supersoccer.co.id>',
								  'to' => $dataArray['email'],
								  //'to' => 'fauzi.rahman@kana.co.id',
								  'subject' => "Selamat! Tukarkan kode ini di outlet Goodyear",
								  'html' => $template,
								  'o:campaign' => 'fkdf5'));
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			// pr($info);
			 pr($result);
			$res = json_decode($result,TRUE);
			 
			if($info['http_code']!='200'){
					$results['msg']=$res['message'];
					$results['status']='0';
			}
			else{
				$results['msg']=$res['message'];
				$results['status']='1';				  
			}
			curl_close($ch);
			return $results;
		}
		$results['status']='0';
		return $results;
	}
	
	
	function kuesioner(){
	global $CONFIG;
	
	if($_POST['email']){	
		
		$email=$_POST['email'];
		$pertanyaan=$_POST['pertanyaan'];
		$jawaban=$_POST['jawaban'];
		$created=date("d-m-y h:i:s");
		
	
	
	
	$sql = "INSERT INTO {$CONFIG['DATABASE'][0]['DATABASE']}.kuesioner SET														
							email='".$email."',
							pertanyaan='".$pertanyaan."',
							jawaban='".$jawaban."',
							created='".$created."'
							";
				
			$fetch= $this->apps->query($sql);			
			// die;
		
		

	
	return true;
	}else{
		return false;	
	}
	}
	
	
	
function registerCount(){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		
				
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.registration where 1 {$querysearch}"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
				
		
		$rs['total'] = intval($total['total']); 
		return $rs;
	}	
	
function province(){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		
		$search=$this->apps->_request('search');
		$querysearch="";
		if($search){

			$querysearch=" AND id_category='{$search}'";
		
		}
		
		
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.provinces "; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.provinces ";
		//pr($sql);exit;
		$rsut=$this->apps->fetch($sql,1);
		if(!$rsut){ return false;} 
		$no = 1;
		if( $start>0)
		{
			$no = $start+1;
		}
		foreach ($rsut as $key => $val){
			
			$rsut[$key]['no'] = $no++;
			
			
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	
	}
	
	function checkEmail($email){
		$sql = "
				SELECT *
				FROM {$this->config['DATABASE'][0]['DATABASE']}.registration 
				WHERE email='{$email['email']}' LIMIT 1";
		
		$rs = $this->apps->fetch($sql); 
			// pr($sql);
		return $rs;
	}
	
	function emailreg(){
		global $CONFIG;
		$email=$_POST['email'];	
		
		
		$sql="select email from  {$CONFIG['DATABASE'][0]['DATABASE']}.registration where email='".$email."'";
		//pr($sql);
		$rsut=$this->apps->fetch($sql,1);
		if(!$rsut){ return false;} 
		$no = 1;
		if( $start>0)
		{
			$no = $start+1;
		}
		foreach ($rsut as $key => $val){
			
			$rsut[$key]['no'] = $no++;
			//$rsutemail=$rsut[$key]['email'];
			
			
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		
		//pr($rs['result']);exit;
		return $rs;
	
	}
	
}
