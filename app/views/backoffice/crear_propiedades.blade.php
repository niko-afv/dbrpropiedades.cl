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
                    <form role="form" method="POST" action="/admin/propiedades/crear">
                        <div class="row">
                            <div class="col-sm-6 b-r">

                                <div class="form-group"><label>Nombre</label> <input type="text" placeholder="" class="form-control" name="nombre" id="nombre"></div>

                                <div class="form-group"><label>Dirección</label> <input type="text" placeholder="" class="form-control" name="direccion" id="direccion"></div>

                                <div class="form-group"><label>Superficie Útil (m2)</label> <input type="text" placeholder="" class="form-control" name="s_util" id="s_util"></div>

                                <div class="form-group"><label>Superficie Terreno (m2)</label> <input type="text" placeholder="" class="form-control" name="s_terreno" id="s_terreno"></div>

                                <div class="form-group"><label>Valor ($)</label> <input type="text" placeholder="" class="form-control" name="valor" id="valor"></div>

                                <div class="form-group"><label>Gasto Común ($)</label> <input type="text" placeholder="" class="form-control" name="g_comun" id="g_comun"></div>

                                <div class="form-group">
                                    <label>Descripción</label>
                                     <textarea class="form-control" name="descripcion" id="descripcion" rows="2"></textarea>
                                </div>

                            </div>

                            <div class="col-sm-6 b-r">

                                <div class="form-group">
                                    <label>Habitaciones</label>
                                    <select class="form-control" name="habitaciones">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Baños</label>
                                    <select class="form-control" name="banios">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Lógia</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" name="logia">
                                            ¿La propiedad cuenta con lógia?
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tipo Propiedad</label>
                                    <select class="form-control" name="tipo" id="tipo">
                                        <option value="0">Seleccionar Tipo Propiedad</option>
                                        <option value="1">Casa</option>
                                        <option value="2">Departamento</option>
                                        <?php /*foreach($instituciones as $item => $val){ ?>
                                            <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                        <?php }*/?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tipo Transacción</label>
                                    <select class="form-control" name="transaccion" id="transaccion">
                                        <option value="0">Seleccionar Tipo Transacción</option>
                                        <option value="2">Arriendo</option>
                                        <option value="1">Venta</option>
                                        <?php /*foreach($instituciones as $item => $val){ ?>
                                            <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                        <?php }*/?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Región</label>
                                    <select class="form-control" name="region" id="region">
                                        <option value="0">Seleccionar Región</option>
                                        <option value="2">Metropolitana</option>
                                        <option value="1">Valparaiso</option>
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
                                    <button class="btn btn-lg btn-primary m-t-n-xs form-control" type="submit"><strong>Crear</strong></button>
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