<?php /* Smarty version 2.6.13, created on 2015-11-17 16:24:00
         compiled from application/admin//master.html */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php echo $this->_tpl_vars['meta']; ?>

<body>
  <div id="body">
    <div id="page">
      <?php if ($this->_tpl_vars['pages'] != 'login' && $this->_tpl_vars['pages'] != 'logout'): ?>
      <div id="sidebar">
        <div id="navbar">
            <ul>
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'home'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
home" ><span class="icon-home">&nbsp;</span><span>Home</span></a></li>				
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
register" ><span class="icon-users">&nbsp;</span><span>List Registrasi </span></a></li>				
                <li><a class="<?php if ($this->_tpl_vars['pages'] == 'kuesioner'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
kuesioner" ><span class="icon-list">&nbsp;</span><span>Kuesioner</span></a></li>		
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'trivia'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
trivia" ><span class="icon-list">&nbsp;</span><span>Trivia</span></a></li>		                
                <li><a class="<?php if ($this->_tpl_vars['pages'] == 'logout'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
logout.php" ><span class="icon-lock">&nbsp;</span><span>Logout </span></a></li>		
              </ul>
          </div>
      </div><!-- end #sidebar -->
		  <?php echo $this->_tpl_vars['header']; ?>

      <?php endif; ?>
        <div id="thecontent">
             <?php echo $this->_tpl_vars['mainContent']; ?>

        </div><!-- /#thecontent -->
		  <?php echo $this->_tpl_vars['footer']; ?>

		  

    </div><!-- end #page -->
  </div><!-- end #body -->    
</body>
</html>