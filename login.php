<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php' ?>

    <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">LOG IN 
                            <strong>form</strong>
                        </h2>
                        <hr>
                        <div id="add_err2"></div>
                        <form role="form" method="post" action="login.php">
                            <!-- <div class="row"> -->
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text"  name="username" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password"  name="password_1" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" id="contact" name="login_user" class="btn btn-default">Login</button>
                                </div>
                                <div class="form-group col-lg-12">
                                <button type="submit" id="contact" class="btn btn-default"><a href="registration.php"> Not a user? Register Here</a></button>
                                </div>
                            <!-- </div> -->
                        </form>
                    </div>
                </div>
            </div>

    </div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2019</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>