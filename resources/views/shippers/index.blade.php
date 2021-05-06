@extends('layouts.plantilla')

@section('titulo')
    <h3>Transporte</h3>
@endsection

@section('contenido')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Transporte</b></h2>
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
                        <button type="button" class="btn btn btn-round btn-default" data-toggle="modal" data-target="#createshippers"><i class="fa fa-plus"></i> Nuevo Registro </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createshippers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{route('shippers.store')}}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Transporte</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ship_companyname">Nombre <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="ship_companyname" name="ship_companyname" required="required" class="form-control @error('ship_companyname') is-invalid @enderror" value="{{old('ship_companyname')}}">
                                                    @error('ship_companyname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ship_companyname">Celular <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="ship_phone" name="ship_phone" required="required" class="form-control @error('ship_phone') is-invalid @enderror" value="{{old('ship_phone')}}">
                                                    @error('ship_phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
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
                                    <th class="text-center" scope="col">Compañia</th>
                                    <th class="text-center" scope="col">Telef/Cel</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($shippers as $shipper)
                                        <tr>
                                            <td data-titulo="Código" class="text-center">{{$shipper->ship_id}}</td>
                                            <td data-titulo="Curso" class="text-center">{{$shipper->ship_companyname}}</td>
                                            <td data-titulo="Curso" class="text-center">{{$shipper->ship_phone}}</td>
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-app"  data-toggle="modal" data-target="#editshippers{{$shipper->ship_id}}"> <i class="fa fa-edit"></i> Editar</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editshippers{{$shipper->ship_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form method="POST" action="{{ route('shippers.update',$shipper->ship_id)}}">
                                                                @method('put')
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Transporte</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role-name">Código: </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="role_id" name="role_id" class="form-control" value="{{$shipper->ship_id}}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role-name">Nombre: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="ship_companyname" name="ship_companyname" required="required" class="form-control @error('ship_companyname') is-invalid @enderror" value="{{$shipper->ship_companyname}}">
                                                                            @error('ship_companyname')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{$message}}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role-name">Telef/Cel: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="ship_phone" name="ship_phone" required="required" class="form-control @error('ship_phone') is-invalid @enderror" value="{{$shipper->ship_phone}}">
                                                                            @error('ship_phone')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{$message}}</strong>
                                                                                </span>
                                                                            @enderror
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
