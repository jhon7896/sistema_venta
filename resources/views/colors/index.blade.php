@extends('layouts.plantilla')

@section('titulo')
    <h3>Mercadería</h3>
@endsection

@section('contenido')
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Colores</b></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    
          <!-- Contenido -->
    
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn btn-round btn-default" data-toggle="modal" data-target="#createcolors"><i class="fa fa-plus"></i> Nuevo Registro </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createcolors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{route('colors.store')}}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Color</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cate_name">Nombre <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="color_name" name="color_name" required="required" class="form-control">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cate_description">Rgba </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="demo_forceformat3" name="color_rgba" class="form-control demo colorpicker-element">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cerrar</button>
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @if(session('datos'))
                            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                {{ session('datos') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Código</th>
                                    <th class="text-center" scope="col">Color</th>
                                    <th class="text-center" scope="col">Rgba</th>
                                    <th class="text-center" scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($colors as $color)
                                        <tr>
                                            <td class="text-center">{{$color->color_id}}</td>
                                            <td class="text-center">{{$color->color_name}}</td>
                                            <td class="text-center">{{$color->color_rgba}}</td>
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-app"  data-toggle="modal" data-target="#editcolors{{$color->color_id}}"> <i class="fa fa-edit"></i> Editar</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editcolors{{$color->color_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form method="POST" action="{{ route('colors.update',$color->color_id)}}">
                                                                @method('put')
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Color</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="color_id">Código: </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="color_id" name="color_id" class="form-control" value="{{$color->color_id}}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="color_name">Nombre: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="color_name" name="color_name" required="required" class="form-control" value="{{$color->color_name}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cate_description">Descripción: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="demo_forceformat3" name="color_rgba" class="form-control demo colorpicker-element" value="{{$color->color_rgba}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cerrar</button>
                                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-app"><i class="fa fa-trash"></i> Eliminar</a>
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
@endsection