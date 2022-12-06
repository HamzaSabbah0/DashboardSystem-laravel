<section class="real_estate_guide">
    @foreach ($fields as $item)
        <div class="item">
            <h3>{{ $item['title_' . app()->getLocale()] }}</h3>
            <p>{{ strip_tags($item['description_' . app()->getLocale()]) }}</p>
        </div>
    @endforeach
</section>
