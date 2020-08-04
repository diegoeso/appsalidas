@extends('layouts.login.login')
@section('title', 'Login-Estudiante')
@section('user', 'Estudiante')
@section('role')
    <input type="hidden" name="role" value="Estudiante">
@endsection
@section('login-users')
    <div class="d-flex justify-content-around px-3 ">
        <a type="button" href="{{ route('showLogin') }}/docente" data-toggle="tooltip" data-placement="bottom"
            title="Docente"><i class="fas fa-user fa-3x" style="color: rgb(161, 10, 10)"></i></a>
        <a type="button" href="{{ route('showLogin') }}/director" data-toggle="tooltip" data-placement="bottom"
            title="Director de Programa"> <i class="fas fa-user-tie fa-3x" style="color: rgb(161, 10, 10)"></i>
        </a>
    </div>
@endsection
