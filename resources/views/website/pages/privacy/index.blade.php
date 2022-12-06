@extends('website._layout.app')

@section('title', __('frontend.privacy'))

@section('content')
    <div class="privacy_page">
        <section class="banner">
            <img src="{{ asset('website/assets/images/carusel.png') }}" alt="cover" id="cover">
            <div class="content">
                <div class="title">
                    <h3 class="main-title">{{ __('frontend.privacy') }}</h3>
                </div>
            </div>
        </section>
        <section class="privacy_policy">
            @if ($privacy)
                <p>{!! $privacy['description_' . app()->getLocale()] !!}</p>
            @endif
        </section>
    </div>
@endsection
