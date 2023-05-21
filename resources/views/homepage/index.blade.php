@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @include('homepage.criteria')
        @include('homepage.consulting')
        @include('homepage.activity')
        @include('widgets.form')
        @include('homepage.event_video')
        @include('homepage.partner')
    </div>
    @include('layouts.partials.footer_noscript')
    @include('layouts.components.script')
    @include('layouts.components.modal')
@endsection
