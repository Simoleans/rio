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
                    <td>Operador:</td>
                    <td class="text-right">{{$reporte->user->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Productor:</td>
                    <td class="text-right">{{$reporte->faena->productor->r_social}}</td>
                  </tr>
                  <tr>
                    <td>Campo</td>
                    <td class="text-right">{{$reporte->faena->campo->nombre_campo}}</td>
                  </tr>
                  <tr>
                    <td>Maquina:</td>
                    <td class="text-right"><a href="{{route('maquina.show',['id' => $reporte->faena->maquina->id])}}">{{$reporte->faena->maquina->nombre}}</a></td>
                  </tr>
                  <tr>
                    <td>Fruta:</td>
                    <td class="text-right">{{$reporte->frutas->nombre_fruta}}</td>
                  </tr>
                  <tr>
                    <td>Variedad:</td>
                    <td class="text-right">{{$reporte->variedad->nombre_variedad}}</td>
                  </tr>
                  <tr>
                    <td>Bandeja:</td>
                    <td class="text-right">{{$reporte->bandeja->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Nro Bandejas:</td>
                    <td class="text-right">{{$reporte->cantidad_bandeja}}</td>
                  </tr>
                  <tr>
                    <td>Kilogramos:</td>
                    <td class="text-right">{{$reporte->kg}}</td>
                  </tr>
                  <tr>
                    <td>Nro Combustible:</td>
                    <td class="text-right">{{$reporte->cantidad_combustible}}</td>
                  </tr>
                   <tr>
                    <td>Hectareas:</td>
                    <td class="text-right">{{$reporte->cantidad_combustible}}</td>
                  </tr>
                   <tr>
                    <td>Observacion:</td>
                    <td class="text-right">{{ $reporte->observacion ? $reporte->observacion : 'N/T'}}</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
        <button type="button" id="delete" class="pull-right btn btn-danger" data-url="{{route('reporte.destroy',['reporte' => $reporte->id])}}">Eliminar</button>
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
      //text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Cambiar'
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
            window.location="{{route('faena.index')}}";
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
