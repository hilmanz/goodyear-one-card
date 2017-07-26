<?php /* Smarty version 2.6.13, created on 2015-10-08 11:41:57
         compiled from application/admin/apps/viewcheckresult.html */ ?>
<?php echo '
	<script>
	tinymce.init({selector:\'textarea\',

    toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | bullist numlist | outdent indent blockquote | undo redo | anchor | forecolor backcolor",


	theme : "modern",

    height: "100",
    width:900
	
	});
	</script>
'; ?>

<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-people">&nbsp;</span>Result Detail</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
checkresult" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="">

            <div id="new-project" class="boxcontent checkresult">
              <hr>
                <div class="row">
                    <h3 style="margin: 0;">User Check Result</h3>
                </div>
              <hr>
                <section class="step1">						
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <div class="row">
                        <label for="name">ID Pasien :<br></label>
						 <input id="iduser" name="iduser"  value="<?php echo $this->_tpl_vars['user']['id']; ?>
" type="hidden" class="required" >
                       <strong><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['patient_id']; ?>
</strong>
                    </div><!-- end .row -->
					 <div class="row">
                        <label for="name">Nama Pasien :<br></label>
						<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>

                    </div><!-- end .row -->
				
					  <div class="row">
                        <label for="email">Alamat :<br></label>
                      <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['alamat']; ?>

                    </div><!-- end .row -->
					
					  <div class="row">
                        <label for="username">Jenis Kelamin :<br></label>
                       <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['sex']; ?>

                    </div><!-- end .row -->
                     <div class="row">
                        <label for="password">Tanggal Lahir :<br></label>
                          <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['tanggal_lahir']; ?>

                    </div><!-- end .row -->
					 <div class="row">
                        <label for="password">Umur :<br></label>
                           <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['umurtahun']; ?>
 tahun <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['umurbulan']; ?>
 bulan
                    </div><!-- end .row -->
					 <div class="row">
                        <label for="password">Telepon :<br></label>
                           <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['telpon']; ?>

                    </div><!-- end .row -->

					<div class="row">
                        <label for="username">No Lab :<br></label>
                           <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no_lab']; ?>

                    </div><!-- end .row -->
                     <div class="row">
                        <label for="password">Tanggal Pemeriksaan :<br></label>
                           <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['tanggal_pemeriksaan']; ?>

                    </div><!-- end .row -->
					 <div class="row">
                        <label for="password">Dokter Pemeriksa :<br></label>
                           <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['doctor_name']; ?>

                    </div><!-- end .row -->
					 <div class="row">
                        <label for="password">Cabang Pemeriksa :<br></label>
                          <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['cabangProdia']; ?>

                    </div><!-- end .row -->
					 <div class="row">
                        <label for="password">Alamat Cabang Prodia :<br></label>
                           <label><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['alamatProdia']; ?>
</label
                    </div><!-- end .row -->
					<div class="row">
                        <label for="password">Jenis Pemeriksaan :<br></label>
                          <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name_pemeriksaan']; ?>

                    </div><!-- end .row -->	
					<?php endfor; endif; ?>	
                </section>
            </div><!-- end #wizard -->
            </form>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->
<script>
<?php echo '
	if($(\'.typeuser\').val()==9)
			{
				$(".checkboxmenu").prop("checked", true);	
				$(".checkboxmenu").attr("disabled", true);	
				$(".checkboxmenu").prop("checked", true);				
			}
			else {
				//console.log(\'aaaa\');
				//$(".checkboxmenu").prop("checked", false);
				//$(".checkboxmenu").removeAttr("disabled"); 	
				}

	$(\'.typeuser\').click(function()
	{
			
			console.log($(this).val());
			if($(this).val()==9)
			{
				$(".checkboxmenu").prop("checked", true);
				$(".checkboxmenu").attr("disabled", true);				
			}
			else {
				$(".checkboxmenu").prop("checked", false);
				$(".checkboxmenu").removeAttr("disabled"); 	
				}
	});
'; ?>

</script>