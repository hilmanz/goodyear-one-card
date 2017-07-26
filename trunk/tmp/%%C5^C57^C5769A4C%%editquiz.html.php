<?php /* Smarty version 2.6.13, created on 2015-05-13 10:14:28
         compiled from application/admin//apps/editquiz.html */ ?>
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
            <h2 class="fl"><span class="icon-newspaper">&nbsp;</span> Edit quiz</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
quiz" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->
			
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listnya']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

            <form  method="post" action="<?php echo $this->_tpl_vars['basedomain']; ?>
quiz/edit" enctype="multipart/form-data">
            <div id="new-project" class="boxcontent">
                <section class="step1">
                    <div class="row">
                        <label for="title">Image quiz<br></label>
                       <input  name="imgquiz" type="file" class=" url imgquiz" ><br>
					
                    </div><!-- end .row -->
					<div class="row">
					
					<div id='uploadPreview'>
					<img src="<?php echo $this->_tpl_vars['basedomainpath']; ?>
public_html/public_assets/quiz/<?php echo $this->_tpl_vars['listnya'][$this->_sections['i']['index']]['img']; ?>
">
					</div> 
							
					</div>
					                 
					 <input type="hidden" name="inisiasi" value="<?php echo $this->_tpl_vars['inisiasi']; ?>
">
                    <input type="hidden" name="submit" value="1">
                        <input type="submit" value="SAVE" class="button3"  />
						 <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
users" class="button4">CANCEL</a>
						<?php if ($this->_tpl_vars['success']): ?> 
                        <small class="msg">Upload telah Berhasil</small>
                        <?php endif; ?>
						<small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
                    </div><!-- end .row -->
                </section>
            </div><!-- end #wizard -->
            </form>
	<?php endfor; endif; ?>
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
		 $(\'#uploadPreview\').html(\'<img src="\'+ this.src +\'">\');
			//if(w==\'970\' && h==\'480\')
			//{			
           // $(\'#uploadPreview\').html(\'<img src="\'+ this.src +\'">\');
			
		//	}else{
		//	alert(\'( Ukuran file harus 970 px * 480 px )\');
		//	$(".imgquiz").val(\'\');
		//	return false;
			
			//}
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


thiss= $(".imgquiz");
 
			thiss.change(function(e)
			{
		   
			   e.preventDefault();
			 
			if(this.files[0].size != \'\')
			   {
				if(this.files[0].size > 500000)
				{
					alert (\'lebih dari 500 kb\');
					$(".imgquiz").val(\'\');
					return false;
					
				}
				if(this.files[0].type!=\'image/jpeg\')
				{
					 alert(\'bukan JPG\');
					 $(".imgquiz").val(\'\');
					 return false;
					
				}
				
			  }
			  
				var F = this.files;
				if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
				
			});
			
			
'; ?>
		
</script>