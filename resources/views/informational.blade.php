<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/informational.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТЕАТР ДАХ</title>
</head>
<body>

<img id="bck" src="/{{$photo_path}}">


    <div class="container">
        <img id="poster" src="/{{$photo_path}}">
        <h1>{{$title}}</h1>
        <div id="info-container">
            @foreach($info as $paragraph)
                <p>
                    @foreach(explode("\n", $paragraph) as $line)
                        {{$line}}<br>
                    @endforeach
                </p>
            @endforeach
            <p>
                Актори:
                @foreach($actors as $actor)
                    <a href="/actors/{{$actor->id}}">{{$actor->surname}} {{$actor->name}},</a>
                @endforeach
            </p>
        </div>

        <div id="ticket-info-box">
            {{explode('-', $date)[2]}}.{{explode('-', $date)[1]}} {{explode(':', $time)[0]}}:{{explode(':', $time)[1]}}<br>
            {{$place}} {{$price}}грн
        </div>

        <a href="/con/{{$id}}/buy-ticket" id="buy-button">ПРИДБАТИ КВИТКИ</a>

    </div>




</body>
</html>
