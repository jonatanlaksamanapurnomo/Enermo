@extends('templates.layout',['active'=>"blog"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

        .blog-section {
            margin-bottom: 150px;
        }

        .no-blog h2 {
            margin-bottom: 0.5rem;
        }

        .blog-img {
            margin-bottom: 38px;
        }

        .blog-img img {
            width: 100%;
        }

        .blog-card{
            height: 100%;
        }

        .blog-section .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #173f5f;
            border-color: #173f5f;
        }

        .blog-section .page-link {
            color: #173f5f;
        }

        .blog-author span {
            color: #9B9B9B;
            font-size: 14px;
            line-height: 21px;
            font-weight: 400;
        }

        .blog-author {
            margin-bottom: 12px;
        }

        .blog-author .author {
            color: black;
            font-weight: 500;
        }

        .blog-title h5 {
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            margin-bottom: 0;
        }

        .blog-title {
            padding-bottom: 34px;
            border-bottom: 1px solid #E4E4E4;
            margin-bottom: 12px;
        }

        .blog-preview p {
            margin-bottom: 0;
            font-size: 14px;
            line-height: 21px;
            color: #A7A7A7;
        }

        .blog-preview {
            margin-bottom: 1rem;
        }

        .blog-section .read-btn {
            background: #173f5f;
            color: white;
            font-weight: 400;
            font-size: 14px;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'Blog'])
    <section class="blog-section section-gap">
        <div class="container">
            @if (count($blogs) > 0)
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-3 mb-4">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ $blog->image == '' ? asset('images/stock-blog.png') : asset("storage/posts/post$blog->id-medium.jpg") }}"
                                        alt="images of {{ $blog->id }}">
                                </div>
                                <div class="blog-author">
                                    @php
                                        $date = new DateTime($blog->updated_at);
                                    @endphp
                                    <span>{{ $date->format('d F, Y') }} | By <span class="author">Admin</span></span>
                                </div>
                                <div class="blog-title">
                                    <h5>{{ $blog->title }}</h5>
                                </div>
                                <div class="blog-preview">
                                    <p>
                                        {{ Str::substr($blog->excerpt, 0, 120) }}
                                    </p>
                                </div>
                                <a href="/blog/{{$blog->slug}}" class="primary-btn header-btn read-btn">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $blogs->onEachSide(2)->links('vendor.pagination.bootstrap-4') }}
            @else
                <div class="text-center no-blog">
                    <h2>
                        Stay Tuned !
                    </h2>
                    <p>
                        We are preparing something exciting for you.
                    </p>
                </div>
            @endif

    </section>
@endsection
