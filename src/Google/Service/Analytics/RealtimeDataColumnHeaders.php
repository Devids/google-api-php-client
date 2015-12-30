<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:49 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class RealtimeDataColumnHeaders extends Model {
    protected $internal_gapi_mappings = array();
    public $columnType;
    public $dataType;
    public $name;


    public function setColumnType($columnType) {
        $this->columnType = $columnType;
    }

    public function getColumnType() {
        return $this->columnType;
    }

    public function setDataType($dataType) {
        $this->dataType = $dataType;
    }

    public function getDataType() {
        return $this->dataType;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}