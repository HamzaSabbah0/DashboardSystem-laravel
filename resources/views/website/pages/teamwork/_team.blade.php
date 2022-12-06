<section class="workteam_memberships">
    @foreach ($teamWorks as $item)
        <div class="item">
            <div class="image">
                <img src="{{ $item->photo }}" alt="membership">
            </div>
            <div class="memberships">
                <h4>{{ $item['title_' . app()->getLocale()] }}</h4>
                <h3>{{ $item['career_title_' . app()->getLocale()] }}</h3>
            </div>
        </div>
    @endforeach
</section>
