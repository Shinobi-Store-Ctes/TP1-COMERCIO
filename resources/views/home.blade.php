@extends('layout.app')

@section('title', 'Inicio')

@section('carrousel')
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h2 id="offcanvasRightLabel">Carrito</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="display">
            <img src="{{ asset('images/productos/camiseta1.png') }}" class="img-thumbnail"
                alt="Camiseta principal River Plate 2024">
            <div>
                <p class="titulo-carrito">Camiseta Principal River Plate 2024</p>
                <p class="subtitulo-carrito"><strong>Talle:</strong> XS</p>
                <p class="subtitulo-carrito"><strong>Precio:</strong> $124.000 ARS</p>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-danger custom-padding ">Pagar</button>
</div>
<!-- FIN CARRITO -->

<!-- CARRUSEL -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Imagen 1 -->
        <div class="carousel-item active">
            <picture>
                <source media="(min-width: 769px)" srcset="{{ asset('images/productos/carro2.png') }}">
                <source media="(min-width: 601px) and (max-width: 768px)"
                    srcset="{{ asset('images/productos/carro2-respo-mobile.png') }}">
                <source media="(max-width: 600px)" srcset="{{ asset('images/productos/carro2-respo-mobile.png') }}">
                <img src="{{ asset('images/productos/carro2.png') }}" class="d-block w-100"
                    alt="Imagen Camiseta Alternativa river plate 2024">
            </picture>
        </div>

        <!-- Imagen 2 -->
        <div class="carousel-item">
            <a href="https://www.tiendariver.com/riverplate/indumentaria/tiempo-libre?PS=50&map=c,c,specificationFilter_35&O=OrderByReleaseDateDESC"
                target="_blank" rel="noopener noreferrer">
                <picture>
                    <source media="(min-width: 769px)" srcset="{{ asset('images/productos/carro1.png') }}">
                    <source media="(min-width: 601px) and (max-width: 768px)"
                        srcset="{{ asset('images/productos/carro1-respo-mobile.png') }}">
                    <source media="(max-width: 600px)" srcset="{{ asset('images/productos/carro1-respo-mobile.png') }}">
                    <img src="{{ asset('images/productos/carro1.png') }}" class="d-block w-100"
                        alt="Imagen Indumentaria Femenina River Plate 2024">
                </picture>
            </a>
        </div>

        <!-- Imagen 3 -->
        <div class="carousel-item">
            <picture>
                <source media="(min-width: 769px)" srcset="{{ asset('images/productos/carro3.png') }}">
                <source media="(min-width: 601px) and (max-width: 768px)"
                    srcset="{{ asset('images/productos/carro3-respo-mobile.png') }}">
                <source media="(max-width: 600px)" srcset="{{ asset('images/productos/carro3-respo-mobile.png') }}">
                <img src="{{ asset('images/productos/carro3.png') }}" class="d-block w-100"
                    alt="Imagen Regalo dia del padre river plate 2024">
            </picture>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- FIN CARRUSEL -->
@endsection

@section('content')
    <!-- INTRODUCCIÓN -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Sobre Nosotros</h2>
                    </div>
                    <p class="lead text-muted">Bienvenido a la tienda oficial de merchandising del Club Atlético River
                        Plate.</p>
                    <p>Fundada en 1901, River Plate se ha consolidado como uno de los clubes más emblemáticos y exitosos del
                        fútbol mundial, representando la pasión y el orgullo de millones de hinchas.

                    </p>
                    <p>
                        Con una amplia gama de productos oficiales, desde camisetas, indumentaria, accesorios y más, nuestra
                        dedicación a la calidad y autenticidad nos permite conectar con los fanáticos de todas las edades.
                        Aquí, cada artículo refleja el espíritu y la historia de River Plate, permitiéndote llevar los
                        colores del Millonario a donde quiera que vayas.


                    </p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <figure>
                        <img src="{{ asset('images/productos/Estadio.jpg') }}" alt="Imagen del Estadio Monumental"
                            class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN INTRODUCCIÓN -->

    <!-- DESCRIPCION DEL PRODUCTO ATRAVES DE MISION -->
    <section id="mision-vision-valores" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Misión -->
                    <div class="mb-4">
                        <i class="fas fa-bullseye fa-4x text-primary mb-3"></i>
                        <h3>Misión</h3>
                        <p class="text-muted">
                            Nuestra misión es ofrecer productos de alta calidad que capturen la esencia y el estilo del Club
                            Atlético River Plate, permitiendo a los hinchas llevar con orgullo el espíritu riverplatense en
                            su día a día.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Visión -->
                    <div class="mb-4">
                        <i class="fas fa-binoculars fa-4x text-primary mb-3"></i>
                        <h3>Visión</h3>
                        <p class="text-muted">
                            Buscamos ser reconocidos como la mejor opción para los hinchas del Club Atlético River Plate,
                            ofreciendo productos exclusivos y experiencias que perduren en el tiempo.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Valores -->
                    <div class="mb-4">
                        <i class="fas fa-heart fa-4x text-primary mb-3"></i>
                        <h3>Valores</h3>
                        <p class="text-muted">
                            Nos regimos por valores como la autenticidad, la calidad y la conexión especial entre los
                            hinchas y el Club Atlético River Plate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN MISIÓN, VISIÓN Y VALORES -->

    <section id="productos-home">
        <div class="row d-flex justify-content-center">
            <div class="title pt-3 pb-5" id="titulo-descuento">
                <h2 class="position-relative d-inline-block ms-4">Explora Nuestra variedad de Camisetas </h2>
            </div>
            <!-- falta cargar catalogos -->
        </div>
    </section>

    <!-- SECCIÓN River ID River Plate -->
    <section id="mas-brillos" class="my-5">
        <div class="container text-center">
            <h2>¡Unite a la Comunidad de River <span class="id">ID</span>!</h2>

            <a href="https://login.riverid.com.ar/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dmiportal%26redirect_uri%3Dhttps%253A%252F%252Fwww.riverid.com.ar%252Fsignin-oidc%26response_type%3Dcode%26scope%3Dopenid%2520profile%26code_challenge%3DBEOf09yYXmJErLdLIYi838uVRRX2gRwP2y0bejl17D4%26code_challenge_method%3DS256%26response_mode%3Dform_post%26nonce%3D638534738542304810.ZWY2NGJjNDctZTM5ZS00MmM1LWI2Y2UtZGYwZTQwNTM4NzMzOTBkNDFlNjYtZDhlZC00ODBhLWEwMTgtNGI1NzM3M2JkNTQw%26state%3DCfDJ8JTEgsQmdT5BsKRGDII6XAyrtweGof77bs07QY5AlF2Xkli_R6XrCEk7tIaQ7pJ9bpwC5SKGppk78Zc7YCtlGEsVL4ZA2SmanNJaGiUXfVvZp4XTbu1uIDh-Hwr0kLWtW_Y8rNSOVTXC7tH7S-sAg0r3-u9OoFDOO68cABBY1fOMAZK0O1d1apcO26hTUPBjjYw5poG3rF2GWC_OAi8MK3_8xV2fX0AUWwItgkBdl05_VOIsWVPwQrL8P-vXR0YLtCiycgJeTgsDysm5H-cOlq9aCbyBxDHpYUd5QbI470SMuDEq68K_Lnm51pqqDigxH-jlhBG9NhS34rOQ7xeuFQVjywqLN10qyxIQQ-DeXGEBdOjkxT2aTt0sacFHVg_vGg%26x-client-SKU%3DID_NET6_0%26x-client-ver%3D6.35.0.0"
                target="_blank">
                <div class="img-container">
                    <picture>
                        <!-- Desktop -->
                        <source media="(min-width: 769px) and (max-width: 1680px)"
                            srcset="{{ asset('images/productos/adicional.png') }}">

                        <!-- Ipad -->
                        <source media="(min-width: 601px) and (max-width: 768px)"
                            srcset="{{ asset('images/productos/adicional-respo.PNG') }}">

                        <!-- Mobile -->
                        <source media="(max-width: 600px)" srcset="{{ asset('images/productos/adicional.png') }}">

                        <img class="img-fluid" src="{{ asset('images/productos/adicional.png') }}"
                            alt="Imagen de Unite a River id y consegui descuentos">
                    </picture>
                </div>
            </a>

            <!-- Guia para Hacerse Socio River Plate -->
            <div class="description mt-3">
                <p class="mt-5">Guía Completa para Hacerte Socio de River Plate ⚽ Incluye:</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span>Documentación requerida</span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p><strong>Documentación requerida: DNI o pasaporte y comprobante de domicilio</strong></p>
                                <p>Para verificar tu identidad y residencia, es necesario que presentes la siguiente
                                    documentación:</p>
                                <ul class="mt-3">
                                    <li>Documento Nacional de Identidad (DNI) o pasaporte.</li>
                                    <li>Comprobante de domicilio reciente (factura de servicios, contrato de alquiler,
                                        etc.).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span>Formulario de inscripción</span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p><strong>Formulario de inscripción con tus datos personales</strong></p>
                                <p>Para iniciar tu inscripción, primero debes completar un formulario con tus datos
                                    personales. Es importante que la información proporcionada sea precisa y actualizada
                                    para evitar inconvenientes. A continuación, te indicamos los pasos a seguir:</p>
                                <ul class="mt-3">
                                    <li>Nombre completo.</li>
                                    <li>Fecha de nacimiento.</li>
                                    <li>Dirección de correo electrónico.</li>
                                    <li>Número de teléfono.</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <span>Información sobre la cuota de inscripción</span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p><strong>Cuota de inscripción inicial y mensualidad</strong></p>
                                <p>Al inscribirte, deberás abonar una cuota inicial y una mensualidad. Estas cuotas permiten
                                    el acceso a múltiples beneficios exclusivos para socios, tales como:</p>
                                <ul class="mt-3">
                                    <li>Acceso a entradas preferenciales para eventos y actividades.</li>
                                    <li>Descuentos en la tienda oficial.</li>
                                    <li>Promociones especiales y mucho más.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información adicional -->
            <div class="additional-info mt-3">
                <h4>Información Adicional</h4>
                <p>Descubre más sobre este RIVER ID en <a
                        href="https://login.riverid.com.ar/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dmiportal%26redirect_uri%3Dhttps%253A%252F%252Fwww.riverid.com.ar%252Fsignin-oidc%26response_type%3Dcode%26scope%3Dopenid%2520profile%26code_challenge%3DBEOf09yYXmJErLdLIYi838uVRRX2gRwP2y0bejl17D4%26code_challenge_method%3DS256%26response_mode%3Dform_post%26nonce%3D638534738542304810.ZWY2NGJjNDctZTM5ZS00MmM1LWI2Y2UtZGYwZTQwNTM4NzMzOTBkNDFlNjYtZDhlZC00ODBhLWEwMTgtNGI1NzM3M2JkNTQw%26state%3DCfDJ8JTEgsQmdT5BsKRGDII6XAyrtweGof77bs07QY5AlF2Xkli_R6XrCEk7tIaQ7pJ9bpwC5SKGppk78Zc7YCtlGEsVL4ZA2SmanNJaGiUXfVvZp4XTbu1uIDh-Hwr0kLWtW_Y8rNSOVTXC7tH7S-sAg0r3-u9OoFDOO68cABBY1fOMAZK0O1d1apcO26hTUPBjjYw5poG3rF2GWC_OAi8MK3_8xV2fX0AUWwItgkBdl05_VOIsWVPwQrL8P-vXR0YLtCiycgJeTgsDysm5H-cOlq9aCbyBxDHpYUd5QbI470SMuDEq68K_Lnm51pqqDigxH-jlhBG9NhS34rOQ7xeuFQVjywqLN10qyxIQQ-DeXGEBdOjkxT2aTt0sacFHVg_vGg%26x-client-SKU%3DID_NET6_0%26x-client-ver%3D6.35.0.0"
                        target="_blank" class="id">nuestro sitio web</a>.</p>
            </div>
        </div>
    </section>
    <!-- FIN DETALLE -->



    <!-- SECCIÓN PROXIMOS PARTIDOS -->
<!-- SECCIÓN NOTICIAS -->
<section id="seccion-libre" class="my-5 bg-light-blue">
    <div class="container text-center">
        <div class="title pt-3 pb-5">
            <h2 class="position-relative d-inline-block ms-4">Últimas Novedades</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @forelse($noticias as $noticia)
                <div class="col">
                    <div class="card h-100">
                        @if ($noticia->foto)
                            <img src="{{ asset('images/' . $noticia->foto) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $noticia->titulo }}</h5>
                            <p class="card-text">{{ $noticia->contenido }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No hay novedades por el momento.</p>
            @endforelse
        </div>
    </div>
</section>


@endsection