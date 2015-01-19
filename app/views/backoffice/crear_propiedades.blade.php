@extends('backoffice.layout.main')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Crear Propiedad</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Home</a>
                </li>
                <li class="active">
                    <strong>Crear Especialidad</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Propiedades <small>Crear nueva propiedad</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <div class="row">
                        <div class="col-xs-6"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 ">
                            <?php
                                /*$error = Session::get('error');
                                $success = Session::get('success');*/
                            ?>

                            <?php /*if(count($error)>0){?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $error;?>
                            </div>
                            <?php }?>

                            <?php if(count($success)>0){?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $success;?>
                            </div>
                            <?php }*/?>
                        </div>

                    </div>
                    <form role="form" method="POST" action="@if(isset($id)) {{"/admin/propiedades/actualizar"}} @else {{ "/admin/propiedades/crear" }} @endif">
                        <div class="row">
                            <div class="col-sm-6 b-r">

                                <div class="form-group"><label>Nombre</label> <input type="text" placeholder="" class="form-control" name="nombre" id="nombre" value="@if(isset($nombre)) {{ $nombre }} @endif"></div>

                                <div class="form-group"><label>Dirección</label> <input type="text" placeholder="" class="form-control" name="direccion" id="direccion" value="@if(isset($direccion)) {{ $direccion }}@endif"></div>

                                <div class="form-group"><label>Superficie Útil (m2)</label> <input type="text" placeholder="" class="form-control" name="s_util" id="s_util" value="@if(isset($s_util)) {{ $s_util }} @endif"></div>

                                <div class="form-group"><label>Superficie Terreno (m2)</label> <input type="text" placeholder="" class="form-control" name="s_terreno" id="s_terreno" value="@if(isset($s_terreno)) {{ $s_terreno }} @endif"></div>

                                <div class="form-group"><label>Valor ($)</label> <input type="text" placeholder="" class="form-control" name="valor" id="valor" value="@if(isset($valor)) {{ $valor }} @endif"></div>

                                <div class="form-group"><label>Gasto Común ($)</label> <input type="text" placeholder="" class="form-control" name="g_comun" id="g_comun" value="@if(isset($g_comun)) {{ $g_comun }} @endif"></div>

                                <div class="form-group">
                                    <label>Descripción</label>
                                     <textarea class="form-control" name="descripcion" id="descripcion" rows="2">@if(isset($descripcion)) {{ $descripcion }} @endif</textarea>
                                </div>

                            </div>

                            <div class="col-sm-6 b-r">

                                <div class="form-group">
                                    <label>Habitaciones</label>
                                    <select class="form-control" name="habitaciones">
                                        <option value="1" @if(isset($habitaciones) && $habitaciones == 1) {{"selected"}} @endif>1</option>
                                        <option value="2" @if(isset($habitaciones) && $habitaciones == 2) {{"selected"}} @endif>2</option>
                                        <option value="3" @if(isset($habitaciones) && $habitaciones == 3) {{"selected"}} @endif>3</option>
                                        <option value="4" @if(isset($habitaciones) && $habitaciones == 4) {{"selected"}} @endif>4</option>
                                        <option value="5" @if(isset($habitaciones) && $habitaciones == 5) {{"selected"}} @endif>5</option>
                                        <option value="6" @if(isset($habitaciones) && $habitaciones == 6) {{"selected"}} @endif>6</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Baños</label>
                                    <select class="form-control" name="banios">
                                        <option value="1" @if(isset($banios) && $banios == 1) {{"selected"}} @endif>1</option>
                                        <option value="2" @if(isset($banios) && $banios == 2) {{"selected"}} @endif>2</option>
                                        <option value="3" @if(isset($banios) && $banios == 3) {{"selected"}} @endif>3</option>
                                        <option value="4" @if(isset($banios) && $banios == 4) {{"selected"}} @endif>4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Lógia</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" name="logia" @if(isset($logia)) {{"selected"}} @endif >
                                            ¿La propiedad cuenta con lógia?
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tipo Propiedad</label>
                                    <select class="form-control" name="tipo" id="tipo">
                                        <option value="0">Seleccionar Tipo Propiedad</option>
                                        <option value="1" @if(isset($tipo) && $tipo == 1) {{"selected"}} @endif>Casa</option>
                                        <option value="2" @if(isset($tipo) && $tipo == 2) {{"selected"}} @endif>Departamento</option>
                                        <?php /*foreach($instituciones as $item => $val){ ?>
                                            <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                        <?php }*/?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tipo Transacción</label>
                                    <select class="form-control" name="transaccion" id="transaccion">
                                        <option value="0">Seleccionar Tipo Transacción</option>
                                        <option value="1" @if(isset($transaccion) && $transaccion == 1) {{"selected"}} @endif>Venta</option>
                                        <option value="2" @if(isset($transaccion) && $transaccion == 2) {{"selected"}} @endif>Arriendo</option>
                                        <?php /*foreach($instituciones as $item => $val){ ?>
                                            <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                        <?php }*/?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Región</label>
                                    <select class="form-control" name="region" id="region">
                                        <option value="0">Seleccionar Región</option>
                                        <option value="2" @if(isset($region) && $region == 2) {{"selected"}} @endif>Metropolitana</option>
                                        <option value="1" @if(isset($region) && $region == 1) {{"selected"}} @endif>Valparaiso</option>
                                        <?php /*foreach($instituciones as $item => $val){ ?>
                                            <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                        <?php }*/?>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <br/>
                        </div><!--End row-->

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @if( isset($id) )
                                    <input type="hidden" name="id" value="{{ $id }}"  />
                                    @endif
                                    <button class="btn btn-lg btn-primary m-t-n-xs form-control" type="submit"><strong>@if(isset($id)) {{"Editar"}} @else {{ "Crear" }} @endif</strong></button>
                                </div>
                            </div>
                        </div><!--End row-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop