<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:48 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class McfDataRowsConversionPathValue extends Model {
    protected $internal_gapi_mappings = array();
    public $interactionType;
    public $nodeValue;


    public function setInteractionType($interactionType) {
        $this->interactionType = $interactionType;
    }

    public function getInteractionType() {
        return $this->interactionType;
    }

    public function setNodeValue($nodeValue) {
        $this->nodeValue = $nodeValue;
    }

    public function getNodeValue() {
        return $this->nodeValue;
    }
}