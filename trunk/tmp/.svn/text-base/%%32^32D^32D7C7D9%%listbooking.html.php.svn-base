<?php /* Smarty version 2.6.13, created on 2015-10-08 11:44:54
         compiled from application/admin//apps/listbooking.html */ ?>
<script>
<?php echo '
function paging_ajax_booking(fungsi,start){ 
var jenisProd=$(\'.jenisProd  option:selected\').val();
	var statusProd=$(\'.statusProd  option:selected\').val();
	var startdate=$(\'.startdate\').val();
	var enddate=$(\'.enddate\').val();
	var search=$(\'.search\').val();
				
	$.post(basedomain+"booking/pagingbooking",{start:start,ajax:1,jenisProd:jenisProd,statusProd:statusProd,startdate:startdate,enddate:enddate,search:search},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
					
						str+=\'<tr>\';
						str+=\'<td>\'+v.no+\'</td>\';
						str+=\'<td>\'+v.name+\'</td>\';
						str+=\'<td>\'+v.email+\'</td>\';
						str+=\'<td>\'+v.telp+\'</td>\';
						str+=\'<td>\'+v.dob+\'</td>\';
						str+=\'<td>\'+v.sex+\'</td>\';
						str+=\'<td>\'+v.produk_layanan+\'</td>\';
						str+=\'<td>\'+v.test_pemeriksaan+\'</td>\';
						str+=\'<td>\'+v.tgl_booking+\'</td>\';	
						str+=\'<td>\'+v.cabang+\'</td>\';	
						str+=\'<td>\'
						if (v.n_status==1){str+=\'Done\';}else if(v.n_status==0){str+=\'-\';}else{str+=\'Cancel\';}str+=\'</td>\';
						str+=\'<td><a href="\'+basedomain+\'booking?paramactive=\'+v.id+\'" style="color:#19CFA8;">Done</a>|<a href="\'+basedomain+\'booking?paramcancel=\'+v.id+\'" style="color:#19CFA8;">Cancel</a></td>\';					
						//<a href="\'+basedomain+\'booking?paraminactive=\'+v.id+\'" style="color:#19CFA8;">Inactive</a>
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
	<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['email']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['telp']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['dob']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['sex']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['produk_layanan']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['test_pemeriksaan']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['tgl_booking']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['cabang']; ?>
</td>
	
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span>Booking Management</h2>
             
        </div><!-- end .titlebox -->
        <div class="content booking">
        	<div class="summary">
       		 <div class="short">
			  <form method="GET" action="" id="shorter">
             		<div class="leftShorter">
                	<div class="select_box">
                    	<label>Sort by Produk :</label>
                    	<select class="selectpicker jenisProd" name="jenisProd" data-width="100%" data-live-search="true" >
                            <option value="">Semua Jenis Produk</option>
                            <option value="1" <?php if ($this->_tpl_vars['jenisProd'] == 1): ?>selected<?php endif; ?>>Pemeriksaan Laboratorium</option>
                            <option value="2" <?php if ($this->_tpl_vars['jenisProd'] == 2): ?>selected<?php endif; ?>>Panel Pemeriksaan</option>
                         
                        </select>
                    </div><!--.end select_box-->
         
                    <div class="select_box">
                    	<label>Sort by Status :</label>
                    	<select class="selectpicker statusProd" name="statusProd" data-width="100%" data-live-search="true" >
                            <option value="" <?php if ($this->_tpl_vars['statusProd'] == ''): ?>selected<?php endif; ?>>Semua Status</option>
							<option value="0" <?php if ($this->_tpl_vars['statusProd'] == 0): ?>selected<?php endif; ?>> -</option>
                            <option value="1" <?php if ($this->_tpl_vars['statusProd'] == 1): ?>selected<?php endif; ?>> Done</option>
                            <option value="2" <?php if ($this->_tpl_vars['statusProd'] == 2): ?>selected<?php endif; ?>> Cancel</option>
                        </select>
                    </div><!--.end col3-->
                    <div class="searchBox">
                    	<label>Cabang Prodia :</label>
                        <input type='text' name='search' class='selectEvent fl' style="width:200px;margin-bottom:15px;" value=<?php echo $this->_tpl_vars['search']; ?>
>
                     </div>
                </div><!--end.leftShorter-->
                
             	<div class="rightShorter">
					
						 <div class="shorter fr" id="datePick">
                                <span class="fl">Date Range</span>
                                <div class="rows fl">
                                    <input type="text" name="startdate" class="datepicker submitter startdate " id="dp1403509217274" value=<?php echo $this->_tpl_vars['startdate']; ?>
>
                                </div><!-- /.rows -->
                                
                                <span class="fl">To</span>
                                <div class="rows fl">
                                    <input type="text"  name="enddate" class="datepicker submitter enddate " id="dp1403509217275"value=<?php echo $this->_tpl_vars['enddate']; ?>
>
                                </div><!-- /.rows -->
                                <input type="submit" class="button2" style="margin-top:0px;" value="Search">
                        </div>
					</form>	
           		</div><!--end.rightShorter-->
				</div>
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Nama</th> 
					<th class="head0">Email</th> 
					<th class="head0">No Telp</th> 
					<th class="head0">Tanggal Lahir</th> 
					<th class="head0">Jenis Kelamin</th> 
					<th class="head0">Jenis Produk Layanan</th> 
					<th class="head0" >Jenis Tes Pemeriksaan</th> 
					<th class="head0" >Tanggal Booking</th> 
					<th class="head0" >Cabang Prodia</th> 
					<th class="head0" >Status</th> 
						<th class="head0" >Action</th> 
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
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['email']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['telp']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['dob']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['sex']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['produk_layanan']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['test_pemeriksaan']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['tgl_booking']; ?>
</td>
					<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['cabang']; ?>
</td>
					<td><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?>Done<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 0): ?>-<?php else: ?>Cancel<?php endif; ?></td>
					<td><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] <> '1' && $this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] <> '2'): ?><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
booking?paramactive=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" style="color:#19CFA8;">Done</a><!--|<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
booking?paraminactive=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" style="color:#19CFA8;">Inactive</a>-->|<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
booking?paramcancel=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" style="color:#19CFA8;">Cancel</a><?php endif; ?></td>
					</tr>
					<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_booking2_list" class="paging">
            
            </div>
        </div><!-- end .booking -->
    </div><!-- end #container -->
</div><!-- end #home -->

<!--
<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_booking_list","paging_ajax_booking",10);
</script>
-->
<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_booking2_list","paging_ajax_booking",10);
</script>
<script>
<?php echo '
//select bootstarp

//$(\'.selectpicker\').selectpicker();
likeunlike();

function likeunlike(){

$(document).ready(function(){
			$(".checkactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'booking/checkit\',
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
										\'url\': basedomain+\'booking/incheckit\',
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
                        \'url\': basedomain+\'booking/incheckit\',
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