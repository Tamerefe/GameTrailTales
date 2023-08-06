const express = require("express")
const app = express()

app.set("view engine","ejs")

app.use(express.static(__dirname, { // host the whole directory
    extensions: ["html", "htm", "gif", "png","ejs"],
}))

app.use("/pr", function(req, res) {
    res.render("LoginPage");
});

app.use("/", (req, res) => {
    res.render("Blog")
});

app.listen(3000, () => {
    console.log("listening");
});



              

