<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Rio - VeanX</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('app-assets/img/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('app-assets/img/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('app-assets/img/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('app-assets/img/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('app-assets/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/feather/style.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/simple-line-icons/style.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/font-awesome/css/font-awesome.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/perfect-scrollbar.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/prism.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/chartist.min.css")}}'>
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="2-columns" class=" 2-columns  layout-dark">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
     @include('layouts.menu')


     @include('layouts.navbar')


    <div class="main-panel"> <!-- inicio del dashboard -->
        <!-- BEGIN : Main Content-->
     <!-- CONTENIDO -->
       <div class="main-content">
          <div class="content-wrapper">
            @yield('content')
          </div>
      </div>

        <!-- END : End Main Content-->

       @include('layouts.footer')

      </div>
    <!-- </div> -->
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('layouts.script')

    <!-- Custom SCRIPT por Pagina -->
    @yield('script')
    <script type="text/javascript">
      $(".dataTable").DataTable({
          responsive: true,
          language: {
            url:'{{asset("app-assets/vendors/js/datatable/spanish.json")}}'
          }
        });
    </script>
  </body>
  <!-- END : Body-->
</html>
