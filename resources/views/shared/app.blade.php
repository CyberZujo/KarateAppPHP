<!DOCTYPE HTML>
<html>
@include('partials.head')
<body>
		
	
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Kontakt telefon: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="https://www.facebook.com/karate.klubbregava/"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div id="fh5co-logo"><a href="index.html">KK Bregava<span>.</span></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="/KKBregavaApp/home">Početna</a></li>
							<li><a href="/KKBregavaApp/posts">Obavijesti</a></li>
							<li><a href="/KKBregavaApp/members">Članovi</a></li>
							<li><a href="/KKBregavaApp/gallery">Galerija</a></li>
							<!--<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>-->
							<li><a href="contact.html">Kontakt</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
                @yield('content')
    
    <footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);" role="contentinfo">
		<div class="overlay"></div>
		

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
    <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

    <!-- jQuery -->
	<script src="{{ URL::asset('public')}}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::asset('public')}}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::asset('public')}}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('public')}}/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{ URL::asset('public')}}/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="{{ URL::asset('public')}}/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="{{ URL::asset('public')}}/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="{{ URL::asset('public')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ URL::asset('public')}}/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="{{ URL::asset('public')}}/js/main.js"></script>
	@yield('scripts')
</body>
</html>