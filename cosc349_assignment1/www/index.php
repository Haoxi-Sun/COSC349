<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Time Zone Converter</title>
   <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>

</head>

<body>
    <header>
        <h1>The Time Zone Converter</h1>


        <p for="name" style="font-size: 15px">User: <span id="user_name" ></span>

        </p>


        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        <form  >
            <input type="submit" name="logout" value="logout" onclick="control.logout()"/>
        </form>
        <div id="id01" class="modal">

            <form class="modal-content animate" id="loginform" onsubmit="control.login()" >
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="input_name" name="name" required>


                    <input  type="submit" class="loginbtn" name="login" value="login" >

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                        Cancel
                    </button>

                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </header>

    <main>

        <div>
            <h2>The Current Date/Time (UTC):

                <?php
                date_default_timezone_set( $_GET['toTime']);


                echo " ".gmdate(DATE_RFC822)."<br><br>";



                echo "The Cureent time zone:  ".date_default_timezone_get() . "<br>";
//                echo date(DateTime::ISO8601) . "<br>";
//                echo date('Y-m-d\TH:i:s\Z') . "<br>";
//
////               echo  "<strong id = 'current_date'>'..'</strong>"
//
//                echo gmdate ("Y-m-d H:i:s a l") . "<br>";

                ?>

                <?php

                setcookie("data", "0", time() + 3600);

                if(isset($_GET['SubmitTime'])){
                   //echo $_POST['toTime']."\r\n ";
                  // echo $_COOKIE["user"];
                    setcookie("data", $_GET['toTime'], time() + 3600);


                }

//
                ?>


            </h2>



        </div>
        <div>
            <h3 style="font-size: 20px">Converter Results: <?php    echo date(DateTime::ISO8601) . "<br>"; ?></h3>
            <strong style="font-size: 12px" id = 'converted_date'></strong>
            <div>
                <form method="get">
                    <strong style="font-size: 18px">To Time Zone:</strong><br>
                    <div style="width: 671px">
                        <select name="toTime" size="10">
                            <option value = 0 selected >----Select----</option>
                            <?php

                            require_once "config.php";

                            $q = $pdo->query("SELECT * FROM time_convert");

                            while($row = $q->fetch()){
                                echo "<option value=".$row['correlated_format'].">".$row["correlated_format"]."</option>";
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="bg-info">
                      <br>
                      <input type="submit" id="btn_submit" name="SubmitTime" value="Convert Time Now" class="btn btn-success">
                    </div>
                </form>

<!--                <form id="submit_user">-->
<!--                    <input type="submit" style="font-size: 13px; margin-left: 15px;"  >-->
<!--                </form>-->

                <button style="font-size: 13px; margin-left: 15px;" onclick="control.submitcheking()">Submit to database</button>
            </div>

        </div>
    </main>
    <footer>
    <div style="float: right; text-align: right">
        <h4>local system time</h4>
        <h4 id ="timeNow"></h4>
    </div>
    </footer>
</body>
</html>

