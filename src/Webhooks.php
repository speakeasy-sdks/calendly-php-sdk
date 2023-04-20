<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly;

class Webhooks 
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
     * Create Webhook Subscription
     * 
     * Create a Webhook Subscription for an Organization or User.
     * 
     * * The `organization` subscription scope triggers the webhook for all subscribed events within the organization.
     * * The `user` subscription scope only triggers the webhook for subscribed events that belong to the specific user.
     * 
     * | Event | Allowed Subscription Scopes |
     * | ----- | --------------------------- |
     * | <pre>invitee.created</pre> | `organization` `user` |
     * | <pre>invitee.canceled</pre> | `organization` `user` |
     * | <pre>routing_form_submission.created</pre> | `organization` <br /> <small>Create separate Webhook Subscriptions for events with different subscription scopes.</small> |
     * 
     * @param \calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBody $request
     * @return \calendly\calendly\Models\Operations\PostUsersUuidWebhooksResponse
     */
	public function create(
        \calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBody $request,
    ): \calendly\calendly\Models\Operations\PostUsersUuidWebhooksResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/webhook_subscriptions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostUsersUuidWebhooksResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postUsersUuidWebhooks201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostUsersUuidWebhooks201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostUsersUuidWebhooksErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postUsersUuidWebhooks403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostUsersUuidWebhooks403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete Webhook Subscription
     * 
     * Delete a Webhook Subscription.
     * 
     * @param \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidRequest $request
     * @return \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidResponse
     */
	public function delete(
        \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidRequest $request,
    ): \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/webhook_subscriptions/{webhook_uuid}', \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get Webhook Subscription
     * 
     * Get a specified Webhook Subscription.
     * 
     * @param \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidRequest $request
     * @return \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidResponse
     */
	public function get(
        \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/webhook_subscriptions/{webhook_uuid}', \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getUsersUserUuidWebhooksWebhookUuid200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuid200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List Webhook Subscriptions
     * 
     * Get a list of Webhook Subscriptions for a specified Organization or User.
     * 
     * @param \calendly\calendly\Models\Operations\ListWebhooksRequest $request
     * @return \calendly\calendly\Models\Operations\ListWebhooksResponse
     */
	public function list(
        \calendly\calendly\Models\Operations\ListWebhooksRequest $request,
    ): \calendly\calendly\Models\Operations\ListWebhooksResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/webhook_subscriptions');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\ListWebhooksRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\ListWebhooksResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listWebhooks200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ListWebhooks200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ListWebhooksErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listWebhooks403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\ListWebhooks403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}