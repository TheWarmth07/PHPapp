var express = require("express");
var app = express();

// "/" => "Hi there!"
app.get("/", function(req, res){
	res.send("Hi there!")
});
//Cloud9 port
app.listen(process.env.PORT, process.env.IP, function(){
	console.log("Server has started!!!");
});