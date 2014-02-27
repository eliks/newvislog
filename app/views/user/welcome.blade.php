<!DOCTYPE html>
<html>
  <head>
    <title>Welcome - Vislog</title>
    <!-- Bootstrap -->
    <link href="index_assets/css/bootstrap.css" rel="stylesheet" media="screen">
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
  <body id="">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-5 center-block">
  			<h3 class="lead text-center">Welcome!</h3>
  			<p class="text-center">Please add your first venue...</p>
  			<hr class="colorgraph" />
  			{{ HTML::ul($errors->all()) }}
  		</div>
  		<div class="col-md-4"></div>
  	</div>
    <div class="row">
    	<div class="container">
		    <div class="row">
		    	<div class="col-md-3"></div>
				<div class="col-md-5">
					{{ Form::open(array('url' => 'welcome', 'method'=>'post')) }}
					<label>Venue Acronym (No spaces)</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                        <!-- <input id="name" type="text" class="form-control" name="name" value="" placeholder="E.g Meltwater Entrepreneurial School of Technology (MEST)">                                         -->
                    	{{ Form::text('name', Input::old('name'), array('class' => 'form-control','placeholder'=>'E.g MEST')) }}
                    </div>
                    <label>Email Address</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <!-- <input id="email" type="text" class="form-control" name="email" value="" placeholder="E.g yourname@somehost.com">  -->
                        {{ Form::text('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'E.g yourname@somehost.com')) }}                                      
                    </div>
                    <label>Address/Location</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <!-- <input id="address" type="text" class="form-control" name="address" value="" placeholder="E.g No. Aluguntuguntu street, East-Legon, Accra">  -->
                        {{ Form::text('address', Input::old('address'), array('class' => 'form-control','placeholder'=>'E.g No. Aluguntuguntu street, East-Legon, Accra')) }}                                       
                    </div>
                    <label>Venue Display Name(Displayed to visitors)</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
                        <!-- <input id="display_name" type="text" class="form-control" name="display_name" value="" placeholder="Meltwater Entrepreneurial School of Technology (MEST)"> -->
                        {{ Form::text('display_name', Input::old('display_name'), array('class' => 'form-control','placeholder'=>'Meltwater Entrepreneurial School of Technology (MEST)')) }}                                        
                    </div>
                    <label>Displayed Welcome Message</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <!-- <input id="display_welcome" type="text" class="form-control" name="display_welcome" value="" placeholder="E.g You are welcome!">   -->
                        {{ Form::text('display_welcome', Input::old('display_welcome'), array('class' => 'form-control','placeholder'=>'E.g You are welcome!')) }}                                      
                    </div>
                    <label>Displayed Footer Text</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-collapse-down"></i></span>
                        <!-- <input id="display_footer" type="text" class="form-control" name="display_footer" value="" placeholder="E.g Visitor's Log for MEST - East Legon Campus"> -->
                        {{ Form::text('display_footer', Input::old('display_footer'), array('class' => 'form-control','placeholder'=>'E.g Visitor\'s Log for MEST - East Legon Campus')) }}                                        
                    </div>
                    <hr class="colorgraph" />
                    <div class="col-sm-12 controls">
                      <input type="submit" class="btn btn-lg btn-success btn-block" value="Create Venue">
                    </div>
                    {{ Form::close() }}
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

    </div>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>