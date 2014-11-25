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
                            @if (!count($galeria)>0 )
                                <li class="item" data-thumb="/images/no-photo.png" style="background-image: url(/images/no-photo.png)">
                                    <div class="container"> <a href="/images/no-photo.png" rel="prettyPhoto[gal]"></a>
                                        <div class="carousel-caption">
                                            <p class="lead">Esta propieda no tiene imagenes disponibles</p>
                                        </div>
                                    </div>
                                </li>
                            @else
                                @foreach ($galeria as $imagen))
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
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            @foreach ($galeria as $imagen)
                            <li> <img src="{{ $imagen['URL'] }}" alt=""> </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4">
                <article class="portfolio_details">
                    <h2 class="section_header">Detalles de la Propiedad</h2>
                    <p>
                        {{ $propiedad->DESCRIPCION }}
                    </p>
                    
                    <hr/>
                    
                    <div>
                        <p><strong>Superficie Útil:</strong> {{ $propiedad->SUPERFICIE_UTIL }}</p>
                        <p><strong>Superficie Terreno:</strong> {{ $propiedad->SPERFICIE_TERRENO }}</p>
                        <p><strong>Valor:</strong> {{ $propiedad->VALOR }}</p>
                        <p><strong>Gasto Común:</strong> {{ $propiedad->GASTO_COMUN }}</p>
                        <p><strong>Habitaciones:</strong> {{ $propiedad->HABITACIONES }}</p>
                        <p><strong>Baños:</strong> {{ $propiedad->BAÑOS }}</p>
                        <p><strong>Logia:</strong> {{ $propiedad->LOGIA }}</p>
                    </div>
                    <br>
                    <br>
                    <a href="#" class="btn btn-warning center-block btn-lg">Contáctenos</a>
                </article>
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