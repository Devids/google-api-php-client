<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:49 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class ProfilePermissions extends GoogleCollection {
    protected $collection_key = 'effective';
    protected $internal_gapi_mappings = array();
    public $effective;


    public function setEffective($effective) {
        $this->effective = $effective;
    }

    public function getEffective() {
        return $this->effective;
    }
}