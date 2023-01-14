<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_signup.css">
</head>

<body>
    <form action="user_signup.php" method="post">
        <span id="create">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create Account</h1>
        </span><br><br>
        Name&nbsp;&nbsp;<input type="text" name="name" class="name"><br><br>
        Age&nbsp;&nbsp;<input type="number" id="age" name="age" class="name"><br><br>
        Email&nbsp;&nbsp;<input type="email" name="email" class="name"><br><br>
        Phone&nbsp;&nbsp;<input type="number" name="mobile" class="name"><br><br>
        Username&nbsp;&nbsp;<input type="text" name="username" id="user" class="name"><br><br>
        Set Password&nbsp;&nbsp;<input type="password" name="password" id="pass" class="name"><br><br>
        Domain&nbsp;&nbsp;<select name="domain" class="name">
            <option>App Dev</option>
            <option>Full-Stack Dev</option>
            <option>Front-end</option>
            <option>Back-end</option>
            <option>HR</option>
            <option>Manager</option>
            <option>Marketing Head</option>
            <option>Finance</option>
            <option selected>Other</option>
        </select><br><br>
        Educational-Quali.&nbsp;&nbsp;<input type="text" name="qualification" id="ed" class="name"><br><br>
        Demanded-Salary&nbsp;&nbsp;<input type="number" name="de_salary" id="salary" class="name"><br><br>
        Work Experience&nbsp;&nbsp;<select name="experience" class="name" id="exp">
            <option>Fresher</option>
            <option>1-2</option>
            <option>3-5</option>
            <option>5+</option>
        </select><br><br>
        <input type="submit" id="submit" value="SignUp">


        

        

        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        error_reporting(E_ERROR | E_PARSE);

        $con = mysqli_connect($server, $username, $password, "user_data");
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $domain = $_POST["domain"];
        $qualification = $_POST["qualification"];
        $experience = $_POST["experience"];
        $de_salary = $_POST["de_salary"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (isset($_POST["name"])) {
            
            $sql1 = "INSERT INTO `signup_user`(`name`,`age`,`email`,`mobile`,`domain`,`qualification`,`experience`,`de_salary`,`password`,`username`) VALUES('$name','$age','$email','$mobile','$domain','$qualification','$experience','$de_salary','$password','$username');";
            if ($con->query($sql1) == true) {
                header("Location:user_login.php");
            } else {
                echo "ERROR: $sql1 <br> $con->error";
            }

        }
        ?>
</body>

</html>