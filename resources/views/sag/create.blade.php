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
        <form id="regiration_form" novalidate action="{{route('sags.store')}}"  method="POST">
          @csrf
          <input type="hidden" name="faena_ori_id" id="faena_ori_id">
          <input type="hidden" name="faena_dest_id" id="faena_dest_id">
          <input type="hidden" name="fecha_ori" id="fecha_ori">
          <input type="hidden" name="estacionamiento_id" id="origen_estacionamiento_id">
          <input type="hidden" name="fecha_dest" id="fecha_dest">
          <input type="hidden" name="maquina_id" id="maquina_id">
          <input type="hidden" name="seleccionado" id="seleccionado">
          
          <fieldset  id="origen_estacionamiento_tabla" style="display: none;">
            <h2>Paso 1: Origen Estacionamiento</h2>
              <div class="card-body card-dashboard table-responsive tabla_faenas_estacionamiento">
                <table class="table table-striped table-bordered default-ordering dataTable">
                  <thead>
                    <tr>
                      <th class="text-center">RUT</th>
                      <th class="text-center">R. Social</th>
                      <th class="text-center">Dirección</th>
                      <th class="text-center">Acción</th>
                    </tr>
                  </thead>
                  <tbody id="table_origen_estacionamiento">
                  </tbody>
                </table>
                  <div class="form-group" id="hora_origen" style="display: none;">
                    <label for="hora_origen">Hora Origen(Obligatorio)</label>
                   <input type="time" name="hora_ori"  class="form-control" required>
                  </div>
              </div>
          <input type="button" name="button" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset id="origen_faena" style="display: none;">
            <h2>Paso 1: Origen </h2>
              <div class="card-body card-dashboard table-responsive tabla_faenas">
                <table class="table table-striped table-bordered default-ordering dataTable">
                  <thead>
                    <tr>
                      <th class="text-center">Productor</th>
                      <th class="text-center">Campo</th>
                      <th class="text-center">Desde</th>
                      <th class="text-center">Acción</th>
                    </tr>
                  </thead>
                  <tbody id="table_origen">
                  </tbody>
                </table>
                  <div class="form-group" id="hora_origen" style="display: none;">
                    <label for="hora_origen">Hora Origen(Obligatorio)</label>
                   <input type="time" name="hora_ori"  class="form-control" required>
                  </div>
              </div>
          <input type="button" name="button" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 2: Faena  Destino</h2>
              <div class="card-body card-dashboard table-responsive tabla_faenas">
                <table class="table table-striped table-bordered default-ordering dataTable">
                  <thead>
                    <tr>
                      <th class="text-center">Productor</th>
                      <th class="text-center">Campo</th>
                      <th class="text-center">Desde</th>
                      <th class="text-center">Acción</th>
                    </tr>
                  </thead>
                  <tbody id="table_destino">
                  </tbody>
                </table>
                  <div class="form-group" id="hora_destino" style="display: none;">
                    <label for="hora_origen">Hora Destino(Obligatorio)</label>
                   <input type="time" name="hora_dest"  class="form-control" required>
                  </div>
              </div>
            <input type="button" name="button" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 3: Final</h2>
              <div class="card-body card-dashboard table-responsive tabla_faenas">
                
                  <div class="form-group" id="hora_destino" style="display: none;">
                    <label for="hora_origen">Hora Destino(Obligatorio)</label>
                   <input type="time" name="hora_dest"  class="form-control" required>
                  </div>
              </div>
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Guardar" />
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fecha Sugerida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-warning">La fecha de destino es menor a la faena origen, le sugerimos esta fecha</h3>
        <span class="text-success" id="mensaje_fecha"></span>
        <form id="form_fecha_sugerida" method="POST" class="form">
            @csrf
            <input type="hidden" name="maquina_id" id="maquina_send">
              <label for="hora_origen">Fecha Destino(Obligatorio)</label>
              <input type="text" name="fecha"  class="form-control fecha" required autocomplete="off" id="fecha_sugerida" required>
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="sub_fecha">Guardar</button>
          </div>
      </form>
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

      if (data.estacionamiento) {
        
        $("#origen_estacionamiento_tabla").fadeIn('slow/400/fast');
        $("#origen_faena").remove();
        //alert("dds");
      }else{
        $("#origen_faena").fadeIn('slow/400/fast');
        $("#origen_estacionamiento_tabla").remove();
      }
      
      //$("#submit_maquina").attr('disabled',true);
      $("#maquina_send").val($("#maquina_value").val())
      if (data.count < 1) {
        $("#maquina_id_modal").val($("#maquina_value").val());
        $('#xlarge').modal('toggle');
      }else{
        $("#row_maquina").attr('class', 'col-md-4');
        $("#form_faenas").fadeIn('slow/400/fast');
        var datos = '';
     

        if (data.estacionamiento) { //si existe estacionamiento
       

           var estacionamientos = '<tr>'+
                      '<td class="text-center">'+data.estacionamiento.rut+'</td>'+
                      '<td class="text-center">'+data.estacionamiento.r_social+'</td>'+
                      '<td class="text-center">'+data.estacionamiento.direccion+'</td>'+
                      '<td class="text-center">'+
                        '<button type="button" data-id="'+data.estacionamiento.id+'" style="color: #FFFF"  class="btn btn-raised btn-success btn-min-width mr-1 mb-1 origen_estacionamiento_button">SELECCIONAR</button>'+
                      '</td>'+
                    '</tr>'

       
          //$('.dataTable').DataTable();
          $('.dataTable').DataTable().destroy();
          $("#table_origen_estacionamiento").html(estacionamientos);
          $('.dataTable').DataTable();
        }else{

           $.each(data.data, function(index, val) {

             datos += '<tr>'+
                        '<td class="text-center">'+val.productor.r_social+'</td>'+
                        '<td class="text-center">'+val.campo.nombre_campo+'</td>'+
                        '<td class="text-center">'+val.desde+'</td>'+
                        '<td class="text-center">'+
                          '<button type="button" data-id="'+val.id+'" data-fechaOr="'+val.desde+'" style="color: #FFFF"  class="btn btn-raised btn-success btn-min-width mr-1 mb-1 origen_faena">SELECCIONAR</button>'+
                        '</td>'+
                      '</tr>'

          });
          //$('.dataTable').DataTable();
          $('.dataTable').DataTable().destroy();
          $("#table_origen").html(datos);
          $('.dataTable').DataTable();
        }
        

// Destino
        var datosDestino = '';
        //var disabled = '';
         // console.log('id '+$("#seleccionado").val())
        $.each(data.data, function(index, val) {

        
           datosDestino += '<tr>'+
                      '<td class="text-center">'+val.productor.r_social+'</td>'+
                      '<td class="text-center">'+val.campo.nombre_campo+'</td>'+
                      '<td class="text-center">'+val.desde+'</td>'+
                      '<td class="text-center">'+
                        '<button type="button" data-id="'+val.id+'" data-fechaDes="'+val.desde+'" style="color: #FFFF"  class="btn btn-raised btn-success btn-min-width mr-1 mb-1 destino_faena">SELECCIONAR</button>'+
                      '</td>'+
                    '</tr>'
    

        });
        //$('.dataTable').DataTable();
        $('.dataTable').DataTable().destroy();
        $("#table_destino").html(datosDestino);
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
    var fecha = $(this).data('fechaor');

    $("#fecha_ori").val(fecha)
    $("#faena_ori_id").val(id);
    //Esta parte es para el seleccionar faenas al darle un boton el otro se desactive
    var boton_disabled = $("#table_origen").find('button[type=button]:disabled');
    $("#seleccionado").val(id); // el id del origen para que este seleccionado en destino
    if(boton_disabled.length > 0){ // validacion de click en "seleccionar"
      boton_disabled.attr('disabled',false);
    }
    //fin
    
    $(this).attr('disabled','disabled');
   
    $("#hora_origen").fadeIn('slow/400/fast', function() {
       $(this).removeAttr('style');
    });
  });

  $(".tabla_faenas_estacionamiento").on('click', '.origen_estacionamiento_button', function(event) {
    event.preventDefault();

    var id = $(this).data('id');

    $("#origen_estacionamiento_id").val(id)
    //Esta parte es para el seleccionar faenas al darle un boton el otro se desactive
    var boton_disabled = $("#table_origen").find('button[type=button]:disabled');
    $("#seleccionado").val(id); // el id del origen para que este seleccionado en destino
    if(boton_disabled.length > 0){ // validacion de click en "seleccionar"
      boton_disabled.attr('disabled',false);
    }
    //fin
    
    $(this).attr('disabled','disabled');
   
    $("#hora_origen").fadeIn('slow/400/fast', function() {
       $(this).removeAttr('style');
    });
  });




    


  $(".tabla_faenas").on('click', '.destino_faena', function(event) {
    event.preventDefault();
    var id = $(this).data('id');
    var fecha = $(this).data('fechades');
    $("#faena_dest_id").val(id);
    if ($("#faena_ori_id").val() == id) {
      Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡Esta Faena Ya se Selecciono como origen!'
        })
      return false;
    }

    $("#fecha_dest").val(fecha);
     var dia_diferencia = moment($("#fecha_dest").val()).diff(moment($("#fecha_ori").val()), 'days');
     console.log("dias "+dia_diferencia);
    if (dia_diferencia >= 2) {
      $("#exampleModal").modal("show");
      var fecha_sugerida = moment($("#fecha_ori").val()).add(1, 'd').format('YYYY-MM-DD');
      $("#fecha_sugerida").val(fecha_sugerida);
    }else{
      console.log("si");
    }

    
    

    //Esta parte es para el seleccionar faenas al darle un boton el otro se desactive
    var boton_disabled = $("#table_destino").find('button[type=button]:disabled');
    if(boton_disabled.length > 0){
      boton_disabled.attr('disabled',false);
    }
    //fin
    
    $(this).attr('disabled','disabled');

    //alert($("#hora_origen").val());
   
    $("#hora_destino").fadeIn('slow/400/fast', function() {
       $(this).removeAttr('style');
    });
  });



  //cambiar estatus DESTINO - ORIGEN










$("#sub_fecha").click(function(event) {
  event.preventDefault();
  $.ajax({
    url: '{{route("fechaS.store")}}',
    type: 'POST',
    dataType: 'json',
    data: {_token: '{{csrf_token()}}',maquina_id: $("#maquina_value").val(),id: $("#faena_dest_id").val(), fecha: $("#fecha_sugerida").val() },
  })
  .done(function(data) {
    $("#mensaje_fecha").text(data.msg);
    $("#sub_fecha").attr('disabled',true);
    $("#fecha_sugerida").attr('readonly',true);
     var datosDestino = '';
         
        $.each(data.destino, function(index, val) {

            datosDestino += '<tr>'+
                      '<td class="text-center">'+val.productor.r_social+'</td>'+
                      '<td class="text-center">'+val.campo.nombre_campo+'</td>'+
                      '<td class="text-center">'+val.desde+'</td>'+
                      '<td class="text-center">'+
                        '<button type="button" data-id="'+val.id+'" data-fechaDes="'+val.desde+'" style="color: #FFFF"  class="btn btn-raised btn-success btn-min-width mr-1 mb-1 destino_faena">SELECCIONAR</button>'+
                      '</td>'+
                    '</tr>'
        });
        //$('.dataTable').DataTable();
        $('.dataTable').DataTable().destroy();
        $("#table_destino").html(datosDestino);
        $('.dataTable').DataTable();

  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});

$("#productor").change(function(event) { //selec anidado de productor-campo
    event.preventDefault();
    var id = $(this).val();
    $.ajax({
      url: '{{route("searchFaenaProductor")}}',
      type: 'POST',
      dataType: 'JSON',
      data: {_token: '{{csrf_token()}}',id: id},
    })
    .done(function(data) {
      var campos = '';
      $.each(data.campos, function(index, val) {
         campos += '<option value="'+val.id+'">'+val.nombre_campo+'</option>';
      });
      $("#campos").html(campos);
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
    if (data.status) {
      location.reload();
    }
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
    var counterss = 0;
    var input = '';
   
    //validacion de required
    $(current_step.find('input.required')).each(function() {
        if ($(this).val() === "") {
            $(this).css('border', '1px solid red');
            counter++;
        }
    });
     $(current_step.find('input[type=time]')).each(function() {
      //console.log($(this).is(':checked'))
        if ($(this).val() === "") {
            $(this).css('border', '1px solid red');
            counters++;
        }
    });

     $(current_step.find('input[type=time]')).each(function() {
      //console.log($(this).is(':checked'))
        if ($(this).val() === "") {
            $(this).css('border', '1px solid red');
            counterss++;
        }
    });
//console.log(current_step.find('input[type=time]:required'))
console.log(counters)

  if(counters > 0){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡Faltan Opciones!'
        })

    }else if(counter > 0){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡Faltan Opciones!'
        })

    }else{
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    }
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
