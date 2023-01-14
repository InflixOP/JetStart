<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_login.css">
</head>

<body>
    <form action="user_login.php" method="post">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Login</h1><br><br>
        <div class="a">Username&nbsp;&nbsp;<input type="text" name="username" class="name"><br><br>
            Password&nbsp;&nbsp;<input type="password" name="password" class="name"><br><br></div>
        <input type="submit" id="submit" value="Login">
    </form>
    <span id="signup">Don't have an account? <b><a href="http://localhost:4000/JetSTART/user_signup.php">SignUp</a></b></span>

    <?php
    $server = "localhost";
    $usernam = "root";
    $password = "";
    error_reporting(E_ERROR | E_PARSE);

    $con = mysqli_connect($server, $usernam, $password, "user_data");
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (isset($_POST["username"])) {
        $sql2 = "SELECT * FROM `signup_user`";
        $result = mysqli_query($con, $sql2);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["username"] == $username && $row["password"] == $password) {
                $sql10 = "UPDATE `signup_user` SET `login`=1 WHERE `username`='$username'";
                echo "succesful log in";
                $sql3 = "CREATE TABLE IF NOT EXISTS $username(`name` VARCHAR(18) NOT NULL ,`email` VARCHAR(36) NOT NULL)";
                $result1 = mysqli_query($con, $sql3);
                if($con->query($sql10)==true){
                    header("Location:http://localhost:4000/JetSTART/user_dashboard.php");
                }
                

            }else{
                ;
            }

        }
    }
    ?>
</body>

</html>