<?php /* Smarty version 2.6.13, created on 2015-11-10 17:01:16
         compiled from application/web/apps/tebak-skor.html */ ?>
<div id="tebak-skor" class="section">
	<div id="container">
        <div class="rows">
        	<img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/banner-skor2.jpg" >
        </div>
        		
		
		<form method="post" action="member/masukskor" name="myform">
			<div class="rows skorRows">
            	<!--a href="#succespopup" class="showPopup">inini</a-->
				<?php if ($this->_tpl_vars['lispertandingan']): ?>
				<h1 class="tittle yellow">SCOREBOARD</h1> 
					<div class="skorsInput tr">					
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['lisskor1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="rows skorRowss">
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor1'][$this->_sections['i']['index']]['club1']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor1'][$this->_sections['i']['index']]['skor1']; ?>
</h5>
									</div>
									
								</div>
								<div class="col3 textSkor">
									<span class="arrow-left">&nbsp;</span>
									<h1 class="textVs yellow">VS</h1>
									<span class="arrow-right">&nbsp;</span>
								</div>
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor1'][$this->_sections['i']['index']]['club2']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor1'][$this->_sections['i']['index']]['skor2']; ?>
</h5>								
									</div>
								</div>
							</div><!--end rows-->
						<?php endfor; endif; ?>
						
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['lisskor2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="rows skorRowss">
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor2'][$this->_sections['i']['index']]['club1']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor2'][$this->_sections['i']['index']]['skor1']; ?>
</h5>
									</div>
									
								</div>
								<div class="col3 textSkor">
									<span class="arrow-left">&nbsp;</span>
									<h1 class="textVs yellow">VS</h1>
									<span class="arrow-right">&nbsp;</span>
								</div>
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor2'][$this->_sections['i']['index']]['club2']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor2'][$this->_sections['i']['index']]['skor2']; ?>
</h5>									
									</div>
								</div>
							</div><!--end rows-->
						<?php endfor; endif; ?>
						
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['lisskor3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="rows skorRowss">
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor3'][$this->_sections['i']['index']]['club1']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor3'][$this->_sections['i']['index']]['skor1']; ?>
</h5>
									</div>
									
								</div>
								<div class="col3 textSkor">
									<span class="arrow-left">&nbsp;</span>
									<h1 class="textVs yellow">VS</h1>
									<span class="arrow-right">&nbsp;</span>
								</div>
								<div class="col3">
									<h4 class="namaClub yellow"><?php echo $this->_tpl_vars['lisskor3'][$this->_sections['i']['index']]['club2']; ?>
</h4>
									<div class="skorIn">
										<h5 class="skornya yellow"><?php echo $this->_tpl_vars['lisskor3'][$this->_sections['i']['index']]['skor2']; ?>
</h5>									
									</div>
								</div>
							</div><!--end rows-->
						<?php endfor; endif; ?>
						<?php if ($this->_tpl_vars['statustgl']): ?>
						<div class="rows">
							<!-- <input type="hidden" name="id_member" value="<?php echo $this->_tpl_vars['memberprofile']['ids']; ?>
">
							<!-- <button class="button" name="submit">Submit</button> 
							<input class="button" type="submit" name="submit" value="Edit"> -->
							<a href="tebakskor/editskor/<?php echo $this->_tpl_vars['memberprofile']['ids']; ?>
"><span class="button" value="edit">EDIT</span></a>
						</div>
						<?php endif; ?>
						
					</div><!--end.skorsInput-->
				<?php else: ?>
										
					<div class="rows">
						<div class="descSkor rowboxs tr">
							
								  <h4 class="title-entry yellow">Maaf, TEBAK SKOR! periode ini sudah ditutup.</h4>
						 
							<p>Anda dapat ikutan TEBAK SKOR! periode selanjutnya di pertandingan yang akan datang. Tetap update di game Supersoccer Community Race dan raih hadiah menarik setiap minggunya!</p>
						</div><!--end.skorInput-->
					</div><!--end.rows-->
					
				<?php endif; ?>
			</div><!--skorRows-->
		</form>
    </div><!--end#container-->
</div><!--end.section-->



<?php echo '
<script>
$(document).on(\'click\',\'.simpan\',function(){
	$(\'.skor1_error\').html(\'\');
	$(\'.skor2_error\').html(\'\');
	$(\'.skor3_error\').html(\'\');
	$(\'.skor4_error\').html(\'\');
	$(\'.skor5_error\').html(\'\');
	$(\'.skor6_error\').html(\'\');
	
	var valid="";
	if($(\'.skornya1\').val()==\'\')
	{
		$(\'.skor1_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if($(\'.skornya2\').val()==\'\')
	{
		$(\'.skor2_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if($(\'.skornya3\').val()==\'\')
	{
		$(\'.skor3_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if($(\'.skornya4\').val()==\'\')
	{
		$(\'.skor4_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if($(\'.skornya5\').val()==\'\')
	{
		$(\'.skor5_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if($(\'.skornya6\').val()==\'\')
	{
		$(\'.skor6_error\').html(\'Kolom ini harus diisi\');
		valid="ada";
	}
	if(valid)
	{
		//return false;
		$(document).on(\'click\',\'.mfp-close\',function(){
	//alert("asasasasas");
	 document.myform.submit();
});
	}
	
										  
});

$(\'.number\').keyup(function () {  
	if(this.value)
	{
		this.value = this.value.replace(/[^0-9]/g,\'\'); 
		
	}
});

function mfp(){
$(document).on(\'click\',\'.mfp-close\',function(){
  //$( "#simpannya" ).trigger( "click" );
  alert("asasas");
});
}


 
/*function submitform()
{
  document.myform.submit();
  
}*/
/*$(document).on(\'click\',\'.mfp-close\',function(){
	//alert("asasasasas");
	 document.myform.submit();
});*/
</script>
'; ?>