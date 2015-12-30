<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class GoalEventDetailsEventConditions extends Model {
    protected $internal_gapi_mappings = array();
    public $comparisonType;
    public $comparisonValue;
    public $expression;
    public $matchType;
    public $type;


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

    public function setExpression($expression) {
        $this->expression = $expression;
    }

    public function getExpression() {
        return $this->expression;
    }

    public function setMatchType($matchType) {
        $this->matchType = $matchType;
    }

    public function getMatchType() {
        return $this->matchType;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}