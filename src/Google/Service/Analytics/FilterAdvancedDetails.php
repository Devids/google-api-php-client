<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:45 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class FilterAdvancedDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $extractA;
    public $extractB;
    public $fieldA;
    public $fieldAIndex;
    public $fieldARequired;
    public $fieldB;
    public $fieldBIndex;
    public $fieldBRequired;
    public $outputConstructor;
    public $outputToField;
    public $outputToFieldIndex;
    public $overrideOutputField;


    public function setCaseSensitive($caseSensitive) {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive() {
        return $this->caseSensitive;
    }

    public function setExtractA($extractA) {
        $this->extractA = $extractA;
    }

    public function getExtractA() {
        return $this->extractA;
    }

    public function setExtractB($extractB) {
        $this->extractB = $extractB;
    }

    public function getExtractB() {
        return $this->extractB;
    }

    public function setFieldA($fieldA) {
        $this->fieldA = $fieldA;
    }

    public function getFieldA() {
        return $this->fieldA;
    }

    public function setFieldAIndex($fieldAIndex) {
        $this->fieldAIndex = $fieldAIndex;
    }

    public function getFieldAIndex() {
        return $this->fieldAIndex;
    }

    public function setFieldARequired($fieldARequired) {
        $this->fieldARequired = $fieldARequired;
    }

    public function getFieldARequired() {
        return $this->fieldARequired;
    }

    public function setFieldB($fieldB) {
        $this->fieldB = $fieldB;
    }

    public function getFieldB() {
        return $this->fieldB;
    }

    public function setFieldBIndex($fieldBIndex) {
        $this->fieldBIndex = $fieldBIndex;
    }

    public function getFieldBIndex() {
        return $this->fieldBIndex;
    }

    public function setFieldBRequired($fieldBRequired) {
        $this->fieldBRequired = $fieldBRequired;
    }

    public function getFieldBRequired() {
        return $this->fieldBRequired;
    }

    public function setOutputConstructor($outputConstructor) {
        $this->outputConstructor = $outputConstructor;
    }

    public function getOutputConstructor() {
        return $this->outputConstructor;
    }

    public function setOutputToField($outputToField) {
        $this->outputToField = $outputToField;
    }

    public function getOutputToField() {
        return $this->outputToField;
    }

    public function setOutputToFieldIndex($outputToFieldIndex) {
        $this->outputToFieldIndex = $outputToFieldIndex;
    }

    public function getOutputToFieldIndex() {
        return $this->outputToFieldIndex;
    }

    public function setOverrideOutputField($overrideOutputField) {
        $this->overrideOutputField = $overrideOutputField;
    }

    public function getOverrideOutputField() {
        return $this->overrideOutputField;
    }
}