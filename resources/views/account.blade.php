@extends("layout.partials.master")


@section("maincontent")
    <div class="container">
        <div class="row text-center">
            <h2><b>MY ACCOUNT</b></h2>
        </div>
    </div>

    <div class="container ">
        <div class="main-box">

            <div class="row">
                <div class="col-md-2">
                    <div class="nav-list">
                        <div class="nav-list-item">
                            <a href="#profile">PROFILE</a>
                        </div>
                        <div class="nav-list-item">
                            <a href="#orderhistory_2" >ORDER HISTORY</a>
                        </div>
                        <div class="nav-list-item">
                            <a href="#subsciptions">SUBSCRIPTIONS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 account-content">
                    <div id="profile">
                        <div class="user-details-box">
                            <div class="user-details-col">
                                <div class="user-details-col-item">
                                    <p class="user-details-label"><b>FULL NAME</b></p>
                                    <p class="user-details-value"><b>TARIQ ABU SAMRA</b></p>
                                </div>
                                <div class="user-details-col-item">
                                    <p class="user-details-label"><b>MOBILE NUMBER</b></p>
                                    <p class="user-details-value"><b>+971 52 1234567</b></p>
                                </div>

                            </div>
                            <div class="user-details-col">
                                <div class="user-details-col-item">
                                    <p class="user-details-label"><b>EMAIL</b></p>
                                    <p class="user-details-value"><b>TARIQ@DUBAIMN.COM</b></p>
                                </div>
                                <div class="user-details-col-item">
                                    <p class="user-details-label"><b>GENDER</b></p>
                                    <p class="user-details-value"><b>MALE</b></p>
                                </div>

                            </div>
                        </div>
                        <div class="user-details-ops">
                            <button type="button" class="btn btn-default user-details-op">EDIT</button>
                            <button type="button" class="btn btn-default user-details-op">CHANGE PASSWORD</button>
                        </div>
                    </div>
                    <div id="orderhistory_2" style="display: none">
                        <div class="profile-box">
                            <div class="profile-box-title">
                                <h3 style="
                                     margin-top: 11px;
                                    ">ORDER</h3>
                                <h3 style="margin-bottom: 8px">AE-99119</h3>
                                <div>
                                    <table class="table">
                                        <tr class="table-hed">
                                            <th>ITEMS</th>
                                            <th>STATUS</th>
                                        </tr>
                                        <tr class="table-body" style="">
                                            <td >
                                                <span>RED ROSE BOX</span>
                                                <span>SQUARE - LARGE</span>
                                            </td>
                                            <td>
                                                <span>DELIVERD</span>
                                            </td>

                                        </tr>

                                    </table>
                                </div>

                            </div>
                            <div></div>
                        </div>
                        <div class="profile-box">
                            <div class="profile-box-title">
                                <h3 style="
                                     margin-top: 11px;
                                    ">ORDER</h3>
                                <h3 style="margin-bottom:8px">AE-99119</h3>
                                <div>
                                    <table class="table">
                                        <tr class="table-hed">
                                            <th>ITEMS</th>
                                            <th>STATUS</th>
                                        </tr>
                                        <tr class="table-body" style="">
                                            <td >
                                                <span>RED ROSE BOX</span>
                                                <span>SQUARE - LARGE</span>
                                            </td>
                                            <td>
                                                <span>DELIVERD</span>
                                            </td>


                                        </tr>
                                        <tr class="table-body" style="">
                                           <td>
                                                <span>OREO CAKE</span>
                                            </td>


                                        </tr>


                                    </table>
                                </div>

                            </div>
                            <div></div>
                        </div>
                        <div class="profile-box" >
                            <div class="profile-box-title">
                                <h3 style="
                                     margin-top: 11px;
                                    ">ORDER</h3>
                                <h3 style="margin-bottom: 8px">AE-99119</h3>
                                <div>
                                    <table class="table">
                                        <tr class="table-hed">
                                            <th>ITEMS</th>
                                            <th>STATUS</th>
                                        </tr>
                                        <tr class="table-body" style="">
                                            <td >
                                                <span>RED ROSE BOX</span>
                                                <span>SQUARE - LARGE</span>
                                            </td>
                                            <td>
                                                <span>DELIVERD</span>
                                            </td>

                                        </tr>

                                    </table>
                                </div>

                            </div>
                            <div></div>
                        </div>

                    </div>
                    <div id="subsciptions" class="col-md-12" style="display: none">
                        <div class=" col-md-5 sub-box">
                            <div class="profile-box-title">
                                <h3 style="
                                     margin-top: 11px;
                                    ">ORDER</h3>
                                <h3 style="margin-bottom: 8px">AE-99119</h3>
                                <div>
                                    <table class="table">
                                        <tr class="table-hed">
                                            <th>ITEMS</th>
                                            <th>STATUS</th>
                                        </tr>
                                        <tr class="table-body" style="">
                                            <td class="col-md-4">
                                                <span>RED ROSE BOX</span>
                                                <span>SQUARE - LARGE</span>
                                            </td>
                                            <td class="col-md-4 col-md-2 col-md-offset-4">
                                                <span>DELIVERD</span>
                                            </td>

                                        </tr>

                                    </table>
                                </div>

                            </div>
                            <div></div>
                        </div>
                        <div class=" col-md-6 sub-box">
                            <div class="profile-box-title">
                                <h3 style="
                                     margin-top: 11px;
                                    ">ORDER</h3>
                                <h3 style="margin-bottom:8px">AE-99119</h3>
                                <div>
                                    <table class="table">
                                        <tr >
                                            <th>ITEMS</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                        </tr>
                                        <tr  style="">
                                            <td  class="col-md-3">
                                                <span>RED ROSE BOX</span>
                                                <span>SQUARE - LARGE</span>
                                            </td>
                                            <td class="col-md-3">
                                                12/21/2017
                                            </td>
                                            <td class="col-md-3">
                                                <span>DELIVERD</span>
                                            </td>


                                        </tr>
                                        <tr class="table-body" style="">
                                           <td>
                                                <span>OREO CAKE</span>
                                            </td>


                                        </tr>


                                    </table>
                                </div>

                            </div>
                            <div></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>



    {{--<div class="orders-list">--}}
    {{--<div class="orders-list-item">--}}
    {{--<p style="text-align: center; padding-top: 20px"><b>ORDER</b></p>--}}
    {{--<p class="order-list-item-id">AE-99119</p>--}}
    {{--<div class="table-responsive">--}}
    {{--<table class="table borderless">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>ITEMS</th>--}}
    {{--<th>STATUS</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>RED ROSE BOX<br>SQUARE-LARGE</td>--}}
    {{--<td>DELIVERED</td>--}}

    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="orders-list-item">--}}
    {{--<p style="text-align: center; padding-top: 20px"><b>ORDER</b></p>--}}
    {{--<p class="order-list-item-id">AE-99119</p>--}}
    {{--<div class="table-responsive">--}}
    {{--<table class="table borderless">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>ITEMS</th>--}}
    {{--<th>STATUS</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>RED ROSE BOX<br>SQUARE-LARGE</td>--}}
    {{--<td>DELIVERED</td>--}}

    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="orders-list-item">--}}
    {{--<p style="text-align: center; padding-top: 20px"><b>ORDER</b></p>--}}
    {{--<p class="order-list-item-id">AE-99119</p>--}}
    {{--<div class="table-responsive">--}}
    {{--<table class="table borderless">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>ITEMS</th>--}}
    {{--<th>STATUS</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>RED ROSE BOX<br>SQUARE-LARGE</td>--}}
    {{--<td>DELIVERED</td>--}}

    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


@endsection


@section("mystyle")
    <style>
        .container > div {
            letter-spacing: 2px;
            font-family: "Brandon Grotesque"
        }

        .main-box {
            border: 1px solid #bababa;
            margin-top: 50px;
            margin-bottom: 150px;
        }

        .main-box .row {
            margin-right: 0px;
            margin-left: 0px;
        }

        .nav-list {
            background-color: #f1f1f1;

        }

        .nav-list-item {
            text-align: center;
            padding-top: 40px;
            padding-bottom: 40px;

        }

        .nav-list-item a {
            font-size: 11px;
            letter-spacing: 2px;
            color: #0f0f0f;
        }

        .user-details-box {
            height: 100%;

        }

        .user-details-col {
            display: inline-block;
        }

        .user-details-label {
            color: #0f0f0f;
        }

        .user-details-value {
            color: #8c8c8c;
        }

        .user-details-col-item {
            font-size: 11px;
            letter-spacing: 2px;
            margin-left: 40px;
            margin-top: 40px;
        }

        .user-details-ops {
            margin-left: 40px;
            margin-top: 40px;
        }

        .user-details-op {
            margin-right: 20px;
            border-radius: 0px;
            background-color: #7ce2c4;
            color: #0f0f0f;
            border-color: #7ce2c4;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 11px;
            letter-spacing: 2px;
        }

        .profile-box-title-details {

            display: inline-block;
            font-size: 9px;
            line-height: 1.1;
            max-width: 50%;
        }

        .profile-box {
            border: 1px solid #bababa;
            width: 280px;
            height: 80%;
            /*display: flex;*/
            /*flex-direction: column;*/
            /*align-items: center;*/
            padding: 10px 10px;

        }
        .sub-box {
            border: 1px solid #bababa;
            /* width: 280px; */
            height: 88%;
            margin-right: 24px;
            /* display: flex; */
            /* flex-direction: column; */
            /* align-items: center; */
            padding: 10px 10px;
            margin-bottom: 2%;
            margin-top: 2%;

        }
        #subsciptions{
            height: 100%;
        }

        .profile-box-title h3:nth-child(1) {
            padding-top: 8px;
        }
        .profile-box-title h3 {
            text-align: center;
            margin: 0px;
            margin-top: 0px !important;


            margin-bottom: 2px;
            font-size: 10px;
            font-weight: bold;
        }

        .profile-box-title {
            /*justify-content: stretch;*/
            width: 100%;
            height:100%;
        }

        .profile-box-title > div:nth-child(2) {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .profile-box-title > div:nth-child(3) {
            height: 80%;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .profile-box-title > div:nth-child(3) span:nth-child(1),
        .profile-box-title > div:nth-child(3) span:nth-child(2) {
            font-weight: bold;
        }

        .profile-box-title > div:nth-child(2) span,
        .profile-box-title > div:nth-child(3) span {
            padding: 0px;

        }

        .borderless td, .borderless th {
            border: none !important;
        }

        .borderless td {
            font-size: 10px !important;
        }

        .borderless {
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 20px;
        }

        .orders-list {
            /*margin-top: 20px;*/
            /*margin-bottom: 20px;*/
            height: inherit;
        }

        .orders-list-item {
            height: 250px;
            width: 250px;
            font-size: 11px;
            letter-spacing: 2px;
            border: 1px solid #bababa;
            margin-left: 30px;
            display: inline-block;

        }

        table {
            height: 100px;
            width: auto;
        }

        .order-list-item-id {
            font-weight: bold;
            text-align: center;
            margin-top: -10px;
        }

        #orderhistory {
            display: none;
            height: inherit;
        }

        #orderhistory, #profile {
            position: absolute;
        }

        .account-content {
            position: relative;
            height: 300px;
            padding: 0px;

        }


        #orderhistory_2 span ,
        #subsciptions span{
            padding: 0px;
            font-size: 10px;
            /*max-width: 0%;*/
            display: inline-block;
            margin-bottom: 4px;
            font-weight: 400;
            line-height: 1;
        }

        #orderhistory_2,
        #subsciptions{
            height: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .table td{
            /*padding-right: 30% !important;*/
        }
        table tr{
            line-height: 1;
        }

        table .table-hed{
            font-size: 12px;padding-bottom: 0px; vertical-align: bottom;
        }
        tr td{
            line-height: 0.5;
            height: auto;
        }
        th{
            height: 38px;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
            border: none;
        }
        td{
            line-height: 0.5 !important;
            padding-top: 2px !important;
        }
    </style>

@endsection

@section("myscript")

    <script>
        $(document).ready(function () {
            var current = "#profile";
            $('.nav-list a').click(function () {
                var dest = $(this).attr('href');
                $(current).fadeOut();
                $(dest).fadeIn();
                current = dest;

                return false;
            });
        });
    </script>


@endsection