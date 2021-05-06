@extends('layouts.plantilla')

@section('titulo')
    <h3>Proveedor</h3>
@endsection

@section('contenido')

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Registrar <small>Nuevo proveedor</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                <form method="POST" action="{{ route('suppliers.store')}}">
                    @csrf
                    <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">Paso 1<br /><small>Información Personal</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">Paso 2<br /><small>Información Domicilio</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">Paso 3<br /><small>Información Empresarial</small></span>
                                </a>
                            </li>
                        </ul>
                        <div id="step-1">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_dni">DNI </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_dni" name="supp_dni"  class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_contact_name">Nombre Contacto <span class="required">*</span></label>
                                <div class="col-md-1 col-sm-1 ">
                                    <select class="form-control" name="supp_contact_title" id="supp_contact_title">
                                        <option value="">Seleccione</option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="Sra.">Sra.</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-sm-5 ">
                                    <input type="text" id="supp_contact_name" name="supp_contact_name" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_phone">Celular <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_phone" name="supp_phone" required="required" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div id="step-2">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_address">Dirección <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_address" name="supp_address" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_city">Ciudad <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_city" name="supp_city" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_region">Departamento <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_region" name="supp_region" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_country">País <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_country" name="supp_country" required="required" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div id="step-3">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_companyname">Nombre Compañia <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_companyname" name="supp_companyname" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_ruc">RUC </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_ruc" name="supp_ruc" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="supp_homepage">Pagina web </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="supp_homepage" name="supp_homepage" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="{{route('suppliers.index')}}" class="btn btn-default">Retroceder</a>
                </form>
            </div>
        </div>
    </div>
@endsection