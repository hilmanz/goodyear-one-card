<?php /* Smarty version 2.6.13, created on 2015-08-20 10:18:49
         compiled from application/admin//apps/addbanner.html */ ?>
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
		theme_advanced_resizing : false
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
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Add Banner</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
banner" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
            <div id="new-project" class="boxcontent">
                <section class="step1">
                    <div class="row">
                        <label for="title">Image Banner<br>
                        	<i> *ukuran file harus 970 px * 480 px, format JPEG dan Max 500KBooo</i></label>
                       <input  name="imgbanner" type="file" class="required mandatory" ><br>
					<label class="msg_name" style="color: red;" style="clear:both;"></label>
                    </div><!-- end .row -->
					<div class="row">
					<div id='uploadPreview'></div> 
					</div>
					<div class="row">
						<label for="Date">Url 	:</label></label>
						<input  name="url" type="text" >
                    </div>
					<div class="row">
						<label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['Description_no']; ?>
</label>
                    </div>
                 
					 
					
                    <input type="hidden" name="submit" value="1">
                        <input type="submit" value="SAVE" class="button3"  />
						 <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
banner" class="button4">CANCEL</a>
						<?php if ($this->_tpl_vars['success']): ?> 
                        <small class="msg">Upload telah Berhasil</small>
                        <?php endif; ?>
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
function readImage(file) {

    var reader = new FileReader();
    var image  = new Image();

    reader.readAsDataURL(file);  
    reader.onload = function(_file) {
        image.src    = _file.target.result;              // url.createObjectURL(file);
        image.onload = function() {
            var w = this.width,
                h = this.height,
                t = file.type,                           // ext only: // file.type.split(\'/\')[1],
                n = file.name,
                s = ~~(file.size/1024) +\'KB\';
		
			if(w==\'970\' && h==\'480\')
			{			
            $(\'#uploadPreview\').html(\'<img src="\'+ this.src +\'">\');
			
			}else{
			alert(\'( Ukuran file harus 970 px * 480 px)\');
			$(".imgbanner").val(\'\');
			return false;
			
			}
        };
        image.onerror= function() {
            alert(\'Invalid file type: \'+ file.type);
        };      
    };

}
'; ?>

</script>


<script>
<?php echo '


thiss= $(".imgbanner");
 
			thiss.change(function(e)
			{
		   
			   e.preventDefault();
			 
			if(this.files[0].size != \'\')
			   {
				if(this.files[0].size > 500000)
				{
					alert (\'Failed! File lebih dari 500 KB\');
					$(".imgbanner").val(\'\');
					return false;
					
				}
				if(this.files[0].type!=\'image/jpeg\')
				{
					 alert(\'Failed! File bukan JPG\');
					 $(".imgbanner").val(\'\');
					 return false;
					
				}
				
			  }
			  
				var F = this.files;
				if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
				
			});
			
			
'; ?>
		
</script>