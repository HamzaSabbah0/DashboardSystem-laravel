@extends('website._layout.app')

@section('title', __('frontend.sport'))

@section('content')

    <div class="sport_page">

        {{-- slider --}}
        @include('website.pages.sport._slider')

        {{-- about --}}
        @if ($about)
            @include('website.pages.sport._about')
        @endif

        {{-- activities --}}
        @include('website.pages.sport._activities')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.sport_page .main_slider .owl-carousel').owlCarousel({
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
                $('.sport_page .main_slider .owl-carousel').owlCarousel({
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
