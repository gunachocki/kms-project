<!DOCTYPE html>
<html>
    <head>
        <title>HEALTH CHALLENGE PAGE</title>
        <link rel="stylesheet" href="webcss.css">
        <style>
            #ben{
                color: red;
                font-weight: bold;
                font-size: 15pt;
            }
            #ben1{
                color: black;
                position: absolute;
                top: 150px;
                right: 20px;
                background-color:lightgreen;
                width:37%;
                font-weight: bold;
            }
            #ben2{
                color: black;
                position: absolute;
                top: 400px;
                right: 20px;
                background-color:lightgreen;
                width:37%;
                font-weight: bold;
            }
            #ben3{
                color: black;
                position: absolute;
                top: 670px;
                right: 20px;
                background-color:lightgreen;
                width:37%;
                text-align: center;
                font-weight: bold;
            }
            <?php
            require('connection.php');
            include("auth.php");
            ?>
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
    <br><br>
    <p id="a"></p>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
  var myLandbot = new Landbot.Livechat({
    configUrl: 'https://chats.landbot.io/v3/H-867982-VUHIR3D20QGD8CVB/index.json',
  });
</script>
        <div id="ben">
        <p>Challenge yourself with the BMI Tracker and check whether you are on a healthy weight or not...<br>
        If not HAA.. no problem practices some exercises and indulge in some <br> sports to make it healthy... Some of them are listed on the side............</p></div>
        <br>
        <iframe src="https://bmicalculatorindia.com/widgets-in/widget.php?t=720x300" width="720" height="300" frameborder="0"></iframe>
        <br><br><br>   
        <form style="padding:0;margin:0;color: black;background-color:lightgreen;width:47%;" name="cat=Length">
        <table width=500 style="font-family:Verdana;font-size:100%;font-weight: bold;" cellpadding=0 cellspacing=0><tr><td>CONVERTER</td></tr><tr><td style="padding:1.2ex 1.5ex;width:50%;font-family:Verdana;font-size:13px">From:<br><input style="width:100%;font-family:Verdana;font-size:100%" type=text name="bindid=left;base=1"></td><td style="padding:1.2ex 1.5ex;width:50%;font-family:Verdana;font-size:13px">To:<br><input style="width:100%;font-family:Verdana;font-size:100%" type=text name="bindid=right"></td></tr><tr><td style="padding:1.2ex 1.5ex;width:50%;font-family:Verdana;font-size:13px">
        <select name=left size=1 style="width:100%;font-family:Verdana;font-size:100%"><option value="meter" selected>meter [m]</option><option value="centimeter">centimeter [cm]</option><option value="inch">inch [in]</option><option value="foot">foot [ft]</option><option value="millimeter">millimeter [mm]</option></select></td><td style="padding:1.2ex 1.5ex;width:50%;font-family:Verdana;font-size:13px">
        <select name=right size=1 style="width:100%;font-family:Verdana;font-size:100%"><option value="meter" selected>meter [m]</option><option value="centimeter">centimeter [cm]</option><option value="inch">inch [in]</option><option value="foot">foot [ft]</option><option value="millimeter">millimeter [mm]</option></select></td></tr><tr><td colspan=2 style="padding:1.2ex 1.5ex;font-family:Verdana;font-size:13px">Result:<br><input style="width:100%;font-family:Verdana;font-size:100%" type=text name="type=result;bindid=left;bindid2=right"></td></tr></table>
        </form>
    <script src=http://www.unitconversion.org/converter3/converter3.js></script>
        <div id="ben1">
        <p>These are some of the heavy sports to maintain you body</p>
        <ul>
            <li>SWIMMING - 1 HOUR - 888+ CALORIES BURNED</li>
            <li>KICKBOXING - 1 HOUR - 770+ CALORIES BURNED</li>
            <li>BASKETBALL - 1 HOUR - 700+ CALORIES BURNED</li>
            <li>RUNNING - 1 HOUR - 700+ CALORIES BURNED</li>
            <li>CYCLING  - 1 HOUR - 550+ CALORIES BURNED</li>
            <li>VOLLEYBALL - 1 HOUR - 400+ CALORIES BURNED</li>
            <li>TENNIS - 1 HOUR - 400+ CALORIES BURNED</li>
            <li>TAEKWONDO - 1 HOUR - 900+ CALORIES BURNED</li>
            <li>FOOTBALL - 1 HOUR - 670+ CALORIES BURNED</li>
        </ul>
        </div>
        <br><br>
        <div id="ben2">
        <p>These are some of the yoga practices that are used to maintain your body</p>
        <ul>
            <li>CHATURANGADANDASANA - PLANK POSE</li>
            <li>VIRABHADRASANA - WARRIOR POSE</li>
            <li>TRIKONASANA - TRIANGLE POSE</li>
            <li>ADHO MUKHA SVANASANA - DOWNNWARD DOG POSE</li>
            <li>SARVANGASANA - SHOULDER STAND</li>
            <li>SETHU BANDHA SARVANGASANA - BRIDGE POSE</li>
            <li>PARIVRTTA UTKATASANA - TWISTED CHAIR POSE</li>
            <li>DHANURASANA - BOW POSE</li>
            <li>SURYA NAMASKARA - SUN SALUTATION</li>
        </ul>
        </div>
        <div id="ben3">
        <a href="references.php">Need some more tips for weight loss or to know more about sports - CLICK HERE</a>
        </div>
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