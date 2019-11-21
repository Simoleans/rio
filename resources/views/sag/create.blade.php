@extends('layouts.app')

@section('content')
<style type="text/css">
   #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>
<div class="col-md-12"  id="row_maquina">
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
            <input type="submit" name="submit" id="submit_maquina" value="Enviar" class="btn btn-raised btn-raised btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="col-md-8" style="display: none;" id="form_faenas">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo SAG</h4>
      <hr>
    </div>
    <div class="card-content">
      <div class="px-3">
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <form id="regiration_form" novalidate action="{{route('arriendo.store')}}"  method="POST">
        <input type="hidden" name="faena_id" id="faena_ori_id">
          @csrf
          <fieldset>
            <h2>Paso 1: Faena Origen</h2>
            
              <div class="card-body card-dashboard table-responsive tabla_faenas">
                <table class="table table-striped table-bordered default-ordering dataTable">
                  <thead>
                    <tr>
                      <th class="text-center">Desde</th>
                      <th class="text-center">Hasta</th>
                      <th class="text-center">Acción</th>
                    </tr>
                  </thead>
                  <tbody id="table_direccion">
                  </tbody>
                </table>
                  
                  <div class="form-group" id="hora_origen" style="display: none;">
                    <label for="hora_origen">Hora Origen</label>
                   <input type="time" name="hora_ori"  class="form-control" required="">
                  </div>
                
              </div>
           
               
               
          
            <input type="button" name="button" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 2: Datos Propietario</h2>
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
                  <label for="projectinput3">Comuna</label>
                  <select class="form-control comunas" name="comuna_id" ></select>
                </div>
            <div class="form-group">
              <label for="hombre">CSG</label>
              <input type="text" class="form-control required" id="hombre" name="hombre" placeholder="CSG">
            </div>
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection

@section('script')

@include('partials.sag.modalFaena')

<script type="text/javascript">

///ajax de buscar maquina
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
      $("#row_maquina").attr('class', 'col-md-4');
      $("#form_faenas").fadeIn('slow/400/fast');
      $("#submit_maquina").attr('disabled',true);
      if (!data.data) {
        $('#xlarge').modal('toggle');
      }else{
        var datos = '';
         
        $.each(data.faenas, function(index, val) {

           datos += '<tr>'+
                      '<td class="text-center">'+val.desde+'</td>'+
                      '<td class="text-center">'+val.hasta+'</td>'+
                      '<td class="text-center">'+
                        '<button type="button" data-id="'+val.id+'" style="color: #FFFF" class="btn btn-raised btn-success btn-min-width mr-1 mb-1 origen_faena">SELECCIONAR</button>'+
                      '</td>'+
                    '</tr>'

        });
        //$('.dataTable').DataTable();
        $('.dataTable').DataTable().destroy();
        $("#table_direccion").html(datos);
        $('.dataTable').DataTable();
      }
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });// fin busqueda de maquina con el select


  $(".tabla_faenas").on('click', '.origen_faena', function(event) {
    event.preventDefault();
    var id = $(this).data('id');
    $("#faena_ori_id").val(id);
    $("#hora_origen").toggle("slow/400/fast");
  });



  //cambiar estatus DESTINO - ORIGEN















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




  $(document).ready(function(){

      /* ------------------- */
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    var counter = 0;
    var counters = 0;
    var input = '';
   
    // validacion de required
//     $(current_step.find('input.required')).each(function() {
//         if ($(this).val() === "") {
//             $(this).css('border', '1px solid red');
//             counter++;
//         }
//     });
//      $(current_step.find('input[required]:radio')).each(function() {
//       //console.log($(this).is(':checked'))
//         if (!$(this).is(':checked')) {
//             $(this).css('border', '1px solid red');
//             counters++;
//         }
//     });

// //console.log(counters)

//   if(counters == 2){
//         Swal.fire({
//           type: 'error',
//           title: 'Oops...',
//           text: '¡Debe llenar todos los campos!'
//         })

//     }else if(counter > 0){
//         Swal.fire({
//           type: 'error',
//           title: 'Oops...',
//           text: '¡Debe llenar todos los campos!'
//         })

//     }else{
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    // }
    //fin validacion

    

  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
  }
});
  
  
</script>

@endsection
