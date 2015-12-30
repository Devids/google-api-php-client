<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:49 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class ProfileFilterLink extends Model {
    protected $internal_gapi_mappings = array();
    protected $filterRefType = 'FilterRef';
    protected $filterRefDataType = '';
    public $id;
    public $kind;
    protected $profileRefType = 'ProfileRef';
    protected $profileRefDataType = '';
    public $rank;
    public $selfLink;


    public function setFilterRef(FilterRef $filterRef) {
        $this->filterRef = $filterRef;
    }

    public function getFilterRef() {
        return $this->filterRef;
    }

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

    public function setProfileRef(ProfileRef $profileRef) {
        $this->profileRef = $profileRef;
    }

    public function getProfileRef() {
        return $this->profileRef;
    }

    public function setRank($rank) {
        $this->rank = $rank;
    }

    public function getRank() {
        return $this->rank;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }
}