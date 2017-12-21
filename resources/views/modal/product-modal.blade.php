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
        top: -21px;
        right: 5px;
    }
    .modal-header i{
        padding: 0px;
        font-size: 33px;
    }
    .modal-title{
        display: inline;
    }
</style>



<!-- Modal -->
<div class="modal fade" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="height: auto !important;">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="close-batik glyphicon glyphicon-remove"></span>
                </button>
                <h2 class="modal-title" id="myModalLabel">RED BOX</h2>
                <i class="fa fa-heart-o pull-right" aria-hidden="true"></i>
            </div>
            <div class="modal-body details-parent" style="padding: 15px;">
               <div class="details-body">
                   <div class="red">
                       <div>
                           <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                       </div>
                       <div>
                           <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                       </div>
                       <div>
                           <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                       </div>
                   </div>
                   <div class="green">
                       <div>
                           <img src="{{asset('assets/images/redflower.jpg')}}" alt="">
                       </div>
                       <div class="green-two">
                           <div>
                               <img src="{{asset('assets/images/cakebox.jpg')}}" width="auto" height="70px" alt="">
                           </div>
                           <div>
                               <span>ACCESSORIES</span>
                               <ul>
                                   <li>COVER BOX</li>
                                   <li>AED 60</li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="blue">
                       <div><h3>AED 150</h3></div>
                       <div>
                           <div><span>BOX COLOR</span></div>
                           <div>
                               <a class="btn btn-default btn-prod-selected">BLACK</a>
                               <a class="btn btn-default">PINK</a>
                               <a class="btn btn-default">CRAFT</a>
                           </div>

                       </div>
                       <div>
                           <div><span>FLOWER COLOR</span></div>
                           <div>
                               <a class="btn btn-default btn-prod-selected">RED</a>
                               <a class="btn btn-default">PINK</a>
                               <a class="btn btn-default">YELLOW</a>
                               <a class="btn btn-default">WHITE</a>
                           </div>

                       </div>
                       <div>
                           <div><span>BOX COLOR</span></div>
                           <div class="siz-btns">
                               <a class="btn btn-default btn-prod-selected">S</a>
                               <a class="btn btn-default">M</a>
                               <a class="btn btn-default">L</a>
                           </div>

                       </div>
                       <div class="footer-form-parent">
                           <div><span>QUANTITY</span></div>
                           <div>
                               <div class="input-group footer-form">
                                   <input type="email" class="form-control input text-center" size="50" placeholder="1" required>
                                   <div class="input-group-btn btn-mp" >
                                       <a  class="btn btn-default">-</a>
                                       <a  class="btn btn-default">+</a>
                                   </div>
                               </div>
                           </div>
                           <div class="addcart-parent">
                               <button class="btn footer-add-cart">ADD TO CART</button>
                           </div>
                       </div>
                   </div>
               </div>

            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>