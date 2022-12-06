<section class="hotel_partnerships">
    <div class="partnerships">
        <div class="description">
            <h3>{{ __('frontend.medical_tourism_partnerships') }}</h3>
            <p>{{ __('frontend.medical_tourism_partnerships_description') }}</p>
        </div>
        <div class="hotels">
            @foreach ($partners as $item)
                <div class="item">
                    <img src="{{ $item->photo }}" alt="partners">
                </div>
            @endforeach
        </div>
    </div>
</section>
