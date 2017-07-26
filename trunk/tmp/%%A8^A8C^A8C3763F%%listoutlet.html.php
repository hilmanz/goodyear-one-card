<?php /* Smarty version 2.6.13, created on 2015-11-02 16:02:19
         compiled from application/admin//apps/listoutlet.html */ ?>
<script>
<?php echo '
function paging_ajax_outlet(fungsi,start){ 
var jenisProd=$(\'.jenisProd  option:selected\').val();
	var statusProd=$(\'.statusProd  option:selected\').val();
	var startdate=$(\'.startdate\').val();
	var enddate=$(\'.enddate\').val();
	var search=$(\'.search\').val();
	
		console.log(search);
	$.post(basedomain+"outlet/pagingoutlet",{start:start,ajax:1,statustime:jenisProd,status:statusProd,startdate:startdate,enddate:enddate,search:search},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
	
						str+=\'<tr>\';
						str+=\'<td rowspan="2">\'+v.no+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Name+\'</td>\';					
						str+=\'<td rowspan="2">\'+v.AddressLine1+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Phone+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Facs+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Email+\'</td>\';						
						str+=\'<td>Senin-Jumat \'+v.reguler_opening+\' - \'+v.reguler_closing+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Information+\'</td>\';
						str+=\'<td rowspan="2">\'+v.Latitude+\' , \'+v.Longitude+\'</td>\';						
						str+=\'<td rowspan="2">\'+v.statusjam+\'</td>\';	
						str+=\'<td rowspan="2">\'+v.LastUpdate+\'</td>\';							
						str+=\'<td rowspan="2">\'
						if (v.n_status==1){str+=\'Actived\';}else if(v.n_status==0){str+=\'Inactived\';}else{str+=\'Gagal\';}str+=\'</td>\';
						str+=\'<td rowspan="2"><a href="\'+basedomain+\'outlet/editoutlet?param=\'+v.id+\'" class="button2">Edit</a></td>\';						
						str+=\'</tr>\';
						str+=\'<tr><td>Sabtu \'+v.weekend_opening+\' - \'+v.weekend_closing+\'</td></tr>\';
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
            <h2 class="fl"><span class="icon-users">&nbsp;</span>Outlet Management</h2>
            <!--  <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
outlet/addoutlet" class="button2">Add New</a></h2> -->
        </div><!-- end .titlebox -->
        <div class="content outlet">
			<div class="summary">
				<div class="short">
					<form method="GET" action="" id="shorter">
					   <div class="leftShorter">
							<div class="select_box">
								<label>Status Buka/Tutup :</label>
								<select class="selectpicker jenisProd" name="statustime" data-width="100%" data-live-search="true" >
									<option value="">Semua Status</option>
										<option value="open" <?php if ($this->_tpl_vars['statustime'] == open): ?>selected<?php endif; ?>> Open</option>
										<option value="close" <?php if ($this->_tpl_vars['statustime'] == close): ?>selected<?php endif; ?>> Close</option> 
								 
								</select>
							</div><!--.end select_box-->
				 
							<div class="select_box">
								<label>Sort by Status :</label>
								<select class="selectpicker statusProd" name="status" data-width="100%" data-live-search="true" >
									<option value="">Semua Status</option>
										<option value="Active" <?php if ($this->_tpl_vars['status'] == 'Active'): ?>selected<?php endif; ?>> Active</option>
										<option value="Inactive" <?php if ($this->_tpl_vars['status'] == 'Inactive'): ?>selected<?php endif; ?>> Inactive</option>								
								</select>
							</div><!--.end col3-->
							<div class="searchBox">
								<label>Nama Cabang :</label>
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
									<input type="text"  name="enddate" class="datepicker enddate " id="dp1403509217275" value=<?php echo $this->_tpl_vars['enddate']; ?>
>
								</div><!-- /.rows -->
								<input type="submit" class="button2" style="margin-top:0px;" value="Search">
								<!--<button class="btn btn-success searchopenhasillab" type="button">Go!</button>-->
							</div>             	
						</div><!--end.row-->						
					</form>	
				</div>
			</div><!-- end .summary -->
            <div class="col1">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Nama Cabang</th> 
					<th class="head0">Alamat</th> 
					<th class="head0">No Telp</th> 
					<th class="head0">No Fax</th> 
					<th width="100" class="head0">Email</th> 
					<th class="head0" width="200" >Jam Layanan</th> 
					<th class="head0" >Fasilitas</th> 					
					<th class="head0" >Koordinat</th> 					
					<th class="head0" width="100">Status Buka/Tutup Hari Ini</th> 
					<th class="head0" >LastUpdate</th> 
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
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Name']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['AddressLine1']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Phone']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Facs']; ?>
</td>
			<td  class="word_break" rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Email']; ?>
</td>
			<td>Senin-Jumat <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['reguler_opening']; ?>
 - <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['reguler_closing']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Information']; ?>
</td>
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Latitude']; ?>
 , <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['Longitude']; ?>
</td>			
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['statusjam']; ?>
</td> 
			<td rowspan="2"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['LastUpdate']; ?>
</td>
			<td rowspan="2" ><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?> Active <?php else: ?> No Active <?php endif; ?></td>
			<td rowspan="2"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
outlet/editoutlet?param=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" class="button2">Edit</a></td>
			
			</tr>
			<tr><td>Sabtu <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['weekend_opening']; ?>
 - <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['weekend_closing']; ?>
</td><td>
			</tr>
			<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_outlet_list" class="paging">
            
            </div>
            </div><!--end col1-->
        </div><!-- end .outlet -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_outlet_list","paging_ajax_outlet",10);
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
                        \'url\': basedomain+\'outlet/checkit\',
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
										\'url\': basedomain+\'outlet/incheckit\',
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
                        \'url\': basedomain+\'outlet/incheckit\',
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

        $(document).ready(function() {
            $("#datepicker").datepicker({dateFormat:"yy-mm-dd"});
        }); 
'; ?>

</script>