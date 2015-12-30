<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:40 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class CustomDataSource extends GoogleCollection {
    protected $collection_key = 'profilesLinked';
    protected $internal_gapi_mappings = array();
    public $accountId;
    protected $childLinkType = 'CustomDataSourceChildLink';
    protected $childLinkDataType = '';
    public $created;
    public $description;
    public $id;
    public $importBehavior;
    public $kind;
    public $name;
    protected $parentLinkType = 'CustomDataSourceParentLink';
    protected $parentLinkDataType = '';
    public $profilesLinked;
    public $selfLink;
    public $type;
    public $updated;
    public $uploadType;
    public $webPropertyId;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setChildLink(CustomDataSourceChildLink $childLink) {
        $this->childLink = $childLink;
    }

    public function getChildLink() {
        return $this->childLink;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setImportBehavior($importBehavior) {
        $this->importBehavior = $importBehavior;
    }

    public function getImportBehavior() {
        return $this->importBehavior;
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

    public function setParentLink(CustomDataSourceParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }

    public function getParentLink() {
        return $this->parentLink;
    }

    public function setProfilesLinked($profilesLinked) {
        $this->profilesLinked = $profilesLinked;
    }

    public function getProfilesLinked() {
        return $this->profilesLinked;
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

    public function setUploadType($uploadType) {
        $this->uploadType = $uploadType;
    }

    public function getUploadType() {
        return $this->uploadType;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}