@extends('layout.main')
@section('content')

<section class="call_to_action">
    <h3>DBR Propiedades</h3>
</section>

<section class="portfolio_teasers_wrapper">
    <h2 class="section_header fancy centered">Propiedades Destacadas <small>Lo mas visto por nuestros visitantes</small></h2>
        <div class="portfolio_strict row">

            @foreach($topPropiedades as $propiedad)
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow animated flipInX">
                    <a href="/propiedades/ver/{{ $propiedad['id'] }}" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                        <figure style="background-image:url({{ $propiedad['imagenes'][0] }})">
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,0 0,0 0,0 180,0 z"/>
                            </svg>
                            <figcaption>
                                <p>
                                    {{ substr($propiedad['descripcion'],0,150) }} ...
                                </p>
                                <div class="view_button">ver</div>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="portfolio_description">
                        <h3><a href="/propiedades/ver/{{ $propiedad['id'] }}">{{ $propiedad['nombre'] }}</a></h3>
                        <!--<p>Santiago</p>-->
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </section>
    <section class="clients_section wow animated fadeInUp">
        <h2 class="section_header elegant centered">
            Otros enlaces <small>de ayuda para nuestros clientes</small>
        </h2>
        <div class="clients_list">
            <a href="/simulador"><img src="images/banner_simulador.png" alt="Simulador de Subsidios"></a>
            <a href="javascript:void(0);"><img src="images/chile_atiende.png" alt="Chile Atiende"></a>
        </div>
    </section>
@stop