<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:40 PM
 */
namespace Google\Service\Analytics;

use Google\GoogleCollection;

class AnalyticsDataimportDeleteUploadDataRequest extends GoogleCollection {
    protected $collection_key = 'customDataImportUids';
    protected $internal_gapi_mappings = array();
    public $customDataImportUids;


    public function setCustomDataImportUids($customDataImportUids) {
        $this->customDataImportUids = $customDataImportUids;
    }

    public function getCustomDataImportUids() {
        return $this->customDataImportUids;
    }
}