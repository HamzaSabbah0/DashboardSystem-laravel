<section class="our_customers">
    <h4 class="sub-title">Our Partners</h4>
    <h3 class="main-title">Lorem ipsum dolor.</h3>
    <div class="customer">
        @foreach ($partners as $item)
            <div class="item">
                <img src="{{ $item->photo }}" alt="customer">
            </div>
        @endforeach
    </div>
</section>
