@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Editar Maquina</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('maquina.update',['id' => $maquina->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Marca</label>
                  <input type="text" id="projectinput1" class="form-control" name="marca" value="{{$maquina->marca}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Modelo</label>
                  <input type="text" id="projectinput3" class="form-control" name="modelo" value="{{$maquina->modelo}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Tipo</label>
                  <input type="text" id="projectinput3" class="form-control" name="tipo" value="{{$maquina->tipo}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Año</label>
                  <input type="text" id="projectinput3" class="form-control" name="ano_maquina" value="{{$maquina->ano_maquina}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Serie</label>
                  <input type="text" id="projectinput3" class="form-control" name="serie" value="{{$maquina->serie}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Nombre</label>
                  <input type="text" id="projectinput3" class="form-control" name="nombre" value="{{$maquina->nombre}}">
                </div>
              </div>
          </div>
          <div class="form-actions">
            
            <button type="submit" class="btn btn-raised btn-raised btn-primary">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
