<?php /* Smarty version 2.6.13, created on 2015-08-19 15:39:27
         compiled from application/web/apps/quiz.html */ ?>
<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>Quiz</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc" style="padding:46px 0 0 0;">Mainin kuisnya dan temuin serunya!</p>
        </div>
    </div>
    <div class="pagecontainer">
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listquiz']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    		<img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/quiz/<?php echo $this->_tpl_vars['listquiz'][$this->_sections['i']['index']]['img']; ?>
"/>
	<?php endfor; endif; ?>
    </div><!-- end .pagecontainer -->
</div><!-- end .row -->