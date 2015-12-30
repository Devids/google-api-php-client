<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:39 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class AccountTicket extends Model {
    protected $internal_gapi_mappings = array();
    protected $accountType = 'Account';
    protected $accountDataType = '';
    public $id;
    public $kind;
    protected $profileType = 'Profile';
    protected $profileDataType = '';
    public $redirectUri;
    protected $webpropertyType = 'Webproperty';
    protected $webpropertyDataType = '';


    public function setAccount(Account $account) {
        $this->account = $account;
    }

    public function getAccount() {
        return $this->account;
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

    public function setProfile(Profile $profile) {
        $this->profile = $profile;
    }

    public function getProfile() {
        return $this->profile;
    }

    public function setRedirectUri($redirectUri) {
        $this->redirectUri = $redirectUri;
    }

    public function getRedirectUri() {
        return $this->redirectUri;
    }

    public function setWebproperty(Webproperty $webproperty) {
        $this->webproperty = $webproperty;
    }

    public function getWebproperty() {
        return $this->webproperty;
    }
}