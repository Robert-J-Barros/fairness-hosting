@extends('template')
@section('title', 'Quem Somos?')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card m-4 shadow-sm">
            <div class="card-body">
                <h1 class="text-center p-1">Venha conhecer um pouco mais sobre a Fairless Hosting</h1><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" class="displayFlex">
                <div class="alignJustify">
                    <h2 class="alignCenter display-5">Conheça um<br />pouco da história</h3>
                        <p class=" fontSizeLg">
                            Bem-vindo à Fairness, um destino onde a tecnologia e a inovação convergem para criar um
                            ambiente digital seguro, confiável e acessível para indivíduos e empresas em todo o mundo.
                            Nossa
                            jornada começou com uma visão ousada: oferecer hospedagem de qualidade e máquinas virtuais
                            poderosas, sem que isso custasse uma fortuna.
                            <br />
                            <br />
                            Fundada por entusiastas de tecnologia e apaixonados por desafios, nossa empresa nasceu da
                            compreensão de que, em um mundo cada vez mais conectado, a tecnologia deve ser uma aliada,
                            não um
                            obstáculo. Nossos fundadores, após anos de experiência na indústria, perceberam a lacuna
                            entre as
                            soluções de hospedagem de baixo custo e as opções de alto desempenho. E assim, nasceu a
                            Fairness.
                        </p>
                </div>
            </div>
            <div class="col-md-6" style="display: flex;padding: 50px;">
                <img class="img-fluid" src="{{ asset('img/help-svgrepo-com.svg') }}"
                    alt="Ícone SVG" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('img/check-in-svgrepo-com.svg') }}"
                    alt="Ícone SVG" />
            </div>
            <div class="col-sm-6" class="displayFlex">
                <div class="alignJustify">
                    <h2 class="alignCenter display-5">Tempo para Planos</h3>
                        <p class=" fontSizeLg">
                            Compreendemos que cada negócio é único, e é por isso que projetamos uma variedade de planos
                            de hospedagem que se adaptam às suas necessidades. Independentemente de você ser uma pequena
                            empresa que está começando sua jornada ou uma grande empresa que busca escalabilidade, temos
                            planos que atendem a todos.
                            <br />
                            <br />
                            Nossos tempos de planos são projetados para serem flexíveis, permitindo que você escolha a
                            melhor opção para o seu orçamento e metas. Seja qual for o tamanho da sua empresa, a
                            Fairness Hosting tem um plano que se ajusta perfeitamente a você.
                            <br />
                            <br />
                            Na Fairness Hosting, não acreditamos em soluções únicas para todos. Reconhecemos a
                            singularidade do seu negócio e estamos prontos para oferecer soluções de hospedagem
                            adaptadas às suas necessidades. Entre em contato conosco hoje mesmo para descobrir como
                            nossos diversos planos podem impulsionar o seu sucesso online.
                            <br />
                            <br />
                            Escolha a Fairness e alcance novos patamares de desempenho, flexibilidade e excelência em
                            hospedagem!
                        </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" class="displayFlex">
                <div class="alignJustify">
                    <h2 class="alignCenter display-5">Hospedagem e Insights</h3>
                        <p class=" fontSizeLg">
                            Na Fairness, não apenas fornecemos serviços de hospedagem excepcionais, mas também elevamos
                            o nível com nosso monitoramento de alto desempenho. Compreendemos a vital importância de
                            manter sua presença online sempre ativa e segura. É por isso que oferecemos um serviço de
                            monitoramento que não conhece igual, garantindo que sua hospedagem esteja sempre no seu
                            melhor.
                        </p>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Monitoramento
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Monitoramento Contínuo 24/7: Nossa equipe altamente
                                        qualificada monitora seus sistemas 24
                                        horas por dia, 7 dias por semana. Isso significa que estamos atentos a qualquer
                                        problema em
                                        tempo real, independentemente da hora do dia. Nosso monitoramento contínuo nos
                                        permite
                                        resolver problemas antes que eles impactem sua presença online.
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Alertas
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Alertas Instantâneos e Inteligentes: Com nosso sistema avançado de alertas,
                                            você será
                                            notificado instantaneamente por meio de mensagens SMS, e-mails ou
                                            notificações no painel de
                                            controle sempre que ocorrer um incidente. Isso permite uma resposta rápida e
                                            eficaz,
                                            garantindo que você fique sempre informado.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Ações de monitoramentos
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Ação Imediata e Eficiente: Se algo der errado, nossa
                                            equipe age imediatamente. Nossa
                                            experiência nos permite identificar e resolver problemas com eficiência,
                                            minimizando o tempo
                                            de inatividade e reduzindo qualquer impacto negativo em seu site.
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                Monitoramento Completo
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Monitoramento Completo: Não nos limitamos ao monitoramento do servidor
                                                principal.
                                                Acompanhamos todos os aspectos críticos da sua hospedagem, desde a
                                                segurança dos dados até a
                                                utilização da largura de banda. Isso garante um ambiente de hospedagem
                                                coeso e de alto
                                                desempenho.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('img/stock-movement-svgrepo-com.svg') }}"
                    alt="Ícone SVG" />
            </div>
        </div>
    </div>
</div>
@endsection
