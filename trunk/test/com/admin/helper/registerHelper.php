<?php
class registerHelper {
	
	var $_mainLayout="";
	
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
	}
	
	function downloadpeserta(){
	global $CONFIG;
	$sql="select *,resume,
avatar,date from  {$CONFIG['DATABASE'][0]['DATABASE']}.register";
	$rsut['data']=$this->apps->fetch($sql,1);
	$no = 1;
	foreach ($rsut['data'] as $key => $val){
			
			$rsut['data'][$key]['no'] = $no++;
		}
	return $rsut;
	}
	
	
	function downloadpesertaalfa(){
	global $CONFIG;
	$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.regalfa";
	$rsut['data']=$this->apps->fetch($sql,1);
	$no = 1;
	foreach ($rsut['data'] as $key => $val){
			
			$rsut['data'][$key]['no'] = $no++;
		}
	return $rsut;
	}
	
	
	function register($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1 order by id DESC  LIMIT {$start}, {$limit} ";
		
		$rsut=$this->apps->fetch($sql,1);
		if(!$rsut){ return false;} 
		$no = 1;
		if( $start>0)
		{
			$no = $start+1;
		}
		foreach ($rsut as $key => $val){
			$text = $val['story']." ";
			$text = substr($text,0,90);
			$text = substr($text,0,strrpos($text,' '));
			$rsut[$key]['story']  = $text;
			$rsut[$key]['no'] = $no++;
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	}
	function registerListimg($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1 order by id DESC  ";
		
		$rsut=$this->apps->fetch($sql,1);
		if(!$rsut){ return false;} 
		$no = 1;
		if( $start>0)
		{
			$no = $start+1;
		}
		foreach ($rsut as $key => $val){
			$text = $val['story']." ";
			$text = substr($text,0,90);
			$text = substr($text,0,strrpos($text,' '));
			$rsut[$key]['story']  = $text;
			$rsut[$key]['no'] = $no++;
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	}
	
	
	function registeralfa($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.regalfa where n_status=1"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
				
		$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.regalfa where n_status=1 order by date desc LIMIT {$start}, {$limit}";
	
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

        function deleteuser($userid){
                global $CONFIG;
                        if ($userid){
                                $sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.register set n_status = '2' where `id`='{$userid}'";
                        //pr($sql);exit;
                                $fetch = $this->apps->query($sql);
                                if($fetch)
                                {
                                        return true;
                                }else{
                                        return false;
                                }

                        }

        }

        function deleteavatar($userid){
                global $CONFIG;
                        if ($userid){
                                $sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.register set avatar = '' where `id`='{$userid}'";
                        //pr($sql);exit;
                                $fetch = $this->apps->query($sql);
                                if($fetch)
                                {
                                        return true;
                                }else{
                                        return false;
                                }

                        }

        }


}

?>
