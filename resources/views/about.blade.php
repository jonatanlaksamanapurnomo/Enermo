@extends('templates.layout',['active'=>"about-us"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

        .home-about-area-right:after {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            width: 48%;
            height: 100%;
            background: url({{ $about_1 }}) no-repeat center center/cover;
            z-index: 1;
        }

        .home-about-area-right .about-second {
            margin-top: 24px;
        }

        .member-card img {
            max-width: 100%;
        }

        .fa-stack {
            font-size: 22px;
            color: #0A66C2;
        }

        .name {
            font-size: 18px;
            font-weight: 700;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .title {
            font-size: 14px;
            margin-bottom: 7px;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'About Us'])
    <section class="home-about-area home-about-area-right section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 no-padding home-about-right">
                    <h2>
                        About Enermo
                    </h2>
                    <p>
                        Enermo is an Internet of Things Platform that help us make energy usage modelling, record equipment
                        energy and power usage, generate auditable and verifiable energy audit report, and share energy
                        efficiency experience and capability. While creating energy usage report that transparent and
                        integrated, Enermo aim to create trust within the energy efficiency and renewable energy business
                        and among its stakeholder with financier from banks or non-bank lender or investor.
                    </p>
                    <p class="about-second">
                        Using Enermo a business will have a light take off in energy efficiency effort, acknowledged its
                        merit by their community, and possible to make a sustainable financing toward their effort. Nexus
                        for us is a hope. Its like seeing the stars and see that humanity will win. Energy efficiency
                        business environment is like a desert stormed by the pandemic. When everybody become pessimist,
                        nexus offers us with new hope to moving forward. Toward Nexus help wea re now confident again in our
                        cause. ​
                    </p>
                </div>
                <div class="col-lg-6 px-0">
                    <img class="image-mob mt-4" src="{{ $about_1 }}" alt="about our company 1">
                </div>
            </div>
        </div>
    </section>
    <section class="mission-section relative">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="title text-center">
                        <h2 class="mb-10 ">Our Mission</h2>
                        <p>
                            Enermo is founded by Alfons and Eumir that has a bittersweet experience in ESCO and
                            Renewable
                            Energy projects in Indonesia. Together with Wirawan that has a experience in Internet of Things
                            they build a initiative to build a trustworthy ecosystem of energy efficiency. The promise is
                            that once
                            the utilization modeling become easy, metering could be done in plug and play, and audit report
                            could be downloaded effortlessly comes the era of openness in renewable energy and energy
                            efficiency environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section relative" id="#team_section">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <h2>Meet our Team</h2>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($team_member as $member)
                            <div class="col-lg-4 mb-3">
                                <div class="member-card">
                                    <img src="{{ $member->photo == '' ? asset($dummy) : asset("/storage/$member->photo") }}"
                                        alt="dummy image">
                                    <p class="name">{{ $member->name }}</p>
                                    <p class="title">{{ $member->title }}</p>
                                    <a href="{{ $member->linkedin == '' ? '#team_section' : $member->linkedin }}"
                                        {{ $member->linkedin != '' ? ' target="_blank"' : '' }} rel="noopener noreferrer">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
