<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE sportevent set eventname='" . $_POST['ename'] . "', eventurl='" . $_POST['url'] . "', mail='" . $_POST['email'] . "', eventdate='" . $_POST['date'] . "' , eventtime='" . $_POST['time'] . "', place='" . $_POST['place'] . "' , eventdescription='" . $_POST['des'] . "' WHERE eventname='" . $_POST['ename'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM sportevent WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>EVENT UPDATE PAGE</title>
<link rel="stylesheet" href="webcss.css">
<style>
#up{
            text-align: center; 
            font-size:20pt;
            color:black;
            font-weight:bold;
        }
        #eform{
          color: red;
          width: 30%;
          background-color: yellow;
          font-weight: bold;
          font-size: 20pt;
          position: absolute;
          left: 540px;
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
    <div id="up"><p>Update Event Page</p></div>
    <br>
    <p style="color:black; text-align:center;font-weight:bold;font-size:25pt;">Please Update The Necessary Details In The Events</p>
    <div id='eform'>
<form method='post' action=''>
        <?php if(isset($message)) { echo "<script>alert('$message'); window.location.href='events.php';</script>"; } ?>
        <br><br><a href="update.php">EVENTS LIST - CLICK HERE</a>
          <table>
            <tr>
              <td><label>Event Name:</label></td>
              <td></td>
              <td><input type="text" name="ename" id="ename" value="<?php echo $row['eventname']; ?>"></td>
            </tr>
            <tr>
              <td><label>URL:</label></td>
              <td></td>
              <td><input type="url" name="url" id="url" value="<?php echo $row['eventurl']; ?>"></td>
            </tr>
            <tr>
              <td><label>Email:</label></td>
              <td></td>
              <td><input type="email" name="email" id="email" value="<?php echo $row['mail']; ?>"></td>
            </tr>
            <tr>
              <td><label>Date:</label></td>
              <td></td>
              <td><input type="date" name="date" id="date" value="<?php echo $row['eventdate']; ?>"></td>
            </tr>
            <tr>
              <td><label>Time:</label></td>
              <td></td>
              <td><input type="time" name="time" id="time" value="<?php echo $row['eventtime']; ?>"></td>
            </tr>
            <tr>
              <td><label>Place:</label></td>
              <td></td>
              <td><input type="text" name="place" id="place" value="<?php echo $row['place']; ?>"></td>
            </tr>
            <tr>
              <td><label>Description:</label></td>
              <td></td>
              <td><input type="text" name="des" id="des" value="<?php echo $row['eventdescription']; ?>"></td>
            </tr>
            <tr>
            <td></td>
            <td><button type="submit" name="sub" style="color:red;font-weight: bold;
          font-size: 15pt;">Submit</button></td>
            </tr>
            </table>
          </form>
          </div>
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
