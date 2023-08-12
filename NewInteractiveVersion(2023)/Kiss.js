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
	});
	$("i.chan").dblclick(function(){
		$(".clock").toggleClass("clock2");
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


$("i.chan5").click(function(){
	document.querySelector('#crd1').getElementsByTagName('iframe')[0].src="Photo/bf5.jpg"
	document.querySelector('#crd1').getElementsByTagName('div')[1].children[0].children[0].innerHTML="ss"
	document.querySelector('#crd1').getElementsByTagName('div')[1].children[1].innerHTML="aa"
	document.querySelector('#crd1').getElementsByTagName('div')[1].children[3].innerHTML="bb"



	document.querySelector('#crd2').getElementsByTagName('iframe')[0].src="Photo/bf5.jpg"
	document.querySelector('#crd3').getElementsByTagName('iframe')[0].src="Photo/bf5.jpg"
});	

console.log(document.querySelector('#crd1').getElementsByTagName('div')[1].children[3]);

$(function() {
	// Get page title
	var pageTitle = $("title").text();
	
	// Change page title on blur
	$(window).blur(function() {
	  $("title").text("I waiting for you here 🥺");
	});
	
	// Change page title back on focus
	$(window).focus(function() {
	  $("title").text(pageTitle);
});
});

let rstcd = Math.floor(10000 + Math.random() * 90000)