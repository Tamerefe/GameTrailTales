const express = require("express");
const router = express.Router()
const data = require("../data/mysql")

router.use("/reviews:rwsno", function(req, res) {
    res.render("Reviews"+req.params.rwsno);
});

router.use("/gamecalendar", function(req, res) {
    res.render("Gcalendar");
});

router.use("/login", function(req, res) {
    res.render("LoginPage");

    var ss = request.body.user_email_address;

    var aa = request.body.user_password;

    // $( "#form1" ).submit(function( event ) {
    //     alert($("#register\\.username").val().toString());
    //     var username = $("#register\\.username").val().toString();
    //     username = "somethinglol";
    //     alert(username);
    // });

    // function formsubmitFunction(){
    //     const users = {
    //         username: document.getElementById("usrnm").value,
    //         userpassword: document.getElementById("pswrdus").value
    //     }
    //     return users
    // }

    var user_nm = req.body

    // try {

        
    
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

    // } catch(err) {
    //     console.log(err);
    // }

    // if(user_name && user_password)
    // {
    //     query = `
    //     SELECT * FROM user_login 
    //     WHERE user_email = "${user_name}"
    //     `;

    //     database.query(query, function(error, data){

    //         if(data.length > 0)
    //         {
    //             for(var count = 0; count < data.length; count++)
    //             {
    //                 if(data[count].user_password == user_password)
    //                 {
    //                     request.session.user_id = data[count].user_id;

    //                     res.redirect("/");
    //                 }
    //                 else
    //                 {
    //                     res.send('Incorrect Password');
    //                 }
    //             }
    //         }
    //         else
    //         {
    //             res.send('Incorrect Email Address');
    //         }
    //         res.end();
    //     });
    // }
    // else
    // {
    //     res.send('Please Enter Email Address and Password Details');
    //     res.end();
    // }

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