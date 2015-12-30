<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:42 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class CustomMetric extends Model {
    protected $internal_gapi_mappings = array(
        "maxValue" => "max_value",
        "minValue" => "min_value",
    );
    public $accountId;
    public $active;
    public $created;
    public $id;
    public $index;
    public $kind;
    public $maxValue;
    public $minValue;
    public $name;
    protected $parentLinkType = 'CustomMetricParentLink';
    protected $parentLinkDataType = '';
    public $scope;
    public $selfLink;
    public $type;
    public $updated;
    public $webPropertyId;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    public function getActive() {
        return $this->active;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setIndex($index) {
        $this->index = $index;
    }

    public function getIndex() {
        return $this->index;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setMaxValue($maxValue) {
        $this->maxValue = $maxValue;
    }

    public function getMaxValue() {
        return $this->maxValue;
    }

    public function setMinValue($minValue) {
        $this->minValue = $minValue;
    }

    public function getMinValue() {
        return $this->minValue;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setParentLink(CustomMetricParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }

    public function getParentLink() {
        return $this->parentLink;
    }

    public function setScope($scope) {
        $this->scope = $scope;
    }

    public function getScope() {
        return $this->scope;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    public function getUpdated() {
        return $this->updated;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}