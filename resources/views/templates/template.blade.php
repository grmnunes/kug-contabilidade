<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url('assets/all/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/all/css/estilo.css')}}" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

    <header>
        <div id="top-header" class="hide-on-med-and-down">
            <ul class="right">
                <li> <a href="https://www.facebook.com/uila.contador" target="_blank"><img  class="s-icon" src="{{url('assets/all/img/redes-sociais/facebook.svg')}}"></a></li>
                <li> <a href="https://www.facebook.com/uila.contador" target="_blank"><img  class="s-icon" src="{{url('assets/all/img/redes-sociais/instagram.svg')}}"></a></li>
                <li>(85) 98808-8094</li>
                <li>(85) 3376-1553</li>
                <li>seg à sab - 08h às 19h</li>
            </ul>

        </div>
        <!-- <div class="navbar-fixed"> -->
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo"><img class="responsive-img" src="{{url('assets/all/img/logo.png')}}"></a>
                    <a href="#" data-target="menu-responsivo" class="sidenav-trigger"><i class="material-icons brown-text">menu</i></a>
                    <ul class="right hide-on-med-and-down menu-item">
                        <li><a  href="#">Home</a></li>
                        <li><a href="#servicos">Seviços</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#links-uteis">Links Úteis</a></li>
                        <li><a href="#contato">Contato</a></li>

                    </ul>
                </div>
            </nav>
        <!-- </div> -->

    </header>

    <!--MENU RESPONSIVO-->
<ul class="sidenav" id="menu-responsivo">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="{{url('assets/all/img/header2.png')}}" alt="background" class="responsive-img">
            </div>
            <img src="{{url('assets/all/img/logo.png')}}" class="size-logo" alt="logo-menu" >
        </div>
    </li>

    <li class="estilo-side-nav phone">
        <span>(85) 98808-8094 / (85) 3376-1553<br>
              seg à sab - 08h às 19h</span>
    </li>

    <li class="estilo-side-nav">
        <a  href="#servicos" >
            <img src="{{url('assets/all/img/icons/menu/home.svg')}}" class="s-icon responsive-img" alt="home">
            <span>Home</span>
        </a>
    </li>

    <li class="estilo-side-nav">
        <a  href="#servicos" >
            <img src="{{url('assets/all/img/icons/menu/servicos.svg')}}" class="s-icon responsive-img" alt="servicos">
            <span>Serviços</span>
        </a>
    </li>

    <li class="estilo-side-nav">
        <a  href="#sobre" >
            <img src="{{url('assets/all/img/icons/menu/sobre.svg')}}"  class="s-icon responsive-img" alt="Sobre">
            <span>Sobre</span>
        </a>
    </li>

    <li class="estilo-side-nav">
        <a  href="#links-uteis" >
            <img src="{{url('assets/all/img/icons/menu/link.svg')}}" class="s-icon responsive-img" alt="link">
            <span>Links Úteis</span>
        </a>
    </li>

    <li class="estilo-side-nav">
        <a  href="#contato" >
            <img src="{{url('assets/all/img/icons/menu/contato.svg')}}" class="s-icon responsive-img" alt="Contato">
            <span>Contato</span>
        </a>
    </li>

    <li class="titulo-redes-socais">Nos siga nas redes sociais</li>

    <div class="center-align">
        <a  href="#" target="_blank">
            <img src="{{url('assets/all/img/icons/menu/facebook.svg')}}" class="s-socias-lateral"alt="Facebook">
        </a>

        <a href="#" target="_blank">
            <img src="{{url('assets/all/img/icons/menu/instagram.svg')}}" class="s-socias-lateral" alt="Instagram">
        </a>

    </div>

</ul>




{{--content--}}

 @yield('content')

{{--end content--}}

<div id="voltarTopo">
        <a href="#" id="subir" class="btn-floating btn-large waves-effect waves-light hide"><i class="material-icons">arrow_upward</i></a>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="row">


            <div class="col s12 m12 l4 center-align" data-aos="fade-up" data-aos-duration="1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2366.46375229369!2d-38.636729638748044!3d-4.040464766790239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bf4daaaaaaaaab%3A0x732c065022d5fb2!2sBanco%20do%20Brasil!5e0!3m2!1spt-BR!2sbr!4v1582842605884!5m2!1spt-BR!2sbr" width="300" height="250" 
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>

            <div class="col s12 m12 l4  mapa-site" data-aos="fade-up" data-aos-duration="1500">
                <span  class="titulo-footer">Mapa do site</span>
                <a  href="#"><i class="material-icons notranslate">arrow_forward</i>Home</a>
                <a href="#servicos"><i class="material-icons notranslate">arrow_forward</i>Serviços</a>
                <a href="#sobre"><i class="material-icons notranslate">arrow_forward</i>Sobre</a>
                <a href="#links-uteis"><i class="material-icons notranslate">arrow_forward</i>Links Úteis</a>
                <a href="#contato"><i class="material-icons notranslate">arrow_forward</i>Contato</a>
            </div>



            <div class="col s12 m12 l4" data-aos="fade-up" data-aos-duration="2000">
                <ul class="left-align endereco" data-aos="fade-up" data-aos-duration="1500">
                    <li>
                        <span  class="titulo-footer">Endereço</span>
                        <p> <i class="material-icons notranslate"> arrow_forward </i> Rua Ivanildo Nocrato, n°30- Centro,
                           </p>
                    </li>
                    <li>
                        <p> <i class="material-icons notranslate"> arrow_forward </i>
                            Guaiúba - CE, 61890-000</p>
                    </li>
                    
                    <li>
                        <p><i class="material-icons notranslate"> arrow_forward </i>(85) 98808-8094</p>
                    </li>

                    <li>
                        <p><i class="material-icons notranslate"> arrow_forward </i>(85) 3376-1553</p>
                    </li>

                    <li>
                        <p><i class="material-icons notranslate"> arrow_forward </i>seg à sab - 08h às 19h</p>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container" >
            <span class="notranslate">© <?php echo date('Y')  ?> KUG Serviços Contábeis - Todos os direitos reservados</span>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{url('assets/all/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('assets/all/js/scroll.js')}}"></script>
<script type="text/javascript" src="{{url('assets/all/js/noticias.js')}}"></script>
<script type="text/javascript" src="{{url('assets/all/js/voltar-topo.js')}}"></script>
<script type="text/javascript" src="{{url('assets/all/materialize/js/materialize.min.js')}}"></script>




<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
        });

        autoplay()
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 6500);
        }
    });

    
</script>

@stack('scripts')


</body>
</html>