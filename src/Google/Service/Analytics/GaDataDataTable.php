<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:46 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class GaDataDataTable extends GoogleCollection {
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    protected $colsType = 'GaDataDataTableCols';
    protected $colsDataType = 'array';
    protected $rowsType = 'GaDataDataTableRows';
    protected $rowsDataType = 'array';


    public function setCols($cols) {
        $this->cols = $cols;
    }

    public function getCols() {
        return $this->cols;
    }

    public function setRows($rows) {
        $this->rows = $rows;
    }

    public function getRows() {
        return $this->rows;
    }
}