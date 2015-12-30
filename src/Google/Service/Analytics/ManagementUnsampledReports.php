<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:37 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "unsampledReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $unsampledReports = $analyticsService->unsampledReports;
 *  </code>
 */
class ManagementUnsampledReports extends Resource {

    /**
     * Returns a single unsampled report. (unsampledReports.get)
     *
     * @param string $accountId Account ID to retrieve unsampled report for.
     * @param string $webPropertyId Web property ID to retrieve unsampled reports
     * for.
     * @param string $profileId View (Profile) ID to retrieve unsampled report for.
     * @param string $unsampledReportId ID of the unsampled report to retrieve.
     * @param array $optParams Optional parameters.
     * @return UnsampledReport
     */
    public function get($accountId, $webPropertyId, $profileId, $unsampledReportId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'unsampledReportId' => $unsampledReportId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "UnsampledReport");
    }

    /**
     * Create a new unsampled report. (unsampledReports.insert)
     *
     * @param string $accountId Account ID to create the unsampled report for.
     * @param string $webPropertyId Web property ID to create the unsampled report
     * for.
     * @param string $profileId View (Profile) ID to create the unsampled report
     * for.
     * @param Google_UnsampledReport $postBody
     * @param array $optParams Optional parameters.
     * @return UnsampledReport
     */
    public function insert($accountId, $webPropertyId, $profileId, UnsampledReport $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "UnsampledReport");
    }

    /**
     * Lists unsampled reports to which the user has access.
     * (unsampledReports.listManagementUnsampledReports)
     *
     * @param string $accountId Account ID to retrieve unsampled reports for. Must
     * be a specific account ID, ~all is not supported.
     * @param string $webPropertyId Web property ID to retrieve unsampled reports
     * for. Must be a specific web property ID, ~all is not supported.
     * @param string $profileId View (Profile) ID to retrieve unsampled reports for.
     * Must be a specific view (profile) ID, ~all is not supported.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of unsampled reports to include
     * in this response.
     * @opt_param int start-index An index of the first unsampled report to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return UnsampledReports
     */
    public function listManagementUnsampledReports($accountId, $webPropertyId, $profileId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "UnsampledReports");
    }
}