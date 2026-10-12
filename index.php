<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
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
                <a class="nav-item nav-link text-white" href="preguntas.php">Preguntas Frecuentes</a>
            </div>
           </nav>
           
        </header>
        <main>

<!-- ========== Start bloque 1 ========== -->
<section class="mb-5">

<div class="container-fluid colorFondo claseindex mt-5">
    <div class="row">
        <div class="col-12 col-xl-9 text-white mt-5 h-25">
            <div class="mx-auto w-75">
                <h1 class="textboot text-start">
                    <span class="text-uppercase"> Bootcamp en<br></span>
                    <span class="text-white">Programación y desarrollo web Full Stack</span>
                </h1>


               <div class="row">
                <div class="col-12 col-md-6 col-xl-3"><i class="bi bi-journal fs-4 text-primary fw-bold"></i> <span class="fw-bold">Presencial / Híbrido</span> </div>
                <div class="col-12 col-md-6 col-xl-3"><i class="bi bi-ticket-perforated fs-4 text-primary fw-bold"></i> <span class="fw-bold">6250€</span> </div>
                <div class="col-12 col-md-6 col-xl-3"><i class="bi bi-clock fs-4 text-primary fw-bold"></i> <span class="fw-bold">450 horas</span> </div>
                <div class="col-12 col-md-6 col-xl-3"><i class="bi bi-journal fs-4 text-primary fw-bold"></i> <span class="fw-bold">Full-Time</span></div>
               </div>
              
            </div>
        </div>

        

    </div>
</div>
</section>
<section class="mb-5">
<div class="container-fluid claseText">
<div class="row d-flex justify-content-end">

<div class="col-12 col-xl-3 text-white mb-5 claseTop">
            <div class="card opacity-75 h-100 rounded-5">
                <div class="card-body h-100">
                    <h4 class="card-title text-center">¿Quieres saber más?</h4>
                    <form name="registroUsuario" method="post">
                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="NombreUsuario"
                            id="NombreUsuario"
                            aria-describedby="helpId"
                            placeholder="Nombre*"
                        />
                     
                    </div>

                     <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="apellidosUsuario"
                            id="apellidosUsuario"
                            aria-describedby="helpId"
                            placeholder="Apellidos*"
                        />
                     
                    </div>
                     <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="emailUsuario"
                            id="emailUsuario"
                            aria-describedby="helpId"
                            placeholder="Email*"
                        />
                     
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Numero de telefono <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            class="form-control"
                            name="telefonoUsuario"
                            id="telefonoUsuario"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                     
                    </div>

                        <div class="mb-3">
                            <select
                                class="form-select form-select-lg"
                                name="modalidad"
                                id="modalidad"
                            >
                                <option selected value="">¿Qué modalidad te interesa?*</option>
                                <option value="Presencial">Presencial</option>
                                <option value="A distancia">A distancia</option>
                                <option value="Desconocida">Desconocida</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <textarea class="form-control" name="mensajeUsuario" id="mensajeUsuario" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        
                        

                    <div class="form-check">
                        <input class="form-check-input" name="aceptoPolitica" type="checkbox" value="Y" id="aceptoPolitica" />
                        <label class="form-check-label" for=""> Acepto recibir información de ID Digital School sobre promociones, eventos y otras actividades de interés </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id=""
                            checked
                        />
                        <label class="form-check-label" for=""> Acepto que ID Digital School almacene y procese mis datos personales.* </label>
                    </div>
                    <p class="mt-3">De conformidad con la Ley de Protección de Datos Personales y Garantía de los Derechos Digitales y del Reglamento General sobre Protección de Datos de Carácter Personal, le informamos que la información enviada podrá ser objeto de un tratamiento de datos responsabilidad de ID Digital School (IBERANÁLISIS, S.L.) cuya finalidad es atender la petición realizada. Política De Privacidad.</p>
                   <div><button type="button" class="btn btn-primary fs-5 mt-5" onclick="validar()">Enviar</button></div>
                    </form>
                </div>
            </div>
            
        </div>



</div>
</div>

</section>





<?php include 'modal.php'; ?>



<!-- ========== End bloque 1 ========== -->






















        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <script src="js/landing.js"></script>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
