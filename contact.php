<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
				//Check if message has been entered
		if (!$_POST['subject']) {
			$errSubject = 'Please select a subject!';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman && !$errSubject) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>   

   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>David Edgar</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style type="text/css"></style>
</head>
<body>   
	<nav role="navigation" class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">DE</a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Resume</a></li>					
					<li><a href="experience.html">Experience</a></li>
                    <li><a href="skills.html">Skill Set</a></li>					
					<li><a href="hobbies.html">Hobbies</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>
                </ul>          
            </div>
        </div>
    </nav>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
			<hr>
					<h1 class="h1">Contact David<small> Feel free to contact me.</small></h1>
			</div>
		</div>
	</div>
<!--Placement for future php contact form, need to learn that code first though. Having a tough time distinguishing what I need-->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="well well-sm">
							<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Name</label>
										<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
									</div>
									<div class="form-group">
										<label for="email">
											Email Address</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="subject">
											Subject</label>
										<select id="subject" name="subject" class="form-control" required="required">
											<option value="na" selected="">Choose One:</option>
											<option value="service">Resume Question</option>
											<option value="suggestions">Job Opportunity</option>
											<option value="product">Other</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Message</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
											placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
										Send Message</button>
								</div>
							</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Contact Information</legend>
						<address>
							<strong>David Edgar</strong><br>
							Ask for Address!<br>
							Newport News, VA 23606<br>
							<abbr title="Phone">
								P:</abbr>
							(757)-594-****
							<p></p>
							<abbr title="Phone">
								C:</abbr>
							(757)-672-****
						</address>
						<address>
							<strong></strong><br>
							<a href="mailto:#">david.emerson.edgar@gmail.com</a>
						</address>
						</form>
					</div>
				</div>
					<hr>
		<div class="row">
			<div class="col-xs-12">
				<footer>
					<p>&copy; Copyright www.david-edgar.com</p>
				</footer>
			</div>
		</div>	
		
	</div>
</body>
</html>

