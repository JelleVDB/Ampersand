<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ampersand - Pics</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="style/lightbox.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,900,300' rel='stylesheet' type='text/css'>

    <!--  Javascript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="script/responsivemobilemenu.js"></script>
    <script type="text/javascript" src="script/bootstrap.js"></script>
    <script type="text/javascript" src="script/lightbox.js"></script>
</head>
<body>
<?php
require('script/imageLoader.php')
?>
<!--http://placehold.it/format(xformat)/background/textcolor&text=tekst-->
<div id="container">
    <header>
        <div class="rmm" data-menu-style="minimal">
            <ul>
                <li><a href="index.html" class="logo">AMPERSAND</a></li>
                <li><a href="music.html">MUSIC</a></li>
                <li><a href="gigs.html">GIGS</a></li>
                <li><a href="bio.html">BIO</a></li>
                <li><span>PICS</span></li>
                <li><a href="video.html">VIDEO</a></li>
                <li><a href="#contact" data-toggle="modal">CONTACT</a></li>
            </ul>
        </div>
    </header>
    <div class="content">
        <a class="picsreturn" href="pics.php">< Back</a>
        <div class="pictures">
            <?php
            readImages("Concert1");
            ?>
        </div>

    </div>
    <div class="modal fade" id="contact" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" name="contactform" method="post" action="script/send_contact_mail.php">
                    <div class="modal-header">
                        <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="you@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-msg" class="col-lg-2 control-label">Message:</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="contact-msg" id="contact-msg" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-default" data-dismiss="modal">Close</a>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <nav class="socialmedia">
            <ul>
                <li><a href="https://www.facebook.com/ampersand.info" target="_blank"><img src="images/media/facebook.png" /></a></li>
                <li><a href="https://www.youtube.com/user/Ampersandproduction" target="_blank"><img src="images/media/youtube.png" /></a></li>
                <li><a href="#"><img src="images/media/twitter.png" /></a></li>
                <li><a href="http://vi.be/ampersand" target="_blank"><img src="images/media/vibe.png" /></a></li>
                <li><a href="https://soundcloud.com/ampersand-5" target="_blank"><img src="images/media/soundcloud.png" /></a></li>
            </ul>
        </nav>
    </footer>
</div>
</body>
</html>