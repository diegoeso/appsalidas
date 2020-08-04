@extends('layouts.role.administrador.home')
@section('title', 'Inicio')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-3 d-none d-sm-block d-md-block">Usuarios</h1>
            <ol class="breadcrumb mb-2 mt-3">
                <li class="breadcrumb-item active">Todos los usuarios</li>
            </ol>


            <div class="card mb-4">
                <div class="card-header py-0 px-3">
                    <button type="button" class="btn btn-appsalidas my-3 py-2 px-4 font-weight-bolder d-flex mr-auto"
                        data-toggle="modal" data-target="#myModal">
                        Registrar Usuario
                    </button>
                    @if (isset($alert) && $alert == 'Ok2')
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>¡Éxito!</strong> Se ha registrado un usuario correctamente.
                        </div>
                    @endif
                    @if (isset($alert) && $alert == 'Error')
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>¡Error!</strong> Ha habido un error en el registro.
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Código</th>
                                    <th>Documento</th>
                                    <th>Email</th>
                                    <th>Email Universidad</th>
                                    <th>Roles</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot class="thead-dark">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Código</th>
                                    <th>Documento</th>
                                    <th>Email</th>
                                    <th>Email Universidad</th>
                                    <th>Roles</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                @forelse ($usuarios as $usuario)
                                    @if ($usuario->id != auth()->user()->id)
                                        <tr class="text-center text-monospace" data-id="{{ $usuario->id }}">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->lastname }}</td>
                                            <td>{{ $usuario->code }}</td>
                                            <td>{{ $usuario->document }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->emailu }}</td>
                                            <td>@forelse ($usuario->roles as $role)
                                                    {{ $role->name }}/
                                                @empty

                                    @endforelse</td>
                                    <td>
                                        <div class="container">
                                            <div class="row mx-auto">
                                                <div class="col-sm-12 col-md-6 bg-primary text-center">
                                                    <form action="{{ route('estudiante.editActivity') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fas fa-user-edit fa-1x"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-12 col-md-6 bg-appsalidas text-center">
                                                    <form action="{{ route('estudiante.deleteActivity') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-appsalidas btn-delete"><i
                                                                class="fa fa-trash fa-1x" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    </tr>
                                    @endif
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header mx-auto">
                        <h4 class="modal-title">Registrar Usuario</h4>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ route('administrador.registrar_usuario') }}" class="was-validated" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombres:</label>
                                <input type="text" class="form-control" id="name" placeholder="Nombres" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellidos:</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="lastname"
                                    value="{{ old('lastname') }}" required>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email personal:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email personal" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emailu">Email universitario:</label>
                                <input type="email" class="form-control" id="emailu" placeholder="Email universitario"
                                    name="emailu" value="{{ old('emailu') }}" required>
                                @error('emailu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Dirección:</label>
                                <input type="text" class="form-control" id="address" placeholder="Dirección" name="address"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Celular:</label>
                                <input type="text" class="form-control" id="phone" placeholder="Celular" name="phone"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Fecha de Nacimiento:</label>
                                <input type="date" name="birth" max="2004-12-31" min="1950-01-01" class="form-control"
                                    value="{{ old('birth') }}" required>
                                @error('birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="code">Código:</label>
                                <input type="text" class="form-control" id="code" placeholder="Código" name="code"
                                    value="{{ old('code') }}" required>
                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña"
                                    name="password" value="" required>
                            </div>
                            <button type="submit" class="btn btn-appsalidas">Registrar</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-appsalidas2" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @section('script')

    @endsection
