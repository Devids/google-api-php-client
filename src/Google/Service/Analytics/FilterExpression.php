<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:45 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class FilterExpression extends Model {
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $expressionValue;
    public $field;
    public $fieldIndex;
    public $kind;
    public $matchType;


    public function setCaseSensitive($caseSensitive) {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive() {
        return $this->caseSensitive;
    }

    public function setExpressionValue($expressionValue) {
        $this->expressionValue = $expressionValue;
    }

    public function getExpressionValue() {
        return $this->expressionValue;
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

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setMatchType($matchType) {
        $this->matchType = $matchType;
    }

    public function getMatchType() {
        return $this->matchType;
    }
}