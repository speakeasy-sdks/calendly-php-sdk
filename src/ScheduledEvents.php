<?php

declare(strict_types=1);

namespace calendly\calendly;

class ScheduledEvents 
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
     * deleteInviteeNoShow - Delete Invitee No Show
     *
     * Undoes marking an Invitee as a No Show.
     * @param \calendly\calendly\Models\Operations\DeleteInviteeNoShowRequest $request
    */
    public function deleteInviteeNoShow(
        \calendly\calendly\Models\Operations\DeleteInviteeNoShowRequest $request,
    ): \calendly\calendly\Models\Operations\DeleteInviteeNoShowResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/invitee_no_shows/{uuid}', \calendly\calendly\Models\Operations\DeleteInviteeNoShowPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\DeleteInviteeNoShowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\DeleteInviteeNoShowErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getScheduledEventsEventUuidInviteesInviteeUuid - Get Event Invitee
     *
     * Returns information about a specified Invitee (person invited to an event).
     * @param \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidRequest $request
    */
    public function getScheduledEventsEventUuidInviteesInviteeUuid(
        \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{event_uuid}/invitees/{invitee_uuid}', \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse1 = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getScheduledEventsUuid - Get Event
     *
     * Returns information about a specified Event.
     * @param \calendly\calendly\Models\Operations\GetScheduledEventsUuidRequest $request
    */
    public function getScheduledEventsUuid(
        \calendly\calendly\Models\Operations\GetScheduledEventsUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetScheduledEventsUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{uuid}', \calendly\calendly\Models\Operations\GetScheduledEventsUuidPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetScheduledEventsUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduledEventsUuid200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsUuid200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsUuidErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduledEventsUuid403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsUuid403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getInviteeNoShow - Get Invitee No Show
     *
     * Returns information about a specified Invitee No Show.
     * @param \calendly\calendly\Models\Operations\GetInviteeNoShowRequest $request
    */
    public function getInviteeNoShow(
        \calendly\calendly\Models\Operations\GetInviteeNoShowRequest $request,
    ): \calendly\calendly\Models\Operations\GetInviteeNoShowResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/invitee_no_shows/{uuid}', \calendly\calendly\Models\Operations\GetInviteeNoShowPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetInviteeNoShowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getInviteeNoShow200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetInviteeNoShow200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetInviteeNoShowErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getInvitees - List Event Invitees
     *
     * Returns a list of Invitees for an event.
     * @param \calendly\calendly\Models\Operations\GetInviteesRequest $request
    */
    public function getInvitees(
        \calendly\calendly\Models\Operations\GetInviteesRequest $request,
    ): \calendly\calendly\Models\Operations\GetInviteesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{uuid}/invitees', \calendly\calendly\Models\Operations\GetInviteesPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetInviteesQueryParams::class, $request->queryParams, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetInviteesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getInvitees200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetInvitees200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetInviteesErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getInvitees403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetInvitees403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getScheduledEvents - List Events
     *
     * Returns a list of  Events.
     * 
     * * Pass `organization` parameter to return events for that organization (requires admin/owner privilege)
     * * Pass `user` parameter to return events for a specific User
     * 
     * **NOTES:**
     * * If you are the admin/owner of the organization, you can use both `organization` and `user` to get a list of events for a specific user within your organization.
     * 
     * * `user` can only be used alone when requesting your own personal events. This will return your events within any organization that you are currently in or were a part of in the past.
     * @param \calendly\calendly\Models\Operations\GetScheduledEventsRequest $request
    */
    public function getScheduledEvents(
        \calendly\calendly\Models\Operations\GetScheduledEventsRequest $request,
    ): \calendly\calendly\Models\Operations\GetScheduledEventsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetScheduledEventsQueryParams::class, $request->queryParams, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetScheduledEventsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduledEvents200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEvents200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEventsErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduledEvents403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetScheduledEvents403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * postScheduledEventsUuidCancellationJson - Cancel Event
     *
     * Cancels specified event.
     * @param \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJsonRequest $request
    */
    public function postScheduledEventsUuidCancellationJson(
        \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJsonRequest $request,
    ): \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJsonResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{uuid}/cancellation', \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJsonResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationJSON201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJSON201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJsonErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationJSON403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationJSON403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * postScheduledEventsUuidCancellationMultipart - Cancel Event
     *
     * Cancels specified event.
     * @param \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipartRequest $request
    */
    public function postScheduledEventsUuidCancellationMultipart(
        \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipartRequest $request,
    ): \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipartResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{uuid}/cancellation', \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "multipart");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipartResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationMultipart201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipart201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipartErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationMultipart403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipart403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * postScheduledEventsUuidCancellationRaw - Cancel Event
     *
     * Cancels specified event.
     * @param \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRawRequest $request
    */
    public function postScheduledEventsUuidCancellationRaw(
        \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRawRequest $request,
    ): \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRawResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/scheduled_events/{uuid}/cancellation', \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "raw");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRawResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationRaw201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRaw201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRawErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postScheduledEventsUuidCancellationRaw403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRaw403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * postInviteeNoShow - Create Invitee No Show
     *
     * Marks an Invitee as a No Show.
     * @param \calendly\calendly\Models\Operations\PostInviteeNoShowRequest $request
    */
    public function postInviteeNoShow(
        \calendly\calendly\Models\Operations\PostInviteeNoShowRequest $request,
    ): \calendly\calendly\Models\Operations\PostInviteeNoShowResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/invitee_no_shows');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostInviteeNoShowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postInviteeNoShow201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostInviteeNoShow201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostInviteeNoShowErrorResponse', 'json');
            }
        }

        return $response;
    }
}