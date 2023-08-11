<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <section class="container">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-cloud-haze2 logo" viewBox="0 0 16 16">
            <path
                d="M8.5 3a4.002 4.002 0 0 0-3.8 2.745.5.5 0 1 1-.949-.313 5.002 5.002 0 0 1 9.654.595A3 3 0 0 1 13 12H4.5a.5.5 0 0 1 0-1H13a2 2 0 0 0 .001-4h-.026a.5.5 0 0 1-.5-.445A4 4 0 0 0 8.5 3zM0 7.5A.5.5 0 0 1 .5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm2 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-2 4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z" />
        </svg>
        <a class="navbar-brand" href="{{ route('index') }}">Fairness</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse PositionNavBar" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link PositionLinkNavBar" href="#">Wordpress <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link PositionLinkNavBar" href="#">Website Builder <span
                            class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link PositionLinkNavBar" href="#">Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link PositionLinkNavBar" href="#">Dominios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link PositionLinkNavBar" href="{{ route('whoAre') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <button type="button" onclick="window.location.href = '{{ route('login') }}'" class="btn btn-outline-dark">Login</button>
                </li>
            </ul>
        </div>
    </section>
</nav>
