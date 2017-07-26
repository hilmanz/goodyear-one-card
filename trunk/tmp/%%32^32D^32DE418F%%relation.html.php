<?php /* Smarty version 2.6.13, created on 2015-10-07 10:43:49
         compiled from application/web//apps/relation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/relation.html', 33, false),array('modifier', 'truncate', 'application/web//apps/relation.html', 38, false),)), $this); ?>

<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2><?php echo $this->_tpl_vars['modul']; ?>
</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc"><?php echo $this->_tpl_vars['contentmodul']; ?>
</p>
        </div>
    </div>
    <div id="isotope">
       <div class="postlist galleryList" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">
		
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
            <figure class="item col-md-4">
                <figcaption>
				<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']): ?>
                	<a class="thumb thumb-medium" href="<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">
                    	 <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
"/>
                    </a>
				<?php endif; ?>
                    <h4><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</a></h4>
                    <div class="meta-container">
						<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']): ?>
                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">
                            <div class="thumb thumb-small">
                                <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']; ?>
"/>
                            </div>
                        </a>
						<?php endif; ?>
                        <p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                        </p>
                         <p class="social-post">
                            <a class="like-count likecategory" href="javascript:void(0)" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
							
								  <a class="fb-share" href="javascript:void(0)"  likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' onclick="shareFB('<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisifb'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
			
								<a class="twitter-share" likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisitwitter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                          
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
</p>
                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>
                    </div>
                </figcaption>
            </figure>
          <?php endfor; endif; ?>
           
        </div>
    </div><!-- end #isotope -->
</div><!-- end .row -->
">
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
?>
relations/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['img']; ?>
"/>
relations/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['title']; ?>
</a></h4>
relations/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/avatar/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['avatar']; ?>
"/>
</span> |  
</span>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
','<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
relations/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
</p>
relations/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>
<div class="row loaderbox" style="display:none">
    <div class="preloader"></div>
</div><!-- end .row -->

<script>
