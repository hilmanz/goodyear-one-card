<?php /* Smarty version 2.6.13, created on 2015-10-07 09:47:22
         compiled from application/web//apps/diy.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/diy.html', 1, false),array('modifier', 'truncate', 'application/web//apps/diy.html', 1, false),)), $this); ?>
<div class="row">	<div class="page-title">    	<div class="col-md-4">        	<h2><?php echo $this->_tpl_vars['modul']; ?>
</h2>        </div>    	<div class="col-md-8">        	<p class="page-desc"><?php echo $this->_tpl_vars['contentmodul']; ?>
</p>        </div>    </div>    <div id="isotope">       <div class="postlist galleryList" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listcontent']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>            <figure class="item col-md-4">                <figcaption>				<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']): ?>                	<a class="thumb thumb-medium" href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">                    	 <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
"/>                    </a>					<?php endif; ?>                    <h4><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</a></h4>                    <div class="meta-container">						<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']): ?>                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">                            <div class="thumb thumb-small">                                <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']; ?>
"/>                            </div>                        </a>						<?php endif; ?>                        <p class="meta-post">                            <span class="author">By <?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |                              <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>                        </p>                         <p class="social-post">                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>																 <a class="fb-share" href="javascript:void(0)"  likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' onclick="shareFB('<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisifb'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 											<a class="twitter-share" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisitwitter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>                                                  </p>                    </div>                    <div class="entry-post">                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
</p>                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>                    </div>                </figcaption>            </figure>          <?php endfor; endif; ?>                   </div>    </div><!-- end #isotope --></div><!-- end .row --><div class="row">	    <div id="isotope">        <div class="postlist galleryList2" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listcontentdetail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>            <figure class="item col-md-4">                <figcaption>				<?php if ($this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['img']): ?>                	<a class="thumb thumb-medium" href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">                    	 <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['img']; ?>
"/>                    </a>				<?php endif; ?>                    <h4><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['title']; ?>
</a></h4>                    <div class="meta-container">					<?php if ($this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['avatar']): ?>                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">                            <div class="thumb thumb-small">                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['avatar']; ?>
"/>                            </div>                        </a>					<?php endif; ?>                        <p class="meta-post">                            <span class="author">By <?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['name']; ?>
</span> |                              <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>                        </p>                        <p class="social-post">                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>																  <a class="fb-share" href="javascript:void(0)" onclick="shareFB('<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 											<a class="twitter-share" href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>                                                  </p>                    </div>                    <div class="entry-post">                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
</p>                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>						   <span class='pineapple-man' style='display:none'>xx</span>                    </div>                </figcaption>            </figure>          <?php endfor; endif; ?>			         </div>		    </div><!-- end #isotope -->	</div><!-- end .row --><div class="row loaderbox" style="display:none">    <div class="preloader"></div></div><!-- end .row --><script><?php echo '$(\'.galleryList2\').hide();$(document).bind(\'scroll\',\'.galleryList\', function()        {             var batas =$(\'.galleryList\').attr(\'dataWidth\');             var Tpage =$(\'.galleryList\').attr(\'dataPage\');             var start =$(\'.galleryList\').attr(\'dataStart\') ;             var totalPage=0;			  var batas = 1100;                      var html=\'\';			//$(\'.galleryList2\').hide();            if(Tpage>1 )             {                               if(start==Tpage)                {                    return false;                }                start++;				                if($(this).scrollTop()>= batas){				//console.log(\'masuk\');                    batas = parseInt(batas);					                    $(\'.loaderbox\').attr(\'style\',"display:block");                    batasx = batas + 900;                    $(\'.galleryList\').removeAttr(\'dataWidth\');                    $(\'.galleryList\').attr(\'dataWidth\',batasx);                    $(\'.galleryList\').attr(\'dataStart\',start) ;					//setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},5000);                   //console.log(\'ss\');					var thisnya=$(this);						$.ajax({						type: "POST",						url: basedomain+\'/diy/getdiy\',						data: {start:start},						dataType: "json",						//success: function( result ){						success: function( result ){						var str=\'\';								if (result.data != null)						$.each(result.data,function(k,v){  						//alert ("ini data"+v.id);						/* $( function() {						  $(\'.postlist\').isotope({							itemSelector: \'.item\',							masonry: {							  columnWidth: 10							}						  });						});							*/							/*							str+=\'<figure class="item col-md-4" >\';						    str+=\'<figcaption>\';							str+=\'<a class="thumb thumb-medium" href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\';							str+=\'<img src="\'+basedomain+\'public_assets/imgregistrasi/\'+v.img+\'" height="270" width=auto/>\';							str+=\'</a>\';						    str+=\'<h4><a href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\'+v.title+\'</a></h4>\';							str+=\'<div class="meta-container">\';							str+=\'<a href="\'+basedomain+\'style/detail?param=\'+v.id+\'">\';														if (v.avatar)							{					            str+=\'<div class="thumb thumb-small">\';					            str+=\'<img src="\'+basedomain+\'public_assets/avatar/\'+v.avatar+\'"/>\';					            str+=\'</div>\';							}				            str+=\'</a>\';				            str+=\'<p class="meta-post">\';				            str+=\'<span class="author">By \'+v.name+\'</span> |  \';				            str+=\'<span class="post-dates">\'+v.date+\'</span>\';				            str+=\'</p>\';				            str+=\'<p class="social-post">\';				            str+=\'<a class="like-count" href="#" likeidnya=\'+v.id+\'><i class="icon-heart-o"></i><span> \'+v.like+\' </span>Likes</a>\';							str+=\'<a class="fb-share" href="javascript:void(0)" onclick="shareFB(\'+v.titleshare+\',\'+basedomain+\'style/detail?param=\'+v.id+\',\'+basedomain+\'style/detail?param=\'+v.id+\',,\'+v.content.substring(0,50)+\')"><i class="icon-facebook">&nbsp;</i></a> \';							str+=\' <a class="twitter-share" href="http://twitter.com/share?text\'+v.content.substring(0,50)+\'&url=\'+basedomain+\'style/detail?param=\'+v.id+\'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>\';				            str+=\'</p>\';				            str+=\'</div>\';				            str+=\'<div class="entry-post">\';				            str+=\'<p>\'+v.content.substring(0,150)+\'</p>\';				            str+=\'<a href="\'+basedomain+\'style/detail?param=\'+v.id+\'" class="readmore"><i class="icon-arrow-right"></i></a>\';										            str+=\'</div>\';				            str+=\'</figcaption>\';				            str+=\'</figure>\';							*/							//}							});														var $container=$(\'.postlist\');							$(\'.postlist\').isotope(\'layout\');							$(\'.galleryList2\').isotope(\'layout\');                            //setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},2000);                            //setTimeout(function(){$(\'.galleryList2\').append(str);},500);							 if(Tpage>9 ) 							{							$(\'.galleryList\').hide();												//alert ("ini data"+Tpage);							 setTimeout(function(){							 $(\'.loaderbox\').attr(\'style\',\'display:block\');														 },2000);														$(\'.galleryList2\').show();							}else{							$(\'.galleryList2\').hide();							$(\'.galleryList\').show();							}						}						});												//$(\'.postlist\').isotope(\'reLayout\');						//});						setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},5000);                                    }            }			        });		$( document ).ajaxComplete(function() {	/*$container =  $(".postlist");	$container.isotope({	        itemSelector: \'.item\'	});	*/	 //$container.isotope(\'reLayout\');	 $( function() {	  $(\'.postlist\').isotope({		itemSelector: \'.col-md-4\',		masonry: {		  columnWidth: 10		}	  });	});	$(\'.postlist\').isotope(\'layout\');	 // alert("done");});$(document).ready( function() {    $(\'.galleryList2\').isotope({    itemSelector: \'.item\',    masonry: {      columnWidth: 10    }  });$(\'.galleryList2\').isotope(\'layout\');});$(document).ready(function(){			$(document).on("click",".like-count", function(){			console.log(\'masuk\');			var likenya=$(this).attr(\'likeidnya\');			var thiss=$(this);			$.ajax({                        \'type\': \'POST\',                        \'url\': basedomain+\'likemodul\',                        \'data\': {like:likenya},						\'dataType\':\'json\',                        \'success\': function(result){							if(result.status==true){								thiss.children().next().html(result.total);														}												}												})				});});		function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){			$("#bg-popup").fadeOut();			$(".popup,.popup2").fadeOut();			FB.init();			FB.ui({				method: \'feed\',				name: fb_name,				link: fb_link,				picture: fb_img,				caption: fb_user,				description: fb_post											});				 		}			'; ?>
</script>