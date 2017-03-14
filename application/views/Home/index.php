<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<title>Welcome to iCactus Page</title>
	
	<!-- CSS Bootstrap -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" >
	
	<!-- SCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.slim.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/tether.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" ></script>
	
	<style type="text/css"></style>
	
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar-brand" href="#">
  	iCactus
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Upload</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign in</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li> -->
    </ul>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
	  	<h1>Welcome to iCactus page.</h1>
	  	<p class="lead">i Love Cactus</p>
	</div>
</div>

<div class="container" style="margin-bottom: 25px;">
	<div class="card-deck">
	  	<div class="card">
	    	<img class="card-img-top" src="<?php echo base_url('assets/images/IMG-256x180.jpg');?>" alt="Card image cap">
	    	<div class="card-block">
	      		<h4 class="card-title">Card title</h4>
	      		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	      		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    	</div>
	  	</div>
	  	<div class="card">
	    	<img class="card-img-top" src="<?php echo base_url('assets/images/IMG-256x180.jpg');?>" alt="Card image cap">
	    	<div class="card-block">
	      		<h4 class="card-title">Card title</h4>
	      		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	      		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    	</div>
	  	</div>
	  	<div class="card">
	    	<img class="card-img-top" src="<?php echo base_url('assets/images/IMG-256x180.jpg');?>" alt="Card image cap">
	    	<div class="card-block">
	      		<h4 class="card-title">Card title</h4>
	      		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	      		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    	</div>
	  	</div>
	</div>
</div>

</body>
</html>