<header>
    <!-- top header -->
    <div class="top-header">
        <div class="top-header-container container">
            <span>DC POWER VISA <i class="fa-regular fa-registered"></i></span>
            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>

    <!-- header links -->
    <div class="header-links container">
        <!-- logo -->
        <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="logo" class="header-logo">

        <!-- link list -->
        <ul>
            <li>
                <a href="{{ route('characters') }}" @class(["link", 'active'=> Route::currentRouteName() == 'characters'])>CHARACTERS</a>
            </li>
            <li>
                <a href="{{ route('comics') }}" @class(["link", 'active'=> Route::currentRouteName() == 'comics'])>COMICS</a>
            </li>
            <li>
                <a href="{{ route('movies') }}" @class(["link", 'active'=> Route::currentRouteName() == 'movies']) >MOVIES</a>
            </li>
            <li>
                <a href="{{ route('tv') }}" @class(["link", 'active'=> Route::currentRouteName() == 'tv'])>TV</a>
            </li>
            <li>
                <a href="{{ route('games') }}" @class(["link", 'active'=> Route::currentRouteName() == 'games'])>GAMES</a>
            </li>
            <li>
                <a href="{{ route('collectibles') }}" @class(["link", 'active'=> Route::currentRouteName() == 'collectibles'])>COLLECTIBLES</a>
            </li>
            <li>
                <a href="{{ route('videos') }}" @class(["link", 'active'=> Route::currentRouteName() == 'videos'])>VIDEOS</a>
            </li>
            <li>
                <a href="{{ route('fans') }}" @class(["link", 'active'=> Route::currentRouteName() == 'fans'])>FANS</a>
            </li>
            <li>
                <a href="{{ route('news') }}" @class(["link", 'active'=> Route::currentRouteName() == 'news'])>NEWS</a>
            </li>
            <li>
                <a href="{{ route('shop') }}" @class(["link", 'active'=> Route::currentRouteName() == 'shop'])>SHOP
                    <i class="fa-solid fa-caret-down fa-sm" style="color: #399dfa;"></i></a>
            </li>
        </ul>

        {{-- search bar --}}
        <div class="input-group search-bar">
            <input class="form-control border-0 p-0" type="search" placeholder="Search" >
            <span class="input-group-append">
                <div class="input-group-text bg-transparent border-0 py-0 pe-0"><i class="fa fa-search"></i></div>
            </span>
        </div>

          
       
    </div>

    <div class="header-jumbo"></div>

</header>