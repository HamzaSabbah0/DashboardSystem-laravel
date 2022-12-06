<section class="testimonials_container">
    <img src="{{ asset('website/assets/images/testimonial.jpg') }}" alt="bg" id="cover">
    <div class="testimonials owl-carousel owl-theme">
        @foreach ($testimonials as $item)
            <div class="item">
                <div class="customer">
                    <h3>{{ __('frontend.customers_opinions') }}</h3>
                    <img src="{{ $item->photo }}" alt="customer">
                </div>
                <div class="description">
                    <div class="title">
                        <h4>{{ $item['title_' . app()->getLocale()] }}</h4>
                        <span><i class="fa-solid fa-quote-left"></i></span>
                    </div>
                    <p>{{ strip_tags($item['description_' . app()->getLocale()]) }}</p>
                    <h5>{{ $item['name_' . app()->getLocale()] }}</h5>
                    <h6>{{ $item['career_title_' . app()->getLocale()] }}</h6>
                </div>
            </div>
        @endforeach
    </div>
</section>
