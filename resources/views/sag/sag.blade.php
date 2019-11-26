@extends('layouts.app')

@section('content')


    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">SAG´s Registrados</h4>
          <p class="card-text">todos los sag.</p>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Faena O.</th>
                  <th class="text-center">Hora O.</th>
                  <th class="text-center">Faena D.</th>
                  <th class="text-center">Hora D.</th>
<!--              <th class="text-center">Email</th>
                  <th class="text-center">Acción</th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($sags as $a)
               <tr>
	               	<td class="text-center">{{$a->faenaOrigen->productor->r_social}}</td>
	               	<td class="text-center">{{$a->hora_ori}}</td>
                  <td class="text-center">{{$a->faenaDestino->productor->r_social}}</td>
                  <td class="text-center">{{$a->hora_dest}}</td>
                  <!-- <td class="text-center">{{$a->email}}</td>
	               	<td class="text-center">
	               		<a href="{{route('dirsag.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
	               		<a href="{{route('dirsag.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
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
