<?php 
if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <title>MulheresEmTech30+</title>
</head>

<body>
    <!-- nav -->
    <nav>
        <div class="container">
            <div class="logo">
                <h2>MulheresEmTech30+</h2>
            </div>
            <ul>
                <a href="index.php">Home</a>
                <a href="historia.php">História</a>
                <a href="carreira.php">Carreira</a>
                <a href="trilhas.php">Trilhas_Tech</a>
                <?php if(isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) {?>
                    <a href="logout.php">Logout</a>
                <?php } else { ?>
                    <a href="login.php">Login</a>
                <?php } ?>
            </ul>
            <div class="menu-icon">
                <img src="images/icon-hamburger.svg">
            </div>
        </div>
    </nav>
    <!-- end nav -->
    
