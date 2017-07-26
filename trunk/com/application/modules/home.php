<?php
class home extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']);
		$this->homeHelper = $this->useHelper('homeHelper');
		$this->user=$this->session->getSession($this->config['SESSION_NAME'],"WEB");
		$this->assign('tokenize',gettokenize(5000*60,$this->user->id));
	}
	
	function main(){
		global $LOCALE,$CONFIG;		
		$List = $this->homeHelper->registerCount();
		$Listprovinsi = $this->homeHelper->province();
		$regList = $this->homeHelper->emailreg();
		//pr($regList);exit;
		$time['time'] = '%H:%M:%S';
		$countreg=$List['total'];
		$this->assign('countregister',$countreg);
		$this->assign('Listprovinsi',$Listprovinsi['result']);
		$this->assign('Listreg',$regList['result']);
		$sharetext="Kunjungi www.onegoodcard.com untuk kemudahan bertransaksi dari Goodyear Mandiri One Card #OneGoodCard";
		$this->assign('sharetext',$sharetext);
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'home.html');	
		
		
		
		
	}
	
	function register()
	{		
		$storyList = $this->homeHelper->register();

		//pr("datu");exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function kuesioner()
	{		
		
		$storyList = $this->homeHelper->kuesioner();

		//pr("datu");exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function emailreg()
	{		
		//pr("masuk");die;
		$storyList = $this->homeHelper->emailreg();
		pr($storyList['result']);
		//pr("datu");exit;
		if($storyList==true){
		print json_encode(array('status'=>true,'data'=>$storyList['result']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function registermobil()
	{		
		$storyList = $this->homeHelper->registermobil();

		//pr("datu");exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function send_register($dataArray=null,$link=null) {  
		global $LOCALE;
		
		if($dataArray){
			$results['msg']='';
			$results['status']='';
			$template = $LOCALE[1]['addmember'];
			$template = str_replace('!#name',$dataArray['name'],$template);
			$template = str_replace('!#chaptername',$dataArray['namechapter'],$template);
			$template = str_replace('!#link',$this->config['BASE_DOMAIN'].'memberreg/reactivate/'.$link,$template);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, 'api:key-031f6c645c2c27d331e152ba8a959e28');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, 
					  'https://api.mailgun.net/v3/gte.supersoccer.co.id/messages');
			curl_setopt($ch, CURLOPT_POSTFIELDS, 
							array('from' => 'Supersoccer Community Race<sscr-admin@supersoccer.co.id>',
								  'to' => $dataArray['email'],
								  'subject' => "Registrasi Member ".$dataArray['namechapter']."",
								  'html' => $template,
								  'o:campaign' => 'fkdf5'));
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			// pr($info);
			// pr($result);
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
	
	function sendemail(){
		$template ="<div style='padding:40px; background:#f6f6f6; font-family:arial; line-height:26px; font-size:14px; color:#5d6770;'>
						<div style='max-width:600px; margin:0 auto;  background:#fff;'>
							
							<div style='padding:30px;'>
								<h3 style='margin:0; font-weight:normal;'>Hi,</h3>

								<p>Karya Anda telah kami terima dan akan melalui proses moderasi.</p>

								<p>Terima kasih telah berpartisipasi dalam rangka merayakan 25 tahun ulang tahun LG bersama kami di <a style='color:#c3034c; text-decoration:none;'>#LGForYou</a></p>
							</div>
						</div>
						<div style='max-width:600px; margin:0 auto; padding:20px 0; text-align:center;'>
							<div>
								<a href='facebook.com/lgeindonesia' target='_blank' style='margin:0 2px;'>Facebook</a>
								<a href='twitter.com/lgeindonesia' target='_blank' style='margin:0 2px;'>Twitter</a>
								<a href='instagram.com/lgeindonesia' target='_blank' style='margin:0 2px;'>Instagram</a>
							</div>
							<p style='font-size:12px; margin:0 0 10px 0;'>Copyright &copy; 2015 LG Electronics. All Rights Reserved.</p>
						</div>
					</div>";
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, 'api:key-031f6c645c2c27d331e152ba8a959e28');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, 
				'https://api.mailgun.net/v3/gte.supersoccer.co.id/messages');
			curl_setopt($ch, CURLOPT_POSTFIELDS, 
			array('from' => 'Supersoccer Community Race<sscr-admin@supersoccer.co.id>',
				'to' => 'fauzi.rahman@kanan.co.id',
				'subject' => "Undangan Event",
				'html' => $template,
				'o:campaign' => 'fkdf5'));
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			// pr($info);
			// pr($result);
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
}
?>
