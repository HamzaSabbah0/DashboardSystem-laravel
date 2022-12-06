<section class="our_services">
    <div class="description">
        <h4 class="sub-title">{{ __('frontend.our_services') }}</h4>
        <h3 class="main-title">{{ __('frontend.out_premium_services') }}</h3>
        <p>{{ __('frontend.out_premium_services_description') }}</p>
    </div>
    <div class="service">
        @foreach ($services as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="service">
                <div class="intro">
                    <h3>{{ $item['title_' . app()->getLocale()] }}</h3>
                    <p>
                        {{ strip_tags($item['description_' . app()->getLocale()]) }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
