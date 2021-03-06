@extends('layout')

@section('title', 'ТЕАТР ДАХ')

@push('styles')
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/styles.css">
@endpush

@section('content')
    <div id="date-selector">
        <h1>АФІША</h1>

        <form method="get" action="" id="date-form">
            <div id="month-container">
                <input type="month" class="selected-month" name="month" min="{{$current_month}}" value="{{$requested_month}}" onchange="document.getElementById('date-form').submit()" >
            </div>
            <label for="day">День</label><br>
            <input type="number" id="day"
                   @if($current_month==$requested_month)
                       min="{{$current_day}}"
                   @else
                       min="1"
                   @endif
                   value="{{$requested_day}}" max="31" name="day"  size="2">
            <input type="submit" value="Submit" hidden>
        </form>
    </div>

    <div id="show-container">
        @if(count($perfomances) == 0)
            <h3>На цю дату вистав немає</h3>
        @else
            @foreach($perfomances as $perfomance)
                <div class="show-box">
                    <div class="left-box">
                        <h3 class="show-name">{{$perfomance->play->title}} {{$perfomance->play->subtitle}}</h3>
                        <div class="show-coordinates">
                            <h5>{{explode('-', $perfomance->date)[2]}}.{{explode('-', $perfomance->date)[1]}}</h5>
                            <h5>{{explode(':', $perfomance->time)[0]}}:{{explode(':', $perfomance->time)[1]}}</h5>
                            <h5>{{$perfomance->place}}</h5>
                        </div>
                        <div class="show-short-description">
                            <p>
                                {{$perfomance->play->short_info}}
                            </p>
                            <p class="longer-description">
                                {{$perfomance->play->long_info}}
                            </p>
                        </div>
                        <a href="con/{{$perfomance->id}}">
                            <div class="details-button">
                                Детальніше
                            </div>
                        </a>
                    </div>
                    <img class="show-image" src="{{$perfomance->play->photo_path}}">
                </div>
            @endforeach
        @endif

    </div>

    <div id="vertical-show-container">
        @foreach($perfomances as $perfomance)
            <div class="show-box">
                <h3 class="show-name">{{$perfomance->title}}</h3>
                <div class="show-coordinates">
                    <h5>{{explode(':', $perfomance->time)[0]}}:{{explode(':', $perfomance->time)[1]}}</h5>
                    <h5>{{$perfomance->place}}</h5>
                </div>
                <div class="show-short-description">
                    <p>{{$perfomance->play->mobile_info}}</p>
                </div>
                <img class="show-image" src="{{$perfomance->play->photo_path}}">

            </div>
        @endforeach
    </div>

@endsection

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/menu.js"></script>
@endpush
