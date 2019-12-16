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
                    <td class="text-right">{{$productor->r_social}}</td>
                  </tr>
                  <tr>
                    <td>RUT:</td>
                    <td class="text-right">{{$productor->rut}}</td>
                  </tr>
                   <tr>
                    <td>Localidad:</td>
                    <td class="text-right">{{$productor->localidad}}</td>
                  </tr>
                  <tr>
                    <td>Región:</td>
                    <td class="text-right">{{$productor->region->region}}</td>
                  </tr> 
                  <tr>
                    <td>Comuna:</td>
                    <td class="text-right">{{$productor->comuna->comuna}}</td>
                  </tr>
                  <tr>
                    <td>Dirección:</td>
                    <td class="text-right">{{$productor->direccion}}</td>
                  </tr>
                  <tr>
                    <td>Contacto Responsable:</td>
                    <td class="text-right">{{$productor->contacto_responsable}}</td>
                  </tr>
                  <tr>
                    <td>Correo:</td>
                    <td class="text-right">{{$productor->correo}}</td>
                  </tr> 
                   <tr>
                    <td>Telefono:</td>
                    <td class="text-right">{{$productor->telefono}}</td>
                  </tr>      
                </tbody>
              </table>
          </div>
        </div>
        <!-- <button type="button" id="delete" class="pull-right btn btn-danger" data-url="{{route('productores.destroy',['id' => $productor->id])}}">ELIMINAR</button> -->
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
</div>

<div class="col-6">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Campos</h4>
    </div>
    <div class="card-content">
      <div class="card-body card-dashboard table-responsive">
        <table class="table table-striped table-bordered default-ordering dataTable">
          <thead>
            <tr>
              <th class="text-center">Campo</th>
              <th class="text-center">Ragión</th>
              <th class="text-center">Comuna</th>
              <th class="text-center">Dirección</th>
              <th class="text-center">Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach($productor->campos as $a)
           <tr>
              <td class="text-center">{{$a->nombre_campo}}</td>
              <td class="text-center">{{$a->region->region}}</td>
              <td class="text-center">{{$a->comuna->comuna}}</td>
              <td class="text-center">{{$a->direccion}}</td>
              <td class="text-center">
                <a href="{{route('campo.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
                <a href="{{route('campo.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a>
              </td>
           </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6">
  <section id="ordering">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Faenas</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Campo</th>
                  <th class="text-center">Maquina</th>
                  <th class="text-center">KG</th>
                  <th class="text-center">Moneda</th>
                  <!-- <th class="text-center">Tipo</th> -->
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
              @foreach($productor->faenas as $a)
               <tr>
                  <td class="text-center">{{$a->campo->nombre_campo}}</td>
                  <td class="text-center">{{$a->maquina->nombre}}</td>
                  <td class="text-center">{{$a->minimo_kg}}</td>
                  <td class="text-center">{{$a->tipo_moneda}}</td>
                  <!-- <td class="text-center">{{$a->tipo}}</td> -->
                  <td class="text-center">
                    <a href="{{route('faena.show',['id' => $a->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
                    <!-- <a href="{{route('faena.edit',['id' => $a->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Editar"></i></a> -->
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
