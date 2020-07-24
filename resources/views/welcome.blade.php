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
                justify-content: space-evenly;
            }

            .position-ref {
                position: relative;
            }

            .table-scroll {
                height: 150px;
                overflow-y: scroll;
                margin-top: 20px;
                display: block;
                border-collapse: collapse;
                /*border: 3px black solid;*/

            }

            .table-scroll thead th {
                position: sticky;
                top: 0;
            }

            th {
                background: #d8d8d8;
                border: 3px white solid;
            }

            td {
                background: #ededed;
                border: 3px white solid;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div>
                <form action="" method="post">
{{--                    {{ csrf_field() }}--}}
                    <fieldset>
                        <legend>電影評分</legend>

                        <p>
                            <label for="user_id">使用者ID</label>
                            <input type="text" placeholder="user id" name="user_id">
                        </p>

{{--                        <p>--}}
{{--                            <label for="movie_id">電影ID</label>--}}
{{--                            <input type="text" name="movie_id" placeholder="movie id">--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            <label for="rating_id">評分</label>--}}
{{--                            <input type="text" name="rating_id" placeholder="rating">--}}
{{--                        </p>--}}

                        <p>
                            <input type="submit" name="submit">
{{--                            <input type="submit" name="submit" value="Insert/Update">--}}
{{--                            <input type="submit" name="submit" value="Delete">--}}
{{--                            <button>Search</button>--}}

                        </p>

                    </fieldset>
                </form>
            </div>

            <div>
                <table class="table-scroll" cellspacing="5" cellpadding="5">
                    <thead>
                    <tr>
                        <th>User ID</th><th>Movie ID</th><th>Rating</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ratings as $rating)
                        <tr>
                            <td>{{$rating->user_id}}</td>
                            <td>{{$rating->movie_id}}</td>
                            <td>{{$rating->rating}}</td>
                        </tr>
                    @endforeach

                    </tbody>


                </table>
            </div>

        </div>

    </body>
</html>
