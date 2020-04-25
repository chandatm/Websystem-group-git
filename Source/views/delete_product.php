<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
  <!-- navbar -->
  <?php
  if ($_SESSION['UserType'] == "admin")
  {
      // Display Admin navbar
      include("../shared/admin/admin_navbar_template.php");
  }
  else if ($_SESSION['UserType'] == "vendor")
  {
      // Display Vendor navbar
      include("../shared/vendor/vendor_dashboard_navbar_template.php");
  }
  else
  {
      // Display Guest navbar
      include("../shared/main_navbar_template.php");
  }
  ?>

  <div class="container">
        <table class="table">
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Manufacturer</th>
                <th>Manufacturer Date</th>
                <th>Product Type</th>
                <th>Product Description</th>
                <th>Cost Price</th>
                <th>Slaes Price</th>
                <th>Quantity</th>
                <th>Image</th>
            </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "jselectronic") or die ("Could not connect to database");
    
                $query = "SELECT * FROM products";

                $runqry = mysqli_query($conn, $query) or die("</br></br>Could not find data.");

                while($row = mysqli_fetch_assoc($runqry))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['ProductId'];?></td>
                        <td> <?php echo $row['Name']; ?> </td>
                        <td> <?php echo $row['Code']; ?> </td>
                        <td> <?php echo $row['Manufacturer']; ?> </td>
                        <td> <?php echo $row['ManufacturerDate']; ?> </td>
                        <td> <?php echo $row['Type']; ?> </td>
                        <td> <?php echo $row['Description']; ?> </td>
                        <td> <?php echo $row['CostPrice']; ?> </td>
                        <td> <?php echo $row['SalesPrice']; ?> </td>
                        <td> <?php echo $row['Quantity']; ?> </td>
                        <td> <?php echo $row['Image']; ?> </td>6
                    </tr>
                    <?php

                }
            ?>
        </table>
        <div class="row">
            <form action="delete_product.php" method="POST">
                <div class="form-group"><input class="form-control" type="text" name="id" placeholder="Product Id" required ></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="delete" style="background-color: rgb(23,21,146);">Delete</button></div>
            </form>
        </div>
        
        <?php 
            if(isset($_POST['delete'])){

                $id = $_POST['id'];
                $conn = mysqli_connect("localhost", "root", "", "jselectronic") or die ("Could not connect to database");

                if($conn)
                {
                    $query = "DELETE FROM `products` WHERE `ProductId`=$id";

                    $runqry = mysqli_query($conn, $query) or die("</br>Could not find data.");
            
                    mysqli_close($conn);
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $location . '">';
            
                }
    
            }//end if
        ?> 
    </div>

  <!-- footer -->
  <?php include '../shared/footer_template.php' ?>

  <!-- javascript -->
  <?php include '../shared/javascript_template.php'?>
</body>
</html>
