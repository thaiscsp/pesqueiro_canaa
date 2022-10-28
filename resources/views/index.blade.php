@extends('layouts.master')
@section('title', 'Pesqueiro Canaã')

@section('content')

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
                    <a class="nav-link" href="#porcoes">Porções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>
            </ul>
        </div>
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

<div class="container">

    <h1 id="combos">Combos</h1>
    <center><hr></center><br>
    <div name="combos" class="row row-cols-2 row-cols-lg-3"></div>
    <section id="galeria">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" alt="Combo de contra filé">
                            <br>
                            <br>
                            <h6>Contra Filé</h6>
                            <h6>Preço: R$42,88</h6>
                        </div>
                    </div>
                </div>
                

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-pagination"></div>

            </div>
        </div>
    </section>
    <br>

    <h1 id="pratos">Pratos Executivos</h1>
    <center><hr></center><br>
    <div name="pratos-executivos" class="row row-cols-2 row-cols-lg-3"></div>
    <section id="galeria">
        <div class="swiper mySwiper conteiner">
            <div class="swiper-wrapper content">
                
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" alt="Parmegiana">
                            <br>
                            <br>
                            <h6>Parmegiana</h6>
                            <h6>Preço: R$85,00</h6>
                        </div>
                    </div>
                </div>

                

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-pagination"></div>

            </div>
        </div>
    </section>
    <br>

    <h1 id="bebidas">Bebidas</h1>
    <center><hr></center><br>
    <div name="bebidas" class="row row-cols-2 row-cols-lg-3"></div>
    <section id="galeria">
        <div class="swiper mySwiper conteiner">
            <div class="swiper-wrapper content">
                
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('images/caipirinha-354x354.jpg') }}" alt="Caipirinha">
                            <br>
                            <br>
                            <h6>Caipirinha</h6>
                            <h6>Preço: R$18,00</h6>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-pagination"></div>

            </div>
        </div>
    </section>
    <br>

</div>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
        $(document).ready(function() {
            $.get("http://pesqueiro-canaa.herokuapp.com/api/produtos", function(data, status){
                var json = jQuery.parseJSON(data);
                var tipos_banco = ['Porção', 'Combo', 'Prato Executivo', 'Bebida', 'Suco'];
                var tipos_classes = ['porcoes', 'combos', 'pratos-executivos', 'bebidas', 'sucos'];
                var produtos = '';
               
                for (var tipo_banco of tipos_banco) {
                    $.each(json, function(key, value) {
                        if (this.tipo == tipo_banco) {
                            produtos += 
                                '<center>' +
                                    '<div class="col mb-4">' +
                                        '<div class="card">' +
                                            '<img style="height: 340px; 340px;" src="' +this.caminho_imagem+ '" class="card-img-top">' +
                                            '<div class="card-body">' +
                                                '<h6 class="card-title">' +this.nome+ '</h6>' +
                                                '<p class="card-text">R$ ' +this.preco+ '</p>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</center>';
                        }
                        var index = tipos_banco.indexOf(tipo_banco);
                        $('div[name="'+tipos_classes[index]+'"]').html(produtos);
                    });
                    produtos = '';
                }
            });
        });
    </script>

@stop
