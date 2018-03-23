var socket  = require( 'socket.io' );
var express = require('express');
var app     = express();
var server  = require('http').createServer(app);
var io      = socket.listen( server );
var port    = process.env.PORT || 3000;
var online_count = 0;
server.listen(port, function () {
  console.log('Server listening at port %d', port);
});


io.on('connection', function (socket) {
  online_count++;
  io.emit('online_count', online_count);

  socket.on('new_message', function(data) {
    io.sockets.emit( 'new_message', {
    	name: data.name,
    	avatar: data.avatar,
    	message: data.message,
    	created_at: data.created_at,
    	id: data.id
    });
  });

  socket.on( 'new_feature', function(data) {
    io.sockets.emit('new_feature',{
    	feature_name: data.feature_name,
    	feature_description: data.feature_description
    });
  });

  socket.on('disconnect', function (socket) {
    online_count--;
    io.emit('online_count', online_count);
  });
});
