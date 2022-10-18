<!DOCTYPE html>
<html>

	<head>
		<meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&display=swap" rel="stylesheet">

		<style>
			a {
				color: #ffffff !important;
				margin-right: 5px !important;
			}

			ul {
				padding-top: 10px;
				padding-bottom: 10px;
				background-color: rgb(33, 37, 41);
			}

			h6, ul,.card-body,.lead{
				font-family: Montserrat;
				font-weight: bold;
			}

			h1 {
				font-family: "Dancing Script";
				font-weight: bold !important;
			}

			#nav {
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 100;
			}
		</style>

	</head>

	<body>

		<!-- Hero section -->
		<div class="d-flex min-vh-100" lc-helper="background" style="background:url(https://scontent.fcpq3-1.fna.fbcdn.net/v/t39.30808-6/302408939_5335339019849279_7962739834310807411_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=ickOF-RTSOsAX8AifJ8&_nc_ht=scontent.fcpq3-1.fna&oh=00_AT_WtHgFYwRk12-0Sfh7ofJfRaSmkaN-ZU9rF9rWg5QMaw&oe=634F8264)  center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
    		<div class="align-self-center text-center text-light col-md-8 offset-md-2">
        		<div class="lc-block mb-4">
            		<div editable="rich">
                		<h1 class="display-1 fw-bolder">Pesqueiro Canaã - Cardápio</h1>
            		</div>
        		</div>
        		<div class="lc-block">
            		<div editable="rich">
                		<p class="lead">Confira todas as opções disponíveis!</p>
            		</div>
        		</div>
        		<br>
       			<div class="lc-block">
            		<svg onclick="if (!document.querySelector('body').classList.contains('livecanvas-is-editing') ) this.closest('section').nextElementSibling.scrollIntoView({ behavior: 'smooth'  });" width="4em" height="4em" viewBox="0 0 16 16" class="text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                		<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                		<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
            		</svg>
        		</div>
    		</div>
		</div>

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
			</ul>
    	</div>
		<br>

		@yield('content')

		<!--<footer>
			<a href="#"><img style="position: fixed; bottom: 20px; right: 25px;" src="{{ asset('images/topo.png') }}"></a>
		</footer>-->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	</body>

</html>
