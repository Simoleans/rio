@extends('layouts.app')

@section('content')


    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Campos Registrados</h4>
          <p class="card-text">todos los campos.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Campo</th>
                  <th class="text-center">Productor</th>
                  <th class="text-center">Ragión</th>
                  <th class="text-center">Comuna</th>
                  <th class="text-center">Dirección</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($campos as $a)
               <tr>
	               	<td class="text-center">{{$a->nombre_campo}}</td>
                  <td class="text-danger">{{$a->productor->r_social}}</td>
                  <td class="text-center">{{$a->region->region}}</td>
                  <td class="text-center">{{$a->comuna->comuna}}</td>
                  <td class="text-center">{{$a->direccion}}</td>
	               	<td class="text-center">
	               		<a href="{{route('campo.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('campo.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
	               	</td>
               </tr>
			        @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<!--/ Default ordering table -->

@endsection
