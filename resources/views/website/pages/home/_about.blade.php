<section class="about_eleven">
    <div class="about-card">
        <div class="card-body">
            <h4 class="sub-title">{{ __('frontend.who_are_we') }}</h4>
            <h3 class="main-title">{{ $about['title_' . app()->getLocale()] }}</h3>
            <p>{!! Str::words(strip_tags($about['description_' . app()->getLocale()]), 30, '...') !!}</p>
            <a href="{{ route(app()->getLocale() . '.about.eleven') }}" class="read-more">{{ __('frontend.read_more') }}
                <span><i class="fa fa-arrow-right"></i></span></a>
        </div>
        <div class="card-image">
            <img src="{{ $about->photo }}" alt="about">
        </div>
    </div>
</section>
