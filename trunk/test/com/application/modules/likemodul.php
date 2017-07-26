<?php
class likemodul extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
		
	}
	
	function main(){
		global $LOCALE,$CONFIG;
	
		$idlike=$this->_p('like');
		//pr($_POST);exit;
		$likearticle =  $this->contentHelper->likearticle($idlike);
		//pr($likearticle);exit;
		if ($likearticle){ 
			print json_encode(array('status'=>true,'total'=>$likearticle[0]['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		die;
		
	}
	function liketwitter(){
		global $LOCALE,$CONFIG;
	
		$idlike=$this->_p('like');
		//pr($_POST);exit;
		$liketwitter =  $this->contentHelper->liketwitter($idlike);
		//pr($likearticle);exit;
		if ($liketwitter==true){ 
			print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		die;
		
	}
	
	function likefb(){
		global $LOCALE,$CONFIG;
	
		$idlike=$this->_p('like');
		//pr($_POST);exit;
		$likefb =  $this->contentHelper->likefb($idlike);
		//pr($likearticle);exit;
		if ($likefb==true){
			print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		die;
		
	}

	
}
?>
