<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="admin_signup.css">
</head>

<body>
  <form action="admin_signup.php" method="post">
    <h1>Create Startup Account</h1><br><br>
    <div id='yah'>Admin-Name&nbsp;&nbsp;<input type="text" id="founder" name="founder" class="name"><br><br>
      Email&nbsp;&nbsp;<input type="email" name="email" id="mail" class="name"><br><br>
      Company Name&nbsp;&nbsp;<input type="text" name="name1" class="name"><br><br>
      Domain&nbsp;&nbsp;<select name="domain" class="name" id="domain">
        <option value="edtech">EdTech</option>
        <option value="fintech">FinTech</option>
        <option value="foodtech">FoodTech</option>
        <option value="medtech">MedTech</option>
      </select><br><br>
      Password&nbsp;&nbsp;<input type="password" name="password" id="ed" class="name"><br><br></div>
    <input type="submit" id="submit" value="SignUp">
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    error_reporting(E_ERROR | E_PARSE);

    $con = mysqli_connect($server, $username, $password, "website");
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $name1 = $_POST["name1"];
    $founder = $_POST["founder"];
    $domain = $_POST["domain"];
    if (isset($_POST['name1'])) {
      $sql6 = "INSERT INTO `signup_admin`(`Name`,`Founder`,`Email`,`Password`,`Domain`) VALUES ('$name1','$founder','$email','$pass','$domain')";
      if ($con->query($sql6) == true) {
        echo "Registration Successful";
        header('Location: admin_login.php');
      } else {
        echo "Registration Failed";
      }
      $sql7 = "CREATE TABLE $name1(`name` VARCHAR(18) NOT NULL ,`age` INT(6) NOT NULL,`email` VARCHAR(20) NOT NULL,`mobile` bigint(10) NOT NULL,`domain` VARCHAR(10) NOT NULL,`qualifications` VARCHAR(50) NOT NULL,`salary` int(8) NOT NULL,`experience` varchar(3) NOT NULL)";
      $result5 = mysqli_query($con, $sql7);
    }
    ?>
  </form>
</body>

</html>