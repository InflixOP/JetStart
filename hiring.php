<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hiring.css">
</head>
<body>
    <div class="header"><span id="jetstart">JetStart</span>
        <span class="tab"><a href="http://localhost:4000/JetSTART/admin_dashboard.php">Dashboard</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/structure.php">Structure</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/hiring.php">Hire</a></span>
        <span class="tools"><a href="http://localhost:4000/JetSTART/finance.php">Finance</a></span>
        <img src="org.svg" id="icon">
        <button type="button" id="logout" name="logout"><a href="http://localhost:4000/JetSTART/logout.php">Logout</a></button>
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
        <button type="button" id="app"><a href="">Applications</a></button>
        <button type="button" id="app1"><a href="http://localhost:4000/JetSTART/hirenow.php">Hire Now</a></button>
        <form action="hiring.php" id="input" method="post">
            <span class="dd">Domain</span><select name="domain" class="name">
                <option>App Dev</option>
                <option>Full-Stack Dev</option>
                <option>Front-end</option>
                <option>Back-end</option>
                <option>HR</option>
                <option>Manager</option>
                <option>Marketing Head</option>
                <option>Finance</option>
                <option selected>---</option>
            </select><br><br>
            <span id="dd">Experience</span><select name="experience" id="name" class="name">
                <option>Fresher</option>
                <option>1-2</option>
                <option>3-5</option>
                <option>5+</option>
                <option selected>---</option>
            </select><br><br>
            <span id="ss">Maximum Salary </span><input type="number" id="nn" name="salary" class="name">
            <input type="submit" id="submit" value="Filter">
        </form>
        <table id="t1">
            <tr class="t2">
                <th class="a1">Name</th>
                <th class="a1">Age</th>
                <th class="a1">Email</th>
                <th class="a1">Phone</th>
                <th class="a1">Domain</th>
                <th class="a1">Experience</th>
                <th class="a1">Salary</th>
                <th class="a1">Username</th>
            </tr>

            <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        error_reporting(E_ERROR | E_PARSE);

        $con = mysqli_connect($server, $username, $password, "user_data");
        $domain = $_POST["domain"];
        $salary = $_POST["salary"];
        $experience = $_POST["experience"];
        echo "<br>";
        if (isset($_POST["domain"])) {
            $sql5 = "SELECT * FROM `signup_user` WHERE `domain`='$domain' AND `de_salary`<=$salary AND `experience`='$experience'";
            $result3 = mysqli_query($con, $sql5);
            while ($row = mysqli_fetch_assoc($result3)) {
                echo "
                    <tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["age"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["mobile"] . "</td>
                        <td>" . $row["domain"] . "</td>
                        <td>" . $row["experience"] . "</td>
                        <td>" . $row["de_salary"] . "</td>
                        <td>" . $row["username"] . "</td>
                        
                    
                    </tr>";
            }
        }
        ?>
        </table>

        
</body>

</html>