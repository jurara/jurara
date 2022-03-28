@extends('layout.layout_us')
@section('content')
    <section class="hero-wrap hero-wrap-2"
             style="background-image: url({{ asset('images/rotarios/voluntarios/28.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html"> <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span> <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Volunteers</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Volunteers</span>
                    <h2>Our Volunteers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/3.jpg') }}) ;"></div>
                        <div class="text text-1 cardvol">
                            <h3>Small actions </h3>
                            <span>Big changes</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/4.jpg') }});"></div>
                        <div class="text text-2 cardvol">
                            <h3>Volunteering is  </h3>
                            <span>Love in action</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image: url({{ asset('images/rotarios/voluntarios/5.jpg') }});"></div>
                        <div class="text text-3 cardvol">
                            <h3>A positive footprint </h3>
                            <span>It's in your hands</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/9.jpg') }});"></div>
                        <div class="text text-4 cardvol">
                            <h3>Working together </h3>
                            <span>we can achieve more</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/12.jpg') }});"></div>
                        <div class="text text-4 cardvol">
                            <h3>Together we can </h3>
                            <span>Do so much more</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/16.jpg') }});"></div>
                        <div class="text text-1 cardvol">
                            <h3>Helping another </h3>
                            <span>Is a privilege</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/20.jpg') }});"></div>
                        <div class="text text-2 cardvol">
                            <h3>To be a volunteer </h3>
                            <span>to be the change</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="volunteer">
                        <div class="img" style="background-image:  url({{ asset('images/rotarios/voluntarios/24.jpg') }});"></div>
                        <div class="text text-3 cardvol">
                            <h3>Helping  </h3>
                            <span>You help yourself</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-hireme bg-secondary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 col-lg-8 d-flex align-items-center">
                    <div class="w-100">
                        <h2>The best way to make a difference in the other’s lives.</h2>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
                    <p class="mb-0"><a
                            href="mailto:fundacionrotaria@clubrotariosanmigueldeallende.org?Subject=Quiero%20ser%20un%20voluntario&body=Me%20gustaria%20formar%20parte%20de%20su%20equipo"
                            class="btn btn-primary py-3 px-4">Became a volunteer</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
