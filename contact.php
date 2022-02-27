<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT PAGE</title>
        <?php
            include("auth.php");
        ?>
        <link rel="stylesheet" href="webcss.css">
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
        </div><br><br>
        <div class="query" style="color:black;font-size:18pt;">
        <h3>CONTACT US</h3>
        <ul>
            <li><B>Dr.N.V.Thiyagachanthan,</li></B></li><br>
            <address>Physical Education Director<br>
            Vellore Institute of Tecnology(VIT)<br>
            Vellore- 632 014,Tamilnadu,India</address><br>
            <li><b>PHONE: </b>0416-220117 <b>//</b> 0416-2202242</li><br>
        </ul>
        <p>Email:<a href="mailto:director.sports@vit.ac.in">director.sports@vit.ac.in</a></p>
        <h3>FOR PERSONAL QUERIES</h3>
        <p>MailTo:<a href="mailto:nvthiyagachanthan@vit.ac.in">nvthiyagachanthan@vit.ac.in</a></p><br></div>
        <div class="comment" style="position: absolute;right: 630px;top:120px;color:black;font-size:17pt;font-weight:bold;">
        <h3>COMMENT ON HERE:</h3>
       <form method="POST">
           <label for="mailid">MAIL ID: </label><br>
           <input type="mail" placeholder="xyz@example.com"><br><br>

           <label for="COMMENTS:">COMMENTS: </label><br>
           <textarea rows="4" cols="50" name="comment" placeholder="Explore the queries here..."></textarea>
          </form>
</div>
<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<div id="myLandbot" style="width: 30%; height: 550px; position: absolute; right: 10px; top: 150px"></div>
<script>
  var myLandbot = new Landbot.Container({
    container: '#myLandbot',
    configUrl: 'https://chats.landbot.io/v3/H-832264-4U6BR7ZG1OQ1PYIN/index.json',
  });
</script>
          <footer style="text-align:left;position:absolute;bottom:70px;color:black;"><h4>Copyright@<a href="https://vit.ac.in/">VIT-VELLORE</a></h4></footer>
</div>
          <p id="a"></p>

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