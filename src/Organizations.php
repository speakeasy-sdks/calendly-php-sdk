<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly;

class Organizations 
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
     * Remove User from Organization
     * 
     * Removes a user from an organization.
     * 
     * Notes:
     * 
     * * To remove users, the caller must have admin rights for the organization
     * 
     * * An organization owner can’t be removed
     * 
     * @param \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsRequest $request
     * @return \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsResponse
     */
	public function deleteOrganizationsUuidMemberships(
        \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsRequest $request,
    ): \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organization_memberships/{uuid}', \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsErrorResponse', 'json');
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
     * List Organization Memberships
     * 
     * Use this to list the Organization Memberships for all users belonging to an organization, use:
     * 
     * * `user` to look up a user's membership in an organization
     * 
     * * `organization` to look up all users that belong to the organization
     * 
     * This endpoint can also be used to retrieve your organization URI.
     * 
     * @param \calendly\calendly\Models\Operations\GetOrganizationMembershipsRequest $request
     * @return \calendly\calendly\Models\Operations\GetOrganizationMembershipsResponse
     */
	public function getOrganizationMemberships(
        \calendly\calendly\Models\Operations\GetOrganizationMembershipsRequest $request,
    ): \calendly\calendly\Models\Operations\GetOrganizationMembershipsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organization_memberships');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetOrganizationMembershipsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetOrganizationMembershipsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrganizationMemberships200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationMemberships200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationMembershipsErrorResponse', 'json');
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
     * Get Organization Invitation
     * 
     * Returns an Organization Invitation that was sent to the organization's members.
     * 
     * @param \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidRequest $request
     * @return \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidResponse
     */
	public function getOrganizationsOrgUuidInvitationsUuid(
        \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidRequest $request,
    ): \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organizations/{org_uuid}/invitations/{uuid}', \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrganizationsOrgUuidInvitationsUuid200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuid200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List Organization Invitations
     * 
     * Returns a list of Organization Invitations that were sent to the organization's members.
     * 
     * @param \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsRequest $request
     * @return \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsResponse
     */
	public function getOrganizationsUuidInvitations(
        \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsRequest $request,
    ): \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organizations/{uuid}/invitations', \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrganizationsUuidInvitations200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsUuidInvitations200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get Organization Membership
     * 
     * Returns information about a user's Organization Membership
     * 
     * @param \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsRequest $request
     * @return \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsResponse
     */
	public function getOrganizationsUuidMemberships(
        \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsRequest $request,
    ): \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organization_memberships/{uuid}', \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrganizationsUuidMemberships200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsUuidMemberships200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\GetOrganizationsUuidMembershipsErrorResponse', 'json');
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
     * Invite User to Organization
     * 
     * 	
     * Invites a user to an organization.
     * 
     * @param \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsRequest $request
     * @return \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsResponse
     */
	public function postOrganizationsUuidInvitations(
        \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsRequest $request,
    ): \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organizations/{uuid}/invitations', \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postOrganizationsUuidInvitations201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostOrganizationsUuidInvitations201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Shared\ErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse1 = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postOrganizationsUuidInvitations403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\PostOrganizationsUuidInvitations403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Revoke User's Organization Invitation
     * 
     * Use this to revoke an Organization Invitation to an organization. Once revoked, the invitation link that was sent to the invitee is no longer valid.
     * 
     * @param \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationRequest $request
     * @return \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationResponse
     */
	public function revokeUsersOrganizationInvitation(
        \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationRequest $request,
    ): \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/organizations/{org_uuid}/invitations/{uuid}', \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Shared\ErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse1 = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitationErrorResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->revokeUsersOrganizationInvitation403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'calendly\calendly\Models\Operations\RevokeUsersOrganizationInvitation403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}