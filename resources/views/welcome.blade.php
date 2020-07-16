<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <form>
                <fieldset>
                    <legend>電影評分</legend>

                    <p>
                        <label for="user_id">使用者ID</label>
                        <input type="text" id="user_id">
                    </p>

                    <p>
                        <label for="movie_id">電影ID</label>
                        <input type="text" id="movie_id">
                    </p>

                    <p>
                        <label for="rating_id">評分</label>
                        <input type="text" id="movie_id">
                    </p>

                    <p>
                        <input type="button" value="新增/查詢" onclick="">
                        <input type="button" value="刪除">
                    </p>

                </fieldset>
            </form>

        </div>
    </body>
</html>
