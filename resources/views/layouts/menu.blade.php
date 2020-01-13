 <div class="wrapper">
      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="black" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="{{route('dashboard')}}" class="logo-text float-left">
             <!--  <div class="logo-img"><img src="app-assets/img/logo.png"/></div> --><span class="text align-middle">VeanX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><!-- <i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i> --></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              <li class="has-sub nav-item"><a href="#"><i class="icon-user-follow"></i><span data-i18n="" class="menu-title">Usuarios</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('user.index')}}" class="menu-item">Ver Usuarios</a>
                  </li>
                  <li><a href="{{route('user.create')}}" class="menu-item">Crear Usuario</a>
                  </li>
                </ul>
              </li>
               <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Arriendo</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('arriendo.index')}}" class="menu-item">Ver Arriendos</a>
                  </li>
                  <li><a href="{{route('arriendo.create')}}" class="menu-item">Crear Arriendo</a>
                  </li>
                  <li><a href="{{route('devolucion.index')}}" class="menu-item">Ver Devoluciones</a>
                  </li>
                  <li><a href="{{route('devolucion.create')}}" class="menu-item">Crear Devolución</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">POT</span></a>
               <ul class="menu-content">
                 <li><a href="{{route('pot.index')}}" class="menu-item">Generar POT</a>
                 </li>
                 <li><a href="{{route('pot.create')}}" class="menu-item">Subir POT</a>
                 </li>
               </ul>
             </li>
             <li class="has-sub nav-item"><a href="#"><i class="ft-wind"></i><span data-i18n="" class="menu-title">Faenas</span></a>
               <ul class="menu-content">
                 <li><a href="{{route('faena.index')}}" class="menu-item">Ver Faenas</a>
                 </li>
                 <li><a href="{{route('faena.create')}}" class="menu-item">Crear Faena</a>
                 </li>
                 <li><a href="{{route('faenas.calendario')}}" class="menu-item">Ver Calendario</a>
                 </li>
               </ul>
             </li>
             <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">SAG</span></a>
              <ul class="menu-content">
                <li><a href="{{route('sags.index')}}" class="menu-item">Ver SAG's</a>
                </li>
                <li><a href="{{route('sags.create')}}" class="menu-item">Crear SAG</a>
                </li>
                <li><a href="{{route('correos.index')}}" class="menu-item">Ver Oficinas</a>
                </li>
                <li><a href="{{route('correos.create')}}" class="menu-item">Crear Oficina</a>
                </li>
                <!-- <li><a href="{{route('dirsag.create')}}" class="menu-item">Crear Dirección-SAG</a>
                </li>
                <li><a href="{{route('dirsag.index')}}" class="menu-item">Ver Dirección-SAG</a>
                </li> -->
                <!-- <hr>
                <li class="has-sub"><a href="#" class="menu-item"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">CORREOS</span></a>
                     <ul class="menu-content">
                      <li><a href="{{route('correos.index')}}" class="menu-item">Ver Correos</a>
                      </li>
                      <li><a href="{{route('correos.create')}}" class="menu-item">Crear Correo</a>
                      </li>
                    </ul>
                  </li> -->
              </ul>
            </li>
            <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Reports <span class="badge badge-info">Desarrrollo</span></span></a>
             <ul class="menu-content">
               <li><a href="{{route('reportes.index')}}" class="menu-item">Lista de Reports</a>
               </li>
               <li><a href="{{route('reportes.create')}}" class="menu-item">Crear Reports</a>
               </li>
             </ul>
           </li>
               <li class="has-sub nav-item"><a href="#"><i class="ft-cpu"></i><span data-i18n="" class="menu-title">Maquinas</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('maquina.index')}}" class="menu-item">Ver Maquinas</a>
                  </li>
                  <li><a href="{{route('maquina.create')}}" class="menu-item">Crear Maquina</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-user-check"></i><span data-i18n="" class="menu-title">Productores</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('productores.index')}}" class="menu-item">Ver Productores</a>
                  </li>
                  <li><a href="{{route('productores.create')}}" class="menu-item">Crear Productores</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-wind"></i><span data-i18n="" class="menu-title">Campos</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('campo.index')}}" class="menu-item">Ver Campos</a>
                  </li>
                  <li><a href="{{route('campo.create')}}" class="menu-item">Crear Campo</a>
                  </li>
                </ul>
              </li>

              <hr/>

              <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Variedades</span></a>
               <ul class="menu-content">
                <li><a href="{{route('frutas.create')}}" class="menu-item">Crear Fruta</a>
                 </li>
                 <li><a href="{{route('frutas.index')}}" class="menu-item">Ver Frutas</a>
                 </li> 
                 <li><a href="{{route('variedades.create')}}" class="menu-item">Crear Variedades</a>
                 </li>
                 <li><a href="{{route('variedades.index')}}" class="menu-item">Ver Variedades</a>
                 </li> 
               </ul>
             </li>

             <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Tipo Bandeja</span></a>
              <ul class="menu-content">
                <li><a href="{{route('bandejas.index')}}" class="menu-item">Ver Tipo Bandeja</a>
                </li>
                <li><a href="{{route('bandejas.create')}}" class="menu-item">Crear Tipo Bandeja</a>
                </li>
              </ul>
            </li>
           <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Transportista</span></a>
            <ul class="menu-content">
              <li><a href="{{route('transportista.index')}}" class="menu-item">Ver Transportista's</a>
              </li>
              <li><a href="{{route('transportista.create')}}" class="menu-item">Crear Transportista</a>
              </li>
            </ul>
          </li>
          <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Notificaciones <span class="badge badge-info">Desarrrollo</span></span></a>
           <ul class="menu-content">
             <li><a href="{{route('arriendo.index')}}" class="menu-item">Ver Notificaciones</a>
             </li>
           </ul>
         </li>
         <li class="has-sub nav-item"><a href="#"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Talonarios</span></a>
          <ul class="menu-content">
            <li><a href="{{route('talonarios.index')}}" class="menu-item">Ver Talonarios</a>
            </li>
            <li><a href="{{route('talonarios.create')}}" class="menu-item">Crear Talonarios</a>
            </li>
          </ul>
        </li>
        <li class="nav-item"><a href="{{route('configuracion.index')}}"><i class="ft-check-circle"></i><span data-i18n="" class="menu-title">Configuracion</span></a>
       </li>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->
