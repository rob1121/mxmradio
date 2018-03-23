
<div class="row">
  <div class="ten wide column">
    <div class="ui segments">
      <div class="ui teal segment">
        <h2 class="ui header">
        Chat Box
        (<small id="online_count" hidden placeholder='active listener'>5</small>)
        <i class="comments icon"></i>
        </h2>
      </div>
      <div class="ui segment">
      <div class="ui comments" id="message-tbody" style="height:300px; overflow:auto;">
        <?php foreach ($messages as $message):?>
        <div class="comment">
          <a class="avatar">
            <img src="<?php echo $message->avatar; ?>">
          </a>
          <div class="content">
            <a class="author disable"><?php echo $message->name; ?></a>
            <div class="metadata">
              <span class="date"><?php echo $message->created_at; ?></span>
            </div>
            <div class="text">
            <?php echo $message->message; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
      </div>
      <div class="ui segment">
        <div class="ui form">
          <div class="ui two fields">
            <div class="field">
              <label>Codename</label>
              <input id="name" type="text" placeholder="Your codename">
            </div>
            <div class="field">
              <label>Avatar</label>
              <div class="ui fluid selection dropdown">
                <input id="avatar" type="hidden" name="avatar">
                <i class="dropdown icon"></i>
                <div class="default text">Select Avatar</div>
                <div class="menu">
                  <?php foreach($avatars as $avatar): ?>
                  <div class="item" data-value="<?php echo $avatar->avatar_url; ?>">
                    <img class="ui mini avatar image" src="<?php echo $avatar->avatar_url; ?>">
                    <?php echo $avatar->avatar_name; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Your message</label>
            <input type="text" id="message" name="message" placeholder="Please enter your message here...">
          </div>
          <label>
            <input type="checkbox" name="mute" id="mute"> mute
          </label>
          <button class="ui fluid teal button" id="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="six wide column">
    <div class="ui segments">
      <div class="ui teal segment">
        <h2 class="ui header">
MXM RADIO
          <i class="news icon"></i>
        </h2>
      </div>
      <div class="ui segment">
                    
          <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
        <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
        <script type="text/javascript">
        MRP.insert({
        'url':'http://10.197.80.12:8000/stream',
        'codec':'mp3',
        'volume':100,
        'autoplay':true,
        'forceHTML5':true,
        'jsevents':true,
        'buffering':0,
        'title':'GFE RADIO',
        'wmode':'transparent',
        'skin':'radiovoz',
        'width':500,
        'height':69
        });
        </script>
      </div>
    </div>
  </div>
  </div>
</div>
	<script>
  $(document).ready(function(){
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );
    var isMute = $('#mute').is(':checked'); 

    //$(".comments").emojioneArea();


    $('.ui.dropdown').dropdown();
    $('.message .close').on('click', function() {
      $(this)
        .closest('.message')
        .transition('fade')
      ;
    });

    $("#message").on('keyup', function (e) {
        if (e.keyCode == 13) {
          $( "#load" ).show();
          var dataString = {
            name : $("#name").val(),
            avatar : $("#avatar").val(),
            message : $("#message").val()
          };

          $.ajax({
              type: "POST",
              url: "<?php echo base_url('chat/submit');?>",
              data: dataString,
              dataType: "json",
              success: function(data){
                $("#message").val('');

                if(data.success == true){
                  socket.emit('new_message',{
                    id: data.id,
                    name: data.name,
                    avatar: data.avatar,
                    message: data.message,
                    created_at: data.created_at
                  });
                } else if(data.success == false){
                  $("#message").val(data.message);
                }
              },
              error: function(xhr, status, error) {
                alert(error);
              }
          });
        }
    });


    $('#mute').change(function() {
      isMute = $(this).is(':checked'); 
    });

    $("#submit").click(function(){
      $( "#load" ).show();
       var dataString = {
              name : $("#name").val(),
              avatar : $("#avatar").val(),
              message : $("#message").val()
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('chat/submit');?>",
            data: dataString,
            dataType: "json",
            success: function(data){
              $("#message").val('');

              if(data.success == true){
                socket.emit('new_message',{
                  id: data.id,
                  name: data.name,
                  avatar: data.avatar,
                  message: data.message,
                  created_at: data.created_at
                });
              } else if(data.success == false){
                $("#message").val(data.message);
              }
            },
            error: function(xhr, status, error) {
              alert(error);
            }
        });
    });
    socket.on('online_count',function(count) {
      if(count){
        $('#online_count').text(count);
        $('#online_count').show();
      } else {
        $('#online_count').hide();
      }
    });

    socket.on('new_message',function(data) {
      $("#message-tbody").prepend(
        '<div class="comment">'+
          '<a class="avatar">'+
            '<img src="'+data.avatar+'">'+
          '</a>'+
          '<div class="content">'+
            '<a class="author disable">'+data.name+'</a>'+
            '<div class="metadata">'+
              '<span class="date">'+data.created_at+'</span>'+
            '</div>'+
            '<div class="text">'+data.message+'</div>'+
          '</div>'+
        '</div>'
      );
      if(!isMute) $('#notif_audio')[0].play();

      // $('.comment').each(function(i, d){
      //   $(d).emoji();
      // });
    });



    socket.on('new_feature',function(data) {
      if(!isMute) $('#notif_audio')[0].play();
      $("#message_area").html('');
      $("#message_area").html(
        '<div class="ui message">'+
          '<i class="close icon"></i>'+
          '<div class="header">'+data.feature_name+'</div>'+
          data.feature_description+
        '</div>'
      );


      $('.message .close').on('click', function() {
        $(this)
          .closest('.message')
          .transition('fade')
        ;
      });
    });


  });


  var song;
  var amp;
  var volHistory = [];

  function preload(){
    song = loadSound('assets/mp3/the way you look tonight.mp3');
  }

  function setup(){
    var width = document.getElementById('sketch').offsetWidth;
    createCanvas(width-30, 300).parent('sketch');
    var playButton = select('#play');
    var pauseButton = select('#pause');
    playButton.mousePressed(function(){
      if(!song.isPlaying()){
        song.play();
      }
    });
    pauseButton.mousePressed(function(){
      if(song.isPlaying()){
        song.pause();
      }
    });
    amp = new p5.Amplitude();
  }

  function draw(){
    background(0);
    var vol = amp.getLevel();
    volHistory.push(vol);
    stroke(255);
    noFill();
    beginShape();
    for (let i = 0; i < volHistory.length; i++) {
      var y = map(volHistory[i], 0, 1, height/2, 0);
      vertex(i,y);
    }
    endShape();

    if (volHistory.length > width-30){
      volHistory.splice(0,1);
    }
  }

  function windowResized() {
    var width = document.getElementById('sketch').offsetWidth;
    resizeCanvas(width-30, 300);
  }

  </script>
