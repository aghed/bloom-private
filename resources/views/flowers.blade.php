@extends('layout.partials.master')


@section('maincontent')

    <div class="container">
        <div class="row text-center">
            <h3>CHOOSE YOUR BOX</h3>
        </div>
        <div class="col-md-offset-2 box-container">
            <div>
                <a href="{{route('flowersBox')}}"><img src="{{asset('assets/images/redflower.jpg')}}" alt=""></a>
                <span>ROUND<b>BOX</b></span>
            </div>
            <div>
                <a href="#"><img src="{{asset('assets/images/flowerbox.jpg')}}" alt=""></a>
                <span>SQUARE<b>BOX</b></span>
            </div>
        </div>

    </div>


@endsection


@section("mystyle")
    <style>
        .container>div{
            letter-spacing: 2px;
        }
        .container>div>h3{font-weight: bold}
        .box-container{
            width: 70%;
            display: flex;
            justify-content: center;
            margin-top: 64px;
            margin-bottom: 144px;
        }
        .box-container div{
            flex-grow: 1;
            margin-right: 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 300px;
        }
        .box-container div img{
            height: 300px;
            width: auto;
            margin-bottom: 24px;
        }

    </style>

@endsection