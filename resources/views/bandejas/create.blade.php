@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-1">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nueva Bandeja</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('bandejas.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Nombre</label>
                  <input type="text"  class="form-control" name="nombre" autocomplete="off">
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

