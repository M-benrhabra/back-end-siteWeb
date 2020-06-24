<?php include "admin_header.php" ?>
<?php 

$connection = mysqli_connect('Localhost','root','','perfectcup');
if (isset($_GET['modifier'])) {
    $id_prod = $_GET['modifier']; 
}

$modifier_query = "SELECT * FROM produits WHERE id_produit = $id_prod ";
$load_product_query = mysqli_query($connection,$modifier_query);

while($row = mysqli_fetch_array($load_product_query)){
$id_prod = $row['id_produit'];
$titre_prod = $row['titre_produit'];
$image_prod = $row['image_produit'];
$desc_prod = $row['desc_produit'];
$infos_prod = $row['infos_produit'];
$prix_prod = $row['prix_produit'];
}

if (isset($_POST['modifier_produits'])) {
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

    $query = "UPDATE produits SET titre_produit = '$titre_produit' ,image_produit ='$image_produit', desc_produit = '$desc_produit', infos_produit = '$infos_produit', prix_produit = '$prix_produit'  WHERE id_produit = $id_prod ";
    $modifier_produit_query = mysqli_query($connection,$query);

    if (!$modifier_produit_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    
}

?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Modifier le produit
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
             <form action="modifier_produits.php?modifier=<?php echo $id_prod ?>" method="post" enctype="multipart/form-data">    
     
     
                    <div class="form-group">
                        <label for="title">Titre de Produit</label>
                        <input type="text" value = "<?php echo $titre_prod ?>" class="form-control" name="titre_produit">
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
                        <textarea class="form-control" name="desc_produit" id="" cols="30" rows="5"><?php echo $desc_prod ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="infos_produit">Infos de Produit</label>
                        <textarea class="form-control" name="infos_produit" id="" cols="30" rows="5"><?php echo $infos_prod ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="prix_produit">Prix de Produit</label>
                        <input type="number" value = "<?php echo $prix_prod ?>" class="form-control" name="prix_produit">
                    </div>
                    
                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="edit_product" value="Edit product">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>