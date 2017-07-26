<?php
class login extends App{
		
	function beforeFilter(){
		$this->loginHelper = $this->useHelper('loginHelper');
		
	}
	
	function main(){
		$this->local();
	}
	
	function local(){
		
		global $CONFIG,$logger;
		
		$basedomain = $CONFIG['ADMIN_DOMAIN'];
		//pr('foo');exit;
		$this->assign('basedomain',$basedomain);
		//var_dump($this->_p('password'));exit;
		if($this->_p('login'))
		{
				if($this->_p('username')&&$this->_p('password')){
					//captcha 
					// $_captcha = $this->_p('captcha');
					// if(isset($_SESSION['codeBookCaptcha'])){
					// $_valid = (md5($_captcha) == $_SESSION['codeBookCaptcha']) ? true : false;
					// $_SESSION['codeBookCaptcha'] = "bed" . rand(00000000,99999999) . "bed";
					// }else $_valid = false;
					// if($_valid) {
						
						$res = $this->loginHelper->loginSession();
						// pr($res);die;
						if($res['status']==1){
							
								$this->log('login','welcome');
								$this->assign("msg","login-in.. please wait");
								$this->assign("link","{$CONFIG['ADMIN_DOMAIN']}{$CONFIG['DEFAULT_MODULES_ADMIN']}");
								sendRedirect("{$CONFIG['ADMIN_DOMAIN']}{$CONFIG['DEFAULT_MODULES_ADMIN']}");
								return $this->out(TEMPLATE_DOMAIN_ADMIN . '/login_message.html');
								die();
						}
						else
							{
							
								$this->assign("msg",$res['msg']);
							}
					// }
				}
				else
				{
					$this->assign("msg",'Your login was unsucccesful. The user name or password provided not empty.');
				}
		}
		print $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'login.html');
		exit;
	}
}
?>