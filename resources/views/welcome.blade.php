<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PWA - Est</title>

        <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
        {{-- <script src="{{asset('js/slick.js')}}"></script> --}}


        <!-- Styles -->
        <style>

            html{
                min-height:100%;
            }

            body {
                color: #fff;
                background-repeat: no-repeat;
                background-image: linear-gradient(#ff8a00, #e52e71);
            }

            .tex{
                text-shadow: 0 2px 3px hsla(0deg, 0%, 0%, 0.25);
            }
        </style>

    </head>
    <body class="format linear">

        <div class="container align-middle">

            <div class="row">
                <div class="col text-center h1">LOREM IPSUM</div>
            </div>

            <div class="row">
                <div class="col text-center h2 fw-light">DOLOR SIT AME</div>
            </div>

            <div class="row bg-white rounded text-center text-dark">
                {{-- <div class="row text-center py-2"><div class="col fw-bold fs-3">Eletrônicos</div></div> --}}
                <div class="carousel px-4 pt-3">
                    @foreach ($dados as $dado)
                        @if ($dado->category == 'Eletronicos' && $dado->imagem != 24)
                            <div class="container px-3 pt-3">
                                <img class="rounded mx-auto d-block w-100" src="{{$dado->imagem}}" alt="{{$dado->title}}" />
                                <p class="text-start fw-bold fs-4">{{$dado->category}}</p>
                                <p class="text-start fs-5">{{$dado->title}}</p>
                                <p class="text-start fs-6 tex">{{$dado->body}}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row bg-white rounded text-center text-dark mt-3">
                {{-- <div class="row text-center py-2"><div class="col fw-bold fs-3">Esportes</div></div> --}}
                <div class="carousel px-4 pt-3">
                    @foreach ($dados as $dado)
                        @if ($dado->category == 'Esportes')
                            <div class="container px-3 pt-3">
                                <img class="rounded mx-auto d-block w-100" src="{{$dado->imagem}}" alt="dotnet" />
                                <p class="text-start fw-bold fs-4">{{$dado->category}}</p>
                                <p class="text-start fs-5">{{$dado->title}}</p>
                                <p class="text-start fs-6 tex">{{$dado->body}}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row bg-white rounded text-center text-dark my-3">
                {{-- <div class="row text-center py-2"><div class="col fw-bold fs-3">Moda</div></div> --}}
                <div class="carousel px-4 pt-3">
                    @foreach ($dados as $dado)
                        @if ($dado->category == 'Moda')
                            <div class="container px-3 pt-3">
                                <img class="rounded mx-auto d-block w-100" src="{{$dado->imagem}}" alt="dotnet" />
                                <p class="text-start fw-bold fs-4">{{$dado->category}}</p>
                                <p class="text-start fs-5">{{$dado->title}}</p>
                                <p class="text-start fs-6 tex">{{$dado->body}}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>




        <script>
            $('.carousel').slick({
                dots: true,
                infinite: false,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>


    </body>
</html>
