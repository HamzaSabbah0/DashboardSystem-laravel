<section class="our_services">
    <div class="description">
        <h4 class="sub-title">Our Services</h4>
        <h3 class="main-title">Lorem ipsum dolor.</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo corporis totam natus dolor
            exercitationem iusto laboriosam cupiditate dolores molestias, praesentium aliquam
            repudiandae! Nihil officia ea ratione explicabo culpa maxime fuga?</p>
    </div>
    <div class="service">
        @foreach ($services as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="service">
                <div class="intro">
                    <h3>{{ $item['title_' . app()->getLocale()] }}</h3>
                    <p>
                        {{ strip_tags($item['description_' . app()->getLocale()]) }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
