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
	
	public function init($urlFile){
        
        $size = strlen(file_get_contents($urlFile))/1048576;
        if ($size > 0.11 && $size < 2000.00 ){
            $xmltoparse = file_get_contents($urlFile);
            $this->save();
            
            return $this->getRecords($xmltoparse);
        }else echo "Błędny rozmiar pliku: Dopuszczalny przedział od 500mb do 2gb.";
    }

}
