<?php /* Smarty version 2.6.13, created on 2015-10-07 09:47:22
         compiled from application/web//apps/diy.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/diy.html', 1, false),array('modifier', 'truncate', 'application/web//apps/diy.html', 1, false),)), $this); ?>

</h2>
</p>
">
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
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
"/>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</a></h4>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/avatar/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']; ?>
"/>
</span> |  
</span>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
' onclick="shareFB('<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisifb'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
' href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisitwitter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
</p>
diy/detail/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>
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
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['img']; ?>
"/>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
"><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['title']; ?>
</a></h4>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
">
public_assets/avatar/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['avatar']; ?>
"/>
</span> |  
</span>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
diy/detail?param=<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
</p>
diy/detail/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['listcontentdetail'][$this->_sections['i']['index']]['titleurl']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>
