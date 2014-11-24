<div class="container">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="images/dbr_logo.png" alt="dbrpropiedades.cl" height="90" width="160">
                <!--<span class="logo_title">{re}<strong>start</strong></span>
                <span class="logo_subtitle">a multipurpose template</span>-->
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
                <!--<li><a href="javascript:void(0);">Blog</a></li>
                <li><a href="javascript:void(0);">Contact</a></li>
                <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="home_alternative.html">Home Alternative</a></li>
                        <li><a href="page_alternative.html">Page Alternative</a></li>
                        <li><a href="gallery.html">Portfolio Masonry</a></li>
                        <li><a href="portfolio_item.html">Portfolio Item</a></li>
                        <li><a href="portfolio_item_2.html">Portfolio Item II</a></li>
                        <li><a href="single_post.html">Single Post</a></li>
                        <li><a href="404.html">ERROR 404</a></li>
                        <li><a href="register.html">Register or Sign in</a></li>
                        <li><a href="elements.html">Design Elements</a></li>
                        <li><a href="documentation/index.html">Documentation <span class="label label-danger">new</span></a></li>
                    </ul>
                </li>-->
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