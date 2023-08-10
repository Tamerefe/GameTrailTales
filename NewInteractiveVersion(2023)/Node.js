const express = require("express")
const app = express()
const mysql = require("mysql2")
const config = require("./db/config")

app.set("view engine","ejs")

app.use(express.static(__dirname, { // host the whole directory
    extensions: ["html", "htm", "gif", "png","ejs"],
}))

app.use("/reviews:rwsno", function(req, res) {
    res.render("Reviews"+req.params.rwsno);
});

app.use("/gamecalendar", function(req, res) {
    res.render("Gcalendar");
});

app.use("/login", function(req, res) {
    res.render("LoginPage");
});

app.use("/signup", function(req, res) {
    res.render("Signup");
});

app.use("/reset", function(req, res) {
    res.render("PswRst");
});

app.use("/", (req, res) => {
    res.render("Blog")
});

app.listen(1212, () => {
    console.log("Working..");
});

let connection = mysql.createConnection(config.db);

connection.connect(function(err){
    if(err) {
        console.log(err);
    }
    console.log("work mysql");
})



              

