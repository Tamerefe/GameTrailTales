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
    res.render("Reviews"+req.params.rwsno , { title: 'Express', session : req.session });
});

router.use("/gamecalendar", function(req, res) {
    res.render("Gcalendar" , { title: 'Express', session : req.session });
});

router.get("/login", function(req, res) {
    res.render("LoginPage", { title: 'Express', session : req.session });
});

router.post("/login", express.urlencoded(), async function(req, res) {

    let lgnnm = 0

    // SESSION OLAYI BOZUK ONU HALLET
    console.log(req.session);

    try {
        const [usrs, ] = await data.execute("select * from users") 
        for (let i = 0; i < usrs.length; i++) {
            if (req.body.name === usrs[i].iduser || req.body.name === usrs[i].mailuser){
                if (req.body.password === usrs[i].passworduser){
                    lgnnm = 1;
                }
            }
        } if (lgnnm == 1){
            res.redirect("/");
        } else {
            res.redirect("/login");
        }
    } catch(err) {
        console.log(err);
    }
});

router.use("/signup", function(req, res) {
    res.render("Signup" , { title: 'Express', session : req.session });
});

router.get("/reset", function(req, res) {
    res.render("PswRst" , { title: 'Express', session : req.session });
});

router.post("/reset", express.urlencoded(), async function(req, res) {

    let rstnm = 0
    
    try {
        const [usrs, ] = await data.execute("select * from users") 
        for (let i = 0; i < usrs.length; i++) {
            if (req.body.email === usrs[i].mailuser){
                rstnm = 1
            }
        } if (rstnm == 1){
            res.render("ResetCode");
        } else {
            res.redirect("/reset");
        }
    } catch(err) {
        console.log(err);
    }
});

router.use("/", (req, res) => {
    res.render("Blog" , { title: 'Express', session : req.session })
});

module.exports = router;