<footer>
    <div class="footer-sections">
        <div class="about">
            @php
                $item = \App\Models\Setting::first();
            @endphp

            @if (isset($item->logo_photo))
                <h2><img src="{{ $item->logo_photo }}" alt="logo"> ELEVEN STARS</h2>
            @else
                <h2><img src="{{ asset('website/assets/images/logo.svg') }}" alt="logo"> ELEVEN STARS</h2>
            @endif
            <p>
                {{ __('frontend.footer_about') }}
            </p>
            @if (isset($item))
                <div class="social-links">
                    @if (isset($item['facebook_link']))
                        <a href="{{ $item['facebook_link'] }}"><i class="fa-brands fa-facebook-f"></i></a>
                    @endif
                    @if (isset($item['instagram_link']))
                        <a href="{{ $item['instagram_link'] }}"><i class="fa-brands fa-square-instagram"></i></a>
                    @endif
                    @if (isset($item['youtube_link']))
                        <a href="{{ $item['youtube_link'] }}"><i class="fa-brands fa-youtube"></i></a>
                    @endif
                    @if (isset($item['telegram_link']))
                        <a href="{{ $item['telegram_link'] }}"><i class="fa-brands fa-telegram"></i></a>
                    @endif
                    @if (isset($item['snapchat_link']))
                        <a href="{{ $item['snapchat_link'] }}"><i class="fa-brands fa-snapchat"></i></a>
                    @endif
                    @if (isset($item['tiktok_link']))
                        <a href="{{ $item['tiktok_link'] }}"><i class="fa-brands fa-tiktok"></i></a>
                    @endif
                </div>
            @endif
        </div>
        <div class="helpfull-links">
            <h3>{{ __('frontend.useful_Links') }}</h3>
            <ul>
                <li><a href="{{ route(app()->getLocale() . '.sub.sport') }}">{{ __('frontend.sport') }}</a></li>
                <li><a
                        href="{{ route(app()->getLocale() . '.sub.tourism.general') }}">{{ __('frontend.general_tourism') }}</a>
                </li>
                <li><a
                        href="{{ route(app()->getLocale() . '.sub.tourism.medical') }}">{{ __('frontend.medical_tourism') }}</a>
                </li>
                <li><a href="{{ route(app()->getLocale() . '.sub.trading') }}">{{ __('frontend.trading') }}</a></li>
                <li><a
                        href="{{ route(app()->getLocale() . '.sub.real-estate') }}">{{ __('frontend.real_estate') }}</a>
                </li>
                <li><a
                        href="{{ route(app()->getLocale() . '.sub.programming') }}">{{ __('frontend.programming') }}</a>
                </li>
            </ul>
        </div>
        <div class="quick-links">
            <h3>{{ __('frontend.quick_links') }}</h3>
            <ul>
                <li><a href="{{ route(app()->getLocale() . '.home') }}">{{ __('frontend.home') }}</a></li>
                <li><a href="{{ route(app()->getLocale() . '.about.eleven') }}">{{ __('frontend.who_are_we') }}</a>
                </li>
                <li><a href="{{ route(app()->getLocale() . '.teamwork') }}">{{ __('frontend.teamwork') }}</a></li>
                <li><a href="{{ route(app()->getLocale() . '.privacy') }}">{{ __('frontend.privacy') }}</a></li>
                <li><a href="{{ route(app()->getLocale() . '.tearms') }}">{{ __('frontend.terms_of_use') }}</a></li>
            </ul>
        </div>
        <div class="contact-us">
            <h3>{{ __('frontend.connect_with_us') }}</h3>
            @if (isset($item))
                <ul>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> {{ $item['address'] }}</li>
                    <li><span><i class="fa-solid fa-envelope"></i></span> {{ $item['email'] }}</li>
                    <li><span><i class="fa-solid fa-phone"></i></span> {{ $item['phone'] }}</li>
                </ul>
            @endif
        </div>
    </div>
    <div class="footer-copyright">
        <p>{{ __('frontend.copyright') }} &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
        </p>
    </div>
</footer>
