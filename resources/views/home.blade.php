@extends("layout.partials.master")

@section("maincontent")


<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('assets/images/slider1.jpg')}}" class="carousel-img" alt="...">
                <div class="carousel-caption">
                    <button class="btn btn-default carousel-btn">SHOP</button>
                </div>

            </div>
            <div class="item">
                <img src="{{asset('assets/images/slider2.jpg')}}" class="carousel-img" alt="...">
                <div class="carousel-caption">
                    <div>
                        <button class="btn btn-default carousel-btn">SHOP</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Controls -->

    </div>
</div>

<section class="category-section">
    <div class="text-center">
        <p> SHOP BY <b>CATEGORY</b></p>
    </div>
</section>
<section class="category-sectionwithitems">
    <div class="container">
        <div class="row text-center category-parent">
            <img  src='{{asset("assets/images/cakebox.jpg")}}' height="250px">
            <img  src='{{asset("assets/images/flowerbox.jpg")}}' height="250px">
        </div>
    </div>
</section>
<div class="container">
    <hr class="backgtounf-item-color" style="height: 1px">
</div>
<section style="padding: 64px; letter-spacing: 3px;">
    <div class="text-center">
        <p> OUR <b>SIGNATURES</b></p>
    </div>
</section>

<section class="row text-center slider-conatainer">
    <span class="left-arrow arrow fa fa-angle-left"></span>
    <div class="container">
        <div class="prd-slick row">
            <div class="prod row text-center ">
                <img src="{{asset('assets/images/flowerbox.jpg')}}" class="col-md-12" alt="">
                <span class="prod-title col-md-12" >Large Red Box</span>
                <span class="prod-price col-md-12" >AED 360</span>
            </div>
            <div class="prod row text-center ">
                <img src="{{asset('assets/images/cakebox.jpg')}}" class="col-md-12" alt="">
                <span class="prod-title  col-md-12">Large Red Box</span>
                <span class="prod-price  col-md-12">AED 360</span>
            </div>

            <div class="prod row text-center ">
                <img src="{{asset('assets/images/cakebox.jpg')}}" class="col-md-12" alt="">
                <span class="prod-title col-md-12">Large Red Box</span>
                <span class="prod-price col-md-12">AED 360</span>
            </div>
            <div class="prod row text-center ">
                <img src="{{asset('assets/images/redflower.jpg')}}" class="col-md-12" alt="">
                <span class="prod-title col-md-12">Large Red Box</span>
                <span class="prod-price col-md-12">AED 360</span>
            </div>
            <div class="prod row text-center ">
                <img src="{{asset('assets/images/cakebox.jpg')}}" class="col-md-12" alt="">
                <span class="prod-title  col-md-12">Large Red Box</span>
                <span class="prod-price  col-md-12">AED 360</span>
            </div>
            <div class="prod row text-center ">
                <img src="{{asset('assets/images/yellowflower.jpg')}}" class="col-md-12"  alt="">
                <span class="prod-title  col-md-12">Large Red Box</span>
                <span class="prod-price col-md-12">AED 360</span>
            </div>
        </div>
    </div>
    <div class="right-arrow arrow fa fa-angle-right"></div>


</section>








@endsection

@section("mystyle")

    <style>

        {{-- Slick--}}

        .arrow:hover{
            cursor: pointer;
        }
        .arrow{
            position: absolute;
            font-size: 64px;
        }
        .left-arrow{
            left: 4%;
            bottom: 40%;
        }
        .right-arrow{
            right: 4%;
            bottom: 40%;
        }
        .prod img{
            height: 78%;
            width: auto;
            margin-bottom: 16px;
        }
        .prod-price,.prod-title{
            height: 10%;
        }
        .prod-title{
            font-weight: bold;
        }
        .prod-price{
            line-height: 1 !important;
            font-size: 10px !important;
        }


        .prd-slick{
            width: 100%;
            max-height: 350px;

            margin-right: 0px !important;
            margin-left: 0px !important;
        }
        div.prod.row{

            margin-right: 0px !important;
            margin-left: 0px !important;
        }
        .prod{
            width: 100%;
            height: 300px;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center;
        }
        .prd-slick span{
            line-height: 2;
            font-size: 12px;
            text-transform: uppercase;
            font-family: "Brandon Grotesque";
            letter-spacing: 2px;
        }

        .slick-slide {
            padding:10px;
            /*background-color:red;*/
            text-align:center;
            margin-right:15px;
            margin-left:15px;
        }


        /*End Slick*/

        .slider-conatainer{position: relative;
            margin-bottom: 64px;
        }
        .carousel-indicators{
            text-align: right;
            right: 25px;
            left: inherit;
        }
        .carousel-indicators .active{
            background-color: black;
            border: black;
        }
        .carousel-indicators li{
            border: 1px solid #080808;
        }
        .carousel-caption{
            left: 4%;
            text-align: left;

        }
        .carousel-caption button{
            color: #080808;
            background-color: #f1f1ef;
            border-color: #080808;
            font-weight: bold;
            border: 1px solid;
            text-align: left;
        }
        .carousel-caption button:hover{
            color: #f1f1ef;
            background-color: #080808;
            border-color: #080808 !important;
            font-weight: bold;
            border: 1px solid;
        }

        .category-parent img{
            height: 400px;
            width: auto;
        }




    </style>
@endsection


@section("myscript")

    <script>
        
    </script>


@endsection


