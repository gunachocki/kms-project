<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Multiple Images with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="webcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    #gimg{
        height: 100px;
        width: 100px;
    }
    #up{
            text-align: center; 
            font-size:20pt;
            color:black;
            font-weight:bold;
        }
    #container{
        text-align: center;
        color:red;
        font-size: 15pt;
        font-weight: bold;
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
    <div id="up"><p>Gallery</p></div>
<div id="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <table>
                   <tr<td>
                       <input type="file" name="imageFile[]" required multiple class="form-control" style="font-size: 15pt;
        font-weight: bold;">
                        <input type="submit" name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success" style="font-size: 15pt;
        font-weight: bold;"></td></tr>
        </table>
    </form>
</div>
    <div class="row">
        <?php
        $i = 1;
        include "connection.php";
        $queryGetImg = "SELECT * FROM gallery";
        $resultImg = $con->query($queryGetImg);
        if ($resultImg->num_rows > 0 ){
            while ($row = $resultImg->fetch_object()){ ?>
                <div class="col-sm-3">
                    <h3 style="color:black;">Image <?php echo $i;?></h3>
                    <img id="gimg" src="<?php echo 'uploads/'.$row->images;?>"/>
                </div>
           <?php $i++;
            }
        }
        ?>
    </div>
</div>
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