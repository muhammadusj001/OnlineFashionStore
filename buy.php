

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Bliz</title>
    <link rel="stylesheet" type="text/css" href="buy.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="buy.css">
</head>

<?php
include "connection.php";
$itemname = $_GET["name"];
$price = $_GET["price"];
?>

<body>

    <header>
        <a class="logolink" href="index.html">
            <h1 class="logo">BLIZ.</h1>
        </a>
        <ul class="nav">
            <li class="home"><a href="index.php" class="hlink">Home</a></li>
            <li class="log"><a href="login.php" class="login">Login</a></li>
            <li class="sign"><a href="signup.php" class="signup">Sign Up</a></li>
            <li class="men"><a href="men.php" class="mlink">Men</a></li>
            <li class="women"><a href="women.php" class="wlink">Women</a></li>
        </ul>
    </header>
    <div class=" container-fluid my-5 ">
        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card shadow-lg ">
                    <div class="row justify-content-around">
                        <form name="form2" action="" method="post" class="col-xl-12">
                            <div class="col-md-10" style="position: relative;">
                                <div class="card border-0">
                                    <div class="card-header pb-0">
                                        <h2 class="card-title space ">Checkout</h2>
                                        <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                        <hr class="my-0">
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <div class="col">
                                                <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                                <hr class="mt-0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">Name</label>
                                            <input type="text" class="form-control form-control-sm" name="name" id="name"
                                                aria-describedby="helpId">
                                        </div>
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">Address</label>
                                            <input type="text" class="form-control form-control-sm" name="address"
                                                id="address" aria-describedby="helpId" placeholder="Address">
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 pr-sm-2">
                                                <div class="form-group">
                                                    <label for="NAME" class="small text-muted mb-1">Distric</label>
                                                    <input type="text" class="form-control form-control-sm" name="distric"
                                                        id="distric" aria-describedby="helpId" placeholder="Distric">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="NAME" class="small text-muted mb-1">Postal Code</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="postalcode" id="postalcode" aria-describedby="helpId"
                                                        placeholder="Postal Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5" >
                                <div class="card border-0 ">
                                    <div class="card-header card-2">
                                        <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER</p>
                                        <hr class="my-2">
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row  justify-content-between">
                                            <div class="col-auto col-md-7">
                                                <div class="media flex-column flex-sm-row">
                                                    <div class="media-body  my-auto">
                                                        <div class="row ">
                                                            <div class="col-auto">
                                                                <p class="mb-0" id="item_name"><b>
                                                                        <?php echo $itemname; ?>
                                                                    </b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" pl-0 flex-sm-col col-auto  my-auto">
                                                <p class="boxed-1" id="qty">1</p>
                                            </div>
                                            <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                                <p id="item_price"><b>Rs.
                                                        <?php echo $price; ?>/=
                                                    </b></p>
                                            </div>
                                        </div>
                                        <hr class="my-2">

                                        <hr class="my-2">
                                        <div class="row ">
                                            <div class="col">
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p class="mb-1"><b>Subtotal</b></p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1"><b>Rs.
                                                                <?php echo $price; ?>/=
                                                            </b></p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <p class="mb-1"><b>Shipping</b></p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1"><b>Rs.0/=</b></p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p><b>Total</b></p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1" id="total"><b>Rs.
                                                                <?php echo $price; ?>/=
                                                            </b></p>
                                                    </div>
                                                </div>
                                                <hr class="my-0">
                                            </div>
                                        </div>
                                        <div class="row mb-5 mt-4 ">
                                            <div class="col-md-7 col-lg-6 mx-auto"><button type="submit"
                                                    class="btn btn-block btn-outline-primary btn-lg" name="submit1">BUY</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<?php
if (isset($_POST["submit1"])) {
    mysqli_query($link, "insert into buy values (NULL,'$_POST[name]','$_POST[address]','$_POST[distric]','$_POST[postalcode]','$itemname','1','$price')");
    ?>
    <script type="text/javascript">
        setTimeout(function () {
            window.location="index.php";
        }, 500);
    </script>
    <?php
}
?>

<footer>
        <a href="contactus.php" class="contact">Contact</a>
        <ul class="power">
            <li>Powered by:</li>
            <li>MLB_WD_06.1_5</li>
        </ul>
    </footer>
</body>

</html>