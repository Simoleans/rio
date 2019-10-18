@extends('layouts.app')

@section('content')


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
                </tbody>
              </table>
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


  </script>
@endsection