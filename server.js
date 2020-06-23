// var app = require('express')();
// var http = require('http').Server(app);
// var io = require('socket.io')(http);

//  app.get('/', function(req, res){
//      res.sendFile(__dirname + '/client/index.php');
//  })

// io.on('connection', function(socket){
//     console.log("User connected");
//     socket.on('disconnect', function(){
//         console.log("User disconnected");
//     })

// })

// http.listen(8080, function(){
//     console.log("Server running on 8080");
// });

var express = require('express');
var app = express();

var execPHP = require('./execphp.js')();

execPHP.phpFolder = 'C:\\xampp\\htdocs\\cours_php\\test\\client';

app.use(['*.php', '*.css'],function(request,response,next) {
	execPHP.parseFile(request.originalUrl,function(phpResult) {
		response.write(phpResult);
		response.end();
	});
});

app.listen(8080, function () {
	console.log('Node server listening on port 8080!');
});
