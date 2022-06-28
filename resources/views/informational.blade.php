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
        </div>

        <div id="ticket-info-box">
            {{$date}} {{$time}}<br>
            {{$place}}
        </div>

        <a href="#" id="buy-button">ПРИДБАТИ КВИТКИ</a>

    </div>




</body>
</html>
