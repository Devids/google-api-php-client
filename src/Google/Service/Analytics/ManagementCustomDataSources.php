<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:33 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "customDataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $customDataSources = $analyticsService->customDataSources;
 *  </code>
 */
class ManagementCustomDataSources extends Resource {

    /**
     * List custom data sources to which the user has access.
     * (customDataSources.listManagementCustomDataSources)
     *
     * @param string $accountId Account Id for the custom data sources to retrieve.
     * @param string $webPropertyId Web property Id for the custom data sources to
     * retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom data sources to
     * include in this response.
     * @opt_param int start-index A 1-based index of the first custom data source to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return CustomDataSources
     */
    public function listManagementCustomDataSources($accountId, $webPropertyId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "CustomDataSources");
    }
}