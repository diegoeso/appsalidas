@extends('layouts.role.administrador.home')
@section('title', 'Perfil')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-3 d-none d-sm-block d-md-block">Información Personal</h1>
            <ol class="breadcrumb mb-2 mt-3">
                <li class="breadcrumb-item active">Datos personales</li>
            </ol>
            <div class="row">
                <div class="col-12 col-md-4 pt-3">
                    <img class="img-fluid rounded-circle" src="{{ asset('imgs/img_avatar1.png') }}">
                </div>
                <div class="table-responsive col-12 col-md-8 mt-3">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>Facultad:</td>
                                <td>{{ auth()->user()->program->faculty->name }}</td>
                            </tr>
                            <tr>
                                <td>Programa:</td>
                                <td>{{ auth()->user()->program->name }}</td>
                            </tr>
                            <tr>
                                <td>Código:</td>
                                <td>{{ auth()->user()->code }}</td>
                            </tr>
                            <tr>
                                <td>Tipo de documento:</td>
                                <td>{{ auth()->user()->doc->name }}</td>
                            </tr>
                            <tr>
                                <td>Documento:</td>
                                <td>{{ auth()->user()->document }}</td>
                            </tr>
                            <tr>
                                <td>Nombres:</td>
                                <td>{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Apellidos:</td>
                                <td>{{ auth()->user()->lastname }}</td>
                            </tr>
                            <tr>
                                <td>Celular:</td>
                                <td>{{ auth()->user()->phone }}</td>
                            </tr>
                            <tr>
                                <td>Dirección:</td>
                                <td>{{ auth()->user()->address }}</td>
                            </tr>
                            <tr>
                                <td>Correo electrónico institucional:</td>
                                <td>{{ auth()->user()->emailu }}</td>
                            </tr>
                            <tr>
                                <td>Correo electrónico personal:</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Fecha de nacimiento:</td>
                                <td>{{ auth()->user()->birth }}</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
