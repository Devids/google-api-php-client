<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class GoalEventDetails extends GoogleCollection {
    protected $collection_key = 'eventConditions';
    protected $internal_gapi_mappings = array();
    protected $eventConditionsType = 'GoalEventDetailsEventConditions';
    protected $eventConditionsDataType = 'array';
    public $useEventValue;


    public function setEventConditions($eventConditions) {
        $this->eventConditions = $eventConditions;
    }

    public function getEventConditions() {
        return $this->eventConditions;
    }

    public function setUseEventValue($useEventValue) {
        $this->useEventValue = $useEventValue;
    }

    public function getUseEventValue() {
        return $this->useEventValue;
    }
}