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
	background-image: none;
	background-color: #fff;
	background-size: 110% ;
	}

	.aux{font-size: 10px; margin-top: 2.1em; margin-left: 6em;}
	.aux2{margin-top: -22px; margin-left: 150px;}
	.aux3{margin-top: -24px; margin-left: 60px;}
	.aux4{margin-left: -10px;}
	h2{ font-weight: bold;}

	@media screen and (max-width:1024px){
		.columna{ width:30%; color:#222;} 
		body{ 
			background-size: 1024px ;
			} 
	} 

    </style>
<?php include('box/header.php') ?>	
<section class="contenedor">	
	<section class="content">
		<div class="people">

			<div class="columna aux" style='width:20%'>
				<?php include('box/search_people.php');?>
			</div>	
			<div class="columna" style="width:65%; margin-top:-86px; height:350px">
				
				<div>
					<div class='columna igual2'>
						<img src="images/people/roberto_hernandez.png">
						</div>
					<div class='columna igual2'>
					</br></br>
						<h2 style='text-transform:uppercase'>roberto hernandez</h2>
						<p>Nulla sit amet leo in augue pharetra porttitor ut sit amet sem. Cras tincidunt lacinia feugiat.Cras tincidunt lacinia feugiat. Nulla sit amet leo in augue pharetra porttitor ut sit amet sem.</p>
						<div>
							<img src="images/opc_01.png">
							<img src="images/opc_02.png">
							<img src="images/opc_03.png">
							<img src="images/opc_04.png">
						</div>
					</div>
				</div>
				<div class='clear'></div>
				<div>
					<div class='columna right2 igual2'>
						<h3>AREAS DE PRACTICA</h3>
						<p>Nulla sit amet leo in augue pharetra porttitor ut sit amet sem. 
				 		Cras tincidunt lacinia feugiat.</p>
				 		<h3>IDIOMAS</h3>
						<p>lacinia feugiat.</p>
					</div>
					<div class='columna left2 igual2'>
						<h3>educacion</h3>
						<p>Sed auctor nulla varius nibh tempor non tristique enim varius. Integer ipsum leo, rutrum eget molestie vitae, aliquet suscipit erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Aenean id mi velit, vel euismod velit. </p>
				 		
					</div>
				</div>
				</div>	
			</div>	
		</div> 
	</section>
</section>	
<?php $pagina='people'; include('box/footer.php') ?>
</body>
</html>
