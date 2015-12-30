<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class EntityUserLink extends Model {
    protected $internal_gapi_mappings = array();
    protected $entityType = 'EntityUserLinkEntity';
    protected $entityDataType = '';
    public $id;
    public $kind;
    protected $permissionsType = 'EntityUserLinkPermissions';
    protected $permissionsDataType = '';
    public $selfLink;
    protected $userRefType = 'UserRef';
    protected $userRefDataType = '';


    public function setEntity(EntityUserLinkEntity $entity) {
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

    public function setPermissions(EntityUserLinkPermissions $permissions) {
        $this->permissions = $permissions;
    }

    public function getPermissions() {
        return $this->permissions;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }

    public function setUserRef(UserRef $userRef) {
        $this->userRef = $userRef;
    }

    public function getUserRef() {
        return $this->userRef;
    }
}