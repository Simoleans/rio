@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nueva Maquina</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('maquina.store')}}" method="POST" id="form">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Marca</label>
                  <input type="text" id="projectinput1" class="form-control" name="marca">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Modelo</label>
                  <input type="text" id="projectinput3" class="form-control" name="modelo">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Tipo</label>
                  <select class="form-control" name="tipo" required="" id="tipo">
                    <option value="">Seleccione...</option>
                    <option value="Arriendo">Arriendo</option>
                    <option value="Normal">Normal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Año</label>
                  <input type="text" id="projectinput3" class="form-control" name="ano_maquina">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Serie</label>
                  <input type="text" id="projectinput3" class="form-control" name="serie">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Nombre</label>
                  <input type="text" id="projectinput3" class="form-control" name="nombre">
                </div>
              </div>
          </div>
          <section id="datos-propietarios" style="display: none;">
            <h2>Datos Propietario</h2>
             <div class="form-group">
              <label for="rut">RUT</label>
              <input type="text" class="form-control required rut" id="rut" name="rut" placeholder="RUT">
            </div>
             <div class="form-group">
              <label for="r_social">Razón Social</label>
              <input type="text" class="form-control required" id="r_social" name="r_social" placeholder="Razón Social">
            </div>
             <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control required" id="direccion" name="direccion" placeholder="Dirección">
            </div>

                <div class="form-group">
                  <label for="projectinput3">Región</label>
                  <select class="form-control region" name="region_id" id="region">
                    <option value="">Seleccione...</option>
                    @foreach($regiones as $r)
                      <option value="{{$r->id}}">{{$r->region}}</option>
                    @endforeach   
                  </select> 
                </div>

                <div class="form-group">
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id" ></select>
                </div>
            <div class="form-group">
              <label for="hombre">CSG</label>
              <input type="text" class="form-control required" id="hombre" name="hombre" placeholder="CSG">
            </div>
          </section>
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

@section('script')

<script type="text/javascript">
  $("#tipo").change(function(event) {
    if ($(this).val() == 'Arriendo') {
      $("#datos-propietarios").fadeIn('slow/400/fast').find('input').each(function() {
        $(this).attr('required', true);
    });
      
    }else{
      $("#datos-propietarios").fadeOut('slow/400/fast').find('input').each(function() {
        $(this).attr('required', false);
    });;
    }
  });
</script>
@endsection
