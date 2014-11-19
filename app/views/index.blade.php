@extends('layout.main')
@section('content')

<section class="call_to_action">
    <h3>DBR Propiedades</h3>
    <!--<h4>and  make the web a little bit  prettier</h4>-->
    <!--<a class="btn btn-primary btn-lg" href="#">Buy this theme!</a>-->
</section>
<!--<section class="features_teasers_wrapper">
    <div class="row">
        <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/responsive.png">
            <h3>Clean, Responsive Design</h3>
            <p>A multipurpose but mainly<strong> business oriented</strong> design, built to serve as a foundation for your web projects. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
        </div>
        <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/git.png">
            <h3>Based on Twitter Bootstrap</h3>
            <p>The front-end development framework with a <strong>steep learning curve</strong>. It changes the way you develop sites. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
        </div>
        <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/less.png">
            <h3>Makes real use of {LESS}</h3>
            <p><strong>Restart</strong> comes with a style.less file that tries to use all the power of <strong>{less} and bootstrap combined</strong>. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
        </div>
    </div>
</section>-->
<section class="portfolio_teasers_wrapper">
    <h2 class="section_header fancy centered">Propiedades Destacadas <small>Lo mas visto por nuestros visitantes</small></h2>
        <div class="portfolio_strict row">
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow animated flipInX">
                    <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                        <figure style="background-image:url(images/portfolio/propiedades/Casa_veche_din_Horodnic_de_Sus1.jpg)">
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,0 0,0 0,0 180,0 z"/>
                            </svg>
                            <figcaption>
                                <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                <div class="view_button">ver</div>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="portfolio_description">
                        <h3><a href="portfolio_item.html">Casa en Pleno Centro</a></h3>
                        <p>Santiago</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow animated flipInX">
                    <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                        <figure style="background-image:url(images/portfolio/propiedades/descarga.jpg)">
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,0 0,0 0,0 180,0 z"/>
                            </svg>
                            <figcaption>
                                <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                <div class="view_button">Ver</div>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="portfolio_description">
                        <h3><a href="portfolio_item.html">Hermosa casa en barrio residencial</a></h3>
                        <p>La Reina</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow animated flipInX">
                    <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                        <figure style="background-image:url(images/portfolio/propiedades/descarga1.jpg)">
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,0 0,0 0,0 180,0 z"/>
                            </svg>
                            <figcaption>
                                <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                <div class="view_button">Ver</div>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="portfolio_description">
                        <h3><a href="portfolio_item.html">Departamento en Villa el Sol</a></h3>
                        <p>Pudahuel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients_section wow animated fadeInUp">
        <h2 class="section_header elegant centered">
            Otros enlaces <small>de ayuda para nuestros clientes</small>
        </h2>
        <div class="clients_list">
            <a href="#"><img src="images/clients/wordpress.jpg" alt="client"></a>
            <a href="#"><img src="images/clients/jquery.jpg" alt="client"></a>
            <a href="#"><img src="images/clients/microlancer.jpg" alt="client"></a>
            <a href="#"><img src="images/clients/bbpress.jpg" alt="client"></a>
            <a href="#"><img src="images/clients/wpml.jpg" alt="client"></a>
        </div>
    </section>
@stop