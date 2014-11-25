@extends('backoffice.layout.main')
@section('content')
        
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Propiedad : </h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Estas en</a>
                </li>
                <li class="active">
                    <strong>Propiedad</strong>
                </li>
            </ol>
        </div>
    </div>
            
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 b-r" style="text-align: center;">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Galeria de Imagenes</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-user">
                                    <li>
                                        <a data-toggle="modal" href="#portada-form" title="Agregar Imagenes">
                                            <i class="fa fa-plus"></i>
                                            &nbsp;&nbsp; Agregar mas Imagenes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i>
                                            &nbsp;&nbsp; Eliminar Imagenes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ibox-content">
                            @if(!$galeria)
                            <img src="/images/no-photo.png"    />
                            @else
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    @foreach ($propiedad['galeria'] as $imagen)
                                    <div class="item @if ($img1 == $imagen['ID']) active  @endif">
                                        <img alt="image" class="" src="{{ $imagen['URL'] }}" width="702" height="250">
                                    </div>
                                    @endforeach
                                </div>
                                <a data-slide="prev" href="#carousel1" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel1" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 b-r">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Detalles Propiedad</h5>
                        </div>
                        <div class="ibox-content">
                            <!--<div class="col-md-4">-->
                                <div class="form-group">
                                    <p>
                                        <label>Nombre:</label>
                                        <span>{{ $propiedad['nombre'] }}</span>
                                    </p>
                                </div>
                                
                                <div class="form-group">
                                    <p>
                                        <label>Dirección:</label>
                                        <span>{{ $propiedad['direccion'] }}</span>
                                    </p>
                                </div>

                                <div class="form-group">
                                    <p>
                                        <label>Superficie Útil :</label>
                                        <span>{{ $propiedad['superficie_util'] }}</span>
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>Superficie Terreno :</label>
                                    <span>{{ $propiedad['superficie_terreno'] }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Valor:</label>
                                    <span>{{ $propiedad['valor'] }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Gasto Común:</label>
                                    <span>{{ $propiedad['gasto_comun'] }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Baños:</label>
                                    <span>{{ $propiedad['baños'] }}</span>
                                </div>
                            
                                <div class="form-group">
                                    <label>Habitaciones:</label>
                                    <span>{{ $propiedad['habitaciones'] }}</span>
                                </div>
                            
                                <div class="form-group">
                                    <label>Descripción:</label>
                                    <p>{{ $propiedad['descripcion'] }}</p>
                                </div>
                            <!--</div>-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 ">
                <?php
                    /*$error = Session::get('error');
                    $success = Session::get('success');
                ?>

                <?php if(count($error)>0){?>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Otras Caracteristicas</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-md-12">
                                <p> </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>



<div id="portada-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Modifcar Imagenes</h5>
                            </div>
                            <div class="ibox-content">
                                <form id="my-awesome-dropzone" class="dropzone" action="/admin/propiedades/cargarImg">

                                    <input  type="hidden" name="dir" value="{{ $upload_dir }}">
                                    <input  type="hidden" name="id" value="{{ $propiedad['id'] }}">




                                    <div class="dz-preview dz-processing dz-image-preview dz-success">
                                        <div class="dz-details">
                                            <div class="dz-filename">
                                                <span data-dz-name="">
                                                    departamento_en_venta_1_ambiente_46_m2_43_m2c_impecable_monoambiente_en_venta_lindblom_propiedades_100565892618725387.jpg
                                                </span>
                                            </div>
                                            <div data-dz-size="" class="dz-size">
                                                <strong>0.1</strong> MiB
                                            </div>

                                            <img data-dz-thumbnail="" alt="" src="">
                                        </div>
                                        <div class="dz-progress">
                                            <span data-dz-uploadprogress="" class="dz-upload" style="width: 100%;"></span>
                                        </div>
                                        <div class="dz-success-mark"><span>✔</span></div>
                                        <div class="dz-error-mark"><span>✘</span></div>
                                        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                    </div>


                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@stop


@section('customjs')
    <!-- DROPZONE -->
    <script src="/backoffice/js/plugins/dropzone/dropzone.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            Dropzone.options.myAwesomeDropzone = {
                maxFilesize: 100, // MB
                autoProcessQueue: true,
                uploadMultiple: false,
                parallelUploads: 1,
                maxFiles: 1,
                acceptedFiles: ".jpeg, .png, .jpg, .gif",
                addRemoveLinks: true,
                init: function() {
                    this.on("error", function(file, message) { alert("Error: " + message); });
                }
            };
        });http://devel.dbrpropiedades.cl/admin/propiedades/ver/1
    </script>
@stop

