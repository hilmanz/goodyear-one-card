/*
Theme Name: VCARD
Author: Acit Jazz
Version: 1.0
*/

$(function(){
  $('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
	$('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });
  });
});

$( "#header" ).mousemove(function( event ) {
  var msg = "Handler for .mousemove() called at ";
  msg += event.pageX + ", " + event.pageY;
    $("#headercontent").css('transform', 'translate(' + event.pageY /35 + 'px,' + -event.pageX /35+ 'px)');
});

var scene = document.getElementById('paralax');
var parallax = new Parallax(scene);

jQuery(document).ready(function($){
	$(function() {
	  // $('a[href*=#]:not([href=#])').click(function() {
	  $('a.scroll').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	$(window).stellar();
	//wizard
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
	   $(".next,.start").click(function(){
	    owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
	    owl.trigger('owl.prev');
	  })
	  //form 
    $( "#trivia-1 .choose" ).click(function() {
        var answer = $(this).text();
        $("#question1").val(answer);
    });

    $( "#trivia-2 .choose" ).click(function() {
        var answer = $(this).text();
        $("#question2").val(answer);
    });
    $( "#trivia-3 .choose" ).click(function() {
        var answer = $(this).text();
        $("#question3").val(answer);
        //result
        var text = $('#name').val();
        $('#username').html(text);
    });
	//validation
    $('#btndata').click(function(e){
	    var error = false;
	    var name = $('#name').val();
	    var email = $('#email').val();
	    var nohp = $('#nohp').val();
	    if(name.length == 0){
	        var error = true;
	        $('#name_error').addClass("error");
	    }else{
	        $('#name_error').removeClass("error");
	    }
	    if(email.length == 0 || email.indexOf('@') == '-1'){
	        var error = true;
	        $('#email_error').addClass("error");
	    }else{
	        $('#email_error').removeClass("error");
	    }
	    if(nohp.length == 0){
	        var error = true;
	        $('#nohp_error').addClass("error");
	    }else{
	        $('#nohp_error').removeClass("error");
	    }
        if(error == false){
	    	owl.trigger('owl.next');
        }
    });
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
    $('#finish').click(function(e){
	    var error = false;
	    var ukuranban = $('#ukuranban').val();
	    var jenismobil = $('#jenismobil').val();
	    var merkmobil = $('#merkmobil').val();
	    if(ukuranban.length == 0){
	        var error = true;
	        $('#ukuranban_error').addClass("error");
	    }else{
	        $('#ukuranban_error').removeClass("error");
	    }
	    if(jenismobil.length == 0){
	        var error = true;
	        $('#jenismobil_error').addClass("error");
	    }else{
	        $('#jenismobil_error').removeClass("error");
	    }
	    if(merkmobil.length == 0){
	        var error = true;
	        $('#merkmobil_error').addClass("error");
	    }else{
	        $('#merkmobil_error').removeClass("error");
	    }
        if(error == false){
	    	owl.trigger('owl.next');
        }
    });
});
	  
$(window).load(function() {
	wow = new WOW(
	{
	  boxClass:     'wow',      // default
	  animateClass: 'animated', // default
	  offset:       0,          // default
	  mobile:       true,       // default
	  live:         true        // default
	})
	wow.init();
});

