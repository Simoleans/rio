@extends('layouts.app')

@section('content')
<div class="col-md-7">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Buscar Maquina</h4>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" id="form"  method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Maquina</label>
                  <select class="form-control" name="maquina_id" id="maquina_value">
                    <option value="">Seleccione...</option>
                    @foreach($maquinas as $m)
                      <option value="{{$m->id}}">{{$m->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
          </div>
        </div>
          <div class="form-actions">
            <input type="submit" name="submit"  value="Enviar" class="btn btn-raised btn-raised btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Dicumentos Registrados</h4>
          <p class="card-text">Todas los documentos.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>


@include('partials.sag.configuracion')

@endsection

@section('script')

@include('partials.sag.modalFaena')

<script type="text/javascript">
  $("#form").submit(function(event) {
   $("#maquina_id").val($("#maquina_value").val());
    event.preventDefault();
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      url: '{{route("searchFaena.search")}}',
      type: 'POST',
      dataType: 'JSON',
      data: $(this).serialize(),
    })
    .done(function(data) {
      if (!data.data) {
        $('#xlarge').modal('toggle');
      }else{
        console.log(data.data.productor.r_social)
      }
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });















  ////// JS del modal de FAENA //////////
  $("#storeFaena").submit(function(event) {
    event.preventDefault();
    $.ajax({
    url: '{{route("storeFaena.store")}}',
    type: 'POST',
    dataType: 'JSON',
    data: $(this).serialize(),
  })
  .done(function(data) {
    console.log("success");
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
