<!DOCTYPE html>
<!-- saved from url=(0045)http://cleancanvas.herokuapp.com/sign-in.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Vistors' Log for MEST</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="../assets/css/bootstrap1.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive1.css" rel="stylesheet">
    <!-- <link href="http://cleancanvas.herokuapp.com/css/bootstrap-overrides.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
    <link href="../assets/css/css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css" media="screen, projection">
    <link rel="stylesheet" href="../assets/css/index.css" type="text/css" media="screen">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body style="background-color: white;">
    <div class="row">
    	<div class="col-sm-1 col-md-3 col-lg-4"></div>
    	<div class="col-sm-10 col-md-6 col-lg-12 center-block">
	    	<div id="brandname">
	    		<!--<div id="lg"></div>-->
	    		<span style="width: 334px;">{{$venue->display_name}}</span>
	    	</div>
	    	<div id="welcome">
	    		<span>{{$venue->display_welcom}}</span>
	    	</div>
	    	{{ Form::open(array('url' => 'vs/submit/'.$venue->name, 'method'=>'post')) }}
	    	<div id="about_you">
	    		<span>Tell us about yourself...</span>
	    		<div class="field_short">
	    			<!-- <input type="text" id="fname" class="myinputs_short" placeholder="Your full name" /> -->
	    			{{ Form::text('fname', Input::old('fname'), array('class' => 'myinputs_short', 'placeholder'=>'Your full name', 'id'=>'fname')) }}
	    			<!-- <input type="text" id="email" class="myinputs_short" placeholder="Your email address" /> -->
	    			{{ Form::text('email', Input::old('email'), array('class' => 'myinputs_short', 'placeholder'=>'Your email address', 'id'=>'email')) }}
	    			<!-- <input type="text" id="phone" class="myinputs_short" placeholder="Your phone number" /> -->
	    			{{ Form::text('phone', Input::old('phone'), array('class' => 'myinputs_short', 'placeholder'=>'Your phone number', 'id'=>'phone')) }}
	    		</div>
	    	</div>
	    	<div id="about_visit">
	    		<span>Tell us about your visit...</span>
	    		<div class="field">
	    			<!-- <input type="text" id="host" class="myinputs" placeholder="Name of the person you are visiting" /> -->
	    			{{ Form::text('host', Input::old('host'), array('class' => 'myinputs', 'placeholder'=>'Name of the person you are visiting', 'id'=>'host')) }}
	    			<!-- <input type="text" id="purp" class="myinputs" placeholder="Purpose of visit" /> -->
	    			{{ Form::text('purp', Input::old('purp'), array('class' => 'myinputs', 'placeholder'=>'Purpose of visit', 'id'=>'purp')) }}
	    		</div>
	    	</div>
	    	<div id="submitter">
	    		<input type="button" id="sub" value="Submit" onclick="sub_inputs()" />
	    		{{  Form::submit('Submit', array('id'=>'subsub')) }}
	    		<input type="reset" id="clr" value="Clear"  onclick="clr_inputs()" />
	    	</div>
	    	{{ Form::close() }}
	    	<div id="ft">
	    		<span>{{$venue->display_footer}}</span>
	    	</div>
	    </div>
	    <div class="col-sm-1 col-md-3 col-lg-4"></div>
    </div>

    <script src="../assets/js/jquery-latest.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/typeahead.js"></script>
    <script src="../assets/js/custom.js"></script>
    
</body></html>