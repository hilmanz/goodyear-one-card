<?php /* Smarty version 2.6.13, created on 2015-10-07 10:43:58
         compiled from application/web//apps/video.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/video.html', 8, false),array('modifier', 'truncate', 'application/web//apps/video.html', 14, false),)), $this); ?>
<div class="row">
	
	 <div id="bigVideo" class="widget-content">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listyoutube']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<h1><?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['title']; ?>
</h1>
						<p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['waktu'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span> |
                            <span class="social-post"><a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
                            </span>
						</p>
						
		
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, true) : smarty_modifier_truncate($_tmp, 100, true)); ?>
</p>                        
                    </div>
		
				<!--<a href="javascript:void(0)"  class="checkyoutube"><img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['img_url']; ?>
/0.jpg" height="460px" width="100%"></a>-->
        				<iframe src="<?php echo $this->_tpl_vars['listyoutube'][$this->_sections['i']['index']]['url']; ?>
?rel=0&autoplay=0" frameborder="0" style="display:block;width:100%;height:460px"   allowfullscreen></iframe>					
         <?php endfor; endif; ?>
         </center>				
	</div>
    <div id="titleVideo" class="page-title">
    	<div class="col-md-4">
        	<h2><?php echo $this->_tpl_vars['modul']; ?>
</h2>
        </div>   	
    </div>	
    <div id="isotope">
       <div class="postlist galleryList" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listallyoutube']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

            <figure class="item col-md-4">
                <figcaption>
				  <?php if ($this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['url']): ?>
					 <div class="popup popupdetailav" id="id-<?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['img_url']; ?>
">
						<div class="popup-container">
							<a class="closePopup" href="#">&nbsp;</a>
							<div class="popup-content">
							<iframe src="<?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['url']; ?>
?rel=0&autoplay=0" frameborder="0" style="display:block;width:100%;height:320px"   allowfullscreen></iframe>
								</div>
						</div><!-- END .popupContainer -->
					</div><!-- END .popup -->
				<?php endif; ?>
				<?php if ($this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['img_url']): ?>
				<a href="#id-<?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['img_url']; ?>
" class="showPopup">
				<img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['img_url']; ?>
/0.jpg" height="160px" width="100%"></a>
                <?php endif; ?>
                  <h4><?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['title']; ?>
</h4>
                  <div class="meta-container">
                        <p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['name']; ?>
 </span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['waktu'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                        </p>
                         <p class="social-post">
                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutube'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, true) : smarty_modifier_truncate($_tmp, 100, true)); ?>
</p>                       
                    </div>
                </figcaption>
            </figure>
          <?php endfor; endif; ?>
        </div>
		 <div class="postlist galleryList2" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listallyoutubedetail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

            <figure class="item col-md-4">
                <figcaption>
				  <?php if ($this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['url']): ?>
					 <div class="popup popupdetailav" id="id-<?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['img_url']; ?>
">
						<div class="popup-container">
							<a class="closePopup" href="#">&nbsp;</a>
							<div class="popup-content">
							<iframe src="<?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['url']; ?>
?rel=0&autoplay=0" frameborder="0" style="display:block;width:100%;height:320px"   allowfullscreen></iframe>
								</div>
						</div><!-- END .popupContainer -->
					</div><!-- END .popup -->
				<?php endif; ?>
				<?php if ($this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['img_url']): ?>
				<a href="#id-<?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['img_url']; ?>
" class="showPopup">
				<img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['img_url']; ?>
/0.jpg" height="160px" width="100%"></a>
                <?php endif; ?>
                  <h4><?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['title']; ?>
</h4>
                  <div class="meta-container">
                        <p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['name']; ?>
 </span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['waktu'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                        </p>
                         <p class="social-post">
                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutubedetail'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, true) : smarty_modifier_truncate($_tmp, 100, true)); ?>
</p>                       
                    </div>
                </figcaption>
            </figure>
          <?php endfor; endif; ?>
        </div>
		<div class="postlist galleryList3" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listallyoutubedetail2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

            <figure class="item col-md-4">
                <figcaption>
				  <?php if ($this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['url']): ?>
					 <div class="popup popupdetailav" id="id-<?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['img_url']; ?>
">
						<div class="popup-container">
							<a class="closePopup" href="#">&nbsp;</a>
							<div class="popup-content">
							<iframe src="<?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['url']; ?>
?rel=0&autoplay=0" frameborder="0" style="display:block;width:100%;height:320px"   allowfullscreen></iframe>
								</div>
						</div><!-- END .popupContainer -->
					</div><!-- END .popup -->
				<?php endif; ?>
				<?php if ($this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['img_url']): ?>
				<a href="#id-<?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['img_url']; ?>
" class="showPopup">
				<img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['img_url']; ?>
/0.jpg" height="160px" width="100%"></a>
                <?php endif; ?>
                  <h4><?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['title']; ?>
</h4>
                  <div class="meta-container">
                        <p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['name']; ?>
 </span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['waktu'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                        </p>
                         <p class="social-post">
                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listallyoutubedetail2'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, true) : smarty_modifier_truncate($_tmp, 100, true)); ?>
</p>                       
                    </div>
                </figcaption>
            </figure>
          <?php endfor; endif; ?>
        </div>
    </div><!-- end #isotope -->
</div><!-- end .row -->
    


<div class="row loaderbox" style="display:none">
    <div class="preloader"></div>
</div><!-- end .row -->


<script>

<?php echo '
$(\'.galleryList2\').hide();
$(\'.galleryList3\').hide();
$(document).ready(function(){
			$(".checkyoutube").on("click", function(){
			var thisnya=$(this);
			var url=$(this).val();
			  $.ajax({
										\'type\': \'POST\',
										\'url\': basedomain+\'video/selectvideo\',
										//\'data\': {url:url},
										\'dataType\':\'json\',
										\'success\': function(result){
										$.each(result.data,function(k,v){ 
											thisnya.hide();
											//thisnya.parent().html(\'<center>\'+v.url+\'cccccekk</center>\');
											thisnya.parent().html(\'<iframe src="\'+v.url+\'?rel=0&autoplay=1" frameborder="0" style="display:block;width:100%;height:460px"   allowfullscreen></iframe>\');
											
											});
										},
																				
										});
			
				});
			});




$(document).bind(\'scroll\',\'.galleryList\', function()
        {

             var batas =$(\'.galleryList\').attr(\'dataWidth\');
             var Tpage =$(\'.galleryList\').attr(\'dataPage\');
             var start =$(\'.galleryList\').attr(\'dataStart\') ;
             var totalPage=0;
			  var batas = 1500;
          
            var html=\'\';
			//$(\'.galleryList2\').hide();
            if(Tpage>1 ) 
            {
               
                if(start==Tpage)
                {
                    return false;
                }
                start++;
				
                if($(this).scrollTop()>= batas){
				//console.log(\'masuk\');
                    batas = parseInt(batas);
					
                    $(\'.loaderbox\').attr(\'style\',"display:block");
                    batasx = batas + 900;
                    $(\'.galleryList\').removeAttr(\'dataWidth\');
                    $(\'.galleryList\').attr(\'dataWidth\',batasx);
                    $(\'.galleryList\').attr(\'dataStart\',start) ;
					//setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},5000);
                   //console.log(\'ss\');
					var thisnya=$(this);
						$.ajax({
						type: "POST",
						url: basedomain+\'/video/getvideo\',
						data: {start:start},
						dataType: "json",
						//success: function( result ){
						success: function( result ){
						var str=\'\';		
						if (result.data != null)
						$.each(result.data,function(k,v){  
						//alert ("ini data"+v.id);
						/* $( function() {
						  $(\'.postlist\').isotope({
							itemSelector: \'.item\',
							masonry: {
							  columnWidth: 10
							}
						  });
						});
							*/
							/*
							str+=\'<figure class="item col-md-4" >\';
						    str+=\'<figcaption>\';
							str+=\'<a class="thumb thumb-medium" href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\';
							str+=\'<img src="\'+basedomain+\'public_assets/imgregistrasi/\'+v.img+\'" height="270" width=auto/>\';
							str+=\'</a>\';
						    str+=\'<h4><a href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\'+v.title+\'</a></h4>\';
							str+=\'<div class="meta-container">\';
							str+=\'<a href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\';
							
							if (v.avatar)
							{
					            str+=\'<div class="thumb thumb-small">\';
					            str+=\'<img src="\'+basedomain+\'public_assets/avatar/\'+v.avatar+\'"/>\';
					            str+=\'</div>\';
							}
				            str+=\'</a>\';
				            str+=\'<p class="meta-post">\';
				            str+=\'<span class="author">By \'+v.name+\'</span> |  \';
				            str+=\'<span class="post-dates">\'+v.date+\'</span>\';
				            str+=\'</p>\';
				            str+=\'<p class="social-post">\';
				            str+=\'<a class="like-count" href="#" likeidnya=\'+v.id+\'><i class="icon-heart-o"></i><span> \'+v.like+\' </span>Likes</a>\';
							str+=\'<a class="fb-share" href="javascript:void(0)" onclick="shareFB(\'+v.titleshare+\',\'+basedomain+\'style/detail?param=\'+v.id+\',\'+basedomain+\'style/detail?param=\'+v.id+\',,\'+v.content.substring(0,50)+\')"><i class="icon-facebook">&nbsp;</i></a> \';
							str+=\' <a class="twitter-share" href="http://twitter.com/share?text\'+v.content.substring(0,50)+\'&url=\'+basedomain+\'style/detail?param=\'+v.id+\'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>\';
				            str+=\'</p>\';
				            str+=\'</div>\';
				            str+=\'<div class="entry-post">\';
				            str+=\'<p>\'+v.content.substring(0,150)+\'</p>\';
				            str+=\'<a href="\'+basedomain+\'style/detail?param=\'+v.id+\'" class="readmore"><i class="icon-arrow-right"></i></a>\';
						
				            str+=\'</div>\';
				            str+=\'</figcaption>\';
				            str+=\'</figure>\';
							*/
							//}
							});
							
							var $container=$(\'.postlist\');
							$(\'.postlist\').isotope(\'layout\');
							$(\'.galleryList2\').isotope(\'layout\');
                            //setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},2000);
                            //setTimeout(function(){$(\'.galleryList2\').append(str);},500);
							 if(Tpage==10 ) 
							{
							$(\'.galleryList\').hide();
							$(\'.galleryList3\').hide();							
							//alert ("ini data"+Tpage);
							 setTimeout(function(){
							 $(\'.loaderbox\').attr(\'style\',\'display:block\');
							
							 },2000);
							
							$(\'.galleryList2\').show();
							}else if(Tpage>18 ) {
							$(\'.galleryList\').hide();	
							$(\'.galleryList2\').hide();							
							//alert ("ini data"+Tpage);
							 setTimeout(function(){
							 $(\'.loaderbox\').attr(\'style\',\'display:block\');
							
							 },2000);
							
							$(\'.galleryList3\').show();
							}else{
							$(\'.galleryList2\').hide();
							$(\'.galleryList\').show();
							}
						}
						});
						
						//$(\'.postlist\').isotope(\'reLayout\');
						//});
						setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},5000);
                     $(\'.showPopup\').magnificPopup({
						  type: \'inline\',

						  fixedContentPos: false,
						  fixedBgPos: true,

						  overflowY: \'auto\',

						  closeBtnInside: true,
						  preloader: false,
						  
						  midClick: true,
						  removalDelay: 300,
						  mainClass: \'my-mfp-zoom-in\'
						});	
                }
            }
			
        });
		
$( document ).ajaxComplete(function() {
	/*$container =  $(".postlist");
	$container.isotope({
	        itemSelector: \'.item\'
	});
	*/
	 //$container.isotope(\'reLayout\');
	 $( function() {
	  $(\'.postlist\').isotope({
		itemSelector: \'.col-md-4\',
		masonry: {
		  columnWidth: 10
		}
	  });
	});
	$(\'.postlist\').isotope(\'layout\');
	 // alert("done");
});

$(document).ready( function() {
  
  $(\'.galleryList2\').isotope({
    itemSelector: \'.item\',
    masonry: {
      columnWidth: 10
    }
  });
$(\'.galleryList2\').isotope(\'layout\');
});

    	


             




$(document).ready(function(){

			$(document).on("click",".like-count", function(){

			console.log(\'masuk\');

			var likenya=$(this).attr(\'likeidnya\');

			var thiss=$(this);

			$.ajax({

                        \'type\': \'POST\',

                        \'url\': basedomain+\'likevideo\',

                        \'data\': {like:likenya},

						\'dataType\':\'json\',

                        \'success\': function(result){

							if(result.status==true){

								thiss.children().next().html(result.total);

							

							}

						

						}

						

						})

				});

});

		


'; ?>


</script>
