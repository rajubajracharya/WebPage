<html>
  <head>
    <title>My Hobbies</title>
  <link rel="stylesheet" type= "text/css" href="css/indexcss.css"> 
  <style>
 
	.btn1
	{
		border: 2px solid blue;
		background: #ccff99;
		padding: 10px 20px;
		font-size:20px;
		cursor: pointer;
		margin: 10px;
		color: orange;
		border-radius: 20px;
		transition: 0.8s;
	}
	
	.btn2
	{
		border: 2px solid blue;
		background: #ccff99;
		padding: 10px 20px;
		font-size:20px;
		cursor: pointer;
		margin: 10px;
		color: orange;
		border-radius: 20px;
		transition: 0.8s;
	}
	
	.btn1:hover,.btn2:hover
	{
		background: white;
		color: black;
	}
	.btn1:vlink,.btn2:vlink
	{
		background: pink;
		color: brown ;
	}
	
	.porta
	{
		padding: 12px 10px;
		height:50px;
		width: 100px;
		
	}
	.portal
	{
		display: grid;
		grid-template-columns: 400px 400px;
		height:600px;
		width: 800px;
		border: 2px solid black;
	}
	
	.porta2
	{
		padding: 12px 10px;
		height:50px;
		width: 100px;
		
	}
	
	.porta3
	{
		display: grid;
		grid-template-columns: 400px 400px;
		border: 2px solid black;
		height:600px;
		width: 800px;
	}
	
	.image-portal
	{
		
		border: 2px dotted white;
		height: 300px;
		width: 400px;
	}
		
  </style>
  </head>
  <body a link= "blue" vlink="#330019">
  
	<?php
	  include 'header.php';
	 ?>
	 <div class="twocolomn">
	 <div class="part1">
			 	
	<div class="three-column">
	 
		<h1>My Hobbies are:---</h1><br>
				
				<button
				<div class="hobby">
					<button class="btn1"><a href="#photography">Photography</a></button>
					<button class="btn2"><a href="#travelling">Travelling</a></button>
					
				</div>
				
				<div name="photography" class="porta"><a name="photography">Photography</a></div>
				<div class="portal">
					<div><img class="image-portal" src="images/1.jpg"/></div>
							<div><img class="image-portal" src="images/2.jpg"/></div>
							<div><img class="image-portal" src="images/3.jpg"/></div>
							<div><img class="image-portal" src="images/4.jpg"/></div>
				</div>
				<div name="travelling" class="porta2"> <a name="photography"><a href="#photography">Photography</a>&nbsp&nbsp&nbsp<a name="travelling">Travelling</a></div>
				<div class="porta3">
					<div><img class="image-portal" src="images/11.jpg"/></div>
							<div><img class="image-portal" src="images/22.jpg"/></div>
							<div><img class="image-portal" src="images/33.jpg"/></div>
							<div><img class="image-portal" src="images/44.jpg"/></div>
				</div>
	 	
			
		
	 </div>
	</div>
	</div>
	 <footer id="foot">
	 <?php
	  include 'footer.php';
	 ?>
	  </footer>
	  
	
 
  </body>
</html>