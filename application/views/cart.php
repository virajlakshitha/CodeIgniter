<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/cart.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <?php require_once('template.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart_item">
                    <div class="row">
                        <div class="col-3">
                            <div class="cart_image">Image</div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12"><h5>Product Name</h5></div>
                            </div>
                            <div class="row">
                                <div class="col-12">Price</div>
                            </div>
                            <div class="row">
                                <div class="col-12">Quantity</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row"></div>
                            <div class="row">
                                <button type="button" class="btn btn-info">Edit Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="row"><div class="col-12">&nbsp;</div></div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <center><button class="btn btn-success col-6">Pay Here</button></center>
                        </div>
                    </div>
                    <div class="row"><div class="col-12">&nbsp;</div></div>
                    <div class="row" id="payment_method">
                        <div class="col-6">
                            <center><div class="row">
                                <div class="col-12">Image(Visa Card)/Debit Card</div>
                            </div>
                            <div class="row">
                                <div class="col-12">HNB Bank</div>
                            </div>
                            <div class="row">
                                <div class="col-12">Commercial Bank</div>
                            </div></center>
                        </div>
                        <div class="col-6">
                            <center><div class="row">
                                <div class="col-12">Image Credit Card</div>
                            </div>
                            <div class="row">
                                <div class="col-12">HNB Bank</div>
                            </div>
                            <div class="row">
                                <div class="col-12">Commercial Bank</div>
                            </div></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>