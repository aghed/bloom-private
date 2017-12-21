@extends('layout.partials.master')



@section('maincontent')

    <div class="container container-flowers">

        <div class="text-center flowers-title">

            <span>SMALL</span>
            <h3>AED 150</h3>
        </div>
        <section class="prods-small prods-flowers">
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ROSES</span>
            </div>
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ORCHIRF</span>
            </div>
            <div>
                <img src="{{asset('assets/images/cakebox.jpg')}}" alt="">
                <span>TULIP</span>
            </div>
            <div>
                <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                <span>PINES</span>
            </div>
        </section>

        <div class="text-center flowers-title">

            <span>MEDUIM</span>
            <h3>AED 150</h3>
        </div>
        <section class="prods-medium prods-flowers">
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ROSES</span>
            </div>
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ORCHIRF</span>
            </div>
            <div>
                <img src="{{asset('assets/images/cakebox.jpg')}}" alt="">
                <span>TULIP</span>
            </div>
            <div>
                <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                <span>PINES</span>
            </div>
        </section>

        <div class="text-center flowers-title">

            <span>LARGE</span>
            <h3>AED 150</h3>
        </div>
        <section class="prods-large prods-flowers">
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ROSES</span>
            </div>
            <div>
                <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="">
                <span>ORCHIRF</span>
            </div>
            <div>
                <img src="{{asset('assets/images/cakebox.jpg')}}" alt="">
                <span>TULIP</span>
            </div>
            <div>
                <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                <span>PINES</span>
            </div>
        </section>

    </div>


    @include('modal.product-modal')
@endsection


@section('mystyle')
    <style>
        section{
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 64px;
            font-family: Brandon Grotesque;

        }
        .flowers-title{
            margin-top: 114px;
        }
        .container-flowers{
            margin-top: 0px;
            margin-bottom: 88px;
        }
        .container-flowers >div  h3{
            font-weight: bold ;
            letter-spacing: 3px;
            margin-top: 10px;
            margin-bottom: 32px;
        }
        .container-flowers >div span{
            font-size: 14px;
            letter-spacing: 2px;
        }
        section >div{
            flex-grow: 1;
            margin-right: 0px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            height: 300px;
            width: 200px;
        }
        .prods-small>div>img ,  .prods-large>div>img , .prods-medium>div>img{
            height: 80%;
            width: auto;
            max-width: 100%;
            margin-bottom: 16px;
        }
        .prods-small,.prods-large,.prods-medium span{
            letter-spacing: 2px;
            font-size: 14px;
        }
    </style>
@endsection

@section('myscript')

    <script>
        (function ($ , window , document) {
    
            $(function () {


                $('.prods-flowers>div>img').each(function () {
                    $(this).click(function (event) {
                        $('#modal-product').modal('show');
                        console.log($(this).parent().find('span'));

//                        $('#modal-product .modal-body').append("<h1>" + $(this).parent().find('span').text() + "</h1>");
                    })
                })


            });



            
        }(window.jQuery , window , document));
    </script>

@endsection