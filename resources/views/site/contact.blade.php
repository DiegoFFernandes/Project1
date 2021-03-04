@extends('site.master.layout')

@section('footer-newsletter')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contato</h2>
                <ol>
                    <li><a href="{{Route('site.home')}}">Inicio</a></li>
                    <li>Contato</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Nosso Endereço</h3>
                                <p>Avenida Ayrton Senna da Silva, 1390 - Centro, Pinhais/PR</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p>contato@lutogrupomaximo.com.br<br>eduarda@lutogrupomaximo.com.br</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Telefones</h3>
                                <p>(041) 3222-8131<br>(041) 3668-1896</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    @if($errors->any())
                    <ul class='alert alert-danger error'>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if(session('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form action="{{route('site-sendContact')}}" name="form_contato" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="nome" class="form-control" id="name" name="name" aria-describedby="nome"
                                placeholder="Nome" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="phone" aria-describedby="phone"
                                placeholder="Telefone" value="{{old('phone')}}" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="assunto" name='subject' required>
                                <option value="">Selecione um assunto</option>
                                <option value="1">Funerária</option>
                                <option value="2">Plano funerário</option>
                                <option value="3">Cemitério</option>
                                <option value="4">Crematório</option>
                                <option value="5">Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name='description' id="descricao" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Enviar" class="btn btn-padrao btn-block rounded-0 py-2">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
        <div class="container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.865511434565!2d-49.186212185491385!3d-25.442759439626457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcef954bf3fad9%3A0x6ec7a2f545b93741!2sAv.%20Ayrton%20Senna%20da%20Silva%20-%20Centro%2C%20Pinhais%20-%20PR!5e0!3m2!1sen!2sbr!4v1600944393058!5m2!1sen!2sbr"
                frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </section><!-- End Map Section -->

</main><!-- End #main -->

@endsection