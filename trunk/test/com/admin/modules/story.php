<?php
class story extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->storyHelper = $this->useHelper('storyHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main($start=null,$limit=1){

		
		$storyList = $this->storyHelper->storyList($start=null,$limit=10);
		//pr($storyList);exit;
		$time['time'] = '%H:%M:%S';
		if($this->_request('search')){
		$this->assign('search',$this->_request('search'));
		
		}
		$this->assign('total',$storyList['total']);
		$this->assign('list',$storyList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/liststory.html');
	}
	
	function callsheader(){
		 
		$result=$this->storyHelper->downloadstory();
		//pr($result);die;
		
		$file='register_';
		$filename = $file.date('Ymd_gia').".xls";
		header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=$filename");  
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false); 
		echo "<table border='1'>";
		echo "<tr>";
			echo "<td>No</td>";
			echo "<td>Category</td>";
			echo "<td>Nama</td>";
			echo "<td>Title</td>";
			
			echo "<td>View Count</td>";
			echo "<td>Share Twitter</td>";
			echo "<td>Share Facebook</td>";
		echo "</tr>";
		$no=0;
		if($result['data'])
		{
		
		
			foreach ($result['data'] as $key => $val){
			$no++;
			
				echo "<tr>";
				echo "<td>$no</td>";
				echo "<td>";
				if($val['id_category']==1)
				{
				echo "Style";
				}else if ($val['id_category']==2)
				{
				echo "Events";
				}else if($val['id_category']==3)
				{
				echo "Skin";
				}else if($val['id_category']==4)
				{
				echo "D.I.Y";
				}else if($val['id_category']==5)
				{
				echo "Relations";
				}
				echo "</td>";
				echo "<td>$val[name]</td>";
				echo "<td>$val[title]</td>";
				
				echo "<td>$val[view_count]</td>";
				echo "<td>$val[share_twitter]</td>";
				echo "<td>$val[share_fb]</td>";
				echo "</tr>";
			}
		}
		else
		{
			echo "<tr>";
			echo "<td colspan='7'>Data Not Available</td>";
			echo "</tr>";
		}
		echo "</table>";
		exit;
	
	}
	
	function pagingstory(){
//pr('ss');exit;
		
		$storyList = $this->storyHelper->storyList($start=null,$limit=10);
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true,'data'=>$storyList['result'],'total'=>$storyList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
		
	function checkit(){

		
		$storyList = $this->storyHelper->checkstory();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function incheckit(){

		
		$storyList = $this->storyHelper->checkinactives();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function hapus(){

	
	$inisiasi=$this->_g('param');
	$deletestory = $this->storyHelper->deletestory($inisiasi);
	if($deletestory==true)
			{
				sendredirect('story');
				die;
			}	
	
	}
	function edit(){
global $LOCALE,$CONFIG;
		$id=$this->_g('id');
		$storyList = $this->storyHelper->edit($id);
		if($this->_p('submit')==1)
		{
			$data['title']=$this->_p('title');
			$data['id']=$this->_p('id');
			$data['name']=$this->_p('nama');
			$data['description']=$_POST['description'];
			$data['category']=$this->_p('category');
			$data['category']=$this->_p('category');
			if($_FILES['img_home']['name'])
			{
				$path = $CONFIG['LOCAL_PUBLIC_ASSET']."imgregistrasi/";
				$img1['name']=@$_FILES['img_home']['name'];
				$img1['type']=@$_FILES['img_home']['type'];
				$img1['tmp_name']=@$_FILES['img_home']['tmp_name'];
				$img1['error']=@$_FILES['img_home']['error'];
				$img1['size']=@$_FILES['img_home']['size'];
				//pr($img);exit;
				$uploadfiles = $this->uploadHelper->uploadThisImage($img1,$path,1000,false,false);
				$data['imgHome']=$uploadfiles['arrImage']['filename'];
				
				
			}
			if($_FILES['img_content']['name'])
			{
				$path = $CONFIG['LOCAL_PUBLIC_ASSET']."imgregistrasi/";
				$img2['name']=@$_FILES['img_content']['name'];
				$img2['type']=@$_FILES['img_content']['type'];
				$img2['tmp_name']=@$_FILES['img_content']['tmp_name'];
				$img2['error']=@$_FILES['img_content']['error'];
				$img2['size']=@$_FILES['img_content']['size'];
				//pr($img);exit;
				$uploadfiles1 = $this->uploadHelper->uploadThisImage($img2,$path,1000,false,false);
				$data['imgContent']=$uploadfiles1['arrImage']['filename'];
			
			}
			// pr($data);exit;
			$addstory = $this->storyHelper->prosesedit($data);
			if($addstory){
			sendRedirect('story');
			die;
			
			} 
		}
		
		
		$this->assign('sss','ddd');
		$this->assign('storynya',$storyList);
		// pr($storyList);die;
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/editstory.html');
	
	}
	function addstory(){
	global $LOCALE,$CONFIG;
	// pr($_FILES);pr($_POST);exit;
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."imgregistrasi/";
			$img1['name']=@$_FILES['img_home']['name'];
			$img1['type']=@$_FILES['img_home']['type'];
			$img1['tmp_name']=@$_FILES['img_home']['tmp_name'];
			$img1['error']=@$_FILES['img_home']['error'];
			$img1['size']=@$_FILES['img_home']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img1,$path,1000,false,false);
			$img1=$uploadfiles['arrImage']['filename'];
			
			
			$img2['name']=@$_FILES['img_content']['name'];
			$img2['type']=@$_FILES['img_content']['type'];
			$img2['tmp_name']=@$_FILES['img_content']['tmp_name'];
			$img2['error']=@$_FILES['img_content']['error'];
			$img2['size']=@$_FILES['img_content']['size'];
			//pr($img);exit;
			$uploadfiles1 = $this->uploadHelper->uploadThisImage($img2,$path,1000,false,false);
			$img2=$uploadfiles1['arrImage']['filename'];
			//pr($uploadfilenya);exit;
			$addstory = $this->storyHelper->addstory($img1,$img2);
			if($addstory){
			sendRedirect('story');
			die;
			
			} 
		}
		
	$id=$this->_request('reguser');
	if($id){
	$selectuser=$this->storyHelper->selectuser($id);

	$this->assign('paramreg',$id);
	$this->assign('usernya',$selectuser[0]['name']);
	}
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addstory.html');
	
	}
	
	
}
?>