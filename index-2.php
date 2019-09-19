<!-- <?php

	$host = "localhost"; // 127.0.0.1
	$username = "root";
	$password = "";
	$database = "newDatabase";

	$conn = mysqli_connect($host, $username, $password, $database) or die("Could not connect");

    if($_POST){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO `register`(`email`, `password`) VALUES ('$email', '$password')";
        // echo $sql;
        // exit;
        $result = mysqli_query($conn, $sql);
    }
    // $x = 75; 
    // $y = 25;
 
    // function addition() { 
    //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    // }

    // function substract() { 
    //     $GLOBALS['b'] = $GLOBALS['x'] - $GLOBALS['y']; 
    // }
    // function multiply() { 
    //     $GLOBALS['c'] = $GLOBALS['x'] * $GLOBALS['y']; 
    // }
    // addition(); 
    // substract();
    // multiply();
    // echo $z; 
    // echo $b;
    // echo $c;
?> -->

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
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <img src="https://s.yimg.com/rz/d/yahoo_en-MY_f_p_bestfit_2x.png">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email address" required/>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
</div>        
            </div>
        </div>
        <script type="text/javascript">
            
            // function validation(){
                
            //     var email = document.getElementById("email").value;

            //     var password = document.getElementById("password").value;                
            //     filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            //         if (filter.test(email)) {    
            //             console.log("error");
            //         } else {
            //             alert("please cehck email")
            //         }
            //     if(email == '' || email == null){
            //          alert("Email is empty");   
            //     } else if(password.length < 8){
            //          alert("Password must at must be at least 8 characters");
            //     } else{
            //         alert("SUCCESS")
            //     }
            // }
            $(document).ready(function(){
                $("#submitBtn").click(function(){
                    var email = $("#email").val();
                    var password =$("#password").val();
                    if (email == '' || email == null){
                        alert("error email");
                    } else if (password == ''){
                        alert("error password");
                    } else{
                        alert("SUCCESS")
                    }
                })
            })
        </script>
    </body>
</html>

