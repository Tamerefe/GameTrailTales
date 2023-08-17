$(document).ready(function(){
    $("#exit1").click(function(){
		$(".games1").hide();
	});
	$("#exit2").click(function(){
		$(".games2").hide();
	});
	$("#exit3").click(function(){
		$(".games3").hide();
	});
	$(".mybb").dblclick(function(){
		$(this).hide();
	  });
});


									//Clock

function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('clock').innerHTML =
	h + ":" + m + ":" + s;
	var t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
  }


  $(document).ready(function(){
	$("i.chan").click(function(){
		$(".clock").toggleClass("rainbow");
		$(".clock").prev().toggleClass("rainbow")
	});
	$("i.chan").dblclick(function(){
		$(".clock").toggleClass("clock2");
		$(".clock").prev().toggleClass("clock2")
	});
});

									   //Clock End

// 2023

$("i.chnclc").click(function(){
	if( $("i.chnclc").hasClass("chan2")) { 
		$(".chan2").addClass("fa-toggle-on");
		$(".chan2").removeClass("fa-toggle-off");
		$(".chan2").addClass("chan3");
		$(".chan3").removeClass("chan2");
		$(".bg-light").addClass("bg-dark");
		$(".bg-dark").removeClass("bg-light");
		$(".bg-bt").addClass("bg-wt");
		$(".bg-wt").removeClass("bg-bt");
		$(".text-dark").addClass("text-light");
		$(".text-light").removeClass("text-dark");
		$(".yazi").addClass("yazi2");
		$(".yazi2").removeClass("yazi");
		$(".text-white").addClass("tx-bt");
		$(".tx-bt").removeClass("text-white");
		$(".page").addClass("paged");
		$(".paged").removeClass("page");
		$(".line").addClass("lineb");
		$(".lineb").removeClass("line");
	} else { 
		$(".chan3").addClass("fa-toggle-off");
		$(".chan3").removeClass("fa-toggle-on");
		$(".chan3").addClass("chan2");
		$(".chan2").removeClass("chan3");
		$(".bg-dark").addClass("bg-light");
		$(".bg-light").removeClass("bg-dark");
		$(".bg-wt").addClass("bg-bt");
		$(".bg-bt").removeClass("bg-wt");
		$(".text-light").addClass("text-dark");
		$(".text-dark").removeClass("text-light");
		$(".yazi2").addClass("yazi");
		$(".yazi").removeClass("yazi2");
		$(".tx-bt").addClass("text-white");
		$(".text-white").removeClass("tx-bt");
		$(".paged").addClass("page");
		$(".page").removeClass("paged");
		$(".lineb").addClass("line");
		$(".line").removeClass("lineb");
	} 
});

$("i.btnchn").click(function(){
	if( $("i.btnchn").hasClass("chan4")) { 
		$(".chan4").addClass("fa-angle-double-up");
		$(".chan4").removeClass("fa-angle-double-down");
		$(".chan4").addClass("chan5");
		$(".chan5").removeClass("chan4");
	} else { 
		$(".chan5").addClass("fa-angle-double-down");
		$(".chan5").removeClass("fa-angle-double-up");
		$(".chan5").addClass("chan4");
		$(".chan4").removeClass("chan5");
	} 
});

setTimeout(function(){
	document.querySelector('.stickybuttons').style.display = "flex";
}, 50000);

document.querySelector('.stickybuttons').addEventListener('click', function() {
	document.querySelector(".stickybuttons").style.display = "none";
});

document.querySelector('#hcx').addEventListener('click', function() {
	document.querySelector(".stickybuttons").style.display = "none";
});

$(function() {
	var pageTitle = $("title").text();
	
	$(window).blur(function() {
	  $("title").text("I waiting for you here 🥺");
	});
	
	$(window).focus(function() {
	  $("title").text(pageTitle);
});
});

// var n1 = document.getElementById("codenum").elements[0].value; 
// var n2 = document.getElementById("codenum").elements[1].value; 
// var n3 = document.getElementById("codenum").elements[2].value; 
// var n4 = document.getElementById("codenum").elements[3].value; 
// var n5 = document.getElementById("codenum").elements[4].value; 

// var num = parseInt(n1 + n2 + n3 + n4 + n5)

// console.log(num);

var ytvid = ["https://www.youtube-nocookie.com/embed/ASatRN-3i9I","https://www.youtube-nocookie.com/embed/wlM_O2HVda4","https://www.youtube-nocookie.com/embed/EOScSx8Kx3c",
"https://www.youtube-nocookie.com/embed/ttk_EEIT_Tc","https://www.youtube-nocookie.com/embed/hb4dWQ97ryY","https://www.youtube-nocookie.com/embed/QbybFMiW9wY",
"https://www.youtube-nocookie.com/embed/7o5qXTkhX64","https://www.youtube-nocookie.com/embed/26n6XaXPtYg", "https://www.youtube-nocookie.com/embed/793E_c9-Qkw",
"https://www.youtube-nocookie.com/embed/VaXZ-A9w3Mw","https://www.youtube-nocookie.com/embed/71HjXIqTSxE","https://www.youtube-nocookie.com/embed/-UcX27ed99o",
"https://www.youtube-nocookie.com/embed/17JZxmW_RPY","https://www.youtube-nocookie.com/embed/PFNL0zUssHA","https://www.youtube-nocookie.com/embed/Gml46SDJ5DQ",
"https://www.youtube-nocookie.com/embed/48_39XJAabc","https://www.youtube-nocookie.com/embed/2mFHRlVNP3Q","https://www.youtube-nocookie.com/embed/Awy6LABMLAM",
"https://www.youtube-nocookie.com/embed/w5sWQq_fkXA","https://www.youtube-nocookie.com/embed/tD3pvtvoUP4"]
var ythead = ["Mortal Kombat 1 - Official Pre-Order Beta Weekend Trailer","The Lords of the Fallen: The First 13 Minutes of Gameplay",
"Modern Warfare 3 Release Date, Across the Spider-Verse on Digital, & More! | IGN The Weekly Fix","Overwatch 2: Invasion - Official Illari Origin Story Trailer",
"Red Dead Redemption 1 - 15 Things You Need To Know Before You Buy On PS4 (PS5 BC) And Switch","10 Years Later, GTA 5 Is Still A Beast...",
"10 Bad Games With GOOD IDEAS", "GTA 6 Released A Huge Update...", "Valve Get LEGAL! Red Dead’s $50 FAIL, Square Enix Are NOT Happy Over FFXVI",
"Ubisoft Are Getting SHREDDED By The Internet","87% Of Games Are Dead.", "EA Games SPLIT! Xbox Price Hike, Halo Infinite’s Sad Cut, Twitch Mimic YouTube & MORE",
"What happened to Dark & Darker?","2023's BEST Looking NEW Survival Game - Enshrouded Gameplay Impressions","The Day Before: Even WORSE Than We Thought",
"Black Desert Online is Unrecognizable in 2023","CANCELLED❗️Gamer Girl - Official Teaser Trailer (2020)", "Why are there so few professional female gamers? - BBC News",
"when a GAMER GIRL gets EXPOSED lol","Inside world of female gamers - BBC News"]
var ytexp = ["Watch the latest trailer for the upcoming fighting game Mortal Kombat 1. A Beta for Mortal Kombat 1 runs from August 18 through August 21, 2023, and access to the beta is available with pre-orders of the game.",
"We shine our umbral lamp on the opening of the upcoming Lords of the Fallen. Find out how it all begins in the first 13 minutes of gameplay from Hexworks' ambitious soulslike. For more Lords of the Fallen, check out all of our IGN First coverage throughout the month of August.",
"Wanna catch up on all the gaming and entertainment news highlights from the past week? From Call of Duty: Modern Warfare 3's release date being announced, to Spider-Man: Across the Spider-Verse coming to digital platforms, tune in for the Weekly Fix - the only show packed with the recommended weekly dose of gaming, entertainment, and esports news!",
"Learn more about Overwatch 2's newest support hero Illari in this latest trailer. Her whole life was dedicated to becoming a Child of the Sun. Now, she’s the only one left. ",
"That Rockstar has managed to tick off a great many people with how it’s handling its upcoming Red Dead Redemption port would be a bit of an understatement. From its price to its lack of upgrades to even the platforms it’s launching for (or not launching for, to be more precise), there’s plenty about the upcoming Red Dead port that’s raised more than a few eyebrows, to say the least. ",
"It’s been almost 10 years since Rockstar released Grand Theft Auto 5 for the PS3 and Xbox 360, and it still stands tall as one of the best open-world games on the market. Not only that, but the game remains very relevant to this date, and Rockstar continues to cater to that never ending demand with new console ports and regular updates to the GTA Online component. ",
"Some games don't turn out so great but there are occasionally a few good ideas worth saving.",
"GTA 6 Released A Huge Update... We just got Exciting News for GTA 6, They FINALLY Did It! Rockstar recently gave us a new update to Grand Theft Auto 6, including a massive Development Update, New Details about GTA Online, Rockstar talks release date window and more...",
"Valve are cleaning up Steam - it's great to see! Take Two raise eyebrows with their Red Dead attempt, and we've gained insight into Square Enix's thinking. 00:00 Intro <br>00:34 The Story - Red Dead’s Really Rough Revival <br>06:44 The Story - Valve Really Want Battle Passes Gone!  <br>12:30 The Story - Shocker! Square Are Disappointed?! <br>18:08 The Headlines - Sony’s Cloud Ambitions & Embracer’s Hubris?!",
"Ubisoft accidentally stumbled into a public relations nightmare - one where the headlines may not reflect what's really going on.",
"Well that's rather shocking, especially as this horrifying statistic is NOT about retro games.",
"EA are changing up how they do things, price hikes are on the way, spreadsheets in space just got literal, and a bunch more! 00:00 Intro <br>00:24 The Story - Burying The Past To Serve The Future <br>01:44 The Story - Microsoft Blinked… Price Hikes Inbound! <br>03:37 The Story - Twitch Finally ‘Appear’ On Par With YT?<br>08:29 The Story - EA Sports… Its No Longer In The Games?! <br>12:15 The Story - Halo Completely Gives Up On Narrative?! <br>13:41 The Story - Invasion Of The Spreadsheet Armada!",
"Dark & Darker was one of the most promising new games scheduled to release in 2023. But then things went very, very, wrong. What happened? Where is the game now? Will it ever release?",
"Last week I got the chance to check out an hour of Enshrouded Gameplay, and was pretty impressed. This upcoming Open World Survival Action RPG is looking to be one of the best NEW survival games coming in 2023. And potentially a great follow up to the developers previous game Portal Knights. Let's dive in to what I saw!",
"Every time I check back up on The Day Before, things continue to look worse and worse. The November release is coming quick, but I wouldn't hold my breath. The first 1,000 people to use the link will get a 1 month free trial of Skillshare.",
"BDO has gone through many changes since it released in 2014, most notably having improved many Quality of Life aspects that use to be a pain. Black Desert Online's latest expansion 'Land of The Morning Light' is free to access for all levels!",
"Adopt the role of moderator for up and coming streamer ‘Abicake99’, who’s back online after the mysterious disappearance of her friend Becky. Featuring multi-branched narrative and real-time chat simulation, your role as moderator is to control the stream, level up mod powers, guide Abi’s choices and uncover the threat she faces by an anonymous stalker who hides in the stream’s chat. Developed by FMV Future with the writer and director of The Bunker. Co-developed and Published by Wales Interactive, who brought you The Complex, Late Shift and Maid of Sker.",
"The number of female gamers is growing rapidly with nearly half the world’s gaming community now made up of women and girls. While there are plenty of successful female gaming influencers and personalities – few are making it in esports – the competitive side of video games. Research shared exclusively with the BBC has shown there are no female players in the top 300 earners and only a tiny fraction of the millions of prize money being won in competitions around the world is going to women.",
"➭ SUBSCRIBE FOR MORE FUTURE CALL OF DUTY MODERN WARFARE 2 VIDEOS !!! when a GAMER GIRL gets EXPOSED lol (MODERN WARFARE 2)",
"Stephanie Harvey and Julia Kiran are two of the most famous female gamers in the world, but they recurrently face online trolling and a huge gender pay gap.  The BBC's 100 women team follow Julia and Stephanie at one of the biggest esports tournaments of the year in Paris.  Video produced by Georgina Pearce and Vladimir Hernandez; filmed and edited by Chris West"]
var ytcrtm = ["Aug 15, 2023","Aug 14, 2023","Aug 12, 2023","Aug 11, 2023","Aug 15, 2023","Aug 13, 2023","Jul 17, 2023","Aug 14, 2023","Aug 9, 2023",
"Jul 27, 2023","Jul 14, 2023","Jul 4, 2023","Aug 7, 2023","Jul 13, 2023","Jun 30, 2023","Jun 27, 2023","Jul 16, 2020","Sep 7, 2021","Jun 9, 2023","Nov 22, 2016"]


$(".button-30").click(function(){

	if(this.value == "1"){
		document.querySelector('#crd1').getElementsByTagName('iframe')[0].src= ytvid[0]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[0]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[0]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[0]

		document.querySelector('#crd2').getElementsByTagName('iframe')[0].src= ytvid[1]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[1]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[1]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[1]

		document.querySelector('#crd3').getElementsByTagName('iframe')[0].src= ytvid[2]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[2]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[2]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[2]

		document.querySelector('#crd4').getElementsByTagName('iframe')[0].src= ytvid[3]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[3]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[3]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[3]
	} else if(this.value == "2"){
		document.querySelector('#crd1').getElementsByTagName('iframe')[0].src= ytvid[4]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[4]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[4]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[4]

		document.querySelector('#crd2').getElementsByTagName('iframe')[0].src= ytvid[5]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[5]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[5]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[5]

		document.querySelector('#crd3').getElementsByTagName('iframe')[0].src= ytvid[6]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[6]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[6]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[6]

		document.querySelector('#crd4').getElementsByTagName('iframe')[0].src= ytvid[7]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[7]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[7]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[7]
	} else if(this.value == "3"){
		document.querySelector('#crd1').getElementsByTagName('iframe')[0].src= ytvid[8]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[8]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[8]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[8]

		document.querySelector('#crd2').getElementsByTagName('iframe')[0].src= ytvid[9]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[9]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[9]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[9]

		document.querySelector('#crd3').getElementsByTagName('iframe')[0].src= ytvid[10]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[10]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[10]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[10]

		document.querySelector('#crd4').getElementsByTagName('iframe')[0].src= ytvid[11]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[11]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[11]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[11]
	} else if(this.value == "4"){
		document.querySelector('#crd1').getElementsByTagName('iframe')[0].src= ytvid[12]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[12]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[12]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[12]

		document.querySelector('#crd2').getElementsByTagName('iframe')[0].src= ytvid[13]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[13]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[13]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[13]

		document.querySelector('#crd3').getElementsByTagName('iframe')[0].src= ytvid[14]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[14]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[14]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[14]

		document.querySelector('#crd4').getElementsByTagName('iframe')[0].src= ytvid[15]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[15]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[15]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[15]
	} else{
		document.querySelector('#crd1').getElementsByTagName('iframe')[0].src= ytvid[16]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[16]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[16]
		document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[16]

		document.querySelector('#crd2').getElementsByTagName('iframe')[0].src= ytvid[17]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[17]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[17]
		document.querySelector('#crd2').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[17]

		document.querySelector('#crd3').getElementsByTagName('iframe')[0].src= ytvid[18]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[18]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[18]
		document.querySelector('#crd3').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[18]

		document.querySelector('#crd4').getElementsByTagName('iframe')[0].src= ytvid[19]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[0].children[0].innerHTML= ythead[19]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[1].innerHTML= ytexp[19]
		document.querySelector('#crd4').getElementsByTagName('div')[1].children[3].children[0].innerHTML= ytcrtm[19]
	}
});	
