<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PHP IMAGE CRUD</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>PHP IMAGE CRUD - Insert image in PHP</h4>
                </div>
                <div class="card-body">
                <?php
                        if(isset($_SESSION['status']) && $_SESSION != ''){
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['status'];?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php 
                            unset($_SESSION['status']);
                        } 
                    ?>
                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="stud_name" required class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="">Student Class</label>
                            <input type="text" name="stud_class" required class="form-control" placeholder="Enter Class">
                        </div>
                        <div class="form-group">
                            <label for="">Student Phone Number</label>
                            <input type="text" name="stud_phone" required class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="">Student Image</label>
                            <input type="file" name="stud_image" required class="form-control">
                        </div>
                        <div class="form-group">
                            <button name="save_stud_image" class="btn btn-primary">SUBMIT - SAVE</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
   
  </body>
</html>