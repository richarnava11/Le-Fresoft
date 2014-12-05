<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le-Fresoft</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--<body style="padding-bottom: 30px;">-->
  <body style="background:white">

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <div align="center">
    <img src="/assets/fresas" height="250" width="250">
    </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost:8000"><font color="red">Inicio</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
        <li class="active"><a href="http://localhost:8000/users"><font color="blue">Usuarios</font></a></li>
        <!--<li><a href="http://localhost:8000/products"><font color="blue">Productos</font></a></li>-->
        <li class="product">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="blue">Producto </font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="http://localhost:8000/products/create"><font color="blue">Agregar Productos</font></a></li>
          <li><a href="http://localhost:8000/products"><font color="blue">Productos</font></a></li>
          </ul>
          </li>


          <li class="entrance">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="blue">Entradas </font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="http://localhost:8000/entrances/create"><font color="blue">Agregar Entrada</font></a></li>
          <li><a href="http://localhost:8000/entrances"><font color="blue">Entradas</font></a></li>
          </ul>
          </li>

          <li class="exit">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="blue">Salidas-Ventas </font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="http://localhost:8000/exits/create"><font color="blue">Agregar Venta</font></a></li>
          <li><a href="http://localhost:8000/exits"><font color="blue">Ventas</font></a></li>
          </ul>
          </li>


  
          <li><a href="http://localhost:8000/details"><font color="blue">Detalles</font></a></li>
          
          


        <li class="dropdown">
           <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mas Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Acción</a></li>
            <li><a href="#">Otra acción</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="http://localhost:8000/entrances">Entradas</a></li>
          </ul>-->
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <!--<ul class="nav navbar-nav navbar-right">
        <li class="salir">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red">Salir </font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cerrar Sesion</a></li>
            <li class="divider"></li>
          </ul>
        </li>-->
        <p class="nav navbar-nav navbar-right">
        @if ( Auth::check())
        {{ Auth::user()->nombre}} | <a href="{{ URL::to ('logout') }}">Cerrar Sesion</a>
        @else
        <a href="{{ URL::to ('login') }}">Login</a>
        @endif
          
        </p>
        
        

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
    	<div class="col-md-6">
<!--
<div class="btn-group">
  <button type="button" class="btn btn-default" href="http://localhost:8000/posts">Post</button>
  <button type="button" class="btn btn-default" href="http://localhost:8000/coments" >Comentarios</button>
  <button type="button" class="btn btn-default" href="http://localhost:8000/users" >User</button>
</div>
-->
		        @yield('main')


		    </div>
		    <div class="col-md-1">
		    </div>
		   
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/assets/js/jquery-1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.js"></script>
  </body>
</html>
