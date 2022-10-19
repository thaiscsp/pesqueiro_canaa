@extends('layouts.master')
@section('title', 'Pesqueiro Canaã')

@section('content')
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
    <h1 id="combos" class="text-center display-4">Combos</h1><br>
    <div class="row row-cols-2 row-cols-lg-3">
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" class="card-img-top" alt="Combo de contra filé">
                    <div class="card-body">
                        <h6 class="card-title">Combo de contra filé</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/combo-de-contra-file-354x354.jpg') }}" class="card-img-top" alt="Combo de contra filé">
                    <div class="card-body">
                        <h6 class="card-title">Combo de contra filé</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <h1 id="pratos" class="text-center display-4">Pratos</h1><br>
    <div class="row row-cols-2 row-cols-md-3">
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" class="card-img-top" alt="Prato executivo de parmegiana">
                    <div class="card-body">
                        <h6 class="card-title">Prato executivo de parmegiana</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/prato-executivo-de-parmegiana-354x354.jpg') }}" class="card-img-top" alt="Prato executivo de parmegiana">
                    <div class="card-body">
                        <h6 class="card-title">Prato executivo de parmegiana</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <h1 id="bebidas" class="text-center display-4">Bebidas</h1><br>
    <div class="row row-cols-2 row-cols-md-3">
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/caipirinha-354x354.jpg') }}" class="card-img-top" alt="Caipirinha">
                    <div class="card-body">
                        <h6 class="card-title">Caipirinha</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('images/caipirinha-354x354.jpg') }}" class="card-img-top" alt="Caipirinha">
                    <div class="card-body">
                        <h6 class="card-title">Caipirinha</h6>
                        <p class="card-text">R$ 0,00</p>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
@stop
