<?php /* Smarty version 2.6.13, created on 2015-08-21 11:15:04
         compiled from application/admin//apps/addstory.html */ ?>
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
		relative_urls : false,
		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true
	});
	function ajaxfilemanager(field_name, url, type, win) {
		var ajaxfilemanagerurl = "../assets/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
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
		    url: "../assets/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
		    width: 782,
		    height: 440,
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
	
	<?php if ($this->_tpl_vars['paramreg']): ?>
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Add Article</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
story" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
				<div id="new-project" class="boxcontent">
						<section class="step1">
						<div class="row">
							<label for="title">Title<br></label>
							<input id="title" name="title" type="text" value="<?php echo $this->_tpl_vars['title']; ?>
" class="required mandatory" ><br>
						</div><!-- end .row -->
						<div class="row">
							<label for="title">Nama<br></label>
							<input id="title" name="nama" type="text" value="<?php echo $this->_tpl_vars['usernya']; ?>
" class="required mandatory" ><br>
							<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['nama_no']; ?>
</label>
						</div>
						<div class="row">
						<label for="Date">Description 	:</label></label>
							<textarea  cols="100" id="teditor"   name="description"  ><?php echo $this->_tpl_vars['Description']; ?>
</textarea><br>
							<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['Description_no']; ?>
</label>
						</div>
						<div class="row">
							<label for="title">Meta Title<br></label>
							<input id="title" name="meta_title" type="text" value="<?php echo $this->_tpl_vars['meta_title']; ?>
" class="required mandatory" ><br>
							<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['meta_title_no']; ?>
</label>
						</div>
						<div class="row">
							<label for="title">Meta Description<br></label>
							<input id="title" name="meta_description" type="text" value="<?php echo $this->_tpl_vars['meta_description']; ?>
" class="required mandatory" ><br>
							<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['meta_description_no']; ?>
</label>
						</div>
						<div class="row">
							<label for="title">Keyword<br></label>
							<input id="title" name="keyword" type="text" value="<?php echo $this->_tpl_vars['keyword']; ?>
" class="required mandatory" ><br>
							<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['keyword_no']; ?>
</label>
						</div>
					 
						 	<div class="row">
						<label for="Date">category 	:</label>
							<select  name="category" type="text" value="<?php echo $this->_tpl_vars['category']; ?>
"  >
							<option>Please Select</option>
							<option value=1>Style</option>
							<option value=2>Event</option>
							<option value=3>Skin</option>
							<option value=4>Diy</option>
							<option value=5>Relations</option>
							</select>
						</div>
					 
				   
						<div class="row">
                            <label for="Date">Upload Home Img Content<br></label>
							<input name="img_home" id="img_home"  type="file" class="required"  style="width: 200px;">
                        	<i> *ukuran File 320 x 180 pixel <?php echo $this->_tpl_vars['photo_no']; ?>
</i>
                        </div><!-- end .row -->
                         <div class="row">
                            <label for="Date">Upload Views Img Content<br></label>
							<input name="img_content" id="img_content"  type="file" class="required"  style="width: 200px;">
                        	<i> *ukuran File 800 x 600 pixel <?php echo $this->_tpl_vars['photo_no']; ?>
</i>
                        </div><!-- end .row -->
                        
                         <div class="row">
                        <input type="hidden" name="submit" value="1">
                        
                        <input type="hidden" name="userreg" value="">
                            <input type="submit" value="SAVE" class="button3"  />
                             <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
users" class="button4">CANCEL</a>
                            <small class="msg"><?php echo $this->_tpl_vars['status']['msgee']; ?>
</small>
                            <small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
						</div><!-- end .row -->
						</section>
				</div><!-- end #wizard -->
            </form>
        </div><!-- end .content -->
		<?php else: ?>
				 <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Add Article</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
story" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
		
       <div class="content" id="tabs-1">
            <div class="summary">
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
				<div id="new-project" class="boxcontent">
						<section class="step1">
						<div class="row">
							<label for="title">Title<br></label>
							<input id="title" name="title" type="text" value="<?php echo $this->_tpl_vars['title']; ?>
" class="title" ><br>
							<label class="title_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- end .row -->
						<div class="row">
							<label for="title">Nama<br></label>
							<input id="title" name="nama" type="text" value="<?php echo $this->_tpl_vars['title']; ?>
" class="nama" ><br>
							<label class="nama_erorr msg_name error_red" style="color: red;"></label>
						</div><!-- end .row -->
						<div class="row">
						<label for="Date">Description 	:</label></label>
							<textarea  cols="100" id="teditor"   name="description" class="description" ><?php echo $this->_tpl_vars['Description']; ?>
</textarea>
							<label class="description_erorr msg_name error_red" style="color: red;"></label>
						</div>
					<div class="row">
							<label for="title">Meta Name<br></label>
							<input id="title" name="meta_title" type="text" value="<?php echo $this->_tpl_vars['meta_title']; ?>
" class="meta" ><br>
							<label class="meta_erorr msg_name error_red" style="color: red;"></label>
						</div>
						<div class="row">
							<label for="title">Meta Content<br></label>
							<input id="title" name="meta_description" type="text" value="<?php echo $this->_tpl_vars['meta_description']; ?>
" class="content" ><br>							
							<label class="content_erorr msg_name error_red" style="color: red;"></label>
						</div>
						<div class="row">
							<label for="title">Keyword<br></label>
							<input id="title" name="keyword" type="text" value="<?php echo $this->_tpl_vars['keyword']; ?>
" class="keyword" ><br>
							<label class="keyword_erorr msg_name error_red" style="color: red;"></label>
						</div>
						 	<div class="row">
						<label for="Date">category 	:</label>
							<select  class="category" name="category" type="text" value="<?php echo $this->_tpl_vars['category']; ?>
"  >
							<option value=''>Please Select</option>
							<option value=1>Style</option>
							<option value=2>Event</option>
							<option value=3>Skin</option>
							<option value=4>Diy</option>
							<option value=5>Relations</option>
							</select><br>
							<label class="category_erorr msg_name error_red" style="color: red;"></label>
							</div>
					 
				   
						<div class="row">
							<label for="Date">Upload Home Img Content<br></label>
												   <input name="img_home" id="img_home"  type="file" class="required"  style="width: 200px;">
                        	<i> *ukuran File 320 x 180 pixel <?php echo $this->_tpl_vars['photo_no']; ?>
</i><br><br><br>
							<label for="Date" class="msg_name img_contentnya" style="display:none;color: red;">Home Img Content is not correct</label>
							
						</div><!-- end .row -->
						 <div class="row">
							<label for="Date">Upload Views Img Content<br></label>
												   <input name="img_content" id="img_content"  type="file" class="required img_content"  style="width: 200px;">
                        	<i> *ukuran File 800 x 600 pixel <?php echo $this->_tpl_vars['photo_no']; ?>
</i><br>
							
						</div><!-- end .row -->
						
						 <div class="row">
						<input type="hidden" name="submit" value="1">
						
						<input type="hidden" name="userreg" value="<?php echo $this->_tpl_vars['paramreg']; ?>
">
							<input type="submit" value="SAVE" name="story" class="button3 poststory submitevent"  />
							 <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
users" class="button4">CANCEL</a>
							<small class="msg"><?php echo $this->_tpl_vars['status']['msgee']; ?>
</small>
							<small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
						</div><!-- end .row -->
						</section>
				</div><!-- end #wizard -->
            </form>
		
        </div><!-- end .content -->
		<?php endif; ?>
    </div><!-- end #container -->
</div><!-- end #home -->

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
<?php echo '
	$(document).on(\'click\',\'.submitevent\',function(){
		$(\'.title_erorr\').html(\'\');
		$(\'.nama_erorr\').html(\'\');
		$(\'.description_erorr\').html(\'\');
		$(\'.meta_erorr\').html(\'\');
		$(\'.content_erorr\').html(\'\');
		$(\'.keyword_erorr\').html(\'\');
		$(\'.category_erorr\').html(\'\');		
		
		var valid=\'\';
		if($(\'.title\').val()==\'\')
		{
			$(\'.title_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.nama\').val()==\'\')
		{
			$(\'.nama_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.description\').val()==\'\')
		{
			$(\'.description_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.meta\').val()==\'\')
		{
			$(\'.meta_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.content\').val()==\'\')
		{
			$(\'.content_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.keyword\').val()==\'\')
		{
			$(\'.keyword_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
		if($(\'.category\').val()==\'\')
		{
			$(\'.category_erorr\').html(\'kolom ini harus di isi\');
			valid=\'ada\';
		}
	
	var str = $(\'.keyword\').val();
    var res = str.split(",");
	if (res[10])
	{
	$(\'.keyword_erorr\').html(\'kolom dibatasi 10 keyword\');
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

<script>
<?php echo '
$(\'.poststory\').on("click", function(){
//console.log(\'masuk\');
	$(\'.img_home_no\').hide();
	$(\'.img_contentnya\').hide();
	if($(\'.category option:selected\').val()==\'\')
	{
	//console.log(\'masuk\');
		$(\'.img_home_no\').show();
	}
	

	
	
	
});
$(function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  });
'; ?>

</script>