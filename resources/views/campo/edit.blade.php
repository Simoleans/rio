@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Campo</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('campo.update',['id' => $campo->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Productor:</label>
                  <select class="form-control" name="productores_id">
                    <option value="">Seleccione..</option>
                    @foreach($productores as $p)
                      <option value="{{$p->id}}" {{($campo->productores_id == $p->id)?'selected':''}}>{{$p->r_social}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Nombre del campo</label>
                  <input type="text" id="projectinput3" class="form-control" name="nombre_campo" value="{{$campo->nombre_campo}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Región</label>
                  <select class="form-control region" name="region_id">
                    <option value="">Seleccione...</option>
                    @foreach($regiones as $r)
                      <option value="{{$r->id}}" {{($campo->region_id == $r->id)?'selected':''}}>{{$r->region}}</option>
                    @endforeach   
                  </select> 
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id" >
                    @foreach($campo->region->comunas as $c)
                      <option value="{{$c->id}}" {{($c->id == $campo->comuna_id)?'selected':''}}>{{$c->comuna}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">CSG</label>
                  <input type="text" id="projectinput3" class="form-control" name="csg" value="{{$campo->csg}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Dirección</label>
                  <input type="text" id="projectinput3" class="form-control" name="direccion" value="{{$campo->direccion}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contacto (Responsable)</label>
                  <input type="text" id="projectinput3" class="form-control" name="contacto_responsable" value="{{$campo->contacto_responsable}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Correo</label>
                  <input type="email" id="projectinput3" class="form-control" name="correo" value="{{$campo->correo}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Teléfono</label>
                  <input type="text" id="projectinput3" class="form-control tlf" name="telefono" value="{{$campo->telefono}}">
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
