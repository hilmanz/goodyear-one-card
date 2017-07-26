<?php /* Smarty version 2.6.13, created on 2015-11-10 17:14:07
         compiled from application/admin/apps/adminmanagement.html */ ?>
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-notebook">&nbsp;</span> User Admin Management</h2>
               <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
adminmanagement/addUser" class="button2">Add New</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0">
			<thead>
				<tr>
					<th width="3%" class="head0">No</th>
					<th class="head0">Name</th> 
					<th class="head0">Type</th> 
					<th class="head0">Registration Date</th> 
					<th class="head0">Status</th> 
					<th width="25%" class="head0">Action</th> 
				</tr>
			</thead>
			<tbody class="pagilist">
			<?php if ($this->_tpl_vars['list']): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr>
					
						<td  ><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
						<td ><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>
</span></td> 
						<td ><span><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['type'] == 9): ?> Super Admin <?php else: ?> Admin <?php endif; ?></span></td> 
						<td ><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['tanggal']; ?>
</span></td> 
						
						<td  ><span><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?> Active <?php else: ?> No Active <?php endif; ?></span></td> 
						
						<td  >	

							
                        	<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
adminmanagement/editadmin?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" class="button"><span class="icon-pencil">&nbsp;</span> Edit</a>
                        	<?php if ($this->_tpl_vars['user']->id != $this->_tpl_vars['list'][$this->_sections['i']['index']]['ownerid']): ?>
                        	<a href="javascript:void(0)" class="button" onClick="confirmation('<?php echo $this->_tpl_vars['basedomain']; ?>
adminmanagement/deluser?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
','Confirm to Delete?')" ><span class="icon-trash">&nbsp;</span> Hapus</a>
                        	<?php endif; ?>
                        </td>
					</tr>
                <?php endfor; endif; ?>
			<?php endif; ?>
					
			</tbody>
			</table>
            <div id="paging_of_jobs" class="paging">
              <a href="#"><span class="icon-first">&nbsp;</span></a>
              <a href="#"><span class="icon-backward2">&nbsp;</span></a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#" class="current">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#"><span class="icon-forward3">&nbsp;</span></a>
              <a href="#"><span class="icon-last">&nbsp;</span></a>
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_jobs","paging_ajax_jobs",10);
	var userid = <?php echo $this->_tpl_vars['user']->id; ?>
;
	<?php echo '
	function paging_ajax_jobs(fungsi,start){ 

	
	$.post(basedomain+"jobmanagement/main",{start:start,ajax:1},function(response){
	console.log(response);
		if(response){
					  if(response.status==1){
							var no = start+1;
							var str="";
							$.each(response.result,function(k,v){  
							
								str=\'<tr>\'+
							   \'<td  >\'+no+\'</td>\'+
									\'<td ><span>\'+v.namaPerusahaan+\'</span></td> \'+
									\'<td ><span>\'+v.job_title+\'</span></td> \'+
									\'<td><span>\'+v.job_description+\'</span></td> \'+
									\'<td><span>\'+v.requitment+\'</span></td> \'+
									\'<td  ><span>\'+v.date+\'</span></td> \'+
									\'<td>\'+	
										\'<a href="\'+basedomain+\'jobmanagement/publish?id=\'+v.id_job+\'" class="button"> <span class="icon-eye"> &nbsp;</span>Publish</a>\'+ 
										\'<a href="\'+basedomain+\'news/editnews?id=\'+v.id_news+\'" class="button"><span class="icon-pencil">&nbsp;</span> Edit</a>\'+
										\'<a href="javascript:void(0)" class="button delct" data-id="\'+v.id+\'" ><span class="icon-trash">&nbsp;</span> Delete</a>\'+
									 \'</td>\'+
								\'</tr>\';
								no++;
							});
							$(\'.pagilist\').html(str);
							//verified();
							//delct();
					}else{
						$(\'.pagilist\').html(\'<tr><td colspan="5"> No Data</td></tr>\');
			 
					}
				}
		},"JSON");
	}
	'; ?>

</script>