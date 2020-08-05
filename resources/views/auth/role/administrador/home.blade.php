@extends('layouts.role.administrador.home')
@section('title', 'Inicio')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-3 d-none d-sm-block d-md-block">
            Usuarios
        </h1>
        <ol class="breadcrumb mb-2 mt-3">
            <li class="breadcrumb-item active">
                Todos los usuarios
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header py-0 px-3">
                <button class="btn btn-appsalidas my-3 py-2 px-4 font-weight-bolder d-flex mr-auto" data-target="#myModal" data-toggle="modal" type="button">
                    Registrar Usuario
                </button>
                @if (isset($alert) && $alert == 'Ok2')
                <div class="alert alert-success alert-dismissible">
                    <button class="close" data-dismiss="alert" type="button">
                        ×
                    </button>
                    <strong>
                        ¡Éxito!
                    </strong>
                    Se ha registrado un usuario correctamente.
                </div>
                @endif
                @if (isset($alert) && $alert == 'Error')
                <div class="alert alert-danger alert-dismissible">
                    <button class="close" data-dismiss="alert" type="button">
                        ×
                    </button>
                    <strong>
                        ¡Error!
                    </strong>
                    Ha habido un error en el registro.
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered" id="dataTable" width="100%">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nombres
                                </th>
                                <th>
                                    Apellidos
                                </th>
                                <th>
                                    Código
                                </th>
                                <th>
                                    Documento
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Email Universidad
                                </th>
                                <th>
                                    Roles
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tfoot class="thead-dark">
                            <tr class="text-center">
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nombres
                                </th>
                                <th>
                                    Apellidos
                                </th>
                                <th>
                                    Código
                                </th>
                                <th>
                                    Documento
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Email Universidad
                                </th>
                                <th>
                                    Roles
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($usuarios as $usuario)
                            @if ($usuario->id != auth()->user()->id)
                            <tr class="text-center text-monospace">
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $usuario->name }}
                                </td>
                                <td>
                                    {{ $usuario->lastname }}
                                </td>
                                <td>
                                    {{ $usuario->code }}
                                </td>
                                <td>
                                    {{ $usuario->document }}
                                </td>
                                <td>
                                    {{ $usuario->email }}
                                </td>
                                <td>
                                    {{ $usuario->emailu }}
                                </td>
                                <td>
                                    @forelse ($usuario->roles as $role)
                                    {{ $role->name }}/
                                    @empty

                                    @endforelse
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-id="{{ $usuario->id }}" id="btnEditar">
                                        <i class="fas fa-user-edit fa-1x">
                                        </i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-id="{{ $usuario->id }}" data-name="{{ $usuario->name }}" id="btnEliminar">
                                        <i aria-hidden="true" class="fa fa-trash fa-1x">
                                        </i>
                                    </button>
                                    {{--
                                    <div class="container">
                                        <div class="row mx-auto">
                                            <div class="col-sm-12 col-md-6 bg-primary text-center">
                                                <form action="{{ route('estudiante.editActivity') }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">
                                                        <i class="fas fa-user-edit fa-1x">
                                                        </i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-sm-12 col-md-6 bg-appsalidas text-center">
                                                <form action="{{ route('estudiante.deleteActivity') }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-appsalidas btn-delete" type="submit">
                                                        <i aria-hidden="true" class="fa fa-trash fa-1x">
                                                        </i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    --}}
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
                <h4 class="modal-title" id="modal-title">
                    Registrar Usuario
                </h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('administrador.registrar_usuario') }}" class="was-validated" id="altaUsuario" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Nombres:
                        </label>
                        <input class="form-control" id="name" name="name" placeholder="Nombres" required="" type="text" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="lastname">
                            Apellidos:
                        </label>
                        <input class="form-control" id="lastname" name="lastname" placeholder="Apellidos" required="" type="text" value="{{ old('lastname') }}">
                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email personal:
                        </label>
                        <input class="form-control" id="email" name="email" placeholder="Email personal" required="" type="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="emailu">
                            Email universitario:
                        </label>
                        <input class="form-control" id="emailu" name="emailu" placeholder="Email universitario" required="" type="email" value="{{ old('emailu') }}">
                            @error('emailu')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Dirección:
                        </label>
                        <input class="form-control" id="address" name="address" placeholder="Dirección" required="" type="text" value="{{ old('address') }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="phone">
                            Celular:
                        </label>
                        <input class="form-control" id="phone" name="phone" placeholder="Celular" required="" type="text" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Fecha de Nacimiento:
                        </label>
                        <input class="form-control" id="birth" max="2004-12-31" min="1950-01-01" name="birth" required="" type="date" value="{{ old('birth') }}">
                            @error('birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="code">
                            Código:
                        </label>
                        <input class="form-control" id="code" name="code" placeholder="Código" required="" type="text" value="{{ old('code') }}">
                            @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password:
                        </label>
                        <input class="form-control" id="password" name="password" placeholder="Contraseña" required="" type="password" value="">
                        </input>
                    </div>
                    <button class="btn btn-appsalidas" type="submit">
                        Registrar
                    </button>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-appsalidas2" data-dismiss="modal" type="button">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("body").on("click", "#dataTable #btnEditar", function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: baseuri+'administrador/datos-usuario/'+id,
                type: 'GET',
                dataType: 'json',
                success:function(res){
                    if (res) {
                        $("#altaUsuario").attr('action', baseuri+'usuario/'+id);  
                        $("#altaUsuario").attr('method', 'PUT');
                        $('#modalUsuario #modal-title').html('Editar Registro');   
                        $('#myModal').modal('show');
                        $('#name').val(res.name);
                        $('#lastname').val(res.lastname);
                        $('#email').val(res.email);
                        $('#emailu').val(res.emailu);
                        $('#address').val(res.address);
                        $('#phone').val(res.phone);
                        $('#birth').val(res.birth);
                        $('#code').val(res.code);
                    }
                }  
            });
        });
        $("body").on("click", "#dataTable #btnEliminar", function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            alertify.confirm('Eliminar', '¿Desea eliminar el registro de '+name+'?', 
                function()
                { 
                    $.ajax({
                        url: baseuri+'administrador/eliminar/'+id,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) 
                        {
                            console.log(data);
                            if (data.success == 'true') {                               
                                 alertify.success('Ok') 
                                // datable.ajax.reload();
                            }
                            else {                               
                                alertify.error('Cancel')          
                                // datable.ajax.reload();
                            }
                        }
                    });
                   
                }, 
                function()
                { 
                    alertify.error('Cancel')
                }
            );    
              
        });
        
    });
</script>
@endsection
