<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../shared/main_navbar_template.php' ?>

<!-- Section about -->
<section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 70px;">
                <div class="heading">
                    <h3><span>Who are you?</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        We offer affordable and <strong>RELIABLE</strong> services to  our customers.
                    </p>
                </div>
                <form action="accounts_validate.php" method="post" style="margin-bottom: 70px;">
                    <div class="text-center">
                        <button type="submit" name="btnVendorLogin" class="btn btn-primary btn-lg">I am a Vendor</button>
                        <button type="submit" name="btnAdminLogin" class="btn btn-theme btn-lg">Administrator</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end section about -->


<!-- footer -->
<?php include '../shared/footer_template.php' ?>

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>