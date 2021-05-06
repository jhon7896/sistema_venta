@extends('layouts.plantilla')

@section('titulo')
    <h3>Perfil</h3>
@endsection

@section('contenido')
    <div class="x_panel">

        <div class="x_title">
            <h2>Acerca del Usuario</h2>
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
            <div class="col-md-3 col-sm-3  profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                        <!-- Current avatar  auth()->user()->user_image_route }} /storage/fotoperfil/ -->
                        <img class="img-responsive avatar-view"
                            src="{{ auth()->user()->user_image_route }}{{ auth()->user()->user_image_name }}" width="220px"
                            height="220px" alt="Avatar" title="Change the avatar">
                    </div>
                </div>
                <h3>{{ auth()->user()->user_name }}</h3>
                <!-- Button trigger modal -->
                <button class="btn btn-success" data-toggle="modal" data-target="#editprofile{{ auth()->user()->user_id }}">
                    <i class="fa fa-edit m-right-xs"></i> Editar</button>
                <!-- Modal -->
                <div class="modal fade" id="editprofile{{ auth()->user()->user_id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('profile.update', auth()->user()->user_id) }}"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">Código:
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input class="form-control text-center" type="text" name="user_id"
                                                value="{{ auth()->user()->user_id }}" readonly>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Rol:
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            @if (auth()->user()->role_id == 1)
                                                <input class="form-control text-center" type="hidden" name="role_id" value="{{ auth()->user()->role_id }}" readonly>
                                                <input class="form-control text-center" type="text" value="Administrador" readonly>
                                            @elseif(auth()->user()->role_id == 2)
                                                <input class="form-control text-center" type="hidden" name="role_id" value="{{ auth()->user()->role_id }}" readonly>
                                                <input class="form-control text-center" type="text" value="Editor" readonly>
                                            @elseif(auth()->user()->role_id == 3)
                                                <input class="form-control text-center" type="hidden" name="role_id" value="{{ auth()->user()->role_id }}" readonly>
                                                <input class="form-control text-center" type="text" value="Jefe" readonly>
                                            @elseif(auth()->user()->role_id == 4)
                                                <input class="form-control text-center" type="hidden" name="role_id" value="{{ auth()->user()->role_id }}" readonly>
                                                <input class="form-control text-center" type="text" value="Empleado" readonly>
                                            @else
                                                <input class="form-control text-center" type="hidden" name="role_id" value="{{ auth()->user()->role_id }}" readonly>
                                                <input class="form-control text-center" type="text" value="Invitado" readonly>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_name">Nombre
                                            usuario: </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"
                                                class="form-control text-center @error('user_name') is-invalid @enderror"
                                                id="user_name" name="user_name" value="{{ auth()->user()->user_name }}"
                                                readonly>
                                            @error('user_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email:
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"
                                                class="form-control text-center @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ auth()->user()->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="user_image_name">Foto </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="file" id="user_image_name" name="user_image_name"
                                                class="form-control">
                                            <img src="{{ auth()->user()->user_image_route }}{{ auth()->user()->user_image_name }}"
                                                width="213px" height="220px" alt="Avatar"
                                                style="display:block; margin:auto;" title="Change the avatar">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                            class="fa fa-ban"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>
                                        Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 ">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                data-toggle="tab" aria-expanded="true">Perfil</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab"
                                data-toggle="tab" aria-expanded="false">Actividad reciente</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">


                            <h3><i class="fa fa-info-circle user-profile-icon"></i> {{ auth()->user()->user_id }}</h3>
                            <h3>
                                <i class="fa fa-users user-profile-icon"></i>
                                @if (auth()->user()->role_id == 1)
                                    Administrador
                                @elseif(auth()->user()->role_id == 2)
                                    Editor
                                @elseif(auth()->user()->role_id == 3)
                                    Jefe
                                @elseif(auth()->user()->role_id == 4)
                                    Empleado
                                @else
                                    Invitado
                                @endif
                            </h3>
                            <h3><i class="fa fa-envelope user-profile-icon"></i> {{ auth()->user()->email }}</h3>


                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <!-- start recent activity -->
                            <ul class="messages">
                                <li>
                                    <img src="{{ auth()->user()->user_image_route }}Administrator.jpg" class="avatar"
                                        alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-info">27</h3>
                                        <p class="month">Marzo</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Administrador</h4>
                                        <blockquote class="message">Bienvenidos al sistema, la pestaña de actividades
                                            recientes estará disponible en una proxima actualización</blockquote>
                                        <br />
                                        <p class="url">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a href="https://wa.me/51973835639/?text=Hola%20cualquier%20consulta%20!Hazmela%20saber!"
                                                target="_blank"><i class="fa fa-paperclip"></i> Consultar </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <!-- end recent activity -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
