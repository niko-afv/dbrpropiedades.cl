<div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <!--<img alt="image" class="img-circle" src="/backoffice/img/logo.JPG" />-->
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="/backoffice#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> {{ Auth::user()->nombre }} </strong>
                             </span> <span class="text-muted text-xs block">Administrador <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!--<li><a href="/admin/profile">Perfil</a></li>-->
                                <li><a href="/" target="_blank">Ver Sitio Web</a></li>
                                <li class="divider"></li>
                                <li><a href="/logout">Salir</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            DbrP
                        </div>

                    </li>
                    <li class="@if($page == 'inicio') {{ 'active' }}@endif">
                        <a>Inicio</a>
                    </li>
                    <li class="@if(strstr($page, "propiedades")) {{ 'active' }}@endif">
                        <a href="/admin/propiedades"><i class="fa fa-th-large"></i> <span class="nav-label">Propiedades</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="@if($page == 'propiedades_listar') {{ 'active' }}@endif">
                                <a href="/admin/propiedades/listar">
                                    <i class="fa fa-list"></i>
                                    Listar
                                </a>
                            </li>
                            <li class="@if($page == 'propiedades_crear') {{ 'active' }}@endif">
                                <a href="/admin/propiedades/crear">
                                    <i class="fa fa-plus"></i>
                                    Crear
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>