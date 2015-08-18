<?php

class Comparison{
    
    // Get xml.
    public function getRecords($xml) {
    $results = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_PARSEHUGE)or die("Error: Cannot create object");
    
        return $results;
    }

	public function save($data){
		
		/* Tu się zapisze mi do bazy :] */

	}
	
	public function startParsing($urlFile){
        
		$xmltoparse = file_gets_contents($urlFile);
		if (save($xmltoparse)){
		syslog(LOG_INFO, "Save records: END");
		return "Saved!";
		}else{
			return "Saving error!";
		}
    }

}
