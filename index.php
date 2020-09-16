<?php
/**
 * date: 16.09.2020
 * author: Alexander.Kuziv
 * email: alexander@makklays.com.ua
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>La agenda de contactos en PHP</title>
    <meta name="description" content="La agenda de contactos en PHP" />
    <meta name="keywords" content="agenda, contactos, php" />
    <link rel="canonical" href="http://agenda/" />
    <meta name="author" content="Makklays" />

    <!-- добавляем скрипты css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- добавляем скрипты js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <main role="main">
        <div class="container">
            <h1>La agenda de contactos en PHP</h1>

            <a href="/list.php" class="" >Ver lista de contactos</a>
            <br/>
            <br/>

            <div class="row">
                <div class="col-md-6">
                    <h2>Agregar contacto</h2>
                    <div class="alert alert-success text-left" style="margin: 30px 0 0 0;">
                        Tiene la opción de agregar un contacto y sus números de teléfono.
                    </div>

                    <form action="/api/add.php" method="post" class="">
                        <div class="form-group row">
                            <label for="id-nombre" class="col-md-12 col-form-label text-md-left">Nombre</label>
                            <div class="col-md-12">
                                <input id="id-nombre" type="text" class="form-control " name="nombre" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id-apellidos" class="col-md-12 col-form-label text-md-left">Apellidos</label>
                            <div class="col-md-12">
                                <input id="id-apellidos" type="text" class="form-control " name="apellidos" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id-ano" class="col-md-12 col-form-label text-md-left">Ano de nacimiento</label>
                            <div class="col-md-12">
                                <input id="id-ano" type="text" class="form-control " name="ano" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id-prefijo" class="col-md-12 col-form-label text-md-left">Prefijo mundial</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="telefonos[1][prefijo]" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id-numero" class="col-md-12 col-form-label text-md-left">Numero</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="telefonos[1][numero]" value="">
                            </div>
                        </div>

                        <a id="id_anada_tel" href="">Agregar otro número de teléfono</a> <br/><br/>

                        <input type="submit" value="Agregar" class="btn btn-success text-center">
                    </form>
                </div>

            </div>
        </div>
    </main>
</body>
</html>
