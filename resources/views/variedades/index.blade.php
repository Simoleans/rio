@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Variedades Registradas</h4>
          <p class="card-text">Todas las vaeriedades.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Fruta</th>
                  <th class="text-center">Nombre</th>
                 <!--  <th class="text-center">Acción</th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($variedades as $a)
               <tr>
                  <td class="text-center">{{$a->fruta->nombre_fruta}}</td>
	               	<td class="text-center">{{$a->nombre_variedad}}</td>
	               	<!-- <td class="text-center">
	               		<a href="{{route('transportista.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('variedades.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
	               	</td> -->
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
