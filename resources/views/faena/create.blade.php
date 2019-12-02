@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nueva Faena</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('faena.store')}}" method="POST">
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
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Maquina</label>
                  <select class="form-control" name="maquina_id" required="">
                    <option value="">Seleccione..</option>
                    @foreach($maquina as $p)
                      <option value="{{$p->id}}">{{$p->nombre}}</option>
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
                  <select class="form-control" name="tipo_moneda" required="">
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
    </div>
  </div>
</div>
@endsection
