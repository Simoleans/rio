<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href='{{asset("app-assets/fonts/feather/style.min.css")}}'>
</head> 
<style type="text/css">
 
table {
     width:300px;
     table-layout:fixed;
}
td {
     word-wrap:break-word;
}

@media print {
    html, body {
        height: 99%;    
    }

    .pagebreak {
        clear: both;
        page-break-after: always;
    }
}


</style>
<body>
<div class="main-content">
  <div class="content-wrapper">
  	<h3>Arriendo Maquina {{strtoupper($devolucion->arriendo->maquina->nombre)}}</h3>
    <div class="card-content">
      <div class="card-body"> 
        <div class="row">
          <div class="col-md-11">
            <table class="table">
              <thead>
                <tr>
                  <th>COMBUSTIBLE</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tanque</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_tanque?$devolucion->arriendo->combustible->combustible_ob_tanque:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_tanque?$devolucion->combustible->combustible_ob_tanque:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Medidor N.</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_medidor_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_medidor_nivel?$devolucion->arriendo->combustible->combustible_ob_medidor_nivel:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_medidor_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_medidor_nivel?$devolucion->combustible->combustible_ob_medidor_nivel:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Tapón</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_tapon == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_tapon?$devolucion->arriendo->combustible->combustible_ob_tapon:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_tapon == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_tapon?$devolucion->combustible->combustible_ob_tapon:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Fugas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_fugas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->cobustible_ob_fugas?$devolucion->arriendo->combustible->cobustible_ob_fugas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_fugas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->cobustible_ob_fugas?$devolucion->combustible->cobustible_ob_fugas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cebador</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_cebador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_cebador?$devolucion->arriendo->combustible->combustible_ob_cebador:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_cebador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_cebador?$devolucion->combustible->combustible_ob_cebador:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Primario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_filtro_primario?$devolucion->arriendo->combustible->combustible_ob_filtro_primario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_filtro_primario?$devolucion->combustible->combustible_ob_filtro_primario:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Secundario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_filtro_secundario?$devolucion->arriendo->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_filtro_secundario?$devolucion->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                </tr>
              </tbody>
            </table>
            <table class="table">
               <thead>
                <tr>
                  <th>HIDRÁULICO</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bombas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_bombas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_bombas?$devolucion->arriendo->hidraulico->hidraulico_ob_bombas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_bombas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_bombas?$devolucion->hidraulico->hidraulico_ob_bombas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Tanque</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_tanque?$devolucion->arriendo->hidraulico->hidraulico_ob_tanque:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_tanque?$devolucion->hidraulico->hidraulico_ob_tanque:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Nivel</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_nivel?$devolucion->arriendo->hidraulico->hidraulico_ob_nivel:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_nivel?$devolucion->hidraulico->hidraulico_ob_nivel:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Tapón</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_tapon == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_tapon?$devolucion->arriendo->hidraulico->hidraulico_ob_tapon:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_tapon == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_tapon?$devolucion->hidraulico->hidraulico_ob_tapon:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Visor</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_visor == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_visor?$devolucion->arriendo->hidraulico->hidraulico_ob_visor:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_visor == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_visor?$devolucion->hidraulico->hidraulico_ob_visor:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Primario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_filtro_primario?$devolucion->arriendo->hidraulico->hidraulico_ob_filtro_primario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_filtro_primario?$devolucion->hidraulico->hidraulico_ob_filtro_primario:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Secundario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_filtro_secundario?$devolucion->arriendo->hidraulico->hidraulico_ob_filtro_secundario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_filtro_secundario?$devolucion->hidraulico->hidraulico_ob_filtro_secundario:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cilindros Fugas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_cilindros_fuga == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_cilindros_ob_fuga?$devolucion->arriendo->hidraulico->hidraulico_cilindros_ob_fuga:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_cilindros_fuga == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_cilindros_ob_fuga?$devolucion->hidraulico->hidraulico_cilindros_ob_fuga:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cilindros Sellos</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_cilindros_sellos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_cilindros_ob_sellos?$devolucion->arriendo->hidraulico->hidraulico_cilindros_ob_sellos:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_cilindros_sellos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_cilindros_ob_sellos?$devolucion->hidraulico->hidraulico_cilindros_ob_sellos:'N/T'}}</td>
                </tr>
              </tbody>
            </table>
            <table class="table">
               <thead>
                <tr>
                  <th>AIRE</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Filtro Primario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->aire->air_filtro_pri == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->aire->air_ob_filtro_pri?$devolucion->arriendo->aire->air_ob_filtro_pri:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->aire->air_filtro_pri == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->aire->air_ob_filtro_pri?$devolucion->aire->air_ob_filtro_pri:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Secundario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->aire->air_filtro_sec == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->aire->air_ob_filtro_sec?$devolucion->arriendo->aire->air_ob_filtro_sec:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->aire->air_filtro_sec == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->aire->air_ob_filtro_sec?$devolucion->aire->air_ob_filtro_sec:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Portafiltro</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->aire->air_portafiltro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->aire->air_ob_portafiltro?$devolucion->arriendo->aire->air_ob_portafiltro:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->aire->air_portafiltro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->aire->air_ob_portafiltro?$devolucion->aire->air_ob_portafiltro:'N/T'}}</td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <table class="table">
               <thead>
                <tr>
                  <th>MOTOR</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Fugas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_fugas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_fugas?$devolucion->arriendo->motor->motor_ob_fugas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_fugas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_fugas?$devolucion->motor->motor_ob_fugas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Nivel Aceite</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_n_aceite == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_naceite?$devolucion->arriendo->motor->motor_ob_naceite:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_n_aceite == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_naceite?$devolucion->motor->motor_ob_naceite:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Estado Aceite</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_e_aceite == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_eaceite?$devolucion->arriendo->motor->motor_ob_eaceite:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_e_aceite == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_eaceite?$devolucion->motor->motor_ob_eaceite:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Varilla p/medir</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->varilla_medir == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_varilla?$devolucion->arriendo->motor->motor_ob_varilla:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->varilla_medir == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_varilla?$devolucion->motor->motor_ob_varilla:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Junta Camara</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_jcamaras == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_jcamaras?$devolucion->arriendo->motor->motor_ob_jcamaras:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_jcamaras == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_jcamaras?$devolucion->motor->motor_ob_jcamaras:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Junta Culata</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_jculata == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_jculata?$devolucion->arriendo->motor->motor_ob_jculata:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_jculata == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_jculata?$devolucion->motor->motor_ob_jculata:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Retén Cigueñal</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_rciguenal == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_rciguenal?$devolucion->arriendo->motor->motor_ob_rciguenal:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_rciguenal == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_rciguenal?$devolucion->motor->motor_ob_rciguenal:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Tapas Valvulas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_tvalvulas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_tvalvulas?$devolucion->arriendo->motor->motor_ob_tvalvulas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_tvalvulas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_tvalvulas?$devolucion->motor->motor_ob_tvalvulas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cilindros Sellos</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->hidraulico_cilindros_sellos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->hidraulico_cilindros_ob_sellos?$devolucion->arriendo->motor->hidraulico_cilindros_ob_sellos:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->hidraulico_cilindros_sellos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->hidraulico_cilindros_ob_sellos?$devolucion->motor->hidraulico_cilindros_ob_sellos:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_filtro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_filtro?$devolucion->arriendo->motor->motor_ob_filtro:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_filtro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_filtro?$devolucion->motor->motor_ob_filtro:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Primario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->motor->motor_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->motor->motor_ob_filtro_primario?$devolucion->arriendo->motor->motor_ob_filtro_primario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->motor->motor_filtro_primario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->motor->motor_ob_filtro_primario?$devolucion->motor->motor_ob_filtro_primario:'N/T'}}</td>
                </tr>
              </tbody>
               
            </table>
            <table class="table">
               <thead>
                <tr>
                  <th>RADIADOR</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Portafiltro</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->radiador->rad_portafiltro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->radiador->rad_ob_portafiltro?$devolucion->arriendo->radiador->rad_ob_portafiltro:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->radiador->rad_portafiltro == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->radiador->rad_ob_portafiltro?$devolucion->radiador->rad_ob_portafiltro:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Radiador</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->radiador->rad_radiador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->radiador->rad_ob_radiador?$devolucion->arriendo->radiador->rad_ob_radiador:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->radiador->rad_radiador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->radiador->rad_ob_radiador?$devolucion->radiador->rad_ob_radiador:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Ventilador</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->radiador->rad_ventilador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->radiador->rad_ob_ventilador?$devolucion->arriendo->radiador->rad_ob_ventilador:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->radiador->rad_ventilador == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->radiador->rad_ob_ventilador?$devolucion->radiador->rad_ob_ventilador:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Refrigerante Estado</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->radiador->rad_refrigerante_est == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->radiador->rad_ob_refrigerate_est?$devolucion->arriendo->radiador->rad_ob_refrigerate_est:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->radiador->rad_refrigerante_est == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->radiador->rad_ob_refrigerate_est?$devolucion->radiador->rad_ob_refrigerate_est:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Refrigerante Nivel</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->radiador->rad_refrigerante_niv == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->radiador->rad_ob_refrigerante_niv?$devolucion->arriendo->radiador->rad_ob_refrigerante_niv:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->radiador->rad_refrigerante_niv == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->radiador->rad_ob_refrigerante_niv?$devolucion->radiador->rad_ob_refrigerante_niv:'N/T'}}</td>
                </tr>
              </tbody>   
            </table>
           
            <table class="table">
               <thead>
                <tr>
                  <th>OTROS</th><br>
                  <th class="text-center">Arriendo<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                  <th class="text-center">Devolución<br><small>Estado</small></th>
                  <th class="text-center">Observación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Limpieza General</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->limpieza_general == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_limpieza_general?$devolucion->arriendo->otros->ob_limpieza_general:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->limpieza_general == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_limpieza_general?$devolucion->otros->ob_limpieza_general:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Latas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->latas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_latas?$devolucion->arriendo->otros->ob_latas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->latas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_latas?$devolucion->otros->ob_latas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Mangueras</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->mangueras == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_mangueras?$devolucion->arriendo->otros->ob_mangueras:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->mangueras == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_mangueras?$devolucion->otros->ob_mangueras:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cableado General</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->cableado_general == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_cableado_general?$devolucion->arriendo->otros->ob_cableado_general:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->cableado_general == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_cableado_general?$devolucion->otros->ob_cableado_general:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Paletas Resortes</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->paletas_resortes == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_paletas_resortes?$devolucion->arriendo->otros->ob_paletas_resortes:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->paletas_resortes == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_paletas_resortes?$devolucion->otros->ob_paletas_resortes:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Agitadores Palillos</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->agitadores_palillos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_agitadores_palillos?$devolucion->arriendo->otros->ob_agitadores_palillos:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->agitadores_palillos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_agitadores_palillos?$devolucion->otros->ob_agitadores_palillos:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Rodamientos</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->rodamientos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_rodamientos?$devolucion->arriendo->otros->ob_rodamientos:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->rodamientos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_rodamientos?$devolucion->otros->ob_rodamientos:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Correas Poleas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->correas_poleas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_correas_poleas?$devolucion->arriendo->otros->ob_correas_poleas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->correas_poleas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_correas_poleas?$devolucion->otros->ob_correas_poleas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cintas Bandas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->cintas_bandas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_cintas_bandas?$devolucion->arriendo->otros->ob_cintas_bandas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->cintas_bandas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_cintas_bandas?$devolucion->otros->ob_cintas_bandas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Sopladores</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->sopladores == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_sopladores?$devolucion->arriendo->otros->ob_sopladores:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->sopladores == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_sopladores?$devolucion->otros->ob_sopladores:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Piso Techo</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->piso_techo == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_piso_techo?$devolucion->arriendo->otros->ob_piso_techo:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->piso_techo == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_piso_techo?$devolucion->otros->ob_piso_techo:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Asiento</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->asiento == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_asiento?$devolucion->arriendo->otros->ob_asiento:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->asiento == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_asiento?$devolucion->otros->ob_asiento:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Palanca Mando</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->palanca_mando == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_palanca_mando?$devolucion->arriendo->otros->ob_palanca_mando:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->palanca_mando == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_palanca_mando?$devolucion->otros->ob_palanca_mando:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Panel Interruptores</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->panel_interruptores == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_panel_interruptores?$devolucion->arriendo->otros->ob_panel_interruptores:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->panel_interruptores == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_panel_interruptores?$devolucion->otros->ob_panel_interruptores:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Batería</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->bateria == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_bateria?$devolucion->arriendo->otros->ob_bateria:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->bateria == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_bateria?$devolucion->otros->ob_bateria:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Interruptor Batería</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->interruptor_bateria == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_interruptor_bateria?$devolucion->arriendo->otros->ob_interruptor_bateria:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->interruptor_bateria == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_interruptor_bateria?$devolucion->otros->ob_interruptor_bateria:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Caja Fusibles</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->rodamientos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_rodamientos?$devolucion->arriendo->otros->ob_rodamientos:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->rodamientos == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_rodamientos?$devolucion->otros->ob_rodamientos:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Sensores De Inclinación</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->sensores_inclinacion == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_sensores_inclinacion?$devolucion->arriendo->otros->ob_sensores_inclinacion:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->sensores_inclinacion == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_sensores_inclinacion?$devolucion->otros->ob_sensores_inclinacion:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Bocina</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->bocina == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_bocina?$devolucion->arriendo->otros->ob_bocina:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->bocina == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_bocina?$devolucion->otros->ob_bocina:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Bip Retroceso</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->bip_retroceso == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_bip_retroceso?$devolucion->arriendo->otros->ob_bip_retroceso:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->bip_retroceso == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_bip_retroceso?$devolucion->otros->ob_bip_retroceso:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Iluminación</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->iluminacion == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_iluminacion?$devolucion->arriendo->otros->ob_iluminacion:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->iluminacion == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_iluminacion?$devolucion->otros->ob_iluminacion:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Neumaticos/Llantas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->neumaticos_llantas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_neumaticos_llantas?$devolucion->arriendo->otros->ob_neumaticos_llantas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->neumaticos_llantas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_neumaticos_llantas?$devolucion->otros->ob_neumaticos_llantas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Motor Ruedas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->otros->motor_ruedas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->otros->ob_motor_ruedas?$devolucion->arriendo->otros->ob_motor_ruedas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->otros->motor_ruedas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->otros->ob_motor_ruedas?$devolucion->otros->ob_motor_ruedas:'N/T'}}</td>
                </tr>
              </tbody>   
            </table>

          </div>
        </div>
      </div>
       <div class="pagebreak"> </div>
<br><br>
    <section id="photos">
  	  <div class="row">
  	    <div class="col-6">
          <table class="table table-borderless">
          <thead>
            <tr>
              <th class="text-center"><h3>Arriendo</h3></th>
            </tr>
          </thead>
          <tbody>
            @foreach($devolucion->arriendo->fotos as $f)
              <tr> 
                  <td class="text-center"><img class="img-thumbnail img-fluid rounded mx-auto d-block" src="{{asset('fotos'.'/'.$f->foto)}}" itemprop="thumbnail" alt="Image description" /></td>        
              </tr>
            @endforeach
          </tbody>
          </table>
  	    </div>
        <div class="col-6">
          <table class="table table-borderless">
          <thead>
            <tr>
              <th class="text-center"><h3>Devolución</h3></th>
            </tr>
          </thead>
          <tbody>
            @foreach($devolucion->fotos as $f)
              <tr>
                  <td><img class="img-thumbnail img-fluid rounded mx-auto d-block" src="{{asset('fotos/devolucion'.'/'.$f->foto)}}" itemprop="thumbnail" alt="Image description" /></td>    
              </tr>
            @endforeach
          </tbody>
          </table>
        </div>
  	  </div>
  	</section>
   
  </div> <!-- fin content wrapper -->
</div><!-- fin main -->
</body>
</html>


<script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
 

 (function(a) {
	(jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
	})(navigator.userAgent || navigator.vendor || window.opera);

	if(!jQuery.browser.mobile){
	 window.print();
	        setTimeout("closePrintView()", 4000);
	}

	function closePrintView() {
	        document.location.href = '{{route("devolucion.index")}}';
	    }
</script>