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

    <h1 id="pratos">Pratos</h1>
    <center><hr></center><br>
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

@stop