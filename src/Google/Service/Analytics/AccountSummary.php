<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:39 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class AccountSummary extends GoogleCollection {
    protected $collection_key = 'webProperties';
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $name;
    protected $webPropertiesType = 'WebPropertySummary';
    protected $webPropertiesDataType = 'array';


    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setWebProperties($webProperties) {
        $this->webProperties = $webProperties;
    }

    public function getWebProperties() {
        return $this->webProperties;
    }
}