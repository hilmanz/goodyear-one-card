<?php /* Smarty version 2.6.13, created on 2015-08-21 11:04:58
         compiled from application/admin//apps/listyoutube.html */ ?>
<script>

<?php echo '
function paging_ajax_youtube(fungsi,start){ 
	var search=$(\'.search  option:selected\').val();
console.log(search);			
	$.post(basedomain+"youtube/pagingyoutube",{start:start,ajax:1,search:search},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
					
						str+=\'<tr>\';
						str+=\'<td>\'+v.no+\'</td>\';
						
						str+=\'<td>\'+v.title+\'</td>\';
						str+=\'<td>\'+v.url+\'..</td>\';
						str+=\'<td>\'+v.waktu+\'</td>\';						
						str+=\'<td>\';
						if (v.n_status==1)
						{
						str+=\'<center><input type="checkbox" class="checkinactive" value="\'+v.id+\'" checked>Tampil</center>\';
						}else{
						str+=\'<center><input type="checkbox" class="checkactive" value="\'+v.id+\'"></center>\';
						}
						str+=\'</td>\';
						str+=\'<td>\';
						if (v.view==1)
						{
						str+=\'<center><input type="radio" name="status" class="checkinactiveradio" value="\'+v.id+\'" checked></center>\';
						}else{
						str+=\'<center><input type="radio" name="status" class="checkactiveradio" value="\'+v.id+\'"></center>\';
						}
						str+=\'</td>\';
						str+=\'<td><a href="\'+basedomain+\'youtube/edit?id=\'+v.id+\'" class="button"  > Edit</a><a href="javascript:void(0)" class="button" onClick="confirmation(\\\'\'+basedomain+\'youtube/hapus?param=\'+v.id+\'\\\',\\\'Confirm to Delete?\\\')" > Delete</a>\';
						str+=\'</td>\';
						str+=\'</tr>\';
						
						});
						
						$(\'.pagilist\').html(str);
						likeunlike();	
					
				}
			}
		},"JSON");
	}
	
'; ?>

	</script>

<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span> youtube Article</h2>			   
               <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
youtube/addyoutube" class="button2">Add New</a></h2> 
        </div><!-- end .titlebox -->
        <div class="content">
        	
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Title</th> 
					<th class="head0">Url</th> 
					<th class="head0">Waktu</th> 					 
					<th class="head0">Status</th> 
					<th class="head0">Home</th> 
					<th class="head0">Action</th> 
				</tr>
			</thead>
			<tbody class="pagilist">
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
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['title']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['url']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['waktu']; ?>
</td>			
			<td><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?>
			<center><input type="checkbox" class="checkinactive" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" checked>Tampil1</center>
			<?php else: ?>
			<center><input type="checkbox" class="checkactive" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
"></center><?php endif; ?></td>
			<td>
			<?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['view'] == 1 && $this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 0): ?>
			<center><label class="noni">pilih default lain</label></center>			
			<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['view'] == 1): ?>
			<center><input type="radio" name="status" class="checkinactiveradio" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" checked></center>
			<?php else: ?>
			<center><input type="radio" name="status" class="checkactiveradio" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" ></center>
			<?php endif; ?></td>
			<td>
			
			<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
youtube/edit?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" class="button"  > Edit</a>
			
			<a href="javascript:void(0)" class="button" onClick="confirmation('<?php echo $this->_tpl_vars['basedomain']; ?>
youtube/hapus?param=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
','Confirm to Delete?')" > Delete</a></td>
			</tr>
			<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_youtube_list" class="paging">
             
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_youtube_list","paging_ajax_youtube",10);
</script>

<script>
<?php echo '
likeunlike();

function likeunlike(){

$(document).ready(function(){
			$(".checkactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'youtube/checkit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkinactives" value=\'+idnya+\' checked>Tampil2</center>\');
							
							$(document).ready(function(){
							$(".checkinactives").on("click", function(){
							var idnya=$(this).val();
							var thisnya=$(this);
									  $.ajax({
										\'type\': \'POST\',
										\'url\': basedomain+\'youtube/incheckit\',
										\'data\': {idnya:idnya},
										\'dataType\':\'json\',
										\'success\': function(result){
										
											thisnya.hide();
											thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value=\'+idnya+\'>non2</center>\');
											likeunlike();
										}
										
										});

								});
							});
						}
						
						});

				});
			});
			
$(document).ready(function(){
			$(".checkactiveradio").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'youtube/checkitradio\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="radio" name="status" class="checkactivesradio" value=\'+idnya+\' checked>yo</center>\');
							$(\'.noni\').html(\'end\');						
						}
						
						});
												
				});
			});
			
						
$(document).ready(function(){
			$(".checkinactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'youtube/incheckit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value="\'+idnya+\'">non</center>\');
							
							alert("Please select default");	
							likeunlike();
						}
						
						});

				});
			});
			

}
'; ?>

</script>
