@extends('website._layout.app')

@section('title', __('frontend.medical_tourism'))

@section('content')

    <div class="tourism_page medical_tourism">

        {{-- slider --}}
        @include('website.pages.medical_tourism._slider')

        {{-- about --}}
        @include('website.pages.medical_tourism._about')

        {{-- fields --}}
        @include('website.pages.medical_tourism._fields')

        {{-- partnerships --}}
        @include('website.pages.medical_tourism._partnerships')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.medical_tourism .main_slider .owl-carousel').owlCarousel({
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

                $('.medical_tourism .media .owl-carousel').owlCarousel({
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
                $('.medical_tourism .main_slider .owl-carousel').owlCarousel({
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

                $('.medical_tourism .media .owl-carousel').owlCarousel({
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
