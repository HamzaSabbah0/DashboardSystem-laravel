<section class="manager_words">
    <div class="manager-words-card">
        <div class="card-image">
            <img src="{{ $manager_word->photo }}" alt="about">
        </div>
        <div class="card-body">
            <h4 class="sub-title">How Us</h4>
            <h3 class="main-title">{{ $manager_word['title_' . app()->getLocale()] }}</h3>
            <p>{!! $manager_word['description_' . app()->getLocale()] !!}</p>
        </div>
    </div>
</section>
