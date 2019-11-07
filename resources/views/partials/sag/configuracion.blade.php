<div class="col-md-5">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Configuración</h4>
      <p class="mb-0">Datos</p>
    </div>
    <div class="card-content">
      <div class="px-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><label for="projectinput1">Correo del sistema:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('email_sistema')}}</td>
              </span>
            </li>
            <li class="list-group-item"><label for="projectinput1" >Rut Empresa:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('rut')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Razon social:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('razonsocial')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Codigo SAG:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('sag')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Direccion:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('direccion')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Telefono:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('telefono')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Correo de la empresa:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('email_empresa')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Representante Legal:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('rlegal')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Rut Representante Legal:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('rutrlegal')}}</td>
                </span>
            </li>
            <li class="list-group-item"><label for="projectinput1">Telefono Representante Legal:</label>
              <span class="badge badge-primary">
                <td class="text-center">{{configuracion('tlfrlegal')}}</td>
              </span>
            </li>
          </ul>
        </div>
    </div>
  </div>
</div>