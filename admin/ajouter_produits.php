<?php include "admin_header.php" ?>
<?php 

if (isset($_POST['ajouter_produits'])) {
    $titre_produit = $_POST['titre_produit'];
    $image_produit = $_FILES['image']['name'];
    $produit_image_temp = $_FILES['image']['tmp_name'];
    $desc_produit = $_POST['desc_produit'];
    $infos_produit = $_POST['infos_produit'];
    $prix_produit = $_POST['prix_produit'];

    move_uploaded_file($produit_image_temp, "../img/$image_produit");

    $titre_produit = mysqli_real_escape_string($connection,$titre_produit);
    $image_produit = mysqli_real_escape_string($connection,$image_produit);
    $desc_produit = mysqli_real_escape_string($connection,$desc_produit);
    $infos_produit = mysqli_real_escape_string($connection,$infos_produit);

    $query = "INSERT INTO produits(titre_produit,image_produit,desc_produit,infos_produit,prix_produit) VALUES ('$titre_produit','$image_produit','$desc_produit','$infos_produit',$prix_produit)";
    $ajouter_produit_query = mysqli_query($connection,$query);

    if (!$ajouter_produit_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
}

?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajouter un Produit
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="ajouter_produits.php" method="post" enctype="multipart/form-data">    
     
     
                    <div class="form-group">
                        <label for="title">Titre de Produit</label>
                        <input type="text" class="form-control" name="titre_produit">
                    </div>

                    <!-- <div class="form-group">
                        <select name="post_status" id="">
                            <option value="draft">Post Status</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div> -->
      
      
      
                    <div class="form-group">
                        <label for="image_produit">Image de Produit</label>
                        <input type="file"  name="image">
                    </div>

                    
                    <div class="form-group">
                        <label for="desc_produit">Description de Produit</label>
                        <textarea class="form-control "name="desc_produit" id="" cols="30" rows="5">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="infos_produit">Infos de Produit</label>
                        <textarea class="form-control "name="infos_produit" id="" cols="30" rows="5">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="prix_produit">Prix de Produit</label>
                        <input type="number" class="form-control" name="prix_produit">
                    </div>
                    
                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="ajouter_produits" value="Ajouter un produit">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>