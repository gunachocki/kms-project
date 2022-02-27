<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ADD EVENT PAGE</title>
    <link rel="stylesheet" href="webcss.css">
<?php 
$error_message = "";$success_message = "";
if(isset($_POST['sub'])){
   $ename = trim($_POST['ename']);
   $url = trim($_POST['url']);
   $email = trim($_POST['email']);
   $date = trim($_POST['date']);
   $time = trim($_POST['time']);
   $place = trim($_POST['place']);
   $des = trim($_POST['des']);
   $isValid = true;
   if($ename == '' || $url == '' || $email == '' || $date == '' || $time == '' || $place == '' || $des == ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }
   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $isValid = false;
     $error_message = "Invalid Email-ID.";
   }
   if($isValid){
     $insertSQL = "INSERT INTO sportevent( eventname,eventurl,mail,eventdate,eventtime,place,eventdescription ) values(?,?,?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     if($stmt !== FALSE){
        $stmt->bind_param("sssssss",$ename,$url,$email,$date,$time,$place,$des);
        $stmt->execute();
        $stmt->close();

        $success_message = "Added Successfully.";
        header("Location:events.php");
     }
     else{
        die('prepare() failed: ' . htmlspecialchars($con->error));
     }     
   }
}
?>

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
          font-size: 25pt;
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
    <div id="up"><p>Add Event Page</p></div>
    <div id="eform">
          <form method='post' action=''>
          <table id="t">
            <tr>
              <td><label>Event Name:</label></td>
              <td><input type="text" name="ename" id="ename" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>URL:</label></td>
              <td><input type="url" name="url" id="url" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>Email:</label></td>
              <td><input type="email" name="email" id="email" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>Date:</label></td>
              <td><input type="date" name="date" id="date" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>Time:</label></td>
              <td><input type="time" name="time" id="time" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>Place:</label></td>
              <td><input type="text" name="place" id="place" required="required" maxlength="80"></td>
            </tr>
            <tr>
              <td><label>Description:</label></td>
              <td><textarea name="des" id="des" required="required">Tell about the event</textarea></td>
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