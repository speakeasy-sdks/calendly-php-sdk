<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostOrganizationsUuidInvitationsResponse
{
    public string $contentType;
    
    public ?PostOrganizationsUuidInvitationsErrorResponse $errorResponse1 = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostOrganizationsUuidInvitations201ApplicationJSON $postOrganizationsUuidInvitations201ApplicationJSONObject = null;
    
    public ?PostOrganizationsUuidInvitations403ApplicationJSON $postOrganizationsUuidInvitations403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse1 = null;
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postOrganizationsUuidInvitations201ApplicationJSONObject = null;
		$this->postOrganizationsUuidInvitations403ApplicationJSONObject = null;
	}
}
