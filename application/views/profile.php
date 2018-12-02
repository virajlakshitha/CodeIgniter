<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <?php require_once('template.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="part1">
                    <h2>User Account</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Personal Details</a></li>
                        <li><a data-toggle="tab" href="#menu1">Purchases History</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active form">
                            <h4>NAME</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div class="row form-group">
                                        <div id="image" class="col-4">Image</div>
                                        <div class="col-8">
                                            <button name="upload_img" id="upload_img">Change Image</button>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Name</div>
                                        <div class="col-8">
                                            <input type="text" placeholder="name" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Username</div>
                                        <div class="col-8">
                                            <input type="text" placeholder="username" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Password</div>
                                        <div class="col-8">
                                            <input type="password" placeholder="**********" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Address</div>
                                        <div class="col-8">
                                            <input type="text" placeholder="no" class="form-control" disabled/>
                                            <input type="text" placeholder="street" class="form-control" disabled/>
                                            <input type="text" placeholder="city" class="form-control" disabled/>
                                            <input type="text" placeholder="country" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Credit/Debit Card</div>
                                        <div class="col-8">
                                            <input type="password" placeholder="**********" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <button class="btn btn-success">Edit Profile</button>
                                    </div>
                                </div>
                                <div class="col-6 right_side">
                                    <div class="row form-group">
                                        <div class="col-4">Account created date</div>
                                        <div class="col-8">
                                            <input type="text" placeholder="date" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-4">Last Purchased Date</div>
                                        <div class="col-8">
                                            <input type="text" placeholder="date" class="form-control" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h4>LAST 5 PURCHASES</h4>
                            <div class="row form" id="purchase_content">
                                <div class="col-2 form-group">
                                    <div id="image">Image</div>
                                </div>
                                <div class="col-10 form-group">
                                    <div class="row">
                                        <div class="col-12">Product name</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">Price</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">Purchased Price</div>
                                    </div>
                                </div>
                            </div>
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
<!-- <script type='text/javascript' src="<?php //echo base_url(); ?>js/main.js"></script> -->