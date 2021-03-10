@extends('site.master.layout')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Associação de <span>Luto</span></h2>
                <p class="animated fadeInUp">FUNERÁRIAS - PLANO FUNERÁRIO - CEMITÉRIO - CREMAÇÃO</p>
                <a href="#services" class="btn-get-started animated fadeInUp">Saiba Mais</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Deixe que cuidamos de tudo!</h2>
                <p class="animated fadeInUp">A despedida é o momento mais difícil e nós sabemos disso. Então nos deixe
                    torna-lá um pouco melhor. Nossa empresa estará pronta para te atender sempre que precisar.</p>
                <a href="#services" class="btn-get-started animated fadeInUp">Saiba Mais</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>
<!-- End Hero -->


<!-- Main -->
<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">
            <div class="row">
            @foreach($servicesResumo as $key => $serviceResumo)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><img src="{{asset ('img/'.$key .'.png')}}" class="img-fluid" alt=""></div>
                        <h4 class="title"><a href="">{{ $serviceResumo->title_services}}</a></h4>
                        {!! html_entity_decode($serviceResumo->description) !!}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section class="features" id="services">
        <div class="container">

            <div class="section-title">
                <h2>Nossos Serviços</h2>
                <p>Se destacando com o que a de melhor do mercado, conheça um pouco de nossos serviços.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 img-features">
                    <img src="{{asset ('img/icons_candle.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Funerária</h3>
                    <p class="font-italic">
                        Estamos localizados na região metropolitana de Curitiba e agora também atendendo o Vale do Ivai,
                        com nossa sede na cidade de Ivaiporã;
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i>Araucária – PR</li>
                        <li><i class="icofont-check"></i>Fazenda Rio Grande – PR</li>
                        <li><i class="icofont-check"></i>Itaperuçu – PR</li>
                        <li><i class="icofont-check"></i>Ivaiporã – PR</li>
                        <li><i class="icofont-check"></i>Pinhas – PR</li>
                        <li><i class="icofont-check"></i>Rio Branco do Sul – PR</li>
                    </ul>
                    <div class="mob-services">
                        <a href="{{route('site.about-us')}}" class="btn btn-green animated fadeInUp">Saiba Mais</a>
                    </div>

                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 img-features order-1 order-md-2">
                    <img src="{{asset ('img/icons_family.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Plano Funerário</h3>
                    <p class="font-italic">
                        Planos de Assistência Funeral a partir 24 vezes de <strong>R$24,00</strong> sem limite de idade, sem grau de
                        parentesco. Tranquilidade e segurança para sua familia!
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i>Urnas com acabamento envernizado;</li>
                        <li><i class="icofont-check"></i>Ornamentação com flores naturais ou artificiais;</li>
                        <li><i class="icofont-check"></i>Coroa de flores naturais ou artificiais;</li>
                        <li><i class="icofont-check"></i>Véu em tule;</li>
                        <li><i class="icofont-check"></i>Translado de até 100 km rodados;</li>
                        <li><i class="icofont-check"></i>Carro funerário para cortejo fúnebre;</li>
                        <li><i class="icofont-check"></i>Paramentos de acordo com a religião (Suporte e castiçais);</li>
                        <li><i class="icofont-check"></i>Aluguel de capela conveniada ou municipal;</li>
                        <li><i class="icofont-check"></i>Livro de registro de presença em velório;</li>
                        <li><i class="icofont-check"></i>Assistência profissional para liberação do corpo;</li>
                        <li><i class="icofont-check"></i>Lanche para o velório (cortesia);</li>
                    </ul>
                    <div class="mob-services">
                        <a href="{{route('site.contact')}}" class="btn btn-green animated fadeInUp">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 img-features">
                    <img src="{{asset ('img/icons_cemetery.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Cemitério</h3>
                    <p>
                        Possuimos terrenos, jazigo e lóculos, contamos com diversas opções com os melhores preços do
                        mercado!
                    </p>

                    <div class="mob-services">
                        <a href="{{route('site.contact')}}" class="btn btn-green animated fadeInUp">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 img-features order-1 order-md-2">
                    <img src="{{asset ('img/icons_crematorio.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Crematório</h3>
                    <p>
                        O ato de Cremação tem sido a cada dia mais reconhecido e procurado no mercado, devido ao seu
                        processo que oferece mais praticidade e economia.
                    </p>
                    <p>
                        Sendo uma alternativa ao sepultamento consistindo na transformação dos restos mortais em
                        cinzas. Método <strong>Ecológico</strong> que não afeta o meio ambiente, além de ser uma
                        economia a longo prazo.
                    </p>

                    <div class="mob-services">
                        <a href="{{route('site.contact')}}" class="btn btn-green animated fadeInUp">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-6 img-features">
                    <!--<img src="{{asset ('img/icons_add.png')}}" class="img-fluid" alt="">-->
                </div>
                <div class="col-md-5 pt-5 order-2 order-md-1">
                    <h3>Serviços Adicionais</h3>
                    <ul>
                        <li><i class="icofont-check"></i>Coroas de Flores</li>
                        <li><i class="icofont-check"></i>Arranjos </li>
                        <li><i class="icofont-check"></i>Placas para Túmulos</li>
                        <li><i class="icofont-check"></i>Santinhos</li>
                    </ul>
                    <div class="mob-services">
                        <a href="{{route('site.contact')}}" class="btn btn-green animated fadeInUp">Saiba Mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

</main>
<!-- End #main -->
@endsection

@section('footer-newsletter')
<div class="footer-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4>Entre em contato</h4>
                <p>Sempre irá ter um profissional, pronto para te atender ou aguardando sua dúvida!</p>
            </div>
            <div class="col-lg-6">
                <div class="contact" align="right">
                    <a href="{{route('site.contact')}}" class="btn btn-contact">Fale conosco</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
