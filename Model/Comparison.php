<?php

class Comparison{
    
    // Get xml.
    public function getRecords($xml) {
    $results = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_PARSEHUGE)or die("Error: Cannot create object");
    
        return $results;
    }

	public function save($data){
	
            $model->name = $data['product_id'];
            $model->name = $data['name'];
            $model->name = $data['description'];
            $model->name = $data['created_at'];
            $model->name = $data['updated_at'];     
            $model->name = $data['url'];    

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
