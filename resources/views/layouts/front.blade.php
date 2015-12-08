<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Milahorros</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/style.css')!!}
        {!!Html::style('css/main.css')!!}
        {!!Html::style('css/bootstrap-theme.min.css')!!}
        {!!Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')!!}
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Milahorros</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">                
            <li>
              <a href="/">Inicio</a>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Nosotros<b class="caret"></b></a>                        
              <ul class="dropdown-menu">
                <li><a href="/nosotros/">Nuestra empresa</a></li>
                <li><a href="/contacto/">Contacto</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Registrate<b class="caret"></b></a>                        
              <ul class="dropdown-menu">
                <li><a href="/usuarios/create">Registro de clientes</a></li>
                <li><a href="/empresas/create">Registro de empresas</a></li>
              </ul>
            </li>    
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Puntos milahorros<b class="caret"></b></a>                        
              <ul class="dropdown-menu">
                <li><a href="#">Ranking mensual</a></li>
                <li><a href="#">Mes específico</a></li>
                <li><a href="#">Ranking global</a></li>
              </ul>
            </li>    
            <!--                    
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contacto<b class="caret"></b></a>                        
              <ul class="dropdown-menu">
                <li><a href="/contacto/">Contacto</a></li>
              </ul>
            </li>
            -->  
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Accede<b class="caret"></b></a>                        
              <ul class="dropdown-menu">
                <li><a href="/login/">Acceso clientes</a></li>
                <li><a href="/login/">Acceso empresas</a></li>
              </ul>
            </li>                        
          </ul>    
          <!--
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form> 
          -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    @yield('content')

     <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Modulo 1</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Modulo 2</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-md-3">
          <h2>Modulo 3</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Modulo 4</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>        
      </div>
      <hr>

      <footer>
        <p>&copy; Milahorros 2015</p>
      </footer>
      
    </div> <!-- /container -->        
        {!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}
        {!!Html::script('js/vendor/bootstrap.min.js')!!}
        {!!Html::script('js/plugins.js')!!}
        {!!Html::script('js/main.js')!!}
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>