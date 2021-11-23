@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($casa as $uniquecasa)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{$uniquecasa->id}}</div>

                <div class="card-body">
                    <div class="anuncio">
                        <img src="../assents/img/anuncio2.jpg" alt="Anuncio casa de lujo">
                        <div class="contenido-anuncio">
                            <h3>{{$uniquecasa->nombre}}</h3>
                            <p>{{$uniquecasa->description}}</p>
                            <p class="precio">{{$uniquecasa->price}}</p>
                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img src="../assents/img/icono_wc.svg" alt="icono wc">
                                    <p>3</p>
                                </li>
                                <li>
                                    <img src="../assents/img/icono_estacionamiento.svg" alt="icono autos">
                                    <p>3</p>
                                </li>
                                <li>
                                    <img src="../assents/img/icono_dormitorio.svg" alt="icono habitaciones">
                                    <p>4</p>
                                </li>
                            </ul>

                            <a href="anuncio" class="boton boton-amarillo d-block">Ver Propiedad</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
            <!--anuncio-->
        </div>
    </div>
</div>
@endsection
