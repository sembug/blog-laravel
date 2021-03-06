<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Keep It Simple.</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="/static/css/default.css">
	<link rel="stylesheet" href="/static/css/layout.css">
	<link rel="stylesheet" href="/static/css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="/" title="Blog">Blog</a></h1>
				<p id="intro">A simple blog...</p>

			</div>

	   </div>

	   <nav id="nav-wrap">

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">

			   	<ul id="nav" class="nav">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="archives.html">Archives</a></li>
                    <li><a href="about.html">About</a></li>
			   	</ul> <!-- end #nav -->

	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   <div id="content-wrap">
        @yield('content')
   </div> <!-- end content-wrap -->


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">

      	<div class="twelve columns">
				<ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-github-square"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
      	</div>

         <div class="six columns info">

            <h3>About Keep It Simple</h3>

            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit.
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>

         <div class="four columns">

            <h3>Photostream</h3>

            <ul class="photostream group">
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="/static/images/thumb.jpg"></a></li>
            </ul>

         </div>

         <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>

         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" src="/static/js/jquery-migrate-1.2.1.min.js"></script>
   <script src="/static/js/main.js"></script>

</body>

</html>
