<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="marketing.css">
</head>

<body>
    <div class="header"><span id="jetstart">JetStart</span>
        <span class="tab"><a href="http://localhost:4000/JetSTART/admin_dashboard.php">Dashboard</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/structure.php">Structure</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/hiring.php">Hire</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/finance.php">Finance</a></span>
        <img src="org.svg" id="icon">
        <button type="button" id="logout" name="logout"><a
                href="http://localhost:4000/JetSTART/logout.php">Logout</a></button>
        <table id="founder">
            <tr>
                <td></td>
            </tr>
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
                $sql06 = "SELECT * FROM `signup_admin` WHERE `login`=1";
                $result04 = mysqli_query($con, $sql06);
                while ($row = mysqli_fetch_assoc($result04)) {
                    echo "
          <tr>
          <td>" . $row["Founder"] . "</td>
         
            </tr>";
                }


                ?>
            </table>
            <span id="mark">Marketing</span>
            <form id="ddd" action="marketing.php" method="post">
                <span class="d1d1">Domain</span><select name="domain" class="domain">
                <option>---</option>
                    <option>Edtech</option>
                    <option>FoodTech</option>
                    <option>MedTech</option>
                    <option>FinTech</option>

                    
                </select><br><br>
                <input type="submit">
                <table id="z11">
                    <tr class="z22">
                        <th>Name</th>
                        <th>Instagram</th>
                    </tr>


                    <?php
                    $server = "localhost";
                    $usernam = "root";
                    $password = "";
                    error_reporting(E_ERROR | E_PARSE);
                    $domain = $_POST["domain"];

                    $con = mysqli_connect($server, $usernam, $password, "marketing");
                    if (isset($_POST['domain'])) {
                        $sql02 = "SELECT * FROM $domain ";
                        $result04 = mysqli_query($con, $sql02);
                        while ($row = mysqli_fetch_assoc($result04)) {
                            echo "
          <tr>
          <td>" . $row["name"] . "</td>
         <td> " . $row["insta"] . "</td>
            </tr>";
                        }
                    }


                    ?>
                </table>

            </form>
</body>

</html>