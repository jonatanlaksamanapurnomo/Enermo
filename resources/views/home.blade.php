@extends('templates.layout',['active'=>'home'])
@section('style')
    <style>
        .banner-area {
            background: url({{ $banner }}) center;
            min-height: 695px;
            background-size: cover;
            display: flex;
            align-items: center;
        }

        .home-about-area-right:after {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            width: 48%;
            height: 100%;
            background: url({{ $home_1 }}) no-repeat center center/cover;
            z-index: 1;
        }

        .home-about-area-left:after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 48%;
            height: 100%;
            background: url({{ $home_2 }}) no-repeat center center/cover;
            z-index: 1;
        }

        .subscribe-section-area {
            background: url({{ $home_1 }}) center;
            background-size: cover;
        }

    </style>
@endsection
@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen">
                <div class="banner-content col-lg-6 col-md-6 justify-content-center px-5">
                    <h6>Energy Modeling Platform</h6>
                    <h1>
                        Digital Tools to Start your Journey to Efficiency
                    </h1>
                    <a href="#" class="primary-btn header-btn mt-10">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <section class="home-about-area home-about-area-right section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 no-padding home-about-right">
                    <h2>
                        Short About Us <br>
                        About Company
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque odio, consequat nec tortor ut,
                        ullamcorper mollis ex. Fusce ornare ut quam ut convallis. Curabitur elit quam, congue eu ex vitae,
                        pulvinar sollicitudin diam. Maecenas id justo blandit, cursus dui nec, sodales felis.
                    </p>
                </div>
                <div class="col-lg-6 px-0">
                    <img class="image-mob mt-4" src="{{ $home_1 }}" alt="about our company 1">
                </div>
            </div>
        </div>
    </section>

    <section class="home-about-area home-about-area-left section-gap relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 px-0">
                    <img class="image-mob mb-4" src="{{ $home_2 }}" alt="about our company 2">
                </div>
                <div class="col-lg-6 no-padding home-about-left">
                    <h6>Energy Modeling Subscribtion</h6>
                    <h2>
                        Industrial
                    </h2>
                    <p>
                        Platform monitoring dan modeling energi untuk
                        industri yang dapat memberikan visibilitas real time
                        kepada seluruh proses penggunaan energi di dalam
                        fasilitas atau pabrik.
                    </p>
                    <h2>
                        Residental
                    </h2>
                    <p class="no-margin">
                        Platform monitoring dan modeling energi untuk
                        residential atau fasilitas publik yang dapat memberikan
                        visibilitas real time kepada seluruh proses penggunaan
                        energi di dalam area.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-section-area relative section-gap">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between no-gutters text-white">
                <div class="col-lg-6 subscribe-left">
                    <h2>Call To Action</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </p>
                </div>
                <div class="col-lg-5 subscribe-right">
                    <h5>Subscribe for more</h5>
                    <form class="booking-form" id="contact">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <input name="name" placeholder="Your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required=""
                                    type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="email" placeholder="Email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
                            </div>
                            
                            <div class="col-lg-12 d-flex flex-column">
                                <input name="subject" placeholder="Your Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Your Subject'" class="form-control mt-20" required=""
                                    type="text">
                            </div>
                            <div class="col-lg-12 flex-column">
                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                    required=""></textarea>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-end send-btn">
                                <button class="primary-btn header-btn mt-20">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
