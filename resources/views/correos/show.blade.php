@extends('layouts.app')

@section('content')

<div class="col-md-12">
  <section class="invoice-template">
  <div class="card">
    <div class="card-content p-3">
      <div id="invoice-template" class="card-body">
        <div class="row">
          <div class="col-md-12">
              <table class="table table-borderless table-sm">
                <tbody>
                  <tr>
                    <td>Razón Social:</td>
                    <td class="text-right">{{$correo->nombre}}</td>
                  </tr>
                  <tr>
                    <td>RUT:</td>
                    <td class="text-right">{{$correo->direccion}}</td>
                  </tr>
                   <tr>
                    <td>Correo 1:</td>
                    <td class="text-right">{{$correo->correo1}}</td>
                  </tr>
                  @if(isset($correo->correo2))
                    <tr>
                      <td>Correo 2:</td>
                      <td class="text-right">{{$correo->correo2}}</td>
                    </tr> 
                  @endif
                  @if(isset($correo->correo3))
                    <tr>
                      <td>Comuna:</td>
                      <td class="text-right">{{$correo->correo3}}</td>
                    </tr>
                  @endif
                  @if(isset($correo->correo4))
                  <tr>
                    <td>Dirección:</td>
                    <td class="text-right">{{$correo->correo4}}</td>
                  </tr>
                  @endif
                  <tr>
                    <td>Jefatura:</td>
                    <td class="text-right">{{$correo->jefatura}}</td>
                  </tr>
                  <tr>
                    <td>Telefono:</td>
                    <td class="text-right">{{$correo->telefono}}</td>
                  </tr> 
                   <tr>
                    <td>Región:</td>
                    <td class="text-right">{{$correo->region->region}}</td>
                  </tr> 
                   <tr>
                    <td>Comunas:</td>
                    <td class="text-right">
                      @foreach($comunas as $c)
                         {{$c->comuna->comuna}}<br>
                      @endforeach
                    </td>
                  </tr>       
                </tbody>
              </table>
          </div>
        </div>
        <!-- <button type="button" id="delete" class="pull-right btn btn-danger" data-url="{{route('productores.destroy',['id' => $correo->id])}}">ELIMINAR</button> -->
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
</div>

@endsection

@section('script')

<script type="text/javascript">
  $("#delete").click(function(event) {
    var url = $(this).data('url');
      Swal.fire({
      title: '¿Estas segur@?',
      text: "Se va a eliminar todo lo relacionado a este productor",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#0CC27E',
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
            window.location="{{route('productores.index')}}";
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
