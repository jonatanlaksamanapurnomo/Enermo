@extends('templates.layout',['active'=>"blog"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

        .blog-image {
            margin-bottom: 50px;
        }

        .blog-image img {
            width: 100%;
        }

        .blog-title {
            margin-bottom: 50px;
        }

        .blog-title h3 {
            font-size: 29px;
            font-weight: 400;
        }

        .fa-stack {
            margin-right: 5px;
            color: #C4C4C4;
        }

        .recent-blogs a {
            color: black;
        }

        .recent-blogs img {
            width: 100%;
        }

        .span-text {
            margin-right: 8px;
        }

        .recent-blogs span {
            font-size: 11px;
        }

        .recent-blogs h6 {
            margin-bottom: 5px;
            font-weight: 500;
        }

        .recent-blogs h5 {
            font-weight: 700;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'Blog'])
    <section class="blog-content section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-image">
                        <img src="{{ $blog->image == '' ? asset('images/stock-blog.png') : asset("storage/posts/post$blog->id.jpg") }}"
                            alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-title">
                        <h3>{{ $blog->title }}</h3>
                    </div>
                    <div class="blog-body">
                        {!! $blog->body !!}
                    </div>
                </div>
                <div class="col-lg-4 recent-blogs">
                    <h5>Recent Blogs</h5>
                    @if (sizeof($recent_blogs) > 0)
                        @foreach ($recent_blogs as $recent_blog)
                            <a href="/blog/{{ $recent_blog->slug }}">
                                <div class="row mb-4">
                                    <div class="col-4 pr-0">
                                        <img src="{{ $recent_blog->image == '' ? asset('images/stock-blog.png') : asset("storage/posts/post$recent_blog->id-small.jpg") }}"
                                            alt="images of {{ $recent_blog->id }}">
                                    </div>
                                    <div class="col-8">

                                        <h6>
                                            {{ $recent_blog->title }}
                                        </h6>
                                        <div class="d-flex align-items-center">
                                            <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-calendar-o  fa-stack-1x fa-inverse"></i>
                                            </span>

                                            @php
                                                $date = new DateTime($blog->updated_at);
                                            @endphp
                                            <span class="span-text">{{ $date->format('d F, Y') }}</span>
                                            <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-user  fa-stack-1x fa-inverse"></i>
                                            </span>
                                            <span>
                                                Admin
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <small><b>Sorry, No Recent Post.</b></small>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
