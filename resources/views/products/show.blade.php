@extends('layouts.plantilla')

@section('titulo')
  <h3>Mercadería</h3>
@endsection

@section('contenido')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Información <small>Mercadería</small></h2>
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
              <div class="row">
                <div class="card-box table-responsive">
                <div class="col-md-7 col-sm-7 ">
                    <div class="product-image">
                        <img class="img-responsive avatar-view" src="/img/productos/{{ $product->prod_image }}" alt="Avatar"
                            title="Change the avatar">
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title">{{ $product->prod_name }}</h3>

                    <p>{{ $product->prod_description }}</p>
                    <br />

                    <div class="">
                        <h2>Stock disponible</h2>
                        <button type="button" class="btn btn-default btn-xs">{{ $product->prod_stock }}</button>
                    </div>
                    <br />

                    <div class="">
                        <h2>Colores disponibles</h2>
                        <ul class="list-inline prod_color display-layout">
                          @foreach ($productcolors as $productcolor )
                            <li>
                                <p class="text-center">{{ $productcolor->pcol_name }} : {{ $productcolor->pcol_stock }}</p>
                                <div class="color" style="background-color:{{ $productcolor->pcol_rgb }};"></div>
                                <p></p>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                    <br />
                    
                    <div class="">
                        <h2>Tallas disponibles</h2>
                        <ul class="list-inline prod_size display-layout">
                            @foreach ($productsizes as $productsize)
                                <li>
                                    <button type="button" class="btn btn-default btn-xs">{{ $productsize->psiz_name }} : {{ $productsize->psiz_stock }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <br />

                    <div class="">
                        <div class="product_price">
                            <h1 class="price">S/ {{ $product->prod_sale_price }}</h1>
                            <span class="price-tax">Precio Compra: S/ {{ $product->prod_purchase_price }}</span>
                            <br>
                        </div>
                    </div>
                    
                    <div class="product_social">
                        <ul class="list-inline display-layout">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-rss-square"></i></a>
                            </li>
                        </ul>
                        <a href="{{ route('products.index') }}" class="btn btn-round btn-warning">Retroceder</a>
                    </div>
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
