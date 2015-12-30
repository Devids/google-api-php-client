<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:44 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class Filter extends Model {
    protected $internal_gapi_mappings = array();
    public $accountId;
    protected $advancedDetailsType = 'FilterAdvancedDetails';
    protected $advancedDetailsDataType = '';
    public $created;
    protected $excludeDetailsType = 'FilterExpression';
    protected $excludeDetailsDataType = '';
    public $id;
    protected $includeDetailsType = 'FilterExpression';
    protected $includeDetailsDataType = '';
    public $kind;
    protected $lowercaseDetailsType = 'FilterLowercaseDetails';
    protected $lowercaseDetailsDataType = '';
    public $name;
    protected $parentLinkType = 'FilterParentLink';
    protected $parentLinkDataType = '';
    protected $searchAndReplaceDetailsType = 'FilterSearchAndReplaceDetails';
    protected $searchAndReplaceDetailsDataType = '';
    public $selfLink;
    public $type;
    public $updated;
    protected $uppercaseDetailsType = 'FilterUppercaseDetails';
    protected $uppercaseDetailsDataType = '';


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setAdvancedDetails(FilterAdvancedDetails $advancedDetails) {
        $this->advancedDetails = $advancedDetails;
    }

    public function getAdvancedDetails() {
        return $this->advancedDetails;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setExcludeDetails(FilterExpression $excludeDetails) {
        $this->excludeDetails = $excludeDetails;
    }

    public function getExcludeDetails() {
        return $this->excludeDetails;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setIncludeDetails(FilterExpression $includeDetails) {
        $this->includeDetails = $includeDetails;
    }

    public function getIncludeDetails() {
        return $this->includeDetails;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setLowercaseDetails(FilterLowercaseDetails $lowercaseDetails) {
        $this->lowercaseDetails = $lowercaseDetails;
    }

    public function getLowercaseDetails() {
        return $this->lowercaseDetails;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setParentLink(FilterParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }

    public function getParentLink() {
        return $this->parentLink;
    }

    public function setSearchAndReplaceDetails(FilterSearchAndReplaceDetails $searchAndReplaceDetails) {
        $this->searchAndReplaceDetails = $searchAndReplaceDetails;
    }

    public function getSearchAndReplaceDetails() {
        return $this->searchAndReplaceDetails;
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

    public function setUppercaseDetails(FilterUppercaseDetails $uppercaseDetails) {
        $this->uppercaseDetails = $uppercaseDetails;
    }

    public function getUppercaseDetails() {
        return $this->uppercaseDetails;
    }
}