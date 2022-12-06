<section class="sport_activities">
    <div class="activity">
        @foreach ($activities as $item)
            <div class="item">
                <div class="media">
                    <img src="{{ $item->photo }}" alt="sport">
                </div>
                <div class="details">
                    <h3>{{ $item['title_' . app()->getLocale()] }}</h3>
                    <p>{!! Str::words(strip_tags($item['description_' . app()->getLocale()]), 50, '...') !!}</p>
                    <a href="{{ route(app()->getLocale() . '.sport.activity', $item->id) }}"
                        class="read-more">{{ __('frontend.read_more') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
