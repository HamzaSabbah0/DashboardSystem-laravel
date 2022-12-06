<section class="about_trade">
    <h2 class="main-title">{{ __('frontend.trade') }}</h2>
    <a href="javascript:void(0)">{{ __('frontend.commercial_section') }}</a>
    @if ($about)
        <h4 class="sub-title">{{ $about['title_' . app()->getLocale()] }}</h4>
        <p>{!! strip_tags($about['description_' . app()->getLocale()]) !!}</p>
    @endif
</section>
