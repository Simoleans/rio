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
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
</div>

@endsection
