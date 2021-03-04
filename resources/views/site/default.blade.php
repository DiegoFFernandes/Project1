@extends ('site.master.layout')

@section('content')
<main id="main">
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Nossos Clientes</h2>
                <ol>
                    <li><a href="{{Route('site.home')}}">Inicio</a></li>
                    <li>clientes</li>
                </ol>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Units Section ======= -->
    <section class="units" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>Unidades</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Pinhais</h4>
                            <p class="card-text">Pinhais - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Interplanos Agência Funerária</h4>
                            <p class="card-text">Pinhais - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Bom Jesus</h4>
                            <p class="card-text">Araucária - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Guarani</h4>
                            <p class="card-text">Araucária - PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('img/empresa1.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Funerária Metropolitana</h4>
                            <p class="card-text">Araucária - PR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>
@endsection