<?php
include 'db.php';
include 'database.php';
$myconnect = new mngr($connect);

if(isset($_GET['bashir']))
{
    $id = $_GET['bashir'];
    $r1 = $myconnect->remove($id);
    echo $r1;   
}
$query = "SELECT * FROM `timerofshabat` ";
$result = $myconnect->myquery($query); 

date_default_timezone_set('Asia/jerusalem');
$S1 = date('H:i:s');
$timeQuery = "SELECT * FROM `timerofshabat` WHERE `Beginning_Time` <= '$S1' AND `End_Time` >= '$S1'" ;
$result2 = $myconnect->myquery($timeQuery);

$color = $myconnect->power($result2);


    


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            #light{
                border:1px solid black;
                width:35px;
                height:35px;
                background-color: <?php echo $color ?>
            }
            .timertable{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }
             .timertable thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            }
            .timertable th,
            .timertable td {
             padding: 12px 15px;
            }
             .timertable tbody tr {
               border-bottom: 1px solid #dddddd;
            }

           .timertable tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
           }

           .timertable tbody tr:last-of-type {
           border-bottom: 2px solid black;
            }
            .timertable tbody tr.active-row {
             font-weight: bold;
             color: black;
            }
             body{
            background-color:buttonface;
            background: linear-gradient(#A0BAF7, #4CACC1);
            min-height: 100vh;
              }
              .myButton {
                    box-shadow:inset 0px 0px 15px 3px #23395e;
                    background-color:#2e466e;
                    border-radius:17px;
                    border:3px solid #1f2f47;
                    display:inline-block;
                    cursor:pointer;
                    color:#ffffff;
                    font-family:Arial;
                    font-size:18px;
                    padding:6px 22px;
                    text-decoration:none;
                    text-shadow:0px 1px 0px #263666;
                    }
                    .myButton:hover {
                            background-color:#3865bd;
                    }
                    .myButton:active {
                            position:relative;
                            top:1px;
                    }

        </style>
    </head>
    <body>
    <center>
            <table class="timertable">
                <tr>
                    <th>remove</th>
                    <th>id</th>
                    <th>day</th>
                    <th>Beginning Time</th>
                    <th>End Timer</th>
                    <th>Time Now</th>
                     
                </tr>  
                <div id="light">123</div>
                <?php while($row = mysqli_fetch_assoc($result))
                { 
                $myconnect = new mngr($result2);
                echo"<tr>"
                   . "<td><form method='get'><button name='bashir' value='{$row['id']}'>remove</button></form></td>" 
                   . "<td>{$row['id']}</td>"
                   . "<td>{$row['Day']}</td>"
                   . "<td>{$row['Beginning_Time']}</td>"
                   . "<td>{$row['End_Time']}</td>"
                   . "<td>{$row['time_now']}</td>" 
                   . "<td>{$myconnect->power1($row['Beginning_Time'],$row['End_Time'],$S1)}</td>"
                   . "</tr>";       
                   
                }
                ?> 
                    <a  class="myButton" href="index.php">דף ראשי</a>
                </form>
            </table>
        </center>
    </body>
</html>
