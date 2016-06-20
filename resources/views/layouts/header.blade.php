{{-- HEADER BEGIN --}}
<header>
    <div class="header-container">
        {{-- HEADER LEFT --}}
        <div class="header header-left bold">
            <ul>
                <li><a href="{{ URL::to('welcome') }}">Home</a></li>
                <li><a href="{{ URL::to('companies') }}">Bedrijven</a></li>
                {{-- NEED TO ADD ROLECHECK --}}
                <li><a href="{{ URL::to('admin') }}">Admin</a></li>

            </ul>
        </div>

        {{-- HEADER MID --}}
        <div class="header header-mid">
            <div class="header-search">
                <form method="get" action="">
                    <input class="search" id="search" type="text" name="search" placeholder=" Zoeken op de website">
                    <button class="search-button">Zoek</button>
                </form>
            </div>
        </div>

        {{-- HEADER RIGHT --}}
        <div class="header header-right bold">
            @if (Auth::guest())
                <a href="{{ route('login') }}">inloggen/registreren</a>
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
            @endif
            <div class="btn-group dropdown-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-user tw" title="Toggle dropdown menu"></span>
                </a>

                <ul class="dropdown-menu ">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><i class="fa fa-key fa-fw"></i> Log in</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw"></i> Register</a></li>
                        <hr class="devider">                {{-- WHEN LOGGED IN GIVE THESE OPTIONS --}}
                    @else
                        <li class=""><a href="#"><i class="fa fa-key fa-fw"></i> Profiel</a></li>
                        <li class=""><a href="{{ route('logout') }}"><i class="fa fa-user-plus fa-fw"></i> Uitloggen</a></li>
                        <hr class="devider hidden">         {{-- WHEN ADMIN GIVE THIS OPTIONS --}}
                    @endif
                    <li class=""><a href="{{ route('admin') }}"><i class="fa fa-unlock fa-fw"></i> Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- HEADER END --}}