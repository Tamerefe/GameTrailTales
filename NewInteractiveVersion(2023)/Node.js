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

app.use("/login", async function(req, res) {
    res.render("LoginPage");

    try {
        const [usrs, ] = await data.execute("select * from users")
        console.log(usrs[0]);
    } catch(err) {
        console.log(err);
    }
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
              

