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
                    <td>Maquina:</td>
                    <td class="text-right">{{ strtoupper($estacionamiento->maquina->nombre) }}</td>
                  </tr>
                  <tr>
                    <td>Razón Social:</td>
                    <td class="text-right">{{$estacionamiento->r_social}}</td>
                  </tr>
                  <tr>
                    <td>RUT:</td>
                    <td class="text-right">{{$estacionamiento->rut}}</td>
                  </tr>
                   <tr>
                    <td>Localidad:</td>
                    <td class="text-right">{{$estacionamiento->localidad}}</td>
                  </tr>
                  <tr>
                    <td>Región:</td>
                    <td class="text-right">{{$estacionamiento->region->region}}</td>
                  </tr> 
                  <tr>
                    <td>Comuna:</td>
                    <td class="text-right">{{$estacionamiento->comuna->comuna}}</td>
                  </tr>
                  <tr>
                    <td>Dirección:</td>
                    <td class="text-right">{{$estacionamiento->direccion}}</td>
                  </tr>
                  <tr>
                    <td>Correo:</td>
                    <td class="text-right">{{$estacionamiento->correo}}</td>
                  </tr> 
                  <tr>
                    <td>IDPNlb:</td>
                    <td class="text-right">{{$estacionamiento->IDPNlb}}</td>
                  </tr>
                   <tr>
                    <td>Telefono:</td>
                    <td class="text-right">{{$estacionamiento->telefono}}</td>
                  </tr>      
                </tbody>
              </table>
          </div>
        </div>
       <!--  <button type="button" id="delete" class="pull-right btn btn-danger" data-url="{{route('estacionamiento.destroy',['estacionamiento' => $estacionamiento->id])}}">ELIMINAR</button> -->
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
            window.location="{{route('estacionamiento.index')}}";
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
