<!DOCTYPE html>
<html>
    <head>
        <title>FACILITIES PAGE</title>
        <link rel="stylesheet" href="webcss.css">
        <?php
            include("auth.php");
          ?>
        <style>
            #customers {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 77%;
              color: black;
            }
            
            #customers td, #customers th {
              border: 1px solid #ddd;
              padding: 5px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            #customers tr:nth-child(odd){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
              padding-top: 5px;
              padding-bottom: 1px;
              text-align: left;
              background-color: #4CAF50;
              color: white;
            }
            #guna{
              font-family: Arial,Helvetica,sans-serif;
              border-collapse: collapse;
              width:57%;
              color: black;
            }
            #guna td, #guna th {
              border: 1px solid #ddd;
              padding: 5px;
            }
            #guna tr:nth-child(even){background-color: #f2f2f2;}
            #guna tr:nth-child(odd){background-color: #f2f2f2;}
            #guna tr:hover{background-color: #ddd;}
            #guna th{
              padding-top:5px;
              padding-bottom: 1px;
              text-align: left;
              background-color: #4CAF50;
              color: white;
            }
            #up{
            text-align: center; 
            font-size:20pt;
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
    <div id="up"><p>Facilities Page</p></div>
        <p style="color:black;font-weight:bold;font-size:15pt;">This page will provide you the detailed facilities that are available in that institution which will help the students and the other members to know how to improve their skills...</p> 
  <table cellspacing=0 id="customers">
    <tr>
      <th> OUTDOOR  SPORTS INFORMATION</th>
      <th> COUNT</th>
        <th> INDOOR SPORTS INFORMATION</th>
        <th> COUNT</th>
      </tr>
<tr>
  <td>400 Mts Track and field</td>
  <td>1</td>
  <td>Badminton(Wooden floor, Men)</td>
  <td>3</td>
</tr>
<tr>
  <td>Football</td>
  <td>3</td>
  <td>Badminton(wooden floor,Women)</td>
  <td>2</td>
</tr>
<tr>
  <td>Cricket</td>
  <td>2</td>
  <td>Table tennis women</td>
  <td>8</td>
</tr>
<tr>
  <td>Badminton(Men,Floodlight)</td>
  <td>18</td>
  <td>Snooker A/c</td>
  <td>3</td>
</tr>
<tr>
  <td>Badminton(women,Floodlight)</td>
  <td>6</td>
  <td>Table Tennis Men</td>
  <td>16</td>
  </tr>
  <tr>
    <td>Basketball(synthetic Court Floodlit)</td>
    <td>1</td>
    <td>squash courts(wooden,Men)</td>
    <td>2</td>
    </tr>
    <tr>
      <td>Handball courts Floodlit</td>
      <td>5</td>
      <td>Squash courts(wooden,women)</td>
      <td>1</td>
      </tr>
      <tr>
        <td>Hockey field</td>
        <td>2</td>
        <td>Gymnasium(Indoor Men A/C)</td>
        <td>1</td>
        </tr>
        <tr>
          <td>Tennis(synthetic court Fllodlit)</td>
          <td>2</td>
          <td>Gymnasium(Indoor women, A&B A/C)</td>
          <td>1</td>
          </tr>
          <tr>
            <td>Tennis(Clay court Fllodlit)</td>
            <td>2</td>
            <td>Gymnasium(Indoor women A/C)</td>
            <td>1</td>
            </tr>
            <tr>
              <td>Volleyball(Floodlit)</td>
              <td>3</td>
              <td>Gymnasium(women Indoor)</td>
              <td>2</td>
              </tr>
              <tr>
                <td>Volleyball(synthetic court Fllodlit)</td>
                <td>2</td>
                <td>Multi Gym(Men)</td>
                <td>2</td>
                </tr>
                <tr>
                  <td>ThrowBall court Floodlit</td>
                  <td>2</td>
                  <td>FITTY A/C Gym</td>
                  <td>1</td>
                  </tr>
                </table><br><br>
                <table id="guna">

                  <tr>
                    <th>Swimming Pool</th>
                    <th> COUNT</th>
                  </tr>
                  <tr>
                    <td>Swimming pool Men(50*25m)</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td style="width:1000px;">Swimming pool women(25*12.5m)</td>
                    <td style="width:1000px;">1</td>
                  </tr>
                </table>
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