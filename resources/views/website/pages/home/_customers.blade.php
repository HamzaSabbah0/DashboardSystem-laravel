<section class="our_customers">
    <h4 class="sub-title">{{ __('frontend.our_clients') }}</h4>
    <h3 class="main-title">{{ __('frontend.our_local_and_gloabal_clients') }}</h3>
    <div class="customer">
        @foreach ($partners as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="customer">
            </div>
        @endforeach
    </div>
</section>
