<?php 

class reportHelper {

	function __construct($apps){
		global $CONFIG,$logger;
		$this->logger = $logger;
		$this->apps = $apps;
		if(is_object($this->apps->user)) $this->uid = intval($this->apps->user->id);

		$this->dbshemaWeb =$CONFIG['DATABASE'][0]['DATABASE'];	
		$this->dbshema =$CONFIG['DATABASE'][0]['DATABASE'];	
	} 
	


	function totalreg(){ 
		
		global $CONFIG;
		$sql="select count(*) as total from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1";
		$result['result']=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
			
	}
	 
	function totalregalfa(){ 
		
		global $CONFIG;
		$sql="select count(*) as total from  {$CONFIG['DATABASE'][0]['DATABASE']}.regalfa where n_status=1";
		$result['result']=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
			
	} 
	 
}

?>

