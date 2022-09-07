<?php
//login_success.php  
session_start();
if (!isset($_SESSION['boasVindas'])) {
    header('Location:index.php');
    exit();
}
$erro = $_SESSION['boasVindas'];
$_SESSION['boasVindas'] = '';
$nomeProfessor = $_SESSION['nomeProfessor'];
$_SESSION['nomeProfessor'] = '';
echo $nomeProfessor;
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
    <style>

    </style>

</head>

<body>
    <div class="text-center">
        <text class="text-center" id="erro"><?= $erro ?></text>
        <h1>PÁGINA EM CONSTRUÇÃO</h1>
        <a href="logout.php">Logout</a>

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