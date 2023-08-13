const express = require("express")
const app = express()
const pRoute = require("./routes/pages")

var jsdom = require('jsdom');
const { JSDOM } = jsdom;
const { window } = new JSDOM();
const { document } = (new JSDOM('')).window;
global.document = document;

var $ = jQuery = require('jquery')(window);

app.use(express.static(__dirname, { // host the whole directory
    extensions: ["html", "htm", "gif", "png","ejs"],
}))

app.set("view engine","ejs")

app.use(pRoute)

app.listen(1212, () => {
    console.log("Working..");
});
              

