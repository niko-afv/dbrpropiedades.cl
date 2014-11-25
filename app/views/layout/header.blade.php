<div class="container">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="/images/dbr_logo.png" alt="dbrpropiedades.cl" height="90" width="160">
            </a>
            <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="nb_left pull-left">
                    <span class="fa fa-reorder"></span>
                </span>
                <span class="nb_right pull-right">menu</span>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav pull-right navbar-nav">
                <li class="@if ($page == 'index'){{ 'active' }}@endif"><a href="/">Home</a></li>
                <li class="@if ($page == 'about'){{ 'active' }}@endif"><a href="/about">Quienes Somos</a></li>
                <li class="@if ($page == 'propiedades'){{ 'active' }}@endif"><a href="/propiedades">Propiedades</a></li>
                <li class="@if ($page == 'contacto'){{ 'active' }}@endif"><a href="/contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
    <!--<div id="social_media_wrapper">
        <a href="https://www.facebook.com">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com/leonartgr">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="#googleplus">
            <i class="fa fa-google-plus"></i>
        </a>
    </div>-->
    <div id="sign"><a href="/admin"><i class="fa fa-user"></i><span>Administrador</span></a></div>
</div>