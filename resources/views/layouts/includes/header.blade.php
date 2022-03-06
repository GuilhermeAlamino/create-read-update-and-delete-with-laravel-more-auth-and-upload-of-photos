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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body {
            margin: 0px !important;
            padding: 0px !important;
            background-color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }

        .nav-customize {
            position: absolute;
            left: 0;
            height: 100vh;
            width: 100% !important;
            background-color: #39374ee6;
        }

        .navbar_custom {
            background-color: #3f3d56;
            box-shadow: 0px 1px 10px #3f3d56;
            z-index: 999;

        }

        .nav-link {
            color: #ffffff !important;
        }

        .side-color-left {
            border-left: 4px solid #212529 !important;
        }
        .side-color-left-transparent {
            border-left:4px solid #39374e00 !important;
        }

        .back-white {
            background-color: #ffffff;
        }

        .nav-link-customize {
            color: #212529 !important;
        }

        .content-home {
            /* padding: 0px 50px 0px 225px; */
        }

        .content-login {
            height: 100%;
        }

        .content-menu-nav {
            padding: 15px 10px;
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

        .container {
            height: 100vh !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* login */

        /* dashboard */


        .card-teste {
            border: 1px solid;
            width: 100%;
            height: 163px;
        }

        /* dashboard */

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
    <script src="https://kit.fontawesome.com/db5f7d3111.js" crossorigin="anonymous"></script>

</body>

</html>
