@extends('layout.layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/rotarios/voluntarios/30.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">

                    <h1 class="mb-0 bread">Contactanos</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon bg-primary d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Dirección:</span> Cjon. de Loreto 15, Zona Centro, 37700 San Miguel de
                                            Allende, Gto.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon bg-secondary d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Teléfono:</span> <a href="tel://4151538146">415 153 8146</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon bg-tertiary d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Correo electronico:</span> <a
                                                href="mailto:fundacionrotaria@clubrotariosanmigueldeallende.org">
                                                <marquee
                                                    scrolldelay="150">fundacionrotaria@clubrotariosanmigueldeallende.org
                                                </marquee>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon bg-quarternary d-flex align-items-center justify-content-center">
                                        <span class="fa fa-facebook"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Facebook:</span> <a
                                                href="https://www.fb.com/ClubRotarioSMA" target="_blank">fb.com/ClubRotarioSMA</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
