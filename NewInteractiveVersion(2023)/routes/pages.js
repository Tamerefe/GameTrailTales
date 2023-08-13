const express = require("express");
const router = express.Router()
const data = require("../data/mysql")

var jsdom = require('jsdom');
const { JSDOM } = jsdom;
const { window } = new JSDOM();
const { document } = (new JSDOM('')).window;
global.document = document;

var $ = jQuery = require('jquery')(window);

router.use("/reviews:rwsno", function(req, res) {
    res.render("Reviews"+req.params.rwsno);
});

router.use("/gamecalendar", function(req, res) {
    res.render("Gcalendar");
});

router.get("/login", function(req, res) {
    res.render("LoginPage");

    // try {

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

    // } catch(err) {
    //     console.log(err);
    // }

});

router.post("/login", express.urlencoded(), function(req, res) {
    res.render("LoginPage");
    console.log(req.body);
});

router.use("/signup", function(req, res) {
    res.render("Signup");
});

router.use("/reset", function(req, res) {
    res.render("PswRst");
});

router.use("/", (req, res) => {
    res.render("Blog")
});

module.exports = router;