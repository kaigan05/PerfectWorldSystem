<header class="header">
    <div id="general">
        <div class="wrapper">
            <div class="left locale"><a href=""></a></div>
            <menu>
                <li class=""><a href="{{route('index')}}" class="home"><span></span></a></li>
                <li class="lvl_1"><a href="#" class="forum"><span></span></a>
                    <ol class="lvl_2">
                        <li><a href="{{route('user.create')}}">REGISTRO</a></li>
                        <li><a href="#">ALTERAR SENHA</a></li>
                        <li><a href="#">RECUPERAR CONTA</a></li>
                        <li><a href="donate.html">DONATE</a></li>

                    </ol>
                </li>
                <li class="lvl_1"><a href="{{route('infos')}}" class="about"><span></span></a></li>
                <li class="lvl_1"><a href="{{route('download')}}" class="files"><span></span></a>
                    <ol class="lvl_2">
                        <li><a href="{{route('download')}}">Patcher PWX</a></li>
                        <li><a href="{{route('download')}}">Client Completo</a></li>
                    </ol>
                </li>
                <li class=""><a href="{{route('staff')}}" class="donate"><span></span></a></li>
                <li class=""><a href="{{route('rank')}}" class="vote"></a></li>
            </menu>
            <div class="lk right"><a href="{{route('login')}}">Painel do Jogador</a></div>
        </div>
    </div>
    <section class="head">
        <div class="wrapper">
            <div class="logo left">
                <a href=""><img src="_img/logo.png"></a>
            </div>
            <div class="right-box right">
                <!-- Таймер -->
                <div class="timer">
                    <div class="right">
                        <div></div>
                    </div>
                </div>
                <!-- Таймер -->
                <div class="bot right">
                    <a href="donate.html" class="bot1">Faça sua Doação</a>
                    <a href="{{route('download')}}" class="bot1">Download</a>
                </div>
            </div>
        </div>
    </section>
</header>