@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Talonarios Registrados</h4>
          <p class="card-text">Todos los Talonarios.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Productor</th>
                  <th class="text-center">Campo</th>
                  <th class="text-center">Maquina</th>
                  <!-- <th class="text-center">Acción</th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($talonarios as $a)
               <tr>
	               	<td class="text-center">{{$a->nombre}}</td>
	               	<td class="text-center">{{$a->inicio}}</td>
                  <td class="text-center">{{$a->fin}}</td>
	               	<!-- <td class="text-center">
	               		<a href="{{route('transportista.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('transportista.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
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
