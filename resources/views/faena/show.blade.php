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
                    <td>Productor:</td>
                    <td class="text-right">{{$faena->productor->r_social}}</td>
                  </tr>
                  <tr>
                    <td>Campo</td>
                    <td class="text-right">{{$faena->campo->nombre_campo}}</td>
                  </tr>
                  <tr>
                    <td>Maquina:</td>
                    <td class="text-right"><a href="{{route('maquina.show',['id' => $faena->maquina->id])}}">{{$faena->maquina->nombre}}</a></td>
                  </tr>
                  <tr>
                    <td>Desde:</td>
                    <td class="text-right">{{$faena->desde}}</td>
                  </tr>
                  <tr>
                    <td>Hasta:</td>
                    <td class="text-right">{{$faena->hasta}}</td>
                  </tr>
                  <tr>
                    <td>Minimo KG:</td>
                    <td class="text-right">{{$faena->minimo_kg}}</td>
                  </tr>
                  <tr>
                    <td>Tipo Moneda:</td>
                    <td class="text-right">{{$faena->tipo_moneda}}</td>
                  </tr>
                  <tr>
                    <td>Tarifa 1:</td>
                    <td class="text-right">{{$faena->tarifa_1}}</td>
                  </tr>
                  <tr>
                    <td>Tarifa 2:</td>
                    <td class="text-right">{{$faena->tarifa_2}}</td>
                  </tr>
                  <tr>
                    <td>Flete:</td>
                    <td class="text-right">{{$faena->flete}}</td>
                  </tr>
                  <tr>
                    <td>Petróleo:</td>
                    <td class="text-right">{{$faena->petroleo}}</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
        <button type="button" id="delete" class="pull-right btn btn-success" data-url="{{route('faena.status',['id' => $faena->id])}}">Cambiar Status</button>
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
            window.location="{{route('user.index')}}";
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
