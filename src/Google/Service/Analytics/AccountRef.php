<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:39 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class AccountRef extends Model {
    protected $internal_gapi_mappings = array();
    public $href;
    public $id;
    public $kind;
    public $name;


    public function setHref($href) {
        $this->href = $href;
    }

    public function getHref() {
        return $this->href;
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
}