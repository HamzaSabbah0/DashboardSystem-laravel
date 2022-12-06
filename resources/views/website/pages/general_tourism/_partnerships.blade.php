<section class="hotel_partnerships">
    <div class="partnerships">
        <div class="description">
            <h3>Lorem ipsum dolor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quo nobis dolorem odio
                libero. Placeat, explicabo recusandae? Obcaecati blanditiis dolorum ipsum commodi,
                asperiores in amet quo, sed nulla, omnis voluptatibus!</p>
        </div>
        <div class="hotels">
            @foreach ($partners as $item)
                <div class="item">
                    <img src="{{ $item->photo }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
