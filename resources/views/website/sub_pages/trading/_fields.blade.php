<section class="trade_types">
    <div class="types">
        @foreach ($fields as $item)
            <div class="item">
                <div class="details">
                    <h3>{{ $item['title_' . app()->getLocale()] }}</h3>
                    <p>{{ strip_tags($item['description_' . app()->getLocale()]) }}</p>
                </div>
                <div class="media">
                    <div class="owl-carousel owl-theme">
                        @foreach ($item->images as $img)
                            <div class="item">
                                <img src="{{ $img->photo }}" alt="slider">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
