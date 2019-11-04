@extends('layouts.app')

@section('content')


<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Datos</h4>
    </div>
    @csrf
    <hr/>
 <a href="{{route('reporte.pot')}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1">GENERAR POT</a>
        @foreach($configuracion as $a)
        <div class="card-content">
          <div class="px-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><label for="projectinput1">Correo del sistema:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->email_sistema}}</td>
                  </span>
                </li>
                <li class="list-group-item"><label for="projectinput1" >Rut Empresa:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->rut}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Razon social:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->razonsocial}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Codigo SAG:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->sag}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Direccion:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->direccion}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Telefono:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->telefono}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Correo de la empresa:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->email_empresa}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Representante Legal:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->rlegal}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Rut Representante Legal:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->rutrlegal}}</td>
                    </span>
                </li>
                <li class="list-group-item"><label for="projectinput1">Telefono Representante Legal:</label>
                  <span class="badge badge-primary">
                    <td class="text-center">{{$a->tlfrlegal}}</td>
                  </span>
                </li>
               

              </ul>
            </div>
            @endforeach


@endsection
