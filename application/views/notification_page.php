<div class="row">
    <div class="sixteen wide column">
        <div class="ui segments">
            <div class="ui teal segment">
                <h2 class="ui header">New Feature</h2>
            </div>
            <div class="ui segment">
                <div class="ui form">
                    <div class="field">
                        <label>Feature Name</label>
                        <input type="text" name="feature_name" id="feature_name" placeholder="Feature Name">
                    </div>
                    <div class="field">
                        <label>Feature Description</label>
                        <textarea name="feature_description" id="feature_description"></textarea>
                    </div>
                    <button class="ui button" type="submit" id="submit_feature">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
  $(document).ready(function(){
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );

    $("#submit_feature").click(function(){
        var dataString = {
            feature_name: $("#feature_name").val(),
            feature_description: $("#feature_description").val()
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('notification/submit_feature');?>",
            data: dataString,
            dataType: "json",
            success: function(data){
              $("#message").val('');

              if(data.success == true){
                $("#feature_name").val('');
                $("#feature_description").val('');

                socket.emit('new_feature',{
                    feature_name: data.feature_name,
                    feature_description: data.feature_description,
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



    socket.on('new_feature',function(data) {
      $('#notif_audio')[0].play();
      $("#message_area").html('');
      $("#message_area").html(
        '<div class="ui message">'+
          '<i class="close icon"></i>'+
          '<div class="header">'+data.feature_name+'</div>'+
          data.feature_description+
        '</div>'
      );
    });

  });
</script>