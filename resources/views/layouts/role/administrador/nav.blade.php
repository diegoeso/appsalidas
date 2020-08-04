<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Inicio</div>
                <a class="nav-link {{ setActive('administrador.perfil') }}" href="{{ route('administrador.perfil') }}">
                    <div class="sb-nav-link-icon {{ setActive('administrador.perfil') }}"><i class="fas fa-user"></i>
                    </div>
                    Perfil
                </a>
                <div class="sb-sidenav-menu-heading">Listas</div>
                <a class="nav-link collapsed {{ setActive('administrador.lista_estudiantes') }}" href="#"
                    data-toggle="collapse" data-target="#collapseStudents" aria-expanded="false"
                    aria-controls="collapseStudents">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Estudiantes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseStudents" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('administrador.lista_estudiantes') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link" href="{{ route('administrador.lista_estudiantes') }}"><i
                                class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{ setActive('administrador.lista_docentes') }}" href="#"
                    data-toggle="collapse" data-target="#collapseMasters" aria-expanded="false"
                    aria-controls="collapseMasters">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                    Docentes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMasters" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('administrador.lista_docentes') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link" href="{{ route('administrador.lista_docentes') }}"><i
                                class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>

                <a class="nav-link collapsed {{ setActive('administrador.lista_directores') }}" href="#"
                    data-toggle="collapse" data-target="#collapseDirectores" aria-expanded="false"
                    aria-controls="collapseDirectores">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Directores
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDirectores" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('administrador.lista_directores') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link" href=""><i class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseActividades"
                    aria-expanded="false" aria-controls="collapseActividades">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></div>
                    Actividades
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseActividades" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ setActive('administrador.lista_estudiantes') }}"
                            href="{{ route('administrador.lista_actividades') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link {{ setActive('administrador.registrar_estudiante') }}" href=""><i
                                class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaterias"
                    aria-expanded="false" aria-controls="collapseMaterias">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Programas
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMaterias" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ setActive('administrador.lista_programas') }}"
                            href="{{ route('administrador.lista_programas') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link {{ setActive('administrador.registrar_estudiante') }}" href=""><i
                                class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFacultades"
                    aria-expanded="false" aria-controls="collapseFacultades">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Facultades
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFacultades" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ setActive('administrador.lista_facultades') }}"
                            href="{{ route('administrador.lista_facultades') }}"><i
                                class="far fa-list-alt mr-2"></i>Lista</a>
                        <a class="nav-link {{ setActive('administrador.registrar_estudiante') }}" href=""><i
                                class="fas fa-edit mr-2"></i>Registrar</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</div>
            {{ auth()->user()->emailu }}
        </div>
    </nav>
</div>
