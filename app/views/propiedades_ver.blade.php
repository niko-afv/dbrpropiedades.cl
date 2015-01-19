@extends('layout.main')
@section('content')
    <section class="hgroup">
        <h1>{{ $propiedad->NOMBRE }}</h1>
        <!--<h2>Description of the project dapibus, tellus ac cursus commodo.</h2>-->
        <ul class="breadcrumb pull-right">
            <li><a href="/">Home</a> </li>
            <li><a href="/propiedades">Propiedades</a></li>
            <li class="active">Ver Propiedad</li>
        </ul>
    </section>
    <section>
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <section class="portfolio_slider_wrapper">
                    <div class="flexslider" id="portfolio_slider">
                        <ul class="slides">
                            @if ( !count($galeria) > 0)
                                <li class="item" data-thumb="/images/no-photo.png" style="background-image: url(/images/no-photo.png)">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p class="lead">Esta propieda no tiene imagenes disponibles</p>
                                        </div>
                                    </div>
                                </li>
                            @else
                                @foreach ($galeria as $imagen)
                                <li class="item" data-thumb="{{ $imagen['URL'] }}" style="background-image: url({{ $imagen['URL'] }})">
                                    <div class="container"> <a href="{{ $imagen['URL'] }}" rel="prettyPhoto[gal]"></a>
                                        <div class="carousel-caption">
                                            <!--<p class="lead">optional description of the photo</p>-->
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    @if ( count($galeria) > 1 )
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            @foreach ($galeria as $imagen)
                                <li> <img src="{{ $imagen['URL'] }}" alt=""> </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </section>
            </div>
            <div class="col-sm-4 col-md-4">
                <article class="portfolio_details">
                    <h2 class="section_header">Detalles de la Propiedad</h2>
                    
                    <div>
                        <p><strong>Superficie Útil:</strong> {{ $propiedad->SUPERFICIE_UTIL }}</p>
                        <p><strong>Superficie Terreno:</strong> {{ $propiedad->SPERFICIE_TERRENO }}</p>
                        <p><strong>Valor:</strong> {{ $propiedad->VALOR }}</p>
                        <p><strong>Gasto Común:</strong> {{ $propiedad->GASTO_COMUN }}</p>
                        <p><strong>Habitaciones:</strong> {{ $propiedad->HABITACIONES }}</p>
                        <p><strong>Baños:</strong> {{ $propiedad->BAÑOS }}</p>
                        <p><strong>Logia:</strong> {{ $propiedad->LOGIA }}</p>
                    </div>
                    
                    <p>
                        {{ $propiedad->DESCRIPCION }}
                    </p>
                    
                    <hr/>
                    
                    
                    <br>
                    <br>
                    <a href="javascript:void(0);" id="contact" class="btn btn-primary center-block btn-lg">Contáctenos</a>
                    <!--
                    href="#formualario"
                    rel="prettyPhoto"
                    -->
                </article>
            </div>
            <style>
                /*.pp_content_container{
                    margin-top: -30px;
                }*7
            </style>
            <div >
                <div id="formualario" style="display: none">
                    
                    <div class="wrapper-content">


                        <div class="contact_form col-sm-12 col-md-12">
                            <hr/>
                            <section class="hgroup">
                                <h1>Contactanos</h1>
                                <h2>Si estas interesado en esta propiedad, dejanos tus datos y nos comunicaremos contigo</h2>
                            </section>
                            <form name="contact_form" id="contact_form" method="post" action="/propiedades/contacto">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <label>Nombre</label>
                                        <input name="name" id="name" class="form-control" type="text" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <label>E-mail</label>
                                        <input name="email" id="email" class="form-control" type="text" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <label>Mensaje</label>
                                        <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-12"><br/>
                                        <input name="subject" id="subject" class="form-control" type="hidden" value="{{ $propiedad->NOMBRE }}" />
                                        <input name="url" id="url" class="form-control" type="hidden" value="{{ action('HomeController@propiedad_ver', "2"); }}" />


                                        <a id="submit_btn" class="btn btn-primary" name="submit">Enviar Mensaje</a>
                                        <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                        </div>
                    
                    </div>
                    
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!--<ul class="pager">
            <li class="previous"><a href="portfolio_item.html">← Older</a></li>
            <li class="next disabled"><a href="#">Newer →</a></li>
        </ul>-->
    </section>
@stop