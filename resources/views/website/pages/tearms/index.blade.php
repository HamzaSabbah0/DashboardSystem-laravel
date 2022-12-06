@extends('website._layout.app')

@section('title', __('frontend.terms_of_use'))

@section('content')
    <div class="privacy_page">
        <section class="banner">
            <img src="{{ asset('website/assets/images/carusel.png') }}" alt="cover" id="cover">
            <div class="content">
                <div class="title">
                    <h3 class="main-title">{{ __('frontend.terms_of_use') }}</h3>
                </div>
            </div>
        </section>
        <section class="privacy_policy">
            @if ($tearms)
                <p>{!! $tearms['description_' . app()->getLocale()] !!}</p>
            @endif
        </section>
    </div>
@endsection
