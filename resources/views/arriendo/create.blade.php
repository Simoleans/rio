@extends('layouts.app')

@section('content')

<style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }

  .redClass{
    border: 1px solid red;
  }

  video {
  width: 100% !important;
  max-height: 100% !important;
}
</style>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Arriendo</h4>
      <hr>
    </div>
    <div class="card-content">
      <div class="px-3">
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <form id="regiration_form" novalidate action="{{route('arriendo.store')}}"  method="POST">
          @csrf
          <input type="hidden"  name="image[]" id="image_frente">
          <input type="hidden"  name="image[]" id="image_izquierdo">
          <input type="hidden"  name="image[]" id="image_trasero">
          <input type="hidden"  name="image[]" id="image_derecho">
          <input type="hidden"  name="image[]" id="image_tunel">
          <input type="hidden"  name="image[]" id="image_comandos">
          <input type="hidden"  name="image[]" id="image_horometro">
          <fieldset>
            <h2>Paso 1: Datos Maquina</h2>
            <div class="form-group">
              <label for="marca">Selecciona maquina</label>
             <select name="maquina_id" id="select_maquina" class="form-control">
               <option value="">Seleccione....</option>
               @foreach($maquinas as $m)
                  <option value="{{$m->id}}">{{strtoupper($m->nombre)}}</option>
               @endforeach
             </select>
            </div>
            <div class="form-group">
              <label for="marca">Marca</label>
              <input type="text" class="form-control required" id="marca" name="marca" placeholder="Marca" readonly="">
            </div>
             <div class="form-group">
              <label for="modelo">Modelo</label>
              <input type="text" class="form-control required" id="modelo" name="modelo" placeholder="Modelo" readonly="">
            </div>
             <div class="form-group">
              <label for="año">Año</label>
              <input type="number" class="form-control required" id="ano" name="ano" placeholder="Año" readonly="">
            </div>
             <div class="form-group">
              <label for="serie">Nro Serie</label>
              <input type="text" class="form-control required red" id="serie" name="series" placeholder="Nro Serie" readonly="">
            </div>
             <div class="form-group">
              <label for="horas">Horas</label>
              <input type="text" class="form-control required" id="horas" name="horas" placeholder="Horas">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control required" id="nombre" name="nombre" placeholder="Nombre" readonly="">
            </div>
            <input type="button" name="password" class="next btn btn-info" value="Siguiente" />
          </fieldset>
<!--           <fieldset>
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
                  <label for="projectinput3">Región</label>
                  <select class="form-control region" name="region_id">
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
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
          </fieldset> -->

          @include('partials.forms.camaras')
          @include('partials.forms.combustible')
          @include('partials.forms.hidraulico')
          @include('partials.forms.aire')
          @include('partials.forms.motor')
          @include('partials.forms.radiador')
          @include('partials.forms.otros')

        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script type="text/javascript">

  $("#select_maquina").change(function(event) {
    event.preventDefault();

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
      url: '{{route("search.maquina")}}',
      type: 'POST',
      dataType: 'JSON',
      data: {_token: '{{csrf_token()}}',id: $(this).val()},
    })
    .done(function(data) {
      $("#marca").val(data.maquina.marca);
      $("#modelo").val(data.maquina.modelo);
      $("#ano").val(data.maquina.ano_maquina);
      $("#serie").val(data.maquina.serie);
      $("#nombre").val(data.maquina.nombre);

      
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });

 function take_snapshot(id,image,preview,img_data,button) {

  // console.log(id,image,preview,img_data);

 $(button).html('Tomar otra foto');

       // take snapshot and get image data
       Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById(preview).innerHTML =
        '<img id="'+image+'" src="'+data_uri+'"/>';



         var base64image = document.getElementById(image).src;

         //console.log(base64image);
         html2canvas([document.getElementById(preview)], {
          onrendered: function (canvas) {
            var canvas_img_data = canvas.toDataURL('image/png');
            var img64 = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");

            // $("#firma").val(img_data);
              $("#"+img_data).val(img64);
              console.log(img_data)

          }
        });// fin html2canvas
        });
     }



     Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera1');


     Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera2');

      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera3');

      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera4');

      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera5');

      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera6');

      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
     });
     Webcam.attach('#my_camera7');

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
    $(current_step.find('input.required')).each(function() {
        if ($(this).val() === "") {
            $(this).css('border', '1px solid red');
            counter++;
        }
    });
     $(current_step.find('input[required]:radio')).each(function() {
      //console.log($(this).is(':checked'))
        if (!$(this).is(':checked')) {
            $(this).css('border', '1px solid red');
            counters++;
        }
    });

//console.log(counters)

  if(counters == 2){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡Debe llenar todos los campos!'
        })

    }else if(counter > 0){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: '¡Debe llenar todos los campos!'
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
