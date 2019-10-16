<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    </head>
    <body>

        <div class="top-bar">
        </div>

        <div class="intro">
            <div class="container text-center">
                <img class="profile-image img-fluid rounded-circle position-absolute" src="{{ asset('img/1.jpg') }}" alt="">
                <h1 class="title name">Gabriel de la Llave Pinto</h1>
                <div class="subtitle">Full Stack Developer</div>
                <div class="profile">
                    <p>Fullstack Developer con experiencia en desarrollo web y Realidad Virtual. Me considero una persona a la que le gusta trabajar en equipo, responsable, constante, organizado, aplicado y con ganas de seguir adquiriendo conocimientos y experiencias.</p>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="container text-center">
                <ul class="list-inline m-0 py-4">
                    <li class="email list-inline-item px-3"><a href="mailto: gabriel.delallavepinto@gmail.com"><i class="material-icons align-middle pr-2">email</i>gabriel.delallavepinto@gmail.com</a></li>
                    <li class="phone list-inline-item px-3"><a href="tel: +34676005261"><i class="material-icons align-middle pr-2">phone</i>+34 676 00 52 61</a></li>
                    <li class="website list-inline-item px-3"><a href="https://portfolio.gabrieldelallavepinto.com" target="_blank"><i class="material-icons align-middle pr-2">public</i>portfolio</a></li>
                </ul>
            </div>
        </div>


        @php
            $experiencias = [
                [
                    "year" => "06/2018 - 06/2019",
                    "text" => "Diseñador y Desarrollador Web",
                    "location" => "Ayuda-T un lugar todas las soluciones S.L., 11500 El Puerto de Santa María, Cádiz",
                ],
                [
                    "year" => "09/2017 - 06/2018",
                    "text" => "Practicas de empresa como desarrollador Web",
                    "location" => "Ayuda-T un lugar todas las soluciones S.L., 11500 El Puerto de Santa María, Cádiz",
                ],


            ];
        @endphp
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section experiences-section">
                        <h3 class="text-center font-weight-bold mb-5">Experiencia</h3>
                        <div class="timeline">
                            @foreach ($experiencias as $experiencia)
                                <div class="item">
                                    <p class="date">{{ $experiencia['year'] }}</p>
                                    <p class="place">{{ $experiencia['text'] }}</p>
                                    <div class="location"><p>{{ $experiencia['location'] }}</p></div>
                                    {{-- <div class="location"><i class="float-left material-icons pr-2">room</i><p>11500 El Puerto de Sta María, Cádiz</p></div> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @php
                        $cursos = [
                            [
                                "year" => "2014",
                                "text" => "CISCO - CCNA Routing and Switching 1",
                            ]
                        ];
                    @endphp

                    <div class="col-md-12 section courses-section">
                        <h3 class="text-center font-weight-bold mb-5">Cursos</h3>
                        <div class="timeline">
                            @foreach ($cursos as $curso)


                            <div class="item">
                                <p class="date">{{$curso["year"]}}</p>
                                <p class="place">{{$curso["text"]}}</p>
                            </div>
                            @endforeach

                        </div>
                    </div>


                    @php
                        $educaciones = [
                            [
                                "year" => "2012 - 2019",
                                "text" => "Grado en Ingeniería Informática (Pendiente B1 Inglés)",
                                "location" => "Escuela Superior de Ingeniería de Cádiz. 11519 Puerto Real, Cádiz",
                            ],
                            [
                                "year" => "2008 - 2012",
                                "text" => "Bachiller científico-tecnológico",
                                "location" => "I.E.S Sancti Petri, 11100 San Fernando, Cádiz",
                            ],
                        ];
                    @endphp
                    <div class="col-md-12 section education-section">
                        <h3 class="text-center font-weight-bold mb-5">Educación</h3>
                        <div class="timeline">
                            @foreach ($educaciones as $educacion)


                                <div class="item">
                                    <p class="date">{{ $educacion['year'] }}</p>
                                    <p class="place">{{ $educacion['text'] }}</p>
                                    <div class="location"><p>{{ $educacion['location'] }}</p></div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @php

                        $skills = [
                            "php" => [
                                "name" => "PHP",
                                "percentage" => 80,
                                "time" => 2,
                            ],
                            "html5" => [
                                "name" => "HTML5",
                                "percentage" => 90,
                                "time" => 2,
                            ],
                            "css3" => [
                                "name" => "CSS3",
                                "percentage" => 85,
                                "time" => 2,
                            ]
                        ];

                        $otherSkills = ["PHP", "HTML5", "CSS3", "JavaScript", "jQuery", "WordPress", "Unity", "SQL", "Java", "Laravel", "C#"];

                    @endphp

                    <div id="SkillsSection" class="col-md-12 section text-center">

                        <h3 class="text-center font-weight-bold mb-5">Habilidades Profesionales</h3>

                        <div id="TopSkills" class=" row justify-content-md-center">

                            @foreach($skills as $skill)
                                <div class="item col-12 col-md-4">
                                    <div class="easy-pie-chart text-center" data-percent="{{$skill['percentage']}}">{{$skill['percentage']}}%</div>
                                    <h4 class="skill-name">{{ $skill["name"] }}</h4>
                                    <div class="level">{{ $skill["time"] }} años</div>
                                </div>
                            @endforeach

                        </div>


                        <div id="OtherSkills" class="row justify-content-md-center">
                            <h4 class="subtitle">Otras Habilidades</h4>

                            <div class="col-md-12">
                                @foreach($otherSkills as $skill)
                                    <span class="skill-tag">{{ $skill }}</span>
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div id="ContactSection" class="col-md-12 section">

                        <h3 class="text-center font-weight-bold mb-5  text-center">Contacta Conmigo</h3>

                        <form>
                            <div id="ContactForm" class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="subjet">Asunto</label>
                                    <input type="text" class="form-control" id="subjet" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="message">Mensaje</label>
                                    <textarea type="form-control" class="form-control" id="message" rows="4"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="icons">
                            <a class="icon" href="https://www.linkedin.com/in/gabriel-delallavepinto/">
                                <svg id="linkedin_icon" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                    <path fill="currentcolor" id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z"/>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>




        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.js"></script>

        <script type="text/javascript">
            $(function() {
                //create instance
                $('.easy-pie-chart').easyPieChart({
                    barColor: '#17d3e6',
                    scaleColor: false,
                    lineWidth: 8,
                    animate: 2000
                });
            });
        </script>
    </body>
</html>
