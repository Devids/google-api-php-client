<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class GoalVisitNumPagesDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $comparisonType;
    public $comparisonValue;


    public function setComparisonType($comparisonType) {
        $this->comparisonType = $comparisonType;
    }

    public function getComparisonType() {
        return $this->comparisonType;
    }

    public function setComparisonValue($comparisonValue) {
        $this->comparisonValue = $comparisonValue;
    }

    public function getComparisonValue() {
        return $this->comparisonValue;
    }
}