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
                      <td>Nombre:</td>
                      <td class="text-right">{{$maquina->nombre}}</td>
                    </tr>
                    <tr>
                      <td>Marca:</td>
                      <td class="text-right">{{$maquina->marca}}</td>
                    </tr>
                    <tr>
                      <td>Modelo</td>
                      <td class="text-right">{{$maquina->modelo}}</td>
                    </tr>
                    <tr>
                      <td>Tipo:</td>
                      <td class="text-right">{{$maquina->tipo}}</td>
                    </tr>
                    <tr>
                      <td>Año:</td>
                      <td class="text-right">{{$maquina->ano_maquina}}</td>
                    </tr>
                    <tr>
                      <td>Serie:</td>
                      <td class="text-right">{{$maquina->serie}}</td>
                    </tr>
                    <tr>
                      <td>Serie:</td>
                      <td class="text-right"><span class="badge badge-{{($maquina->status_maquina == 1?'success':'danger')}}">{{($maquina->status_maquina == 1?'Activa':'Desactivada')}}</span></span></td>
                    </tr>
                  </tbody>
                </table>
                <button type="button" id="cambiar" class="pull-right btn btn-warning" data-url="{{route('maquina.status',['id' => $maquina->id])}}">Cambiar status</button>
            </div>
          <h3 class="text-center">FAENAS</h3>
          <hr>
               <div id="calendar"></div>

          </div>
         
          <!--/ Invoice Footer -->
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

@section('script')

  <script type="text/javascript">

  $(function() {

  $('#calendar').fullCalendar({
    defaultView: 'timelineMonth',
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'timelineMonth'
    },
    resourceLabelText: 'Faenas',
    resources: [
    <?php foreach($maquina->faenas as $a){?>
    
      {"id":"{{$a->id}}","title":"{{$a->flete}}"},
    <?php } ?>
    ],
   events: [
    <?php foreach($maquina->faenas as $a){?>
    {
      resourceId: '{{$a->id}}',
      title: '{{$a->flete}}',
      start: '{{$a->desde}}',
      end: '{{$a->hasta}}'
    },
    <?php } ?>
  ]
  });

});

  $("#cambiar").click(function(event) {
  var url = $(this).data('url');

  Swal.fire({
    title: '¿Estas segur@?',
    //text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Cambia el status'
  }).then((result) => {
    if (result.value) {

      $.ajax({
        url: url,
        type: 'PUT',
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