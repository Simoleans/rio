@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Productor</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('productores.update',['id' => $productor->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">RUT</label>
                  <input type="text" id="projectinput1" class="form-control" name="rut" value="{{$productor->rut}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Razón Social</label>
                  <input type="text" id="projectinput3" class="form-control" name="r_social" value="{{$productor->r_social}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Localidad</label>
                  <input type="text" id="projectinput3" class="form-control" name="localidad" value="{{$productor->localidad}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Región</label>
                 <select class="form-control region" name="region_id">
                   @foreach($regiones as $r)
                    <option value="{{$r->id}}" {{($r->id == $productor->region_id)?'selected':''}}>{{$r->region}}</option>
                   @endforeach 
                 </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id">
                    @foreach($productor->region->comunas as $c)
                      <option value="{{$c->id}}" {{($c->id == $productor->comuna_id)?'selected':''}}>{{$c->comuna}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Dirección</label>
                  <input type="text" id="projectinput3" class="form-control" name="direccion" value="{{$productor->direccion}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contacto (Responsable)</label>
                  <input type="text" id="projectinput3" class="form-control" name="contacto_responsable" value="{{$productor->contacto_responsable}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo" value="{{$productor->correo}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Teléfono</label>
                  <input type="text" id="projectinput3" class="form-control" name="telefono" value="{{$productor->telefono}}">
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
