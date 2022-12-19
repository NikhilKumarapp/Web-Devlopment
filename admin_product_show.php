<?php
@include 'config.php';
session_start();

$select = mysqli_query($conn, "SELECT * FROM products ");

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style5.css">
<div class="product-display">
   <table class="product-display-table" >
      <thead>
      <tr>
         <th>product image</th>
         <th>product name</th>
         <th>Vendar name</th>
         <th>product category</th>
         <th>product price</th>
         <th>action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['vendar']?> </td>
         <td><?php echo $row['category']; ?></td>
         <td>Rs.<?php echo $row['price']; ?>/-</td>
         <td>
            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
            <a href="try.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
         </td>
      </tr>
   <?php } ?>
  
  <?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_vendar=$_POST['product_vendar'];
   $product_user_id=$_POST['product_user_id'];
   $product_category=$_POST['product_category'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `products` (`name`, `price`,`vendar`, `image`, `user_id`, `category`) VALUES ('$product_name', '$product_price', '$product_vendar','$product_image', '$product_user_id','$product_category')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:try.php');
};

?>