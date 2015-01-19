@extends('layout.main')
@section('content')
    <section class="hgroup">
        <h1>Contactanos</h1>
        <h2>Si tienes alguna duda respecto a alguno de nuestras propiedades</h2>
        <ul class="breadcrumb pull-right">
            <li><a href="/">Home</a> </li>
            <li class="active">Contacto</li>
        </ul>
    </section>
    <section>
        <div class="row">
            <div class="office_address col-sm-4 col-md-4">
                 <div class="team_member">
                    <img src="images/dbr_logo.png" width="160" height="90" alt="logo">
                    <h5></h5>
                    <small>Corredora de Propiedades</small><br><br>
                    <div class="team_social">
                        <a href="https://www.facebook.com">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/leonartgr">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <!--<a href="#pinterest">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/PlethoraThemes">
                            <i class="fa fa-github-alt"></i>
                        </a>-->
                    </div>
                    <address>
                        <strong></strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                        <abbr title="Phone">E:</abbr> <a href="mailto:info@dbrpropiedades.cl">info@dbrpropiedades.cl</a>
                    </address>
                </div>
            </div>
            <div class="contact_form col-sm-8 col-md-8">
                <form name="contact_form" id="contact_form" method="post" action="/contacto/enviar">
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
                            <label>Asunto</label>
                            <input name="subject" id="subject" class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <label>Mensaje</label>
                            <textarea name="message" id="message" rows="8" class="form-control"><!--Testing Message--></textarea>
                        </div>
                        <div class="col-sm-12 col-md-12"><br/>
                            <a id="submit_btn" class="btn btn-primary" name="submit">Enviar Mensaje</a>
                            <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
