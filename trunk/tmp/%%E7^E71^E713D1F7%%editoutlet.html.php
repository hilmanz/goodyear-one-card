<?php /* Smarty version 2.6.13, created on 2015-10-08 11:18:16
         compiled from application/admin//apps/editoutlet.html */ ?>
<?php echo '
<script>
	tinyMCE.init({
	
        mode : "exact",
        elements : "teditor,teditor2,teditor3",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false
	});
	function ajaxfilemanager(field_name, url, type, win) {
		var ajaxfilemanagerurl = "../admin/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
		var view = \'detail\';
		switch (type) {
			case "image":
			view = \'thumbnail\';
				break;
			case "media":
				break;
			case "flash": 
				break;
			case "file":
				break;
			default:
				return false;
		}
		tinyMCE.activeEditor.windowManager.open({
		    url: "../admin/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
		    width: 782,
		    height: 440,
		    inline : "yes",
		    close_previous : "no"
		},{window : win, input : field_name });
	}
	
function validator(){
	tinyMCE.triggerSave();
	if( $(\'#teditor\').val() == \'\' ){
		alert("Please fill title");
		return false;
	}
}
</script>
'; ?>


<div class="page_section" id="project-page">
    <div id="container">
	

    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Edit Outlet</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
outlet" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listnya']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <form   method="post" action="" class="forms"> 
				<div id="new-project" class="boxcontent">
						<section class="step1">
						
						<div class="row">										
							<input id="name" name="OutletID" type="hidden" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['OutletID']; ?>
">										
						</div><!-- Row untuk Name -->
						
						<div class="row">
							<label for="name">Nama Cabang<br></label>							
							<input id="name" name="name" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Name']; ?>
" class="name" ><br>
							<label class="name_erorr msg_name error_red" style="color: red;"></label>					
						</div><!-- Row untuk Name -->
						
						<div class="row">
						<label for="Date">Alamat</label></label>
							<textarea  cols="100" id="teditor2"   name="AddressLine1" class="alamat" ><?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['AddressLine1']; ?>
</textarea><br>
							<label class="alamat_erorr msg_name error_red" style="color: red;"></label>
						</div>
						
						<div class="row">
							<label for="Phone">Nomor Telp<br></label>
							<input id="Phone" name="Phone" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Phone']; ?>
" class="telp" ><br>
							
							<label class="telp_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						<div class="row">
							<label for="Facs">Nomor Fax<br></label>
							<input id="Facs" name="Facs" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Facs']; ?>
" class="fax" ><br>
							
							<label class="fax_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						<div class="row">
							<label for="Facs">Email<br></label>
							<input id="Facs" name="Email" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Email']; ?>
" class="email" ><br>
			
							<label class="email_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						<div class="row">
							<label for="Opening">Opening Senin-Jumat<br></label>
							<input id="Opening" name="reguler_opening" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['reguler_opening']; ?>
" class="reguler_opening" ><br>
							
							<label class="reguler_opening_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Opening input -->	
						
						<div class="row">
							<label for="Closing">Closing Senin-Jumat<br></label>
							<input id="Closing" name="reguler_closing" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['reguler_closing']; ?>
" class="reguler_closing" ><br>
						
							<label class="reguler_closing_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Closing input -->	
						
						<div class="row">
							<label for="Opening">Opening Sabtu<br></label>
							<input id="Opening" name="weekend_opening" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['weekend_opening']; ?>
" class="required weekend_opening" ><br>
						
							<label class="weekend_opening_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Opening input -->	
						
						<div class="row">
							<label for="Closing">Closing Sabtu<br></label>
							<input id="Closing" name="weekend_closing" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['weekend_closing']; ?>
" class="required weekend_closing" ><br>
					
							<label class="weekend_closing_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Closing input -->	
						
						<div class="row">
							<label for="Information">Fasilitas<br></label>
							<textarea  cols="100" id="teditor3"   name="Information" class="information" ><?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Information']; ?>
</textarea><br>
							<label class="information_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						<div class="row">
							<label for="Latitude">Latitude<br></label>
							<input id="Latitude" name="Latitude" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Latitude']; ?>
" class="required latitude" ><br>
							<label class="latitude_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						<div class="row">
							<label for="Longitude">Longitude<br></label>
							<input id="Longitude" name="Longitude" type="text" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['Longitude']; ?>
" class="required longitude" ><br>
							<label class="longitude_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- Row untuk Phone input -->
						
						
                         <div class="row">
                        <input type="hidden" name="submit" value="1">
                        
                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['id']; ?>
">
                            <input type="submit" value="SAVE" class="button3 submitsave submitevent"  />
                             <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
outlet" class="button4">CANCEL</a>
                            <small class="msg"><?php echo $this->_tpl_vars['status']['msgee']; ?>
</small>
                            <small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
						</div><!-- end .row -->
						</section>
				</div><!-- end #wizard -->
            </form>
			
		<?php endfor; endif; ?>
			
			
        </div><!-- end .content -->
	
</div><!-- end #home -->

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
<?php echo '

$(\'.telp\').keyup(function () {  	
                if(this.value)
                {
                        this.value = this.value.replace(/[^0-9-]/g,\'\'); 
                        
                }
        });	
		$(\'.fax\').keyup(function () {  	
                if(this.value)
                {
                        this.value = this.value.replace(/[^0-9-]/g,\'\'); 
                        
                }
        });	
$(\'.latitude\').keyup(function () {  	
                if(this.value)
                {
                        this.value = this.value.replace(/[^0-9.-]/g,\'\'); 
                        
                }
        });	
$(\'.longitude\').keyup(function () {  	
                if(this.value)
                {
                        this.value = this.value.replace(/[^0-9.-]/g,\'\'); 
                        
                }
        });	


	$(document).on(\'click\',\'.submitevent\',function(){
     
		$(\'.name_erorr\').html(\'\');
		$(\'.alamat_erorr\').html(\'\');
		$(\'.telp_erorr\').html(\'\');
		$(\'.fax_erorr\').html(\'\');
		$(\'.email_erorr\').html(\'\');
		$(\'.reguler_opening_erorr\').html(\'\');
		$(\'.reguler_closing_erorr\').html(\'\');
		$(\'.weekend_opening_erorr\').html(\'\');
		$(\'.weekend_closing_erorr\').html(\'\');
		$(\'.information_erorr\').html(\'\');
		$(\'.latitude_erorr\').html(\'\');
		$(\'.longitude_erorr\').html(\'\');
		var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/; 

		
		var valid=\'\';
		if($(\'.name\').val()==\'\')
		{
			$(\'.name_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		/*if($(\'.alamat\').val()==\'\')
		{
			$(\'.alamat_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}*/
		if($(\'.telp\').val()==\'\')
		{
			$(\'.telp_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.fax\').val()==\'\')
		{
			$(\'.fax_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.email\').val()==\'\')
		{
			$(\'.email_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}else if(!$(\'.email\').val().match(mailformat))  
			{  
				$(\'.email_erorr\').html(\'format email salah\');
				valid=\'ada\';
			} 
		/*
		if(!$(\'.email\').val().match(mailformat))  
			{  
				$(\'.email_erorr\').html(\'format email salah\');
				valid=\'ada\';
			} 
		*/
		if($(\'.reguler_opening\').val()==\'\')
		{
			$(\'.reguler_opening_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.reguler_closing\').val()==\'\')
		{
			$(\'.reguler_closing_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.weekend_opening\').val()==\'\')
		{
			$(\'.weekend_opening_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.weekend_closing\').val()==\'\')
		{
			$(\'.weekend_closing_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.weekend_closing\').val()==\'\')
		{
			$(\'.weekend_closing_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		/*if($(\'.information\').val()==\'\')
		{
			$(\'.information_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}*/
		if($(\'.latitude\').val()==\'\')
		{
			$(\'.latitude_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		if($(\'.longitude\').val()==\'\')
		{
			$(\'.longitude_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';			
		}
		
		
	
		/*
		var status= tinyMCE.activeEditor.getContent();
		
		if(status==\'\')
		{
		//alert("ga Ada"+status);
		$(\'.information_erorr\').html(\'kolom ini harus di isi\');
		$(\'.alamat_erorr\').html(\'kolom ini harus di isi\');
		valid=\'ada\';
		}
		
		//tinymce.triggerSave();
		*/
		
		var editorContent = tinyMCE.get(\'teditor2\').getContent();
		if(editorContent==\'\')
		{		
		$(\'.alamat_erorr\').html(\'kolom ini harus di isi\');
		valid=\'ada\';
		}
		var editorContent2 = tinyMCE.get(\'teditor3\').getContent();
		if(editorContent2==\'\')
		{		
		$(\'.information_erorr\').html(\'kolom ini harus di isi\');
		valid=\'ada\';
		}
		
	
		if(valid)
		{
			return false;
		}
		else
		{
			$(\'.fromevent\').trigger(\'submit\');
		}
	})
'; ?>

</script>


<script>
<?php echo '	
	$(\'.submitsave\').click(function()
		{
			console.log(\'asa\');
			var name_no=\'.name_no\';
			$(name_no).html(\' \');
			var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/; 
			var email_no=".email_no";
			$(email_no).html(\' \');
			var username_no=\'.username_no\';
			$(username_no).html(\' \');
			var password=\'.password_no\';
			$(password_no).html(\' \');
			var checkboxmenu=\'.checkboxmenu_no\';
			$(checkboxmenu_no).html(\' \');
			var valid=\'\';
			if($(\'.checkboxmenu:checked\').length ==0)
				{
				
					$(subcategory_no).html(\'You cannot leave this field empty\');
					valid=\'ada\';
				}
			if($(\'.names\').val()==\'\')
			{
				$(name_no).html(\'Kolom ini harus diisi\');
				valid=\'ada\';
			}
			if($(\'.username\').val()==\'\')
			{
				$(username_no).html(\'You cannot leave this field empty\');
				valid=\'ada\';
			}
			if($(\'.password\').val()==\'\')
			{
				$(password_no).html(\'You cannot leave this field empty\');
				valid=\'ada\';
			}
			if($(\'.email\').val()==\'\')
			{
				$(email_no).html(\'You cannot leave this field empty\');
				valid=\'ada\';
			}
			else if(!$(\'.email\').val().match(mailformat))  
			{  
				$(email_no).html(\'format email salah\');
				valid=\'ada\';
			} 
			if(valid)
			{
				return false;
			
			}
			else
			{
				$(\'input[type="submit"]\').attr(\'disabled\',\'disabled\');
			
			}
		}
'; ?>

</script>