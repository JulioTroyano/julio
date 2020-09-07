@auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth

<nav class="navbar nav-extended no-padding dark-primary-color">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo dark-primary-color-text">WebCargo</a>
        @auth
            <ul id="nav-mobile" class="right">
                <li><a href="#" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">person</i></a></li>
                <li><a href="#" class="waves-effect dark-primary-color-text" type="submit">Cerrar sesión</a></li>
            </ul>
            <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons dark-primary-color-icon">menu</i></a>
        @endauth

        @yield('breadcrumb')
    </div>
    <div class="nav-content">
        @yield('nav-content')
    </div>
</nav>
