<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class GoalUrlDestinationDetails extends GoogleCollection {
    protected $collection_key = 'steps';
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $firstStepRequired;
    public $matchType;
    protected $stepsType = 'GoalUrlDestinationDetailsSteps';
    protected $stepsDataType = 'array';
    public $url;


    public function setCaseSensitive($caseSensitive) {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive() {
        return $this->caseSensitive;
    }

    public function setFirstStepRequired($firstStepRequired) {
        $this->firstStepRequired = $firstStepRequired;
    }

    public function getFirstStepRequired() {
        return $this->firstStepRequired;
    }

    public function setMatchType($matchType) {
        $this->matchType = $matchType;
    }

    public function getMatchType() {
        return $this->matchType;
    }

    public function setSteps($steps) {
        $this->steps = $steps;
    }

    public function getSteps() {
        return $this->steps;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}