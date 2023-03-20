<?php

declare(strict_types=1);

namespace calendly\calendly;

class ActivityLog 
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
     * activityLog - List activity log entries
     *
     * <!-- theme: info -->
     *   > This endpoint requires an <strong>Enterprise</strong> subscription.
     * 
     * Returns a list of activity log entries
     * @param \calendly\calendly\Models\Operations\ActivityLogRequest $request
    */
    public function activityLog(
        \calendly\calendly\Models\Operations\ActivityLogRequest $request,
    ): \calendly\calendly\Models\Operations\ActivityLogResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/activity_log_entries');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\ActivityLogQueryParams::class, $request->queryParams, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\ActivityLogResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->activityLog200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ActivityLog200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ActivityLogErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->activityLog403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ActivityLog403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}