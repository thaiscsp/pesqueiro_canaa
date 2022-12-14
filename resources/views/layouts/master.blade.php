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

		<!-- CSS local -->
		<link rel="stylesheet" type="text/css" href="https://pesqueiro-canaa.herokuapp.com/css/style.css">
	</head>

	<body>
		
		@yield('content')
			
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
		<!--Swiper-->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js" ></script>
		<script src="https://pesqueiro-canaa.herokuapp.com/js/Swiper.js"></script>
	</body>
</html>