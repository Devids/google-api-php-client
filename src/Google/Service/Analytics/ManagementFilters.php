<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:34 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "filters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $filters = $analyticsService->filters;
 *  </code>
 */
class ManagementFilters extends Resource {

    /**
     * Delete a filter. (filters.delete)
     *
     * @param string $accountId Account ID to delete the filter for.
     * @param string $filterId ID of the filter to be deleted.
     * @param array $optParams Optional parameters.
     * @return Filter
     */
    public function delete($accountId, $filterId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'filterId' => $filterId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Filter");
    }

    /**
     * Returns a filters to which the user has access. (filters.get)
     *
     * @param string $accountId Account ID to retrieve filters for.
     * @param string $filterId Filter ID to retrieve filters for.
     * @param array $optParams Optional parameters.
     * @return Filter
     */
    public function get($accountId, $filterId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'filterId' => $filterId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Filter");
    }

    /**
     * Create a new filter. (filters.insert)
     *
     * @param string $accountId Account ID to create filter for.
     * @param Google_Filter $postBody
     * @param array $optParams Optional parameters.
     * @return Filter
     */
    public function insert($accountId, Filter $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Filter");
    }

    /**
     * Lists all filters for an account (filters.listManagementFilters)
     *
     * @param string $accountId Account ID to retrieve filters for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of filters to include in this
     * response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return Filters
     */
    public function listManagementFilters($accountId, $optParams = array()) {
        $params = array('accountId' => $accountId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Filters");
    }

    /**
     * Updates an existing filter. This method supports patch semantics.
     * (filters.patch)
     *
     * @param string $accountId Account ID to which the filter belongs.
     * @param string $filterId ID of the filter to be updated.
     * @param Google_Filter $postBody
     * @param array $optParams Optional parameters.
     * @return Filter
     */
    public function patch($accountId, $filterId, Filter $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'filterId' => $filterId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Filter");
    }

    /**
     * Updates an existing filter. (filters.update)
     *
     * @param string $accountId Account ID to which the filter belongs.
     * @param string $filterId ID of the filter to be updated.
     * @param Google_Filter $postBody
     * @param array $optParams Optional parameters.
     * @return Filter
     */
    public function update($accountId, $filterId, Filter $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'filterId' => $filterId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Filter");
    }
}