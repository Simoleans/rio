@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nueva Oficina</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('correos.update',['id' => $correo->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Nombre Completo</label>
                  <input type="text" id="projectinput1" class="form-control" name="nombre" value="{{$correo->nombre}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo 1</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo1" required="" value="{{$correo->correo1}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo 2</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo2" value="{{$correo->correo1}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo 3</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo3" value="{{$correo->correo1}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo 4</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo4" value="{{$correo->correo1}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pro-4">Jefatura</label>
                  <input type="text" id="pro-4" class="form-control" name="jefatura" value="{{$correo->jefatura}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="s-4">Teléfono</label>
                  <input type="number" id="s-4" class="form-control" name="telefono" value="{{$correo->telefono}}">
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
                      <option value="{{$r->id}}" {{($r->id == $correo->region_id)?'selected':''}}>{{$r->region}}</option>
                    @endforeach   
                  </select> 
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id[]" multiple="">
                    @foreach($comunas as $c)
                      <option value="{{$c->id}}" {{($c->id == $correo->persona->comunas_id)?'selected':''}}>{{strtoupper($c->comuna)}}</option>
                    @endforeach 
                  </select>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <textarea class="form-control" id="direccion" name="direccion">{{$correo->direccion}}</textarea>
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

