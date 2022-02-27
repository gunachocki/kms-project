<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="webcss.css">
        
        <?php
            include("auth.php");
            
     
        ?>
        
       
        <style>
         #up{
            text-align: center; 
            font-size:20pt;
            color:black;
            font-weight:bold;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.form.js"></script>
        <script type="text/javascript" src="scripts/upload.js"></script>
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
    <div id="up"><p>Home Page</p></div>
    <h2 style="position:absolute;left:210px;top:140px;color:black;">ABOUT THE INSTITUTE</h2><BR>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:70%;font-weight:bold;">The Department of Physical Education was set up in the year 1984. The Department of Physical education is located in VIT Shopping<br> Complex. This complex has a magnificent air conditioned gymnasium and Snooker Hall. A separate fitness centre for men and women<br> has also been established in the respective Hostels. A swimming pool of international dimension is also available in the campus.</p>
    <iframe width="500" height="315" style="float:left;" src="https://www.youtube.com/embed/QR1MMB972XE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p style="color:black;background-color:lightblue;font-size:13pt;width:70%;font-weight:bold;">At VIT students are groomed to be complete personalities. In order to<br> be mentally and physically fit, VIT provides state of the art facilities<br> with many play grounds, stadium, indoor courts as well as a number<br> of centres for physical education & sporting activities that help<br> students stay as fit as a fiddle and to develop a spirit of sportsmanship.
    In order to encourage the students in sports activities the Department of Physical Education conducts Intramural tournament in various <br>sports and games for Men and Women separately. The Department of Physical Education conducts selection trials to raise University teams <br>in various disciplines for Inter University and other tournament. The Department of Physical Education organizes various inter-university, <br>state level and national level tournaments every year, and<br> Smt. Rajeswari Viswanathan Memorial tournaments for schools and colleges.
    <br> To Know More - <a href="https://vit.ac.in/campuslife/sports">CLICK HERE</a></p>
    </div>
    <h2 style="color: black; position: absolute; top:620px;"> Want to see and Upload Photos of the Events that have happened....<h2>
    <a href="gallery.php"><input type="submit" value="CLICK ME...!!!" style="position: absolute; top:670px;color:red;font-size:15pt;background-color:yellow;font-weight:bold;"></a>
    <h2 style="position:absolute;right:210px;top:110px;color:black;"> SPORTS NEWS</h2>
    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:490px;background-color:#FFFFFF; border:1px solid #333333;position:absolute;right:10px;top:170px"><div id="rsswidget" style="height:500px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1620215978276&amp;x=https%3A%2F%2Fwww.sportskeeda.com%2Ffeed&amp;w=500&amp;h=500&amp;bc=333333&amp;bw=1&amp;bgc=FFFFFF&amp;m=20&amp;it=true&amp;t=Sports News - from Sports Keeda&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:500px; height:500px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:1px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>
        <p id="a"></p>
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