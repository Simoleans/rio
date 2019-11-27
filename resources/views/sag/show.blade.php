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
                    <td>Faena Origen:</td>
                    <td class="text-right">{{$sag->faenaOrigen->productor->r_social}}</td>
                  </tr>
                  <tr>
                    <td>Hora Origen:</td>
                    <td class="text-right">{{$sag->hora_ori}}</td>
                  </tr>
                  <tr>
                    <td>Faena Destino</td>
                    <td class="text-right">{{$sag->faenaDestino->productor->r_social}}</td>
                  </tr>
                  <tr>
                    <td>Hora Destino:</td>
                    <td class="text-right">{{$sag->hora_dest}}</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <a class="btn btn-lg btn-success pull-right" href="{{route('reporte.sag',['id' => $sag->id])}}">Ver documento</a>
        </div>
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
</div>

<div class="col-md-6">
  <section class="invoice-template">
  <div class="card">
    <div class="card-content p-3">
      <h2>Correos <button class="btn btn-lg btn-success pull-right">Enviar a Todos</button></h2>

      <div id="invoice-template" class="card-body">
        <div class="row">
          <div class="col-md-12">
              <table class="table table-borderless table-sm">
                <tbody>
                  @foreach($correoSag as $c)
                   <tr>
                    <td>Correo:</td>
                    <td class="text-right">{{$c->persona->correo}}</td>
                    <td><button class="btn btn-sm btn-success pull-right">Enviar Correo</button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
</div>

@endsection

