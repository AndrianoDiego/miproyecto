<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">


<head>
<title>VER CONSULTA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/https://use.fontawesome.com/releases/v5.6.3/css/all.css')}}"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{asset('/owl-carousel/assets/owl.carousel.min.css')}}" type="text/css">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css2/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css2/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css1/container.css')}}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{('/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{('/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{('/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/styles/categories.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/styles/categories_responsive.css')}}">
          </head>
          
          <body>
          <div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
        <img src="/images/logo.png" alt="">
			<div class="logo"><a href="#">Photogenic</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="/Layout/home">Inicio</a></li>
					<li><a href="/miweb/portafolio">Portafolio</a></li>
					<li><a href="/miweb/news">Productos</a></li>
                    <li><a href="/miweb/sobre">Acerca de</a></li>
					<li><a href="/miweb/contacto">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					
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
<br>
<br>
<br>
<!-- Home -->

	<div class="home">
		
		<div class="container">
			<div class="row">
				<div class="col">
					
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br><br><br><br>
    <center>
    <h2> CONSULTA DE CLIENTE </h2>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{route('Sesiones.index')}}"> Back </a>
            </div>
            </div>
          </div></center>
          <center><br><br><br>
        <form action="{{ route('Sesiones.show', $sesiones->id) }}" method="POST">
        {{csrf_field() }}
        
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Nombre: </strong>
                    {{$sesiones->nombre2}}
                </div>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Paterno: </strong>
                    {{$sesiones->paterno}}
                </div>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Materno: </strong>
                    {{$sesiones->materno}}
                </div>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Email: </strong>
                    {{$sesiones->email}}
                </div>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Edad: </strong>
                    {{$sesiones->edad}}
                </div>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Fecha: </strong>
                    {{$sesiones->fecha}}
                </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong> Albunes: </strong>
                    {{$sesiones->albunes}}
                </div>
            </div>
          </div>  
          <script src="{{('/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('/styles/bootstrap4/popper.js')}}"></script>
<script src="{{('/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('/plugins/easing/easing.js')}}"></script>
<script src="{{('/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{('/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{('/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js')}}"></script>
<script src="{{('/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{('/js/categories_custom.js')}}"></script>

    <script src="{{asset('/js1/jquery.min.js')}}"></script>
    <script src="{{asset('/js1/bootstrap.min.js')}}"></script>
    <script src="{{asset('/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js1/isotope-docs.min.js?6')}}"></script>
    <script src="{{asset('/js1/main.js')}}"></script>
        </body>
    </html>