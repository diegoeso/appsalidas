@extends('layouts.login.login')
@section('title', 'Login-Docente')
@section('user', 'Docente')
@section('role')
    <input type="hidden" name="role" value="Docente">
@endsection

@section('login-users')
    <div class="d-flex justify-content-around px-3 ">
        <a type="button" href="{{ route('showLogin') }}/estudiante" data-toggle="tooltip" data-placement="bottom"
            title="Estudiante"><i class="fas fa-user-graduate fa-3x" style="color: rgb(161, 10, 10)"></i></a>
        <a type="button" href="{{ route('showLogin') }}/director" data-toggle="tooltip" data-placement="bottom"
            title="Director de Programa"> <i class="fas fa-user-tie fa-3x" style="color: rgb(161, 10, 10)"></i>
        </a>
    </div>
@endsection
