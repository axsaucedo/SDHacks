@extends('templates.default')

@section('content')

<section id="@yield('section-id')" class="form-wrapper">
    <div class="form-container">
        @yield('form')
    </div>
    <div class="background" id="background-layer-1"></div>
    <div class="background" id="background-layer-2"></div>
</section>


@endsection