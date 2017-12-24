<style>
    #modal-privacy > div{
        width: 80%;

    }
    p{
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .modal-footer{
        text-align: center;
    }

    .red{ height: auto ; width: 100px}
    .green{height: auto ; width: 100px}
    .blue{height: auto; width: 100px}
    #modal-product .modal-content{
        height: 400px;
        margin-top: 64px;

    }
    #modal-product .modal-header{
        height: 18%;
        border: none;
    }
    .details-parent{
        display: flex;
        flex-direction: column;
        height: 82%;
    }
    .details-body{
        /*background: darkorchid;*/
        display: flex;
        flex-direction: row;
        flex-grow: 4;
        height: auto;
    }

    .details-body>div:nth-child(1){
        flex-grow: 0;
        display: flex;
        flex-direction: column;
        padding-top: 8px;
    }
    .details-body>div:nth-child(1)>div{
        flex-grow: 1;
        max-height: 70px;
    }
    .details-body>div:nth-child(1)>div>img{
        height: 66px;
        width: auto;
        margin-bottom: 4px;

    }
    .details-body>div:nth-child(2) {
        flex-grow: 4;
        display: flex;
        flex-direction: column;

    }
    .details-body>div:nth-child(2)>div{
        flex-grow: 1;

    }
    .details-body>div:nth-child(2)>div>img{
        height: 204px;
        width: auto;
        margin-top: 8px;
    }
    .details-body>div:nth-child(3){
        display: flex;
        flex-direction: column;
        flex-grow: 5;
    }
    .details-body>div:nth-child(3)>div:nth-child(1){
        margin-top: 8px;
    }
    .details-body>div:nth-child(3)>div>h3{
        margin: 0px;
        font-family: "Brandon Grotesque";
        letter-spacing: 1px;
        margin-bottom: 12px;
    }
    .details-body>div:nth-child(3)>div:nth-child(2){
        margin-bottom: 8px;
    }
    .details-body>div:nth-child(3)>div:nth-child(3){
        margin-bottom: 8px;
    }
    .details-body>div:nth-child(3)>div:nth-child(2)>div>span,
    .details-body>div:nth-child(3)>div:nth-child(3)>div>span,
    .details-body>div:nth-child(3)>div:nth-child(4)>div>span
    {
        padding-left: 0px;
        letter-spacing: 1px;
        font-size: 10px;
        font-weight: bold;
        font-family: "Brandon Grotesque";
    }
    .details-body>div:nth-child(3)>div:nth-child(2)>div:nth-child(2) a,
    .details-body>div:nth-child(3)>div:nth-child(3)>div:nth-child(2) a
    {
        padding: 2px 8px;
        border-radius: 0;
        /*border: none;*/
        letter-spacing: 1px;
        font-size: 10px;
        font-family: "Brandon Grotesque";
        background: #fff;
        color: #080808;
    }
    .details-body>div:nth-child(3)>div:nth-child(4)>div:nth-child(2) a
    {
        padding: 8px 12px;
        border-radius: 0;
        /*border: none;*/
        letter-spacing: 1px;
        font-size: 10px;
        font-family: "Brandon Grotesque";
        background: #fff;
        color: #080808;
    }
    .details-body>div:nth-child(3)>div:nth-child(2)>div:nth-child(2) a:nth-child(1),
    .details-body>div:nth-child(3)>div:nth-child(3)>div:nth-child(2) a:nth-child(1),
    .details-body>div:nth-child(3)>div:nth-child(4)>div:nth-child(2) a:nth-child(1)
    {
        margin-left: 2px;
    }

    .siz-btns>a:nth-child(2),
    .siz-btns>a:nth-child(3){
        margin-left: 4px;
    }
    .btn-prod-selected{
        font-weight: bold;
        background: #f1f1ef !important;
        border: none !important;
    }



    .details-footer{
        background: black ;
        height: auto;
        flex-grow: 2;
        display: flex;
        flex-direction: row-reverse;
    }
    .details-footer>div:nth-child(1) {
        flex-grow: 2;
    }
    .details-footer>div:nth-child(2){
        flex-grow: 4;
    }

    .green-two{
        display: flex;
        text-align: right;
        padding-right: 16px;
        flex-direction: row-reverse;
        justify-content: space-between;
        margin-top: 8px;
    }
    .green-two>div:nth-child(2){
        text-align: left;
        flex-grow: 1;
        padding-top: 8px;
    }
    .green-two ul{

        padding-left: 19px;
        list-style-type: circle;
        font-size: 10px;
        color: #080808;

    }
    .green-two ul > li:nth-child(2){
        list-style-type: none;
    }
    .green-two>div:nth-child(2) span{
        padding-left: 0px;
        letter-spacing: 2px;
        margin-top: 16px;
        font-size: 12px;
        font-weight: bold;
    }
    .blue>div:nth-child(5) input{
        height: 24px;
        width: 101px;
        float: right;
        margin-top: 0px;
        font-family: "Brandon Grotesque";
        letter-spacing: 2px;

    }
    .btn-mp a{
        background: #b7b7b7;
        border: 0px solid black!important;
        font-family: "Brandon Grotesque";
        /* padding: 7px; */
        border: none;
        padding: 2px 10px;
        margin-right: 2px;
        border: 0px solid transparent;
        font-family: "Brandon Grotesque";
    }
    .footer-form{
        margin-right: 36px;
    }
    .footer-form-parent{

        margin-top: 16px;
        padding-left: 92px;

    }
    .footer-form-parent >div:nth-child(1){

        margin-bottom:  4px;
        font-size: 10px;
        letter-spacing: 2px;
        font-weight:  bold;

    }
    .footer-form-parent >div:nth-child(1) span{

        padding: 0;
        margin-bottom:  4px;

    }
    .footer-form-parent >div:nth-child(2) {

        margin-bottom: 8px;

    }
    .footer-form{

    }
    .addcart-parent{
        margin-right: 16px;
    }
    .addcart-parent button{
        width: 100%;
        border-radius: 0px;
        background: #a3dfc3;
        letter-spacing: 1px;
        font-size: 12px;
        font-weight: bold;
    }
    .close-batik{
        position:  absolute;
        top: -27px;
        right: -1px;
    }
    .modal-header i{
        padding: 0px;
        font-size: 33px;
    }
    .modal-title{
        display: inline;
    }



    .modal-header {
        margin-top: 16px;
        border: none;
    }
    .modal-title{
        font-size: 22px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .modal-content{
        /*height: 85vh !important;*/
        border-radius: 0px !important;
        margin-top: 10vh;
        
    }

    #login-form input[type="text"],
    #login-form input[type="password"]{
        letter-spacing: 2px;

    }
    #login-form label{
        font-size: 12px;
        letter-spacing:2px;
    }
    #login-form a {
        background-color : #395691;
        border-radius: 0px;
        padding: 15px 18px;
        width:60%;
        height: 47px;
    }
    #login-form .button-google {
        background-color : #fff;
        border-radius: 0px;
        padding: 15px 15px;
        width:60%;
        border: 1px solid #ccc;
    }
    .button-google i {
        background: url("{{asset('assets/icons/google-icon.jpg')}}")
    }
    #login-form .button-google span{
        color: #000;
    }
    
    #login-form a span{
        font-size:12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #eceff5;
        font-weight:bold;
        margin-left: 4px;


    }
    #login-form a i {
        line-height: 1.3;
        color: #eceff5;

    }
    .btn-facbook{
        margin-bottom:8px;
        display:block;
    }
    .text-center{
        white-space: normal;
        word-wrap:break-word;
        position: relative;
    }

    .pass-forgot{
        color:#ccc;
        background-color: transparent !important;
        padding: 2px 2px !important;
        font-size:  12px !important;
        text-decoration: none;
        letter-spacing:2px;
    }
    .pass-forgot:hover{
        color:#000;
        cursor:pointer;
    }
    .password-forgot{
        margin-bottom:8px;
    }
    .modal-body{
        padding: 15px 10%;
    }

    .sign-up{
        background: none !important;
        padding-left:4px !important;
        font-size:  12px !important;
        text-decoration: none;
        font-weight: bold;
        color:#444;
    }
    .sign-up:hover{
        color:#000;
        cursor:pointer;
    }
    .new-sign-up{
        font-size:12px;
        letter-spacing: 2px;
       
    }
    .div-sign-up{
        margin-top: 42px;
    }
    .btn-sign-in{
         margin-bottom:8px;
    }
    .btn-sign-in a{
        background: transparent !important;
        color:#000 !important;
        border:1px #ccc solid;
    }
    .btn-sign-in span{
        color:#000 !important;
    }
    .pass-conform{
        margin-top:15px;
        margin-bottom:15px;
    }
    /*to solve responsive button for facebook and google*/
    @media only screen and (max-width: 1024px)
    {
        #login-form .btn{
            height: 10%;
        }
    }
</style>



<!-- Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="close-batik glyphicon glyphicon-remove"></span>
                </button>
                <h2 class="modal-title" id="myModalLabel">SIGN IN OR SIGN UP</h2>
                
            </div>

            {{--  Sign in Form  --}}
            <div class="modal-body clearfix" id="sign-in-form">

                <div class="form-group modal-login-form">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                   <form id="login-form" role="form" method="POST" action="{{ url('/login') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email">EMAIL</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								</div>
								<div class="form-group password-forgot">
									<label for="password">PASSWORD</label>
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>

								<div class="form-group ">
									<a href="{{ route('password.request') }}" class="pass-forgot"> FORGOT PASSWORD </a>
								</div>

								<div class="form-group text-center btn-sign-in">
									<a class="btn btn-defualt">
										<span>Sign IN</span>
									</a>
								</div>
								<div class="form-group text-center btn-facbook">
									<a href="{{ url('/auth/facebook') }}" class="btn btn-defualt">
										<i class="fa fa-facebook text-center"></i>
										<span class="text-center">continue with facebook</span>
									</a>
								</div>
								<div class="form-group text-center">
									<a href="{{ url('/auth/google') }}" class="btn btn-defualt button-google">
										<img class="text-center" height="17px" width="auto" src="{{asset('assets/icons/google-icon.jpg')}}">
										<span class="text-center">continue with GOOGLE</span>
									</a>
								</div>

								<div class="form-group text-center div-sign-up">
									<span class="new-sign-up">NEW MEMBER ?
										<a class="sign-up" href="#sign-up-form"> SIGN UP</a>
									</span>
								</div>

							</form>
                           
                </div>

            </div>


            {{--  Sign Up Form  --}}
             <div class="modal-body clearfix" id="sign-up-form" hidden>

                <div class="form-group modal-login-form">

                    <form  id="login-form"  role="form" method="POST" action="{{ url('/register') }}">
                         {{ csrf_field() }}
                        <div class = "form-group">
                            <label for = "email">EMAIL</label>
                            <input type="text" class="form-control" id = "email" placeholder="Email">
                        </div>
                        <div class = "form-group password-forgot">
                            <label for = "password">PASSWORD</label>
                            <input type="password" class="form-control" id = "password" placeholder="Password">
                        </div>
                        <div class = "form-group password-forgot pass-conform">
                            <label for = "password_confirmation">PASSWORD CONFIRMATION</label>
                            <input type="password" class="form-control" name="password_confirmation" id = "password_confirmation" placeholder="Password">
                        </div>
                        
                        <div class="form-group text-center btn-sign-in">
                            <a class="btn btn-defualt"><span>Sign UP</span></a>
                        </div>
                        <div class="form-group text-center btn-facbook">
                                    <a href="{{ url('/auth/facebook') }}" class="btn btn-defualt">
                                        <i class="fa fa-facebook text-center"></i>
                                        <span class="text-center">continue with facebook</span>
                                    </a>
                                </div>
                        <div class="form-group text-center">
                                    <a href="{{ url('/auth/google') }}" class="btn btn-defualt button-google">
                                        <img class="text-center" height="17px" width="auto" src="{{asset('assets/icons/google-icon.jpg')}}">
                                        <span class="text-center">continue with GOOGLE</span>
                                    </a>
                                </div>

                         <div class="form-group text-center div-sign-up">
                            <span class="new-sign-up">A MEMBER ?<a class="sign-up" href="#sign-in-form"> SIGN IN</a></span>
                        </div>

                    </form>

                </div>

            </div>
          
        </div>
    </div>
</div>

<script> console.log("bachar Sale")</script>