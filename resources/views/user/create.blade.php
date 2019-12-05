@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Usuario</h4>
      <p class="mb-0">Registrar usuario nuevo</p>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('user.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Nombre</label>
                  <input type="text" id="projectinput1" class="form-control" name="nombre">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">E-mail</label>
                  <input type="text" id="projectinput3" class="form-control" name="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Rol</label>
                  <select class="form-control" name="rol">
                    <option value="">Seleccione...</option>
                    <option value="1">Admin</option>
                    <option value="0">Operador</option>
                  </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contraseña</label>
                  <input type="password" id="projectinput3" class="form-control" name="password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contraseña</label>
                  <input type="password" id="projectinput3" class="form-control" name="password_confirmation">
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
