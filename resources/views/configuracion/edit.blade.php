@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Modificar Configuracion</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('configuracion.update',['id' => $configuracion->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Correo del sistema:</label>
                  <input type="text" id="projectinput1" class="form-control" name="email_sistema" value="{{$configuracion->email_sistema}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Rut Empresa:</label>
                  <input type="text" id="projectinput3" class="form-control" name="rut" value="{{$configuracion->rut}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Razon social:</label>
                  <input type="text" id="projectinput3" class="form-control" name="razonsocial" value="{{$configuracion->razonsocial}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Codigo SAG:</label>
                  <input type="text" id="projectinput3" class="form-control" name="sag" value="{{$configuracion->sag}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Direccion:</label>
                  <input type="text" id="projectinput3" class="form-control" name="direccion" value="{{$configuracion->direccion}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Telefono:</label>
                  <input type="text" id="projectinput3" class="form-control" name="telefono" value="{{$configuracion->telefono}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo de la empresa:</label>
                  <input type="text" id="projectinput3" class="form-control" name="email_empresa" value="{{$configuracion->email_empresa}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Representante Legal:</label>
                  <input type="text" id="projectinput3" class="form-control" name="rlegal" value="{{$configuracion->rlegal}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Rut Representante Legal:</label>
                  <input type="text" id="projectinput3" class="form-control" name="rutrlegal" value="{{$configuracion->rutrlegal}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Telefono Representante Legal:</label>
                  <input type="text" id="projectinput3" class="form-control" name="tlfrlegal" value="{{$configuracion->tlfrlegal}}">
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
