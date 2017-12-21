@extends('layout.partials.master') @section('maincontent')

<div class="container">
	<div class="row text-center">
		<h2> CheckOut Page </h2>
	</div>
	<br>

	<div class="row">
		<div class="info-block data-block col-md-5">
			<div class="info-data col-md-12">
				<div class="info-data-head col-md-12 font-Brand letter-spacing-bc">
					<h3>YOUR INFORMATION</h3>
				</div>
				<div class="form-group col-md-6">
					<label for="first-name" class="letter-spacing-bc font-Brad">FIRST NAME</label>
					<input type="text" id="first-name" class="letter-spacing-bc font-Brand form-control" placeholder="FIRST NAME">
				</div>
				<div class="form-group col-md-6">
					<label for="last-name" class="letter-spacing-bc font-Brad">LAST NAME</label>
					<input type="text" id="last-name" class="letter-spacing-bc font-Brand form-control" placeholder="LAST NAME">
				</div>
				<div class="form-group col-md-6">
					<label for="last-name" class="letter-spacing-bc font-Brad">MOBILE NUMBER</label>
					<input type="text" id="mobile-number" class="letter-spacing-bc font-Brand form-control" placeholder="MOBILE NUMBER">
				</div>
				<div class="form-group col-md-6">
					<label for="country" class="letter-spacing-bc font-Brad">COUNTRY</label>
					<select class="latter-spacing-bc font-Brand form-control" id="country">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>

			<div class="info-data col-md-12">
				<div class="info-data-head col-md-12 font-Brand letter-spacing-bc">
					<h3>RECIEPTENT INFORMATION</h3>
				</div>
				<div class="form-group col-md-6">
					<label for="re-name" class="letter-spacing-bc font-Brad">NAME</label>
					<input type="text" id="re-name" class="letter-spacing-bc font-Brand form-control" placeholder="NAME">
				</div>
				<div class="form-group col-md-6">
					<label for="re-mobile" class="letter-spacing-bc font-Brad">MOBILE NO</label>
					<input type="text" id="re-mobile" class="letter-spacing-bc font-Brand form-control" placeholder="MOBILE">
				</div>
				<div class="form-group col-md-6">
					<label for="re-country" class="letter-spacing-bc font-Brad">COUNTRY</label>
					<select class="latter-spacing-bc font-Brand form-control" id="re-country">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="re-city" class="letter-spacing-bc font-Brad">CITY</label>
					<select class="latter-spacing-bc font-Brand form-control" id="re-city">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="re-area" class="letter-spacing-bc font-Brad">AREA</label>
					<select class="latter-spacing-bc font-Brand form-control" id="re-area">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="re-street" class="letter-spacing-bc font-Brad">STREET</label>
					<input type="text" id="re-street" class="letter-spacing-bc font-Brand form-control" placeholder="STREET">
				</div>
				<div class="form-group col-md-6">
					<label for="re-villa" class="letter-spacing-bc font-Brad">BUILDING / VILLA NO</label>
					<input type="text" id="re-villa" class="letter-spacing-bc font-Brand form-control" placeholder="BUILDING / VILLA NO">
				</div>
				<div class="form-group col-md-6">
					<label for="re-apartment" class="letter-spacing-bc font-Brad">APARTMENT / SUITE NO</label>
					<input type="text" id="re-apartment" class="letter-spacing-bc font-Brand form-control" placeholder="APARTMENT / SUITE NO">
				</div>
			</div>
		</div>

		<div class="info-block data-block col-md-3" id="delivery-date">
			<div class="info-data col-md-12" style="margin-bottom:0px;">
				<div class="info-data-head col-md-12 font-Brand letter-spacing-bc text-center">
					<h3>DELIVERY TIME</h3>
				</div>
				<div class="form-group col-md-12">
					<label for="first-name" class="letter-spacing-bc font-Brad">DELIVERY DATE</label>
					<div class="col-xs-12 date no-padding">
						<div class="input-group input-append date col-md-12" id="re-date-delivery">
							<input type="text" class="form-control col-md-9 no-border-right" name="date" id="idbin" />
							<span class="input-group-addon add-on no-border-left col-md-3 form-control" id="idb">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div>
				<label for="last-name" class="letter-spacing-bc font-Brad col-md-12" style="padding-top:4px;">DELIVERY TIME</label>
				<div class="form-group col-md-6 no-padding-right" style="padding-right:2px !important;">
					<button type="text" id="first-deliver-time" name="first-deliver-time" class="btn btn-default deliver-time-btn letter-spacing-bc font-Brand form-control no-padding-right no-padding-left font-small">10AM - 4PM</button>
				</div>
				<div class="form-group col-md-6 no-padding-left" style="padding-left:2px !important;">
					<button type="text" id="second-deliver-time" name="second-deliver-time" class="btn btn-default deliver-time-btn letter-spacing-bc font-Brand form-control no-padding-right no-padding-left font-small">5PM - 9PM</button>
				</div>
				<div class="form-group col-md-12">
					<label for="country" class="letter-spacing-bc font-Brad">SPECIFIC TIME</label>
					<input type="text" name="specific-time" id="specific-time" class="form-control" />
				</div>
			</div>
			<div class="info-data col-md-12">
				<div class="info-data-head col-md-12 font-Brand letter-spacing-bc">
					<h3>CARD MESSAGE</h3>
				</div>
				<div class="form-group col-md-12">
					<label for="card-message" class="letter-spacing-bc font-Brad">YOUR MESSAGE</label>
					<textarea type="text" id="card-message" style="overflow:hidden; height:100px;" class="letter-spacing-bc font-Brand form-control"
					 row="30"></textarea>
				</div>
				<div class="form-group col-md-12">
					<label for="card-message-sing" class="letter-spacing-bc font-Brad">YOUR SIGNATURE</label>
					<input type="text" id="card-message-sing" class="letter-spacing-bc font-Brand form-control">
					<div class="btn-group btn-group-vertical letter-spacing-bc font-Brad" data-toggle="buttons" style="line-height:2;">
						<label class="btn text-left no-padding-left" id="card-checked">
							<input type="checkbox" name='gender1'>
							<i class="fa fa-check-circle-o" style="display:none"></i>
							<i class="fa fa-circle-o" ></i>
							<span> Male</span>
						</label>
						<label>
							<input type="checkbox"> I DONT WANT A CARD
						</label>
					</div>
				</div>
				<div class="form-group col-md-12">

				</div>
			</div>
		</div>

		<div class="info-block data-block col-md-4 text-center"> Order Review </div>
	</div>


</div>


@endsection @section('mystyle')
<style>
	/* Form Validaitons  */

	.has-feedback label~.form-control-feedback {
		top: 25% !important;
		left: 90% !important;
	}

	.font-small {
		font-size: 10px;
	}

	.font-bold {
		font-weight: bold;
	}

	.data-block {}

	.no-padding {
		padding: 0px !important;
	}

	.no-padding-left {
		padding-left: 0px !important
	}

	.no-padding-right {
		padding-right: 0px !important
	}

	.no-border {
		border: none !important;
	}

	.no-margin {
		margin: 0px !important;
	}

	.no-border-left {
		border-left: none !important
	}

	.no-border-right {
		border-right: none !important
	}

	.no-border-radius {
		border-radius: 0px !important
	}

	.no-background {
		background: none !important;
	}

	.text-left {
		text-align: left !important;
	}

	.text-right {
		text-align: right !important;
	}

	.info-data {
		margin-bottom: 24px;
	}

	.info-data-head {
		margin-bottom: 18px;
	}

	.info-data-head h3 {
		font-size: 16px;
		font-weight: bold;
		letter-spacing: 3px !important;
	}

	.info-block label {
		font-weight: bold;
		font-size: 10px;
	}

	.info-block input {
		font-size: 10px;
	}

	.info-block input:focus,
	.info-block select {
		border: 1px solid #ccc !important;
	}

	.letter-spacing-bc {
		letter-spacing: 2px;
	}

	.font-Brad {
		font-family: Brandon Grotesque;
	}

	#idb {
		width: 26%;
		display: inline-block;
	}

	#idbin {

		width: 74%;
		display: inline-block;
	}

	#idbin:focus {
		border-right: none !important;
	}

	.btn-foucs {
		border: none !important;
		background: #adadad !important;
	}

	label.btn span {
		font-size: 1.5em;
	}

	
</style>
@endsection @section('myscript')

<script>
	$(document).ready(function(){
                
        $("form").bootstrapValidator({
            framework: 'bootstrap',
            live: 'enabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
             },
            fields: {
                're-date-delivery' :{
                    validators: {
                        notEmpty:{
                            message : "The Date Is Required"
                        },
                        date: {
                            format: 'mm/dd/yyyy',
                            message: 'The Date Is Not Valid'
                        }
                    }
                } ,
                're-mobile':{
                    validators:{
                        notEmpty:{
                             message : "The Number Is Required"
                        },
                        stringLength:{
                            min:6,
                            max:15,
                            message:"The Number Must Be Less Than 15 And More Than 6"
                        },
                        regexp:{
                            regexp: /^[0-9]+$/,
                            message: "That Is Not A Valid Number"
                        }
                    }
                }
            }
        });
        })

        // Date Picker
        $("#re-date-delivery").datepicker({
            format:"mm/dd/yyyy"
        });


        // Deliver Buttons Foucs Effect
        $('.deliver-time-btn').click(function(){
            $('.deliver-time-btn').removeClass("btn-foucs");
            $(this).addClass("btn-foucs");
        })


        // CheckBox Dont Have Card
        $('#card-checked').click(function(){
                if( $('input[name="gender1"]').prop("checked") == true ){
                     $('input[name="gender1"]').prop("checked",flase);
                     $('.fa-circle-o').hide();
                     $('.fa-check-circle-o').show();
            }else{
                //$('input[name="gender1"]').prop("checked") = false;
                $('.fa-check-circle-o').hide();
                $('.fa-circle-o').show();
               
            }
        });  
</script>
@endsection