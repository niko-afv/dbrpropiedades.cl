@extends('backoffice.layout.main')
@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        <div class="col-sm-6">
            <h2>Bienvenido {{ Auth::user()->nombre }}</h2>
            <small>En este administrador podrás modificar el contenido del sitio web .</small>
        </div>

    </div>
@stop