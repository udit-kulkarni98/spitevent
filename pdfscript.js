
	$(document).ready(function(){
	
		var specialElementHandler = {
			"#editor":function(element,renderer){
				return true;
			}
		};
		$("#genpdf").click(function(){
			var doc=new jsPDF();
			doc.fromHTML($("#elem").html(),15,15,{"width":170,"elementHandlers":specialElementHandler
			});
			doc.save("<?php echo $Name ?>.pdf");
			
		});
	});
	