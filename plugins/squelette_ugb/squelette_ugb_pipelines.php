<?php

function squelette_ugb_insertion_in_head($flux) {
	
	//print_r($GLOBALS["page"]["texte"])
	
    $flux .= "<script type=\"text/javascript\" src=\"" . find_in_path('js/jquery.s3slider.js') . "\"></script>
    ";
    return $flux;
	
}

?>
