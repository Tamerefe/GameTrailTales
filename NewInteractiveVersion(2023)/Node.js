const express = require("express")
const app = express()
const pRoute = require("./routes/pages")
const bodyParser = require("body-parser")

app.use(express.static(__dirname, { // host the whole directory
    extensions: ["html", "htm", "gif", "png","ejs"],
}))

app.set("view engine","ejs")

app.use(pRoute)
app.use(bodyParser.urlencoded({extended: true }));
app.use(bodyParser.json());

app.listen(1212, () => {
    console.log("Working..");
});
              

