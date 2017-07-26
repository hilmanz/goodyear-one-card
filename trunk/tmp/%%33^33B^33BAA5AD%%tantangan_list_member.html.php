<?php /* Smarty version 2.6.13, created on 2015-11-10 16:58:56
         compiled from application/web//apps/tantangan_list_member.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/tantangan_list_member.html', 20, false),)), $this); ?>

<div id="list-tantangan" class="section">
	<div id="container">
        <div class="row-2">
              <h1 class="yellow textbg">LIST CHALLENGE</h1>
        </div>
        <div class="rows">
            <div id="memberListTabs" class="leaderInfo">
            	
              <div class="rows">
            	<div id="tabs">
                  <ul>
                    <li><a href="#tabs-1">CHALLENGE YANG AKAN DATANG</a></li>
                  </ul>
                  <div id="tabs-1">
				   <?php if ($this->_tpl_vars['datatantangan']): ?>
                		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['datatantangan']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="rows-list">
								<div class="infoMembers fl">
									<p class="name_member yellow"><?php echo ((is_array($_tmp=$this->_tpl_vars['datatantangan'][$this->_sections['i']['index']]['time_start'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
 - <?php echo $this->_tpl_vars['datatantangan'][$this->_sections['i']['index']]['time_end']; ?>
</p>
									<p class=""><?php echo $this->_tpl_vars['datatantangan'][$this->_sections['i']['index']]['name']; ?>
</p>
									<div class="buttonAction">
										<a id="detail" class="button" href="<?php echo $this->_tpl_vars['basedomain']; ?>
member/detailtantangan?id=<?php echo $this->_tpl_vars['datatantangan'][$this->_sections['i']['index']]['id']; ?>
">Lihat Challenge</a>
									</div>
								</div>
							</div><!--end rows-->
						<?php endfor; endif; ?>
					<?php else: ?>	
							<div class="rows-list">
								<div class="infoMembers fl">
									<center>Belum ada challenge untuk Anda.</center>
								</div>
							</div>
					<?php endif; ?>
                    
                    
                  </div>
                  
                 
                </div><!--end#tabs-->
                </div><!--end rows-->               
            </div><!--endleaderInfo-->
        </div><!--end.rows-->
    	
    </div><!--end#container-->
</div><!--end.section-->