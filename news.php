<!DOCTYPE html >
<html>
<?php include('box/head.php') ?>
<body>
     <style>
    body{
	margin:0;
	background-color: #f0f0f1;
	font-family:  arial;	
	font-size: 16px; 
	background:url(images/bg_news.jpg) 0 100px no-repeat;
	background-size: 110% ;
	}
	@media screen and (max-width:1024px){
		.columna{ width:30%;} 
		body{ 
			background-size: 1024px ;
			} 
	} 

    </style>
<?php include('box/header.php') ?>	
<section class="contenedor">	
	<section class="content">
		<div class="news">
			<div id="titulo_new" class="columna">
				<p class="titulo_news">Nam a diam euismod lacus blandit porta.</p>
			</div>	
			<div class="columna">
				<h2>Nam a diam euismod lacus blandit porta.</h2>
				<p class="fecha">Feb 24, 2012 </p>
				<div>
					<p>Sed auctor nulla varius nibh tempor non tristique enim varius. Integer ipsum leo, rutrum eget molestie vitae,
				 aliquet suscipit erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				 	<p>Aenean id mi velit, vel euismod velit. Nulla sit amet leo in augue pharetra porttitor ut sit amet sem. 
				 		Cras tincidunt lacinia feugiat. </p>
				</div>
			</div>	
			<div class="columna">
				<h2>Nam a diam euismod lacus blandit porta.</h2>
				<p class="fecha">Feb 24, 2012 </p>
				<div>
					<p>Sed auctor nulla varius nibh tempor non tristique enim varius. Integer ipsum leo, rutrum eget molestie vitae,
				 aliquet suscipit erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				 	<p><img src='images/news_img.jpg'></p>
				</div>
			</div>	
		</div> 
	</section>
</section>	
<?php $pagina='news'; include('box/footer.php') ?>
</body>
</html>
