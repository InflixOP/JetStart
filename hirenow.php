<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hirenow.css">
</head>

<body>

    <form action="hirenow.php" method="post">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credentials</h1><br><br>
        <div class="a">Username of Employee&nbsp;&nbsp;<input type="text" name="username" class="name"><br><br>
            Your Password&nbsp;&nbsp;<input type="password" name="Password" class="name"><br><br></div>
        <input type="submit" id="submit" value="Offer">



        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        error_reporting(E_ERROR | E_PARSE);

        $con = mysqli_connect($server, $username, $password);
        $username = $_POST["username"];
        $pass = $_POST["Password"];
        $sql1 = "SELECT * FROM `website`.`signup_admin`";
        if (isset($_POST['Password'])) {
            $result = mysqli_query($con, $sql1);
            $row = mysqli_fetch_assoc($result);
            if ($row['Password'] == $pass) {
                $name = $row['Name'];
                $email = $row['Email'];
                $sql3 = "INSERT INTO `user_data`.`$username`(`name`,`email`) VALUES ('$name','$email')";
                if ($con->query($sql3) == true) {
                    $result = mysqli_query($con, "SELECT * FROM `user_data`.`signup_user` WHERE `username`='$username'");
                    $row = mysqli_fetch_assoc($result);
                    $nam = $row['name'];
                    $age = $row['age'];
                    $emai = $row['email'];
                    $domain = $row['domain'];
                    $mobile = $row['mobile'];
                    $qualification = $row['qualification'];
                    $salary = $row['de_salary'];
                    $experience = $row['experience'];
                    $sql4 = "INSERT INTO `website`.`$name`(`name`,`age`,`email`,`mobile`,`domain`,`qualifications`,`salary`,`experience`) VALUES('$nam','$age','$emai','$mobile','$domain','$qualification','$salary','$experience')";
                    if ($con->query($sql4) == true) {
                        header("Location:http://localhost:4000/JetSTART/admin_dashboard.php");
                    } else {
                        header("Location:http://localhost:4000/JetSTART/hiring.php");
                    }
                }
            }
        } ?>
    </form>
</body>

</html>