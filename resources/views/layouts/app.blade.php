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
    <!-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet"> -->
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/feather/style.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/simple-line-icons/style.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/font-awesome/css/font-awesome.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/perfect-scrollbar.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/prism.min.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("app-assets/vendors/css/chartist.min.css")}}'>
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link href="{{ asset('css/inputmask.min.css') }}" type="text/css" rel="stylesheet"/>
    <link rel='stylesheet' href="{{ asset('css/fullcalendar.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/scheduler.min.css') }}">
    



    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <style type="text/css">
    /* =============================================
* RADIO BUTTONS
=============================================== */

.fc-license-message{
  display: none;
}

#radios label {
  cursor: pointer;
  position: relative;
}

#radios label + label {
  margin-left: 15px;
}

input[type="radio"] {
  opacity: 0; /* hidden but still tabable */
  position: absolute;
}

input[type="radio"] + span {
  font-family: 'Material Icons';
  color: #B3CEFB;
  border-radius: 50%;
  font-size: 32px;
  padding: 12px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
}

input[type="radio"]:checked + span {
  color: #D9E7FD;
  background-color: #4285F4;
}

input[type="radio"]:focus + span {
  color: #fff;
}

/* ================ TOOLTIPS ================= */

#radios label:hover::before {
  content: attr(data-tooltip);
  font-family: Roboto, -apple-system, sans-serif;
  text-transform: capitalize;
  font-size: 11px;
  position: absolute;
  top: 170%;
  left: 0;
  right: 0;
  opacity: 0.75;
  background-color: #323232;
  color: #fff;  
  padding: 4px;
  border-radius: 3px;
  display: block;
}

/* =============================================
* CENTERING, CONTAINER STYLING ETC || IGNORE
=============================================== */


#radios {
  text-align: center;
  margin 0 auto;
}

.container {
  margin: 0 auto;
}


  </style>


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
            <div class="row">
              @yield('content')
            </div>    
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
          language: {
            url:'{{asset("app-assets/vendors/js/datatable/spanish.json")}}'
          }
        });

       $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '< Ant',
         nextText: 'Sig >',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
         };
         $.datepicker.setDefaults($.datepicker.regional['es']);

      $( ".fecha" ).datepicker({
        dateFormat: 'yy-mm-dd'
      });
       //$(".fecha" ).datepicker( "option", "dateFormat",'yy-mm-dd');

      $(".rut").inputmask({
            mask: "9[9.999.999]-[9|K|k]",
          });

      $(".tlf").inputmask({
          mask: "[9-9999-9999]",
        });

      $(".region").change(function(event) {
        event.preventDefault();
        $.ajax({
          url: '{{url("/comunas")}}/'+$(this).val(),
          type: 'GET',
          dataType: 'json',
        })
        .done(function(data) {
          var datos = '';
          $.each(data, function(index, val) {
             //console.log(val.comuna);
             datos+= '<option value="'+val.id+'">'+val.comuna+'</option>';
          });
          $(".comunas").html(datos);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });

      $(".notification_click").click(function(event) {
        event.preventDefault();
        var id = $(this).data("id");

        var url = $(this).attr('href');

        $.ajax({
          headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
          url: '{{ route("notifications.status") }}',
          type: 'POST',
          dataType: 'JSON',
           data: {id : id, _token: '{{csrf_token()}}'}, 
        })
        .done(function(data) {
          if (data.status) {
            window.location.href = url;
          }else{
            alert("Error!");
          }
        })
        .fail(function() {
          //console.log("error");
        })
        .always(function() {
          //console.log("complete");
        });
        
      });
    </script>
  </body>
  <!-- END : Body-->
</html>
