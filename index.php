<?php
include('login.php');

if(isset($_SESSION['admin'])){
header("location: selection.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project: Giant Robot Puppet</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/login.js" rel="scrpt"></script>
</head>
<body>
<div class="large-12 columns">
    <div class="row  mobile-open" >
        <div class="large-12 columns text-center">
            <img src="icons/bfg.png" id="puppet">
            <h1>B.F.G.P.</h1>
        </div>
    </div>
    <div class="row">
        <div class="large-8 columns text-center">
            <div class="callout">
                <h6>Meet the</h6>
                <h5>Big Friendly Gigantic Puppet</h5>
                <div class="row input-group" id="group" style="display: none">
                    <form action="">
                        <div class="row">
                            <div class="large-4 medium-4 small-centered columns">
                                <input type="text" placeholder="5 Letter Code from Admin" name="room code" />
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="button" value="Enter Room" />
                        </div>

                        <div class="row">
                            <button type="button" class="back" id="gback" onclick="buttonHelper(this)"><img src="icons/Back-50.png"></button>
                        </div>
                    </form>
                </div>
                <div class="row input-group" id="admin" style="display: none">
                    <div class="large-8 columns text-center">
                        <h6>What's the secret password?</h6>
                        <div class="row">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="large-4 medium-4  small-centered columns">
                                        <input type="text" placeholder="Admin login" name="admin" required autofocus/>
                                    </div>
                                </div>
                                <span><?php echo $error ?></span>
                                <div class="row">
                                    <input type="submit" class="button" name="login" value="Check-in" />
                                </div>
                                <div class="row">
                                    <button class="back" id="aback" onclick="buttonHelper(this)"><img src="icons/Back-50.png"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="columns small-centered login"  id="buttons">
                    <div class="row button-group">
                        <div class="large-4 medium-4 small-centered columns">
                            <button class="gbutton" id="bgroup" onclick="buttonHelper(this)">Join Room</button>
                            <button id="badmin" onclick="buttonHelper(this)">Admin Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <footer class="large-12 text-right"><p style="font-size:small; color:lightgrey; padding-right: 10px;">Powered by Raspberrry Pi</p></footer>
    </div>
</div>
</body>
</html>