<?php /* Smarty version 2.6.13, created on 2015-11-10 17:00:31
         compiled from application/web//apps/leaaderboard.html */ ?>
<div id="event-detail" class="section">
	<div id="container">
    	<div class="row-2">
            <h1 class="yellow textbg">LEADERBOARD</h1>
    	</div>
        
        <div class="rows">
            <div class="leaderInfo tabsInfo">
            	
            	<div id="tabs">
                  <ul>
                    <li><a href="#tabs-1" class="pointcpter">CHAPTER</a></li>
                    <li><a href="#tabs-2" class="pointmember">MEMBER</a></li>
                  </ul>
                  <div id="tabs-1">
				  <div class="listchaptr">
				  <?php if ($this->_tpl_vars['leaderChapter']): ?>
                		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['leaderChapter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                  	<div class="rows-list">
                    	<div class="leftleader">
                            <a class="smallerThumb" href="#">
							<?php if ($this->_tpl_vars['leaderChapter'][$this->_sections['i']['index']]['img_avatar']): ?>
                             <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/profile/<?php echo $this->_tpl_vars['leaderChapter'][$this->_sections['i']['index']]['img_avatar']; ?>
" />
							<?php else: ?>
							<img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/profile/images.jpg" />
							<?php endif; ?>
						   </a>
                        	<p class="leadClub"><?php echo $this->_tpl_vars['leaderChapter'][$this->_sections['i']['index']]['name_chapter']; ?>
  <span class="chapterLead yellow">( <?php echo $this->_tpl_vars['leaderChapter'][$this->_sections['i']['index']]['citinya']; ?>
 )</span></p>
                        </div>
                        <div class="leaderboard-points">
                            <span class="points"><?php echo $this->_tpl_vars['leaderChapter'][$this->_sections['i']['index']]['total']; ?>
</span>
                        </div>
                    </div>
					<?php endfor; endif; ?>
				<?php endif; ?>
                   </div>
				    <div class="page" id="paggingchapter">
				   
				   </div>
                  </div>
                  
                  <div id="tabs-2">
				  <div class="listmmber">
				  <?php if ($this->_tpl_vars['leaderMember']): ?>
                		<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['leaderMember']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                  	 <div class="rows-list">
                    	<div class="leftleader anngotalead">
                    		<p class="leadClub"><?php echo $this->_tpl_vars['leaderMember'][$this->_sections['j']['index']]['name']; ?>
  <span class="chapterLead yellow">( <?php echo $this->_tpl_vars['leaderMember'][$this->_sections['j']['index']]['name_chapter']; ?>
 )</span></p>
                        </div>
                        <div class="leaderboard-points"> 
                        	<span class="points"><?php echo $this->_tpl_vars['leaderMember'][$this->_sections['j']['index']]['total']; ?>
</span>
                        </div>
                    </div>
					<?php endfor; endif; ?>
				<?php endif; ?>
				</div>
                   <div class="page" id="paggingpoint">
				   
				   </div>
                  </div>
                  </div>
                 
                </div><!--end#tabs-->
                
            </div><!--endleaderInfo-->
        </div><!--endleaderBoardrows-->
    
</div><!--end.section-->

<script>
var totalleaderChapter='<?php echo $this->_tpl_vars['totalleaderChapter']; ?>
';
var totalleaderMember='<?php echo $this->_tpl_vars['totalleaderMember']; ?>
';
console.log(totalleaderMember);

<?php echo '
$( ".headTrigger" ).click(function() {
  $( ".arrowdown" ).toggleClass( "arrowUp" );
  $( "#desclandingMobile" ).slideToggle( "slow" );
});
'; ?>

</script>

<script>
<?php echo '
	$(document).on (\'click\',\'.submitlogin\',function(){
		$(\'.msgerorr\').html(\'\');
		var valid="";
		if($(\'.email\').val()==\'\' || $(\'.password\').val()==\'\')
		{
			$(\'.msgerorr\').html(\'Username atau Password yang Anda masukkan salah.\');
			valid="ada";
		}
		if(valid)
		{
			return false;
		}
		else
		{
			$(\'.formlogin\').trigger(\'submit\');
		}
	}); 
	
	
	$(\'.pointcpter\').click(function(){
		
			
		});
		$(\'.pointmember\').click(function(){
		
			console.log(\'point\');
			
		});
	function paging_list_chapter(fungsi,start){
		
				  var keryword=$(\'.search\').val();
				  var status=$(\'.status\').val();
			    $.post(basedomain+"home",{startchapter:start,ajaxchapter:1,search:keryword,status:status},function(response){
                 var str=\'\';
                 if(response.status==1)
                 {
						var str=\'\';
                         $.each(response.data.data,function(k,v){
								str +=\'<div class="rows-list">\'+
										\'<div class="leftleader">\'+
											\'<a class="smallerThumb" href="#">\';
											if (v.img_avatar)
											{
												 str +=\'<img src="\'+basedomain+\'public_assets/profile/\'+v.img_avatar+\'" />\';
											}
											else
											{
												str +=\'<img src="\'+basedomain+\'public_assets/profile/images.jpg" />\';
											}
											
										 str +=\'  </a>\'+
											\'<p class="leadClub">\'+v.name_chapter+\'  <span class="chapterLead yellow">( \'+v.citinya+\' )</span></p>\'+
										\'</div>\'+
										\'<div class="leaderboard-points">\'+
											\'<span class="points">\'+v.total+\'</span>\'+
										\'</div>\'+
									\'</div>\';
						 });
						 console.log(str);
						  $(\'.listchaptr\').html(str);
				 }
                 else
                  {
                          str +=\'<tr>\';
                           str +=\'<td colspan="8"> No data available </td>\';
                            str +=\'</tr>\';
                           $(\'.listchaptr\').html(str);

                   }
		    },"JSON");
		}
	function paging_list_pointmemeber(fungsi,start){
				  var keryword=$(\'.search\').val();
				  var status=$(\'.status\').val();
			    $.post(basedomain+"home",{startmember:start,ajaxpoint:1,search:keryword,status:status},function(response){
                 var str=\'\';
                 if(response.status==1)
                 {
						var str=\'\';
                         $.each(response.data.data,function(k,v){
								str +=\' <div class="rows-list">\'+
									\'<div class="leftleader anngotalead">\'+
										\'<p class="leadClub">\'+v.name+\' <span class="chapterLead yellow">( \'+v.name_chapter+\')</span></p>\'+
									\'</div>\'+
									\'<div class="leaderboard-points"> \'+
										\'<span class="points">\'+v.total+\'</span>\'+
									\'</div>\'+
								\'</div>\';
						 });
						  $(\'.listmmber\').html(str);
				 }
                 else
                  {
                          str +=\'<tr>\';
                           str +=\'<td colspan="8"> No data available </td>\';
                            str +=\'</tr>\';
                           $(\'.listmmber\').html(str);

                   }
		    },"JSON");
		}
'; ?>


</script>