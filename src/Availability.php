<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly;

class Availability 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * List User Availability Schedules
     * 
     * Returns the availability schedules of the given user.
     * 
     * @param \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesRequest $request
     * @return \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesResponse
     */
	public function getUserAvailabilitySchedules(
        \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/user_availability_schedules');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserAvailabilitySchedules200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedules200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserAvailabilitySchedules403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedules403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get User Availability Schedule
     * 
     * This will return the availability schedule of the given UUID.
     * 
     * @param \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidRequest $request
     * @return \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidResponse
     */
	public function getUserAvailabilitySchedulesUuid(
        \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/user_availability_schedules/{uuid}', \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserAvailabilitySchedulesUuid200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuid200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserAvailabilitySchedulesUuid403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuid403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
        }

        return $response;
    }
	
    /**
     * List User Busy Times
     * 
     * Returns an ascending list of user internal and external scheduled events within a specified date range.
     * 
     * Date range can be no greater than 1 week (7 days).
     * 
     * **NOTE:**
     * * This endpoint does not support traditional keyset pagination.
     * * External events will only be returned for calendars that have "Check for conflicts" configured.
     * 
     * @param \calendly\calendly\Models\Operations\GetUserBusyTimesRequest $request
     * @return \calendly\calendly\Models\Operations\GetUserBusyTimesResponse
     */
	public function getUserBusyTimes(
        \calendly\calendly\Models\Operations\GetUserBusyTimesRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserBusyTimesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/user_busy_times');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetUserBusyTimesRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetUserBusyTimesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserBusyTimes200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimes200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUserBusyTimes403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimes403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 424) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse1 = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
}