@extends('layouts.plantilla')

@section('titulo')
    <h3>Cliente</h3>
@endsection

@section('contenido')

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Registrar <small>Nuevo cliente</small></h2>
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
                <form method="POST" action="{{ route('customers.store')}}">
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_dni">DNI <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_dni" name="cust_dni" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_last_name">Apellido Paterno <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_last_name" name="cust_last_name"  class="form-control ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_maiden_name">Apellido Materno</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_maiden_name" name="cust_maiden_name" required="required" class="form-control col" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_first_name">Nombre <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_first_name" name="cust_first_name" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_other_name">Otros Nombres <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_other_name" name="cust_other_name" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_cellphone">Celular <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_cellphone" name="cust_cellphone" required="required" class="form-control  ">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_sexo">Género</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                            <input type="radio" name="cust_sexo" value="M" class="join-btn"> &nbsp; Masculino &nbsp;
                                        </label>

                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                            <input type="radio" name="cust_sexo" value="F" class="join-btn"> Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="step-2">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_address">Dirección <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_address" name="cust_address" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_phone">Telefono <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_phone" name="cust_phone" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_city">Ciudad <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_city" name="cust_city" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_region">Departamento <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_region" name="cust_region" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_country">País <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_country" name="cust_country" required="required" class="form-control  ">
                                </div>
                            </div>
                        </div>
                        <div id="step-3">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_company_name">Nombre Compañia <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_company_name" name="cust_company_name" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_contact_name">Nombre Contacto <span class="required">*</span></label>
                                <div class="col-md-1 col-sm-1 ">
                                    <select class="form-control" name="cust_contact_title" id="cust_contact_title">
                                        <option value="-">Seleccione</option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="Sra.">Sra.</option>
                                        <option value="Lic.">Lic.</option>
                                        <option value="Ing.">Ing.</option>
                                        <option value="Mg.">Mg.</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-sm-5 ">
                                    <input type="text" id="cust_contact_name" name="cust_contact_name" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_ruc">RUC <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_ruc" name="cust_ruc" required="required" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust_contact_phone">Celular <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cust_contact_phone" name="cust_contact_phone" required="required" class="form-control  ">
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="{{route('customers.index')}}" class="btn btn-default">Retroceder</a>
                </form>
            </div>
        </div>
    </div>
@endsection