<nav class="navbar navbar-expand-lg">
    <div class="container d-flex align-items-center">
        <!-- Logo -->
        <div class="logo-wrapper d-flex align-items-center">
            <a class="logo" href="{{ route('HOME::PAGE') }}">
                <img src="{{ asset('img/logo/logo-dark.png') }}" alt="" />
            </a>
        </div>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="icon-bar"><i class="ti-menu"></i></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::path() ==  '/' ? 'active' : ''  }}"
                        href="{{ route('HOME::PAGE') }}"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::path() ==  'about' ? 'active' : ''  }}"
                        href="{{ route('ABOUT::PAGE') }}"
                        >About</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::path() ==  'services' ? 'active' : ''  }}"
                        href="{{ route('SERVICES::PAGE') }}"
                        >Services</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::path() ==  'project' ? 'active' : ''  }}"
                        href="{{ route('PROJECTS::PAGE') }}"
                        >Project</a
                    >
                </li>
                {{-- <li class="nav-item dropdown">
                    <span
                        class="nav-link {{ Request::path() ==  'team' || Request::path() == 'testimonials' || Request::path() == 'clients' || Request::path() == 'faqs' || Request::path() == 'images-gallery' ? 'active' : ''  }}"
                    >
                        Pages <i class="ti-angle-down"></i
                    ></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item">
                            <a
                                class="{{ Request::path() ==  'team' ? 'active' : ''  }}"
                                href="{{ route('TEAM::PAGE') }}"
                                >Team</a
                            >
                        </li>
                        <li class="dropdown-item">
                            <a
                                class="{{ Request::path() ==  'testimonials' ? 'active' : ''  }}"
                                href="{{ route('TESTIMONIALS::PAGE') }}"
                                >Testimonials</a
                            >
                        </li>
                        <li class="dropdown-item">
                            <a
                                class="{{ Request::path() ==  'clients' ? 'active' : ''  }}"
                                href="{{ route('CLIENTS::PAGE') }}"
                                >Clients</a
                            >
                        </li>
                        <li class="dropdown-item">
                            <a
                                class="{{ Request::path() ==  'faqs' ? 'active' : ''  }}"
                                href="{{ route('FAQS::PAGE') }}"
                                >Faqs</a
                            >
                        </li>
                       
                    </ul>
                </li> --}}
                <li class="nav-item">
                            <a
                                class="nav-link {{ Request::path() ==  'clients' ? 'active' : ''  }}"
                                href="{{ route('CLIENTS::PAGE') }}"
                                >Clients</a
                            >
                        </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::path() ==  'contacts' ? 'active' : ''  }}"
                        href="{{ route('CONTACTS::PAGE') }}"
                        >Contact</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>