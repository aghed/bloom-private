@extends("layout.partials.master")


@section("maincontent")
    <div class="container">
        <div class="row text-center">
            <h2>CHOOSE YOUR <b>BOX</b></h2>
        </div>
        <div class="row box-container">
            <div style="background: black; width: 250px;height: 250px"></div>
            <div style="background: red; width: 250px;height: 250px"></div>
        </div>

    </div>


@endsection



@section("mystyle")
    <style>
        .container>div{
            letter-spacing: 2px;
        }
        .box-container{
            display: flex;
            justify-content: center;
            margin-top: 64px;
        }
        .box-container div{
            margin-right: 8px;
        }
    </style>

@endsection