 <!-- Navbar (Header) Starts-->
      <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
            <!-- <form role="search" class="navbar-form navbar-right mt-1">
              <div class="position-relative has-icon-right">
                <input type="text" placeholder="Search" class="form-control round"/>
                <div class="form-control-position"><i class="ft-search"></i></div>
              </div>
            </form> -->
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">fullscreen</p></a>
                </li>
               
                 @if(Auth::user()->isAdmin())
                  <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-bell font-medium-3 blue-grey darken-4"></i>
                    @if(count(notifications()) > 0)
                      <span class="notification badge badge-pill badge-danger">{{count(notifications())}}</span>
                    @endif
                      <p class="d-none">Notificaciones</p></a>
                    @if(count(notifications()) > 0)
                      <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                          <div class="noti-list">
                            @foreach(notifications() as $p)
                              <a href="{{ $p->ruta }}" data-id="{{$p->id}}" class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4 notification_click">
                                <i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i>
                                <span class="noti-wrapper">
                                  <span class="noti-title line-height-1 d-block text-bold-400 info">Nuevo - <strong>{{strtoupper($p->modulo)}}</strong></span>
                                
                                </span>
                              </a>
                            @endforeach
                          </div>
                        <!-- <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a> -->
                      </div>
                    @endif
                  </li>
                @endif
                <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">User Settings</p></a>
                  <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                    <!-- <a href="../../../html/html/ltr/chat.html" class="dropdown-item py-1"><i class="ft-message-square mr-2"></i><span>Chat</span></a>
                    <a href="../../../html/html/ltr/user-profile-page.html" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a>
                    <a href="../../../html/html/ltr/inbox.html" class="dropdown-item py-1"><i class="ft-mail mr-2"></i><span>My Inbox</span></a>
                    <div class="dropdown-divider"></div> -->

                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="ft-power mr-2"></i><span>Salir</span></a>

                  </div>
                </li>
                <!-- <li class="nav-item d-none d-lg-block"><a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">Notifications Sidebar</p></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar (Header) Ends-->
