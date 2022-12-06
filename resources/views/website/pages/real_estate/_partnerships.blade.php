<section class="companies_partnerships">
    <div class="partnerships">
        <div class="description">
            <h3>{{__('frontend.real_estate_partnerships')}}</h3>
        </div>
        <div class="companies">
            @foreach ($partners as $item)
                <div class="item">
                    <img src="{{ $item->photo }}" alt="partners">
                </div>
            @endforeach
        </div>
    </div>
</section>
