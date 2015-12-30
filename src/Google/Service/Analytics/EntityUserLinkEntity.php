<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class EntityUserLinkEntity extends Model {
    protected $internal_gapi_mappings = array();
    protected $accountRefType = 'AccountRef';
    protected $accountRefDataType = '';
    protected $profileRefType = 'ProfileRef';
    protected $profileRefDataType = '';
    protected $webPropertyRefType = 'WebPropertyRef';
    protected $webPropertyRefDataType = '';


    public function setAccountRef(AccountRef $accountRef) {
        $this->accountRef = $accountRef;
    }

    public function getAccountRef() {
        return $this->accountRef;
    }

    public function setProfileRef(ProfileRef $profileRef) {
        $this->profileRef = $profileRef;
    }

    public function getProfileRef() {
        return $this->profileRef;
    }

    public function setWebPropertyRef(WebPropertyRef $webPropertyRef) {
        $this->webPropertyRef = $webPropertyRef;
    }

    public function getWebPropertyRef() {
        return $this->webPropertyRef;
    }
}