<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:50 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class UnsampledReportDriveDownloadDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $documentId;


    public function setDocumentId($documentId) {
        $this->documentId = $documentId;
    }

    public function getDocumentId() {
        return $this->documentId;
    }
}