<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class GetOrganizationsOrgUuidInvitationsUuidResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidErrorResponse $errorResponse
     */
	
    public ?GetOrganizationsOrgUuidInvitationsUuidErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuid200ApplicationJSON $getOrganizationsOrgUuidInvitationsUuid200ApplicationJSONObject
     */
	
    public ?GetOrganizationsOrgUuidInvitationsUuid200ApplicationJSON $getOrganizationsOrgUuidInvitationsUuid200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getOrganizationsOrgUuidInvitationsUuid200ApplicationJSONObject = null;
	}
}
