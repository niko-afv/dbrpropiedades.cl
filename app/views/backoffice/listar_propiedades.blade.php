@extends('backoffice.layout.main')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Listado de Propiedades</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Dashboard</a>
            </li>
            <li class="active">
                <strong>Listar Propiedades</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="/admin/propiedades/crear" class="btn btn-primary">Nueva Propiedad</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Custom responsive table </h5>
                        </div>
                        <div class="ibox-content">
                            <!--<div class="row">
                                <div class="col-sm-5 m-b-xs"><select class="input-sm form-control input-s-sm inline">
                                    <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>
                                </select>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div data-toggle="buttons" class="btn-group">
                                        <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
                                        <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
                                        <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                            </div>-->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Visitas</th>
                                        <th>Region</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($propiedades as $propiedad)
                                        <tr>
                                            <td></td>
                                            <td>{{ $propiedad['nombre'] }}</td>
                                            <td>{{ $propiedad['direccion'] }}</td>
                                            <td>{{ $propiedad['visitas'] }}</td>
                                            <td>{{ $propiedad['region']['nombre'] }}</td>
                                            <td>
                                                <a href="/admin/propiedades/ver/{{ $propiedad['id'] }}" alt="Ver Propiedad"><i class="fa fa-eye-slash text-navy"></i></a>
                                                &nbsp;
                                                <a href="#" alt=""><i class="fa fa-edit text-navy"></i></a>
                                                &nbsp;
                                                <a href="#" alt="Eliminar Propiedad"><i class="fa fa-trash-o text-navy"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>




            </div>
        </div>
    </div>
</div>
@stop