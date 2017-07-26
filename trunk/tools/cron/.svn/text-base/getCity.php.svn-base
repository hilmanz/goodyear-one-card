<?php 

date_default_timezone_set('Asia/Jakarta'); 

 include_once "db.php";


class city extends db{



	function __construct(){
		global 	$CONFIG;
		$this->config = $CONFIG;  
		// $this->datestart = date("Y-m-d", strtotime("-1 days")); 
			
	}


	function getCity(){  
		
		
		$date ='2012-08-01';
		$url = 'http://dxs.prodia.co.id/api/wsgate/index/ws/003/lastdate/'.$date.'?q=09a152005268ff5ee49a02b791e09a34';
	
		$dataPemeriksaan = $this->crulGet($url);
	
		
		$jsdataPemeriksaan=json_decode($dataPemeriksaan);
		// echo"<pre>";
		// print_r($jsdataPemeriksaan);die;
		if($dataPemeriksaan)
		{
			
			foreach ($jsdataPemeriksaan as $key=>$row)
			{
				$sqlCheck = "select * from {$this->config['DATABASE'][0]['DATABASE']}.prodia_city where cityid='{$row->CityID}'"; 
	
				$qDatacheck= $this->fetch($sqlCheck);
				
				if($qDatacheck=='')
				{
					$sql = "INSERT INTO
							{$this->config['DATABASE'][0]['DATABASE']}.prodia_city 
						SET
						`cityid`='{$row->CityID}',
						`name`='{$row->Name}',
						`lastupdate`='{$row->LastUpdate}'
						
						"; 
					
					
					$qData = $this->query($sql);
					
				}
				
				 
				
				
			}
			
			
			
		}
		

	}
	
	function crulGet($url){
		
		$timeout=15;
		
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,$url);

		curl_setopt($ch,CURLOPT_TIMEOUT,$timeout);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);	

		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec ($ch);

		$info = curl_getinfo($ch);
	
		curl_close ($ch);
		return $response;
	 }
	 
	 function truncate_words($text, $limit, $ellipsis = '...') {
		$words = preg_split("/[\n\r\t ]+/", $text, $limit + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE);
		if (count($words) > $limit) {
			end($words); //ignore last element since it contains the rest of the string
			$last_word = prev($words);
			   
			$text =  substr($text, 0, $last_word[1] + strlen($last_word[0])) . $ellipsis;
		}
		return $text;
	}
}

$class = new city;

print "<pre>";
 

$class->getCity();
sleep(1);


print "</pre>";
die();



?>

