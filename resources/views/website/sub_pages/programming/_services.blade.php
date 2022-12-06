<section class="programming_services">
    @foreach ($services as $item)
        <div class="item">
            <div class="image">
                <img src="{{ $item->photo }}" alt="service">
            </div>
            <div class="details">
                <h4 class="title">{{ $item['title_' . app()->getLocale()] }}</h4>
                {!! $item['description_' . app()->getLocale()] !!}
            </div>
        </div>
    @endforeach
</section>
