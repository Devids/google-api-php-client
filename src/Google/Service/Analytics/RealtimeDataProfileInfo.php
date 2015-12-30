<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:49 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class RealtimeDataProfileInfo extends Model {
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $internalWebPropertyId;
    public $profileId;
    public $profileName;
    public $tableId;
    public $webPropertyId;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setInternalWebPropertyId($internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }

    public function setProfileId($profileId) {
        $this->profileId = $profileId;
    }

    public function getProfileId() {
        return $this->profileId;
    }

    public function setProfileName($profileName) {
        $this->profileName = $profileName;
    }

    public function getProfileName() {
        return $this->profileName;
    }

    public function setTableId($tableId) {
        $this->tableId = $tableId;
    }

    public function getTableId() {
        return $this->tableId;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}