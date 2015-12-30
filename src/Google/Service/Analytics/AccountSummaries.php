<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:39 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class AccountSummaries extends GoogleCollection {
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'AccountSummary';
    protected $itemsDataType = 'array';
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;


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

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}