<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/bootstrap.js')}}"></script>

        <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
        {{-- <script src="{{asset('js/slick.js')}}"></script> --}}


        <!-- Styles -->
        <style>

            html{
                min-height:100%;
            }

            .format {
            background-repeat: no-repeat;
            align-items: center;
            border-radius: 16px;
            color: #fff;
            /* font-size: 1.25rem; */
            /* font-weight: 900; */
            display: flex;
            height: 100%;
            justify-content: center;
            text-shadow: 0 2px 3px hsla(0deg, 0%, 0%, 0.25);
            }

            .linear {
            background-image: linear-gradient(#ff8a00, #e52e71);
            }
        </style>

    </head>
    <body class="format linear">

        <div class="container">

            <div class="row">
                <div class="col text-center h1">LOREM IPSUM</div>
            </div>

            <div class="row">
                <div class="col text-center h2 fw-light">DOLOR SIT AME</div>
            </div>

            <div class="row-sm-2 bg-white rounded text-center text-dark">
                <div class="responsive">
                    @foreach ($dados as $dado)
                        <div class="container p-3">
                            <img class="rounded mx-auto d-block w-50" src="{{$dado->imagem}}" alt="dotnet" />
                            <p class="text-start">{{$dado->category}}</p>
                            <p>{{$dado->title}}</p>
                        </div>
                    @endforeach
                  </div>
            </div>

        </div>




        <script>
            $('.responsive').slick({
                dots: true,
                infinite: false,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
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
