<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_dashboard.css">
</head>

<body>
    <div class="header"><span id="jetstart">JetStart</span>
        <span class="tab"><a href="#profile">Profile</a></span>
        <span class="tools"><a href="#offer">Hiring Status</a></span>
        <img src="Icon1.svg" id="icon">
        <table id="name">
            <tr>
                <td></td>
            </tr>



            <?php
            $server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);

            $con = mysqli_connect($server, $usernam, $password, "user_data");
            $sql6 = "SELECT * FROM `signup_user` WHERE `login`=1";
            $result4 = mysqli_query($con, $sql6);
            while ($row = mysqli_fetch_assoc($result4)) {
                echo "
          <tr>
          <td>" . $row["username"] . "</td>
         
            </tr>";
            }


            ?>
            </form>
        </table>
        <table id="data">
            <tr class="row">
                <th id="nn">Name</th>
                <th id="age">Age</th>
                <th id="phone">Phone</th>
                <th id="mail">Email</th>
                <th id="domain">Domain</th>
                <th id="exp">Experience</th>
                <th id="salary">Salary</th>
            </tr>
            <?php
            $server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);

            $con = mysqli_connect($server, $usernam, $password, "user_data");
            $sql6 = "SELECT * FROM `signup_user` WHERE `login`=1";
            $result4 = mysqli_query($con, $sql6);
            while ($row = mysqli_fetch_assoc($result4)) {
                echo "
          <tr>
          <td>" . $row["name"] . "</td>
          <td>" . $row["age"] . "</td>
          <td>" . $row["mobile"] . "</td>
          <td>" . $row["email"] . "</td>
          <td>" . $row["domain"] . "</td>
          <td>" . $row["experience"] . "</td>
          <td>" . $row["de_salary"] . "</td>
         
            </tr>";
            }
            ?>
        </table>
            <span id="welcome">Welcome, </span>
            <table id="z">
                <tr>
                    <td></td>
                </tr>
                <?php
                $server = "localhost";
                $usernam = "root";
                $password = "";
                error_reporting(E_ERROR | E_PARSE);

                $con = mysqli_connect($server, $usernam, $password, "user_data");
                $sql6 = "SELECT * FROM `signup_user` WHERE `login`=1";
                $result4 = mysqli_query($con, $sql6);
                while ($row = mysqli_fetch_assoc($result4)) {
                    echo "
          <tr>
          <td>" . $row["name"] . "</td>
         
            </tr>";
                }
                ?>
            </table>
                <button type="button" id='profile'>Profile</button>
                <button type="button" id='offer'>Hiring Status</button>
                <table id="dat">
                    <tr class="rr">
                        <th id="ab">Company</th>
                        <th id="bc">Email</th>
                    </tr>
                    

                    <?php
                    $server = "localhost";
                    $usernam = "root";
                    $password = "";
                    error_reporting(E_ERROR | E_PARSE);

                    $con = mysqli_connect($server, $usernam, $password,'user_data');
                    $sql2 = "SELECT `username` FROM `signup_user` WHERE `login`=1";
                    $result2 = mysqli_query($con, $sql2);
                    $row = mysqli_fetch_assoc($result2);
                    $username = $row['username'];
                    $sql = "UPDATE `signup_user` SET `login`=0 WHERE `login`=1";
                    $result=mysqli_query($con, $sql);
                    
                    $sql1 = "SELECT *  FROM `$username`";
                    $result4 = mysqli_query($con, $sql1);
                    while ($row = mysqli_fetch_assoc($result4)) {
                        echo "
                    <tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                    </tr>";
                    }
                


                    ?>
                </table>
                <button type="button" id="logout" ><a href="home.html">logout</a></button>                
</body>

</html>


