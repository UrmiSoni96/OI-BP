
<!DOCTYPE html >

<html lang="en">

    <head>
        <title> MyTour</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        
        <meta name="description" content="An easy way to create a website tour with jQuery" >
        <meta name="keywords" content="website,jquery,tour,step,plugin,walk thru,take a tour,assets" >
        
        <link rel="stylesheet" type="text/css" href="css-nav/sample.css" >
		<link rel="stylesheet" type="text/css" href="../src/jquery.mytour.css" />
		
                <script type="text/javascript" src="js-nav/jquery.1.7.1.js"></script>
		<script type="text/javascript" src="../src/jquery.mytour.1.0.7.min.js"></script>
		
		<script type="text/javascript" >
			$(document).ready(function(){
				// $('#tour').mytour(); /* simplest way to start */

				// full options
				$('#tour').mytour({
					start: 0,					// start at which step
					
					buttons: { 					// buttons:
						next: 'Next',			// next step. 
						prev: 'Prev',			// previous step.
						start: 'Start',			// backward to the first set step.
						finish: 'Finish',		// stop presentation.
						menu: true				// show/ hide the dropdown menu with the steps
					},
					
					autoPlay: true, 			// (true/ false) if true, start the tour automaticaly 
					timer: 4000, 				// time elipsed before goes to the next step (if null, then don't goes)
                                        
					
                                        steps: '#my-tour-steps', 	// which objects will contain the steps that will be displayed for the user.
					stepHolder: 'li',			// which tag is used to hold the step content

					onStart: function() {		// callback method, called when my-tour is started
						$('#tour').css('display', 'inline');
					},				

					onShow: function() {		// callback method, called when my-tour is played for the 1st time
						$('#panel').html('Running ...');
					},

					beforePlay: null,			// callback method, called always before play any step

					afterPlay: null,			// callback method, called always after has played any step

					onFinish: function() {		// callback method, called when my-tour is finished
						$('#panel').html('The tour has finished.');
                                                                                                                    
					},
					
					debug: false				// (true/false) if set TRUE, log on console each step
				});
			});
		</script>
		
    </head>
    <body>
        <br><br><br><br>
		<div class="header">
                    <div class="step-5"><img src="images/sr.jpg" height="50" width="300"></div> <br >
			<label id="panel"></label>
		</div>
    
		<div class="wrapper">
			
			
			<h2 >Introduction</h2>
			
			<div class="content">
				<p>
					This page is a demo of how you can easily maintain the flow of the web-site.  <br >
					When you start the tour, Tool tips will be displayed in each step, explaining the Web-site.
				</p>
				
				<p >
					<a href="#" id="tour" style="display: none;" >Start it now!</a>
				</p>
				
				<div class="box left">
					<h2 >Creating account or Login. </h2>
					
					<p >
						To create your own account is easy. You just need to give few information to us by clicking on "CREATE YOUR ACCOUNT.". 
                                                
					</p>
                                        <div class="step-1">
                                            <img src="images/lgn.jpg" height="400" width="300">
                                        </div>
                                        
				</div>
				<br><br><br><br><br><br><br>
                                <br><br><br><br><br><br><br>
                                <br><br><br><br><br><br><br>
                                <br><br><br><br><br><br><br>
                                
				<div class="box left">
					<h2 >Selecting your idea is Quite simple. </h2>
					
					<p>
						When you can explain your desire to us, We make it easy to find it for you. 
					</p>
                                        <div class="step-2">
                                         <img src="images/cat.jpg" height="400" width="500">
				</div>
				</div>
				<br class="clear" >
                                <br class="clear" >
                                <br class="clear" >
				
				<h1 >Trending Ideas </h1>
				
				<p>
					 In this tab we are providing almost popular and Latest ideas so that you don't need to worry about choosing your ideas.   
				</p>
                                
                                        <div class="step-3">
                                            <img src="images/home1.png" height="400" width="1000">
				</div>
                                
                <h2 class="step-4">Payment Method </h2>
				
				<p >
					 In this tab we are providing almost popular and Latest ideas so that you don't need to worry about choosing your ideas.   
				</p>
                <br >
                
                <p >
                    <b>Feel free to ask for any query.</b>
                </p> 
				
			</div>
		</div>
		
		<div class="footer step-6">
			<p >&copy; 2014, Rogério Taques.</p>
		</div>
		
		<div style="display: none;" >
			<ul id="my-tour-steps">
				<li data-id=".step-4" data-position="none">
					<h1 >Welcome to Web-Tour</h1>
					<p >
						We are very glad to introduce our web-tour for the flow of functionality of our website,
                                                
					</p>
					<p >Hope you enjoy.</p>
				</li>
				<li data-id=".step-1" data-position="right">
					<h1 >Step 1</h1>
					<p >Create your account within few steps by clicking on "CREATE YOUR ACCOUNT." or Login with your ID and Password. </p>
                                        
				</li>
				<li data-id=".step-2" data-position="right">
					<h1 >Step 2</h1>
					<p >You just need to select the Category and sub-Category according to your desire of choosing an idea.</p>
				</li>
				<li data-id=".step-3" >
					<h1 >Step 3</h1>
					<p >Here we are trying to make easy way to provide you best trending ideas.</p>
				</li>
                                
				<li data-id=".step-4" data-position="top">
					<h1 >Step 4</h1>
					<p >Here we are providing Payment method by PAY-PAL.</p>
				</li>
				<li data-id=".step-5" >
					<h1 >Step 5</h1>
					<p >You can search any idea using search bar option.</p>
				</li>
				<li data-id=".step-6" data-position="none">
					<h1 >Step 6</h1>
					<p />Now you may move further, Thank you.
                                         <p> <b>  Feel free to ask for any query.</b>
                                        </p>
				</li>
			</ul>
		</div>
        
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-25947408-5', 'auto');
          ga('send', 'pageview');

        </script>

    </body>
</html>