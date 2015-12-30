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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $accounts = $analyticsService->accounts;
 *  </code>
 */
class ManagementAccounts extends Resource {

    /**
     * Lists all accounts to which the user has access.
     * (accounts.listManagementAccounts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of accounts to include in this
     * response.
     * @opt_param int start-index An index of the first account to retrieve. Use
     * this parameter as a pagination mechanism along with the max-results
     * parameter.
     * @return Accounts
     */
    public function listManagementAccounts($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Accounts");
    }
}