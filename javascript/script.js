var express = require("express");
var mysql = require("mysql");
var  app =express()

var connection = mysql.createConnection({
    "host" : "localhost",
    "password" : "",
    "user" : "root",
    "database" : ""
});

connection.connect(function(){
    //callback handler
    if (!!Error){
        console.log('No connection established,please try again')
    } else{
        console.log("trying to establish connection, CONNECTED")
        

    }
});
app.get("/", function(req, resp){
    //mysql query goes on here
    connection.query("SELECT * FROM ",function(error,fields, rows){

    
    if (!!error){
        console.log('error in the query');
    }else{
        console.log("successful query");
    }
    });

});
app.listen(1337)