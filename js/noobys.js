function loadzVersion() {
	var zVersionSelect = $("select[name='zversion']").val();
	var zLanguageShortcut = $("input[name='zlangshortcut']").val();
	
	var serverParameter = {zversion: zVersionSelect};
	
	$.getJSON("langpack.php", serverParameter).success( function(srvData) {
		if(typeof srvData["zversion"] !== "undefined")
		{
			alert(srvData["zversion"]);
			$.each(srvData["zlangpack"], function( key, value ) 
			{
				// form-control input-sm
				$("#translationwrap").append("<div class='.container col-sm-12'> <div class='form-group'><label for='zLang"+key+"_"+zLanguageShortcut+"' class='col-sm-4 control-label'>"+key+"</label><div class='col-sm-8'><input type='text' class='form-control input-sm' name='zLang"+key+"_"+zLanguageShortcut+"' id='zLang"+key+"_"+zLanguageShortcut+"' placeholder='Type your translation here...'><span class='help-block'>"+value+"</span></div></div></div>");
			});
		}
	});
}
