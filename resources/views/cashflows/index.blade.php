@extends('layouts.plantilla')

@section('titulo')
    <h3>Mercadería</h3>
@endsection

@section('contenido')
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Flujo de caja</b></h2>
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
                        <button type="button" class="btn btn btn-round btn-default" data-toggle="modal" data-target="#createincomes"><i class="fa fa-plus"></i> Ingreso </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createincomes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{route('flows.store')}}" class="form-label-left input_mask">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ingreso de dinero</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="item form-group has-feedback">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_income">Ingreso <span class="required">*</span></label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" id="cash_income" name="cash_income" required="required" class="form-control has-feedback-left">
                                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_description">Descripción <span class="required">*</span></label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <textarea type="text" id="cash_description" name="cash_description" required="required" class="form-control"></textarea>
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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn btn-round btn-default" data-toggle="modal" data-target="#createexpenses" style="float: right;"><i class="fa fa-minus"></i> Gasto </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createexpenses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{route('flows.store')}}" class="form-label-left input_mask">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Salida de dinero</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="item form-group has-feedback">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_income">Gasto <span class="required">*</span></label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" id="cash_expense" name="cash_expense" required="required" class="form-control has-feedback-left">
                                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_description">Descripción <span class="required">*</span></label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <textarea type="text" id="cash_description" name="cash_description" required="required" class="form-control"></textarea>
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
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Fecha y Hora</th>
                                    <th class="text-center" scope="col">Descripción</th>
                                    <th class="text-center" scope="col">Entrada($)</th>
                                    <th class="text-center" scope="col">Salida($)</th>
                                    <th class="text-center" scope="col">Saldo Actual($)</th>
                                    {{-- <th class="text-center" scope="col">Opciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($flows as $flow)
                                        <tr>
                                            <td class="text-center">{{$flow->cash_id}}</td>
                                            <td class="text-center">{{Carbon\Carbon::parse($flow->created_at)->format('d/m/Y h:m:s A')}}</td>
                                            <td class="text-center">{{$flow->cash_description}}</td>
                                            <td class="text-center">{{$flow->cash_income}}</td>
                                            <td class="text-center">{{$flow->cash_expense}}</td>
                                            <td class="text-center">{{$flow->cash_running_total}}</td>
                                            {{-- <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-app"  data-toggle="modal" data-target="#editflows{{$flow->cash_id}}"> <i class="fa fa-edit"></i> Editar</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editflows{{$flow->cash_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form method="POST" action="{{ route('flows.update',$flow->cash_id)}}">
                                                                @method('put')
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Caja de Flujo</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cate_id-name">Código: </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="cate_id" name="cate_id" class="form-control" value="{{$flow->cash_id}}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group has-feedback">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_income">Ingreso <span class="required">*</span></label>
                                                                        <div class="col-md-9 col-sm-9 ">
                                                                            <input type="text" id="cash_income" name="cash_income" required="required" class="form-control has-feedback-left" value="{{$flow->cash_income}}">
                                                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                                                        </div>
                                                                    </div>
                        
                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cash_description">Descripción <span class="required">*</span></label>
                                                                        <div class="col-md-9 col-sm-9 ">
                                                                            <textarea type="text" id="cash_description" name="cash_description" required="required" class="form-control">{{$flow->cash_description}}</textarea>
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
                                            </td> --}}
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