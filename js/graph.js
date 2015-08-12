function _(idname){
	return document.getElementById(idname);
}

function removeClass(cls){
	for (var i = 1 ; i <= 7; i++) {
		$("#gf"+i).removeClass(cls);
	};
	
}

function requestGraph(day){
	var visitor,
		tgl,
		a=0,
		vp;
	$.post("json/graph_view.php",{today:day},function(result){
		// console.log (result);
 		var day= $.parseJSON(result);

 		removeClass("higher-graph");

 		for (var i = 1; i <= 7; i++) {
 			visitor = parseInt(day[i-1].visitor);
 			tgl = day[i-1].date;
 			vp = parseInt(day[i-1].vp);

 			gbheight = 205-((vp*2)+35);
 			gbbottom = (vp*2)+35;
 				
 			if (gbheight < 0) {
 				gbheight = 0;
 			};
 			if (gbbottom > 220) {
 				gbbottom = 220;
 			};

    		$("#d"+i).html(tgl);
    		_("gb"+i).style.bottom = gbbottom+"px";
    		_("gb"+i).style.height = gbheight+"px";

    		_("gf"+i).title = visitor+" visitor";
    		_("gf"+i).style.height = (vp*2)+"px";
    		_("gf"+i).innerHTML = visitor;
    		if (vp == 100) {
    			$("#gf"+i).addClass('higher-graph');
    		};
   		};

   		_("nextGraph").setAttribute('onclick', "requestGraph(\""+day[7].nextWeek+"\")");
   		_("prevGraph").setAttribute('onclick', "requestGraph(\""+day[7].prevWeek+"\")");
   		_("start").innerHTML = day[7].startDate;
   		_("end").innerHTML = day[7].endDate;
   	});
};