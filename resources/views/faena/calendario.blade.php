@extends('layouts.app')

@section('content')
<section id="ordering">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Calendario de Faenas</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('script')

  <script type="text/javascript">

  $(function() {

  $('#calendar').fullCalendar({
    defaultView: 'timelineFourDays',
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'timelineDay,timelineWeek,timelineMonth'
    },
     views: {
    timelineFourDays: {
      type: 'timeline',
      duration: { days: 4 }
    }
  },
    resourceLabelText: 'Maquinas',
    resources: [
    <?php foreach($maquina as $a){?>
    
      {"id":"{{$a->id}}","title":"{{$a->nombre}}"},
    <?php } ?>
    ],
   events: [
    <?php foreach($maquina as $a){?>
    {
      resourceId: '{{$a->id}}',
      title: '{{$a->faena->flete}}',
      start: '{{$a->faena->desde}}',
      end: '{{$a->faena->hasta}}'
    },
    <?php } ?>
  ]
  });

});


  </script>
@endsection
