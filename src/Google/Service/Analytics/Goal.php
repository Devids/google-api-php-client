<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:47 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class Goal extends Model {
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $active;
    public $created;
    protected $eventDetailsType = 'GoalEventDetails';
    protected $eventDetailsDataType = '';
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $name;
    protected $parentLinkType = 'GoalParentLink';
    protected $parentLinkDataType = '';
    public $profileId;
    public $selfLink;
    public $type;
    public $updated;
    protected $urlDestinationDetailsType = 'GoalUrlDestinationDetails';
    protected $urlDestinationDetailsDataType = '';
    public $value;
    protected $visitNumPagesDetailsType = 'GoalVisitNumPagesDetails';
    protected $visitNumPagesDetailsDataType = '';
    protected $visitTimeOnSiteDetailsType = 'GoalVisitTimeOnSiteDetails';
    protected $visitTimeOnSiteDetailsDataType = '';
    public $webPropertyId;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    public function getActive() {
        return $this->active;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setEventDetails(GoalEventDetails $eventDetails) {
        $this->eventDetails = $eventDetails;
    }

    public function getEventDetails() {
        return $this->eventDetails;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setInternalWebPropertyId($internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
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

    public function setParentLink(GoalParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }

    public function getParentLink() {
        return $this->parentLink;
    }

    public function setProfileId($profileId) {
        $this->profileId = $profileId;
    }

    public function getProfileId() {
        return $this->profileId;
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

    public function setUrlDestinationDetails(GoalUrlDestinationDetails $urlDestinationDetails) {
        $this->urlDestinationDetails = $urlDestinationDetails;
    }

    public function getUrlDestinationDetails() {
        return $this->urlDestinationDetails;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setVisitNumPagesDetails(GoalVisitNumPagesDetails $visitNumPagesDetails) {
        $this->visitNumPagesDetails = $visitNumPagesDetails;
    }

    public function getVisitNumPagesDetails() {
        return $this->visitNumPagesDetails;
    }

    public function setVisitTimeOnSiteDetails(GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails) {
        $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
    }

    public function getVisitTimeOnSiteDetails() {
        return $this->visitTimeOnSiteDetails;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}