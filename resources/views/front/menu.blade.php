<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('/') }}front/images/joblogo.png" alt="" style="height: 50px;width: 100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a style="color: black" href="{{ route('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a style="color: black" href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a style="color: black" href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a style="color: black" href="{{ route('contact') }}" class="nav-link">Contact</a></li>

                <li class="dropdown show nav-item cta mr-md-2">
                    @if(Session::get('companyVisitorId'))
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Session::get('companyVisitorName') }}
                        </a>
                    @else
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Post a Job
                        </a>
                    @endif

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @if(Session::get('companyVisitorId'))
                            <a class="dropdown-item" href="#" onclick="
                                    event.preventDefault();
                                    document.getElementById('visitorLogoutForm').submit();
                                    ">Logout</a>
                            <form id="visitorLogoutForm" action="{{ route('company-visitor-logout') }}" method="POST">
                                @csrf
                            </form>
                        @else
                            <a class="dropdown-item" href="{{ route('company-login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('company-sign-up') }}">Sign Up</a>
                        @endif
                    </div>
                </li>

                <li class="dropdown show nav-item cta">
                    @if(Session::get('candidateVisitorId'))
                        <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Session::get('candidateVisitorName') }}
                        </a>
                    @else
                        <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Want a Job
                        </a>
                    @endif

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @if(Session::get('candidateVisitorId'))
                            <a class="dropdown-item" href="#" onclick="
                                    event.preventDefault();
                                    document.getElementById('visitorLogoutForm').submit();
                                    ">Logout</a>
                            <form id="visitorLogoutForm" action="{{ route('candidate-visitor-logout') }}" method="POST">
                                @csrf
                            </form>
                        @else
                            <a class="dropdown-item" href="{{ route('candidate-login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('candidate-sign-up') }}">Sign Up</a>
                        @endif
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->