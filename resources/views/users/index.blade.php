@extends('layouts.plantilla')

@section('titulo')
    <h3>Usuarios</h3>
@endsection

@section('contenido')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Mantenimiento de<b> Usuarios</b></h2>
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
                        <button type="button" class="btn btn btn-round btn-default" data-toggle="modal" data-target="#createroles"><i class="fa fa-plus"></i> Nuevo Registro </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createroles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{route('users.store')}}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Rol <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="role_id" id="role_id">
                                                        <option value="">Seleccione role</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{$role->role_id}}" {{$role->role_id == old('role_id') ? 'selected' : ''}}>{{$role->role_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('role_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_name">Usuario <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="user_name" name="user_name" required="required" class="form-control @error('user_name') is-invalid @enderror" value="{{old('user_name')}}">
                                                    @error('user_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="email" name="email" required="required" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="password" id="password" name="password" required="required" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
                                                    @error('password')
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
                                    <th class="text-center" scope="col">Rol</th>
                                    <th class="text-center" scope="col">Usuario</th>
                                    <th class="text-center" scope="col">Email</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td data-titulo="Código" class="text-center">{{$user->user_id}}</td>
                                            <td data-titulo="Rol" class="text-center">{{$user->roles->role_name}}</td>
                                            <td data-titulo="Usuario" class="text-center">{{$user->user_name}}</td>
                                            <td data-titulo="Email" class="text-center">{{$user->email}}</td>
                                            <td data-titulo="Estado" class="text-center">
                                                @if ($user->user_state == 1)
                                                    <span class="badge badge-success">Activo</span>
                                                @else
                                                    <span class="badge badge-danger">Desactivo</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-app"  data-toggle="modal" data-target="#editroles{{$user->user_id}}"> <i class="fa fa-edit"></i> Editar</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editroles{{$user->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form method="POST" action="{{ route('users.update',$user->user_id)}}">
                                                                @method('put')
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Rol</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">Código: </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="user_id" name="user_id" class="form-control" value="{{$user->user_id}}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_name">User: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="user_name" name="user_name" required="required" class="form-control @error('user_name') is-invalid @enderror" value="{{$user->user_name}}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Role: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
                                                                                <option value="">Seleccione role</option>
                                                                                @foreach ($roles as $role)
                                                                                    <option value="{{$role->role_id}}" {{$role->role_id == $user->role_id ? 'selected' : ''}}>{{$role->role_name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('role_id')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{$message}}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email: <span class="required">*</span></label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="text" id="email" name="email" required="required" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}">
                                                                            @error('email')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{$message}}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Contraseña (*): </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <input type="password" id="password" name="password" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-3 label-align" for="user_state">Estado: <span class="required">*</span></label>
                                                                        <div class="col-md-1 col-sm-1 col-xs-1 ">
                                                                            @if ($user->user_state == 1)
                                                                                <input type="checkbox" class="js-switch" checked />
                                                                            @else
                                                                                <input type="checkbox" class="js-switch" />
                                                                            @endif
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