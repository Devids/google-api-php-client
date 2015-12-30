<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class FilterSearchAndReplaceDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $field;
    public $fieldIndex;
    public $replaceString;
    public $searchString;


    public function setCaseSensitive($caseSensitive) {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive() {
        return $this->caseSensitive;
    }

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

    public function setReplaceString($replaceString) {
        $this->replaceString = $replaceString;
    }

    public function getReplaceString() {
        return $this->replaceString;
    }

    public function setSearchString($searchString) {
        $this->searchString = $searchString;
    }

    public function getSearchString() {
        return $this->searchString;
    }
}