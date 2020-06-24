<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Liste des Produits
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Titre</th>                       
                        <th>Image</th>
                        <th>Description</th>
                        <th>Infos</th>
                        <th>Prix</th>
                        <th>Date</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $connection = mysqli_connect('Localhost','root','','perfectcup');
                            $query = "SELECT * FROM produits";
                            $load_products_query = mysqli_query($connection,$query);

                            if (!$load_products_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_products_query)) {
                                $id_produit = $row['id_produit'];
                                $titre_produit = $row['titre_produit'];
                                $image_produit = $row['image_produit'];
                                $desc_produit = $row['desc_produit'];
                                $infos_produit = $row['infos_produit'];
                                $prix_produit = $row['prix_produit'];
                                $date_produit = $row['date_produit'];


                                echo "<tr>";
                                echo "<td>$id_produit</td>";
                                echo "<td>$titre_produit</td>";
                                echo "<td><img class= 'img-responsive' src='../img/$image_produit' alt=''></td>";
                                echo "<td>$desc_produit</td>";
                                echo "<td>$infos_produit</td>";
                                echo "<td>$prix_produit</td>";
                                echo "<td>$date_produit</td>";
                                echo "<td> <a href='modifier_produits.php?modifier=$id_produit'>Modifier</a></td>";
                                echo "<td><a href='voir_produits.php?supprimer=$id_produit'>Supprimer</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['supprimer'])) {
                                $supprimer_produit_id = $_GET['supprimer'];

                                $supprimer_query = "DELETE FROM produits WHERE id_produit = $supprimer_produit_id";
                                $supprimer_product_query = mysqli_query($connection,$supprimer_query);

                                header('Location: voir_produits.php');
                            }

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>