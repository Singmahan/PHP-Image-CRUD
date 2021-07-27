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
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary">
            <h4>PHP IMAGE - How to fetch Image in PHP</h4>
          </div>
          <div class="card-body">
            <?php
            if (isset($_SESSION['status']) && $_SESSION != '') {
            ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php
              unset($_SESSION['status']);
            }
            ?>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "php-crud-image");
            $query = "SELECT * FROM student";
            $query_run = mysqli_query($conn, $query);
            ?>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Stud Name</th>
                  <th>Stud Class</th>
                  <th>Phone Number</th>
                  <th>IMAGE</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {

                ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['stud_name']; ?></td>
                      <td><?php echo $row['stud_class']; ?></td>
                      <td><?php echo $row['stud_phone']; ?></td>
                      <td>
                        <img src="<?php echo "upload/" . $row['stud_image']; ?>" width="100px" alt="Image">
                      </td>
                      <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a>
                      </td>
                      <td>
                        <!-- <a href="" class="btn btn-danger">DELETE</a> -->
                        <form action="code.php" method="POST">
                          <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                          <input type="hidden" name="del_stud_image" value="<?php echo $row['stud_image']; ?>">
                          <button type="submit" name="delete_stud_image" class="btn btn-danger">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td>No Record Available</td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
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