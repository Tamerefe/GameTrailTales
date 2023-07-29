


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

// $(document).ready(function(){
// 	$("i.chan2").click(function(){
// 		$(".chan2").toggleClass("fa-toggle-on");
// 		$(".bg-dark").toggleClass("bg-light");
// 		$(".bg-light").toggleClass("bg-dark");
// 		$(".text-light").toggleClass("text-dark");
// 		$(".text-dark").toggleClass("text-light");
// 		$(".page").toggleClass("paged");
// 	});
// });

$(document).ready(function(){
	// FIRST
	$("i.chan2").click(function(){
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
		$(".tx-wt").addClass("tx-bt");
		$(".tx-bt").removeClass("tx-wt");
		$(".page").addClass("paged");
		$(".paged").removeClass("page");
		$(".line").addClass("lineb");
		$(".lineb").removeClass("line");

		// SECOND
		$("i.chan3").click(function(){
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
			$(".tx-bt").addClass("tx-wt");
			$(".tx-wt").removeClass("tx-bt");
			$(".paged").addClass("page");
			$(".page").removeClass("paged");
			$(".lineb").addClass("line");
			$(".line").removeClass("lineb");

			// THIRD
			$("i.chan2").click(function(){
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
				$(".tx-wt").addClass("tx-bt");
				$(".tx-bt").removeClass("tx-wt");
				$(".page").addClass("paged");
				$(".paged").removeClass("page");
				$(".line").addClass("lineb");
				$(".lineb").removeClass("line");
		
				// FOURTH
				$("i.chan3").click(function(){
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
					$(".tx-bt").addClass("tx-wt");
					$(".tx-wt").removeClass("tx-bt");
					$(".paged").addClass("page");
					$(".page").removeClass("paged");
					$(".lineb").addClass("line");
					$(".line").removeClass("lineb");
				});
			});	
		});
	});	
});


$(document).ready(function(){
	//FIRST
	$("i.chan4").click(function(){
		$(".chan4").addClass("fa-angle-double-up");
		$(".chan4").removeClass("fa-angle-double-down");
		$(".chan4").addClass("chan5");
		$(".chan5").removeClass("chan4");

		//SECOND
		$("i.chan5").click(function(){
			$(".chan5").addClass("fa-angle-double-down");
			$(".chan5").removeClass("fa-angle-double-up");
			$(".chan5").addClass("chan4");
			$(".chan4").removeClass("chan5");

			//THIRD
			$("i.chan4").click(function(){
				$(".chan4").addClass("fa-angle-double-up");
				$(".chan4").removeClass("fa-angle-double-down");
				$(".chan4").addClass("chan5");
				$(".chan5").removeClass("chan4");
		
				//FORTH
				$("i.chan5").click(function(){
					$(".chan5").addClass("fa-angle-double-down");
					$(".chan5").removeClass("fa-angle-double-up");
					$(".chan5").addClass("chan4");
					$(".chan4").removeClass("chan5");
				});	
			});	
		});	
	});	
});