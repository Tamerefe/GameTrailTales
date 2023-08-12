const mysql = require("mysql2")
const config = require("../db/config")

let connection = mysql.createConnection(config.db);

connection.connect(function(err){
    if(err) {
        console.log(err);
    }
    console.log("Work mysql");
})

module.exports = connection.promise();