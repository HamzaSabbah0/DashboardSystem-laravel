<header>
    <div class="logo-container">
        <div class="logo">
            @php
                $item = \App\Models\Setting::first();
            @endphp
            @if (isset($item->logo_photo))
                <img src="{{ $item->logo_photo }}" alt="logo">
            @else
                <img src="{{ asset('website/assets/images/logo.svg') }}" alt="logo">
            @endif
        </div>
        <div class="nav-toggler">
            <button class="show" onclick="toggleNav()"><i class="fa fa-bars"></i></button>
            <button onclick="toggleNav()"><i class="fa fa-close"></i></button>
        </div>
    </div>
    <nav class="topNav">
        <ul class="navbar">
            <li class="nav-item {{ \Route::currentRouteName() == app()->getLocale() . '.home' ? 'active' : '' }}">
                <a href="{{ route(app()->getLocale() . '.home') }}" class="nav-link">{{ __('frontend.home') }}</a>
            </li>
            <li class="nav-item {{ \Route::currentRouteName() == app()->getLocale() . '.sport' ? 'active' : '' }}">
                <a href="{{ route(app()->getLocale() . '.sport') }}" class="nav-link">{{ __('frontend.sport') }}</a>
            </li>
            <li class="nav-item {{ request()->routeIs(app()->getLocale() . '.tourism.*') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="nav-link">
                    <span>{{ __('frontend.tourism') }}</span><i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-list">
                    <li class="dropdown-item">
                        <a href="{{ route(app()->getLocale() . '.tourism.general') }}"
                            class="dropdown-link">{{ __('frontend.general_tourism') }}</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route(app()->getLocale() . '.tourism.medical') }}"
                            class="dropdown-link">{{ __('frontend.medical_tourism') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ \Route::currentRouteName() == app()->getLocale() . '.trading' ? 'active' : '' }}">
                <a href="{{ route(app()->getLocale() . '.trading') }}"
                    class="nav-link">{{ __('frontend.trading') }}</a>
            </li>
            <li
                class="nav-item {{ \Route::currentRouteName() == app()->getLocale() . '.real-estate' ? 'active' : '' }}">
                <a href="{{ route(app()->getLocale() . '.real-estate') }}"
                    class="nav-link">{{ __('frontend.real_estate') }}</a>
            </li>
            <li
                class="nav-item {{ \Route::currentRouteName() == app()->getLocale() . '.programming' ? 'active' : '' }}">
                <a href="{{ route(app()->getLocale() . '.programming') }}"
                    class="nav-link">{{ __('frontend.programming') }}</a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    <span>{{ __('frontend.language') }}</span> <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-list">
                    <li class="dropdown-item">
                        <a href="/ar/changeLocal" class="dropdown-link">Ar</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/en/changeLocal" class="dropdown-link">En</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/fr/changeLocal" class="dropdown-link">Fr</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/tu/changeLocal" class="dropdown-link">Tu</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
