<div class="text-left">

    @if(Auth::check())
        Connecté en tant que
        <strong>{{ Auth::user()->name }}</strong>

                <a class="btn btn-info" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Se déconnecter') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
    @endif
 
</div>