<section class="about_eleven_sport">
    <div class="sport-card">
        <div class="card-body">
            <h4 class="sub-title">{{ __('frontend.sport') }}</h4>
            <p>{!! Str::words(strip_tags($about['description_' . app()->getLocale()]), 30, '...') !!}</p>
            <a href="{{ route(app()->getLocale() . '.about.sport') }}" class="read-more">{{ __('frontend.read_more') }}
                <span><i class="fa fa-arrow-right"></i></span></a>
        </div>
        <div class="card-image">
            <video src="{{ $about->video }}" controls></video>
        </div>
    </div>
</section>
