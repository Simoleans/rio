@extends('layouts.app')

@section('content')


<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Arriendo</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Maquina</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Marca</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->marca}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Modelo</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->modelo}}</span>
                  </li>
                </ul>
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Horas</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->horas}}</span>
                  </li>

                </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Año</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->ano}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Series</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->series}}</span>
                  </li>
                   <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Hombre</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->modelo}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <hr>
             <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> RUT</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->rut}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Razón Social</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->r_social}}</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Dirección</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->direccion}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Comuna</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->comuna}}</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Región</a></span>
                    <span class="line-height-2 d-block overflow-hidden">{{$arriendo->region}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <!-- <div class="card-header">
          <h5>Personal Information</h5>
        </div> -->
        <div class="card-content">
          <div class="card-body">
            <h3>Combustible</h3>
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Combustible Tanque:</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_tanque == 1?'Si':'No'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Observación (Combustible Tanque):</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_tanque?$arriendo->combustible->combustible_ob_tanque:'N/T'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Medidor Nivel (Combustible):</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_medidor_nivel == 1?'Si':'No'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Observación (Medidor Nivel):</a></span>
                     <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_medidor_nivel?$arriendo->combustible->combustible_ob_medidor_nivel:'N/T'}}</span>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Tapón (Combustible):</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_tapon == 1?'Si':'No'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Tapón (Observación):</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_tanque?$arriendo->combustible->combustible_ob_tanque:'N/T'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Cebador (Combustible):</a></span>
                    <a class="d-block overflow-hidden">{{$arriendo->combustible->combustible_cebador == 1?'Si':'No'}}</a>
                  </li>
                   <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Cebador (Observación):</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_cebador?$arriendo->combustible->combustible_ob_cebador:'N/T'}}</span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Filtro Primario:</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_filtro_primario == 1?'Si':'No'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Filtro Primario (Observación):</a></span>
                   <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_filtro_primario?$arriendo->combustible->combustible_ob_filtro_primario:'N/T'}}</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Filtro Secundario:</a></span>
                    <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_filtro_secundario == 1?'Si':'No'}}</span>
                  </li>
                   <li class="mb-2">
                    <span class="text-bold-500 primary"><a> Filtro Secundario (Observación):</a></span>
                   <span class="d-block overflow-hidden">{{$arriendo->combustible->combustible_ob_filtro_secundario?$arriendo->combustible->combustible_ob_filtro_secundario:'N/T'}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <hr>
            <!-- <div class="mt-3">
              <span class="text-bold-500 primary">Hobbies:</span>
              <span class="d-block overflow-hidden">I like to ride the cycle to work, swimming, listning music and
                working out. I also like reading magazines, go to museums, watching good movies and eat spicy food
                while
                it’s raining outside.Twin siblings Dipper and Mabel Pines spend the summer at their uncle's tourist
                trap
                in the enigmatic town of Gravity Falls.A mysterious Hollywood stuntman and mechanic moonlights as a
                getaway driver.Scuba Diving, Skiing, Surfing, Photography, Long drive.
              </span>
            </div>
            <div class="mt-2 overflow-hidden">
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-plane danger font-large-2"></i>
                <div class="mt-2">Travelling</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-speedometer danger font-large-2"></i>
                <div class="mt-2">Driving</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-camera danger font-large-2"></i>
                <div class="mt-2">Photography</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-game-controller danger font-large-2"></i>
                <div class="mt-2">Gaming</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-music-tone-alt danger font-large-2"></i>
                <div class="mt-2">Music</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="ft-monitor danger font-large-2"></i>
                <div class="mt-2">Surfing</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="ft-pie-chart danger font-large-2"></i>
                <div class="mt-2">Foodie</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="ft-tv danger font-large-2"></i>
                <div class="mt-2">TV</div>
              </span>
              <span class="mr-3 mt-2 text-center float-left width-100"> <i class="icon-basket-loaded danger font-large-2"></i>
                <div class="mt-2">Shopping</div>
              </span>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About section ends-->


<!--User's uploaded photos section starts-->
<section id="photos">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Fotos</div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- <div class="card-header">
          <h5>Photos Uploaded</h5>
        </div> -->
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              @foreach($arriendo->fotos as $f)
              <figure class="col-lg-3 col-md-6 col-12">
                <img class="img-thumbnail img-fluid" src="{{asset('fotos/'.$f->foto)}}" itemprop="thumbnail" alt="Image description" />
              </figure>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--User's uploaded photos section starts-->
<!--User Profile Starts-->
@endsection
