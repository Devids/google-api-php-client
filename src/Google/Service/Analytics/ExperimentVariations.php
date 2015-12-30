<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class ExperimentVariations extends Model {
    protected $internal_gapi_mappings = array();
    public $name;
    public $status;
    public $url;
    public $weight;
    public $won;


    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWon($won) {
        $this->won = $won;
    }

    public function getWon() {
        return $this->won;
    }
}