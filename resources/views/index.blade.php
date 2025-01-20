<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPGRacing</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                display: flex;
                justify-content: center; /* Центрируем по горизонтали */
                align-items: center; /* Центрируем по вертикали */
                height: 100vh; /* Высота экрана */
                background-color: #f4f4f4;
            }

            img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain; /* Сохраняет пропорции */
            }
        </style>
    </head>
    <body style="background: #000000;">

        <img src="/images/ppg-racing-logo.svg" style="width: 30%;">

    </body>
</html>
