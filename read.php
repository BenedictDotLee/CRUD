<?php

	$host = "localhost"; // 127.0.0.1
	$username = "root";
	$password = "";
	$database = "newDatabase";

	$conn = mysqli_connect($host, $username, $password, $database) or die("Could not connect");

    $sql = "SELECT * from register";

    $result = mysqli_query($conn, $sql);
    // print_r($row);
    // exit;
    if(@$_POST["delete"]){
        // echo 123;
        // exit;
        $id = $_POST["delete"];
        $sql = "DELETE from register where id = '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location: read.php");   
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta must come first in the head; any other head content must come after there tag -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container" style="margin: 2%;">
            <div class="col-md-10 col-md-offset-1">
                <h1>Members' Data</h1>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){//
                    ?>
                      <tr>
                        <td><?php echo $row["id"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["password"]?></td>
                        <form method="post">
                        <td><button type="submit" class="btn btn-danger">DELETE</button>
                            <input type="hidden" name="delete" class="btn btn-danger" id="submit" value="<?php echo $row['id'] ?>">
                            <a href="edit.php?id=<?php echo $row['id'] ?>" target="_blank"><button type="button" class="btn btn-warning">EDIT</button></a>
                        </td>
                        </form>
                      </tr>
                    <?php } 
                    ?>
                    </tbody>
                  </table>

            </div>
        </div>
    </body>
</html>