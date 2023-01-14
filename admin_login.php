<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <form action="admin_login.php" method="post">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Startup Login</h1><br><br>
        <div class="a">Email&nbsp;&nbsp;<input type="email" name="email" class="name"><br><br>
        Password&nbsp;&nbsp;<input type="password" name="password" class="name"><br><br></div>
        <input type="submit" id="submit" value="Login">
    </form>
    <span id="signup">Don't have an account? <b><a href="http://localhost:4000/JetSTART/admin_signup.php">SignUp</a></b></span>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    error_reporting(E_ERROR | E_PARSE);

    $con = mysqli_connect($server, $username, $password, "website");
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $sql8 = "SELECT * FROM `signup_admin`";
    if(isset($_POST['email'])){
        $result6 = mysqli_query($con, $sql8);
        while ($row = mysqli_fetch_assoc($result6)) {
            
            if ($row['Email'] == $email && $row['Password'] == $pass) {
                echo "succesfull";
                $sql10 = "UPDATE `signup_admin` SET `login`=1 WHERE `Email`='$email'";
                if($con->query($sql10)==true){
                    header("Location:http://localhost:4000/JetSTART/admin_dashboard.php");
                }

                
                break;
            } 
            else{
                $a = 2;
            }
        }
        if($a == 2){
            echo "Wrong Username/Password";       
    }
    }
    ?>




</body>

</html>