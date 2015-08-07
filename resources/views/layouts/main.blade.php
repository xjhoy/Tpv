<!DOCTYPE html>
<html lang="es">
<head>

    <title>Stitch</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--Mis CSS-->
    {!!Html::style('css/main.css')!!}
    {!!Html::style('css/animate.css')!!}
    {!!Html::style('fonts/open-iconic-bootstrap.css') !!}

    <!-- Fuentes de letras -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
        <div class="container-fluid fondo-main"> 


            <nav class="navbar navbar-default espacio-arriba-20">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home texto-azul"></span> Stitch</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav margin-nav">
                    <li><a href="#"><span class="glyphicon glyphicon-refresh">
                            </span> Iniciar Turno <span class="sr-only">(current)</span></a></li>
                    <li><a href="{!!URL::to('caja')!!}"><span class="glyphicon glyphicon-shopping-cart">
                            </span> Ir a Caja</a></li>
                    <li class="dropdown">
                      <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <span class="glyphicon glyphicon-list"></span> Listados <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{!!URL::to('almacen')!!}">Almacén</a></li>
                        <li><a href="{!!URL::to('proveedores')!!}">Proveedores</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{!!URL::to('turnos')!!}">Turnos</a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- Buscar -->
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control bar-buscar" placeholder="Introducir nombre de producto o proveedor que quieras buscar">
                    </div>
                    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</button></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!--                FIN BARRA DE NAVEGACIÓN             -->
            <!-- =================================================  -->

            <!--      MODAL INICIAR SESION      -->
            <!-- ============================== -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Iniciar sesión</h4>
                </div>
                <div class="modal-body">
                    {!!Form::open(array('route'=>'log.store'))!!}
                    <div class="form-group">
                        {!! Form::label('Usuario') !!}
                        {!! Form::text('user',null,['class'=>'form-control','placeholder' => 'Introducir usuario']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Contraseña') !!}
                        {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Introducir contraseña']) !!}

                    </div>
                    {!!Form::submit('Entrar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}

                </div>
              </div>
            </div>
          </div>



          @yield('content')


        </div><!--End container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('js')

    </body>
</html>
