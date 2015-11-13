<!DOCTYPE html>
<html>
	<head>
		<title>Anwesh</title>
		<link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="{{asset('CSS/font-awesome.min.css')}}"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="{{asset('CSS/fileinput.css')}}"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="_token" content="{{ csrf_token() }}"/>
		<style type="text/css">
		#content
		{
			margin-top:5%;
		}
		.list_item
		{
			font-size: 18px;
			line-height: 24px;
		}
		.list_item1
		{
			font-size: 17px;
		}
		.vcenter
		{
			display: inline-block;
			vertical-align: middle;
			float: none;
		}
		.clickable
		{
			cursor: pointer;
		}
		body
		{
			background-color: #000000;
		}
		</style>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-19500581-1', 'auto');
		ga('send', 'pageview');
		</script>
	</head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top" id="nav_bar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="{{action('HomeController@index')}}">Anwesh</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="clickable active" id="home"><a>Home</a></li>
						<li class="clickable" id="how"><a>How Anwesh Works</a></li> 
						<li class="clickable" id="rules"><a>Rules</a></li> 
						<li id="register"><a href="{{action('HomeController@register')}}">Register</a></li>
						@if(Session::has('user_name'))
							<li id="view"><a href="{{action('AdminController@view')}}">View Registrations</a></li>
						@endif
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if(Session::has('user_name'))
							<li><a href="{{action('AdminController@logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<blockquote style="border-left: 0px;text-align: justify;text-justify: inter-word;">
						<span style="font-size:30px;">Pragyan</span> is an annual international ISO certified techno-managerial 
						organization of the National Institute of Technology, Tiruchirappalli. 
						It is a fest that brings to students several possibilities to gain 
						hands on experience with technology.  
					</blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 vcenter">
					<center>
						<h2>ANWESH 16</h2>
					</center>

					<center>
						<blockquote style="border-left: 0px;">
							Pragyan’16 presents to you ANWESH, an inter - collegiate technical 
							exhibition and competition, aimed at presenting a platform for the 
							students of all colleges to display their ideas and creations and 
							put on show their inventiveness and technical curiosity to the 
							outside world. Every spark of an idea is encouraged.
						</blockquote>
					</center>
				</div>
				<div class="col-sm-12 col-md-5 vcenter" style="margin-left:7.5%">
					<center><img class="img-responsive" src="{{asset('Logo.jpg')}}"></center>
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<center><h3>Benefits</h3></center>
					<div class="col-md-2">
						<center><i class="fa fa-line-chart fa-5x"></i></center>
					</div>
					<div class="col-md-10">
						<ul>
							<li class="list_item">Experience pitching your idea and building a prototype. Exposure by coming in contact with technocrats from across the country and recognition for your idea.</li>
							<li class="list_item">Internship opportunities with the visiting companies.</li>
							<li class="list_item">Certificates of participation from Pragyan.</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-5 col-md-offset-1">
					<center><h3>Prize Money</h3></center>
					<div class="col-md-2">
						<center><i class="fa fa-trophy fa-5x"></i></center>
					</div>
					<div class="col-md-10">
						<ul>
							<li class="list_item">For the top three innovations in each category</li>
							<li class="list_item">Circuital: 30k/18k/12k</li>
							<li class="list_item">Non-Circuital: 30k/18k/12k</li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="row" id="how_it_works">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<center><h2>How Anwesh Works?</h2></center>
					<br>
					<div class="col-sm-12">
						<ol>
							<li class="list_item">Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</li>
							<ul>
								<li class="list_item1">Must be within the realm of Science and technology.</li>
								<li class="list_item1">The end result of the project must be a tangible product or a demonstrable service.</li>
								<li class="list_item1">Must be presentable during Pragyan as a working model or demonstration along with visual aids (Charts, Visual Aids, etc.)</li>
								<li class="list_item1">Original ideas addressing social problems, industrial needs, day-to-day utility or recreation.</li>
							</ul>
							<li class="list_item">A panel will scrutinize the idea, and if deemed feasible and worthy, you will be given the green light to pursue the idea.</li>
							<li class="list_item">The second round will be held in the month of January 2016 wherein all teams will be required to present a comprehensive proposal, work schedule, cost report and justification for the project.</li>
							<li class="list_item">After systematic reviews, the complete presentation along with the working model/demonstration must be ready by 20th February 2016, following which it will be showcased during Pragyan’16.</li>
						</ol>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="row" id="rules_block">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<center><h2>Rules</h2></center>
					<br>
					<div class="col-sm-12">
						<div class="list_item">Scientific fraud and misconduct are not condoned at any level of research or during the course of the competition. This includes plagiarism, forgery, use or presentation of other researchers' work as one’s own and fabrication of data. Fraudulent projects will fail to qualify for competition.</div>
						<h3 class="text-warning">First Round:</h3>
						<ol>
							<li class="list_item1">The deadline for the abstract submission is <span class="text-danger" style="font-size:25px;">15th December 2015.</span> Late entries will not be entertained and deadline extensions will not be given.</li>
							<li class="list_item1">Maximum number of participants in a Team is 4.</li>
							<li class="list_item1">One student may be a part of more than one team.</li>
							<li class="list_item1">One team may present more than one project.</li>
							<li class="list_item1">The members of a team may not be changed during the course of the competition.</li>
							<li class="list_item1">The idea and contents of the project may not be changed once the abstract is submitted.</li>
							<li class="list_item1">After you have submitted the abstract, a panel of judges will go through your material and if you are shortlisted for the second round, you will be notified.</li>
						</ol>
						<h3 class="text-warning">Second Round:</h3>
						<ol>
							<li class="list_item1">A PowerPoint presentation containing a detailed description of the project and the progress of the project and a video (duration 3-5 minutes) explaining the same should be mailed to us by <span class="text-danger" style="font-size:25px;">January 20, 2016.</span></li>
							<li class="list_item1">The student(s) doing the presentation must be the one who conducted the research.</li>
							<li class="list_item1">The presentation will be reviewed by a panel of judges and if you are shortlisted for the final round, you will be notified.</li>
						</ol>
						<h3 class="text-warning">Final Round:</h3>
						<ol>
							<li class="list_item1">The final working model of the project is to be displayed during Pragyan’16, where it will be judged by a panel of judges and the winners of the circuital and non-circuital projects will be announced.</li>
							<li class="list_item1">The decision of judges will be final and no arguments or appeal will be entertained.</li>
							<li class="list_item1">The prize money and number of prizes are subject to change based on the number of registrations for the event.</li>
							<li class="list_item1">The organizers reserve the right to change/update the rules of the contest at any point of time and will do their best to inform the participants of the same. However, it is ultimately the responsibility of the teams to keep themselves updated. Violation of any rule can result in rejection of project.</li>
							<li class="list_item1">All the team members may be present during the event. There will be an interactive session with the judges, other participants and students during the time allotted for the event.</li>
							<li class="list_item1">Although students may present a new phase of an on-going project, no student may present a project topic from a previous year without conducting significant additional research on the topic.</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<br>

		@include('footer')
		<script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
		<script>
		$("#how").on('click',function() {
			$("#how").addClass("active");
			$("#rules").removeClass("active");
			$("#home").removeClass("active");
			$('html, body').animate({
				'scrollTop' : $("#how_it_works").position().top-50
			});
		});
		$("#rules").on('click',function() {
			$("#rules").addClass("active");
			$("#how").removeClass("active");
			$("#home").removeClass("active");
			$('html, body').animate({
				'scrollTop' : $("#rules_block").position().top-50
			});
		});
		$("#home").on('click',function() {
			$("#home").addClass("active");
			$("#rules").removeClass("active");
			$("#how").removeClass("active");
			$('html, body').animate({
				'scrollTop' : $("body").position().top
			});
		});

		</script>
	</body>
</html>
