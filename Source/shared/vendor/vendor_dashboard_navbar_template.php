<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/vendor/vendor_head_template.php' ?>

<header>
    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../views/vendor/vendor_dashboard.php">J’s Electronics Vendor Dashboard</a>
            </div>
            <div class="navigation">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../../views/vendor/vendor_dashboard.php">Home</a>
                            </li>
                            <li class="current">
                                <a href="../../views/Products.php">Products</a>
                            </li>
                            <li>
                                <a href="../../views/vendor/vendor_account_details.php">My Account</a>
                            </li>
                            <li>
                                <a href="../../views/vendor/vendor_logout.php">Logout</a>
                            </li>
                            <li>
                            <form action="../../views/search_product.php" method="POST">
                                <div class="nav-item"><input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search"></div>
                                <div class="nav-item"><button class="btn btn-primary btn-block" type='submit' name='btn_search' style="background-color: rgb(23,21,146);">Search</button></div>
                            </form>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
</header>
<br><br><br>
</html>