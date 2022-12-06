<section class="home_slider">
    <div class="owl-carousel owl-theme">
        @foreach ($sliders as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="slide">
                <h2>{{ strip_tags($item['description_' . app()->getLocale()]) }}</h2>
            </div>
        @endforeach
    </div>
</section>
