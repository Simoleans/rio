<div class="modal fade text-left" id="fechaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel16">Crear FAENA</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="form" id="storeFaena" method="POST">
        <input type="hidden" name="maquina_id" id="maquina_id">
        @csrf
        <div class="form-body">
          <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="projectinput1">Productor</label>
                <select class="form-control" name="productores_id" required>
                  <option value="">Seleccione..</option>
                  @foreach($productores as $p)
                    <option value="{{$p->id}}">{{$p->r_social}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="projectinput1">Campo</label>
                <select class="form-control" name="campo_id" required="">
                  <option value="">Seleccione..</option>
                  @foreach($campo as $p)
                    <option value="{{$p->id}}">{{$p->nombre_campo}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Desde(Fecha)</label>
                <input type="text"  class="form-control fecha" name="desde" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Hasta(Fecha)</label>
                <input type="text"  class="form-control fecha" name="hasta" autocomplete="off">
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Minimo (KG)</label>
                <input type="number"  class="form-control" name="minimo_kg">
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Tipo de moneda</label>
                <select class="form-control" name="tipo_moneda">
                  <option value="">Seleccione....</option>
                  <option value="US">US $</option>
                  <option value="CLP">CLP $</option>
                  <option value="UF">$ UF</option>
                </select>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Tarifa 1</label>
                <input type="text"  class="form-control" name="tarifa_1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Tarifa 2</label>
                <input type="text"  class="form-control" name="tarifa_2">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Flete</label>
                <input type="text"  class="form-control" name="flete">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="projectinput3">Petroleo</label>
                <input type="text"  class="form-control" name="petroleo">
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
    <div class="modal-footer">
      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-outline-primary">Save changes</button>
    </div>
  </div>
</div>
</div>