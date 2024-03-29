<!DOCTYPE html>
<!-- saved from url=(0045)http://cleancanvas.herokuapp.com/sign-in.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Vistors' Log for MEST</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- <link href="http://cleancanvas.herokuapp.com/css/bootstrap-overrides.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/theme.css">
    <link href="../../assets/css/css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../assets/css/animate.css" media="screen, projection">
    <link rel="stylesheet" href="../../assets/css/index.css" type="text/css" media="screen">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div id="mainwrapper">
    	<div id="brandname" style="width: 334px;">
    		<span>{{$venue->display_name}}</span>
    	</div>
    	<div id="thanks">
    		<span>Thanks for using our visitors log, <br />hosting you is our pleasure.</span>
    	</div>
    	<div id="links">
    		<a href="../../vs/{{$venue->name}}"><span>Back to Visitors Log</span></a><br />
    		<span style="cursor: inherit;" class="center-block">Visitors Log is powered by <br /><a href="http://vislog.gopagoda.com"><img src="../../assets/img/vis-logo.png" /></a></span>
    	</div>
    	<div id="ft1" style="margin-top: 20px;">
    		<span>{{$venue->display_footer}}</span>
    	</div>
    </div>

    <script src="../../assets/js/jquery-latest.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/custom.js"></script>

</body></html>