const express = require("express")
const app = express()
const data = require("./data/mysql")


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
    data.execute("select * from users").then(result =>{
        console.log(result);

        res.render("index"),{
            usser: result
        }
    })
    .catch(err => console.log(err));
});

app.listen(1212, () => {
    console.log("Working..");
});
              

