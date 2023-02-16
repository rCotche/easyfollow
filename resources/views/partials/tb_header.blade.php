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
                </div>

                <div class="d-flex align-items-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary d-none d-md-inline-block">
                            <i class="fas fa-power-off mr-2"></i> Déconnexion
                    </button>
                </form>
                            
                <button class="navbar-toggler ml-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>