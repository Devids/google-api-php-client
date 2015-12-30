<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:50 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class UnsampledReport extends Model {
    protected $internal_gapi_mappings = array(
        "endDate" => "end-date",
        "startDate" => "start-date",
    );
    public $accountId;
    protected $cloudStorageDownloadDetailsType = 'UnsampledReportCloudStorageDownloadDetails';
    protected $cloudStorageDownloadDetailsDataType = '';
    public $created;
    public $dimensions;
    public $downloadType;
    protected $driveDownloadDetailsType = 'UnsampledReportDriveDownloadDetails';
    protected $driveDownloadDetailsDataType = '';
    public $endDate;
    public $filters;
    public $id;
    public $kind;
    public $metrics;
    public $profileId;
    public $segment;
    public $selfLink;
    public $startDate;
    public $status;
    public $title;
    public $updated;
    public $webPropertyId;


    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setCloudStorageDownloadDetails(UnsampledReportCloudStorageDownloadDetails $cloudStorageDownloadDetails) {
        $this->cloudStorageDownloadDetails = $cloudStorageDownloadDetails;
    }

    public function getCloudStorageDownloadDetails() {
        return $this->cloudStorageDownloadDetails;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }

    public function getDimensions() {
        return $this->dimensions;
    }

    public function setDownloadType($downloadType) {
        $this->downloadType = $downloadType;
    }

    public function getDownloadType() {
        return $this->downloadType;
    }

    public function setDriveDownloadDetails(UnsampledReportDriveDownloadDetails $driveDownloadDetails) {
        $this->driveDownloadDetails = $driveDownloadDetails;
    }

    public function getDriveDownloadDetails() {
        return $this->driveDownloadDetails;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setFilters($filters) {
        $this->filters = $filters;
    }

    public function getFilters() {
        return $this->filters;
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

    public function setMetrics($metrics) {
        $this->metrics = $metrics;
    }

    public function getMetrics() {
        return $this->metrics;
    }

    public function setProfileId($profileId) {
        $this->profileId = $profileId;
    }

    public function getProfileId() {
        return $this->profileId;
    }

    public function setSegment($segment) {
        $this->segment = $segment;
    }

    public function getSegment() {
        return $this->segment;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    public function getUpdated() {
        return $this->updated;
    }

    public function setWebPropertyId($webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}