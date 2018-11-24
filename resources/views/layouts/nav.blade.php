<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Portail</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#"><span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ url('/') }}">Accueil</a>
            @if(Auth::check())
            <a class="nav-item nav-link" href="{{ url('nouveau') }}">Nouvel Article</a>
            @endif
                @if(Auth::check() == false)
            <a class="nav-item nav-link" href="{{ url('login') }}">Connexion</a>
            @endif
        </div>
    </div>
</nav>