<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class EntityUserLinkPermissions extends GoogleCollection {
    protected $collection_key = 'local';
    protected $internal_gapi_mappings = array();
    public $effective;
    public $local;


    public function setEffective($effective) {
        $this->effective = $effective;
    }

    public function getEffective() {
        return $this->effective;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function getLocal() {
        return $this->local;
    }
}