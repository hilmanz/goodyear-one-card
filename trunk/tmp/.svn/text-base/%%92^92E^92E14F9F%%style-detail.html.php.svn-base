<?php /* Smarty version 2.6.13, created on 2015-10-07 10:24:53
         compiled from application/web//apps/style-detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/style-detail.html', 17, false),array('modifier', 'truncate', 'application/web//apps/style-detail.html', 21, false),)), $this); ?>

<div class="row">
    <div id="single">
        <div class="entry-detail">
		<?php unset($this->_sections['i']);
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
?>
        	<h1><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</h1>
            <div class="meta-container">
				<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']): ?>
                <a href="#">
                    <div class="thumb thumb-small">
                        <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']; ?>
" class="img-circle"/>
                    </div>
                </a>
				<?php endif; ?>
                <p class="meta-post">
                    <span class="author">By  <?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                    <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                </p>
                <p class="social-post">
                    <a class="like-count likecategory" href='#' likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
		    <a class="fb-share" href="javascript:void(0)"  likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' onclick="shareFB('<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain'];  echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['page']; ?>
/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisifb'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
		    <a class="twitter-share" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisitwitter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain'];  echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['page']; ?>
/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                          
                </p>
            </div>
            <div class="entry-container">
            	
                <p><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentnya']; ?>
</p>
            </div>
			<div class="entry-container">
			
			</div>
            <div class="row-btn">
            	<a href="<?php echo $this->_tpl_vars['basedomain'];  echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['page']; ?>
" class="button fr">BACK</a>
            </div>
			<?php endfor; endif; ?>
			
			<!-- <div class="entry-detail">
			<div class="entry-container">
			<p class="social-post"><h3>Related story</h3></p>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['relatedcontent']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <p><a href="<?php echo $this->_tpl_vars['basedomain'];  echo $this->_tpl_vars['modul']; ?>
/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
/"><?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['title']; ?>
</a></p>
				<?php endfor; endif; ?>
            </div>			
			</div> -->
			
	<div id="relatedArticle">
    	<div class="titleList">
        	<h3>Related Articles</h3>
        </div>

        <div class="galleryList">

		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['relatedcontent']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<?php if ($this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['img']): ?>

                	<a class="thumb thumb-medium" href="<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">

                    	 <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['img']; ?>
"/>

                    </a>

				<?php endif; ?>

                    <h4><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['title']; ?>
</a></h4>

                    <div class="meta-container">

					<?php if ($this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['avatar']): ?>

                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
">

                            <div class="thumb thumb-small">

                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['avatar']; ?>
"/>

                            </div>

                        </a>

					<?php endif; ?>

                        <p class="meta-post">

                            <span class="author">By <?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |  

                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>

                        </p>

                        <p class="social-post">

                            <a class="like-count likecategory" href='#' likeidnya='<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>

								

								  <a class="fb-share" href="javascript:void(0)"  likeidnya='<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
' onclick="shareFB('<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['img']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['contentisifb'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 

			

								<a class="twitter-share" likeidnya='<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
' href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['contentisitwitter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['relatedcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>

                          

                        </p>

                    </div>

                    
                </figcaption>

            </figure>

          <?php endfor; endif; ?>

			

        </div>

    </div><!-- end #relatedArticle -->
			
            <div id="comment">
            	<form id="commentform" method="post" action="" class="col-md-8">
					<div id="errorbox" class="errorbox row">
						<p><i class="icon-report-problem "></i> Semua data wajib diisi</p>
					</div>
                	<div class="comment-title">
                        <h3>Comment</h3>
                        <span class="comment-count"><?php echo $this->_tpl_vars['total']; ?>
 Comment</span>
                    </div>
					
					 <input type="text" name="nama" placeholder="Name" id="nama"/>
                    <input type="email" name="email"  placeholder="Email" id="email"/>
                    <textarea  name="comment"  placeholder="Add Comment" id="commentar"></textarea>
					<input type="hidden"  name="submit" value="1"/>
					<input type="hidden"  name="idcerita" value="<?php echo $this->_tpl_vars['paramcerita']; ?>
"/>
                    <button class="button fr okeh" id="send">OK</button>
					
                </form>
            </div><!-- end #comment -->
			<div class="row">
				
			</div>
			<script>
			<?php echo '
			
	/*$("#commentform").validate({
		onkeyup: false,
  		ignore: ".ignore",
		
		  rules: {
			agree: {
			  required: true,
			  },
			nama: "required",
			comment: "required",
			email: {
			  required: true,
			  email: true
			}
			
			
		  },
		  success: "valid",
		  submitHandler: function() {
			form.submit();
		},
		 
		});*/
		$(".okeh").on("click", function(){
	
			$(\'#nama\').removeClass(\'error\');
			$(\'#email\').removeClass(\'error\');
			$(\'#commentar\').removeClass(\'error\');
			var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,15})+$/; 
			$(".errorbox").hide();
			
				if($(\'#nama\').val()==\'\' || $(\'#email\').val()==\'\' || $(\'#commentar\').val()==\'\' )
				{
					//$(".errorbox").show();	
					$(".errorbox").show();	
					$(".errorbox").html(\'<p><i class="icon-report-problem "></i> Semua data wajib diisi</p>\');
					
					if($(\'#nama\').val()==\'\')
					{
					$(\'#nama\').focus();
					$(\'#nama\').addClass(\'error\');
					}
					if($(\'#email\').val()==\'\')
					{
					$(\'#email\').focus();
					$(\'#email\').addClass(\'error\');
					}
					if($(\'#commentar\').val()==\'\')
					{
					$(\'#commentar\').focus();
					$(\'#commentar\').addClass(\'error\');
					}
					
					return false;
				}
				else
				{
					if(!$(\'#email\').val().match(mailformat))  
					{  
						$(".errorbox").show();	
						$(".errorbox").html(\'<p><i class="icon-report-problem "></i> Format Email Belum Benar</p>\');
						console.log(\'ssdsda\');
						console.log($(".errorboxtext"));
						$(\'#email\').focus();
						$(\'#email\').addClass(\'error\');
							return false;
					} 
					console.log(\'sdsdsds\');
				}
				$(\'#commentform\').trigger(\'submit\');
		});

$(document).ready(function(){
			$(document).on("click",".like-count", function(){
			console.log(\'masuk\');
			var likenya=$(this).attr(\'likeidnya\');
			var thiss=$(this);
			$.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'likemodul\',
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

		
function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
			$("#bg-popup").fadeOut();
			$(".popup,.popup2").fadeOut();
			FB.init();
			FB.ui({
				method: \'feed\',
				name: fb_name,
				link: fb_link,
				picture: fb_img,
				caption: fb_user,
				description: fb_post
				
				
			});
				 
		}
			'; ?>

			</script>
			
			
            <div id="respond" class="col-md-8">
            	<ul>
				
				
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listcomment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                	<li>
                      
                        <div class="reply-content">
                            <div class="comment-author">
                                <h5><?php echo $this->_tpl_vars['listcomment'][$this->_sections['i']['index']]['name']; ?>
</h5>
                                <span class="comment-date"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcomment'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                            </div>
                            <div class="comment-entry">
                                <p><?php echo $this->_tpl_vars['listcomment'][$this->_sections['i']['index']]['comment']; ?>
</p>
                            </div>
                        </div>
                    </li>
					
				<?php endfor; endif; ?>
                </ul>
            </div><!-- end #comment -->
            <div class="row-btn">
            	<a href="#" class="button fr">BACK TO TOP</a>
            </div>
        </div><!-- end .entry-detail -->
		
		
    </div>
</div><!-- end .row -->