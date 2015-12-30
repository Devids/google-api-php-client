<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:42 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class EntityAdWordsLink extends GoogleCollection {
    protected $collection_key = 'profileIds';
    protected $internal_gapi_mappings = array();
    protected $adWordsAccountsType = 'AdWordsAccount';
    protected $adWordsAccountsDataType = 'array';
    protected $entityType = 'EntityAdWordsLinkEntity';
    protected $entityDataType = '';
    public $id;
    public $kind;
    public $name;
    public $profileIds;
    public $selfLink;


    public function setAdWordsAccounts($adWordsAccounts) {
        $this->adWordsAccounts = $adWordsAccounts;
    }

    public function getAdWordsAccounts() {
        return $this->adWordsAccounts;
    }

    public function setEntity(EntityAdWordsLinkEntity $entity) {
        $this->entity = $entity;
    }

    public function getEntity() {
        return $this->entity;
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

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setProfileIds($profileIds) {
        $this->profileIds = $profileIds;
    }

    public function getProfileIds() {
        return $this->profileIds;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }
}