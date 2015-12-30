<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:43 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class EntityUserLinks extends GoogleCollection {
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'EntityUserLink';
    protected $itemsDataType = 'array';
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;


    public function setItems($items) {
        $this->items = $items;
    }

    public function getItems() {
        return $this->items;
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

    public function setStartIndex($startIndex) {
        $this->startIndex = $startIndex;
    }

    public function getStartIndex() {
        return $this->startIndex;
    }

    public function setTotalResults($totalResults) {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults() {
        return $this->totalResults;
    }
}