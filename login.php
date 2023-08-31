<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Kesehatan Ibu Hamil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navabr-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Klasifikasi Kesehatan Ibu Hamil</a>
                </div>
            </div>
    </nav>       
    </div>

    <div class="login-clean">
        <form method="post" action="proses/proses_login.php">
            <h2 class="sr-only">Login Form</h2>
           <div class="illustration"><img src="assets/img/home.jpg " class="img-responsive img-circle" > </div>
            <div class="form-group"><input class="form-control" placeholder="Username" name="username" type="username" required ></div>
            <div class="form-group"><input class="form-control" placeholder="Password" name="password" type="password" required ></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div></form>
    </div>
    <div class="footer-basic">
        <footer>
            <p class="copyright">Duita Rofika © <?php echo date("Y") ?></p>
        </footer>
    </div>
    
</body>


</html>
