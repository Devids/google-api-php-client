<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:50 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class Segment extends Model {
    protected $internal_gapi_mappings = array();
    public $created;
    public $definition;
    public $id;
    public $kind;
    public $name;
    public $segmentId;
    public $selfLink;
    public $type;
    public $updated;


    public function setCreated($created) {
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setDefinition($definition) {
        $this->definition = $definition;
    }

    public function getDefinition() {
        return $this->definition;
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

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setSegmentId($segmentId) {
        $this->segmentId = $segmentId;
    }

    public function getSegmentId() {
        return $this->segmentId;
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
}