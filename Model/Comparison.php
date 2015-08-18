<?php

openlog("comparisonLog", LOG_PID | LOG_PERROR, LOG_LOCAL0);

class Comparison{
    
    // Get xml.
    public function getRecords($xml) {
    $results = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_PARSEHUGE)or die("Error: Cannot create object");
    
        return $results;
		syslog(LOG_INFO, "Get products: END");
    }

	public function save($data){
		
		/* Tu się zapisze mi do bazy :] */
		
		syslog(LOG_INFO, "Data saved!");
	}
	
	public function startParsing($urlFile){
        
		$xmltoparse = file_gets_contents($urlFile);
		if (save($xmltoparse)){
		syslog(LOG_INFO, "Save records: END");
		return "Saved!";
		}else{
			return "Saving error!";
			syslog(LOG_ERR, "SAVING ERROR");
		}
    }

}

closelog();
?>
