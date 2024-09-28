<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0">GreenRecycle</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a  href="{{ url ('/home')}}" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="{{ url ('/teams')}}" class="nav-item nav-link">Teams</a>
            <a href="{{ url ('/events/user')}}" class="nav-item nav-link">Events</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Reclamation</a>
                <div class="dropdown-menu bg-light m-0">
                    @if(auth()->check())
                    <a href="{{ url('/reclamations/create') }}" class="dropdown-item">Submit Reclamation</a>
                    @else
                    <a href="{{ url('/login') }}" class="dropdown-item">Submit Reclamation</a>
                @endif
                    @if(auth()->check())
                        <a href="{{ url('/reclamations') }}" class="dropdown-item">View Reclamation</a>
                    @else
                        <a href="{{ url('/login') }}" class="dropdown-item">View Reclamation</a>
                    @endif
                </div>
            </div>


        </div>
        <a href="{{ url ('/login')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
