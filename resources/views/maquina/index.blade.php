@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Maquinas Registradas</h4>
          <p class="card-text">todos los arriendos.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Marca</th>
                  <th class="text-center">Modelo</th>
                  <th class="text-center">Tipo</th>
                  <th class="text-center">Año</th>
                  <th class="text-center">Serie</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($maquina as $a)
               <tr>
	               	<td class="text-center">{{$a->marca}}</td>
	               	<td class="text-center">{{$a->modelo}}</td>
                  <td class="text-center">{{$a->tipo}}</td>
                  <td class="text-center">{{$a->ano_maquina}}</td>
                  <td class="text-center">{{$a->serie}}</td>
                  <td class="text-center">{{$a->nombre}}</td>
	               	<td class="text-center">
	               		<a href="{{route('maquina.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('maquina.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
	               	</td>
               </tr>
			        @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Default ordering table -->

@endsection
