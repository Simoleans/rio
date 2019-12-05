@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Talonario</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('talonario.update',['id' => $talonario->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Nombre</label>
                  <input type="text"  class="form-control" name="nombre" autocomplete="off" value="{{$talonario->nombre}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Inicio</label>
                  <input type="number"  class="form-control" name="inicio" autocomplete="off" id="inicio" value="{{$talonario->inicio}}" required>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Fin</label>
                  <input type="number"  class="form-control" name="fin" id="fin" required value="{{$talonario->fin}}">
                </div>
              </div>
          </div>
          <div class="form-actions">
            
            <button type="submit" class="btn btn-raised btn-raised btn-primary" id="button_sub">
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
  $("#button_sub").click(function(event) {
    //event.preventDefault();

    if ($("#inicio").val() < $("#fin").val()) {
      return true;
    }else{ 
      event.preventDefault();
      Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡El Nro de inicio debe ser menor al nro final!'
        })
    }
  });
</script>
@endsection
