@extends('templates.layout',['active'=>"services"])
@section('style')
    <style>
        .banner-area {
            background-color: #173f5f;
        }

    </style>
@endsection
@section('content')
    @include('templates/mini-banner',["title"=>'Services'])
    <section class="quotes-section section-gap relative">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-11">
                    <h2>
                        Enermo memberikan visibility terhadap seluruh
                        penggunaan energi di setiap titik penting di fasilitas anda
                    </h2>
                </div>
                <div class="col-lg-10">
                    <p>
                        Enermo mengubungkan sensor-sensor pada perangkat yang mengkonsumsi energi ke internet.
                        Data, Energy mapping, informasi energi dan paramater lainnya diolah di dalam platform enermo.
                        data diolah dan informasinya ditampilkan kepada user.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section section-gap relative">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="services">
                                <i class="fa fa-database"></i>
                                <h5>
                                    Monitoring of Data
                                    Quality and Integrity
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit sed do
                                    eiusmod tempor.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="services">
                                <i class="fa fa-desktop"></i>
                                <h5>
                                    Virtualizes The Plant and
                                    Creates Digital Models
                                    of Real Assets
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit sed do
                                    eiusmod tempor.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="services">
                                <i class="fa fa-lightbulb-o"></i>
                                <h5>
                                    Structures Energy and
                                    Industry Knowledge into
                                    Ontologies.
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit sed do
                                    eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
