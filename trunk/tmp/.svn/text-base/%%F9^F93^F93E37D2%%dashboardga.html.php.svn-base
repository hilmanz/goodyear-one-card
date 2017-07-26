<?php /* Smarty version 2.6.13, created on 2015-10-08 11:43:32
         compiled from application/admin/apps/dashboardga.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'application/admin/apps/dashboardga.html', 148, false),)), $this); ?>

<!--mini statistics start-->
<div class="row">
<?php if ($this->_tpl_vars['traking']): ?>
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['traking']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon color-<?php echo $this->_tpl_vars['traking'][$this->_sections['k']['index']]['type']; ?>
"><i class="fa fa-<?php echo $this->_tpl_vars['traking'][$this->_sections['k']['index']]['type']; ?>
"></i></span>
            <div class="mini-stat-info">
                <span>  <?php echo $this->_tpl_vars['traking'][$this->_sections['k']['index']]['count']; ?>
</span>
               <?php echo $this->_tpl_vars['traking'][$this->_sections['k']['index']]['type']; ?>

            </div>
        </div>
    </div>
   <?php endfor; endif; ?>
<?php endif; ?>
</div>

<!--mini statistics end-->
<div class="row">
	<div class="col-md-12">
    	<form class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-4">
                       
						<div class="shorter fr" id="datePick">
										<span class="fl">Date Range</span>
										<div class="rows fl">
											<input type="text" id="from" name="startdate" class="datepicker submitter startdate dpd1" id="dp1403509217274">
										</div><!-- /.rows -->
										
										<span class="fl">To</span>
										<div class="rows fl">
											<input type="text" id="to"  name="enddate" class="datepicker enddate dpd2" id="dp1403509217275">
										</div><!-- /.rows -->
										  <button class="btn btn-success calendar" type="button">Go!</button>
								</div>  
					
                    </div>
                </div>
       </form>
	</div>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
             Total Visitor
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div id="visit" >
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
           Total Screen Views
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="daily-visit">
                        <div id="pageview" class="pageview" >

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
             Total New Users
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div id="avgVisit" class="avgVisit">

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--mini statistics end-->
 <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
              Active Users
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div id="usernewga" >
                    </div>
                </div>
            </div>
        </section>
    </div>
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
             Top 10 Devices
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div id="diviceAll"></div>
            </div>
        </section>
    </div>
</div>


<script type="text/javascript">

		var gaData = <?php echo json_encode($this->_tpl_vars['dataChart']); ?>
;
		
		
	  var gaDevice = <?php echo json_encode($this->_tpl_vars['gaAllDeviceData']); ?>
;
	  console.log(gaData);
<?php echo '	
$(document).ready(function() {

console.log(\'sdsds\');
	var visitData = new Array();
	var visitLabel = new Array();		
	
	var pageViewData = new Array();
	var pageViewLabel = new Array();
	
	var avgVisitData = new Array();
	var avgVisitLabel = new Array();
	
	var avgTopData = new Array();
	var avgTopLabel = new Array();
	
	var BounceData = new Array();
	var BounceLabel = new Array();
	
	var mobileData = new Array();
	var mobileLabel = new Array();
	
	var desktopData = new Array();
	var desktopLabel = new Array();
	
	var tabletData = new Array();
	var tabletLabel = new Array();
	
	var usergaData = new Array();
	var usergaLabel = new Array();	
	
	var sessionData = new Array();
	var sessionLabel = new Array();	
	
	var diviceData = new Array();
	var diviceLabel = new Array();	
	
	
	
    for (var visitChart in gaData.data.visit){
			visitData.push(parseInt(gaData.data.visit[visitChart]));
			visitLabel.push(String(visitChart));
		}
		
	
	for (var pageViewChart in gaData.data.page_views){
			pageViewData.push(parseInt(gaData.data.page_views[pageViewChart]));
			visitLabel.push(String(pageViewChart));
		}
	

	for (var avgVisitChart in gaData.data.new_users){
			avgVisitData.push(parseInt(gaData.data.new_users[avgVisitChart]));

			avgVisitLabel.push(String(avgVisitChart));
		}
		
	for (var avgtopChart in gaData.data.visit){
			avgTopData.push(parseInt(gaData.data.visit[avgtopChart]));
			avgTopLabel.push(String(avgtopChart));
		}
	
	for (var diviceChart in gaDevice.data){
			diviceData.push(parseInt(gaDevice.data[diviceChart].total));
			diviceLabel.push(String(gaDevice.data[diviceChart].device));
			//console.log(diviceChart);
		}
	
	
	for (var bounceChart in gaData.data.bounce_rate){
			BounceData.push(parseInt(gaData.data.bounce_rate[bounceChart]));
			BounceLabel.push(String(bounceChart));
		}
	for (var usergaChart in gaData.data.new_users){
			usergaData.push(parseInt(gaData.data.new_users[usergaChart]));
			usergaLabel.push(String(usergaChart));
		}	
	for (var sessionChart in gaData.data.sessions){
			sessionData.push(parseInt(gaData.data.sessions[sessionChart]));
			sessionLabel.push(String(sessionChart));
		}
	console.log(avgTopData);
	gethighChart(\'line\',\'test  Chart\',\'visit\',visitData,visitLabel,1,true);
	gethighChart(\'line\',\'test  Chart\',\'pageview\',pageViewData,visitLabel,1,true);
	gethighChart(\'line\',\'test  Chart\',\'avgVisit\',avgVisitData,avgVisitLabel,1,true);
	//gethighChart(\'line\',\'test  Chart\',\'avgTimeonpage\',avgTopData,avgTopLabel,1,true);
	gethighChart(\'line\',\'test  Chart\',\'usernewga\',usergaData,usergaLabel,1,true);
	//gethighChart(\'line\',\'test  Chart\',\'sessionga\',sessionData,sessionLabel,1,true);
	//gethighChart(\'line\',\'test  Chart\',\'bounceRate\',BounceData,BounceLabel,1,true);
	
	gethighChart(\'column\',\'test  Chart\',\'diviceAll\',diviceData,diviceLabel,1,true);
	console.log(diviceData);
	//drillDownChart(\'column\',\'test Chart\',\'container\',dataCoba,cateActivityGroup,1 ,false);
	});
	
	  $(\'#from\').datepicker({
    autoclose: true,
    todayHighlight: true
  
	});
	 $(\'#to\').datepicker({
    autoclose: true,
    todayHighlight: true
  
	}); 
	$(document).on(\'click\',\'.calendar\', function(){
		
		var from = $(\'#from\').val();
		var to = $(\'#to\').val();
		
		window.location.href=\'?startdate=\'+from+\'&enddate=\'+to;
	
	})
		
</script>
'; ?>