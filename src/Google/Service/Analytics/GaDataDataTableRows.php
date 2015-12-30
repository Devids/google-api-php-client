<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class GaDataDataTableRows extends GoogleCollection {
    protected $collection_key = 'c';
    protected $internal_gapi_mappings = array();
    protected $cType = 'GaDataDataTableRowsC';
    protected $cDataType = 'array';


    public function setC($c) {
        $this->c = $c;
    }

    public function getC() {
        return $this->c;
    }
}