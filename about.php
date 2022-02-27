<!DOCTYPE html>
<html>
    <head>
        <title>ABOUT PAGE</title>
        <link rel="stylesheet" href="webcss.css">
        <style>
        #up{
            text-align: center; 
            font-size:30pt;
            color:black;
            font-weight:bold;
        }
        #ab1{
            color:black;
            font-size:15pt;
            font-weight:bold;
        }
        #ben{
                color: red;
                font-weight: bold;
                font-size: 15pt;
            }
        </style>
        <?php
            include("auth.php");
        ?>
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
    <div id="up"><p>About Page</p></div>
    <p id="ben">This Website was built for any institutions that are willing to help their students to know more about the sports and <br> facilities in their campus..
    Here we also provided an option for knowing the health and sports news.... <br>
    Please gor through the links to know more about this website.... we have also provided <br>
    with a chatbot which will be live in our this page and can be found as pop-up in other pages....</p>
    <table id="ab1">
    <ul>
    <tr>
    <td><li>Want to challenge yourself </td><td> - </td><td><a href="Health Challenge.php"> CLICK HERE </a></li></td>
    </tr>
    <tr>
    <td><li>Want to know more about facilities available </td><td> - </td><td><a href="facilities.php"> CLICK HERE </a></li></td>
    </tr>
    <tr>
    <td><li>Want to know more about your health </td><td> - </td><td><a href="references.php"> CLICK HERE </a></li></td>
    </tr>
    <tr>
    <td><li>Want to know about the sports events happening in and around</td><td> - </td><td><a href="events.php"> CLICK HERE </a></li></td>
    </tr>
    <tr>
    <td><li>Want to see some photos </td><td> - </td><td><a href="gallery.php"> CLICK HERE </a></li></td>
    </tr>
    <tr>
    <td><li>Need Help </td><td> - </td><td><a href="contact.php"> CLICK HERE </a></li></td>
    </tr>
    </ul>
    </table>
    <h2 style="color:red;">Health News - to improve your fitness</h2>
    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:800px;background-color:#FFFFFF; border:1px solid #333333;"><div id="rsswidget" style="height:175px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1620217145067&amp;x=http%3A%2F%2Felitenutritionandperformance.com%2Ffeed%2F&amp;w=800&amp;h=200&amp;bc=333333&amp;bw=1&amp;bgc=FFFFFF&amp;m=20&amp;it=true&amp;t=Sports Health News - from Elite Nutrition and Performance&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=false&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:800px; height:200px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:1px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>
    <p id="a"></p>
        <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<div id="myLandbot" style="width: 30%; height: 550px; position: absolute; right: 10px; top: 150px;"></div>
<script>
  var myLandbot = new Landbot.Container({
    container: '#myLandbot',
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