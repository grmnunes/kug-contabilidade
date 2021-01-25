<section id="contato">
        <div class="container">
            <h1 class="titulo-padrao center-align">Entre em contato</h1>
            <h2 class="sub-titulo-padrao center-align">"Entre em contato conosco, e tire suas dúvidas sobre nossos serviços"</h2>
            <div class="row">

                <div class="col s12 m12 l6" data-aos="fade-right">

                    <ul class="contato-lista">
                        <li>
                            <i class="large material-icons">local_phone</i>
                            (85) 98808-8094 / (85) 99796-0438 / 3376- 1553
                        </li>

                        <li>
                            <i class="large material-icons">access_time</i>
                            seg à sab - 08h às 19h

                        </li>
                        <li>
                            <i class="large material-icons ">assignment_ind</i>
                            Contador: Uila Gomes - CRC 11631

                        </li>

                        <li>
                            <i class="large material-icons ">email</i>
                            Uilagomes@hotmail.com

                        </li>

                        <li>
                            <i class="large material-icons">location_on</i>
                            Rua Ivanildo Nocrato, n°30- Centro,<br>
                            Guaiúba - CE, 61890-000
                        </li>

                    </ul>



                    <h4 class="titulo-redes">-Nossas redes sociais</h4>

                    <ul class="logo-redes">
                        <li>
                            <a  href="https://www.facebook.com/uila.contador" target="_blank">
                                <img src="{{url("assets/all/img/redes-sociais/facebook.svg")}}" alt="facebook">
                            </a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/uila.contador" target="_blank" >
                                <img src="{{url("assets/all/img/redes-sociais/instagram.svg")}}" alt="instagram">
                            </a>
                        </li>

                    </ul>


                </div>

                <div class="col s12 m12 l6">

                   @if( Session::has('success') )
                        <div class="alerta-email">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if( isset($errors) && count($errors) > 0 )

                        <div>
                            @foreach($errors->all() as $error)
                                <div class="chip">
                                    <img src="{{url('assets/all/img/icons/warning.png')}}" alt="alerta">
                                    <i class="close material-icons">close</i>
                                    {{$error}}
                                </div>
                            @endforeach
                        </div>
                    @endif

                    {!! Form::open(['class' => 'contato-form']) !!}

                    {!! Form::label('nome', 'Nome*') !!}
                    {!! Form::text('nome', null, ['class'=>'validate']) !!}

                    {!! Form::label('email', 'E-mail*') !!}
                    {!! Form::text('email', null, ['class'=>'validate']) !!}

                    {!! Form::label('telefone', 'Telefone*') !!}
                    {!! Form::text('telefone', null, ['class'=>'validate teste']) !!}

                    {!! Form::label('menssagem', 'Mensagem*') !!}
                    {!! Form::textarea('menssagem', null, ['class'=>'validate materialize-textarea']) !!}

                    <a class="waves-effect waves-light btn btn-padrão right">Enviar</a>


                    {!! Form::close() !!}



                </div>

            </div>
        </div>
    </section>