<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-primary">
            <div class="nav navbar-nav">
               <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#modalId">Usuario</button>
                <a class="nav-item nav-link text-white" href="index.php">Home</a>
                <a class="nav-item nav-link text-white" href="descripcion.php">Descripción</a>
            </div>
        </nav>

    </header>
    <main>

        <!-- ========== Start bloque 1 ========== -->
        <section class="mb-5">

            <div class="container-fluid colorFondo2">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-xl-6 text-white mt-5 h-25">
                        <div class="w-100">
                            <h1 class="text-center">Resolvemos <span class="spanDudas">tus dudas</span></h1>
                            <div class="accordion mt-5 mb-5 rounded-5 overflow-hidden" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            ¿Necesito experiencia previa para hacer el Bootcamp de programación Full
                                            Stack?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-start fs-5 p-5">No hace falta que tengas conocimientos
                                                previos en programación, aunque todo
                                                lo que sepas te ayudará a sacarle mayor partido al bootcamp.<br>

                                                Sí es necesario que tengas conocimientos avanzados de ofimática.<br>

                                                Para más información, consulta con nuestros asesores académicos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Necesito experiencia previa para hacer el Bootcamp de Data Science?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span class="text-center fs-5 p-5">
                                                Sí es necesario que tengas conocimientos avanzados de ofimática.<br><br>

                                                Además, recomendamos conocimientos básicos en matemáticas y
                                                estadística:<br><br>
                                                </span>
                                            <ul class="text-start fs-5">
                                                <li>Álgebra lineal. Matrices y operaciones con matrices, vectores,
                                                    dimensiones en el espacio (qué es un vector, una dimensión, n
                                                    dimensiones, un plano en el espacio…). También te recomendamos
                                                    repasar la resolución de ecuaciones de primer y segundo grado.</li>
                                                <li class="mt-3">Cálculo diferencial. Qué es el cálculo diferencial para qué sirve y
                                                    cómo se aplica, derivadas básicas.
                                                    Probabilidad y estadística. Estadística descriptiva (media, mediana,
                                                    moda, desvío estándar, test de hipótesis…).
                                                    Para más información, consulta con nuestros asesores académicos.
                                                </li>
                                            </ul>


                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Necesito experiencia previa para hacer el Bootcamp de Tech Sales?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                             <p class="text-start fs-5 p-5">No hace falta que tengas conocimientos previos para realizar este Bootcamp en Tech Sales, aunque todo lo que sepas te ayudará a sacarle mayor partido al bootcamp.<br>

                                                Sí es necesario que tengas conocimientos avanzados de ofimática.<br><br>

                                                Conviene, aunque no es para nada necesario, que tengas algo de experiencia previa en ventas o relaciones con clientes.</br>
                                                Para más información, consulta con nuestros asesores académicos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Es necesario un portátil para realizar el bootcamp?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-start fs-5 p-5">
                                                Sí, para todos nuestros bootcamp presenciales necesitamos que traigas un equipo portátil. Así trabajarás con tu propio equipo desde un principio, podrás tener todos tus proyectos en un solo lugar y podrás hacer trabajo desde tu casa.<br><br>
                                                Te recomendamos un ordenador con menos de 4 años de antigüedad que pueda soportar los diferentes programas de programación.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Por qué ID Bootcamps?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
    
                                                <ul class="text-start fs-5 p-5">
                                                    <li>Mira lo que dicen nuestros bootcampers que ya han pasado por las aulas en sus reseñas de Google.</li>
                                                    <li>Tenemos más de 10 años de experiencia en formación a través de ID Digital School, ofreciendo másteres oficiales en colaboración con la Universidad Camilo José Cela.</li>
                                                    <li>Contamos con el apoyo de Selecta Digital, consultora de recursos humanos especializada en perfiles IT</li>
                                                    <li>Nuestros profesores son profesionales en activo, en contacto directo con el mercado laboral al que vas a salir una vez finalizado tu bootcamp.</li>
                                                </ul>



                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Contáis con becas para los alumnos?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-start fs-5 p-5">
                                                Claro, tenemos varios programas de becas para ayudarte con tu formación. Consulta con nuestros asesores académicos, ellos te explicarán mejor nuestras becas y a cuál puedes aplicar.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseThree">
                                           ¿Tenéis opciones de financiación?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                             <p class="text-start fs-5 p-5">
                                                Sí, contamos con diferentes opciones de pagos y de financiación. Consulta con nuestros asesores académicos para ver cuál es la opción que mejor se adapta a ti.

                                             </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Qué pasa una vez finaliza el bootcamp?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                             <p class="text-start fs-5 p-5">
                                               Nuestro compromiso contigo va más allá de tu formación. Queremos acompañarte en tu proceso de búsqueda de empleo, por eso, de la mano de Selecta Digital (consultora de recursos humanos especializada en perfiles IT) hemos diseñado un programa de carreras profesionales para ayudarte tanto durante como al finalizar el bootcamp.<br><br>

Una vez termine tu formación, saldrás con un perfil Junior y podrás incorporarte al mercado laboral.<br>

En esta página puedes ver toda la información de nuestro servicio.

                                             </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseThree">
                                           ¿Qué diferencia hay entre un Bootcamp y un Máster?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-start fs-5 p-5">
                                                Los bootcamps son formaciones muy prácticas y muy intensas. Su objetivo es que en 450 horas salgas con un perfil junior. Un máster suele tener una duración más extensa (de uno a dos años) y tener un carácter más teórico. Un bootcamp es, por tanto, mucho más condensado que un máster.<br><br>

                                                En nuestro caso elegimos los bootcamps tecnológicos para nuestra formación en cuestión de poco tiempo puedes alcanzar un nivel muy alto de conocimiento en una materia.

                                            </p>
                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </section>



<?php include "modal.php";?>

        <!-- ========== End bloque 1 ========== -->


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
        <script src="js/landing.js"></script>
</body>

</html>