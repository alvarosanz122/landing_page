
<?php include $_SERVER['DOCUMENT_ROOT'] . '/componentes/controller/helpers/landing-helpers.php'; ?>
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
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand navbar-light bg-primary">
                <div class="nav navbar-nav float-end">
                    <a class="nav-item nav-link text-white" href="index.php">Ir al index</a>
                </div>
            </nav>
            
        </header>
        <main>
          <section class="mt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-xl-9">
                    <?php echo divTableLogin($conexion); ?> 
                    </div>

                </div>
            </div>
          </section>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
