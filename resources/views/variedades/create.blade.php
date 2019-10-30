@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-1">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Talonario</h4>
    </div>
    <hr>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('variedades.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <!-- <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Fruta</label>
                  <select class="form-control" name="fruta_id" id="frutas">
                    @foreach($frutas as $f)
                      <option value="{{$f->id}}">{{$f->nombre_fruta}}</option>
                    @endforeach
                  </select>
                  <small><a href="#" id="fruta">Crear Fruta</a></small>
                  <!-- Button trigger modal -->

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Nombre</label>
                  <input type="text"  class="form-control" name="nombre_variedad" autocomplete="off" required>
                </div>
              </div>
          </div>
          <div class="form-actions">
            
            <button type="submit" class="btn btn-raised btn-raised btn-primary" id="button_sub">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>


@endsection

@section('script')

<script type="text/javascript">
  $("#fruta").click(function(event) {
      Swal.fire({
        title: 'Crear Fruta',
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off',
          id: 'nombre_fruta'
        },
        allowOutsideClick: true,
        confirmButtonText: 'Guardar',
        showLoaderOnConfirm: true,
       closeOnCancel: false,
        inputValidator: (value) => {
            if (!value) {
              return 'Debe escribir algo!'
            }
          },
         preConfirm: (login) => {
          var data = {_token: '{{csrf_token()}}',nombre_fruta: $("#nombre_fruta").val()};
          return fetch('{{route("storeFrutas.ajax")}}',{
                        method: 'POST', 
                        body: JSON.stringify(data), // data can be `string` or {object}!
                        headers:{
                          'Content-Type': 'application/json'
                        }          
                      })
            .then(response => {
              console.log(response);
              if (!response.ok) {
                throw new Error(response.statusText)
              }
              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.dismiss != "backdrop") {
             Swal.fire({
            title: 'Fruta guardada correctamente',
          })
          var datos = "";
            $.each(result.value.frutas, function(index, val) {
              datos+= '<option value="'+val.id+'">'+val.nombre_fruta+'</option>';
            });
            $("#frutas").html(datos);
        }
         
      })
  });
</script>
@endsection