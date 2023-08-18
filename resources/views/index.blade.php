@extends('template')
@section('title', 'Fairness Hosting')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/banner4.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="h5">Bem vindo</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner4.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner4.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="container CentralizaCards d-flex">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 h-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container d-flex CentralizaCards">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Por que escolher a Hospedagem de Sites da Fairness</h1>
        </div>
        <div class="EspacamentoTextos text-center">
            <h2>Conheça os diferenciais que a líder em hospedagem oferece</h2>
        </div>
        <div class="d-block col-sm-4 ">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill-check IconesRecomendacoes" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path
                        d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                </svg>
                <h3 class="EspacamentoBlocosHospedagens">Equipe Qualificada</h3>
            </div>
            <div>
                <p class="text-center">Times criativos e especializados <br> para facilitar o seu dia a dia <br> com
                    nossos serviços.</p>
            </div>
        </div>
        <div class="d-block col-sm-4">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill-gear IconesRecomendacoes" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
                <h3 class="EspacamentoBlocosHospedagens">Equipe Qualificada</h3>
            </div>
            <div>
                <p class="text-center">Times criativos e especializados <br> para facilitar o seu dia a dia <br> com
                    nossos serviços.</p>
            </div>
        </div>
        <div class="d-block col-sm-4">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill-lock IconesRecomendacoes" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                </svg>
                <h3 class="EspacamentoBlocosHospedagens">Equipe Qualificada</h3>
            </div>
            <div>
                <p class="text-center">Times criativos e especializados <br> para facilitar o seu dia a dia <br> com
                    nossos serviços.</p>
            </div>
        </div>

    </div>
</section>
<section class="container mt-md-2 mt-lg-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="h1">Oque te oferecemos?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 d-flex justify-content-center">
            <img src="{{ asset('img/oqueteoferecemos1.jpg') }}" alt="" class="w-75">
        </div>
        <div class="col-sm-6 d-flex align-items-center">
            <div class="text-justify">
                <h2>Servidores Cloud</h2>
                <p>Realizamos implementações de ambientes de infraestrutura em cloud, de forma simples e escalável, onde
                    atuamos com serviços gerenciados como serverless e soluções para dados.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 d-flex align-items-center">
            <div class="text-justify">
            <h2>Um Ambiente de acordo com a sua necessidade</h2>
            <p>Desenvolvemos infraestruturas personalizadas sob medida para as necessidades de nossos clientes,
                criando ambientes de TI na nuvem que são eficientes, escaláveis e adaptados às demandas específicas.
                Nosso foco está em oferecer soluções gerenciadas, incluindo abordagens serverless e estratégias de
                dados inteligentes</p>
            </div>
        </div>
        <div class="col-sm-6 d-flex justify-content-center">
            <img src="{{ asset('img/oqueteoferecemos2.png') }}" alt="" class="w-75">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 d-flex justify-content-center">
            <img src="{{ asset('img/oqueteoferecemos3.jpg') }}" alt="" class="w-75">
        </div>
        <div class="col-sm-6 d-flex align-items-center">
            <div class="text-justify">
            <h2>Sustentação</h2>
            <p>
                "Comprometidos com a sustentabilidade, oferecemos soluções de suporte técnico que garantem a
                estabilidade e o desempenho contínuo de sua infraestrutura. Nossa abordagem responsável visa
                maximizar a eficiência, minimizar o impacto ambiental e proporcionar um ambiente seguro para o
                crescimento sustentável de seu negócio na era digital."</p>
            </div>
        </div>
    </div>
</section>
@endsection
