<?php
class storyHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	function addstory($img1,$img2){
	global $CONFIG;
	
		$title=$this->apps->_p('title');
		$description=$_POST['description'];
		$meta_title=$_POST['meta_title'];
		$meta_description=$_POST['meta_description'];
		$keyword=$_POST['keyword'];
		$category=$this->apps->_p('category');
		$paramreg=$this->apps->_p('userreg');
		$nama=$this->apps->_p('nama');
		
		if($nama)
		{
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `title`='{$title}'
		,`content`='{$description}',`meta_title`='{$meta_title}',`meta_description`='{$meta_description}',`keyword`='{$keyword}',`img_home`='{$img1}',`img`='{$img2}',`id_category`='{$category}',
		`id_user`='{$paramreg}',date=NOW(),`name`='{$nama}',n_status=0";
		}else{
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `title`='{$title}'
		,`content`='{$description}',`meta_title`='{$meta_title}',`meta_description`='{$meta_description}',`keyword`='{$keyword}',`img_home`='{$img1}',`img`='{$img2}',`id_category`='{$category}',
		`id_user`='{$paramreg}',date=NOW(),n_status=0";
		}
		
		//pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	
	function addyoutube($data){
			global $CONFIG;
		
			$title = $data['title'];
			$url = $data['url'];
			
			$sql = "INSERT INTO `story_youtube` SET
							
							`title`='".$title."',							
							`url`='".$url."',
							`date`=NOW(),
							`n_status`=1
							";
			//pr($sql);exit;
			$fetch= $this->apps->query($sql);			
			// die;
			return true;
		}
	
	function checkstory(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set n_status=1 where id={$idnya}";
	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	
	function checkinactives(){
	global $CONFIG;
	$idnya=intval($_POST['idnya']);
	//	pr($idnya);exit;
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set n_status=0 where id={$idnya}";

	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	function edit($idnya=null){
		global $CONFIG;
		
		if($idnya)
		{
			$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 AND id={$idnya}";
			
			$fetch=$this->apps->fetch($sql);
			// pr($fetch);die;
			return $fetch;
		}else{
			return false;
		}
	
	}
	
	function selectuser($id){
	global $CONFIG;
		
	
			$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where 1 AND id={$id}";
			
			$fetch=$this->apps->fetch($sql,1);
			// pr($fetch);die;
			return $fetch;
			
	
	}
	function prosesedit($data){
		global $CONFIG;
		$imghome='';
		$imgconten='';
		if(isset($data['imgHome']))
		{
			
			$imghome='img = "'.$data['imgHome'].'", ';
		}
		if(isset($data['imgContent']))
		{
			
			$imgconten='img_home = "'.$data['imgContent'].'", ';
		}
		$sql="UPDATE  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article 
				SET 
					id_category='{$data['category']}',
					title='{$data['title']}',
					name='{$data['name']}',
					content='{$data['description']}',
					meta_title='{$data['meta_title']}',
					meta_description='{$data['meta_description']}',
					keyword='{$data['keyword']}',
					{$imghome}
					{$imgconten}
					n_status=1
			where id={$data['id']}";
	// pr($sql);die;
	$fetch=$this->apps->query($sql);
	return true;
		
	}
	function deletestory($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				//$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where `id`='{$inisiasi}'";
				$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set n_status = '2' where `id`='{$inisiasi}'";
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
	function downloadstory(){
	global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 and n_status=1 order by id DESC ";
		//pr($sql);exit;
		$rsut=$this->apps->fetch($sql,1);
		foreach ($rsut as $key => $val){
			
			$rsut[$key]['content'] = strip_tags($val['content']);
		}
		$rsut['data']=$rsut;
		
		return $rsut;
	}
	function storyList($start=null,$limit=10){
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
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 {$querysearch} and n_status in (0,1)"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 {$querysearch} and n_status in (0,1) order by id DESC LIMIT {$start}, {$limit} ";
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
			
			$rsut[$key]['content'] = strip_tags($val['content']);
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	}
	}
?>
