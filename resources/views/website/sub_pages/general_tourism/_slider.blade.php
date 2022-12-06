<section class="main_slider">
    <div class="owl-carousel owl-theme">
        @foreach ($sliders as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="slide">
            </div>
        @endforeach
    </div>
</section>
