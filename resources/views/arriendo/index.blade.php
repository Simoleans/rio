@extends('layouts.app')

@section('content')


    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Arriendos Registrados</h4>
          <p class="card-text">todos los arriendos.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Marca</th>
                  <th class="text-center">Modelo</th>
                  <th class="text-center">Horas</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($arriendo as $a)
               <tr>
	               	<td class="text-center">{{$a->maquina->marca}}</td>
	               	<td class="text-center">{{$a->maquina->modelo}}</td>
                  <td class="text-center">{{$a->horas}}</td>
	               	<td class="text-center">
	               		<a href="{{route('arriendo.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<!-- <a href="{{route('user.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Ver"></i></a> -->
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
