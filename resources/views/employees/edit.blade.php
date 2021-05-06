@extends('layouts.plantilla')

@section('titulo')
    <h3>Empleado</h3>
@endsection

@section('contenido')

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar <small>Empleado</small></h2>
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
                <form method="POST" action="{{ route('employees.update',$employee->empl_id)}}">
                    @method('put')
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_id">Código <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_id" name="empl_id" required="required" class="form-control" value="{{$employee->empl_id}}" disabled>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_dni">DNI <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_dni" name="empl_dni" required="required" class="form-control" value="{{$employee->empl_dni}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_last_name">Apellido Paterno <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_last_name" name="empl_last_name"  class="form-control" value="{{$employee->empl_last_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_maiden_name">Apellido Materno</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_maiden_name" name="empl_maiden_name" required="required" class="form-control" value="{{$employee->empl_maiden_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_first_name">Nombre <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_first_name" name="empl_first_name" required="required" class="form-control" value="{{$employee->empl_first_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_other_name">Otros Nombres </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_other_name" name="empl_other_name" class="form-control" value="{{$employee->empl_other_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_birthday">Fecha de Nacimiento <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_birthday" name="empl_birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="{{$employee->empl_birthday}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_cellphone">Celular <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_cellphone" name="empl_cellphone" required="required" class="form-control" value="{{$employee->empl_cellphone}}">
                                </div>
                            </div>

                        </div>
                        <div id="step-2">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_address">Dirección <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_address" name="empl_address" required="required" class="form-control" value="{{$employee->empl_address}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_homephone">Telefono <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_homephone" name="empl_homephone" required="required" class="form-control" value="{{$employee->empl_homephone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_city">Ciudad <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_city" name="empl_city" required="required" class="form-control" value="{{$employee->empl_city}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_region">Departamento <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_region" name="empl_region" required="required" class="form-control" value="{{$employee->empl_region}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_country">País <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_country" name="empl_country" required="required" class="form-control" value="{{$employee->empl_country}}">
                                </div>
                            </div>
                        </div>
                        <div id="step-3">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_title">Tipo <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="empl_title" id="empl_title">
                                        <option value="-">Seleccione</option>
                                        <option value="Jefe" {{$employee->empl_title == 'Jefe' ? 'selected' : ''}}>Jefe</option>
                                        <option value="Empleado" {{$employee->empl_title == 'Empleado' ? 'selected' : ''}}>Empleado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_ruc">RUC </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_ruc" name="empl_ruc" class="form-control" value="{{$employee->empl_ruc}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="empl_hireday">Fecha de Ingreso <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="empl_hireday" name="empl_hireday" class="date-picker form-control" placeholder="dd-mm-yyyy" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="{{$employee->empl_hireday}}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="{{route('employees.index')}}" class="btn btn-default">Retroceder</a>
                </form>
            </div>
        </div>
    </div>
@endsection