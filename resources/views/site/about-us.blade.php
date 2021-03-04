@extends ('site.master.layout')

@section('content')
<main id="main">
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Sobre nós</h2>
                <ol>
                    <li><a href="{{Route('site.home')}}">Inicio</a></li>
                    <li>Sobre nós</li>
                </ol>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset ('img/logo.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Conheça um pouco sobre nós</h3>
                    <p>
                        O Grupo Máximo esta no mercado a mais de 10 anos, prestando assistência as familias enlutadas,
                        começamos com atendimento aos planos e aos poucos conseguimos criar nossos serviços para o
                        atendimento do nosso público,
                        nossa empresa está em constante crescimento. Hoje temos nossa estrutura
                        completa para atendimento, com central de plantão 24 horas e funerárias, na Região Metropolitana
                        de Curitiba.
                    </p>
                    <p>
                        Cada vez mais famílias estão confiando em nós para prestar
                        auxílio na hora do Luto. Devido á isso, buscamos sempre garantir a tranquilidade e a satisfação
                        de nossos associados, aperfeiçoando o nosso atendimento com eficiência em nossa operação e acima
                        de tudo com preços justo.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Units Section ======= -->
    <section class="units" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>Unidades</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa3.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Pinhais</h4>
                            <p class="card-text">Pinhais - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Interplanos Agência Funerária</h4>
                            <p class="card-text">Rio Branco - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa4.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Bom Jesus</h4>
                            <p class="card-text">Ivaiporã - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa2.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Guarani</h4>
                            <p class="card-text">Itaperuçu - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa6.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Metropolitana</h4>
                            <p class="card-text">Araucaria - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('img/enterprise/empresa5.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Metropolitana</h4>
                            <p class="card-text">Araucária - PR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Avaliações dos nossos serviços</h2>
                <p>Saiba um pouco sobre nós através dos comentários de nossos clientes, nossa empresa cresce e se
                    fortalece através de uma boa comunição
                    ponta a ponta com quem está junto conosco.
                </p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/user1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Diego Ferreira</h3>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fui atendido super bem, fiz o plano para minha familia e os colaboradores conseguiram me atender
                        de forma rapida. Estão de parabéns. Obrigado Grupo Máximo!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/user2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Gil Santos</h3>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        A infra-estrutura e a organização dos funcionários me surpreenderam, fora o atendimento
                        humanizado que nós entendem, pois no momento difícil não conseguimos pensar de forma correta. O
                        Grupo Máximo irá dar esse suporte!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Ttstimonials Section -->
</main>
@endsection
