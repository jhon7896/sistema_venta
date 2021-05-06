@extends('layouts.plantilla')

@section('titulo')
    <h3>Generar Venta</h3>
@endsection

@section('contenido')
    {{-- Productos --}}
    <div class="col-md-6 col-sm-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-tag"></i> Productos</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                class="fa fa-wrench"></i></a>
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
                
                <form method="POST" action="{{ route('sales.store')}}">

                    @csrf

                    <div class="form-group row">
                        <select name="prod_id" id="select-prod_id" class="form-control select2 select2-hidden-accessible selectpicker" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" data-live-search="true">
                            <option value="">Busqueda ...</option>
                            @foreach ($products as $product)
                                <option value="{{$product->prod_id}}">{{$product->prod_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-12 col-sm-12" for="prod_id"><b>Código</b></span></label>
                        <div class="col-md-12 col-sm-12 ">
                            <input type="text" id="prod_id" name="prod_id" required="required" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-12 col-sm-12" for="prod_name"><b>Nombre</b></span></label>
                        <div class="col-md-12 col-sm-12 ">
                            <input type="text" id="prod_name" name="prod_name" required="required" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label" for="prod_sale_price"><b>Precio de Venta</b></span></label>
                            <input type="text" id="prod_sale_price" name="prod_sale_price" required="required" class="form-control" readonly>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label class="col-form-label" for="prod_stock"><b>Stock</b></span></label>
                            <input type="text" id="prod_stock" name="prod_stock" required="required" class="form-control" readonly>
                        </div>

                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label" for="sale_discount"><b>Desc. por Producto</b></span></label>
                            <input type="text" id="sale_discount" name="sale_discount" required="required" class="form-control" readonly>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label class="col-form-label" for="sale_quantity"><b>Cantidad</b></span></label>
                            <input type="text" id="sale_quantity" name="sale_quantity" required="required" class="form-control" readonly>
                        </div>
                        
                    </div>

                    <div class="form-group row" style="float: right">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- Venta --}}
    <div class="col-md-6 col-sm-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-money"></i> Venta</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                class="fa fa-wrench"></i></a>
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
                @if (session('datos'))
                    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                        {{ session('datos') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>
        
@endsection