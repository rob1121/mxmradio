<div class="row">
  <div class="ten wide column">
    <div class="ui segments">
      <div class="ui teal segment">
        <h2 class="ui header">
        Chat Box
        <i class="comments icon"></i>
        </h2>
        <h3>Online: <span id='listener-count'></span></h3>
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
            <br/>
            <div class="metadata" style='margin-left:0'>
              <span class="date"><?php echo $message->ipaddress; ?></span>
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
  var icons = {
    ':bowtie:' : 'bowtie.png',
':smile:' : 'smile.png',
':laughing:' : 'laughing.png',
':blush:' : 'blush.png',
':smiley:' : 'smiley.png',
':relaxed:' : 'relaxed.png',
':smirk:' : 'smirk.png',
':heart_eyes:' : 'heart_eyes.png',
':kissing_heart:' : 'kissing_heart.png',
':kissing_closed_eyes:' : 'kissing_closed_eyes.png',
':flushed:' : 'flushed.png',
':relieved:' : 'relieved.png',
':satisfied:' : 'satisfied.png',
':grin:' : 'grin.png',
':wink:' : 'wink.png',
':stuck_out_tongue_winking_eye:' : 'stuck_out_tongue_winking_eye.png',
':stuck_out_tongue_closed_eyes:' : 'stuck_out_tongue_closed_eyes.png',
':grinning:' : 'grinning.png',
':kissing:' : 'kissing.png',
':kissing_smiling_eyes:' : 'kissing_smiling_eyes.png',
':stuck_out_tongue:' : 'stuck_out_tongue.png',
':sleeping:' : 'sleeping.png',
':worried:' : 'worried.png',
':frowning:' : 'frowning.png',
':anguished:' : 'anguished.png',
':open_mouth:' : 'open_mouth.png',
':grimacing:' : 'grimacing.png',
':confused:' : 'confused.png',
':hushed:' : 'hushed.png',
':expressionless:' : 'expressionless.png',
':unamused:' : 'unamused.png',
':sweat_smile:' : 'sweat_smile.png',
':sweat:' : 'sweat.png',
':weary:' : 'weary.png',
':pensive:' : 'pensive.png',
':disappointed:' : 'disappointed.png',
':confounded:' : 'confounded.png',
':fearful:' : 'fearful.png',
':cold_sweat:' : 'cold_sweat.png',
':persevere:' : 'persevere.png',
':joy:' : 'joy.png',
':astonished:' : 'astonished.png',
':scream:' : 'scream.png',
':neckbeard:' : 'neckbeard.png',
':tired_face:' : 'tired_face.png',
':angry:' : 'angry.png',
':rage:' : 'rage.png',
':triumph:' : 'triumph.png',
':sleepy:' : 'sleepy.png',
':yum:' : 'yum.png',
':mask:' : 'mask.png',
':sunglasses:' : 'sunglasses.png',
':dizzy_face:' : 'dizzy_face.png',
':imp:' : 'imp.png',
':smiling_imp:' : 'smiling_imp.png',
':neutral_face:' : 'neutral_face.png',
':no_mouth:' : 'no_mouth.png',
':innocent:' : 'innocent.png',
':alien:' : 'alien.png',
':yellow_heart:' : 'yellow_heart.png',
':blue_heart:' : 'blue_heart.png',
':purple_heart:' : 'purple_heart.png',
':heart:' : 'heart.png',
':green_heart:' : 'green_heart.png',
':broken_heart:' : 'broken_heart.png',
':heartbeat:' : 'heartbeat.png',
':heartpulse:' : 'heartpulse.png',
':two_hearts:' : 'two_hearts.png',
':revolving_hearts:' : 'revolving_hearts.png',
':cupid:' : 'cupid.png',
':sparkling_heart:' : 'sparkling_heart.png',
':sparkles:' : 'sparkles.png',
':star:' : 'star.png',
':star2:' : 'star2.png',
':dizzy:' : 'dizzy.png',
':boom:' : 'boom.png',
':collision:' : 'collision.png',
':anger:' : 'anger.png',
':exclamation:' : 'exclamation.png',
':question:' : 'question.png',
':grey_exclamation:' : 'grey_exclamation.png',
':grey_question:' : 'grey_question.png',
':zzz:' : 'zzz.png',
':dash:' : 'dash.png',
':sweat_drops:' : 'sweat_drops.png',
':notes:' : 'notes.png',
':musical_note:' : 'musical_note.png',
':fire:' : 'fire.png',
':hankey:' : 'hankey.png',
':poop:' : 'poop.png',
':shit:' : 'shit.png',
':+1:' : '+1.png',
':thumbsup:' : 'thumbsup.png',
':-1:' : '-1.png',
':thumbsdown:' : 'thumbsdown.png',
':ok_hand:' : 'ok_hand.png',
':punch:' : 'punch.png',
':facepunch:' : 'facepunch.png',
':fist:' : 'fist.png',
':v:' : 'v.png',
':wave:' : 'wave.png',
':hand:' : 'hand.png',
':raised_hand:' : 'raised_hand.png',
':open_hands:' : 'open_hands.png',
':point_up:' : 'point_up.png',
':point_down:' : 'point_down.png',
':point_left:' : 'point_left.png',
':point_right:' : 'point_right.png',
':raised_hands:' : 'raised_hands.png',
':pray:' : 'pray.png',
':point_up_2:' : 'point_up_2.png',
':clap:' : 'clap.png',
':muscle:' : 'muscle.png',
':metal:' : 'metal.png',
':walking:' : 'walking.png',
':runner:' : 'runner.png',
':running:' : 'running.png',
':couple:' : 'couple.png',
':family:' : 'family.png',
':two_men_holding_hands:' : 'two_men_holding_hands.png',
':two_women_holding_hands:' : 'two_women_holding_hands.png',
':ok_woman:' : 'ok_woman.png',
':no_good:' : 'no_good.png',
':information_desk_person:' : 'information_desk_person.png',
':bride_with_veil:' : 'bride_with_veil.png',
':person_with_pouting_face:' : 'person_with_pouting_face.png',
':person_frowning:' : 'person_frowning.png',
':bow:' : 'bow.png',
':couplekiss:' : 'couplekiss.png',
':couple_with_heart:' : 'couple_with_heart.png',
':massage:' : 'massage.png',
':haircut:' : 'haircut.png',
':nail_care:' : 'nail_care.png',
':boy:' : 'boy.png',
':girl:' : 'girl.png',
':woman:' : 'woman.png',
':man:' : 'man.png',
':baby:' : 'baby.png',
':older_woman:' : 'older_woman.png',
':older_man:' : 'older_man.png',
':person_with_blond_hair:' : 'person_with_blond_hair.png',
':man_with_gua_pi_mao:' : 'man_with_gua_pi_mao.png',
':man_with_turban:' : 'man_with_turban.png',
':construction_worker:' : 'construction_worker.png',
':cop:' : 'cop.png',
':angel:' : 'angel.png',
':princess:' : 'princess.png',
':smiley_cat:' : 'smiley_cat.png',
':smile_cat:' : 'smile_cat.png',
':heart_eyes_cat:' : 'heart_eyes_cat.png',
':kissing_cat:' : 'kissing_cat.png',
':smirk_cat:' : 'smirk_cat.png',
':scream_cat:' : 'scream_cat.png',
':crying_cat_face:' : 'crying_cat_face.png',
':joy_cat:' : 'joy_cat.png',
':pouting_cat:' : 'pouting_cat.png',
':japanese_ogre:' : 'japanese_ogre.png',
':japanese_goblin:' : 'japanese_goblin.png',
':see_no_evil:' : 'see_no_evil.png',
':hear_no_evil:' : 'hear_no_evil.png',
':speak_no_evil:' : 'speak_no_evil.png',
':guardsman:' : 'guardsman.png',
':skull:' : 'skull.png',
':feet:' : 'feet.png',
':lips:' : 'lips.png',
':kiss:' : 'kiss.png',
':droplet:' : 'droplet.png',
':ear:' : 'ear.png',
':eyes:' : 'eyes.png',
':nose:' : 'nose.png',
':tongue:' : 'tongue.png',
':love_letter:' : 'love_letter.png',
':bust_in_silhouette:' : 'bust_in_silhouette.png',
':busts_in_silhouette:' : 'busts_in_silhouette.png',
':speech_balloon:' : 'speech_balloon.png',
':thought_balloon:' : 'thought_balloon.png',
':feelsgood:' : 'feelsgood.png',
':finnadie:' : 'finnadie.png',
':goberserk:' : 'goberserk.png',
':godmode:' : 'godmode.png',
':hurtrealbad:' : 'hurtrealbad.png',
':rage1:' : 'rage1.png',
':rage2:' : 'rage2.png',
':rage3:' : 'rage3.png',
':rage4:' : 'rage4.png',
':suspect:' : 'suspect.png',
':trollface:' : 'trollface.png',
//':beks:' :'beks.jpg',
':vic:' :'vic.jpg',
  };


  $(document).ready(function(){
    $('.text').each(function() {
      var text = $(this).text();
      text = textToEmojis(text);
      $(this).html(text);
    });

    var isMute = $('#mute').is(':checked'); 
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );


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
                    ipaddress: data.ipaddress,
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
                  ipaddress: data.ipaddress,
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

    socket.on('online_count',function(data) {
      $('#listener-count').text(data);
    });

    socket.on('new_message',function(data) {
      data.message = textToEmojis(data.message);

      $("#message-tbody").prepend(
        '<div class="comment">'+
          '<a class="avatar">'+
            '<img src="'+data.avatar+'">'+
          '</a>'+
          '<div class="content">'+
            '<a class="author disable">'+data.name+'</a>'+
            '<div class="metadata">'+
              '<span class="date">'+data.ipaddress+'</span>'+
              '<span class="date">'+data.created_at+'</span>'+
            '</div>'+
            '<div class="text">'+data.message+'</div>'+
          '</div>'+
        '</div>'
      );
      if(!isMute) $('#notif_audio')[0].play();
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

  function textToEmojis(text) {
    var textArr = text.trim().split(' ');
      if(textArr) {
        var size = textArr.length > 1 ? '20px': '40px';
        textArr = textArr.map(function(word) {
            return icons[word] != undefined ? "<img title='"+word+"' height='"+size+"' src='assets/js/images/"+icons[word]+"'>" : word;
        });
      }

      return textArr.join(' ');
  }

  </script>
