<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>@yield('titulo')</title>

    <style>
        body {
            margin: 0px !important;
            padding: 0px !important;
            background-color: #d8d8d8;
        }

        .nav-customize {
            position: absolute;
            left: 0;
            height: 100%;
            width: 175px !important;
            background: #666;
        }

        .content-home {
            padding: 0px 50px 0px 225px;
        }

        .content-login {
            height: 100%;
        }

        .content-menu-nav {
            padding: 25px 10px;
        }

        .card-deck {
            width: 25%;
            height: auto;
            margin: 0px auto;
        }

        .card-img-top {
            width: 100% !important;
            height: auto !important;
        }

        .paginate-center {
            display: flex;
            justify-content: center;
        }

        /* login */


        img.startup {
            width: 100%;
        }

        .label_login {
            font-size: 25px;
            font-weight: 600;
            color: #000;
        }

        .button_login {
            width: 100%;
            border-radius: 20px;
            background-color: #000;
            border: none;
        }


        .card_login {
            width: 100% !important;
            box-shadow: 0px 0px 20px #ffffff;
            height: auto;
            background-color: #ffffff;
        }

        .world {
            display: flex;
            align-items: center;
            height: 100%;
            width: 450px;
        }

        @media only screen and (max-width: 420px) {
            .ajusted_mobile {
                margin: 0px 30px !important;
            }

            .no_padding_margim {
                padding: 0px !important;
                margin: 0px !important;
                height: unset !important;
            }
        }

        .container{
            height: 100vh !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* login */

    </style>
</head>

<body>

    @yield('conteudo')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

</body>

</html>
