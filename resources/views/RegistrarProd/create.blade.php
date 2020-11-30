<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">


<head>
<title>REGISTRO</title>
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
	</div>
<br>
<br>
<br>
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

        <td colspan="2">
            <button type="button gallery_button"><a href="{{ route('dashboard')}}">REGRESAR</a></buttom>
        </td>
	</div>
@yield('sesiones')
<form action="{{url('/RegistrarProd')}}" method="POST">
{{csrf_field()}}
<footer class="container-fluid fh5co-footer">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>LLENA EL FORMULARIO PARA AÑADIR PRODUCTOS.</h2>
                    
                    
                </div>

                <div class="col-lg-7">
                    <div class="form-box">
                        <h4>Ingresa tus datos aqui:</h4>
                    
                        <hr />
                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" name="nombreprod" class="form-control" id="nombreprod" class="nombreprod" placeholder="Nombre del producto:"></td> 
                                <td><input type="text" name="marca" class="form-control" id="marca" class="marca" placeholder="Marca:"> </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="proveedor" class="form-control" id="proveedor" class="proveedor" placeholder="Proveedor:"></td>
                                <td><input type="text" name="precio" class="form-control" id="precio" class="precio" placeholder="Precio:"> </td>
                            </tr> 
                            
                            <tr>
                                <td><input type="text" name="cantidad" class="form-control" id="cantidad" class="cantidad" placeholder="Cantidad:"> </td>
                                
                            </tr>

                            
                            <tr>
                                <td colspan="2">
                                    <button type="button gallery_button">
                                        ENVIAR
                                    </button>
                                <td>
                                   <button type="button gallery_button"><a href="{{ route('RegistrarProd.index')}}">CONSULTA</a></buttom>
                                   </td> 

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