<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<style type="text/css">

html body {
	margin-top: 50px !important;
}

#top_form {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	box-shadow: 0px 7px 7px 0px rgba(0,0,0,0.2);
	
	border-bottom:1px solid #F5F5F5;
	
    background:#F5F5F5;
	
	height:45px;
	line-height:45px;
}

#top_form input[name=url] {
	width: 550px;
	height: 20px;
	padding: 5px;
	font-family: 'Titillium Web', sans-serif;
	border-radius: 3px;
	border: 0px none;
	background: none repeat scroll 0% 0% #FAFAFA;
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}

#top_form input[name="button"] {
	width: 60px;
	height: 30px;
	padding: 5px;
	font-family: 'Titillium Web', sans-serif;
	border-radius: 3px;
	border: 0px none;
	color: white;
	background: none repeat scroll 0% 0% #2196F3;
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}


</style>

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};
	
	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}
</script>

<div id="top_form">

	<div style="width:800px; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" name="button" value="Home" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" name="button" value="Go">
		</form>
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
