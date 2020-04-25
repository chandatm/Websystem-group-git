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
                <th>Product ID</th>
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
    
            if(isset($_POST['btn_search'])){
                
                $searchvalue = "";
                $searchvalue = $_POST['search'];
                
                $query = "SELECT * FROM products WHERE Name LIKE '%$searchvalue%' 
                OR Type LIKE '%$searchvalue%' OR Manufacturer LIKE '%$searchvalue%'";

                $runqry = mysqli_query($conn, $query) or die("</br></br>Could not find data.");

                while($row = mysqli_fetch_assoc($runqry))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['ProductId']; ?> </td>
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
            }
            ?>
        </table> 
    </div>
  <!-- footer -->
  <?php include '../shared/footer_template.php' ?>

  <!-- javascript -->
  <?php include '../shared/javascript_template.php'?>
</body>
</html>
