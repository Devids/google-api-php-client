<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:50 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class UnsampledReportCloudStorageDownloadDetails extends Model {
    protected $internal_gapi_mappings = array();
    public $bucketId;
    public $objectId;


    public function setBucketId($bucketId) {
        $this->bucketId = $bucketId;
    }

    public function getBucketId() {
        return $this->bucketId;
    }

    public function setObjectId($objectId) {
        $this->objectId = $objectId;
    }

    public function getObjectId() {
        return $this->objectId;
    }
}