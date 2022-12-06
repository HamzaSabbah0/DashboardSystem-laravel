@extends('website._layout.sub')

@section('title', __('frontend.trading'))

@section('content')

    <div class="trade_page">

        {{-- slider --}}
        @include('website.pages.trading._slider')

        {{-- about --}}
        @if ($about)
            @include('website.pages.trading._about')
        @endif

        {{-- fields --}}
        @include('website.pages.trading._fields')

        {{-- products --}}
        @include('website.pages.trading._products')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.trade_page .main_slider .owl-carousel').owlCarousel({
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

                $('.trade_page .media .owl-carousel').owlCarousel({
                    rtl: true,
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
                    navText: [
                        '<i class="fa-solid fa-chevron-right"></i>',
                        '<i class="fa-solid fa-chevron-left"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            center: true,
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 6
                        }
                    }
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                $('.trade_page .main_slider .owl-carousel').owlCarousel({
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

                $('.trade_page .media .owl-carousel').owlCarousel({
                    rtl: false,
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
                    navText: [
                        '<i class="fa-solid fa-chevron-left"></i>',
                        '<i class="fa-solid fa-chevron-right"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            center: true,
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 6
                        }
                    }
                });

            });
        </script>
    @endif
@endpush
