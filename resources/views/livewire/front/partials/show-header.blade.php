<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="d-flex align-items-center me-auto me-xl-0">
            @if (getSetByName('logo') !== null)
                <img src="{{asset('storage/'.getSetByName('logo')->image)}}" class="logo" style="width: 100px;border-radius: 5px;border: 1px solid;box-shadow: 0px 0px 4px;"/>
            @else
                <h1 class="sitename">{{env('APP_NAME')}}</h1>
            @endif
            {{-- <h1 class="sitename">{{env('APP_NAME')}}</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->route()->named('home') ? 'active' : '' }}"
                        wire:navigate>Home<br></a></li>
                <li><a href="{{ route('pages', ['slug' => 'about']) }}"
                        class="{{ request()->route()->named('pages') ? 'active' : '' }}" wire:navigate>About</a></li>
                <li><a href="{{ route('services') }}"
                        class="{{ request()->route()->named('services') ? 'active' : '' }}" wire:navigate>Services</a>
                </li>
                <li><a href="{{ route('blogs') }}" class="{{ request()->route()->named('blogs') ? 'active' : '' }}"
                        wire:navigate>Blogs</a></li>
                <li><a href="{{ route('contacts') }}"
                        class="{{ request()->route()->named('contacts') ? 'active' : '' }}" wire:navigate>Contact</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            @if (getSetByName('twitter') !== null)
                <a href="{{ getSetByName('twitter')->value }}" target="_blank" class="twitter"><i
                        class="bi bi-twitter-x"></i></a>
            @endif
            @if (getSetByName('instagram') !== null)
                <a href="{{ getSetByName('instagram')->value }}" target="_blank" class="facebook"><i
                        class="bi bi-instagram"></i></a>
            @endif
            @if (getSetByName('linkedin') !== null)
                <a href="{{ getSetByName('linkedin')->value }}" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></a>
            @endif
        </div>

    </div>
</header>
