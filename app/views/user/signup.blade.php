<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap-responsive1.css" rel="stylesheet" media="screen">
    <link href="assets/css/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
    <style>
    	.colorgraph {
		  height: 5px;
		  border-top: 0;
		  background: #c4e17f;
		  border-radius: 5px;
		  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		}
    </style>
  </head>
  <body id="login">
    <div class="container" style="max-width: 700px;">

		<div class="row" style="margin-top:20px">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<!-- <form role="form"> -->
				{{ Form::open(array('url' => 'signup', 'method'=>'post','files'=>true)) }}
					<fieldset>
						<h3>Please Sign Up</h3>
						<hr class="colorgraph">
						{{ HTML::ul($errors->all()) }}
						<div class="form-group">
		                    <!-- <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username"> -->
		                    {{ Form::text('username', Input::old('username'), array('class' => 'form-control input-lg','placeholder'=>'Username')) }}
						</div>
						<div class="form-group">
		                    <!-- <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"> -->
		                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control input-lg','placeholder'=>'Email Address')) }}
						</div>
						<div class="form-group">
		                    <!-- <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"> -->
		                    {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control input-lg','placeholder'=>'Phone number')) }}
						</div>
						<div class="form-group">
		                    <!-- <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"> -->
		                    {{ Form::password('password', array('class' => 'form-control input-lg','placeholder'=>'Password')) }}
						</div>
						<div class="form-group">
		                    <!-- <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password"> -->
							{{ Form::password('password_confirmation', array('class' => 'form-control input-lg','placeholder'=>'Confirm Password')) }}
						</div>
						<span class="button-checkbox">
							<!-- <button type="button" class="btn" data-color="info"></button> -->
							{{Form::checkbox('accept', '1')}} I accept Terms and Conditions
		                    <!-- <input type="checkbox" name="accept" id="accept" class=""> -->
							<!-- <a href="" class="btn btn-link pull-right">Forgot Password?</a> -->
						</span>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
		                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign Up">
							</div>
							<div class="form-group">
								<a href="signin"><div class="text-center">Already have an account? Sign in</div></a>
							</div>
							<!-- <div class="col-xs-6 col-sm-6 col-md-6">
								<a href="" class="btn btn-lg btn-primary btn-block">Register</a>
							</div> -->
						</div>
					</fieldset>
				<!-- </form> -->
				{{ Form::close() }}
			</div>
		</div>
		
		</div>
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
		    $('.button-checkbox').each(function(){
				var $widget = $(this),
					$button = $widget.find('button'),
					$checkbox = $widget.find('input:checkbox'),
					color = $button.data('color'),
					settings = {
							on: {
								icon: 'glyphicon glyphicon-check'
							},
							off: {
								icon: 'glyphicon glyphicon-unchecked'
							}
					};
		
				$button.on('click', function () {
					$checkbox.prop('checked', !$checkbox.is(':checked'));
					$checkbox.triggerHandler('change');
					updateDisplay();
				});
		
				$checkbox.on('change', function () {
					updateDisplay();
				});
		
				function updateDisplay() {
					var isChecked = $checkbox.is(':checked');
					// Set the button's state
					$button.data('state', (isChecked) ? "on" : "off");
		
					// Set the button's icon
					$button.find('.state-icon')
						.removeClass()
						.addClass('state-icon ' + settings[$button.data('state')].icon);
		
					// Update the button's color
					if (isChecked) {
						$button
							.removeClass('btn-default')
							.addClass('btn-' + color + ' active');
					}
					else
					{
						$button
							.removeClass('btn-' + color + ' active')
							.addClass('btn-default');
					}
				}
				function init() {
					updateDisplay();
					// Inject the icon if applicable
					if ($button.find('.state-icon').length == 0) {
						$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
					}
				}
				init();
			});
		});
    </script>
  </body>
</html>