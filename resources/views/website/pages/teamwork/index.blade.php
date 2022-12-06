@extends('website._layout.app')

@section('title', __('frontend.teamwork'))

@section('content')

    <div class="workteam_page">

        {{-- intro --}}
        @include('website.pages.teamwork._intro')

        {{-- team --}}
        @include('website.pages.teamwork._team')

    </div>

@endsection

