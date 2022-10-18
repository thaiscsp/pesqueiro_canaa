@extends('layouts.master')
@section('title', 'Pesqueiro Canaã')

@section('content')
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