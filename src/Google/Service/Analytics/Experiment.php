<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class Experiment extends GoogleCollection {
    protected $collection_key = 'variations';
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $created;
    public $description;
    public $editableInGaUi;
    public $endTime;
    public $equalWeighting;
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $minimumExperimentLengthInDays;
    public $name;
    public $objectiveMetric;
    public $optimizationType;
    protected $parentLinkType = 'ExperimentParentLink';
    protected $parentLinkDataType = '';
    public $profileId;
    public $reasonExperimentEnded;
    public $rewriteVariationUrlsAsOriginal;
    public $selfLink;
    public $servingFramework;
    public $snippet;
    public $startTime;
    public $status;
    public $trafficCoverage;
    public $updated;
    protected $variationsType = 'ExperimentVariations';
    protected $variationsDataType = 'array';
    public $webPropertyId;
    public $winnerConfidenceLevel;
    public $winnerFound;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
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

    public function setEditableInGaUi($editableInGaUi) {
        $this->editableInGaUi = $editableInGaUi;
    }

    public function getEditableInGaUi() {
        return $this->editableInGaUi;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEqualWeighting($equalWeighting) {
        $this->equalWeighting = $equalWeighting;
    }

    public function getEqualWeighting() {
        return $this->equalWeighting;
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

    public function setMinimumExperimentLengthInDays($minimumExperimentLengthInDays) {
        $this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
    }

    public function getMinimumExperimentLengthInDays() {
        return $this->minimumExperimentLengthInDays;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setObjectiveMetric($objectiveMetric) {
        $this->objectiveMetric = $objectiveMetric;
    }

    public function getObjectiveMetric() {
        return $this->objectiveMetric;
    }

    public function setOptimizationType($optimizationType) {
        $this->optimizationType = $optimizationType;
    }

    public function getOptimizationType() {
        return $this->optimizationType;
    }

    public function setParentLink(ExperimentParentLink $parentLink) {
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

    public function setReasonExperimentEnded($reasonExperimentEnded) {
        $this->reasonExperimentEnded = $reasonExperimentEnded;
    }

    public function getReasonExperimentEnded() {
        return $this->reasonExperimentEnded;
    }

    public function setRewriteVariationUrlsAsOriginal($rewriteVariationUrlsAsOriginal) {
        $this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
    }

    public function getRewriteVariationUrlsAsOriginal() {
        return $this->rewriteVariationUrlsAsOriginal;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }

    public function setServingFramework($servingFramework) {
        $this->servingFramework = $servingFramework;
    }

    public function getServingFramework() {
        return $this->servingFramework;
    }

    public function setSnippet($snippet) {
        $this->snippet = $snippet;
    }

    public function getSnippet() {
        return $this->snippet;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setTrafficCoverage($trafficCoverage) {
        $this->trafficCoverage = $trafficCoverage;
    }

    public function getTrafficCoverage() {
        return $this->trafficCoverage;
    }

    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    public function getUpdated() {
        return $this->updated;
    }

    public function setVariations($variations) {
        $this->variations = $variations;
    }

    public function getVariations() {
        return $this->variations;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }

    public function setWinnerConfidenceLevel($winnerConfidenceLevel) {
        $this->winnerConfidenceLevel = $winnerConfidenceLevel;
    }

    public function getWinnerConfidenceLevel() {
        return $this->winnerConfidenceLevel;
    }

    public function setWinnerFound($winnerFound) {
        $this->winnerFound = $winnerFound;
    }

    public function getWinnerFound() {
        return $this->winnerFound;
    }
}