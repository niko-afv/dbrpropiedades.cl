@extends('layout.main')
@section('content')
      <section class="hgroup">
           <h1>Propiedades</h1>
           <h2>Tenemos propiedades en distintas regiones de nuestro pais</h2>
           <ul class="breadcrumb pull-right">
                <li><a href="/">Home</a> </li>
                <li class="active">Propiedades</li>
           </ul>
      </section>
      <section>
           <ul class="portfolio_filters">
                <li><a href="#" data-filter="*">Mostrar Todos</a></li>

                @foreach ($regiones as $region)
                    <li><a href="#" data-filter=".{{ $region->ID }}">{{ $region->NOMBRE }}</a></li>
                @endforeach

           </ul>
      </section>
      <section class="portfolio_strict">
           <div class="row isotope_portfolio_container">

                @foreach ($propiedades as $propiedad)

                <div class="{{ $propiedad['REGION'] }} col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    
                    {{ $propiedad->loadGaleria($propiedad->ID)  }}
                    <?php $galeria = $propiedad->getGaleria()     ?>

                    <div class="portfolio_item"> <a href="/propiedades/ver/{{ $propiedad['ID'] }}" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                        @if (count($galeria)>0)
                        <figure style="background-image:url({{ $galeria[0]['URL'] }})">
                        @else
                        <figure style="background-image:url(/images/no-photo.png)">
                        @endif
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,0 0,0 0,0 180,0 z"/>
                            </svg>
                            <figcaption>
                                <p>
                                    <strong>Superficie Útil:</strong> {{ $propiedad->SUPERFICIE_UTIL }}m2
                                    <br/>
                                    <strong>Valor:</strong> ${{ $propiedad->VALOR }}
                                    <br/>
                                    <strong>Habitaciones:</strong> {{ $propiedad->HABITACIONES }}
                                    <br/>
                                    <strong>Baños:</strong> {{ $propiedad->BAÑOS }}
                                </p>
                                <div class="view_button">Ver Más</div>
                            </figcaption>
                        </figure>
                        <div class="portfolio_description">
                            <h3><a href="/propiedades/ver/{{ $propiedad['ID'] }}">{{ $propiedad['NOMBRE'] }}</a></h3>
                        </div>
                    </div>
                </div>

                @endforeach

           </div>
      </section>
@stop