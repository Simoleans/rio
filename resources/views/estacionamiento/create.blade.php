@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Estacionamiento</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('estacionamiento.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="rut">RUT</label>
                  <input type="text" id="rut" class="form-control rut" name="rut">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="maquina_id">Maquina</label>
                  <select class="form-control" name="maquina_id">
                    <option value="">Seleccione...</option>
                    @foreach($maquinas as $m)
                      <option value="{{ $m->id }}">{{ strtoupper($m->nombre) }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="r_social">Razón Social</label>
                  <input type="text" id="r_social" class="form-control" name="r_social">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="localidad">Localidad</label>
                  <input type="text" id="localidad" class="form-control" name="localidad">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="region">Región</label>
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
                  <label for="comuna">Comuna</label>
                  <select class="form-control comunas" name="comuna_id" ></select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" id="direccion" class="form-control" name="direccion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="IDPNlb">IDPNlb</label>
                  <input type="text" id="IDPNlb" class="form-control" name="IDPNlb">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="correo">CSG</label>
                  <input type="text" id="correo" class="form-control" name="correo">
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
