<!DOCTYPE html>
<html>
<head>

<title>Hello!</title>

<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style type="text/css">
html body {
	background-color: #F5F5F5;
	font-family: 'Titillium Web', sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	font-family: 'Titillium Web', sans-serif;
	padding:10px 24px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}

#frm2
	background-color:#FAFAFA;
	
	border:1px solid #FAFAFA;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	box-shadow: 0px 7px 24px 0px rgba(0,0,0,0.50);
}

</style>

</head>

<body>

<div class="animated fadeInUp" id="container">

	<div style="text-align:center;">
		<h1 style="color:#212121;">Hello!</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:450px;" autocomplete="off" placeholder="Address" />
			<br>
			<input class="btn waves-effect waves-light" type="submit" style="width:450px;" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	<div style="text-align:center;">
		<br>
		<p style="color:#212121;">Made By Charlie.</p>
	</div>

	
</div>

</body>
</html>