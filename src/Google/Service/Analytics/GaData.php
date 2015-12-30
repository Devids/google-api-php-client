<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class GaData extends GoogleCollection {
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    protected $columnHeadersType = 'GaDataColumnHeaders';
    protected $columnHeadersDataType = 'array';
    public $containsSampledData;
    protected $dataTableType = 'GaDataDataTable';
    protected $dataTableDataType = '';
    public $id;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    protected $profileInfoType = 'GaDataProfileInfo';
    protected $profileInfoDataType = '';
    protected $queryType = 'GaDataQuery';
    protected $queryDataType = '';
    public $rows;
    public $sampleSize;
    public $sampleSpace;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;


    public function setColumnHeaders($columnHeaders) {
        $this->columnHeaders = $columnHeaders;
    }

    public function getColumnHeaders() {
        return $this->columnHeaders;
    }

    public function setContainsSampledData($containsSampledData) {
        $this->containsSampledData = $containsSampledData;
    }

    public function getContainsSampledData() {
        return $this->containsSampledData;
    }

    public function setDataTable(GaDataDataTable $dataTable) {
        $this->dataTable = $dataTable;
    }

    public function getDataTable() {
        return $this->dataTable;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setItemsPerPage($itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setNextLink($nextLink) {
        $this->nextLink = $nextLink;
    }

    public function getNextLink() {
        return $this->nextLink;
    }

    public function setPreviousLink($previousLink) {
        $this->previousLink = $previousLink;
    }

    public function getPreviousLink() {
        return $this->previousLink;
    }

    public function setProfileInfo(GaDataProfileInfo $profileInfo) {
        $this->profileInfo = $profileInfo;
    }

    public function getProfileInfo() {
        return $this->profileInfo;
    }

    public function setQuery(GaDataQuery $query) {
        $this->query = $query;
    }

    public function getQuery() {
        return $this->query;
    }

    public function setRows($rows) {
        $this->rows = $rows;
    }

    public function getRows() {
        return $this->rows;
    }

    public function setSampleSize($sampleSize) {
        $this->sampleSize = $sampleSize;
    }

    public function getSampleSize() {
        return $this->sampleSize;
    }

    public function setSampleSpace($sampleSpace) {
        $this->sampleSpace = $sampleSpace;
    }

    public function getSampleSpace() {
        return $this->sampleSpace;
    }

    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink() {
        return $this->selfLink;
    }

    public function setTotalResults($totalResults) {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults() {
        return $this->totalResults;
    }

    public function setTotalsForAllResults($totalsForAllResults) {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    public function getTotalsForAllResults() {
        return $this->totalsForAllResults;
    }
}