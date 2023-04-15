<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class ListOrganizationMembershipsResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\ListOrganizationMembershipsErrorResponse $errorResponse
     */
	
    public ?ListOrganizationMembershipsErrorResponse $errorResponse = null;
    
    /**
     * Caller not authorized to perform this action
     * 
     * @var ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1
     */
	
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\ListOrganizationMemberships200ApplicationJSON $listOrganizationMemberships200ApplicationJSONObject
     */
	
    public ?ListOrganizationMemberships200ApplicationJSON $listOrganizationMemberships200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listOrganizationMemberships200ApplicationJSONObject = null;
	}
}