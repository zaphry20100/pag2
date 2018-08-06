<?php require('conexion.php');
	$instruccion1 = mysqli_query($conexion, "SELECT * FROM facts WHERE planet = 'earth'");
	$instruccion2 = mysqli_query($conexion, "SELECT * FROM facts WHERE planet = 'pluto'");

	$tierra = mysqli_fetch_array($instruccion1);
	$puton = mysqli_fetch_array($instruccion2);

	$aleatorio = array_rand($tierra, 1);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Pla.net</title


		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Farsan|Mogra|Mr+Bedfort|Pacifico|Romanesco|The+Girl+Next+Door" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




	</head>
	<body class="background" data-aos = "fade" data-aos-duration="300" data-aos-easing="ease-in-sine">

		<nav class="navbar navbar-expand-lg" style = "background-color: none; color: black; margin-bottom: 0;">
			
		
			
		  <a class="navbar-brand" style=" text-decoration: none;">Pla.net</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

		    <span class="navbar-toggler-icon"></span>

		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		    <ul class="navbar-nav mr-auto">

		      <li class="nav-item active">

		        <a class="nav-link" href="#" style=" text-decoration: none;">Home <span class="sr-only">(current)</span></a>

		      </li>
		      <li class="nav-item">

		        <a class="nav-link" href="#">Link</a>

		      </li>

		      <li class="nav-item dropdown">

		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>

		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

		          <a class="dropdown-item" href="#">Action</a>

		          <a class="dropdown-item" href="#">Another action</a>

		          <div class="dropdown-divider"></div>

		          <a class="dropdown-item" href="#">Something else here</a>

		        </div>

		      </li>

		    </ul>

		  </div>

		</nav>





<!-- 		<div class="mainBitch"  id="OP"> -->
			

			

			<div class="mainDiv" id="OP2" style="z-index: -1;" >

			</div>

			<div class="home">
			
				<h1 onclick="animateMe();" id="Home">Home</h1>

			</div>

			<button class="discover" type="button" id="Button" onclick="animateMe();">Discover</button>



		

			<div class="mercury" id="Mercury">
				
				<img src="planetas/mercury.png" width="100%" height="100%">

			</div>

			<div class="venus" id="Venus">
				
				<img src="planetas/venus.png">

			</div>

			

			<div class="earth" id="Earth">
					
					<img src="planetas/earth.png" onclick="clickEarth(); clickAll();">

			</div>

			<div class="mars" id="Mars">
					
					<img src="planetas/mars.png">

			</div>

			<div class="jupiter" id="Jupiter">
					
					<img src="planetas/jupiter.png">

			</div>

			<div class="saturn" id="Saturn">
					
					<img src="planetas/saturn.png">

			</div>		
			
			<div class="uranus" id="Uranus">
					
					<img src="planetas/uranus.png">

			</div>	

			<div class="neptune" id="Neptune">
					
					<img src="planetas/neptune.png">

			</div>

			<div class="pluto" id="Pluto">
					
					<img src="planetas/pluto.png" width="100%" height="100%">

			</div>



<!-- 		</div> -->

			<div class="mainDiv2" id="OP3">

				<div class="insideDiv" id="ins">

					<h1 style="line-height: 0;" id="planets">Planets</h1>

				</div>

				<div class="insideDiv2" id="ins2">

					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
					
				</div>

			</div>


			
				<img src="arrow/arrow.png" alt="arrow" class="arrow middleFinger" id="Arrow">
			



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
 	 		AOS.init();
		</script>

		<script>
			


			function $(id){
		 		return document.getElementById(id);
		 	}


			function animateMe() {
        		 
					$("Button").style.display ="none";
				

					$("Home").style.animationName ="byeFelicia";
					$("Home").style.animationDuration = "1s";
					$("Home").style.animationFillMode = "forwards";

					$("OP2").style.animationName = "smol";
					$("OP2").style.animationDuration = "3s";
					$("OP2").style.animationDelay = "";
					$("OP2").style.animationFillMode = "forwards";
					$("OP2").style.border = "1px solid rgba(255, 255, 255, 0.5)";
					


            		$("Mercury").style.animationName = "mercury";
            		$("Mercury").style.animationDuration = ".5s";
            		$("Mercury").style.animationFillMode = "forwards";
           			
            		$("Venus").style.animationName = "venus";
            		$("Venus").style.animationDuration = ".5s";
            		$("Venus").style.animationDelay = ".2s";
            		$("Venus").style.animationFillMode = "forwards";

            		$("Earth").style.animationName = "earth";
            		$("Earth").style.animationDuration = ".5s";
            		$("Earth").style.animationDelay = ".4s";
            		$("Earth").style.animationFillMode = "forwards";

            		$("Mars").style.animationName = "mars";
            		$("Mars").style.animationDuration = ".5s";
            		$("Mars").style.animationDelay = ".6s";
            		$("Mars").style.animationFillMode = "forwards";
 
             		$("Jupiter").style.animationName = "jupiter";
            		$("Jupiter").style.animationDuration = ".5s";
            		$("Jupiter").style.animationDelay = ".8s";
            		$("Jupiter").style.animationFillMode = "forwards";

            		$("Saturn").style.animationName = "saturn";
            		$("Saturn").style.animationDuration = ".5s";
            		$("Saturn").style.animationDelay = "1s";
            		$("Saturn").style.animationFillMode = "forwards";
    		
            		$("Uranus").style.animationName = "uranus";
            		$("Uranus").style.animationDuration = ".5s";
            		$("Uranus").style.animationDelay = "1.2s";
            		$("Uranus").style.animationFillMode = "forwards";

             		$("Neptune").style.animationName = "neptune";
            		$("Neptune").style.animationDuration = ".5s";
            		$("Neptune").style.animationDelay = "1.4s";
            		$("Neptune").style.animationFillMode = "forwards";           

            		$("Pluto").style.animationName = "pluto";
            		$("Pluto").style.animationDuration = ".5s";
            		$("Pluto").style.animationDelay = "1.6s";
            		$("Pluto").style.animationFillMode = "forwards";

 
    		


    		}



    		function clickAll(){
    			$("OP3").style.animationName = "hiBitch";
    			$("OP3").style.animationDuration = ".5s";
    			$("OP3").style.animationDelay = ".3s";
    			$("OP3").style.animationFillMode = "forwards";

    			$("Arrow").style.animationName = "hiBitch";
    			$("Arrow").style.animationDuration = ".3s";
    			$("Arrow").style.animationFillMode = "forwards";

    			$("ins").style.animationName = "hiBitch";
    			$("ins").style.animationDuration = "2s";
    			$("ins").style.animationDelay = ".7s";
    			$("ins").style.animationFillMode = "forwards";

    			$("ins2").style.animationName = "hiBitch";
    			$("ins2").style.animationDuration = "2s";
    			$("ins2").style.animationDelay = ".9s";
    			$("ins2").style.animationFillMode = "forwards";


    		}

    		function clickEarth(){
    			$("planets").innerHTML = "Earth";
    			$("ins2").innerHTML = "PUTO EL QUE LEE";
    		}

    	

		</script>


	</body>
</html>