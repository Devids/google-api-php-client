<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:42 PM
 */
namespace Google\Service\Analytics;

use Google\Model;

class EntityAdWordsLinkEntity extends Model {
    protected $internal_gapi_mappings = array();
    protected $webPropertyRefType = 'WebPropertyRef';
    protected $webPropertyRefDataType = '';


    public function setWebPropertyRef(WebPropertyRef $webPropertyRef) {
        $this->webPropertyRef = $webPropertyRef;
    }

    public function getWebPropertyRef() {
        return $this->webPropertyRef;
    }
}