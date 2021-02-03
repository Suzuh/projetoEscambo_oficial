<!DOCTYPE html>
<?php
    require_once'SRC/bd/bd.php';
    $u = new Usuario;
?>

<html lang="pt-BR">

<head>
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="javascript:void(0)">

    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content="Caio Matheus dos Santos Abra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <!-- boostrap -->
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap.rtl.min.css">

    <link rel="stylesheet" href="public/css/index.css">

</head>

<body id="login">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>
                            Welcome
                        </h3>
                    </div>

                    <form method="POST">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nome" class="form-label">User</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="8">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-md-start">
                                <button type="submit" class="btn btn-primary">Link Start</button>
                            </div>
                        </div>
                    </form>
                        
                    <?php
                        //verificar se clicou no botão
                        if (isset($_POST['nome'])){
                            $user = addslashes($_POST['nome']);
                            $senha = addslashes($_POST['password']);
                            if(!empty($user)&& !empty($senha)){
                                $u -> conectar();
                                $u -> logar();
                            }else{
                                echo "<div class='text-center bg-warning'>Preenche tudo ai, animal!</div>";
                            };
                        };
                    ?>
                </div>  
            </div>
        </div>
    </div>

    <script src="public/lib/jquery-3.5.1.js"></script>
    <script src="public/lib/popper/popper.js"></script> 
    <!-- <script src="public/lib/popper/popper.min.js.map"></script>  -->
    <script src="public/js/index.js"></script>
    <!-- boostrap -->
    <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.esm.min.js"></script> -->
    <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>