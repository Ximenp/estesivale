<html>
<head>
	<title>Makeups -@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="welcome" style="font-family: 'TradeGothicLTStd-Light';">Yanbal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="makeups">Maquillaje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="fragrances">Fragrance</a>
            </li>
            
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))

                <div class="top-right links">
                 
                    @auth
                        <a href="{{ url('/vista1') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
          </form>
      </nav>

	<div class="container">
		@yield('content')
	</div>
<br>
    
      
  <div class="p-3 mb-2 bg-dark text-white">
        <p class="text-center" style="font-family: 'TradeGothicLTStd-Light'; background-color: '#000' ; ">Conoce nuestro catalogo.      
        </p>
     
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Yanbal</a></p>
      </footer>
      </div>
   

</body>
</html>