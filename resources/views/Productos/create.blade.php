<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">


<head>
<title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/https://use.fontawesome.com/releases/v5.6.3/css/all.css')}}"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{asset('/owl-carousel/assets/owl.carousel.min.css')}}" type="text/css">

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
	
	
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/images/azul1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@yield('sesiones')
<form action="{{url('/Productos')}}" method="POST">
{{csrf_field()}}
<footer class="container-fluid fh5co-footer">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Completa el formulario par saber lo que deseas.</h2>
                    
                    
                </div>

                <div class="col-lg-7">
                    <div class="form-box">
                        <h4>Ingresa tus datos aqui:</h4>
                    
                        <hr />
                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" name="nombre3" class="form-control" id="nombre3" class="nombre3" placeholder="Nombre:"></td> 
                                <td><input type="text" name="apellidos" class="form-control" id="apellidos" class="apellidos" placeholder="Apellidos:"> </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="telefono" class="form-control" id="telefono" class="telefono" placeholder="Telefono:"></td>
                                <td><input type="text" name="dirección" class="form-control" id="dirección" class="direcció n" placeholder="Dirección:"> </td>
                            </tr> 
                            
                            <tr>
                                <td><input type="text" name="cantidad" class="form-control" id="cantidad" class="cantidad" placeholder="Cantidad:"> </td>
                                <td><input type="text" name="color" class="form-control" id="color" class="color" placeholder="Color:"></td> 
                            </tr>
                            <tr>
                                <td><input type="date" name="fecha" class="form-control" id="fecha" class="fecha" placeholder="Fecha:">
                                </td>
                            </tr>

                            
                            <tr>
                                <td colspan="2">
                                    <button type="button gallery_button">
                                        ENVIAR
                                    </button>
                 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <footer class="footer">
		<div class="container">
			<div class="row">
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
					<div class="col-lg-12">
                <p>&copy; 2020 Photogenic. All rights Reserved <a href="" target="_blank"></a>.</p>
             </div>
				</div>
			</div>
		</div>
	</footer>
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