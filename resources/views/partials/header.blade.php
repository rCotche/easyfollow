<header class="header-global">
        <nav id="navbar-main" aria-label="Primary navigation"
             class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light headroom--not-bottom headroom--pinned headroom--top">
                <div class="container position-relative">
                        <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4"
                        href="{{ url('/') }}">
                        <i class="fab fa-etsy fa-2x navbar-brand-dark"></i>
                        <i class="fab fa-etsy fa-2x navbar-brand-light"></i>
                        </a>

                        <div class="navbar-collapse collapse" id="navbar_global">
                                <div class="navbar-collapse-header">
                                        <div class="row">
                                        <div class="col-6 collapse-brand">
                                                <a href="/" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                                        <i class="fab fa-etsy fa-2x navbar-brand-dark"></i>
                                                </a>
                                        </div>
                                        <div class="col-6 collapse-close"><a
                                                href="/"
                                                class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#navbar_global"
                                                aria-controls="navbar_global" aria-expanded="false" title="close"
                                                aria-label="Toggle navigation"></a></div>
                                        </div>
                                </div>
                                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                                        <li class="nav-item">
                                                <a href="#home" class="nav-link">
                                                        <span class="nav-link-inner-text">Accueil</span>
                                                        
                                                </a>
                                        </li>                                        
                                        <li class="nav-item">
                                                <a href="#feature" class="nav-link">
                                                        <span class="nav-link-inner-text">Fonctionnalités</span>
                                                        
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="#stat" class="nav-link">
                                                        <span class="nav-link-inner-text">Statistiques</span>
                                                        
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="#about" class="nav-link">
                                                        <span class="nav-link-inner-text">Qui sommes nous ?</span>
                                                        
                                                </a>
                                        </li>
                                        
                                </ul>
                        </div>

                        <div class="d-flex align-items-center">
                               @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary text-secondary mr-3">
                                        <i class="fas fa-sign-in-alt mr-2"></i> Tableau de bord
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary d-none d-md-inline-block">
                                                <i class="fas fa-power-off mr-2"></i> Déconnexion
                                        </button>
                                </form>
                               @endauth
                               @guest
                                <a href="{{ url('/login') }}" class="btn btn-primary text-secondary mr-3">
                                        <i class="fas fa-sign-in-alt mr-2"></i> Connexion
                                </a>
                               @endguest
                                
                                <button class="navbar-toggler ml-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global"
                                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>
                        </div>
                </div>
        </nav>
    </header>