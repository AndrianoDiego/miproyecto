<!DOCTYPE html>
<html lang="en">
<head>
<title>Photogenic</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/responsive.css')}}">


</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
        <img src="images/logo.png" alt="">
			<div class="logo"><a href="#">Photogenic</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="/miweb/portafolio">Portafolio</a></li>
					<li><a href="/miweb/news">Productos</a></li>
                    <li><a href="/miweb/sobre">Acerca de</a></li>
					<li><a href="/miweb/contacto">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
                </div>
                </div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Photogenic</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Inicio</a></li>
				<li class="menu_mm"><a href="/miweb/portafolio">Portafolio</a></li>
				<li class="menu_mm"><a href="/miweb/news">Productos</a></li>
				<li class="menu_mm"><a href="/miweb/sobre">Acerca de</a></li>
				<li class="menu_mm"><a href="/miweb/contacto">Contacto</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->
	

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Bienvenido</div>
							<div class="home_slider_title">CULTURA FOTOGENICA</div>
						</div>	
					</div>
				</div>


				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Bienvenido</div>
							<div class="home_slider_title">CULTURA FOTOGÉNICA</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
    
        </div>


	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Para nosotros los fotógrafos la inspiración es tan importante <br>
                        como el oxígeno para respirar.</div> <br>
						<div class="section_title">POST</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/news1.png" alt="">
							<div class="promo_content promo_content_1">
								<div class="promo_title">New</div>
								<div class="promo_subtitle"></div>
							</div>
						</div>
						<div class="promo_link"><a href="#"></a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/news2.png" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">New</div>
								<div class="promo_subtitle"></div>
							</div>
						</div>
						<div class="promo_link"><a href="#"></a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/news3.png" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">New</div>
								<div class="promo_subtitle"></div>
							</div>
						</div>
						<div class="promo_link"><a href="#"></a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Lo importante es ver aquello que resulta invisible para los demás.</div> <br>
						<div class="section_title">Un año en el extranjero.</div> 
                        
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="/images/año.jpg" alt="">
						</div>
						
						
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="/images/año1.jpg" alt="">
						</div>
						
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="/images/año2.jpg" alt="">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
    <center>
    <div class="section_subtitle">¡Adquiere con nosotros una sesión de fotos y de regalo te llevas tu álbum!</div> <br>
    </center>
    <div class="button gallery_button"><a href="/Sesiones/create">ADQUIRIR ÁLBUM</a></div>
	
	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/gallery.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_text text-center">HEMOS MEJORADO CADA VEZ MÁS PARA BRINDARTE UNA MEJOR EXPERIENCIA.</div>
					
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
		
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<img src="images/gallery_1.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<img src="images/niño2.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<img src="images/gallery_3.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<img src="images/niño.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<img src="images/gallery_5.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_6.jpg">
						<img src="images/niño1.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
			<div class="row">
			 	<a href="{{ route('login') }}"><img src="{{asset('/images/admin.png')}}"></a>
		     </div>	
				<div class="col text-center">
					<div class="footer_logo"><a href="#">Photogenic</a></div>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
                    <br>
                    <div class="container-fluid copy">
            <div class="col-lg-12">
                <p>&copy; 2020 Photogenic. All rights Reserved <a href="" target="_blank"></a>.</p>
             </div>
        </div>
					
			</div>
		</div>
	</footer>
</div>

<script src="{{('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('styles/bootstrap4/popper.js')}}"></script>
<script src="{{('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('plugins/easing/easing.js')}}"></script>
<script src="{{('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{('js/custom.js')}}"></script>
</body>
</html>