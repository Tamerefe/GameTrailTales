const express = require("express")
const app = express()
const data = require("./data/mysql")


var jsdom = require('jsdom');
const { JSDOM } = jsdom;
const { window } = new JSDOM();
const { document } = (new JSDOM('')).window;
global.document = document;

var $ = jQuery = require('jquery')(window);


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

    // LOGIN KISMINI HALLEDECEKSIN DAHA GIRIS CIKIS ISLEMLERI ICIN YAPMAN GEREKENLER VAR

    // $(document).ready(function() {
    //     $("signB").click(function () {
    //         alert("Hello!");
    //         $(".hide_div").hide();    
    //     });
    // });       

    try {
        // $(document).ready(function() {
        //     $("#signB").click(async function() {
        //         console.log("calistimben");

        //         const [usrs, ] = await data.execute("select * from users") 
        //         console.log(usrs);

        //         let text = $("#usrnm").name;
        //         let psw = $("#pswrdus").name;
        //         console.log(text,psw);
        //         for (let i = 0; i < usrs.length; i++) {
        //             if (text === usrs[i].iduser){
        //             if (psw === usrs[i].passworduser){
        //                 console.log("welcome");
        //             } else {
        //                 console.log("your password is wrong");
        //             }
        //             } 
        //         }
        // });
    // });

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
              

