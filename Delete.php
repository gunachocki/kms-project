<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM sportevent");
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Page</title>
<link rel="stylesheet" href="webcss.css">
    <style>
        table {
            width: 100%;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            color: black;
            background-color: lightgreen;
        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        th{
            color:red;
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
    <div id="up"><p>Records Deletion</p></div>
<table>
	<tr>
	<th>EVENTNAME</th>
	<th>EVENTURL</th>
	<th>MAIL</th>
	<th>EVENTDATE</th>
	<th>EVENTTIME</th>
	<th>PLACE</th>
    <th>EVENTDESCRIPTION</th>
    <th>ACTION</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	<td><?php echo $row["eventname"]; ?></td>
	<td><?php echo $row["eventurl"]; ?></td>
	<td><?php echo $row["mail"]; ?></td>
	<td><?php echo $row["eventdate"]; ?></td>
    <td><?php echo $row["eventtime"]; ?></td>
	<td><?php echo $row["place"]; ?></td>
    <td><?php echo $row["eventdescription"]; ?></td>
	<td><a href="del.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
<!-- echo "<a onclick=\"return confirm('Delete this record?')\" href=\"delete_members.php?id=".$row['id']."\">delete</a>"; -->
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