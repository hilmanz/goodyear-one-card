<?php /* Smarty version 2.6.13, created on 2015-08-21 10:34:57
         compiled from application/admin//apps/edityoutube.html */ ?>
<?php echo '
<script>
	tinyMCE.init({
		theme : "advanced",
        mode : "exact",
        elements : "teditor,idtok",
		plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		paste_remove_styles: true,
		paste_auto_cleanup_on_paste : true,
		
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",

		file_browser_callback : "ajaxfilemanager",
		paste_use_dialog : true,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : true,
		apply_source_formatting : true,
		force_br_newlines : true,
		force_p_newlines : false,	
		relative_urls : true,
		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true
	});
	function ajaxfilemanager(field_name, url, type, win) {
		var ajaxfilemanagerurl = "../admin/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
		var view = \'detail\';
		switch (type) {
			case "image":
			view = \'thumbnail\';
				break;
			case "media":
				break;
			case "flash": 
				break;
			case "file":
				break;
			default:
				return false;
		}
		tinyMCE.activeEditor.windowManager.open({
		    url: "../admin/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
		    width: 800,
		    height: 700,
		    inline : "yes",
		    close_previous : "no"
		},{window : win, input : field_name });
	}
	
function validator(){
	tinyMCE.triggerSave();
	if( $(\'#title\').val() == \'\' ){
		alert("Please fill title");
		return false;
	}
}
</script>
'; ?>


<div class="page_section" id="project-page">
    <div id="container">
	
	
				 <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Add Video</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
youtube" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
				<div id="new-project" class="boxcontent">
						<section class="step1">
						<div class="row">
							<label for="title">Title<br></label>
							<input id="title" name="title" type="text" value="<?php echo $this->_tpl_vars['youtubenya']['title']; ?>
" class="title" ><br>
							<label class="title_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- end .row -->
						<div class="row">
							<label for="title">Url<br></label>
							<input id="url" name="url" type="text" value="<?php echo $this->_tpl_vars['youtubenya']['url']; ?>
" class="url" ><br>
							<label class="video_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- end .row -->
						
						<div class="row">
						<input type="hidden" name="submit" value="1">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['youtubenya']['id']; ?>
">
						<input type="hidden" name="userreg" value="<?php echo $this->_tpl_vars['paramreg']; ?>
">
							<input type="submit" value="SAVE" name="youtube" class="button3 submitevent"  />
							 <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
youtube" class="button4">CANCEL</a>
							<small class="msg"><?php echo $this->_tpl_vars['status']['msgee']; ?>
</small>
							<small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
						</div><!-- end .row -->
						</section>
				</div><!-- end #wizard -->
            </form>
        </div><!-- end .content -->
	
    </div><!-- end #container -->
</div><!-- end #home -->


<script>
<?php echo '
	$(document).on(\'click\',\'.submitevent\',function(){
		$(\'.title_erorr\').html(\'\');
		$(\'.video_erorr\').html(\'\');
		
		var valid=\'\';
		if($(\'.title\').val()==\'\')
		{
			$(\'.title_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.url\').val()==\'\')
		{
			$(\'.video_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		
		
		if(valid)
		{
			return false;
		}
		else
		{
			$(\'.fromevent\').trigger(\'submit\');
		}
	})
'; ?>

</script>