<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="finance.css">
</head>

<body>
    <div class="header"><span id="jetstart">JetStart</span>
        <span class="tab"><a href="http://localhost:4000/JetSTART/admin_dashboard.php">Dashboard</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/structure.php">Structure</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/hiring.php">Hire</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/finance.php">Finance</a></span>
        <img src="org.svg" id="icon">

        <button type="button" id="logout" name="logout"><a href="home.html">Logout</a></button>
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

        <span id="mark">Finance</span>
        <form action="finance.php" method="post">
            <input type="number" name="other" id="bbb">
            <input type="submit" value="Add Expense" id="zzz">

            <table id="abc">
                <tr class="cba">
                    <th>Salaries</th>
                    <th>Other expense</th>
                    <th>Total</th>
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
                $name = $row['Name'];
                echo $name;
                $others = $_POST['other'];
                if (isset($_POST['other'])) {
                    $sql = "SELECT SUM(`salary`) AS 'SUM' FROM $name";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $salary = $row['SUM'];
                    echo $salary;
                    echo "
<tr>
<td>" . $salary . "</td>
<td> " . $others . "</td>
<td>" . $salary + $others . "</td>
</tr>";
                }


                ?>
            </table>
        </form>
</body>

</html>