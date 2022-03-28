<div class="fixed-top">
    <div class="wrap ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="tel:4151538146" class="mr-2"><span class="fa fa-phone mr-1"></span> 415 153 8146</a>
                        <a href="mailto:fundacionrotaria@clubrotariosanmigueldeallende.org"><span
                                class="fa fa-paper-plane mr-1"></span>
                            fundacionrotaria@clubrotariosanmigueldeallende.org</a>
                    </p>
                </div>
                <div class="col-md-4 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://www.facebook.com/ClubRotarioSMA" target="_blank"
                               class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>

                        </p>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                class="flag-icon flag-icon-mx"> </span>
                            Español</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="{{route("home")}}"><span
                                    class="flag-icon flag-icon-mx"> </span>
                                Español</a>
                            <a class="dropdown-item" href="{{route("home_us")}}"><span
                                    class="flag-icon flag-icon-us"> </span>
                                English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
         style="background: linear-gradient(to bottom, #00043C, transparent) !important;">
        <div class="container">
            <a class="navbar-brand" href="{{route("home")}}">Club Rotarios SMA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/', 'home/*') ? 'active' : '' }}"><a href="{{route("home")}}"
                                                                                               class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item {{ request()->is('about', 'about/*') ? 'active' : '' }}"><a
                            href="{{route("about")}}"
                            class="nav-link">¿Qué
                            Hacemos?</a></li>
                    <li class="nav-item {{ request()->is('volunteer', 'volunteer/*') ? 'active' : '' }}"><a
                            href="{{route("volunteer")}}" class="nav-link">Voluntarios</a></li>
                    <li class="nav-item {{ request()->is('contact', 'contact/*') ? 'active' : '' }}"><a
                            href="{{route("contact")}}" class="nav-link">Contactanos</a></li>
                    {{--<li class="nav-item {{ request()->is('blog', 'blog/*') ? 'active' : '' }}"><a
                            href="{{route("blog")}}" class="nav-link">Blog</a></li>--}}


                    <li class="nav-item cta">

                        <form action="https://www.paypal.com/donate" method="post" target="_top">
                            <input type="hidden" name="hosted_button_id" value="42UL4TNA5X8EL"/>

                            <input type="image" src="{{ asset('images/dibujo.svg') }}"
                                   border="0" name="submit" title="PayPal - The safer, easier way to pay online!"
                                   alt="Donate with PayPal button"/>
                        </form>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
