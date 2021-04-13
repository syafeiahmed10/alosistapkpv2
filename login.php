<?php
session_start();
require 'function.php';

// Kalau session masih ada ga boleh di halaman ini lempar ke index.php
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// jika tombol login dipencet, cek username dan password
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    

    if ($alosistapkpv2->user->countDocuments(['username'=>$username]) === 1) {
        if(password_verify($password, $$alosistapkpv2->user->findOne(['username'=>$username])->password)) {
            $_SESSION["login"] = $username;
            header("Location: index.php");
            exit;
        }
        else {
            $_SESSION["BAD_MESSAGE"] = "Kata Sandi Salah";    
        }
       
    }
    else {
        $_SESSION["BAD_MESSAGE"] = "Nama Pengguna Belum Terdaftar Hubungi Pengelola Aplikasi";
       
    }
    
}

?>
<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alosista PKP 2.0</title>
    <meta name="description" content="Alosista PKP 2.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">

                    <img class="align-content logojateng" src="images/alosistapkpv2.png" alt="">

                </div>
                <div class="text-center">
                    <h2 class="align-content">Alosista PKP 2.0</h2>
                </div>
                <?php if (isset($_SESSION["BAD_MESSAGE"])) : ?>
                    <div class="alert alert-danger"> <?php echo $_SESSION["BAD_MESSAGE"]; ?> </div>
                    <?php unset($_SESSION['BAD_MESSAGE']); ?>
                <?php endif; ?>

                <div class="login-form bg-dark">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label class="logintext">Nama Pengguna</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="logintext">Kata Sandi</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div> -->
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        setTimeout(function() {
            let alert = document.querySelector(".alert");
            alert.remove();
        }, 3000);
    </script>

</body>

</html>