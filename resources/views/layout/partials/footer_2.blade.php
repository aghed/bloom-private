<style>
    ul {
        list-style-type: none;
    }
    .form-control{
        border-radius: 0px;
        background-color: inherit;
    }

    .input-lg {
        font-size: 11px;
        font-family: "Brandon Grotesque";
        font-weight: bold;
        letter-spacing: 2px;
    }

    .not-rounded {
        border-radius: 0px;
        background-color: #a3dfc3;
        color: #0f0f0f;
    }

    .social{
        font-size: 28px;
        vertical-align: middle;
        color: #8c8c8c;
    }

    .social-bar{
        padding-top: 10px;
    }
    .social-bar span:hover{
        color: black;
    }

    span{
        padding-left:10px;
    }


    .row{
        overflow: hidden;
    }

    .equal{
        margin-bottom: -99999px;
        padding-bottom: 99999px;
    }


    .f-font{
        font-size: 10px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .f-font_2{
        font-size: 10px;
        font-weight: 400;
        letter-spacing: 2px;
    }
    .list-item{
        padding-bottom: 14px;

    }
    .f-nav-link{
        color: #8c8c8c;
        font-weight: 400;
    }
    .f-nav-link_2{
        color: #8c8c8c;
        font-weight: 400;
    }
    .f-nav-link:hover{
        color: #000;
        font-weight: 400;
    }
    .f-nav-link:focus{
        color: #000;
        font-weight: 400;
    }


    .f-ic-text{
        font-size: 14px;
        letter-spacing: 2px;
        color: #636b6f;
    }

    .f-phone{
        font-weight: bold;
    }

    .f-ic{
        padding-right: 10px;
        color: #0f0f0f;
        font-size: 20px;
        letter-spacing: 2px;
    }

    .payment-ways{
        padding-top: 12px;
        padding-bottom: 15px;
        text-align: center;
        font-size: 34px;
        color: #636b6f;
    }
    .payment-way:hover{

        color: #000;
    }

    .f-copyright{
        padding-top: 10px;
        font-size: 10px;
        text-align: center;
        letter-spacing: 2px;
        font-weight: 400;
        color: #636b6f;
    }
    .form-control.input-lg:focus{
        border:1px solid #ccc;
        box-shadow: none !important;
    }
    .btn.not-rounded.input-lg{
        font-size: 10px;
    }
</style>

<div class="container">
    <hr class="backgtounf-item-color" style="height: 1px">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 equal">
            <form class="form-inline">
                <div class="input-group">
                    <input type="email" class="form-control input-lg" size="50" placeholder="EMAIL ADDRESS" required>
                    <div class="input-group-btn">
                        <button type="button" class="btn not-rounded input-lg">SUBSCRIBE</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 equal social-bar">
            <span class="fa fa-instagram pull-right social"></span>
            <span class="fa fa-twitter pull-right social"></span>
            <span class="fa fa-facebook-official pull-right social"></span>


        </div>
    </div>

</div>
<div class="container">
    <hr class="backgtounf-item-color" style="height: 1px">
</div>
<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-md-3 equal">
            <p class="col-title f-font">MENU</p>
            <ul class="list-group f-font">
                <li class="list-item">
                    <a class="f-nav-link" href="#">HOME</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#">SHOP</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#">SUBSCRIPTION</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#">CORPORATE</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#">TRACK ORDER</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 equal">
            <p class="col-title f-font">INFORAMTION</p>
            <ul class="list-group f-font">
                <li class="list-item">
                    <a class="f-nav-link" href="#"  data-toggle="modal" data-target="#modal-ships">SHIPPING & DELIVERY</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#" data-toggle="modal" data-target="#modal-terms">TERMS & CONDITIONS</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#">CONTACT</a>
                </li>
                <li class="list-item">
                    <a class="f-nav-link" href="#"  data-toggle="modal" data-target="#modal-privacy">PRIVACY POLICY</a>
                </li>
            </ul>

        </div>
        <div class="col-md-6 equal">
            <div class="pull-right">
            <p class="col-title f-font">FREE SAME DAY DELIVERY ON ORDERS BEFORE 3 PM</p>
            <p class="f-nav-link_2 f-font_2" >ORDER BEFORE 3 PM TO ENSURE SAME DAY DELIVERY</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="pull-right">
            <p class="f-ic-text f-phone"><span class="fa fa-phone f-ic"></span> +971 4 3255255</p>
            <p class="f-ic-text"><span class="fa fa-envelope f-ic"></span>SUPPORT@BLOOMINGBOX.COM</p>
        </div>
    </div>
</div>

<div class="container">
    <hr class="backgtounf-item-color" style="height: 1px">
</div>

<div class="container">
    <div class="row">
        <div class="payment-ways">
            <span class="payment-way fa fa-cc-mastercard"></span>
            <span class="payment-way fa fa-cc-visa"></span>
        </div>
    </div>
</div>

<div class="container">
    <hr class="backgtounf-item-color" style="height: 1px">
</div>

<div class="container">
    <div class="row">
        <p class="f-copyright">COPYRIGHT©2017 BLOOMINGBOX</p>
    </div>
</div>



@include("modal.terms")
@include("modal.privacy")
@include("modal.shippings")
@include("modal.login")



<script>

   


</script>
