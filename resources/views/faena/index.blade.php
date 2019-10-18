@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Faenas Registradas</h4>
          <p class="card-text">todas las Faenas.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Productor</th>
                  <th class="text-center">Campo</th>
                  <th class="text-center">Maquina</th>
                  <th class="text-center">KG</th>
                  <th class="text-center">Moneda</th>
                  <th class="text-center">Estatus</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($faena as $a)
               <tr>
	               	<td class="text-center">{{$a->productor->r_social}}</td>
	               	<td class="text-center">{{$a->campo->nombre_campo}}</td>
                  <td class="text-center">{{$a->maquina->nombre}}</td>
                  <td class="text-center">{{$a->minimo_kg}}</td>
                  <td class="text-center">{{$a->tipo_moneda}}</td>
                  <td class="text-center">{{$a->status}}</td>
	               	<td class="text-center">
	               		<a href="{{route('faena.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('faena.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
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
