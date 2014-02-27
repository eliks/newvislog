<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/metro-bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/metro-bootstrap-responsive.css') }}">
        <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery/jquery.widget.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/metro/metro.min.js') }}"></script>
        <style>
        	.metro.notify-container {
        		top: 50px !important;
        		right: 30px;
        	}
        </style>
    </head>
    <body class="metro" style="min-width: 757px;">
        <nav class="navigation-bar col-md-2" style="margin-bottom: 10px;">
		    <nav class="navigation-bar-content" style="margin-right: 3%;">
		        <div class="element">
		            <a class="brand-" href="#" style="color: white;font-weight: 700;font-size: 20px;">
						<img width="80" src="../assets/img/vis-logo.png" style="margin-top: -20px;" /> <span>Dashboard</span>
					</a>
		        </div>
		        <ul class="element-menu place-right" style="">
		            <li>
		                <a class="dropdown-toggle" href="#">{{Auth::user()->email}}</a>
		                <ul class="dropdown-menu" data-role="dropdown" style="">
		                    <li><a href="{{url('logout')}}">Signout</a></li>
		                </ul>
		            </li>
		        </ul>
		 
		        <!-- <button class="element image-button image-left place-right">
		            Sergey Pimenov
		            <img src="images/211858_100001930891748_287895609_q.jpg"/>
		        </button> -->
		    </nav>
		</nav>
		<div class="grid span12" style="margin-left: 10%;">
			@if (count($venues)>0)
				<div class="text-right place-right span12" style="margin-left: 3%;margin-right: 3%;">
					@foreach($venues as $key => $a_venue)
						<a href="{{url('dashboard/'.$a_venue->name)}}">
							@if ($a_venue->name == $name)
							<div class="tile bg-white fg-red selected">
								<div class="tile-content icon">
							        <i class="icon-home fg-red"></i>
							    </div>
							    <div class="tile-status">
							        <span class="name fg-orange">{{$a_venue->name}}</span>
							    </div>
							</div>
							@else
							<div class="tile bg-cyan">
								<div class="tile-content icon">
							        <i class="icon-home "></i>
							    </div>
							    <div class="tile-status">
							        <span class="name">{{$a_venue->name}}</span>
							    </div>
							</div>
							@endif
						</a>
					@endforeach
				</div>
			@else
            	<p class="text-info text-center">You have 0 Venues.</p>
            @endif
		</div>
		<div class="tab-control" data-role="tab-control" style="margin-left: 3%;margin-right: 3%;">
		    <ul class="tabs">
		        <li class="active"><a href="#_page_1" style="color: blue;"><i class="icon-stats-up"></i> Visits</a></li>
		        <li><a href="#_page_2" style="color: blue;"><i class="icon-location"></i> Venues</a></li>
		        <li><a href="#_page_3" style="color: blue;"><i class="icon-user"></i> Visitors</a></li>
		        <li class="place-right"><a href="#_page_4" style="color: blue;"><i class="icon-tools"></i></a></li>
		    </ul>
		 
		    <div class="frames">
		        <div class="frame" id="_page_1">
					<div class="tab-control" data-role="tab-control" style="">
					    <ul class="tabs">
					        <li class="active"><a href="#_page_11" style="color: blue;"><i class="icon-clock"></i> Today</a></li>
					        <li><a href="#_page_12" style="color: blue;"><i class="icon-history"></i> Recent</a></li>
					        <li><a href="#_page_13" style="color: blue;"><i class="icon-briefcase"></i> Archive</a></li>
					    </ul>
					 
					    <div class="frames">
					        <div class="frame" id="_page_11">
					        	@if (count($today_visits)>0)
								<table class="table hovered">
			                        <thead>
			                        <tr>
			                            <th class="text-left">Full Name</th>
			                            <th class="text-left">Email Address</th>
			                            <th class="text-left">Phone Number</th>
			                            <th class="text-left">Host</th>
			                            <th class="text-left">Purpose</th>
			                            <th class="text-left">Time</th>
			                        </tr>
			                        </thead>
			
			                        <tbody>
			                        @foreach($today_visits as $key => $todays)
			                        <tr>
			                        	<td class="right">{{$todays->fullname}}</td>
			                        	<td class="right">{{$todays->email}}</td>
			                        	<td class="right">{{$todays->phone}}</td>
			                        	<td class="right">{{$todays->host}}</td>
			                        	<td class="right">{{$todays->purpose}}</td>
			                        	<td class="right">{{$todays->created_at}}</td>
			                        </tr>
			                        @endforeach
			                        </tbody>
			
			                        <tfoot></tfoot>
			                    </table>
			                    @else
			                    	<p class="text-info text-center">You have 0 Visits Today.</p>
			                    @endif
							</div>
					        <div class="frame" id="_page_12">
					        	@if (count($recent_visits)>0)
								<table class="table hovered">
			                        <thead>
			                        <tr>
			                            <th class="text-left">Full Name</th>
			                            <th class="text-left">Email Address</th>
			                            <th class="text-left">Phone Number</th>
			                            <th class="text-left">Host</th>
			                            <th class="text-left">Purpose</th>
			                            <th class="text-left">Time</th>
			                        </tr>
			                        </thead>
			
			                        <tbody>
			                        @foreach($recent_visits as $key => $recent)
			                        <tr>
			                        	<td class="right">{{$recent->fullname}}</td>
			                        	<td class="right">{{$recent->email}}</td>
			                        	<td class="right">{{$recent->phone}}</td>
			                        	<td class="right">{{$recent->host}}</td>
			                        	<td class="right">{{$recent->purpose}}</td>
			                        	<td class="right">{{$recent->created_at}}</td>
			                        </tr>
			                        @endforeach
			                        </tbody>
			
			                        <tfoot></tfoot>
			                    </table>
			                    @else
			                    	<p class="text-info text-center">You have 0 Recent Visits.</p>
			                    @endif
							</div>
					        <div class="frame" id="_page_13">
					        	@if (count($archive_visits)>0)
								<table class="table hovered">
			                        <thead>
			                        <tr>
			                            <th class="text-left">Full Name</th>
			                            <th class="text-left">Email Address</th>
			                            <th class="text-left">Phone Number</th>
			                            <th class="text-left">Host</th>
			                            <th class="text-left">Purpose</th>
			                            <th class="text-left">Time</th>
			                        </tr>
			                        </thead>
			
			                        <tbody>
			                        @foreach($archive_visits as $key => $archive)
			                        <tr>
			                        	<td class="right">{{$archive->fullname}}</td>
			                        	<td class="right">{{$archive->email}}</td>
			                        	<td class="right">{{$archive->phone}}</td>
			                        	<td class="right">{{$archive->host}}</td>
			                        	<td class="right">{{$archive->purpose}}</td>
			                        	<td class="right">{{$archive->created_at}}</td>
			                        </tr>
			                        @endforeach
			                        </tbody>
			
			                        <tfoot></tfoot>
			                    </table>
			                    @else
			                    	<p class="text-info text-center">You have 0 Archived Visits.</p>
			                    @endif
							</div>
					    </div>
					</div>
				</div>
		        <div class="frame" id="_page_2">
					<div class="tab-control" data-role="tab-control" style="">
					    <ul class="tabs">
					        <li class="active"><a href="#_page_21" style="color: blue;"><i class="icon-files"></i> All Venues</a></li>
					        <li><a href="#_page_22" style="color: blue;"><i class="icon-plus"></i> Create Venue</a></li>
					    </ul>
					 
					    <div class="frames">
					        <div class="frame" id="_page_21">
					        	@if (count($venues)>0)
								<table class="table hovered">
			                        <thead>
			                        <tr>
			                            <th class="text-left">Name</th>
			                            <th class="text-left">Email</th>
			                            <th class="text-left">Address</th>
			                            <th class="text-left">Display Name</th>
			                            <th class="text-left">Display Welcome</th>
			                            <th class="text-left">Display Footer</th>
			                            <th class="text-left">Actions</th>
			                        </tr>
			                        </thead>
			
			                        <tbody>
			                        @foreach($venues as $key => $a_venue)
			                        <tr>
			                        	<td class="right">{{$a_venue->name}}</td>
			                        	<td class="right">{{$a_venue->email}}</td>
			                        	<td class="right">{{$a_venue->address}}</td>
			                        	<td class="right">{{$a_venue->display_name}}</td>
			                        	<td class="right">{{$a_venue->display_welcom}}</td>
			                        	<td class="right">{{$a_venue->display_footer}}</td>
			                        	<td class="right">
			                        		<i class="icon-pencil" style="cursor: pointer;" onclick="edit_venue('{{$a_venue->id}}','{{$a_venue->name}}','{{$a_venue->email}}','{{$a_venue->address}}','{{$a_venue->display_name}}','{{$a_venue->display_welcom}}','{{$a_venue->display_footer}}');"></i> 
			                        		<i class="icon-remove" style="cursor: pointer;" onclick="delete_venue('{{$a_venue->id}}' ,'{{$a_venue->name}}');"></i>
			                        	</td>
			                        </tr>
			                        @endforeach
			                        </tbody>
			
			                        <tfoot></tfoot>
			                    </table>
			                    @else
			                    	<p class="text-info text-center">You have 0 Venues.</p>
			                    @endif
							</div>
					        <div class="frame" id="_page_22">
								<div class="grid">
									<div class="row">
										<!-- <form> -->
										{{ Form::open(array('url' => 'submit_venue', 'method'=>'post')) }}
											<div class="span12">
												<legend>ADD VENUE</legend>
											</div>
											<div class="span12">
												{{ HTML::ul($errors->all()) }}
											</div>
											<div class="span1"></div>
											<div class="span5">
												<fieldset>
													<div class="row">
														<label>Acronym for Venue (No space):</label>
														<div class="input-control text" data-role="input-control">
				                                            <!--<input type="text" placeholder="e.g. MEST_LEGON" tabindex="1">-->
				                                            {{ Form::text('name', Input::old('name'), array('placeholder'=>"e.g. MEST_LEGON", 'tabindex'=>'1')) }}
				                                        </div>
				                                        <label>Venue Address/Location:</label>
														<div class="input-control text" data-role="input-control">
				                                            <!--<input type="text" placeholder="e.g. No. 20 Aluguntuguntu street, East-Legon" tabindex="3">-->
				                                            {{ Form::text('address', Input::old('address'), array('placeholder'=>"e.g. No. 20 Aluguntuguntu street, East-Legon", 'tabindex'=>'3')) }}
				                                        </div>
				                                        <label>Display Welcome</label>
														<div class="input-control text" data-role="input-control">
				                                            <!--<input type="text" placeholder="You are Welcome!" tabindex="5">-->
				                                            {{ Form::text('display_welcome', Input::old('display_welcome'), array('placeholder'=>"e.g. You are Welcome!", 'tabindex'=>'5')) }}
				                                        </div>
													</div>
												</fieldset>
											</div>
											<div class="span5">
												<fieldset>
													<div class="row">
				                                        <label>Venue Custodian Email:</label>
														<div class="input-control text" data-role="input-control">
				                                            <!--<input type="text" placeholder="e.g. elikem@mail.com" tabindex="2">-->
				                                            {{ Form::text('email', Input::old('email'), array('placeholder'=>"e.g. elikem@mail.com", 'tabindex'=>'2')) }}
				                                        </div>
				                                        <label>Display Name:</label>
														<div class="input-control text" data-role="input-control">
				                                            <!--input type="text" placeholder="e.g. Meltwater Entrepreneurial School of Technology" tabindex="4">-->
				                                            {{ Form::text('display_name', Input::old('display_name'), array('placeholder'=>"e.g. Meltwater Entrepreneurial School of Technology", 'tabindex'=>'4')) }}
				                                        </div>
				                                        <label>Display Footer:</label>
														<div class="input-control text" data-role="input-control">
				                                            <!-- <input type="text" placeholder="e.g. Visitor's Log for MEST - East Legon Campus" tabindex="6">-->
				                                            {{ Form::text('display_footer', Input::old('display_footer'), array('placeholder'=>"e.g. Visitor's Log for MEST - East Legon Campus", 'tabindex'=>'6')) }}
				                                        </div>
													</div>
												</fieldset>
											</div>
											<div class="span1"></div>
											<div class="span10">
												<!--<button type="submit" class="large success place-right" tabindex="7">Create Venue</button>-->
												{{  Form::submit('Create Venue', array('class'=>'large success place-right','tabindex'=>'7')) }}
											</div>
										<!-- </form> -->
										 {{ Form::close() }}
									</div>
								</div>
							</div>
					    </div>
					</div>
				</div>
		        <div class="frame" id="_page_3">
		        	<div class="tab-control" data-role="tab-control" style="">
					    <ul class="tabs">
					    	<li class="active"><a href="#_page_31" style="color: blue;"><i class="icon-mail"></i> Emails</a></li>
					        <li><a href="#_page_32" style="color: blue;"><i class="icon-download"></i> Download CSV</a></li>
					    </ul>
					 
					    <div class="frames">
					    	<div class="frame" id="_page_31">
								<div class="grid">
									<p class="text-info text-center">Emails feature is currently unavailable.</p>
								</div>
							</div>
					        <div class="frame" id="_page_32">
			                    <p class="text-info text-center">Download CSV feature is currently unavailable.</p>
							</div>
					    </div>
					</div>
				</div>
				<div class="frame" id="_page_4">
					<p class="text-info text-center">User settings are currently unavailable.</p>
		        	<!--<div class="tab-control" data-role="tab-control" style="">
					    <ul class="tabs">
					        <li class="active"><a href="#_page_31" style="color: blue;"><i class="icon-download"></i> Download CSV</a></li>
					        <li><a href="#_page_32" style="color: blue;"><i class="icon-cog"></i> Settings</a></li>
					    </ul>
					 
					    <div class="frames">
					        <div class="frame" id="_page_41">
			                    
							</div>
					        <div class="frame" id="_page_42">
								<div class="grid">
									
								</div>
							</div>
					    </div>
					</div>-->
				</div>
		    </div>
		</div>
		<script type="application/javascript">
			function delete_venue(id, name){
				$.Dialog({
			        shadow: true,
			        overlay: false,
			        icon: '<span class="icon-trash"></span>',
			        title: 'delete '+name+' venue?',
			        width: 500,
			        height: 100,
			        padding: 10,
			        content: '<div>Are you sure you want to delete '+name+' venue?</div>'+
			        			'<div class="form-actions text-right" style="margin-top:12px;margin-bottom:7px;">'+
            						'<button class="button primary">Save</button>'+
            						'&nbsp;'+
            						'<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
            					'</div>'
			    });
			}
			
			function edit_venue(id, name, email, address, dname, dwelcome, dfooter){
				$.Dialog({
			        overlay: true,
			        shadow: true,
			        flat: true,
			        icon: '<span class="icon-pencil"></span>',
			        title: 'Edit '+name+' Venue',
			        content: '',
			        onShow: function(_dialog){
			            var content = _dialog.children('.content');
			            content.html('<div class="row" style="width:400px;padding: 10px 20px;">'+
			            				'<form class="user-input">'+
			            					'<label>Acronym for Venue (No space):</label>'+
			            					'<div class="input-control text">'+
			            						'<input type="text" name="name" placeholder="e.g. MEST_LEGON" value="'+name+'">'+
			            					'</div>'+
			            					'<label>Venue Custodian Email:</label>'+
			            					'<div class="input-control text">'+
			            						'<input type="text" name="email" placeholder="e.g. elikem@mail.com" value="'+email+'">'+
			            					'</div>'+
			            					'<label>Venue Address/Location:</label>'+
			            					'<div class="input-control text">'+
			            						'<input type="text" name="location" placeholder="e.g. No. 20 Aluguntuguntu street, East-Legon" value="'+address+'">'+
			            					'</div>'+
			            					'<label>Display Name:</label>'+
			            					'<div class="input-control text">'+
			            						'<input type="text" name="display_name" placeholder="e.g. Meltwater Entrepreneurial School of Technology" value="'+dname+'">'+
			            					'</div>'+
			            					'<label>Display Welcome:</label>'+
			            					'<div class="input-control password">'+
			            						'<input type="text" name="display_welcome" placeholder="e.g. You are Welcome!" value="'+dwelcome+'">'+
			            					'</div>'+
			            					'<label>Display Footer:</label>'+
			            					'<div class="input-control text">'+
			            						'<input type="text" name="display_footer" placeholder="e.g. Visitors Log for MEST - East Legon Campus" value="'+dfooter+'">'+
			            					'</div>'+
			            					'<div class="form-actions">'+
			            						'<button class="button primary">Save</button>'+
			            						'&nbsp;'+
			            						'<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
			            					'</div>'+
			            				'</form>'+
			            				'</div>');
			        }
			    });
			}
		</script>
		<script type="text/javascript">
	    	$(function(){
			    $.Notify({
			        content: "<a href='http://vislog.gopagoda.com/vs/{{$name}}'>vislog.gopagoda.com/vs/{{$name}}</a>",
			        caption: "Find log book for {{$name}} at ",
			        timeout: 1200000000,
			        icon: "icon-remove"
			    });
			});
	    </script>
    </body>
</html>	