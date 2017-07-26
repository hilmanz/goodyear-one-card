<?php
class skin extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
			
		
	}
	
	function main(){
		
	
		$modul='3';
		$this->contentHelper->trackingviewmodul($modul);
		$listcontent =  $this->contentHelper->listcontentall($modul);
		
		//pr($listcontent);exit;
		$this->assign('listcontent',$listcontent['result']);
		$this->assign('total',$listcontent['total']);
		
		$this->assign('modul','SKIN 101'); 
		$this->assign('contentmodul','Dapetin tips dan trik buat kulit yang lebih sehat!'); 
		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/skin.html');
	}
	function detail(){
		global $LOCALE,$CONFIG;
	//pr($_POST);
		$param=$this->_g('param');
		$this->contentHelper->trackingview($param);
		if($_POST['submit']==1)
		{
			$prosescomment =  $this->contentHelper->prosescomment();
		}
		$comment =  $this->contentHelper->selectcount($param);
		
		$this->assign('total',$comment['total']['total']);
		$this->assign('listcomment',$comment['result']);
		//List lastest Story
		$listcontent =  $this->contentHelper->listdetail($param);
		//pr($listdetail);exit;
		$this->assign('listcontent',$listcontent);
		$this->assign('paramcerita',$param);
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/style-detail.html');
		
		
	}
	
	function getskin(){
		$modul='3';
		//$start = $this->_p('start');
		//pr($start);exit;
		$ajax =	 $this->contentHelper->listcontentall($modul);
//pr($ajax);exit;
	
		if ($ajax){ 
			print json_encode(array('status'=>true, 'data'=>$ajax['result'],'total'=>$ajax['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
	}	
	
}
?>
