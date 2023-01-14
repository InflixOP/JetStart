<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>

<body>
    <div class="header"><span id="jetstart">JetStart</span>
        <span class="tab"><a href="http://localhost:4000/JetSTART/marketing.php">Marketing</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/structure.php">Structure</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/hiring.php">Hire</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/finance.php">Finance</a></span>
        <img src="org.svg" id="icon">
        <table id="name">
            <tr>
                <td></td>
            </tr>

            <?php
            $server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);

            $con = mysqli_connect($server, $usernam, $password, "website");
            $sql06 = "SELECT * FROM `signup_admin` WHERE `login`=1";
            $result04 = mysqli_query($con, $sql06);
            while ($row = mysqli_fetch_assoc($result04)) {
                echo "
          <tr>
          <td>" . $row["Name"] . "</td>
         
            </tr>";
            }


            ?>
        </table>
        <a href="http://localhost:4000/JetSTART/structure.php"><img src="org_card.svg" id="org"></a>
        <a href="http://localhost:4000/JetSTART/hiring.php"><img src="hire_card.svg" id="hire"></a>
        <a href="http://localhost:4000/JetSTART/finance.php"><img src="finance_card.svg" id="finance"></a>
        <a href="http://localhost:4000/JetSTART/marketing.php"><img src="Marketing_card.svg" id="marketing"></a>

        <table id="founder">
            <tr>
                <td></td>
            </tr>


            <?php
            $server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);
            $con = mysqli_connect($server, $usernam, $password, "website");
            $sql6 = "SELECT * FROM `signup_admin` WHERE `login`=1";
            $result4 = mysqli_query($con, $sql6);
            $row = mysqli_fetch_assoc($result4);
            //$sql = "UPDATE `signup_admin` SET `login`=0 WHERE `login`=1";
            //$result = mysqli_query($con, $sql);
            
            echo "
      <tr>
      <td>" . $row["Founder"] . "</td>
     
        </tr>";
            ;

            ?></table>
        <button type="button" id="logout" name="logout"><a href="http://localhost:4000/JetSTART/logout.php">Logout</a></button>
        

</body>

</html>