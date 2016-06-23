{{-- HEADER BEGIN --}}
<header>
    <div class="header-container">
        {{-- HEADER LEFT --}}
        <div class="header header-left bold">
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('companies.index') }}">Bedrijven</a></li>
                {{-- NEED TO ADD ROLECHECK --}}
                @if (@Auth::user()->role_id > 3)
                    <li><a href="{{ route('admin') }}">Admin</a></li>
                @endif
            </ul>
        </div>

        {{-- HEADER MID --}}
        <div class="header header-mid">
            <div class="header-search">
                <input class="search" type="text" name="search" placeholder=" Zoeken op de website">
                <button class="search-button">Zoek</button>
            </div>
        </div>

        {{-- HEADER RIGHT --}}
        <div class="header header-right bold">
            @if (@Auth::user()->role_id == null)
                <a href="{{ route('login') }}">Inloggen</a>
                /
                <a href="{{ route('register') }}">Registreren</a>
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
                    @if (@Auth::user()->role_id == null)
                        <li><a href="{{ route('login') }}"><i class="fa fa-key fa-fw"></i> Log in</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw"></i> Register</a></li>
                    @else
                        <li class=""><a href="#"><i class="fa fa-key fa-fw"></i> Profiel</a></li>
                        <li class=""><a href="{{ route('logout') }}"><i class="fa fa-user-plus fa-fw"></i> Uitloggen</a></li>
                        @if (@Auth::user()->role_id > 3)
                            <hr class="devider">         {{-- WHEN ADMIN GIVE THIS OPTIONS --}}
                            <li class=""><a href="{{ route('admin') }}"><i class="fa fa-unlock fa-fw"></i> Admin</a></li>
                        @endif
                    @endif


                </ul>
            </div>
        </div>
    </div>
</header>
{{-- HEADER END --}}