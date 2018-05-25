<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mulan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           body, html {
                height: 100%;
            }

            /* The hero image */
            .hero-image {
                /* The image used */
                background-image: url("{{asset("/images/always.jpg")}}");

                /* Set a specific height */
                height: 50%;

                /* Position and center the image to scale nicely on all screens */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            /* Place text in the middle of the image */
            .hero-text {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
        </style>
    </head>
    <body>
            <div class="hero-image">
            <div class="hero-text">
                <h1>Bienvenido</h1>
                <p>Sistema de registros</p>
                
            </div>
            </div>
       
    </body>
</html>
