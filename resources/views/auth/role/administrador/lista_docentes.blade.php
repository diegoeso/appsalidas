@extends('layouts.role.administrador.home')
@section('title', 'Docentes')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-3 d-none d-sm-block d-md-block">Docentes</h1>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active">Todos los Docentes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header py-0 px-3">
                    <button type="button" class="btn btn-appsalidas my-3 py-2 px-4 font-weight-bolder d-flex mr-auto"
                        data-toggle="modal" data-target="#myModal">
                        Registrar Docente
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
                                    <th>Email Universidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot class="thead-dark">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Código</th>
                                    <th>Email Universidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php $i = 1; ?>
                                @forelse ($docentes as $docente)
                                    <tr class="text-center text-monospace">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $docente->name }}</td>
                                        <td>{{ $docente->lastname }}</td>
                                        <td>{{ $docente->code }}</td>
                                        <td>{{ $docente->email_u }}</td>
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
                                                    <div class="col-sm-12 col-md-6 bg-danger text-center">
                                                        <form action="{{ route('estudiante.deleteActivity') }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash fa-1x" aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
