﻿function overlay_disable(targetID, divID, bShowProcessing, offsetBy) {
	try {
		//debugger;
		if ($("#" + divID).length == 0) {
			bShowProcessing = true;
			if (typeof (offsetBy) == 'undefined') offsetBy = 0;
			var maskURLNew = 'GlassEffect.png';
			var maskURLOld = 'whiteMask.gif';
			// If a string was passed as targetID, then find the node.
			// If it's not a string, assume it is a passed node.
			if (typeof (targetID) == 'string') var target = document.getElementById(targetID);
			else var target = targetID;

			// Get a handle to the main document body
			var bodies = document.getElementsByTagName('BODY');
			var base = bodies[0];

			// Get the position and dimensions of the target element
			var top = overlay_getElementTop(target) + offsetBy;
			var left = overlay_getElementLeft(target);
			var height = target.offsetHeight;
			var width = target.offsetWidth;
			//alert(top+" ## " +left+" ## " +height+" ## " +width);
			// Use maskURLOld if the browser is IE6 or less
			var bImage = maskURLNew;
			//    var bVer = navigator.appVersion;
			//    ver = bVer.match(/MSIE ([0-9])+/);
			//    if (ver != null) {
			//        if (ver[1] != undefined) {
			//            vNum = (ver[1] - 0);
			//            if (vNum <= 6) bImage = maskURLOld;
			//        }
			//    }

			// Create the new div and attribute it accordingly
			var newDiv = document.createElement('DIV');
			newDiv.id = divID;
			newDiv.style.position = 'absolute';
			newDiv.style.zIndex = '1000000';
			newDiv.style.top = top - 11 + 'px';
			newDiv.style.left = left - 14 + 'px';
			newDiv.style.height = height + 26 + 'px';
			newDiv.style.width = width + 28 + 'px';
			//newDiv.style.backgroundImage = 'url("' + CaseStructureAppPath + '/Images/' + bImage + '")';
			//newDiv.style.backgroundRepeat = 'repeat';
			if (bShowProcessing) {
				// newDiv.innerHTML = '<div style="display:block; height:100%; width:100%;"><img src="' + appPath + '/Images/GlassEffect.png" height="100%" width="100%"></div><div style="position:absolute; top:50%; left:50%; margin:-16px 0px 0px -16px;"><img src="' + appPath + '/Images/loader.gif"></div>';
			} else {
				newDiv.innerHTML = '&nbsp;';
			}
			$(newDiv).attr("targetID", target.id);
			$(newDiv).attr("offsetBy", offsetBy);

			// Add the div to the main body and we're done
			base.appendChild(newDiv);
			var opts = {
				lines: 12, // The number of lines to draw
				length: 7, // The length of each line
				width: 3, // The line thickness
				radius: 6, // The radius of the inner circle
				color: '#000', // #rgb or #rrggbb
				speed: 1.2, // Rounds per second
				trail: 60, // Afterglow percentage
				shadow: false // Whether to render a shadow
			};
			$(newDiv).show().spin(opts);

			$(newDiv).attr("timerId", setTimeout(function () { overlay_disableUpdateAuto($(newDiv)); }, 1000));
			//	$(newDiv).spin(opts);
		}
	} catch (err) { }
}

function overlay_disableUpdateAuto(pdiv) {
	try {
		var offsetBy = pdiv.attr("offsetBy");
		var targetID = pdiv.attr("targetID");
		if (typeof (offsetBy) == 'undefined') offsetBy = 0;
		offsetBy = eval(offsetBy);
		if (typeof (targetID) == 'string') var target = document.getElementById(targetID);
		else var target = targetID;


		// Get the position and dimensions of the target element
		var top = overlay_getElementTop(target) + offsetBy;
		var left = overlay_getElementLeft(target);
		var height = target.offsetHeight;
		var width = target.offsetWidth;

		// Create the new div and attribute it accordingly
		var newDiv = pdiv.get(0);
		newDiv.style.top = top - 11 + 'px';
		newDiv.style.left = left - 14 + 'px';
		newDiv.style.height = height + 26 + 'px';
		newDiv.style.width = width + 28 + 'px';
		$(newDiv).attr("timerId", setTimeout(function () { overlay_disableUpdateAuto($(newDiv)); }, 1000));
	} catch (err) { }
}

function overlay_disableUpdate(divID, nHeight) {
	return;
	if (nHeight == undefined) nHeight = 0;
	var dDiv = $("#" + divID);
	if (dDiv.length == 0) return;

	target = document.getElementById(dDiv.attr("targetID"));

	// Get a handle to the main document body
	var bodies = document.getElementsByTagName('BODY');
	var base = bodies[0];
	var offsetBy = dDiv.attr("offsetBy");
	// Get the position and dimensions of the target element
	var top = overlay_getElementTop(target) + eval(offsetBy);
	var left = overlay_getElementLeft(target);
	var height = target.offsetHeight + nHeight;
	var width = target.offsetWidth;

	// Create the new div and attribute it accordingly
	var newDiv = dDiv.get(0);
	newDiv.id = divID;
	newDiv.style.position = 'absolute';
	newDiv.style.zIndex = '1000000';
	newDiv.style.top = top - 11 + 'px';
	newDiv.style.left = left - 14 + 'px';
	newDiv.style.height = height + 26 + 'px';
	newDiv.style.width = width + 28 + 'px';
	dDiv.show();
}

function overlay_enabled(divID) {
	try {
		if ($("#" + divID).length > 0) {
			var bodies = document.getElementsByTagName('BODY');
			var base = bodies[0];
			var newDiv = document.getElementById(divID);
			if (newDiv != null) {
				var t = $(newDiv).attr("timerId");
				if (t) clearTimeout(t);
				//    	$(newDiv).spin(false);
				base.removeChild(newDiv);
			}
		}
	} catch (err) { }
}

function overlay_getElementLeft(obj) {
	var curleft = 0;
	if (obj.offsetParent) {
		while (true) {
			curleft += obj.offsetLeft;
			if (!obj.offsetParent) { break; }
			obj = obj.offsetParent;
		}
	} else if (obj.x) { curleft += obj.x; }
	return curleft;
}
function overlay_getElementTop(obj) {
	var curtop = 0;
	if (obj.offsetParent) {
		while (true) {
			curtop += obj.offsetTop;
			if (!obj.offsetParent) { break; }
			obj = obj.offsetParent;
		}
	} else if (obj.y) { curtop += obj.y; }
	return curtop;
}