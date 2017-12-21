<style>
    @media screen and (min-width: 601px){

    .up-header{
        background: black;
        min-height: 30px;
        z-index: 5;
    }
    .up-header span{
        display: inline-block;
        color: white;
        margin-top: 8px;
        font-size: 10px;
        margin-right: 8px;

    }
    .bc-navbar{
        border: none;
        background: #f6f6f6;
        border-radius: 0px;
    }
    .nav.navbar-nav{
        margin-top: 50px;
    }
    .bc-font-header{
        color: #3b3b3b;
    }
    .navbar{
        margin-bottom: 40px;

    }
    .left-nav{
        margin-left: 4%;
    }
    .left-nav li a{
        font-weight: bold;
    }
    .right-nav li a{
        font-weight: bold;
    }
    .nav-dropdown-arrowdn{
        height: 16px;
        padding-bottom: 4px;
        color:#3b3b3b !important;
    }
    .navbar-nav li a{
        color:#3b3b3b !important;
        font-size: 11px;
        font-weight: 400;
    }
    .navbar-nav li a:hover{
        color:#222;
    }
    .bag{

        height:32px;
    }
    .bag-parent{
        padding: 8px !important;
    }
    .bag-price{
        left: 24%;
        bottom: 18%;
        position: absolute;
        font-size: 10px;
    }
    .shop-dropdown-menu{
        width: 100%;
        background: #f6f6f6;
        border-top: 0px;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-right: 0px;
        border-left: 0px;
        /*display: block;*/
    }
    .navbar-default .navbar-nav>.open>a,.navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
        background-color: transparent !important;
    }
    .cart-dropdown-menu{
        /*display: block;*/
        background: #f6f6f6;
        min-width: 360px;
        right: 0 !important;
        left: auto;
    }
    .navbar-right .dropdown-menu{
        right: auto;
        left: auto;

    }
    .dropdown-row{
        margin-right: 0px;
        margin-left: 0px;
        min-width: 300px;
        margin-top: 16px;
    }
    .nav.navbar-nav>li a:hover{

        color: #000 !important;
    }



    .cart-dropdown-menu-th{
        letter-spacing: 2px;
        font-size: 12px;
        font-weight: bold;
    }
    .cart-dropdown-menu-desc{
        margin-top: 12px;
        font-size: 11px;
        line-height: 1.5;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 4px;
    }
    .cart-dropdown-button{
        border-radius: 0px;
        padding: 4px 16px;
        font-size: 10px;
        font-weight: bold;
        letter-spacing: 2px;
        background: #a3dfc3;
    }
    .cart-dropdown-menu-total{
        margin-top: 16px;
        font-size: 12px;
    }
    .btn-increase{
        padding: 0px 10px;
        border-radius: 0;
        background: #b7b7b7;
        height: 16px;
        font-size: 10px;
    }
    .balance-result{
        display:  inline-block;
        padding: 0px 9px;
        height: 16px;
        font-size: 11px;
    }
    .buttons-three{
        display:  flex;
        justify-content:  space-between;
        margin-top:  4px;
    }
    .cart-dropdown-subtitle{
        letter-spacing: 2px;
        font-weight: bold;
        font-size: 12px;
    }
    .wide-btn{
        border-radius: 0;
        padding: 4px 40px;
        background: #a3dfc3;
        color: #222;
        letter-spacing: 2px;
        font-size: 12px;
        /*font-weight: bold;*/
        font-family: Brandon Grotesque;
    }
    .selected-item{
        font-weight: bold !important;
    }
    .currency-dropdown-menu li a{
        font-weight: 400;
    }
    .currency-dropdown-menu{
        right: 0;
        text-align: center;
        min-width: 100px;
        letter-spacing: 3px;
        background: #f6f6f6;

    }
    .track-dropdown-menu{
        width: 230px;
        background: #f6f6f6;
        /*display: block;*/
    }
    .track-dropdown-menu span{
        text-align: right;
        padding-top: 5%;
        padding-right: 6px;
        letter-spacing: 2px;
        /*font-weight: bold;*/
    }
    .track-dropdown-menu button{
        margin-top: 8px;
        border-radius: 0;
        font-size: 11px;
        /*font-weight: bold;*/
        letter-spacing: 2px;
        background: #a3dfc3;
        font-family: Brandon Grotesque;
        /*width: 100%;*/
    }
    .track-dropdown-menu>div{
        min-width: 150px;
        margin-bottom: 16px;
        font-family: Brandon Grotesque;
        letter-spacing: 1px;
    }
    #order-number{
        border-radius: 0px;
        width: 75%;
        border: 0px;
        background: #f1f1ef;
        font-size: 11px;
        text-align: center;

    }
    .trck-parent{

        border-radius:  0;
        margin-top: 4px;

    }
    .nav > li.shop-dropdown:hover , .nav > li.shop-dropdown.open {position: static }
    .nav > li.shop-dropdown:hover .dropdown-menu,.nav > li.shop-dropdown.open .dropdown-menu {display: block}
    /*.shop-dropdown:hover .shop-dropdown-menu{*/
    /*display: block;*/
    /*}*/
    .nav > li.dropdown-sd:hover .dropdown-menu{
        display: block;
    }
    .cart-dropdown>ul>div:nth-child(1){
            /*display: flex;*/
            /*justify-content: space-between;*/

    }
    .three-buttons{
        display: flex;
        justify-content: space-between;
        margin-top: 4px;
    }
    .three-buttons>div{
        width: 30px;
        background: white;
    }
    .three-buttons .btn{
        padding: 0px 8px;
        border-radius: 0;

    }
    .track-dropdown-menu> div >div:nth-child(1) input{
        font-family: 'Brandon Grotesque';
        letter-spacing: 1px;
        font-size: 11px;
    }
    .track-dropdown-menu> div >div:nth-child(1) span{
        font-family: 'Brandon Grotesque';
        letter-spacing: 1px;
        font-size: 11px;
        padding-left: 4px;
    }
    }
    /*@media screen and (max-width: 600px) {*/

        /*.up-header{*/
            /*background: black;*/
            /*min-height: 30px;*/
        /*}*/
        /*.up-header span{*/
            /*display: inline-block;*/
            /*color: white;*/
            /*margin-top: 8px;*/
            /*font-size: 10px;*/
            /*margin-right: 8px;*/

        /*}*/
        /*.bc-navbar{*/
            /*border: none;*/
            /*background: #f6f6f6;*/
            /*border-radius: 0px;*/
        /*}*/
        /*.nav.navbar-nav{*/
            /*margin-top: 50px;*/
        /*}*/
        /*.bc-font-header{*/
            /*color: #3b3b3b;*/
        /*}*/
        /*.navbar{*/
            /*margin-bottom: 64px;*/

        /*}*/
        /*.left-nav{*/
            /*margin-left: 4%;*/
        /*}*/
        /*.left-nav li a{*/
            /*font-weight: bold;*/
        /*}*/
        /*.right-nav li a{*/
            /*font-weight: bold;*/
        /*}*/
        /*.nav-dropdown-arrowdn{*/
            /*height: 16px;*/
            /*padding-bottom: 4px;*/
            /*color:#3b3b3b !important;*/
        /*}*/
        /*.navbar-nav li a{*/
            /*color:#3b3b3b !important;*/
            /*font-size: 11px;*/
            /*font-weight: 400;*/
        /*}*/
        /*.bag{*/

            /*height:32px;*/
        /*}*/
        /*.bag-parent{*/
            /*padding: 8px !important;*/
        /*}*/
        /*.bag-price{*/
            /*left: 24%;*/
            /*bottom: 18%;*/
            /*position: absolute;*/
            /*font-size: 10px;*/
        /*}*/
        /*.shop-dropdown-menu{*/
            /*width: 100%;*/
            /*!*display: block;*!*/
        /*}*/
        /*.navbar-default .navbar-nav>.open>a,.navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{*/
            /*background-color: transparent !important;*/
        /*}*/
        /*.cart-dropdown-menu{*/
            /*!*display: block;*!*/
            /*min-width: 413px;*/
            /*right: 0 !important;*/
            /*left: auto;*/
        /*}*/
        /*.navbar-right .dropdown-menu{*/
            /*right: auto;*/
            /*left: auto;*/

        /*}*/
        /*.dropdown-row{*/
            /*margin-right: 0px;*/
            /*margin-left: 0px;*/
            /*min-width: 300px;*/
            /*margin-top: 16px;*/
        /*}*/



        /*.cart-dropdown-menu-th{*/
            /*letter-spacing: 2px;*/
            /*font-size: 12px;*/
            /*font-weight: bold;*/
        /*}*/
        /*.cart-dropdown-menu-desc{*/
            /*margin-top: 12px;*/
            /*margin-bottom: 4px;*/
            /*font-size: 12px;*/
            /*line-height: 1.1;*/
            /*letter-spacing: 1px;*/
            /*text-align: left;*/
            /*text-transform: uppercase;*/
        /*}*/
        /*.cart-dropdown-button{*/
            /*border-radius: 0px;*/
            /*padding: 4px 16px;*/
            /*font-size: 10px;*/
            /*font-weight: bold;*/
            /*letter-spacing: 2px;*/
            /*background: #a3dfc3;*/
        /*}*/
        /*.cart-dropdown-menu-total{*/
            /*margin-top: 16px;*/
            /*font-size: 12px;*/
        /*}*/
        /*.btn-increase{*/
            /*padding: 0px 10px;*/
            /*border-radius: 0;*/
            /*background: #b7b7b7;*/
            /*height: 16px;*/
            /*font-size: 10px;*/
        /*}*/
        /*.balance-result{*/
            /*display:  inline-block;*/
            /*padding: 0px 9px;*/
            /*height: 16px;*/
            /*font-size: 11px;*/
        /*}*/
        /*.buttons-three{*/
            /*display:  flex;*/
            /*justify-content:  space-between;*/
            /*margin-top:  4px;*/
        /*}*/
        /*.cart-dropdown-subtitle{*/
            /*letter-spacing: 2px;*/
            /*font-weight: bold;*/
            /*font-size: 12px;*/
        /*}*/
        /*.wide-btn{*/
            /*border-radius: 0;*/
            /*padding: 4px 40px;*/
            /*background: #a3dfc3;*/
            /*color: #222;*/
            /*letter-spacing: 2px;*/
            /*font-size: 12px;*/
            /*font-weight: bold;*/
            /*font-family: Brandon Grotesque;*/
        /*}*/
        /*.selected-item{*/
            /*font-weight: bold !important;*/
        /*}*/
        /*.currency-dropdown-menu li a{*/
            /*font-weight: 400;*/
        /*}*/
        /*.currency-dropdown-menu{*/
            /*right: 0;*/
            /*text-align: center;*/
            /*min-width: 100px;*/
            /*letter-spacing: 3px;*/

        /*}*/
        /*.track-dropdown-menu{*/
            /*width: 250px;*/
            /*!*display: block;*!*/
        /*}*/
        /*.track-dropdown-menu span{*/
            /*text-align: right;*/
            /*padding-top: 3%;*/
            /*padding-right: 6px;*/
            /*letter-spacing: 2px;*/
            /*font-weight: bold;*/
        /*}*/
        /*.track-dropdown-menu button{*/

            /*border-radius: 0;*/
            /*font-size: 12px;*/
            /*font-weight: bold;*/
            /*letter-spacing: 2px;*/
            /*background: #a3dfc3;*/
            /*!*width: 100%;*!*/
        /*}*/
        /*.track-dropdown-menu>div{*/
            /*min-width: 150px;*/
            /*margin-bottom: 16px;*/
            /*font-family: Brandon Grotesque;*/
            /*letter-spacing: 1px;*/
        /*}*/
        /*#order-number{*/
            /*border-radius: 0px;*/
            /*width: 66.66666667%;*/
        /*}*/
        /*.trck-parent{*/

            /*border-radius:  0;*/
            /*margin-top: 4px;*/

        /*}*/

        /*.cart-dropdown>ul>div:nth-child(1){*/
            /*!*display: flex;*!*/
            /*!*justify-content: space-between;*!*/

        /*}*/
        /*.three-buttons{*/
            /*display: flex;*/
            /*justify-content: space-between;*/
            /*margin-top: 4px;*/
        /*}*/
        /*.three-buttons .btn{*/
            /*padding: 0px 14px;*/
            /*border-radius: 0;*/

        /*}*/
        /*.track-dropdown-menu> div >div:nth-child(1) input{*/
            /*font-family: 'Brandon Grotesque';*/
            /*letter-spacing: 1px;*/
            /*font-size: 12px;*/
        /*}*/

        /*!* Nav Bar*!*/
        /*nav .container-fluid{*/
            /*padding-left: 0px;*/
            /*padding-right: 0px;*/
        /*}*/
        /*.navbar-brand{*/
            /*padding-top: 8px;*/
            /*padding-bottom: 0px;*/
        /*}*/
        /*.navbar-brand img{*/
            /*height: 100% ;*/
        /*}*/
        /*.nav.navbar-nav.left-nav{*/
            /*margin-top: 3%;*/
        /*}*/
        /*.shop-dropdown-menu>div img{*/
            /*height: auto;*/
            /*width: 50%;*/
        /*}*/
        /*.dropdown-row{*/
            /*min-width: 150px;*/
        /*}*/

    /*}*/

</style>



<div class="up-header col-md-12 text-center">
    <span> SAME DAY DELIVERY </span>
    <span> . </span>
    <span> FRESH FLOWERS </span>
    <span> . </span>
    <span> FRESH CAKES </span>
</div>

<nav class="navbar navbar-default bc-navbar">
    <div class="container-fluid">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" height="72px" alt=""></a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav left-nav">
                    <li><a href="#">HOME</a></li>
                    <li class="dropdown shop-dropdown">
                        <a href="#" class="dropdown-toggle toggle-arrow" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP
                            <img src="{{asset('assets/icons/arrow-down.png')}}" class="nav-dropdown-arrowdn" alt=""></a>
                        <ul class="dropdown-menu shop-dropdown-menu dropdown-hoverable" role="menu">
                            <div class="row dropdown-row" style="padding: 36px;">
                                <div style=" " class="col-md-offset-3 col-md-3 text-center bc-letterspaceing">
                                    <a href="{{route('flowerProducts')}}">
                                        <img src="{{asset('assets/images/flowerbox.jpg')}}" alt="" width="auto" height="260">
                                        <p style="padding: 32px 16px;">FLOWER<b>BOX</b></p>
                                    </a>

                                </div>
                                <div style="" class=" text-center bc-letterspaceing col-md-3">
                                    <a href="#">
                                        <img src="{{asset('assets/images/cakebox.jpg')}}" alt="" width="auto" height="260">
                                        <p style="padding: 32px 16px;">FLOWER<b>BOX</b></p>
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#">SUBSCRIPTION</a></li>
                    <li><a href="#">CORPORATE</a></li>
                    <li class="dropdown track-dropdown dropdown-sd">
                        <a href="#" class="dropdown-toggle toggle-arrow" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRACK ORDER  <img src="{{asset('assets/icons/arrow-down.png')}}" class="nav-dropdown-arrowdn" alt=""></a>
                        <ul class="dropdown-menu track-dropdown-menu dropdown-hoverable">
                                <div class="row dropdown-row  form-inline">
                                    <div class="col-md-12">
                                        <span  for="order-number" class="col-md-2" >AE-</span>
                                        <input type="text" id="order-number" placeholder="ORDER NUMBER" class="col-md-9 form-control">
                                    </div>
                                    <div class="col-md-12 trck-parent">
                                            <button class="btn text-center col-md-offset-2 col-md-9">TRACK</button>
                                    </div>
                                </div>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right right-nav">
                    <li class="dropdown dropdown-sd">
                        <a href="#" class="dropdown-toggle toggle-arrow" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AED  <img src="{{asset('assets/icons/arrow-down.png')}}" class="nav-dropdown-arrowdn" alt=""></span></a>
                        <ul class="dropdown-menu currency-dropdown-menu dropdown-hoverable">
                            <li><a href="#">AED</a></li>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                        <a href="#" class="login-btn1" >{{Auth::user()->name}}</a>
                    @else
                    <li>
                        <a href="#" class="login-btn" >LOGIN</a>
                    </li>
                    @endif
                    
                    
                    <li  class="dropdown cart-dropdown dropdown-sd">
                        <a href="#" class=" dropdown-toggle bag-parent" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="bag" src="{{asset('assets/icons/shopping-bag.png')}}" alt=""> <span class="badge">5</span></a>
                        <ul class="dropdown-menu dropdown-hoverable cart-dropdown-menu">
                            <div class="row dropdown-row  bc-letterspaceing" style="padding: 4px 2px">
                                <div class="col-md-4 text-center cart-dropdown-menu-th"><span>ITEM</span></div>
                                <div class="col-md-4 text-center cart-dropdown-menu-th">DESCRIPTION</div>
                                <div class="col-md-4 text-center cart-dropdown-menu-th">TOTAL</div>
                            </div>
                            <div class="row dropdown-row"> <!-- Start Row -->
                                <div class="col-md-4 text-center">
                                    <img src="{{asset('assets/images/cakebox.jpg')}}" height="auto" width="100%" alt="">
                                    <div class="three-buttons">
                                        <button class="btn plus">-</button>
                                        <div><span style="padding: 0px;">1</span></div>
                                        <button class="btn minus">+</button>
                                    </div>
                                </div>
                                <div class="col-md-4 pull-left">
                                    <p style="letter-spacing: 1px" class="cart-dropdown-menu-desc">Large Rose Squer Box</p>
                                    <button class="btn cart-dropdown-button">EDIT</button>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p style="letter-spacing: 1px" class="cart-dropdown-menu-total">AED 350</p>
                                </div>
                            </div> <!-- End Row -->
                            <div class="row dropdown-row" style="margin-top: 24px;margin-bottom: 24px;"> <!-- Start Row -->
                                <div class="col-md-offset-4 col-md-4 text-center cart-dropdown-subtitle"><span>SUB TOTAL</span></div>
                                <div class="col-md-4 text-center cart-dropdown-subtitle"><span>AED 530</span></div>
                            </div> <!-- End Row -->
                            <div class="row dropdown-row" style="margin-top: 24px;margin-bottom: 24px;"> <!-- Start Row -->
                                <div class="col-md-12 text-center">
                                    <a href="{{url('/l/checkout')}}" class="btn wide-btn" >CHECKOUT</a>
                                </div>
                            </div> <!-- End Row -->
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-search"  aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>






