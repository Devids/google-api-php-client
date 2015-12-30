<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class FilterUppercaseDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $field;
    public $fieldIndex;


    public function setField($field) {
        $this->field = $field;
    }

    public function getField() {
        return $this->field;
    }

    public function setFieldIndex($fieldIndex) {
        $this->fieldIndex = $fieldIndex;
    }

    public function getFieldIndex() {
        return $this->fieldIndex;
    }
}