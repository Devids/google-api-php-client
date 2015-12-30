<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:45 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class FilterParentLink extends Model {
    protected $internal_gapi_mappings = array();
    public $href;
    public $type;


    public function setHref($href) {
        $this->href = $href;
    }

    public function getHref() {
        return $this->href;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}