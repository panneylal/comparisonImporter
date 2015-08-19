<?php

class Comparison{
    
    // Get xml.
    public function getRecords($xml) {
    $results = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_PARSEHUGE)or die("Error: Cannot create object");
    
        return $results;
    }

	public function save($data){
	
            $model->name = $data['name'];
            $model->description = $data['description'];
            $model->created_at = $data['created_at'];
            $model->updated_at = $data['updated_at'];     
            $model->url = $data['url'];    

	}
	
	public function startParsing($urlFile){
        
            $xmltoparse = file_get_contents($urlFile);
            return $this->getRecords($xmltoparse);
            /*if (save($xmltoparse)){
		return "Saved!";
            }else{
		return "Saving error!";
            }*/
    }

}
