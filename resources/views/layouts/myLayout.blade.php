<?php
// ======================================================================
//             Designed by:    Eyasu Girma [Kiya]
//                 Mobile:     +251-913-078-029
//                 Email:      sendtokiya@gmail.com
//                 Facebook:   https://facebook.com/JoshKiyakoo
//                 LinkedIn:   https://linkedin.com/in/JoshKiyakoo
//                 Twitter:    https://twitter.com/JoshKiyakoo
//                 Telegram:   https://t.me/JoshKiyakoo
// ======================================================================
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   	<!--- Basic Page Needs
	================================================== -->
	<meta name="author" content="JoshKiyakoo_@SemienFGBC_#Coming_Soon">
   	<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
    <meta name="description" content="Faith, Love, Hope">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ ("♫ Coming Soon ♫ - ሰሜን ሙሉ ወንጌል አጥቢያ ቤተክርስቲያን || Semien Full Gospel Local Church") }}</title>
	<meta name="description" content="ሰሜን ሙሉ ወንጌል አጥቢያ ቤተክርስቲያን ድህረ ገጽ - Semien Full Gospel Local Church Official Website.">
	<!-- Mobile Specific Metas
   	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="{{ asset ('public/css/default.css') }}">
	<link rel="stylesheet" href="{{ asset ('public/css/layout.css') }}">
	<link rel="stylesheet" href="{{ asset ('public/css/media-queries.css') }}">
   	<!-- Script   body { background: #0f0f0f; }
   	================================================== -->
	<script src="{{ asset ('public/js/modernizr.js') }}"></script>
   	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset ('public/images/FGBC_Fav_Icon.png') }}" >
</head>

<body>
	<div id="preloader">
      	<div id="status">
        	<img src="{{ asset ('public/images/preloader.gif') }}" height="100" width="100" alt="Loading...">
      	</div>
       </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">
        <!--	MESSAGE	    -->
		@if (Session::get('JoshKiyakoo_Message_Success'))
            <p class="message_good" style="width:100%;">
                <strong style="font-size:20px;">&times;&nbsp; </strong>
                    {!! html_entity_decode (Session::get('JoshKiyakoo_Message_Success')) !!}
            </p>
        @elseif (Session::get('JoshKiyakoo_Message_Error'))
            <p class="message_bad" style="width:100%; ">
                <strong style="font-size:20px;">&times;&nbsp; </strong>
                    {!! html_entity_decode (Session::get('JoshKiyakoo_Message_Error')) !!}
            </p>
        @elseif (Session::get('JoshKiyakoo_Message_Err'))
            <p class="message_bad" style="width:100%; ">
                <strong style="font-size:20px;">&times;&nbsp; </strong>
                    {!! html_entity_decode (Session::get('JoshKiyakoo_Message_Err')) !!}
            </p>
        @endif

   		<header class="row">
			<div id="logo" >
				<a href="{{ url ('/') }}">
                <img src="{{ asset ('public/images/FGBC_Logo_Header.png') }}" alt="የሰሜን ሙሉ ወንጌል አጥቢያ ቤተክርስቲያን አርማ - Semien FGBC Local Church Logo" title="ሰሜን ሙሉ ወንጌል አጥቢያ ቤተክርስቲያን - Semien Full Gospel Local Church">
              </a>
			</div>

		   	<nav id="nav-wrap">
		      	<a class="menu-btn" href="#nav-wrap" title="Show navigation">{{ ("Show navigation") }}</a>
			   	<a class="menu-btn" href="#" title="Hide navigation">{{ ("Hide navigation") }}</a>

		      	<ul id="nav" class="nav">
		         	<li><a class="smoothscroll" href="#about">{{ ("About Us (Info)") }}</a></li>
			      	<li><a class="smoothscroll" href="#contact">{{ ("Contact Us (Info)") }}</a></li>
				  	<li><a class="smoothscroll" href="#map">{{ ("Our Location (on Map)") }}</a></li>
		      	</ul> <!-- end #nav -->
		   	</nav> <!-- end #nav-wrap -->
	   	</header> <!-- Header End -->

   	<div  id="main" class="row">

	   	<div class="twelve columns">
			<br>
			<h1>{{ ("Welcome To") }} <br /> {{ ("Semien Full Gospel Local Church") }}</h1>
			<p> <label style="color: #066fc2;">{{ ("ኢየሱስ ክርስቶስ ትናንትና ዛሬ እስከ ለዘላለምም ያው ነው።") }}</label> <label style="color: #ffffff;">{{ ("ወደ ዕብራውያን 13:8") }}</label>
				<label style="color: #c92f2f;">{{ ("Jesus Christ the same Yesterday, and Today, and Forever.") }}</label>
				<label style="color: #ffffff;">{{ ("Hebrews 13:8") }}</label>
			</p>
			<hr>
			<h1 style="color: #066fc2; font-weight: bolder;" id="SocialYoutube"> {{ ("COMING SOON !!!") }}</h1>
	   		<h2>{{ ("We are currently working on something awesome. Stay tuned!") }}</h2>
   			<!-- Begin MailChimp Signup Form -->
			   <div id="mc_embed_signup">
				<form action="{{ route ('store') }}" method="POST">
					@csrf
                	{{ method_field ('POST') }}
	               	<input type="email" name="txtSubscriberEmail" class="email" id="mce-EMAIL" placeholder="Your email address here...">
	               	<!-- <div class="clear"> -->
					<input type="submit" value="Subscribe" name="btnSubscribe" id="mc-embedded-subscribe" class="button">
					<!-- </div> -->
	          	</form>
	         </div>

				<ul class="social">
					<li><a href="{{ url ('https://facebook.com/SemienFGBC') }}" target="_Blank"  data-toggle="tooltip" data-placement="bottom" title="Reach Us on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{ url ('https://twitter.com/SemienFGBC') }}" target="_Blank"  data-toggle="tooltip" data-placement="bottom" title="Reach Us on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="{{ url ('https://t.me/Semien_FGBC') }}" target="_Blank"  data-toggle="tooltip" data-placement="bottom" title="Reach Us on Telegram"><i class="fa fa-telegram"></i></a></li>
					<li><a href="{{ url ('https://www.youtube.com/channel/UCYdXbL1TNdPMD5i_E6WJcZQ') }}" target="_Blank"  data-toggle="tooltip" data-placement="bottom" title="Reach Us on Youtube"><i class="fa fa-youtube"></i></a></li>
	            </ul>
         	</div>
      	</div> <!-- main end -->
   	</section> <!-- end intro section -->
		@yield('AboutUs')
		@yield('Location')
    <!-- footer
   	================================================== -->
   	<footer>
		<div class="row">
			<div class="two columns">
				<ul class="copyright">
					<li><a href="{{ url ('/') }}" class="footer-logo" style="text-align:center;"><img height="100px" width="175px" src="{{ asset ('public/images/FGBC_Logo_Footer.png') }}" alt="FGBC_Logo" data-toggle="tooltip" data-placement="top" title="ሰሜን ሙሉ ወንጌል አጥቢያ ቤተክርስቲያን - Semien Full Gospel Local Church"></a></li>
				</ul>
			</div>
			<div class="ten columns">
				<ul class="copyright">
					<li style="color:  #ffffff;">{{ ("Copyright ") }} &copy; {{ ("2019 - ") }} <?=date('Y');?> — {{ ("Ethiopian Full Gospel Believers' Church") }} &reg; {{ ("Semien Full Gospel Local Church. All Rights Reserved.") }}</li>

					<li style="color: #c92f2f;">{{ ("Designed and Developed by: Eyasu Girma [Kiya]") }}</li>
					<li style="color: #c92f2f;"><a href="mailto:sendtokiya@gmail.com" target="_blank" style="color: #c92f2f;">{{ ("sendtokiya@gmail.com") }}</a></li>
					<li style="color: #c92f2f;"><a href="tel:+251913078029" target="_blank" style="color: #c92f2f;">{{ ("+251-913-078-029") }}</a></li>
					<li style="color: #c92f2f;"><a href="https://facebook.com/JoshKiyakoo" target="_blank" style="color: #c92f2f;">{{ ("Facebook") }}</a></li>
					<li style="color: #c92f2f;"><a href="https://t.me/JoshKiyakoo" target="_blank" style="color: #c92f2f;">{{ ("Telegram") }}</a></li>
				</ul>
			</div>
	  	</div>

	  	<div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>
	</footer>
	<!-- Footer End-->

	<!-- Java Script
	================================================== -->
	<script src="{{ asset ('public/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ asset ('public/js/backstretch.js') }}"></script>
	<script src="{{ asset ('public/js/init.js') }}"></script>

</body>
</html>
