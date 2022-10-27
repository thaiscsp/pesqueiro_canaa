<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&display=swap" rel="stylesheet">

		<!-- Swiper -->
		<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<!-- Navbar -->
        <div id="nav">
        	<ul class="nav justify-content-center">
  				<li class="nav-item">
    				<a class="nav-link" href="#combos">Combos</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#pratos">Pratos</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#bebidas">Bebidas</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#porcoes">Porções</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#sobre">Sobre</a>
  				</li>
			</ul>
    	</div>
		<br>
		@yield('content')

		<!--<footer>
			<a href="#"><img style="position: fixed; bottom: 20px; right: 25px;" src="{{ asset('images/topo.png') }}"></a>
		</footer>-->

		<footer id="sobre" class="footer">
        	<div style="color: rgb(33, 37, 41);" class="container sobre">
            	<h1>Sobre o Pesqueiro Canaã</h1>
            	<center><hr></center><br>
            	<p>O Pesqueiro Canaã, localizado na cidade de Monte Mor - SP, conta com mais de 10 anos de experiência em atendimento, servindo pratos e bebidas especiais para você e sua família!</p>
            	<img src="" alt="">
            	<p>Também conta com dois tanques de pesca <!--de aproximadamente x m²--> para você esfriar a cabeça, com uma grande variedade de peixes.</p>
            	<img src="" alt="">
            	<br>
            	<iframe style="width: auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.1952875935835!2d-47.29770334882908!3d-22.943033944861174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8a55ce8155bb7%3A0x3f17f4f690bc738b!2sPesqueiro%20cana%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1666835152208!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            	<br><br>
            	<p>Contato: (xx) x xxxx-xxxx</p>
            </div>
            <div class="container">
            	<center><hr></center>
            	<p>Pesqueiro Canaã &copy; <?php echo date("Y");?></p>
            </div>
        	
		</footer>
			
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
		<!--Swiper-->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js" ></script>
		<script src="js/Swiper.js" type="text/javascript"></script>
	</body>
</html>