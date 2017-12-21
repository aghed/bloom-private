<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('bower_components/bootstrapvalidator/dist/css/bootstrapValidator.min.css')}}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--  <link rel="stylesheet" href="{{asset('bower_components/normalize-css/normalize.css')}}">  --}}
    <link rel="stylesheet" href="{{asset('css/fonty/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/slick-carousel/slick/slick.css')}}">
    {{--<link rel="stylesheet" href="{{asset('bower_components/slick-carousel/slick/slick-theme.css')}}">--}}
  
    <link rel="stylesheet" id="size-stylesheet" href="{{asset('css/app.css')}}">
    @section("mystyle")
    @show
    <title>title</title>
    <style>

    </style>
</head>
<body style="font-family:'Brandon Grotesque' !important">


@include("layout.partials.nav")





@section("maincontent")
@show


	@if(count($errors) > 0)
                                @foreach($errors->all() as $error)
						        	<div class="alert alert-danger">{{$error}}</div>
							    @endforeach
                             @endif

@include("layout.partials.footer_2")



<script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>

<script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset('bower_components/bootstrapvalidator/dist/js/bootstrapValidator.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrapvalidator/src/js/language/en_US.js')}}"></script>
<script src="{{asset("bower_components/slick-carousel/slick/slick.js")}}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function () {


        $('.login-btn').hover(function () {
            $('.login-dropdown-menu').css({display:'block'});
            $(".login-dropdown-menu").hover(function(){}, function () {
                $(this).css({display: 'none'});
            });
        });

        $('.currency-dropdown-menu li a').on('click',function () {
            $('currency-dropdown-menu li a').removeClass('selected-item');
            $(this).addClass('selected-item');
        });
        $('.currency-dropdown-menu a').click(function () {
            $('.currency-dropdown-menu a').removeClass('selected-item');
            $(this).addClass('selected-item');
        })



        

        // Showing Login Modal
         $('nav .login-btn').click(function(){
            $('#modal-login').modal('show');
         });


        //slick configure

        $('.prd-slick').slick({
            prevArrow:'.left-arrow',
            nextArrow:'.right-arrow',
            slidesToShow: 4,
            respondTo:this
        });


        //switching Signin Signup
        var current = '#sign-in-form';
        $('.sign-up').click(function(){
            var dest = $(this).attr('href');
            $(current).fadeOut(function(){
                $(dest).fadeIn();
            });
            current = dest;
            
        });



        // Exuexte when the windows is Mobile
        if($(window).width() >= 0 && $(window).width() <= 500 ) {

        }


        //submit Login
        $('.btn-sign-in').click(function(){
             $("#login-form").submit();   
        });

        
    });
</script>
@section("myscript")
@show

</body>
</html>