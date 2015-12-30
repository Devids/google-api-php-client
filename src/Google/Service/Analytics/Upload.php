<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:50 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class Upload extends GoogleCollection {
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $customDataSourceId;
    public $errors;
    public $id;
    public $kind;
    public $status;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setCustomDataSourceId($customDataSourceId) {
        $this->customDataSourceId = $customDataSourceId;
    }

    public function getCustomDataSourceId() {
        return $this->customDataSourceId;
    }

    public function setErrors($errors) {
        $this->errors = $errors;
    }

    public function getErrors() {
        return $this->errors;
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

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }
}