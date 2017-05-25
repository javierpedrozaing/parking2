<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', ' Laravel javier')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>     
        {{-- <linkrel="stylesheet"href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}"> --}}
    </head>
    <body>
    <div class="container" style="border:1px solid #337AB7;">
    <header>
       <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="">INICIO</a></li>
          <li><a href="">LISTADO DE LUGARES</a></li>  
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Reportes <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="">Ingresos por Fecha </a>
                  <a href=""></a>
                  <a href=""></a>
              </li>
            </ul>
          </li>
          <li><a href="">ADMINISTRACIÓN</a></li>  
        </ul>
    </header>  


        @yield('contentForm');  
     <footer>
       
   </footer>  
    </div>

    

  

    <script>
                
        $("#entrada").click(function(){
           $.ajax({
                url: "{{ route('entrada')}}",
                data: "name="+name+"&_token={{ csrf_token()}}",
                dataType: "json",
                method: "POST",
                success: function(result)
                {
                    if (result['result'] == 'ok')
                    {

                    }
                    else
                    {

                    }
                },
                fail: function(){
                },
                beforeSend: function(){
                }
            });
        });

    </script>

    </body>
</html>
