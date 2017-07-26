<?php /* Smarty version 2.6.13, created on 2015-11-02 15:36:37
         compiled from application/admin//apps/listpemeriksaan.html */ ?>
<script>
<?php echo '
function paging_ajax_banner(fungsi,start){ 
	var	startdate=$(\'.startdate\').val();
	var enddate=$(\'.enddate\').val();	
	var search=$(\'.search\').val();
	
	
	$.post(basedomain+"pemeriksaan/pagingpemeriksaan",{start:start,ajax:1,startdate:startdate,enddate:enddate,search:search},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
					
						str+=\'<tr>\';
						str+=\'<td>\'+v.no+\'</td>\';
						str+=\'<td>\'+v.nama_test+\'</td>\';
						str+=\'<td>\'+v.deskripsi_pemeriksaan+\'</td>\';
						str+=\'<td>\'+v.method+\'</td>\';
						str+=\'<td>\'+v.sample+\'</td>\';
						str+=\'<td>\'+v.manfaat_pemeriksaan+\'</td>\';
						if(v.ppanname){
						str+=\'<td>\'+v.ppanname+\'</td>\';
						}else{
						str+=\'<td></td>\';	
						}
						str+=\'<td>\'+v.lastupdate+\'</td>\';
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
            <h2 class="fl"><span class="icon-users">&nbsp;</span>Product & Service Management</h2>
             <!-- <h2 class="fr"><a href="#" class="button2">Add New</a></h2> -->
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		<div class="row">
                 <form method="GET" action="" id="shorter">
                  
						<div class="shorter fl">
						<span class="fl">Test Name</span>
						<input type='text' name='search' class='selectEvent fl' style="width:150px" value=<?php echo $this->_tpl_vars['search']; ?>
>
						</div> 
					
						<div class="shorter fr" id="datePick">
										<span class="fl">Date Range</span>
										<div class="rows fl">
											<input type="text" name="startdate" class="datepicker submitter startdate " id="dp1403509217274" value=<?php echo $this->_tpl_vars['startdate']; ?>
>
										</div><!-- /.rows -->
										
										<span class="fl">To</span>
										<div class="rows fl">
											<input type="text"  name="enddate" class="datepicker enddate " id="dp1403509217275" value=<?php echo $this->_tpl_vars['enddate']; ?>
>
										</div><!-- /.rows -->
										<input type="submit" class="button2" style="margin-top:0px;" value="Search">
						</div>
					</form>
                    </div><!--end.row-->
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Nama Tes</th> 
					<th class="head0">Deskripsi Pemeriksaan</th> 
					<th class="head0">Method</th> 
					<th class="head0">Sample</th> 
					<th class="head0">Manfaat Pemeriksaan</th> 
					<th class="head0">Panel Name</th> 
						<th class="head0">Last Update</th> 
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
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['nama_test']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['deskripsi_pemeriksaan']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['method']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['sample']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['manfaat_pemeriksaan']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['ppanname']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['lastupdate']; ?>
</td>
			</tr>
			<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_banner_list" class="paging">
            
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_banner_list","paging_ajax_banner",10);
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
                        \'url\': basedomain+\'banner/checkit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkinactives" value=\'+idnya+\' checked>Checked</center>\');
							
							$(document).ready(function(){
							$(".checkinactives").on("click", function(){
							var idnya=$(this).val();
							var thisnya=$(this);
									  $.ajax({
										\'type\': \'POST\',
										\'url\': basedomain+\'banner/incheckit\',
										\'data\': {idnya:idnya},
										\'dataType\':\'json\',
										\'success\': function(result){
										
											thisnya.hide();
											thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value=\'+idnya+\'></center>\');
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
			$(".checkinactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'banner/incheckit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value="\'+idnya+\'"></center>\');
							likeunlike();
						}
						
						});

				});
			});
}
'; ?>

</script>