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
                     <div class="portfolio_item"> <a href="javascript(void);" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                          <figure style="background-image:url(images/portfolio/propiedades/SUITE_RD_Petra_La_Dehesa.jpg)">
                               <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                    <path d="M 180,0 0,0 0,0 180,0 z"/>
                               </svg>
                               <figcaption>
                                    <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                    <div class="view_button">View</div>
                               </figcaption>
                          </figure>
                          </a>
                          <div class="portfolio_description">
                               <h3><a href="portfolio_item.html">{{ $propiedad['NOMBRE'] }}</a></h3>
                               <p>travel</p>
                          </div>
                     </div>
                </div>

                @endforeach

           </div>
      </section>
@stop