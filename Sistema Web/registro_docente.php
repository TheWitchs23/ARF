<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Register</title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-black-900 mb-4">Registro</h1>
                            </div>
                                                                            

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">       
<br>
                    <div class="col-sm-6">
                        <img src="img/logo.png" width="500px" class="img-fluid">
                    </div>

                    <div class="col-sm-6">
                    <form method="post" action="guarda.php">
                                                        <div class="row gtr-uniform">
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="nombre_completo" value="" placeholder="Nombre Completo" />
                                                            </div>
                                                                <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="correo"  value="" placeholder="correo" />
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="telefono" value="" placeholder="Teléfono" />
                                                            </div>
                                                            <div class="col-12">
                                        <h5> Carreras</h5>
                                        <label for="">Primera carrera</label>
                                        <select name="carrera" >
                                            <option value="agricultura sustentable y protegida">Agricultura Sustentable y Protegida</option>
                                            <option value="operaciones comerciales e internacionales">Operaciones Comerciales e Internacionales</option>
                                            <option value="tecnologias de la informacion y comunicacion">Tecnologías de la Información y Comunicación</option>
                                            <option value="gastronomia">Gastronomía</option>
                                            <option value="turismo">Turismo</option>
                                        </select>
                                        <label for="">Segunda carrera</label>
                                        <select name="carrera2" >
                                            <option value="sin segunda carrera">Sin segunda carrera</option>
                                            <option value="agricultura sustentable y protegida">Agricultura Sustentable y Protegida</option>
                                            <option value="operaciones comerciales e internacionales">Operaciones Comerciales e Internacionales</option>
                                            <option value="tecnologias de la informacion y comunicacion">Tecnologías de la Información y Comunicación</option>
                                            <option value="gastronomia">Gastronomía</option>
                                            <option value="turismo">Turismo</option>
                                        </select>
                                
                                    </div>
                                                               
                                                            <!-- Break -->

                                                            <div class="col-12">
                                                                
                                                            </div>
                                                            <!-- Break -->
                                                            <div class="col-12">
                                                                <ul class="actions">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <button type="submit"  action="guarda.php"class="btn btn-success">Registrar</button>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <a href="index1.php" class="btn btn-success">Regresar al Menú</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</h5>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
