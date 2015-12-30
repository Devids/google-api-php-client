<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:49 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class RealtimeData extends GoogleCollection {
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    protected $columnHeadersType = 'RealtimeDataColumnHeaders';
    protected $columnHeadersDataType = 'array';
    public $id;
    public $kind;
    protected $profileInfoType = 'RealtimeDataProfileInfo';
    protected $profileInfoDataType = '';
    protected $queryType = 'RealtimeDataQuery';
    protected $queryDataType = '';
    public $rows;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;


    public function setColumnHeaders($columnHeaders) {
        $this->columnHeaders = $columnHeaders;
    }

    public function getColumnHeaders() {
        return $this->columnHeaders;
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

    public function setProfileInfo(RealtimeDataProfileInfo $profileInfo) {
        $this->profileInfo = $profileInfo;
    }

    public function getProfileInfo() {
        return $this->profileInfo;
    }

    public function setQuery(RealtimeDataQuery $query) {
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