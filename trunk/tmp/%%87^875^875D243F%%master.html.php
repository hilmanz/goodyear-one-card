<?php /* Smarty version 2.6.13, created on 2016-05-04 07:57:39
         compiled from application/web//master.html */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<?php echo $this->_tpl_vars['meta']; ?>

</head>

<body id='<?php if ($this->_tpl_vars['pages'] == '' || $this->_tpl_vars['pages'] == 'login'): ?>landing<?php else:  echo $this->_tpl_vars['pages'];  endif; ?>'>
<script type="text/javascript">
		<?php echo '
		
		$.getScript(\'//connect.facebook.net/en_US/all.js\', function(){
			FB.init({
			  appId: \'380613165460756\',
			});  
		 });
	
	
		window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
	
		'; ?>

        </script>
<div id="body">
<div id="mainContainer">
	<div id="universal">
	

		<?php echo $this->_tpl_vars['header']; ?>


		
		
		<?php echo $this->_tpl_vars['mainContent']; ?>

        
    	
		<?php echo $this->_tpl_vars['footer']; ?>

	
		
		
      </div>
</div>	
</div>
</body>
</html>