@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nuevo Usuario</h4>
      <p class="mb-0">Registrar usuario nuevo</p>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('user.store')}}" method="POST">
          @csrf
          <div class="form-body">
            <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Nombre</label>
                  <input type="text" id="projectinput1" class="form-control" name="fname">
                </div>
              </div>
             <!--  <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput2">Last Name</label>
                  <input type="text" id="projectinput2" class="form-control" name="lname">
                </div>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">E-mail</label>
                  <input type="text" id="projectinput3" class="form-control" name="email">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contraseña</label>
                  <input type="text" id="projectinput3" class="form-control" name="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Contraseña</label>
                  <input type="text" id="projectinput3" class="form-control" name="email">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput4">Contact Number</label>
                  <input type="number" id="projectinput4" class="form-control" name="phone">
                </div>
              </div>
            </div>

            <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>

            <div class="form-group">
              <label for="companyName">Company</label>
              <input type="text" id="companyName" class="form-control" name="company">
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput5">Interested in</label>
                  <select id="projectinput5" name="interested" class="form-control">
                    <option value="none" selected="" disabled="">Interested in</option>
                    <option value="design">design</option>
                    <option value="development">development</option>
                    <option value="illustration">illustration</option>
                    <option value="branding">branding</option>
                    <option value="video">video</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput6">Budget</label>
                  <select id="projectinput6" name="budget" class="form-control">
                    <option value="0" selected="" disabled="">Budget</option>
                    <option value="less than 5000$">less than 5000$</option>
                    <option value="5000$ - 10000$">5000$ - 10000$</option>
                    <option value="10000$ - 20000$">10000$ - 20000$</option>
                    <option value="more than 20000$">more than 20000$</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Select File</label>
              <input type="file" class="form-control-file" id="projectinput8">
            </div>

            <div class="form-group">
              <label for="projectinput8">About Project</label>
              <textarea id="projectinput8" rows="5" class="form-control" name="comment"></textarea>
            </div> -->
          </div>

          <div class="form-actions">
            
            <button type="submit" class="btn btn-raised btn-raised btn-primary">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
