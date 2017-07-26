<?php /* Smarty version 2.6.13, created on 2015-11-02 15:42:24
         compiled from application/admin//apps/datauser.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'application/admin//apps/datauser.html', 86, false),)), $this); ?>

<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span>Reporting</h2>
        </div><!-- end .titlebox -->
        <div class="content col2">
        	<div class="box mb20" style="background-color:white">
       		 <h1 style="font-size:50px;" class="hoverDetailNum" ><?php echo $this->_tpl_vars['total_hasilLab']; ?>
</h1>
			<h3> TOTAL HASIL LAB</h3>
		   </div><!-- end .summary -->
			  
        </div><!-- end .content -->
		 <div class="content col2">
        	<div class="box mb20" style="background-color:white">
       		 <h1 style="font-size:50px;" class="hoverDetailNum" ><?php echo $this->_tpl_vars['total_hasilJantung']; ?>
</h1>
			<h3> TOTAL PEMERIKSAAN JANTUNG</h3>
		   </div><!-- end .summary -->
			  
        </div><!-- end .content -->
		  <div class="content col1">
        	<div class="box mb20" style="background-color:white">
			<div class="shorter fr" id="datePick">
				<span class="fl">Date Range</span>
					<div class="rows fl">
						<input type="text" id="fromdateboking" name="startdate" class="default-date-picker startdateboking" >
					</div><!-- /.rows -->
										
					<span class="fl">To</span>
					<div class="rows fl">
						<input type="text" id="todateboking"  name="enddate" class="default-date-picker enddateboking" >
					</div><!-- /.rows -->
				<button class="btn btn-success searchboking" type="button">Go!</button>
			</div>  
			<div class="shorter fr" style="margin-left:10px;">
                    	<select class="selectpicker jenisProd" name="jenisProd" data-width="100%" data-live-search="true" >
                            <option value="">Semua Jenis Produk</option>
                            <option value="1">Pemeriksaan Laboratorium</option>
                            <option value="2">Panel Pemeriksaan</option>
                         
                        </select>
            </div><!--.end col3-->
			<div class="shorter fr">
                    	<select class="selectpicker cabang" name="jenisProd" data-width="100%" data-live-search="true" >
						<option value="">Semua Cabang</option>
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cabangoutlet']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            
                            <option value="<?php echo $this->_tpl_vars['cabangoutlet'][$this->_sections['i']['index']]['cityid']; ?>
"><?php echo $this->_tpl_vars['cabangoutlet'][$this->_sections['i']['index']]['name']; ?>
</option>
                         <?php endfor; endif; ?>
                        </select>
            </div><!--.end col3-->
			
			
       		<div class="row col-lg-12">
			<h3> DATA BOKING USER</h3>
                		<div id="bokingChart"></div>
                    </div><!--.end col8-->
		   </div><!-- end .summary -->
			  
        </div><!-- end .content -->
		 <div class="content col1">
        	<div class="box mb20" style="background-color:white">
			<div class="shorter fr" id="datePick">
				<span class="fl">Date Range</span>
					<div class="rows fl">
						<input type="text" id="from" name="startdate" class="default-date-picker startdateopenhasillab" >
					</div><!-- /.rows -->
										
					<span class="fl">To</span>
					<div class="rows fl">
						<input type="text" id="to"  name="enddate" class="default-date-picker enddateopenhasillab" >
					</div><!-- /.rows -->
				<button class="btn btn-success searchopenhasillab" type="button">Go!</button>
			</div>  
       		<div class="row col-lg-12">
			<h3> DATA OPEN HASIL LAB</h3>
                		<div id="openhasillabChart"></div>
                    </div><!--.end col8-->
		   </div><!-- end .summary -->
			  
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->
<script type="text/javascript">

		var gaData = <?php echo json_encode($this->_tpl_vars['TotalUserBoking']); ?>
;
		var gaDataopenhasillab = <?php echo json_encode($this->_tpl_vars['TotalopenHasilLab']); ?>
;
	
<?php echo '	
$(\'.startdateboking\').datepicker({dateFormat:"yy-mm-dd"});
$(\'.enddateboking\').datepicker({dateFormat:"yy-mm-dd"}); 

$(\'.startdateopenhasillab\').datepicker({dateFormat:"yy-mm-dd"});
$(\'.enddateopenhasillab\').datepicker({dateFormat:"yy-mm-dd"}); 

historyListBoking();
historyListOpenHasillab();


$(document).on(\'click\',\'.searchboking\',function(){
	historyListBoking();
});
$(document).on(\'click\',\'.searchopenhasillab\',function(){
	historyListOpenHasillab();
});
function historyListBoking()
{
	
	var startdate=$(\'.startdateboking\').val();
	var enddate=$(\'.enddateboking\').val();
	var product=$(\'.jenisProd\').val();
	var cabang =$(\'.cabang\').val();
	
	$.ajax ({ 
				type	 : \'POST\', 
				url	 :  basedomain+\'dashboard/main\' , 
				data:{product:product,cabang:cabang,startdateboking:startdate,enddateboking:enddate,submitOrder:\'boking\',ajax:\'1\'},
				dataType:\'json\',
				success	: function (result) 
					{
						
						var str=\'\';
						if(result.status==1) 
							{
								var bokingData = new Array();
								var bokingLabel = new Array();		
								
								
								
								for (var bokingChart in result.data){
										bokingData.push(parseInt(result.data[bokingChart]));
										bokingLabel.push(String(bokingChart));
									}
									
								
								
								console.log(bokingData);
								gethighChart(\'line\',\'test  Chart\',\'bokingChart\',bokingData,bokingLabel,1,true);
								
							}	
					}
			});
}	  
function historyListOpenHasillab()
{
	
	var startdate=$(\'.startdateopenhasillab\').val();
	var enddate=$(\'.enddateopenhasillab\').val();
		
	
	$.ajax ({ 
				type	 : \'POST\', 
				url	 :  basedomain+\'dashboard/main\' , 
				data:{startdateopenHasilLab:startdate,enddateopenHasilLab:enddate,submitOrder:\'openHasilLab\',ajax:\'1\'},
				dataType:\'json\',
				success	: function (result) 
					{
						
						var str=\'\';
						if(result.status==1) 
							{
								var openHasilLabData = new Array();
								var openHasilLabLabel = new Array();		
								
								
								
								for (var openHasilLabChart in result.data){
										openHasilLabData.push(parseInt(result.data[openHasilLabChart]));
										openHasilLabLabel.push(String(openHasilLabChart));
									}
									
								
								
								console.log(openHasilLabData);
								gethighChart(\'line\',\'test  Chart\',\'openhasillabChart\',openHasilLabData,openHasilLabLabel,1,true);
								
							}	
					}
			});
}	  
		</script>
'; ?>
