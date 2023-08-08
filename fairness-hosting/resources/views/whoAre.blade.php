@extends('template')
@section('title', 'Quem Somos?')
@section('content')
<div class="container">
    <div class="container-fluid">
        <h1 class="text-center">Sobre Nós!</h1><br>
        <div class="row">
            <div class="col-md-6" style="display: flex;">
                <p class="alignJustify">
                    Bem-vindo à Fairness, um destino onde a tecnologia e a inovação convergem para criar um
                    ambiente digital seguro, confiável e acessível para indivíduos e empresas em todo o mundo. Nossa
                    jornada começou com uma visão ousada: oferecer hospedagem de qualidade e máquinas virtuais
                    poderosas, sem que isso custasse uma fortuna.
                    <br/>
                    <br/>
                    Fundada por entusiastas de tecnologia e apaixonados por desafios, nossa empresa nasceu da
                    compreensão de que, em um mundo cada vez mais conectado, a tecnologia deve ser uma aliada, não um
                    obstáculo. Nossos fundadores, após anos de experiência na indústria, perceberam a lacuna entre as
                    soluções de hospedagem de alto custo e as opções de baixo desempenho. E assim, nasceu a Fairness.
                </p>
            </div>
            <div class="col-md-6" style="display: flex;">
                <img src="{{asset('img/check-in-svgrepo-com.svg')}}" alt="Ícone SVG" />
            </div>
        </div>


    </div>

</div>
@endsection
