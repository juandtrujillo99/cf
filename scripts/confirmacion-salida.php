<script type="text/javascript">
	var areYouReallySure = false;
	function areYouSure() {
	    if(allowPrompt){
	        if (!areYouReallySure && true) {
	            areYouReallySure = true;
	            var confMessage = "¿Quieres salir sin terminar de crear la cuenta? Si sales ahora perderás el progreso que hayas hecho.";
	            return confMessage;
	        }
	    }else{
	        allowPrompt = true;
	    }
	}

	var allowPrompt = true;
	window.onbeforeunload = areYouSure;
</script>