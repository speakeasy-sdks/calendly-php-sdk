<?php

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
     * getUserAvailabilitySchedules - List User Availability Schedules
     *
     * Returns the availability schedules of the given user.
    */
    public function getUserAvailabilitySchedules(
        \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/user_availability_schedules');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams($request->queryParams));
        
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
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
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
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesErrorResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * getUserAvailabilitySchedulesUuid - Get User Availability Schedule
     *
     * This will return the availability schedule of the given UUID.
    */
    public function getUserAvailabilitySchedulesUuid(
        \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/user_availability_schedules/{uuid}', $request->pathParams);
        
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
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
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
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
        }

        return $response;
    }
    
    /**
     * getUserBusyTimes - List User Busy Times
     *
     * Returns an ascending list of user internal and external scheduled events within a specified date range.
     * 
     * Date range can be no greater than 1 week (7 days).
     * 
     * **NOTE:**
     * * This endpoint does not support traditional keyset pagination.
     * * External events will only be returned for calendars that have "Check for conflicts" configured.
    */
    public function getUserBusyTimes(
        \calendly\calendly\Models\Operations\GetUserBusyTimesRequest $request,
    ): \calendly\calendly\Models\Operations\GetUserBusyTimesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/user_busy_times');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams($request->queryParams));
        
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
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
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
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 424) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse1 = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Shared\ErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUserBusyTimesErrorResponse', 'json');
            }
        }

        return $response;
    }
}