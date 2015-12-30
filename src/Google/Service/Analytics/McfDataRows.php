<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:48 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class McfDataRows extends GoogleCollection {
    protected $collection_key = 'conversionPathValue';
    protected $internal_gapi_mappings = array();
    protected $conversionPathValueType = 'McfDataRowsConversionPathValue';
    protected $conversionPathValueDataType = 'array';
    public $primitiveValue;


    public function setConversionPathValue($conversionPathValue) {
        $this->conversionPathValue = $conversionPathValue;
    }

    public function getConversionPathValue() {
        return $this->conversionPathValue;
    }

    public function setPrimitiveValue($primitiveValue) {
        $this->primitiveValue = $primitiveValue;
    }

    public function getPrimitiveValue() {
        return $this->primitiveValue;
    }
}