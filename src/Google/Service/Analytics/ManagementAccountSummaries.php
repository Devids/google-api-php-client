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
 * The "accountSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $accountSummaries = $analyticsService->accountSummaries;
 *  </code>
 */
class ManagementAccountSummaries extends Resource {

    /**
     * Lists account summaries (lightweight tree comprised of
     * accounts/properties/profiles) to which the user has access.
     * (accountSummaries.listManagementAccountSummaries)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of account summaries to include
     * in this response, where the largest acceptable value is 1000.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return AccountSummaries
     */
    public function listManagementAccountSummaries($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "AccountSummaries");
    }
}