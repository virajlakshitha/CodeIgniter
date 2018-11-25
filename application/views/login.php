<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
</head>
<body class="body">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center login">
                Login Form
            </div>
        </div>
        <center><div class="row">
            <div class="col-12">
                <div class="login_form">
                    <form method="post" action="<?php echo base_url() ?>">
                        <div class="form-group">
                            <label for="username" class="text-black">Username</label><br>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-black">Password</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="show_password" class="text-black">Show Password</label><br>
                        </div>
                        <div class="form-group">
                            <label for="keep_signin" class="text-black">Keep Me Signed In</label><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-control btn btn-success" value="SIGN IN">
                        </div>
                        <div class="form-group">
                            <label for="keep_signin" class="text-blue">Doesn't have an account</label><br>
                        </div>
                    </form>
                </div>
            </div>
        </div></center>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>