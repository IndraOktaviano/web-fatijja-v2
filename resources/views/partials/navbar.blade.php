<nav id="navbar" class="navbar navbar-expand-lg {{ Request::is('/') ? 'fixed-top' : '' }}">
    <div class="container-fluid px-md-5">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Fatijja" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="{{ url('/q-ino') }}">Q-INO</a>
                </li>
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="{{ url('/q-edu') }}">Q-EDU</a>
                </li>
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="{{ url('/q-lab') }}">Q-LAB</a>
                </li>
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="{{ url('/q-gro') }}">Q-GRO</a>
                </li>
                <li class="nav-item me-md-3">
                    <a class="nav-link" href="#footer">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
