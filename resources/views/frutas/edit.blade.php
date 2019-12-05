@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-1">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Editar Fruta</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('frutas.update',['id' => $fruta->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Nombre De la fruta</label>
                  <input type="text"  class="form-control" name="nombre_fruta" autocomplete="off" value="{{$fruta->nombre_fruta}}">
                </div>
              </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-raised btn-raised btn-primary" id="button_sub">
              <i class="fa fa-check-square-o"></i> Guardarsss
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

