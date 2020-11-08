var express = require('express');
var app = express();

var execPHP = require('./execphp.js')();

execPHP.phpFolder = 'C:\\xampp\\htdocs\\cours_php\\pendu-online\\client';

app.get('/', function (req, res) {
	//res.sendFile(__dirname + '/client/php/index.php');
	//res.redirect(__dirname + '/client/php/index.php');
	res.redirect('http://localhost:8080/php/index.php');
})

app.use(['*.php', '*.css'], function (request, response, next) {
	execPHP.parseFile(request.originalUrl, function (phpResult) {
		response.write(phpResult);
		response.end();
	});
});

app.listen(8080, function () {
	console.log('Node server listening on port 8080!');
});
