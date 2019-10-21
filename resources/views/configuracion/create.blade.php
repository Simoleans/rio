@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Productor</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('configuracion.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Email del Sistema</label>
                  <input type="text" id="projectinput1" class="form-control rut" name="email_sistema">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Rut</label>
                  <input type="text" id="projectinput3" class="form-control" name="rut">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Razon Social</label>
                  <input type="text" id="projectinput3" class="form-control" name="razonsocial">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">SAG</label>
                  <input type="text" id="projectinput3" class="form-control" name="sag">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Direccion</label>
                  <input type="text" id="projectinput3" class="form-control" name="direccion">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Telefono</label>
                  <input type="text" id="projectinput3" class="form-control" name="telefono">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Email Empresa</label>
                  <input type="email" id="projectinput3" class="form-control" name="email_empresa">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Representante Legal</label>
                  <input type="text" id="projectinput3" class="form-control" name="rlegal">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Rut Representante Legal</label>
                  <input type="text" id="projectinput3" class="form-control tlf" name="rutrlegal">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Telefono Representante Legal</label>
                  <input type="text" id="projectinput3" class="form-control tlf" name="tlfrlegal">
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
