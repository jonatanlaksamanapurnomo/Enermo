@extends('templates.layout',['active'=>"contact"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

        .mapouter {
            position: relative;
            text-align: right;
            height: 445px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 445px;
            width: 100%;
        }


        .contact-page-area .send-btn {
            background: #173f5f;
            color: white;
            font-weight: 400;
            font-size: 14px;
        }

        .contact-page-area .send-btn:hover {
            background: white;
            border: 1px solid black;
            color: black;
        }

        .icon {
            margin-right: 27px;
        }

        .fa-stack {
            font-size: 16px;
            color: #173F5F;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'Contact'])
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="mapouter px-lg-3">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="445" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Jl.%20Melati%2013%20No.501,%20Klemburan,%20Baturan,%20Karanganyar%20Regency,%20Central%20Java&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="/"></a><br>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="contact-details">
                            <h6>Jl. Melati XIII D No. 501, Prov. Jawa Tengah</h6>
                            <p>
                                Kel. Baturan, Kec. Colomadu, Kab. Karanganyar
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="contact-details">
                            <h6>081234567890</h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="contact-details">
                            <h6>contact@enermo.id</h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form-area " id="contact">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                                    required="" type="text">
                                <input name="phone" placeholder="Enter your phone number" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your phone number'"
                                    class="common-input mb-20 form-control" required="" type="number">
                                <input name="email" placeholder="Enter email address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    class="common-input mb-20 form-control" required="" type="email">
                                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                                    required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                    required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="primary-btn header-btn send-btn" style="float: right;">Get Started</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
