<?php
class contentHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function listbanner(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.banner where n_status=1
		
		";
		$result=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
		
	}
	function listgirl(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1";
		$result=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
		
	}
	
	function likearticle($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `like`=`like`+1 where id='{$id}'";
		//pr($sql);exit;
		$res=$this->apps->query($sql);
		
		$sql="select `like` as total from {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where id='{$id}'";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		if($result){
			return $result;
		}
		
	}
	
	function liketwitter($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `share_twitter`=`share_twitter`+1 where id='{$id}'";
		//pr($sql);exit;
		$res=$this->apps->query($sql);
		
		
		if($res){
			return $true;
		}
		
	}
	function likefb($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `share_fb`=`share_fb`+1 where id='{$id}'";
		//($sql);exit;
		$res=$this->apps->query($sql);
		
		
		if($res){
			return $true;
		}
		
	}
	
	function trackingview($param){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			set sa.view_count=sa.view_count+1 where sa.id={$param} 
		
		";

		$result=$this->apps->query($sql);
		
	}
	
	function trackingviewmodul($modul){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.category 
			set view_count=view_count+1 where id={$modul} 
		
		";

		$result=$this->apps->query($sql);
		
	}
	
	
	function listcontent(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			where sa.n_status=1 order by sa.id DESC limit 4
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = $val['content'];
			$result[$key]['contentisitwitter'] =stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90))); 			
			$result[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		if($result){
			return $result;
		}
		
	}
	function listcontentall($modul,$start=null,$limit=9){
		global $CONFIG;
			$result['result'] = false;
		$result['total'] = 0;
		$result['status'] = 0;
		
		if($start==null)
		$start = intval($this->apps->_request('start'));
		//pr($start);exit;
		$limit = intval($limit);
		$sql = "SELECT count(*) total
			FROM {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 and id_category='{$modul}' ";
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) ;
		
		$start=$start*9;
		
		$sql="select *,sa.date as date,sa.name as name, sa.id as id from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 and id_category='{$modul}' order by sa.id DESC LIMIT {$start},{$limit}
				
		
		";
		//pr($sql);exit;
		$rs=$this->apps->fetch($sql,1);
		foreach ($rs as $key => $val){
			$rs[$key]['title'] = stripslashes($val['title']);
			$rs[$key]['titleshare'] = $val['title'];
			$rs[$key]['content'] = strip_tags($val['content']);
			$rs[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))); 
			$rs[$key]['contentisitwitter'] =str_replace(str_split('\'\/:*?"<>|'),"",stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)))); 			
			$rs[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$rs[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
			//pr($rs[$key]['contentisifb']);
		}
		
		$result['total'] = intval($total['total']);
		$result['result'] = $rs;
		// pr($result); 
		if($result){
			return $result;
		}
		
	}
	
	function listcontentpopular(){
	//pr('ss');exit;
		global $CONFIG;
		$sql="select *,sa.date as date,sa.id as id,cat.category_page as page,sa.name as name from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article sa 
		left join register  reg on sa.id_user=reg.id 
		left join category cat on sa.id_category=cat.id
		where sa.n_status=1 order by sa.like DESC limit 1
		
		";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90))));
                        $result[$key]['contentisitwitter'] =stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)));
                        $result[$key]['contentisifb'] = str_replace("'s","",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));			
		}
		
		if($result){
			return $result;
		}
	}
	
	function listcontentstyle(){
		global $CONFIG;
		$sql="select *,sa.date as date from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 order by sa.id DESC limit 4
		
		";
//pr('ss');exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = $val['content'];
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	function listdetail($param){
		global $CONFIG;
		$sql="select *,sa.date as date,sa.id as id,cat.category_page as page,sa.name as name from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			left join category cat on sa.id_category=cat.id
			where sa.id={$param} 
			and sa.n_status=1
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = str_replace('#','',$this->apps->truncate(strip_tags($val['content']),90));
			$result[$key]['titleshare'] = $val['title']; 
			$result[$key]['contentnya'] =$val['content'];
			$result[$key]['contentisitwitter'] =str_replace(str_split('\'\/:*?"<>|'),"",stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)))); 			
			$result[$key]['contentisifb'] = str_replace("'","",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
	function listquiz(){
		global $CONFIG;
			
				$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.quiz where 1 and n_status=1 order by id DESC LIMIT 1";
				//pr($sql);exit;
				$fetch = $this->apps->fetch($sql,1);
				
				return $fetch;
			
		}
	function listfeaturegirl(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1 order by id DESC limit 10
		
		";

		$result=$this->apps->fetch($sql,1);
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
	function selectcount($param){
	global $CONFIG;
	$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.comment where id_cerita='{$param}' and n_status=1
		order by id DESC
		";

	$result['result']=$this->apps->fetch($sql,1);
	
	$sql="select count(*) as total from  {$CONFIG['DATABASE'][0]['DATABASE']}.comment where id_cerita='{$param}'
		
		and n_status=1 ";

	$result['total']=$this->apps->fetch($sql);
		//pr($result);exit;
	return $result;
	}
	
	function prosescomment(){
		global $CONFIG;
		
		$name=strip_tags($this->apps->_p('nama'));
		$email=strip_tags($this->apps->_p('email'));
		$comment=strip_tags($this->apps->_p('comment'));
		$idcerita=strip_tags($this->apps->_p('idcerita'));
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.comment set name='{$name}',email='{$email}',comment='{$comment}',id_cerita='{$idcerita}',n_status=1,`date`=NOW()
		
		";
		// pr($sql);die; 
		$result=$this->apps->fetch($sql,1);
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
}
?>
