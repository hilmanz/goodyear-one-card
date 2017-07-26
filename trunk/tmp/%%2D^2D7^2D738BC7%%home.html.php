<?php /* Smarty version 2.6.13, created on 2016-05-04 07:57:39
         compiled from application/web/home.html */ ?>
<div id="paralax" class="autoheights">
  <div id="layer" class="autoheights layer" data-depth="0.20"></div>
</div>
<div id="header" class="autoheight">
    <div class="container autoheights">
        <div class="row">
            <div class="col-md-12 center">
                <a class="logo"><img src="assets/images/logo.png" alt="goodyear"></a>
            </div><!-- end .col-md-12 -->
            <div class="col-md-12">
               <div class="entry-header">
          <img align="right" src="assets/images/goodyear-onecard.png" alt="goodyear onecard" class="goodyearonecard" >
                  <h1>#one<span class="yellow">good</span>card</h1>
                  <p style="font-size:20px;">Program Goodyear One Card sudah berakhir.<br>
Terima kasih telah berpartisipasi dalam program kami.</p>
               </div>
            </div><!-- end .col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</div><!-- end #header -->

<div id="fb-root"></div>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/waypoints.min.js"></script>
		<script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/wowanimate/wow.js"></script>
        <script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/jquery.stellar.js"></script>
        <script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/parallax.js"></script>
		<script src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/vendor/custom.js"></script>

<script>
<?php echo '

 var sharetext = \'Saya sudah mendapatkan Goodyear One Card! Miliki segera di http://goo.gl/uQLfFB\';
 var countregister ="{$countregister}";
 var error = false;


 $(\'.hp\').keyup(function () {
		if(this.value){
			this.value = this.value.replace(/[^0-9]/g,\'\');
		}
	});
	$(\'.kodepos\').keyup(function () {
		if(this.value){
			this.value = this.value.replace(/[^0-9]/g,\'\');
		}
	});

$(".simpan").click(function(){
	var valid=\'\';

	if($(".name").val()==\'\'){
		$(\'.name_erorr\').html(\'kolom nama harus di isi\');
		valid=\'ada\';
    var error = true;
	}

	if($(".emailMember").val()==\'\'){
		$(\'.email_erorr\').html(\'kolom email harus di isi\');
		valid=\'ada\';
    var error = true;
	}

	if($(".hp").val()==\'\'){
		$(\'.hp_erorr\').html(\'kolom No HP harus di isi\');
		valid=\'ada\';
    var error = true;
	}
	if($(".alamat").val()==\'\'){
		$(\'.alamat_erorr\').html(\'kolom alamat harus di isi\');
		valid=\'ada\';
    var error = true;
	}
	if($(".provinsi").val()==\'\'){
		$(\'.provinsi_erorr\').html(\'kolom provinsi harus di isi\');
		valid=\'ada\';
    var error = true;
	}
	if($(".kodepos").val()==\'\'){
		$(\'.kodepos_erorr\').html(\'kolom kodepos harus di isi\');
		valid=\'ada\';
    var error = true;
	}


	if(valid){
		return false;
	}else{
		vlidemail(valid)
	}
    if(error == false){
       var owl = $("#step");
        owl.owlCarousel({
        navigation : false, // Show next and prev buttons
        pagination :false,
        mouseDrag:false,
        touchDrag:false,
        singleItem : true,
        slideSpeed : 300,
        autoHeight : true,
        paginationSpeed : 400,
        transitionStyle : "fadeUp"
        });
       owl.trigger(\'owl.next\');
    }
});

function vlidemail(valid){
  var error = false;
	var valid= valid;
	emailsplit = $(\'.emailMember\').val().split(\',\');
	emailformat=\'\';
	var emailSame=\'\';
	var ix=0;
	var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,15})+$/;

	if(emailformat==\'\' && emailSame==\'\'){
		if(emailsplit.length > 20 ){
			$(\'.email_erorr\').html(\'Maximal 20 Email Member\');
			valid=\'ada\';
		}
	}
		//console.log(emailsplit);
	$.each(emailsplit,function(ind,value){
		mailnya = value.trim();

		if(!mailnya.match(mailformat))
		{
			console.log(\'masuksini salah format\');
			$(\'.email_erorr\').html(\' format email salah (e.g. example@gmail.com)\');

			valid=\'ada\';
			emailformat=\'ada\';
      var error = true;
			//console.log(mailnya);
		}
		else
		{
			$.ajax ({
				type	 : \'POST\',
				url	 :  basedomain+\'home/checkEmail\' ,
				data:{email:mailnya},
				dataType:\'json\',
				//console.log("masuk sini");
				success	: function (result) {
					++ix;

					if(result.status==1){
						//console.log("abcde");
						//console.log(emailSame);
						if(emailSame==\'\')
						{
							console.log("ocstary");

							emailSame +=result.email;

						}
						else
						{

							emailSame +=\',\'+result.email;
						}
						if(emailSame)
						{

							$(\'.email_erorr\').html(\'email <span class="emailsame" > \'+emailSame+\'</span> sudah terdaftar\');
							//owl.trigger(\'owl.next\');
              var error = true;
							valid=\'ada\';
						}
						else{

						}
					}
					else{
           var owl = $("#step");
            owl.owlCarousel({
            navigation : false, // Show next and prev buttons
            pagination :false,
            mouseDrag:false,
            touchDrag:false,
            singleItem : true,
            slideSpeed : 300,
            autoHeight : true,
            paginationSpeed : 400,
            transitionStyle : "fadeUp"
            });
           owl.trigger(\'owl.next\');
						console.log("asdf");
						var namenya=$(".name").val();
							var email=$(".emailMember").val();
							var hp=$(".hp").val();
							var alamat=$(".alamat").val();
							var provinsi=$(".provinsi").val();
							var kodepos=$(".kodepos").val();
							//alert(hp);

								$.ajax ({
									type	 : \'POST\',
									url	 :  basedomain+\'home/register\' ,
									data:{namenya:namenya,email:email,hp:hp,alamat:alamat,provinsi:provinsi,kodepos:kodepos},
									dataType:\'json\',
									success	: function (result)
										{
										}
								});
							$(\'.fromevent\').trigger(\'submit\');
					}
					//console.log(valid);
					if(emailsplit.length==ix){
						if(valid){
							//console.log(\'masuk dah\');
							return false;
							//end;
						}else{

							//$(\'.submitnya\').trigger(\'click\');
						}
					}
				}
			});
		}
	});
	if(valid)
	{
		return false;
	}
	return false;
}

$(".choose").click(function(){
	var valid=\'\';
	if($(".emailMember").val()==\'\')
	{
		valid=\'ada\';
	}
	if($(".pertanyaan").val()==\'\')
	{
		valid=\'ada\';
	}
	if($(".jawaban").val()==\'\')
	{
		valid=\'ada\';
	}

	if(valid)
	{
		return false;
	}else{
		var str = $(this).attr( "rel" );
		var res = str.split(" ");
		var email=$(".emailMember").val();
		var pertanyaan=res[0];
		var jawaban=res[1];

		$.ajax ({
			type	 : \'POST\',
			url	 :  basedomain+\'home/kuesioner\' ,
			data:{email:email,pertanyaan:pertanyaan,jawaban:jawaban},
			dataType:\'json\',
			success	: function (result)
			{
			}
		});
		$(\'.fromevent\').trigger(\'submit\');
	}
});

$("#finish").click(function(){
	var valid=\'\';
	if($(".jenismobil").val()==\'\')
	{
		valid=\'ada\';
	}

	if($(".ukuranban").val()==\'\')
	{
		valid=\'ukuranban\';
	}

	if(valid)
	{
		return false;
	}else{
		var jenismobil=$(".jenismobil").val();
		var ukuranban=$(".ukuranban").val();
		var email=$(".emailMember").val();

		$.ajax ({
			type	 : \'POST\',
			url	 :  basedomain+\'home/registermobil\' ,
			data:{email:email,jenismobil:jenismobil,ukuranban:ukuranban},
			dataType:\'json\',
			success	: function (result)
			{
			}
		});
		$(\'.fromevent\').trigger(\'submit\');
	}
});

function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
	FB.init();
	FB.ui({
		method: \'share\',
		name: fb_name,
		href: \'https://www.goodyear.com\',
		caption: \'ooo\',
		//link: fb_link,
		picture: \'http://preview.kanadigital.com/onecard3/public_html/assets/images/email/email.jpg\',
		//caption: fb_user,
		description: sharetext
	});
}

 <!-- Lightning Bolt Begins -->

              var lbTrans = \'\';
              var lbValue = \'\';
              var lbData = \'\';
              var lb_rn = new String(Math.random()); var lb_rns = lb_rn.substring(2, 12);
              var boltProtocol = (\'https:\' == document.location.protocol) ? \'https://\' : \'http://\';

              try {
                  var newScript = document.createElement(\'script\');
                  var scriptElement = document.getElementsByTagName(\'script\')[0];
                  newScript.type = \'text/javascript\';
                  newScript.id = \'lightning_bolt_\' + lb_rns;
                  newScript.src = boltProtocol + \'cdn-akamai.mookie1.com/LB/LightningBolt.js\';
                  scriptElement.parentNode.insertBefore(newScript, scriptElement);
                  scriptElement = null; newScript = null;
              } catch (e) { }

          <!-- Lightning Bolt Ends -->

'; ?>

</script>