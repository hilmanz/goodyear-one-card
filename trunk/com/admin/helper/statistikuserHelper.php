<?php
class statistikuserHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function totalhasilLab(){
		global $CONFIG;
		
		$sql = "SELECT count_track as total_hasilLab
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_savetrack WHERE type=2"; 
		$rs = $this->apps->fetch($sql); 
		return $rs;
	}
	function getCabang(){
		global $CONFIG;
		
		$sql = "SELECT *
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_city"; 
		$rs = $this->apps->fetch($sql,1); 
		return $rs;
	}
	function totalhasilJantung(){
		global $CONFIG;
		
		$sql = "SELECT count_track as total_hasilJantung
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_savetrack WHERE type=1"; 
		$rs = $this->apps->fetch($sql); 
		return $rs;
	}
	function totaluserBoking($data=null){
		global $CONFIG;
		$where='';
		$enddate = date('Y-m-d');
		$startdate=strtotime ( '-6 day' , strtotime ( $enddate ) ) ;
		$startdate = date ( 'Y-m-d' , $startdate );
		if($data)
		{
			if($data['enddate']!=''){
				$enddate = date('Y-m-d',strtotime(str_replace('/', '-', $data['enddate'])));
			}else{
				$enddate = date('Y-m-d');
			}
		
			if($data['startdate']!=''){
				$startdate = date('Y-m-d',strtotime(str_replace('/', '-', $data['startdate'])));
			}else{
				$startdate=strtotime ( '-6 day' , strtotime ( $enddate ) ) ;
				$startdate = date ( 'Y-m-j' , $startdate );
			}
			if($data['cabang'])
			{
				$where .=' AND cabang = "'.$data['cabang'].'"';
			}
			if($data['jenislayanan'])
			{
				$where .=' AND produk_layanan = "'.$data['jenislayanan'].'"';
			}
			
		}
		$datetime1 = new DateTime($startdate);
		$datetime2 = new DateTime($enddate);
		$difference = $datetime1->diff($datetime2);
		$rangeDate = $difference->days;
		$result=array();
		$x=0;
		// pr($startdate);
		// pr($enddate);
		$tglawal=date('d',strtotime($startdate));
		$blnawal=date('m',strtotime($startdate));
		$thnawal=date('Y',strtotime($startdate));
		for($i=0;$i<=$rangeDate;$i++ )
		{
			$startdate=date('Y-m-d',mktime(0, 0, 0, $blnawal, $tglawal+$i, $thnawal));
			// echo$startdate;
			$purchase_date = " AND DATE(`date`) = DATE('$startdate') ";
			
			
			$sql = "SELECT *
					FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_booking WHERE 1 {$purchase_date}  {$where}"; 
			$rs = $this->apps->fetch($sql,1); 
			// pr($sql);
			$startdate=date('d-m-Y',strtotime(str_replace('/', '-', $startdate)));
			if($rs=='')
			{
				$result['dataBoking'][$startdate]=0;
			}
			else
			{
				$result['dataBoking'][$startdate]=count($rs);
			}
		}
		return $result;
	}
	function totalOpenHasilLab($data=null){
		global $CONFIG;
		$where='';
		$enddate = date('Y-m-d');
		$startdate=strtotime ( '-6 day' , strtotime ( $enddate ) ) ;
		$startdate = date ( 'Y-m-d' , $startdate );
		if($data)
		{
			if($data['enddate']!=''){
				$enddate = date('Y-m-d',strtotime(str_replace('/', '-', $data['enddate'])));
			}else{
				$enddate = date('Y-m-d');
			}
		
			if($data['startdate']!=''){
				$startdate = date('Y-m-d',strtotime(str_replace('/', '-', $data['startdate'])));
			}else{
				$startdate=strtotime ( '-6 day' , strtotime ( $enddate ) ) ;
				$startdate = date ( 'Y-m-j' , $startdate );
			}
			
			
		}
		$datetime1 = new DateTime($startdate);
		$datetime2 = new DateTime($enddate);
		$difference = $datetime1->diff($datetime2);
		$rangeDate = $difference->days;
		
		//$rangeDate = 18;
		$result=array();
		$x=0;
		// pr($startdate);
		// pr($enddate);
		$tglawal=date('d',strtotime($startdate));
		$blnawal=date('m',strtotime($startdate));
		$thnawal=date('Y',strtotime($startdate));
		for($i=0;$i<=$rangeDate;$i++ )
		{
			$startdate=date('Y-m-d',mktime(0, 0, 0, $blnawal, $tglawal+$i, $thnawal));
			// echo$startdate;
			$purchase_date = " AND DATE(`date_track`) = DATE('$startdate') ";
			
			
			$sql = "SELECT *
					FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_hasilLab_track WHERE 1 {$purchase_date}  {$where}"; 
			$rs = $this->apps->fetch($sql,1); 
			// pr($sql);
			$startdate=date('d-m-Y',strtotime(str_replace('/', '-', $startdate)));
			if($rs=='')
			{
				$result['dataopenHasilLab'][$startdate]=0;
			}
			else
			{
				$result['dataopenHasilLab'][$startdate]=count($rs);
			}
		}
		return $result;
	}

	function addcontent($data,$img){
	global $CONFIG;
	
	
	
		$url=@$data['link'];
		$link= $url;
		
		$imgcrop=$img;
		$imgori='original_'.$img;
		
		$urlimgcrop=$CONFIG['LOCAL_PUBLIC_ASSET']."content/".$img;
		$urlimgori=$CONFIG['LOCAL_PUBLIC_ASSET']."content/original_".$img;
		
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content set `link_s`='{$link}'
		,`title_s`='{$data['title']}',`media_name_s`='{$data['medianame']}',`published_date_i`='{$data['publishdate']}'
		,published_ts_l='{$data['publists']}',content_t='{$data['content']}',description='{$data['description']}'
		,source='2',`image_url_ori`='{$urlimgori}',`image_url`='{$urlimgcrop}',`image_ori`='{$imgori}',`image`='{$imgcrop}'
		
		";
		//pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	
	
	function listeditcontent($param){
	global $CONFIG;
	$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content where id='{$param}'";
	$fetch = $this->apps->fetch($sql,1);
	//pr($sql);exit;
	
	foreach ($fetch as $key => $val){
		$fetch[$key]['published_date_i']=date('d-m-Y',strtotime($val['published_date_i']));
		$fetch[$key]['published_ts_l']=date('d-m-Y',$val['published_ts_l']);
	}
		if($fetch)
		{
			return $fetch;
		}else{
			return false;
		}
	}
	function editcontent($data,$img){
	global $CONFIG;
	
		$url=@$data['link'];
		$link= $url;
	
		if($img=='')
		{
		
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content set `link_s`='{$link}'
		,`title_s`='{$data['title']}',`media_name_s`='{$data['medianame']}',`published_date_i`='{$data['publishdate']}'
		,published_ts_l='{$data['publists']}',content_t='{$data['content']}',description='{$data['description']}'
		,source='2' where id='{$data['idnya']}'";
		
		}else{
		
		$imgcrop=$img;
		$urlimgcrop=$CONFIG['LOCAL_PUBLIC_ASSET']."content/".$img;
		
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content set `link_s`='{$link}'
		,`title_s`='{$data['title']}',`media_name_s`='{$data['medianame']}',`published_date_i`='{$data['publishdate']}'
		,published_ts_l='{$data['publists']}',content_t='{$data['content']}',description='{$data['description']}'
		,source='2',`image_url`='{$urlimgcrop}',`image`='{$imgcrop}' where id='{$data['idnya']}'";
		
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
	
	
	function checkcontent(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content set n_status=1 where id={$idnya}";
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
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.prodia_content set n_status=0 where id={$idnya}";
	//pr($sql);exit;
	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	
		function deletecontent($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.content where `id`='{$inisiasi}'";
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
	
	function selectcontent($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.content where `id`='{$inisiasi}'";
				//pr($sql);exit;
				$fetch = $this->apps->fetch($sql,1);
				return $fetch;
				
			}
			
			}
	
	
	}
?>