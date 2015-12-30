<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:48 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class McfDataQuery extends GoogleCollection {
    protected $collection_key = 'sort';
    protected $internal_gapi_mappings = array(
        "endDate" => "end-date",
        "maxResults" => "max-results",
        "startDate" => "start-date",
        "startIndex" => "start-index",
    );
    public $dimensions;
    public $endDate;
    public $filters;
    public $ids;
    public $maxResults;
    public $metrics;
    public $samplingLevel;
    public $segment;
    public $sort;
    public $startDate;
    public $startIndex;


    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }

    public function getDimensions() {
        return $this->dimensions;
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

    public function setIds($ids) {
        $this->ids = $ids;
    }

    public function getIds() {
        return $this->ids;
    }

    public function setMaxResults($maxResults) {
        $this->maxResults = $maxResults;
    }

    public function getMaxResults() {
        return $this->maxResults;
    }

    public function setMetrics($metrics) {
        $this->metrics = $metrics;
    }

    public function getMetrics() {
        return $this->metrics;
    }

    public function setSamplingLevel($samplingLevel) {
        $this->samplingLevel = $samplingLevel;
    }

    public function getSamplingLevel() {
        return $this->samplingLevel;
    }

    public function setSegment($segment) {
        $this->segment = $segment;
    }

    public function getSegment() {
        return $this->segment;
    }

    public function setSort($sort) {
        $this->sort = $sort;
    }

    public function getSort() {
        return $this->sort;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartIndex($startIndex) {
        $this->startIndex = $startIndex;
    }

    public function getStartIndex() {
        return $this->startIndex;
    }
}