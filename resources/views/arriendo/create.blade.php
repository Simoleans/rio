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
  width: 100%;
  max-height: 100%;
}
  </style>

<div class="col-md-8 offset-2">
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
        <form id="regiration_form" novalidate action="action.php"  method="post">
          <fieldset>
            <h2>Paso 1: Datos Maquina</h2>
            <div class="form-group">
              <label for="marca">Marca</label>
              <input type="text" class="form-control required" id="marca" name="marca" placeholder="Marca">
            </div>
             <div class="form-group">
              <label for="modelo">Modelo</label>
              <input type="text" class="form-control required" id="modelo" name="modelo" placeholder="Modelo">
            </div>
             <div class="form-group">
              <label for="año">Año</label>
              <input type="text" class="form-control required" id="año" name="año" placeholder="Año">
            </div>
             <div class="form-group">
              <label for="serie">Nro Serie</label>
              <input type="text" class="form-control required red" id="serie" name="serie" placeholder="Nro Serie">
            </div>
             <div class="form-group">
              <label for="horas">Horas</label>
              <input type="text" class="form-control required" id="horas" name="horas" placeholder="Horas">
            </div>
            <div class="form-group">
              <label for="hombre">Hombre</label>
              <input type="text" class="form-control required" id="hombre" name="hombre" placeholder="Hombre">
            </div>
            <input type="button" name="password" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 2: Datos Propietario</h2>
             <div class="form-group">
              <label for="rut">RUT</label>
              <input type="text" class="form-control required" id="rut" name="rut" placeholder="RUT">
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
              <label for="comuna">Comuna</label>
              <input type="text" class="form-control required red" id="comuna" name="comuna" placeholder="Nro Serie">
            </div>
             <div class="form-group">
              <label for="region">Región</label>
              <input type="text" class="form-control required" id="region" name="region" placeholder="Región">
            </div>
            <div class="form-group">
              <label for="hombre">CSG</label>
              <input type="text" class="form-control required" id="hombre" name="hombre" placeholder="Hombre">
            </div>
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 3: Fotos</h2>
            
             <div class="row">

               <div class="col-6">
                 <div id="my_camera1"></div>
               </div>
                <div class="col-6">
                 <div id="my_camera2"></div>
               </div>
                <div class="col-6">
                 <div id="my_camera3"></div>
               </div>
                <div class="col-6">
                 <div id="my_camera4"></div>
               </div>
                <div class="col-6">
                 <div id="my_camera5"></div>
               </div>
             </div>
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
             <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
          </fieldset>
          <fieldset>
            <h2>Paso 3: Checklist</h2>
            <div class="form-group">
              <label for="mob">Check</label>
              <input type="text" class="form-control" id="mob" placeholder="Check">
            </div>
            <div class="form-group">
              <label for="address">Observacion</label>
              <textarea  class="form-control" name="address" placeholder="Observacion"></textarea>
            </div>
            <input type="button" name="previous" class="previous btn btn-warning" value="Anterior" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
  $(document).ready(function(){

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


      /* ------------------- */
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    var counter = 0;
    var input = '';
    // $(".required").each(function() {
    //     if ($(this).val() === "") {
    //         $(this).css('border', '1px solid red');
    //         counter++;
    //     }
    // });
    // if(counter > 0){
    //     alert("Debe llenar todos los campos");
       
    // }else{
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    //}  
    
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