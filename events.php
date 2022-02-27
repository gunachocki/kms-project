<?php
include "connection.php";
$sql = "SELECT * FROM sportevent ORDER BY id ";
$result = $con->query($sql);
$con->close(); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events Page</title>
    <link rel="stylesheet" href="webcss.css">
    <style>
        table {
            width: 100%;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            color: black;
        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: bold;
        }
        table {
            background-color: lightgreen;
        }
        th{
            color:red;
        }
        #up{
            text-align: center; 
            font-size:30pt;
            color:black;
            font-weight:bold;
        }
    </style>
</head>
<body>
<h1>SPORTS WEBSITE</h1>
<button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a>SPORTS</a>
                <ul>
                    <li><a href="Health Challenge.php">Health Challenge</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="references.php">References</a></li>
                </ul>
            </li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    <p style="color: black; font-weight:bold;font-size: 18pt;background-color:lightgreen;">Welcome to the EVENTS PAGE the Sports events that are happening in and around the Institute, and also the events that are 
    that are happening in around the country can be seen in this website.... </p>
    <input type="submit" value="Add Event" onclick="addfunction()" style="font-weight:bold;width:300px;font-size:20pt;background-color:lightblue"/>
    <input type="submit" value="Delete Event" onclick="deletefunction()" style="font-weight:bold;width:300px;font-size:20pt;background-color:lightblue"/>
    <input type="submit" value="Update Event" onclick="updatefunction()" style="font-weight:bold;width:300px;font-size:20pt;background-color:lightblue"/>
    <script>
  function addfunction() {
    window.location.href="addevent.php";
  }
  function deletefunction() {
    window.location.href="Delete.php";
  }
  function updatefunction() {
    window.location.href="update.php";
  }
 </script>
        <table>
            <tr>
                <th>EVENT NAME</th>
                <th>EVENT URL</th>
                <th>EMAIL ADDRESS</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>PLACE</th>
                <th>DESCRIPTION</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['eventname'];?></td>
                <td><a href=\<"" . $rows['eventurl'] . "\"><?php echo $rows['eventurl'];?></a></td>
                <td><?php echo $rows['mail'];?></td>
                <td><?php echo $rows['eventdate'];?></td>
                <td><?php echo $rows['eventtime'];?></td>
                <td><?php echo $rows['place'];?></td>
                <td><?php echo $rows['eventdescription'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
        <p id="a" style="color:white;"></p>
        <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
  var myLandbot = new Landbot.Livechat({
    configUrl: 'https://chats.landbot.io/v3/H-867982-VUHIR3D20QGD8CVB/index.json',
  });
</script>
  <footer style="background-color: black; opacity: 0.8; position: absolute; top: 750px;">
    Copyrights Reserved &copy; 2020.
    <div id="f1">
        <img src="https://i.pinimg.com/originals/08/17/15/0817158f3a05c0d62de647c28f4cde54.jpg" alt="INSTAGRAM">
        <img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-articleLarge-v4.jpg?quality=75&auto=webp&disable=upscale" alt="TWITTER">
        <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="FACEBOOK">
        <img src="https://i.pinimg.com/originals/2d/2b/e2/2d2be2421911037d80f9921dc29d54c2.jpg" alt="YOUTUBE">
        <img src="https://live.staticflickr.com/7412/16521004875_4dd4ebd65f_b.jpg" alt="FLICKR">
    </div>
</footer>
<script>
    var d = new Date();
    document.getElementById("a").innerHTML = d;
</script>
</body>
</html>