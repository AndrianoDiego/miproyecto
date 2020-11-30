<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

          <title> MODIFICACIONES </title>

          <!--Fonts-->
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">

          <!--Styles-->
          <style>
               html.body{
                    background-color: #099E58;
                    color: #E8F3EE;
                    font-family: 'Verdana', sans-serif;
                    font-weight: 100;
                    height:100vh;
               }
               </style>
          </head>
          
          <body>
          <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull left">
                    <h2> EDICIONES </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Clientes.index')}}">BACK </a>
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

    <form action="{{ route('Clientes.update', $clientes->id) }}" method="POST" enctype="multipart/form-data">
          {{csrf_field() }}
        {{ method_field('PATCH')}}

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="nombre"> {{'NOMBRE'}} </label>
                <input type="text" name="nombre1" id="nombre1" value="{{ $clientes->nombre1}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="paterno"> {{'PATERNO'}} </label>
                <input type="text" name="paterno" id="paterno" value="{{ $clientes->paterno}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="materno"> {{'MATERNO'}} </label>
                <input type="text" name="materno" id="materno" value="{{ $clientes->materno}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'EDAD'}} </label>
                <input type="text" name="edad" id="edad" value="{{ $clientes->edad}}" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'DIA'}} </label>
                <input type="text" name="dia" id="dia" value="{{ $clientes->dia}}" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="edad"> {{'EVENTO'}} </label>
                <input type="text" name="evento" id="evento" value="{{ $clientes->evento}}" class="form-control">
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> SUBMIT </button>
                </div>
            </div>
         </div>
    </body>
</html>  