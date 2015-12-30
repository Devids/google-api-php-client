<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:40 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class Column extends Model {
    protected $internal_gapi_mappings = array();
    public $attributes;
    public $id;
    public $kind;


    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

    public function getAttributes() {
        return $this->attributes;
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
}