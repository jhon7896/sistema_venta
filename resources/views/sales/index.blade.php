@extends('layouts.plantilla')

@section('titulo')
    <h3>Ventas</h3>
@endsection

@section('contenido')
    
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Ventas</b></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <!-- Contenido -->

        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <a href="{{route('sales.create')}}" class="btn btn btn-round btn-default"><i class="fa fa-plus"></i> Registrar Venta </a>
                        @if (session('datos'))
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
                                    <th class="text-center" scope="col">Nro. de Venta</th>
                                    <th class="text-center" scope="col">Fecha de la Venta</th>
                                    <th class="text-center" scope="col">Cliente</th>
                                    <th class="text-center" scope="col">Forma de Pago</th>
                                    <th class="text-center" scope="col">Total($)</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($sales as $sale)
                                        <tr>
                                            <td class="text-center">{{$sale->sale_id}}</td>
                                            <td class="text-center">{{Carbon\Carbon::parse($sale->sale_payment_date)->format('d/m/Y h:m:s A')}}</td>
                                            <td class="text-center">{{$sale->cust_id}}</td>
                                            <td class="text-center">{{$sale->sale_payment_method}}</td>
                                            <td class="text-center">{{$sale->sale_total_payment}}</td>
                                            <td class="text-center">
                                                @if ($sale->sale_state == 1)
                                                    <span class="badge badge-success">Activo</span>
                                                @else
                                                    <span class="badge badge-danger">Desactivo</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('sales.edit',$sale->sale_id)}}" class="btn btn-app"><i class="fa fa-edit"></i> Editar</a>
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
        
@endsection