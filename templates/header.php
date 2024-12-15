<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba IoT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="src">
    <link rel="shortcut icon" href="./images/algo-_Custom_.ico" type="image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="module" src="../src/login.js"></script>
    <?php require './templates/style.php'?>
</head>

<body>
    <!-- barra de navegacion -->
    <nav class="navbar navbar-expand-lg bg-black navbar-dark" id = 'navegacion'>
        <!-- <a href="login.php" ><img src="../images/bexe (Custom).png" alt=""></a> -->
         <a href="login.php"><img src="../images/algo (Custom).png" alt=""></a>
    <div class="container-fluid ">
        <a class="navbar-brand" href="login.php" ><strong>CR INDUSTRIES - IoT</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active logged-out" aria-current="page" href="#"><strong>Home</strong></a>
            <a class="nav-link logged-out" href="#who"><strong>Who are we?</strong></a>
            <a class="nav-link logged-out" href="#" data-bs-toggle = "modal" data-bs-target = '#modalSingIn'><strong>Sing in</strong></a>    
            <a class="nav-link logged-out" aria-disabled="true" data-bs-toggle = "modal" data-bs-target = '#modalSingUp'><strong>Sing up</strong></a>
            <a class="nav-link logged-in" id = "salir"><strong>Log Out</strong></a>

        </div>
        </div>
    </div>
    </nav>

    <!-- modal singin -->
    <div class="modal" tabindex="-1" id = 'modalSingIn'>
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title " style = 'color:azure'><strong>Sing In </strong></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- formulario para el modal -->
                    <form id='formaSingin'>
                        <label for="email" style = 'color:azure' >E-mail</label>
                        <input type="email" id='correo' placeholder = 'example@example.com' class = 'form-control mb-4' require autocomplete = "email">
                        <label for="password" style = 'color:azure' >password</label>
                        <input type="password" id='contrasena' placeholder = '*******' class = 'form-control mb-4' require autocomplete = "email">
                        <button type='submit' class = 'btn btn-primary'>Login</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>

        <!-- modal singup -->
        <div class="modal" tabindex="-1" id = 'modalSingUp'>
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title " style = 'color:azure'><strong>Sing Up </strong></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- formulario para el modal singup-->
                    <form id='formaSingup'>
                        <label for="email" style = 'color:azure'>E-mail</label>
                        <input type="email" id='correosingup' placeholder = 'example@example.com' class = 'form-control mb-4' require autocomplete = "email">
                        <label for="password" style = 'color:azure' >password</label>
                        <input type="password" id='contrasenasingup' placeholder = '*******' class = 'form-control mb-4' require autocomplete = "email">
                        <button type='submit' class = 'btn btn-primary'>Login</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>



