<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:31 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "ga" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $ga = $analyticsService->ga;
 *  </code>
 */
class AnDataGaResource extends Resource {

    /**
     * Returns Analytics data for a view (profile). (ga.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is
     * of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $startDate Start date for fetching Analytics data. Requests can
     * specify a start date formatted as YYYY-MM-DD, or as a relative date (e.g.,
     * today, yesterday, or 7daysAgo). The default value is 7daysAgo.
     * @param string $endDate End date for fetching Analytics data. Request can
     * should specify an end date formatted as YYYY-MM-DD, or as a relative date
     * (e.g., today, yesterday, or 7daysAgo). The default value is yesterday.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g.,
     * 'ga:sessions,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of entries to include in this
     * feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that
     * determine the sort order for Analytics data.
     * @opt_param string dimensions A comma-separated list of Analytics dimensions.
     * E.g., 'ga:browser,ga:city'.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @opt_param string segment An Analytics segment to be applied to data.
     * @opt_param string samplingLevel The desired sampling level.
     * @opt_param string filters A comma-separated list of dimension or metric
     * filters to be applied to Analytics data.
     * @opt_param string output The selected format for the response. Default format
     * is JSON.
     * @return Google_Service_Analytics_GaData
     */
    public function get($ids, $startDate, $endDate, $metrics, $optParams = array()) {
        $params = array('ids' => $ids, 'start-date' => $startDate, 'end-date' => $endDate, 'metrics' => $metrics);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Analytics_GaData");
    }
}