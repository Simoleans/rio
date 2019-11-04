@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-1">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo POT</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('pot.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Documento</label>
                  <input type="file"  class="form-control" name="documento" autocomplete="off" accept="application/pdf">
                </div>
              </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-raised btn-raised btn-primary" id="button_sub">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Frutas Registrados</h4>
          <p class="card-text">Todas los Frutas.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($pot as $a)
               <tr>
                  <td class="text-center">{{$a->documento}}</td>
                  <td class="text-center">
                    <!-- <a href="{{route('transportista.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a> -->
                    <a href="{{route('pot.show',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Descargar"></i></a>
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


@endsection
