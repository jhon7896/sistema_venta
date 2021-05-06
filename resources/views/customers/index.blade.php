@extends('layouts.plantilla')

@section('titulo')
    <h3>Cliente</h3>
@endsection

@section('contenido')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Clientes</b></h2>
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
                        <a href="{{route('customers.create')}}" class="btn btn btn-round btn-default"><i class="fa fa-plus"></i> Nuevo Registro </a>
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
                                    <th class="text-center" scope="col">DNI</th>
                                    <th class="text-center" scope="col">Apellidos</th>
                                    <th class="text-center" scope="col">Nombres</th>
                                    <th class="text-center" scope="col">Dirección</th>
                                    <th class="text-center" scope="col">Celular</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td class="text-center">{{$customer->cust_id}}</td>
                                            <td class="text-center">{{$customer->cust_dni}}</td>
                                            <td class="text-center">{{$customer->cust_last_name}} {{$customer->cust_maiden_name}}</td>
                                            <td class="text-center">{{$customer->cust_first_name}} {{$customer->cust_other_name}}</td>
                                            @if ($customer->cust_address == '-')
                                                <td class="text-center">{{$customer->cust_address}}</td>
                                            @else
                                                <td class="text-center">{{$customer->cust_address}}, {{$customer->cust_city}} -  {{$customer->cust_region}}</td>
                                            @endif
                                            <td class="text-center">{{$customer->cust_phone}}</td>
                                            <td class="text-center">
                                                @if ($customer->cust_state == 1)
                                                    <span class="badge badge-success">Activo</span>
                                                @else
                                                    <span class="badge badge-danger">Desactivo</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('customers.edit',$customer->cust_id)}}" class="btn btn-app"><i class="fa fa-edit"></i> Editar</a>
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
