@extends('templates.layout',['active'=>"blog"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

        .error-section a{
            color: #173f5f;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'404 | Page Not Found'])
    <section class="error-section section-gap">
        <div class="container text-center">
            <h2>Back to <a href="/">Home</a> ?</h2>
        </div>
    </section>
@endsection
