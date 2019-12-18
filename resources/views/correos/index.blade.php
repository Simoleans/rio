@extends('layouts.app')

@section('content')

    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Oficinas Registrados</h4>
          <p class="card-text">todos las oficinas.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Correo</th>
                  <th class="text-center">Teléfono</th>
                  <th class="text-center">Región</th>
<!--                   <th class="text-center">Acción</th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($correos as $a)
               <tr>
	               	<td class="text-center"><a href="{{route('correos.show',['correo' =>$a->id])}}">{{$a->nombre}}</a></td>
	               	<td class="text-center">{{$a->correo}}</td>
                  <td class="text-center"><a href="tel:{{ $a->telefono }}">{{ $a->telefono }}</a></td>
                  <td class="text-center">{{$a->region->region}}</td>
	               	<!-- <td class="text-center">
	               		<a href="{{route('productores.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('productores.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
	               	</td> -->
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
