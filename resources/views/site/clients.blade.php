@extends ('site.master.layout')

@section('content')
<main id="main">
    <!-- ======= Parceiros Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Nossos Parceiros</h2>
                <ol>
                    <li><a href="{{Route('site.home')}}">Inicio</a></li>
                    <li>Parceiros</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="parceiros" class="section-bg" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row no-gutters parceiros-wrap">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="parceiro-logo" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Clique para saber mais!">
                        <a href="https://www.facebook.com/dra.taisaraujo"><img
                                src="{{asset('img/parceiros/parceiro1.png')}}" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="parceiro-logo" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Clique para saber mais!">
                        <a href=""><img
                                src="{{asset('img/parceiros/parceiro2.png')}}" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="parceiro-logo" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Clique para saber mais!"> <a href="https://www.facebook.com/clinicadia">
                            <img src="{{asset('img/parceiros/parceiro3.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="parceiro-logo">
                    </div>
                </div>
            </div>
            <div class="section-title">
                <h2>Você é empresa? Venha fazer parceria conosco!</h2>
                <a href="{{route('site.contact')}}" class="btn btn-green animated fadeInUp">Entrar em contato</a>
            </div>
        </div>
    </section>
    <!-- End parceiros Us Section -->






</main>
@endsection