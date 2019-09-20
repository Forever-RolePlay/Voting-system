<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body style ="background-color:#2c2f33">
<style>
.logo {
    width: 100px;
    height: 100px;
    background-color: #000;
    border: solid 1px #000;
    border-radius: 25%
}
</style>
<div class="logo"><p align="center">:D</p></div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
	<form action="vote.php" method="POST">
	<div class="container">
		<h1 style="color:#fff">Vote System</h1>
		<p style="color:#fff">Please rember to read out rules!</p>
		<hr style="color:#2c2f33">

		<label for="name"><b style="color:#fff">username: </b></label>
		<input type="text" placeholder="username" name="name" required>
		<p style="color:#fff">Username is CaSe-SeNsItIvEe</p>
		<hr>

		<p style="color:#fff">Please don't spam the button, the delay is not working right now.
		If you abuse the system, your ip will be blocked.</p>
		<input type="submit" class="btn btn-info" value="Vote" id="button1">
	</div>
</div>
</div>

  <div class="container signin">
    <p style="color:#fff">Copyright 2019 Jello Team.</p>
  </div>
</form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
<?php
require 'MinecraftVotifier.php';
require 'Config.php';

use \Spirit55555\Minecraft\MinecraftVotifier;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['name'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</head>
</html>