
<?php session_start(); ?>

<?php include "admin_header.php" ?>

<?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "admin") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>
    
    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>

   