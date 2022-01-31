/*
 #  ====================================================================
 #                      Abyssinkiya Developments Inc.
 #  ====================================================================
 #              Designed by:    Eyasu Girma [Kiya], BSc
 #                  Mobile:     +251-913-078-029
 #                  Email:      sendtokiya@gmail.com
 #                  Facebook:   https://facebook.com/JoshKiyakoo
 #                  LinkedIn:   https://linkedin.com/in/JoshKiyakoo
 #                  Telegram:   https://t.me/JoshKiyakoo
 #  =====================================================================
*/
/*-----------------------------------------------------------------------------------
/*
/* Init JS
/*
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {

/*---------------------------------------------------- */
/* Preloader
------------------------------------------------------ */ 
  	$(window).load(function() {

   	// will first fade out the loading animation 
    	$("#status").fadeOut("slow"); 

    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(500).fadeOut("slow").remove();      

  	}) 

/*---------------------------------------------------- */
/*	Validate  Email Address.
------------------------------------------------------ */

function validateEmailAddress() {

	var myMail = document.getElementById('mce-EMAIL').value
	if (myMail == "") {
		alert ("E-mail field cannot be empty.");
		document.getElementById('mce-EMAIL').value = "";
		document.getElementById('mce-EMAIL').focus ();
	}
	else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field)) {
		alert ("Please insert a valid E-mail Address.");
		document.getElementById('mce-EMAIL').value = "";
		document.getElementById('mce-EMAIL').focus ();
	}

}

/*---------------------------------------------------- */
/* Menu
------------------------------------------------------ */  
  	var toggle_button = $("<a>", {                         
                        id: "toggle-btn", 
                        html : "Menu",
                        title: "Menu",
                        href : "#" } 
                        );
  	var nav_wrap = $('nav#nav-wrap')
  	var nav = $("ul#nav");  

  	/* id JS is enabled, remove the two a.menu-btns 
  	and dynamically prepend a.toggle-btn to #nav-wrap */
  	nav_wrap.find('a.menu-btn').remove(); 
  	nav_wrap.prepend(toggle_button); 

  	toggle_button.on("click", function(e) {
   	e.preventDefault();
    	nav.slideToggle("fast");     
  	});

  	if (toggle_button.is(':visible')) nav.addClass('mobile');
  	$(window).resize(function(){
   	if (toggle_button.is(':visible')) nav.addClass('mobile');
    	else nav.removeClass('mobile');
  	});

  	$('ul#nav li a').on("click", function(){      
   	if (nav.hasClass('mobile')) nav.fadeOut('fast');      
  	});

/*----------------------------------------------------*/
/* Backstretch Settings
------------------------------------------------------ */

	$("#intro").backstretch("public/images/background.jpg");


/*----------------------------------------------------*/
/*	Back To Top Button
/*----------------------------------------------------*/
	var pxShow = 200; //height on which the button will show
	var fadeInTime = 100; //how slow/fast you want the button to show
	var fadeOutTime = 500; //how slow/fast you want the button to hide
	var scrollSpeed = 1500; //how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

   // Show or hide the sticky footer button
	jQuery(window).scroll(function() {

		if (jQuery(window).scrollTop() >= pxShow) {
			jQuery("#go-top").fadeIn(fadeInTime);
		} else {
			jQuery("#go-top").fadeOut(fadeOutTime);
		}

	});

/*----------------------------------------------------*/
/*  Placeholder Plugin Settings
------------------------------------------------------ */  	 
	$('input, textarea').placeholder()

/*----------------------------------------------------*/
/* FitText Settings
------------------------------------------------------ */
   setTimeout( function() {

	   $('h1.responsive-headline').fitText(1, { minFontSize: '40px', maxFontSize: '90px' });
	   
   }, 100);

/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------ */

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 1500, 'swing', function () {
	        window.location.hash = target;
	    });
	});

/*----------------------------------------------------*/
/* Highlight the current section in the navigation bar
------------------------------------------------------*/

	var sections = $("section");
	var navigation_links = $("#nav-wrap a");

	sections.waypoint({

      handler: function(event, direction) {

		   var active_section;

			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('#nav-wrap a[href="#' + active_section.attr("id") + '"]');

         navigation_links.parent().removeClass("current");
			active_link.parent().addClass("current");

		},
		offset: '35%'

	});

/*----------------------------------------------------*/
/*	Make sure that #intro height is
/* equal to the browser height.
------------------------------------------------------ */

   $('#intro, #map').css({ 'height': $(window).height() });
   $(window).on('resize', function() {

        $('#intro, #map').css({ 'height': $(window).height() });
        $('body').css({ 'width': $(window).width() })

        $("#intro").backstretch("images/background.jpg");
   });

});
