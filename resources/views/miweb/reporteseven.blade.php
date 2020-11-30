<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE PRODUCTOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 2cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>Generación de reporte</strong></p>
    </header>
    <main>
    
        <div class="container">
        <br><br><br>
            <h5 style="text-align: center"><strong>TABLA DE PRODUCTOS</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Materno</th>
                        <th scope="col">Paterno</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Albunes</th>
                    </tr>
                </thead>
               <tbody>
                @foreach ($eventos as $even)
          <tr>

               <td>{{ $even->id}} </td>
               <td>{{ $even->nombre1}} </td>
               <td>{{ $even->paterno }} </td>
               <td>{{ $even->materno }} </td>
               <td>{{ $even->edad }} </td>
               <td>{{ $even->dia }} </td>
               <td>{{ $even->evento }} </td>
          <td>

     </td>
     </tr>
     @endforeach


                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p><strong></strong></p>
    </footer>
</body>
</html>