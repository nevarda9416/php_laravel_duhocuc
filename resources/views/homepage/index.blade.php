@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @include('homepage.criteria')
        @include('homepage.consulting')
        @include('homepage.activity')
        @include('widgets.form')
        @include('homepage.event_video')
        @include('widgets.partner')
    </div>
@endsection
