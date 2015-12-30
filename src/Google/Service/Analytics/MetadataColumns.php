<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:38 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "columns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $columns = $analyticsService->columns;
 *  </code>
 */
class MetadataColumns extends Resource {

    /**
     * Lists all columns for a report type (columns.listMetadataColumns)
     *
     * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga'
     * corresponds to the Core Reporting API
     * @param array $optParams Optional parameters.
     * @return Columns
     */
    public function listMetadataColumns($reportType, $optParams = array()) {
        $params = array('reportType' => $reportType);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Columns");
    }
}