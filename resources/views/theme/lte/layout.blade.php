<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
        @yield('titulo','Finis')
        </title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        @yield("styles")
    </head>


    <body class="hold-transition sidebar-mini layout-fixed">
        <!--  Site wrapper -->
        <div class="wrapper">
          
            <!-- Inicio header -->
            @include("theme/$theme/header")
            <!-- Fin header -->

            <!-- Inicio Asside -->
            @include("theme/$theme/aside")

            <!-- Fin Asside -->


            





            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

              <!-- Content Header (Page header) -->
              <section class="content-header">
                <!-- Titulo dinamico que se podrá cambiar desde los llamados en blade -->
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1> @yield('titulo-modulo') </h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('ruta-modulo')</li>
                      </ol>
                    </div>
                  </div>
                </div><!-- /.container-fluid -->
              </section>

              <section class="content">
                  @yield('contenido')
              </section>
            </div>

            <!-- Inicio Asside -->
            @include("theme/$theme/footer")
            <!-- Fin Asside -->

        </div>
        <!-- jQuery -->
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        @yield("scripts")

    </body>
</html>