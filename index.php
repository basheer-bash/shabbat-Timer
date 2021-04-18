<?php
    
    include 'db.php';
    include 'database.php';
    $mysqli = new mngr($connect);
    $disa="";
    if(isset($_GET['add']))
    {
        $start = $_GET['timeStart'];
        $stop = $_GET['stopTimer'];
        if(isset($_GET['date']))
        {
            $day = $_GET['date'];
        }
        else {
            $day = 0;
        }
        $r1 = $mysqli->insertData($start, $stop, $day);
        
    }
    if(isset($_GET['onlyOne']))
    {
        $disa = "";       
    }
    if(isset($_GET['everyDay']))
    {
       $disa = "disabled='1'";   
    }     
  ?>
<?php
  date_default_timezone_set('Asia/jerusalem');
    echo "<span style='color:red;font-weight:bold;'>Date: </span>". date('F j, Y g:i:a  ');
?>
<!DOCTYPE html>
<html>
    <head>
    <div>
        <figure>
  <div class="face top"><p id="s"></p></div>
  <div class="face front"><p id="m"></p></div>
  <div class="face left"><p id="h"></p></div>
    </figure>
    </div>
        
        <meta charset="UTF-8">
        <title> shabat clock</title>
    <h3 id="head"><center>Shabat Timer</center></h3>
    </head>
    <style>
        body{
            background-color:buttonface;
            background: linear-gradient(#A0BAF7, #4CACC1);
            min-height: 100vh;
        }
        #head{
            color:darkblue;
            border-top: 1px;
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

        .Timer{
            line-height: 1px;
            border-radius: 10px;
            border-color: black;
        }
        #span{
            color: black;
            background-color: gray;
        }
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
            .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        }
	.styled-table th,
        .styled-table td {
         padding: 12px 15px;
        }
         styled-table tbody tr {
           border-bottom: 1px solid #dddddd;
        }

       .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
       }

       .styled-table tbody tr:last-of-type {
       border-bottom: 2px solid white;
        }
            .styled-table tbody tr.active-row {
         font-weight: bold;
         color: black;
        }
        #head{
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            }
            input{
                border:none;
                outline:none;
                display:inline-block;
                height:20px;
                vertical-align:middle;
                position:relative;
                bottom:5px;
                border-radius:22px;
                width:220px;
                box-sizing:border-box;
               
            }
             .select{
               
                width: 5em;
                height: 3em;
                line-height: 3;
                background: #2c3e50;
                overflow: hidden;
                border-radius: .25em;
             }
             .footer{
                 position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: graytext;
                color: white;
                text-align: center;
                 }
                 
                 @font-face {
                    font-family: 'Digital-7';
                    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184191/Digital-7.eot?#iefix') format('embedded-opentype'),  url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184191/Digital-7.woff') format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184191/Digital-7.ttf')  format('truetype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184191/Digital-7.svg#Digital-7') format('svg');font-weight: normal;font-style: normal;}
                  ::selection{background:#333;}::-moz-selection{background:#111;}
                  figure{width:210px;height:210px;position:absolute;top:50%;left:5;margin-top:-105px;margin-left:150px;transform-style: preserve-3d;-webkit-transform-style: preserve-3d;-webkit-transform: rotateX(-35deg) rotateY(45deg);transform: rotateX(-35deg) rotateY(45deg);transition:2s;}
                  figure:hover{-webkit-transform:rotateX(-50deg) rotateY(45deg);transform:rotateX(-50deg) rotateY(45deg);}
                  .face{width:100%;height:100%;position:absolute;-webkit-transform-origin: center;transform-origin: center;background:#000;text-align:center;}
                  p{font-size:180px;font-family: 'Digital-7';margin-top:20px;color:#2982FF;text-shadow:0px 0px 5px #000;-webkit-animation:color 10s infinite;animation:color 10s infinite;line-height:180px;}
                  .front{-webkit-transform: translate3d(0, 0, 105px);transform: translate3d(0, 0, 105px);background:#000;}
                  .left{-webkit-transform: rotateY(-90deg) translate3d(0, 0, 105px);transform: rotateY(-90deg) translate3d(0, 0, 105px);background:#151515;}
                  .top{-webkit-transform: rotateX(90deg) translate3d(0, 0, 105px);transform: rotateX(90deg) translate3d(0, 0, 105px);background:#222;}

                @keyframes color{
                  0%{color:#1231;text-shadow:0px 0px 5px #111;}
                  50%{color:#cc4343;text-shadow:0px 0px 5px #11111;}
                }
                @-webkit-keyframes color{
                  0%{color:#2982ff;text-shadow:0px 0px 5px #000;}
                  50%{color:graytext;text-shadow:0px 0px 5px #ff0000;}
                }
        
    </style>
    <body>
        
    <center>
        <table class="styled-table" >
                  <thead>
                         <tr>
                            <th>Day</th>
                            <th>Beginning Time</th>
                            <th>End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="active-row">
                            <td><?php if(!empty($_GET['date'])){ echo $_GET['date'];}?></td>
                            <td><?php if(!empty($_GET['timeStart'])){ echo $_GET['timeStart'];}?></td>
                            <td><?php if(!empty($_GET['stopTimer'])){ echo $_GET['stopTimer'];}?></td> 
                        </tr>
                    <br>
                    </tbody>
                </table>       
        <form method="get" >
                
                Start Timer:-
                <input type="time" name="timeStart" /><br><br>
                Stop Timer:-
                <input type="time" name="stopTimer" ><br><br>
                choose day:-
                <input type="date" name="date" <?php echo $disa ?>/> <br><br><br>
                 
                <button class="myButton" name="add">להפעיל</button>
                
                <a  class="myButton" href="tableoftimer.php">לטבלה</a>
                <button class="myButton" name="onlyOne">חד פעמי</button>
                <button class="myButton" name="everyDay">כל יום</button>
                <form/>
        </center> 
    <script>
    function date_time(id)
    {
            date = new Date;
            h = date.getHours();
            if(h<10)
            {
                    h = "0"+h;
            }
            m = date.getMinutes();
            if(m<10)
            {
                    m = "0"+m;
            }
            s = date.getSeconds();
            if(s<10)
            {
                    s = "0"+s;
            }
            document.getElementById("s").innerHTML = ''+s;
            document.getElementById("m").innerHTML = ''+m;
            document.getElementById("h").innerHTML = ''+h;
            setTimeout('date_time("'+"s"+'");','1000');
            return true;
    }
    window.onload = date_time('s');
    </script>
    <footer class="footer">by:- shimon dano and basheer hussien</footer>
    </body>
</html>
