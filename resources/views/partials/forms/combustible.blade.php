 <fieldset>
  <h2>Paso 10: Combustible</h2>
  <div class="row">
    <div class="col-md-12">
       <div class="card card-outline-info text-center box-shadow-0">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ejemplo</h4>
          </div>
           <div class="card-content">
            <div class="card-body">
              <div class="container">
                <div id="radios">
                  <label for="Si" class="material-icons" data-tooltip="Si">
                    <input type="radio" name="mode" id="Si" value="1" checked/>
                    <span><i class="icon-like"></i></span>
                  </label>
                  <label for="No" class="material-icons">
                    <input type="radio" name="mode" id="No" value="0" data-tooltip="No" />
                    <span><i class="icon-dislike"></i></span>
                  </label>
                </div>
              </div>
               <hr>
              <br>
              <small>Observacion</small>
              <textarea class="form-control" name="combustible_ob_medidor_nivel"></textarea>
            </div>
            
            <!--  <input type="button" name="next" class="next btn btn-info" value="Confirmar"/> -->
          </div>
        </div>
      </div>
    </div>
  </div> <!-- fin row -->
  <input type="button" name="previous" class="previous btn btn-warning"  value="Anterior" />
  <input type="button" name="next" class="next btn btn-info"  value="Confirmar" />
</fieldset>
<fieldset>
<h2>Paso 10: Combustible</h2>
<div class="row">
    <div class="col-md-12">
       <div class="card card-outline-info text-center box-shadow-0">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tanque</h4>
          </div>
           <div class="card-content">
            <div class="card-body">
              <div class="container">
                <div id="radios">
                  <label class="material-icons" for="combustible_tanque_si" data-tooltip="Si">
                   <input type="radio" id="combustible_tanque_si" name="combustible_tanque" class="custom-control-input"  required value="1">
                    <span><i class="icon-like"></i></span>
                  </label>
                  <label for="combustible_tanque1" class="material-icons" data-tooltip="No">
                    <input type="radio"  id="combustible_tanque1" name="combustible_tanque" class="custom-control-input"  required value="0" >
                    <span><i class="icon-dislike"></i></span>
                  </label>
                </div>
              </div>
               <hr>
              <br>
              <small>Observacion</small>
              <textarea class="form-control" name="combustible_ob_medidor_nivel"></textarea>
            </div>
            <!--  <input type="button" name="next" class="next btn btn-info" value="Confirmar"/> -->
          </div>
        </div>
      </div>
    </div>
  </div> <!-- fin row -->
<input type="button" name="previous" class="previous btn btn-warning"  value="Anterior" />
<input type="button" name="next" class="next btn btn-info"  value="Confirmar" />
</fieldset>
