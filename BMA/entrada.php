<?php
//login_success.php  
session_start();

if (!isset($_SESSION['boasVindas'])) {
    header('Location:index.php');
    exit();
}
$boasVindas = $_SESSION['boasVindas'];
$_SESSION['boasVindas'] = '';
$nomeProfessor = $_SESSION['nomeProfessor'];
//$_SESSION['nomeProfessor'] = '';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">

</head>

<body>
    <!-- LOGO -->
    <?php
    require("includes/menu.php");
    ?>
    <div class="text-center mt-5">
        <text class="text-center" id="erro"><?= $boasVindas ?></text>
        <h1>Professor <?= $nomeProfessor ?></h1>
    </div>
    <!-- Inserir Sumários Card  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl col-md-6 mb-4 ms-2">
                <a href="registosumarios.php">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 text-center mt-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Inserir Sumários</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-pencil-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Listar todos os Sumários Card  -->
            <div class="col-xl col-md-6 mb-4 ms-2">
                <a href="listasumarios.php">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 text-center mt-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Listar Sumários</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-list-task"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Registar Faltas Card  -->
            <div class="col-xl col-md-6 mb-4 ms-2">
                <a href="registofaltas.php">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 text-center mt-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Registar Faltas</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-pencil"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- LOGOUT  Card -->
            <div class="col-xl col-md-6 mb-4 ms-2">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 text-center mt-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <a href="logout.php"> Logout
                                </div>
                                </a>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require('includes/footer.php');
            ?>
        </div>
    </div>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        setTimeout(function() {

            $("#erro").hide()
        }, 2000);
    </script>
</body>

</html>