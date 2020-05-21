<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

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
                <a class="navbar-brand" href="../views/index.php">J’s Electronics</a>
            </div>
            <div class="navigation">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="current">
                                <a href="../views/index.php">Home</a>
                            </li>
                            <li>
                                <a href="../views/about_us.php">About</a>
                            </li>
                            <li>
                                <a href="../views/Products.php">Products</a>
                            </li>
                            <li>
                                <a href="../views/accounts_login.php">Login</a>
                            </li>
                            <li>
                                <a href="../views/contact_us.php">Contact Us</a>
                            </li>
                            <li>
                            <form action="search_product.php" method="POST">
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