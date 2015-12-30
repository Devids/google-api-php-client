<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class GoalUrlDestinationDetailsSteps extends Model {
    protected $internal_gapi_mappings = array();
    public $name;
    public $number;
    public $url;


    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}