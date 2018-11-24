<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Excel_export</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 align="center">Export to Excel</h3>
        <div class="table-responsive">
            <table>
                <tr>
                    <th width="100px">Id</th>
                    <th width="150px">Name</th>
                    <th width="100px">Quantity</th>
                    <th width="100px">Price</th>
                </tr>
                <?php
                foreach($data as $row){
                    echo '
                    <tr>
                        <td width="100px">'.$row->Pid.'</td>
                        <td width="150px">'.$row->Pname.'</td>
                        <td width="100px">'.$row->Quantity.'</td>
                        <td width="100px">'.$row->Price.'</td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div>
            <form method="post" action="<?php echo base_url(); ?>Excel_export/export">
                <button type="submit" class="btn-success">Excel</button>
            </form>
            <form method="post" action="<?php echo base_url(); ?>Excel_export/pdf">
                <button type="submit" class="btn-danger">Pdf</button>
            </form>
        </div>
    </div>

    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>