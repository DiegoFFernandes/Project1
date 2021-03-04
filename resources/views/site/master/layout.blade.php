<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Grupo Máximo</title>
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="plano funerario, funeral, funeraria, crematório, cemitério, coroa de Flores, túmulos, santinhos, placas para túmulos">
    <meta name="description"
        content="Luto Grupo Maximo: Planos funerais individuais, familiares e corporativos. Servicos prestados as pessoas que você mais ama!">

    <!-- Favicons -->
    <link href="{{ asset('img/icon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset ('vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset ('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header"
        class="fixed-top {{(Route::current()->getName() === 'site.home' ? 'header-transparent' : '' )}}">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light">
                    <img src="{{asset('img/icon.png')}}" alt="" class="img-fluid">
                    <a href="{{route('site.home')}}">
                        <span>Grupo Máximo</span>
                    </a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!--<a href="index.html"><img src="{{asset('img/icon.png')}}" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="{{(Route::current()->getName() === 'site.home' ? 'active' : '' )}}"><a
                            href="{{route('site.home')}}">Inicio</a></li>
                    <li class="{{(Route::current()->getName() === 'site.about-us' ? 'active' : '' )}}"><a
                            href="{{route('site.about-us')}}">Sobre Nós</a></li>
                    <li class="{{(Route::current()->getName() === 'site.clients' ? 'active' : '' )}}"><a
                            href="{{route('site.clients')}}">Nossos parceiros</a></li>
                    <li class="{{(Route::current()->getName() === 'site.contact' ? 'active' : '' )}}"><a
                            href="{{route('site.contact')}}">Contato</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->
    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        @yield('footer-newsletter')

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('site.home')}}">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('site.about-us')}}">Sobre nós</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('site.clients')}}">Nossos
                                    Parceiros</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('site.contact')}}">Contato</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nossos Serviços</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Funerária</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Plano Funerário</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cemitério</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cremação</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Nosso Endereço</h4>
                        <p>Avenida Ayrton Senna da Silva, 1390
                            </br>
                            Centro, Pinhais/PR
                            </br>
                            </br>
                            <strong>Telefone:</strong> (041) 3222-8131
                            </br>
                            <strong>Email:</strong> contato@lutogrupomaximo.com.br
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sobre Nós</h4>
                        <p>O Grupo Maximo está no mercado a mais de 10 anos, prestando assistência as familias
                            enlutadas. Hoje temos nossa estrutura completa para atendimento, com central de plantão 24
                            horas e funerárias, na Região Metropolitana de Curitiba.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/funerariasgrupomaximo" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>                            
                            <a href="https://wa.me/5541991228321?text=Olá,%20gostaria%20de%20saber%20mais%20informações%20sobre%20o%20Grupo%20Maximo?"
                                class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Luto Grupo Máximo</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div class="whatsapp-fixo">
        <a
            href="https://wa.me/5541991228321?text=Olá,%20gostaria%20de%20saber%20mais%20informações%20sobre%20o%20Grupo%20Maximo.">
            <img src="{{asset('img\whatsapp.png')}}" alt="Fale Conosco pelo WhatsApp" />
        </a>
    </div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js')}}"></script>

    <!-- My JS File -->
    <script src="{{ asset('js/script.js')}}"></script>
</body>

</html>