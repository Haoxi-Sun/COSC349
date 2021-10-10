<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
    <meta charset="UTF-8">
    <title>The Time Zone Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>The Time Zone Converter</h1>
</header>

<main>
    <?php

    if(isset($_GET['Delete'])){
        //testing
        $message="delete this". $_GET['toTime'];
        print_r ($_GET);
        require_once "config.php";
        $result =$pdo->exec("DELETE FROM user_selected WHERE user_id=". $_GET['userid'].";");

        echo "result=".$result;
        header("Refresh:0; url=index.php");
    }
    if(isset($_GET['Update'])){
        //for testing
        $message="delete this". $_GET['toTime'];
        print_r ($_GET);
        require_once "config.php";

        $result =$pdo->exec("UPDATE user_selected SET country_name='". $_GET['toTime']."' WHERE user_id=". $_GET['userid'].";");

        echo "result=".$result;
        header("Refresh:0; url=index.php");
    }


    ?>




    <h2>User Information: </h2>
    <table border="1">
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Selected Country</th>
            <th>Edit Country</th>
            <th colspan="2">Operations</th>
        </tr>

        <?php

        require_once "config.php";

        $_SESSION["favcolor"] = "green";

        $q = $pdo->query("SELECT * FROM user_selected");
        $w = $pdo->query("SELECT * FROM time_convert");

        $dropbox =" <select name=\"toTime\" size=\"1\">";

        while ($row = $w->fetch()) {

            $dropbox.= "<option value='".$row["correlated_format"]."'>" . $row["correlated_format"] . "</optin>" ;

        }


        while ($row = $q->fetch()) {

          $newdrop = str_replace("<option value='".$row["country_name"]."'","<option value='".$row["country_name"]."' selected",$dropbox);

            echo "<tr> <form method='get' action='index.php'><input type='hidden' name='userid' value='".$row["user_id"]."'> <td>".$row["user_id"] ."</td><td>". $row["username"] . "</td><td>" . $row["country_name"] . "</td>"."<td>".$newdrop."</td> <td> <input type=\"submit\" name=\"Update\" value=\"Update\" ></td><td><input type=\"submit\" name=\"Delete\" value=\"Delete\" ></td></form></tr>";
        }


        ?>


    </table>

</main>
</body>
</html>

