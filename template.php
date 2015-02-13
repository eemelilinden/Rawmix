<?php 
require('index.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FI" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fi" xml:lang="fi">
<head>
	<!--
		META
	-->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	<!--
		STYLESHEETS
	-->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
	<link href="css/simple-font/style.css" rel="stylesheet" >
	<link href="css/simple-font/simple-line-icons.css" rel="stylesheet" >

	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- YAMM STYLES -->
	<link href="css/yamm.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/rawmix-logo.png" style="width: 100%;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php 
require $content;
?>

<div class="phase social-media">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="facebook" href="https://www.facebook.com/rawmixfi?fref=ts"><img src="images/facebook.png"></a>
				<a class="twitter" href="#"><img src="images/twitter.png"></a>
			</div>
		</div>
	</div>
</div>

</div>
<div class="phase bottom">
	<div class="container">
		<div class="row" style="width: 650px; margin: auto">
			<div class="col-md-3">
			asd
			</div>
			<div class="col-md-3">
			asd
			</div>
			<div class="col-md-3">
			asd
			</div>
			<div class="col-md-3">
			asd
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				info@rawmix.fi
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				Copyright &copy; Rawmix Oy
			</div>
		</div>
	</div>
</div>

<!--
	SCRIPTS
-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/theme.min.js"></script>

</body>
</html>