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
                  <td class="text-center">{{$devolucion->arriendo->combustible->hidraulico_ob_bombas?$devolucion->arriendo->combustible->hidraulico_ob_bombas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_bombas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->hidraulico_ob_bombas?$devolucion->combustible->hidraulico_ob_bombas:'N/T'}}</td>
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
                <tr>
                  <td>Cilindros Fugas</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_filtro_secundario?$devolucion->arriendo->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_filtro_secundario?$devolucion->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Cilindros Sellos</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->combustible_ob_filtro_secundario?$devolucion->arriendo->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->combustible->combustible_filtro_secundario == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->combustible_ob_filtro_secundario?$devolucion->combustible->combustible_ob_filtro_secundario:'N/T'}}</td>
                </tr>
              </tbody>
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
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_bombas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->combustible->hidraulico_ob_bombas?$devolucion->arriendo->combustible->hidraulico_ob_bombas:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_bombas == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->combustible->hidraulico_ob_bombas?$devolucion->combustible->hidraulico_ob_bombas:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Filtro Secundario</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_tanque?$devolucion->arriendo->hidraulico->hidraulico_ob_tanque:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_tanque == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_tanque?$devolucion->hidraulico->hidraulico_ob_tanque:'N/T'}}</td>
                </tr>
                <tr>
                  <td>Portafiltro</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->arriendo->hidraulico->hidraulico_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->arriendo->hidraulico->hidraulico_ob_nivel?$devolucion->arriendo->hidraulico->hidraulico_ob_nivel:'N/T'}}</td>
                  <td class="text-center"><span class="d-block overflow-hidden"><i class="{{$devolucion->hidraulico->hidraulico_nivel == 1?'ft-check-circle text-success':'ft-x text-danger'}}"></i></span></td>
                  <td class="text-center">{{$devolucion->hidraulico->hidraulico_ob_nivel?$devolucion->hidraulico->hidraulico_ob_nivel:'N/T'}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    <section id="photos">
	  <div class="row">
	    <div class="col-12">
	      <div class="card">
	        <!-- <div class="card-header">
	          <h5>Photos Uploaded</h5>
	        </div> -->
	        <div class="card-content">
	          <div class="card-body">
	          	 <h3><strong>Fotos</strong></h3>
	            <div class="row">
	              @foreach($devolucion->arriendo->fotos as $f)
	              <figure class="col-lg-3 col-md-6 col-12">
	                <img class="img-thumbnail img-fluid" src="{{asset('fotos'.'/'.$f->foto)}}" itemprop="thumbnail" alt="Image description" />
	              </figure>
	              @endforeach
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>


	<h3>Devolución Maquina {{strtoupper($devolucion->arriendo->maquina->nombre)}}</h3>
	<div class="card-content">
      <div class="card-body">
        <h3><strong>Combustible</strong></h3>
        <hr>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <ul class="no-list-style">
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Combustible Tanque:</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_tanque == 1?'Si':'No'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Observación (Combustible Tanque):</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_tanque?$devolucion->combustible->combustible_ob_tanque:'N/T'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a>Medidor Nivel (Combustible):</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_medidor_nivel == 1?'Si':'No'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Observación (Medidor Nivel):</a></span>
                 <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_medidor_nivel?$devolucion->combustible->combustible_ob_medidor_nivel:'N/T'}}</span>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <ul class="no-list-style">
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Tapón (Combustible):</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_tapon == 1?'Si':'No'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Tapón (Observación):</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_tanque?$devolucion->combustible->combustible_ob_tanque:'N/T'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Cebador (Combustible):</a></span>
                <a class="d-block overflow-hidden">{{$devolucion->combustible->combustible_cebador == 1?'Si':'No'}}</a>
              </li>
               <li class="mb-2">
                <span class="text-bold-500 primary"><a> Cebador (Observación):</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_cebador?$devolucion->combustible->combustible_ob_cebador:'N/T'}}</span>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <ul class="no-list-style">
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Filtro Primario:</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_filtro_primario == 1?'Si':'No'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Filtro Primario (Observación):</a></span>
               <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_filtro_primario?$devolucion->combustible->combustible_ob_filtro_primario:'N/T'}}</span>
              </li>
              <li class="mb-2">
                <span class="text-bold-500 primary"><a> Filtro Secundario:</a></span>
                <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_filtro_secundario == 1?'Si':'No'}}</span>
              </li>
               <li class="mb-2">
                <span class="text-bold-500 primary"><a> Filtro Secundario (Observación):</a></span>
               <span class="d-block overflow-hidden">{{$devolucion->combustible->combustible_ob_filtro_secundario?$devolucion->combustible->combustible_ob_filtro_secundario:'N/T'}}</span>
              </li>
            </ul>
          </div>
        </div> <!-- fin row -->
        <hr>
      </div>
    </div>

    <section id="photos">
	  <div class="row">
	    <div class="col-12">
	      <div class="card">
	        <!-- <div class="card-header">
	          <h5>Photos Uploaded</h5>
	        </div> -->
	        <div class="card-content">
	          <div class="card-body">
	          	 <h3><strong>Fotos</strong></h3>
	            <div class="row">
	              @foreach($devolucion->fotos as $f)
	              <figure class="col-lg-3 col-md-6 col-12">
	                <img class="img-thumbnail img-fluid" src="{{asset('fotos/devolucion'.'/'.$f->foto)}}" itemprop="thumbnail" alt="Image description" />
	              </figure>
	              @endforeach
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
  </div> <!-- fin content wrapper -->
</div><!-- fin main -->
</body>
</html>


<script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<!-- <script type="text/javascript">
 

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
</script> -->