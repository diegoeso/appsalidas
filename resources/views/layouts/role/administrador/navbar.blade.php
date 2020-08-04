<nav class="sb-topnav navbar navbar-expand navbar-dark bg-appsalidas">
    <a class="navbar-brand" href="{{ route('administrador.home') }}">
        <h3 class="text-white font-weight-bold">Administrador</h3>
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="ml-auto mr-3 my-auto py-2">
        <p class=""> <a class="text-white font-weight-bolder d-none d-sm-block d-md-block"
                href="{{ route('estudiante.home') }}">{{ auth()->user()->name }}</a></p>
    </div>
    <!-- Navbar-->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="hidden" name="role" value="Estudiante">
        <button type="submit" class="btn btn-appsalidas2"><i class="fa fa-power-off"></i></button>
    </form>
</nav>
