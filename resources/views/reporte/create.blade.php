@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Reporte</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('reportes.store')}}" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Talonario (Inicio)</label>
                  @if(isset(Auth::user()->talonario->inicio))
                    <h3 id="nro_tal">{{$nro_talonario}} <button class="btn btn-warning" id="btn_void"><i class="fa fa-times"></i></button></h3>
                    <input type="hidden" name="nro_talonario" value="{{$nro_talonario}}" id="nro_talonario">
                    <input type="hidden" name="talonario_id" value="{{ Auth::user()->talonario->id }}">
                  @else
                    <br>
                    <a class="btn btn-success" href="{{route('talonarios.create')}}"><i class="fa fa-plus"></i> Registrar Talonario</a>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Faenas</label>
                  <select class="form-control" name="faena_id" required id="faena">
                    <option value="">Seleccione..</option>
                    @foreach($faenas as $p)
                      <option value="{{$p->id}}">{{$p->campo->nombre_campo}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Maquina</label>
                    <input type="text" readonly="" name="maquina" class="form-control" id="maquina">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Propietario Faena</label>
                  <input type="text" name="propietario" id="propietario" class="form-control" readonly="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="campo">Campo</label>
                  <input type="text" name="campo" id="campo" class="form-control" readonly="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Frutas</label>
                  <select class="form-control" name="fruta_id" required="" id="frutas" required="">
                    <option value="">Seleccione...</option>
                   @foreach($frutas as $f)
                    <option value="{{ $f->id }}">{{ strtoupper($f->nombre_fruta) }}</option>
                   @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Variedad</label>
                  <select class="form-control" name="variedades_id" required="" id="variedad" disabled="">
                   
                  </select>
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Fecha Del Talonario</label>
                  <input type="text"  class="form-control fecha" name="fecha" autocomplete="off">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1">Bandeja</label>
                  <select class="form-control" name="bandeja_id" required id="bandeja">
                    <option value="">Seleccione..</option>
                    @foreach($bandejas as $b)
                      <option value="{{$b->id}}">{{ strtoupper($b->nombre) }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Cantidad De Bandejas</label>
                  <input type="number"  class="form-control" name="cantidad_bandeja">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kg">Kilogramos</label>
                  <input type="number"  class="form-control" name="kg">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="combustible">Cantidad De Combustible</label>
                  <input type="number"  class="form-control" name="cantidad_combustible">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="hectareas">Hectareas</label>
                  <input type="number"  class="form-control" name="hectareas">
                </div>
              </div>
               
              <div class="col-md-12">
                <div class="form-group">
                  <label for="observacion">Observación</label>
                  <textarea class="form-control" name="observacion"></textarea>
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

@section('script')
<script type="text/javascript">

  $("#btn_void").click(function(event) {
    $("#nro_talonario").val('');
    $("#nro_tal").html('Vacío <button type="button" class="btn btn-warning" id="btn_refresh"><i class="fa fa-refresh"></i></button>')
  });


  $
  $("#nro_tal").on('click', '#btn_refresh', function(event) {
    event.preventDefault();
    location.reload()
  });
  $("#faena").change(function(event) {
    event.preventDefault();
    var id = $(this).val();
    $.ajax({
      url: '{{route("faena.buscar")}}',
      type: 'POST',
      dataType: 'JSON',
      data: {_token: '{{csrf_token()}}',faena_id: id},
    })
    .done(function(data) {
      $("#maquina").val(data.maquina.nombre.toUpperCase())
      $("#propietario").val(data.productor.r_social.toUpperCase())
      $("#campo").val(data.campo.nombre_campo.toUpperCase())
      
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });

   $("#frutas").change(function(event) {
    event.preventDefault();
    var id = $(this).val();
    $.ajax({
      url: '{{route("variedad.search")}}',
      type: 'POST',
      dataType: 'JSON',
      data: {_token: '{{csrf_token()}}',fruta_id: id},
    })
    .done(function(data) {
     var variedades = '';

     $.each(data.data, function(index, val) {
        variedades += '<option value="'+val.id+'">'+val.nombre_variedad.toUpperCase()+'</option>';
     });
      $("#variedad").html(variedades).attr('disabled',false);
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });
</script>
@endsection
