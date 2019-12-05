@extends('layouts.app')

@section('content')

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
              <th class="text-center">Nombre</th>
              <th class="text-center">Inicio</th>
              <th class="text-center">Fin</th>
              <th class="text-center">Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach($talonarios as $a)
           <tr>
             	<td class="text-center">{{$a->nombre}}</td>
             	<td class="text-center">{{$a->inicio}}</td>
              <td class="text-center">{{$a->fin}}</td>
             	<td class="text-center">
             		<a href="{{route('talonarios.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
                 <a data-id="{{$a->id}}" class="btn btn-raised btn-danger btn-min-width mr-1 mb-1 delete" data-url="{{route('talonario.destroy',['id' => $a->id])}}"><i class="fa fa-trash" title="Eliminar"></i></a>
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
@section('script')

<script type="text/javascript">

$(".delete").click(function(event) {
var url = $(this).data('url');

Swal.fire({
  title: '¿Estas segur@?',
  //text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar'
}).then((result) => {
  if (result.value) {

    $.ajax({
      url: url,
      type: 'DELETE',
      dataType: 'json',
      data: {_token: '{{csrf_token()}}'},
    })
    .done(function(data) {
      if (data.status) {
        location.reload()
      }
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
    // Swal.fire(
    //   'Eliminado!',
    //   'Your file has been deleted.',
    //   'success'
    // )
  }
})
});
</script>
@endsection
