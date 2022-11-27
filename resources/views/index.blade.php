@extends('layouts.master')
@section('title', 'Pesqueiro Canaã')

@section('content')

<!-- Navbar -->
<nav id="nav" class="text-center navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pesqueiro Canaã</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#porcoes">Porções</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#combos">Combos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pratos-executivos">Pratos Executivos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#bebidas">Bebidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sucos">Sucos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sobre">Sobre</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>

<!-- Hero section -->
<div class="d-flex min-vh-100" lc-helper="background" style="background:url(https://raw.githubusercontent.com/thaiscsp/pesqueiro_canaa/13_10_22/public/images/cardapio.jpg)  center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
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
<br>

<section id="galeria">
    <h1 id="porcoes">Porções</h1>
    <center><hr></center>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper content" name="porcao">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->
        </div>
    </div>    
    <br>

    <h1 id="combos">Combos</h1>
    <center><hr></center>
    <!-- Esta div é preenchida pelo script em "exibe_produtos.js" -->
    <div class="swiper mySwiper">
        <div name="combo" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->
        </div>
    </div>    
    <br>

    <h1 id="pratos-executivos">Pratos Executivos</h1>
    <center><hr></center>
    <div class="swiper mySwiper">
        <div name="prato_executivo" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->            
        </div>
    </div>
    <br>
    
    
    <h1 id="bebidas">Bebidas</h1>
    <center><hr></center><br>
    <h3 class="text-center">Cervejas 600ml</h3>
    <div class="swiper mySwiper">
        <div name="bebida_cerveja_600ml" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->
        </div>
    </div>
    <br>

    <h3 class="text-center">Long Neck</h3>
    <div class="swiper mySwiper">
        <div name="bebida_long_neck" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->        
        </div>        
    </div>
    <br>
    
    <h3 class="text-center">Cervejas Lata</h3>
    <div class="swiper mySwiper">
        <div name="bebida_cerveja_lata" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->        
        </div>
    </div>
    <br>

    <h3 class="text-center">Refrigerante 1L</h3>
    <div class="swiper mySwiper">
        <div name="bebida_refrigerante_1l" class="swiper-wrapper content">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->
        </div>
    </div>
    <br>

    <h3 class="text-center">Refrigerante Lata</h3>
    <div class="swiper mySwiper">
        <div name="bebida_refrigerante_lata" class="swiper-wrapper conetent">
            <!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" -->  
        </div>
    </div>
    <br>

    <h3 class="text-center">Drinks</h3>
    <div class="swiper mySwiper">
        <div name="bebida_drink" class="swiper-wrapper conetent"><!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" --></div>     
    </div>
    <br>

    <h3 class="text-center">Bebidas Quentes</h3>
    <div class="swiper mySwiper">
        <div name="bebida_bebida_quente" class="swiper-wrapper content"><!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" --></div>    
    </div>
    <br>
    
    <h3 class="text-center">Combos</h3>
    <div class="swiper mySwiper">
        <div name="bebida_combo" class="swiper-wrapper content"><!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" --></div>
    </div>
    <br>
    
    <h1 id="sucos">Sucos</h1>
    <center><hr></center><br>
    <h3 class="text-center">Copo 500ml</h3>
    <div class="swiper mySwiper">
        <div name="suco_copo_500ml" class="swiper-wrapper content"><!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" --></div>
    </div>          
    <br>

    <h3 class="text-center">1L</h3>
    <div class="swiper mySwiper">
        <div name="suco_1L" class="swiper-wrapper content"><!-- As divs a seguir são preenchidas pelo script em "exibe_produtos.js" --></div>
    </div>
    <br>

</section>
<footer id="sobre" class="footer">
            <div style="color: rgb(33, 37, 41);" class="container sobre">
                <h1>Sobre o Pesqueiro Canaã</h1>
                <center><hr></center><br>
                <p>O Pesqueiro Canaã, localizado na cidade de Monte Mor - SP, conta com mais de 10 anos de experiência em atendimento, servindo pratos e bebidas especiais para você e sua família!</p>
                <img src="" alt="">
                <p>Também conta com dois tanques de pesca <!--de aproximadamente x m²--> para você esfriar a cabeça, com uma grande variedade de peixes.</p>
                <img src="" alt="">
                <br>
                <iframe class="container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.1952875935835!2d-47.29770334882908!3d-22.943033944861174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8a55ce8155bb7%3A0x3f17f4f690bc738b!2sPesqueiro%20cana%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1666835152208!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br>
                <p>Contato: (xx) x xxxx-xxxx</p>
            </div>
            <div class="container">
                <center><hr></center>
                <p>Pesqueiro Canaã &copy; <?php echo date("Y");?></p>
            </div>
            
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://pesqueiro-canaa.herokuapp.com/js/exibe_produtos.js"></script>
@stop
