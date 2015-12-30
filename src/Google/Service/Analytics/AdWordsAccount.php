<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:39 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class AdWordsAccount extends Model {
    protected $internal_gapi_mappings = array();
    public $autoTaggingEnabled;
    public $customerId;
    public $kind;


    public function setAutoTaggingEnabled($autoTaggingEnabled) {
        $this->autoTaggingEnabled = $autoTaggingEnabled;
    }

    public function getAutoTaggingEnabled() {
        return $this->autoTaggingEnabled;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }
}