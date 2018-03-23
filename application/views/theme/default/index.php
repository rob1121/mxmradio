<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anonymous Chat System</title>
        <link href="<?php echo base_url('assets/css/semantic.min.css');?>" rel="stylesheet">
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js');?>"></script>
        <!-- <script src="https://raw.githubusercontent.com/rodrigopolo/jqueryemoji/master/js/jQueryEmoji.min.js"></script> -->
        <style>
        .ui.main.container{
            padding-top: 70px;
        }
        a.disable {
            pointer-events: none;
            cursor: default;
        }
        </style>
    </head>
    <body>

    <div class="ui fixed inverted massive menu">
        <div class="ui container">
        <div class="header teal item">
            <i class="group icon"></i>
            Anonymous Chat System
        </div>
        <!-- <a href="#" class="item">Home</a> -->
        </div>
    </div>

    <audio id="notif_audio"><source src="<?php echo base_url('sounds/notify.ogg');?>" type="audio/ogg"><source src="<?php echo base_url('sounds/notify.mp3');?>" type="audio/mpeg"><source src="<?php echo base_url('sounds/notify.wav');?>" type="audio/wav"></audio>


    <div class="ui main container">
    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column" id="message_area">
                <?php if (isset($notice)) : ?>
                    <?php echo $notice; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php echo $view_content; ?>
    </div>
    </div>
    <script src="<?php echo base_url('assets/js/semantic.min.js');?>"></script>
	<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/addons/p5.dom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/addons/p5.sound.min.js"></script>
  </body>
</html>