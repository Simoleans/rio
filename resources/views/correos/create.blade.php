@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Correo</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('correos.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Nombre Completo</label>
                  <input type="text" id="projectinput1" class="form-control" name="nombre">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Correo</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pro-4">Jefatura</label>
                  <input type="text" id="pro-4" class="form-control" name="jefatura">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="s-4">Teléfono</label>
                  <input type="number" id="s-4" class="form-control" name="telefono">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Región</label>
                  <select class="form-control region" name="region_id">
                    <option value="">Seleccione...</option>
                    @foreach($regiones as $r)
                      <option value="{{$r->id}}">{{$r->region}}</option>
                    @endforeach   
                  </select> 
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id[]" multiple=""></select>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <textarea class="form-control" id="direccion" name="direccion"></textarea>
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

