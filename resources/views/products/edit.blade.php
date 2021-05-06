@extends('layouts.plantilla')

@section('titulo')
    <h3>Mercadería</h3>
@endsection

@section('contenido')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Registrar <small>Nuevo proveedor</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a></li>
                            <li><a href="#">Settings 2</a></li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="{{ route('products.update', $product->prod_id) }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">Paso 1<br /><small>Información General</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">Paso 2<br /><small>Información Específica</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">Paso 3<br /><small>Información Costo</small></span>
                                </a>
                            </li>
                        </ul>
                        <div id="step-1">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cate_id">Categoría <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="cate_id" id="cate_id" class="form-control select2 select2-hidden-accessible selectpicker" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" data-live-search="true">
                                        <option value="">Seleccione ...</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->cate_id}}" {{ $category->cate_id == $product->cate_id ? 'selected' : '' }}>{{$category->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_id">Código <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="prod_id" name="prod_id" required="required" class="form-control" value="{{$product->prod_id}}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_name">Nombre <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="prod_name" name="prod_name" required="required" class="form-control" value="{{$product->prod_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_description">Descripción </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea type="text" id="prod_description" name="prod_description" required="required" class="form-control">{{$product->prod_description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_phone">Imagen <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="prod_image" name="prod_image" class="form-control" accept="image/*">
                                    <img src="/img/productos/{{ $product->prod_image }}" width="30%" alt="Avatar" style="display:block; margin:auto;" title="Change the avatar">
                                </div>
                            </div>

                        </div>
                        <div id="step-2">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_id">Proveedor <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="supp_id" id="supp_id" class="form-control select2 select2-hidden-accessible selectpicker" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" data-live-search="true">
                                        <option value="">Seleccione ...</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{$supplier->supp_id}}" {{ $supplier->supp_id == $product->supp_id ? 'selected' : '' }}>{{$supplier->supp_contact_title}} {{$supplier->supp_contact_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_stock">Stock <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="prod_stock" name="prod_stock" class="form-control" value="{{$product->prod_stock}}" readonly>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="size_id">Talla <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#addsizes">  Agregar</button>
                                    <table id="size_detail" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Código</th>
                                                <th class="text-center" scope="col">Talla</th>
                                                <th class="text-center" scope="col">Stock</th>
                                                <th class="text-center" scope="col">Opción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($psizes as $psize)
                                                <tr>
                                                    <td class="text-center"><input name="sizesid[]"  type="hidden" class="text-center" value="{{$psize->size_id}}">{{$psize->size_id}}</td>
                                                    <td class="text-center">{{$psize->psiz_name}}</td>
                                                    <td class="text-center"><input name="sizstocks[]" class="text-center" value="{{$psize->psiz_stock}}"></td>
                                                    <td class="text-center"><a href="#">Quitar</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal fade" id="addsizes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar Talla</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <label for="">Talla</label>
                                                        <select class="form-control select2 select2-hidden-accessible selectpicker" name="size_id" id="size_id" onchange="addsize();" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" data-live-search="true">
                                                            <option selected disabled hidden style='display: none' value='-1'>Seleccione talla</option>
                                                            @foreach ($sizes as $size)
                                                                <option value="{{$size->size_id}}_{{$size->size_name}}">{{$size->size_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <p>Select "Volver" below if you are ready to exit.</p>

                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cerrar</button>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="color_id">Color <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#addcolors">  Agregar</button>
                                    <table id="color_detail" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Código</th>
                                                <th class="text-center" scope="col">Color</th>
                                                <th class="text-center" scope="col">RGBA</th>
                                                <th class="text-center" scope="col">Stock</th>
                                                <th class="text-center" scope="col">Opción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pcolors as $pcolor)
                                                <tr>
                                                    <td class="text-center"><input name="colorsid[]" type="hidden" class="text-center" value="{{$pcolor->color_id}}">{{$pcolor->color_id}}</td>
                                                    <td class="text-center">{{$pcolor->pcol_name}}</td>
                                                    <td class="text-center">{{$pcolor->pcol_rgb}}</td>
                                                    <td class="text-center"><input name="colstocks[]" class="text-center" value="{{$pcolor->pcol_stock}}"></td>
                                                    <td class="text-center"><a href="#">Quitar</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal fade" id="addcolors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar color</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <label for="">Color</label>
                                                    <select class="form-control select2 select2-hidden-accessible selectpicker" name="color_id" id="color_id" onchange="addcolor();" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" data-live-search="true">
                                                        <option selected disabled hidden style='display: none' value='-1'>Seleccione color</option>
                                                        @foreach ($colors as $color)
                                                            <option value="{{$color->color_id}}_{{$color->color_name}}_{{$color->color_rgba}}">{{$color->color_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p>Select "Volver" below if you are ready to exit.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="step-3">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_purchase_price">Precio compra <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="prod_purchase_price" name="prod_purchase_price" required="required" class="form-control" value="{{ $product->prod_purchase_price }}">
                                </div>
                            </div>
                            
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="prod_sale_price">Precio venta <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="prod_sale_price" name="prod_sale_price" required="required" class="form-control" value="{{ $product->prod_sale_price }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('products.index')}}" class="btn btn-default">Retroceder</a>
                </form>
            </div>
        </div>
    </div>
@endsection

