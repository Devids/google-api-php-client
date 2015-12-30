<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class GaDataDataTableCols extends Model {
    protected $internal_gapi_mappings = array();
    public $id;
    public $label;
    public $type;


    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}