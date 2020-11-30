<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">


<head>
<title>MODIFICACIONES</title>
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
          <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull left">
                    <h2> EDICIONES </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Productos.index')}}">BACK </a>
                </div>
            </div>
          </div>

          @if ($errors->any())
        <div class="alert alert-danger">
        <strong>SOS</strong> FAVOR DE VERIFICAR <br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('Productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
          {{csrf_field() }}
        {{ method_field('PATCH')}}

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="nombre"> {{'NOMBRE'}} </label>
                <input type="text" name="nombre3" id="nombre3" value="{{ $producto->nombre3}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="paterno"> {{'APELLIDOS'}} </label>
                <input type="text" name="apellidos" id="apellidos" value="{{ $producto->apellidos}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="materno"> {{'TELEFONO'}} </label>
                <input type="text" name="telefono" id="telefono" value="{{ $producto->telefono}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'DIRECCION'}} </label>
                <input type="text" name="dirección" id="dirección" value="{{ $producto->direccion}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'CANTIDAD'}} </label>
                <input type="text" name="cantidad" id="cantidad" value="{{ $producto->cantidad}}" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'COLOR'}} </label>
                <input type="text" name="color" id="color" value="{{ $producto->color}}" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'FECHA'}} </label>
                <input type="text" name="fecha" id="fecha" value="{{ $producto->fecha}}" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> SUBMIT </button>
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