<?php
require_once("../modules/login/login.php");
?>
<html>
<head>
<title>Register for GAWTrack</title>
<script src="/../sources/jquery-2.1.0.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="/../sources/bootstrap/css/bootstrap.css">
<script src="/../sources/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Register for GAWTrack</h1>
<form id="journalSubmit" id="login" method="post">
	<p>Username: <input type="text" name="username" id="username"></p>
	<p>Password: <input type="password" name="password" id="password"></p>
	<p>Verify Password: <input type="password" name="verify" id="verify"></p>
	<p>Email: <input type="text" name="email" id="email"></p>
	<input type="button" name="submit" id="loginSubmit" value="Submit" />
</form>
<div id="response"></div>
<script type="text/javascript">
	$("#loginSubmit").click(function(event) {
		event.preventDefault();
		var $form = $( this );
   		var	username = $("#username").val();
   		var	password = $("#password").val();
   		var	verify = $("#verify").val();
   		var	emailAdd = $("#email").val();
    	var posting = $.post( 'doRegister.php',{user: username, pass1: password, pass2: verify, email: emailAdd});
    	posting.done(function( data ) {
    		$( "#response" ).html( "<b>" + data + "</b>");
    	})
	})
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-50797586-1', 'ameobea.me');
ga('send', 'pageview');

</script>
</body>
</html>