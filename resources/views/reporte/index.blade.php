@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <section id="ordering">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Generar Reporte</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <form class="form" action="{{route('reportes.excel')}}" method="POST">
              @csrf
              <div class="form-body">
                <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput3">Desde</label>
                      <input type="text"  class="form-control fecha" name="desde" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput3">Hasta</label>
                      <input type="text"  class="form-control fecha" name="hasta" autocomplete="off" required="">
                    </div>
                  </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-raised btn-raised btn-primary" id="button_sub">
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Generar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="col-md-12">
  <section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Reportes<a class="btn btn-success float-right" href="{{route('reportes.create')}}"><i class="fa fa-plus"></i> Registrar Reporte</a></h4>

        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Nro. Talonario</th>
                  <th class="text-center">Productor</th>
                  <th class="text-center">Campo</th>
                  <th class="text-center">Maquina</th>
                  <th class="text-center">KG</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($reportes as $a)
               <tr>
                  <td class="text-center">{{ $a->nro_talonario ? $a->nro_talonario : 'N/T'  }}</td>
                  <td class="text-center">{{$a->faena->productor->r_social}}</td>
                  <td class="text-center">{{$a->faena->campo->nombre_campo}}</td>
                  <td class="text-center">{{$a->faena->maquina->nombre}}</td>
                  <td class="text-center">{{$a->kg}} Kg.</td>
                  <!-- <td class="text-center">{{$a->tipo}}</td> -->
                  <td class="text-center">
                    <a href="{{route('reportes.show',['reporte' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
                    <!-- <a href="{{route('faena.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a> -->
                  </td>
               </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!--/ Default ordering table -->
@endsection
