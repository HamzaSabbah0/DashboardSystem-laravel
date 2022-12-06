@extends('website._layout.sub')

@section('title', __('frontend.general_tourism'))

@section('content')

    <div class="tourism_page">

        {{-- slider --}}
        @include('website.pages.general_tourism._slider')

        {{-- about --}}
        @include('website.pages.general_tourism._about')

        {{-- activities --}}
        @include('website.pages.general_tourism._activities')

        {{-- partnerships --}}
        @include('website.pages.general_tourism._partnerships')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.tourism_page .main_slider .owl-carousel').owlCarousel({
                    loop: true,
                    rtl: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    items: 1,
                    navText: [
                        '<i class="fa-solid fa-chevron-right"></i>',
                        '<i class="fa-solid fa-chevron-left"></i>'
                    ],
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                $('.tourism_page .main_slider .owl-carousel').owlCarousel({
                    loop: true,
                    rtl: false,
                    margin: 10,
                    nav: true,
                    dots: true,
                    items: 1,
                    navText: [
                        '<i class="fa-solid fa-chevron-left"></i>',
                        '<i class="fa-solid fa-chevron-right"></i>'
                    ],
                });
            });
        </script>
    @endif
@endpush
